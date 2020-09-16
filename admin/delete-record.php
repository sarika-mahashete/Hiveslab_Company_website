<?php
	include('../db/config.php');
	$id=$_POST['postdata'];
	//echo $id;
	$str_delete_cat="DELETE FROM application WHERE id=".$id;
	//echo $str_delete_cat;
	if(mysqli_query($conn,$str_delete_cat))
	{
	   echo "deleted successfully";	
	}
?>