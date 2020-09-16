<?php    
      
      session_start();
      //error_reporting(0);
      include("../db/config.php");    
         if(isset($_SESSION['admin']))
         {
            
         }
         else {
            echo "<script>window.location.href='index.php';</script>";
          } 
 ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <!-- Tell the browser to be responsive to screen width -->

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="icon" href="../images/LOGO.png" type="image/png" sizes="32x32">
    
    <script src="jquery.js"></script>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        
        <?php include('header.php');?>    

        <?php
  include('sidebar.php');
?>

            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <!-- Content Header (Page header) -->



            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Shop List

                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="index.php">Dashboard</li>
                        <li class="active">Shops</li>
                    </ol>
                </section>
                <!-- <div class="container">
  
                        <div class="row">

                            <div class="col-md-4">


                                <div id="custom-search-input">
                                    <div class="input-group col-md-12">
                                        <input type="text" name ="searchList" id="searchShop" class="form-control input-lg" placeholder="eg. category,subcategory,name,city"  />
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-lg" type="button" onclick="loadDoc1()" style="margin-top: 0px;height:46px;">
                                                <i class="glyphicon glyphicon-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div><br>

                            </div>

                        </div>
                </div> -->
                
                 <section class="content">
      <!-- Info boxes -->
      <div class="row">
          <form class="form-horizontal" action="" method="post">
            <fieldset>

            

            <!-- Password input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="piCurrPass">Old password</label>
              <div class="col-md-4">
                <input id="oldpass" name="oldPass" type="password" placeholder="" class="form-control input-md" required>

              </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="piNewPass">New Password</label>
              <div class="col-md-4">
                <input id="newpass" name="newPass" type="password" placeholder="" class="form-control input-md" required >

              </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="piNewPassRepeat">Confirm</label>
              <div class="col-md-4">
                <input id="cpass" name="cPass" type="password" placeholder="" class="form-control input-md" required disabled>

              </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="bCancel"></label>
              <div class="col-md-8">
                <input type="submit" id="bGodkend" name="submit" class="btn btn-success" value="Change">
                <input type="reset" id="bCancel" name="bCancel" class="btn btn-danger">
              </div>
            </div>

            </fieldset>
          </form>

      </div>
      <!-- /.row -->



    </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->


            <footer class="main-footer">
                <!--div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div-->
                <strong>Copyright &copy;</strong> All rights reserved.
            </footer>


    </div>

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    <div class="modal modal-primary" id="sendSms">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Send Sms to Ownwer</h4>
              </div>
              <div class="modal-body">
                <form action="send-sms-to-shop.php" method="post">
          <div class="form-group">
            <label for="Number">Mobile No:</label>
            <input type="text" class="form-control" name="" id="smsNumber" disabled="">
            <input type="hidden" class="form-control" name="mobileNumber" id="smsNumberHidden">
          </div>
          <div class="form-group">
            <label for="Number">Message:</label>
            <textarea class="form-control" name="detail" id="smsDetail" required=""></textarea> 
          </div>
           <button type="submit" class="btn btn-outline" name="sendSms">Send Sms</button>
        </form>  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
               
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        

<!-- ==================================================================== -->

    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <script>
  $(document).ready(function()
  {
    $('#oldpass').focusout(function()
    {
      //alert();
      var oldpass=$(this).val();
      if(oldpass!='')
      {
        $.ajax({
          type:'post',
          url:'check-old-pass.php',
          data:{'postPass':oldpass},
          success:function(data)
          {
            
            if(data==1){
              $('#cpass').prop("disabled", false);
            }
            else
            {
              alert(data);
            }
          }
        });  
      }
      else
      {
        alert('Please enter your old password');
      }
    });
  });
</script>
</html>

<?php
  if(isset($_POST['submit']))
  {
    $old_text=mysqli_real_escape_string($conn,$_POST['oldPass']);
    $new_text=mysqli_real_escape_string($conn,$_POST['newPass']);
    $c_text=mysqli_real_escape_string($conn,$_POST['cPass']);
    if($c_text==$new_text)
    {
      $str_update_pass="UPDATE admin SET password='".$c_text."'";
      if(mysqli_query($conn,$str_update_pass))
      {
        session_destroy();
        echo "<script>window.location.href='index.php'</script>";
      }
      else
      {
        echo"<script>alert('Error in password updation');</script>";
      }
    }
    else
    {
      echo"<script>alert('password mismatch');</script>";
    }
  }
?>