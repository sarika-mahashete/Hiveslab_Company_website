<?php    
      include("../db/config.php");
        
      session_start();
      error_reporting(0);
         if(isset($_SESSION['admin']))
         {
            include("../db/config.php");
         }
         else {
            echo "<script>window.location.href='../../index.php';</script>";
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
    

<!--       Table Start -->
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       <div class='box'>
            <div class='box-header'>
              <h3 class='box-title'>Shop Lists </h3>
            </div>
            <!-- /.box-header -->
            
             <div class='box-body table-responsive no-padding'>
              <table class='table table-hover table-bordered'>
                  <tr>
                    <th>Sr.no</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Apply for</th>
                    <th>career objective</th>
                    <th>Date</th>
                    <th>Acknowledgement</th>
                    
                  </tr>
                  <?php 
                
                   $sql="select * from application order by id desc";
                   //echo $sql;
                   $res=mysqli_query($conn, $sql);
                   if(mysqli_num_rows($res)<=0)
                   { ?>
                       <tr>
                       <td>No Record found</td>
                       </tr>
                   <?php    
                   }
                   else
                   { 
                    $count='';
                   while($row=mysqli_fetch_array($res))
                   {
                    ++$count;
                  ?>
                  <tr>
                      <td><?php echo $count;?></td>
                      <td><?php echo $row['name'];?></td>
                     
                      <td><?php echo $row['email'];?></td>
                      <td><?php echo $row['phone'];?></td>
                      <td><?php echo $row['applyfor'];?></td>
                      <td><?php echo $row['message'];?></td>
                      <td><?php echo $row['reg_date'];?></td>
                                                              
                     <td>
                      <a href="download.php?nama=<?php echo $row['resume']; ?>" class="btn btn-primary btn-xs " style="" >Download Resumes</a>&nbsp;
                     
                    
                     
                      &nbsp;<button class='btn btn-danger  btn-xs' id='deleteBtn' type='button' data-delete-id="<?php echo $row['id'];?>">DELETE</button> 

                      </td> 
                  </tr>
                  <?php 
                    }//while
                  }//else
                  ?>  
               </table>
              </div>
              <!-- /.box-body -->
      
          </div>

     


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

        
<!--        End-->
        <!-- Main content -->


  <footer class="main-footer">
    <!--div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div-->
    <strong>Copyright &copy;</strong> All rights
    reserved.
  </footer>

    
    </div>
    
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<!-- <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script> -->
<!-- FastClick -->
<!-- <script src="plugins/fastclick/fastclick.js"></script> -->
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
   $(document).on("click","#deleteBtn",function()
    {
      var id=$(this).data('delete-id');
      //alert(id);
        $.ajax(
        {
          type:"POST",
          url:"delete-record.php",
          data:{'postdata':id},
          success:function(data)
          {
            //alert(data); 
            //console.log(data);
            location.reload();
          }
        });
    
    }); 
</script>    
    
</body>
</html>
