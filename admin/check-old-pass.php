<?php
	include('../db/config.php');
	//echo $_POST['postPass'];
	$str_check_pass="SELECT password FROM admin WHERE password='".$_POST['postPass']."'";
	//echo $str_check_pass;
	$res_check_pass=mysqli_query($conn,$str_check_pass);
	if(mysqli_num_rows($res_check_pass)>0)
	{
		$row_check_pass=mysqli_fetch_array($res_check_pass);
		if($row_check_pass['password']==$_POST['postPass'])
		{
			echo '1';
		}
		else {
			echo "Old password mismatch";
		}
	}
?>