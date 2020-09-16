<?php
    session_start();
?>
<!DOCTYPE html> 

<html>
<head>

	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../admin/bootstrap/css/bootstrap.min.css">
 
  <link rel="icon" href="../images/LOGO.png" type="image/png" sizes="32x32">    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../admin/bootstrap/js/bootstrap.min.js"></script>
</head>
<body style="background-color:white">		
    
   
    <header>
    <div class ="navbar navbar-inverse navbar-static-top">
	
		<div class ="container">
		
			<b class="active"><a href="../index.html" class ="navbar-brand">
				hiveslab
			</a></b>
			<button class ="navbar-toggle" data-toggle="collapse" data-target =".navHeaderCollapse">
				<span class ="icon-bar"></span>
				<span class ="icon-bar"></span>
				<span class ="icon-bar"></span>
			</button>
		
			<!--div class ="collapse navbar-collapse navHeaderCollapse">
		
				
			
			</div-->
			
		</div>
	
	</div>
    </header>
    <!--Edit Section-->
    <center>
        <div class="container">
            <center><b><h1>Sign In</h1></b>
                <p> Invoice </p></center>
            <hr style="width:60%">
            <div class="row">
              <!-- left column -->
              <!--div class="col-md-5">
                <div class="text-center">
                  <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                  <h6>Upload a different photo...</h6>
                  <input class="form-control" type="file">
                </div>
              </div-->

              <!-- edit form column -->
                
                    
              <div class="col-md-9 personal-info">
                <!--div class="alert alert-info alert-dismissable">
                  <a class="panel-close close" data-dismiss="alert">×</a> 
                  <i class="fa fa-coffee"></i>
                  This is an <strong>.alert</strong>. Use this to show important messages to the user.
                </div>
                <h5>Personal info</h5-->
                  
                <form class="form-horizontal" role="form" action="" method="post">
                <div class="form-group">
                  <label class="col-md-7 control-label"><!-- style="text-align:left"-->User ID :</label>
                    <div class="col-md-5">
                      <input class="form-control" placeholder="Enter User Id" name="userid" type="text" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-7 control-label"> Password :</label>
                    <div class="col-md-5">
                      <input class="form-control" placeholder="Enter Password" name="txtPass" type="password" required>
                    </div>
                  </div><br>
                  <div class="form-group">
                  <!--  <label class="col-md-5 control-label"></label>-->
                    <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-5">
                      <input class="btn btn-primary" value="Submit" type="submit" name="submit">
                      <span></span>&nbsp;&nbsp;&nbsp;&nbsp;
                      <input class="btn btn-default" value="Cancel" type="reset">
                    </div>
                          <!-- <div class="col-md-4"></div>-->
                    </div>
                    </div>
                </form>
				
            </div>  
       </div>
    </div>
</center>
    <!--End-->
</body>
</html>   
<?php
if(isset($_POST['submit']))
{
 include('../db/config.php');
 //echo $_POST['txtId']."<br>".$_POST['txtPass'];
 $str="SELECT * FROM admin WHERE email='".$_POST['userid']."' AND password='".$_POST['txtPass']."'";
 $res=mysqli_query($conn,$str);
 if(mysqli_num_rows($res)>0)
 {
  $row_login=mysqli_fetch_array($res);
  $_SESSION['invoice']=$row_login['id'];
	echo "<script>window.location.href='dashboard.php';</script>";
 }
 else
 {
    echo"<script>alert('invalid user id and password');</script>";
 }
}
?>