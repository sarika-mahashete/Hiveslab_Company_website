<?php
include('db/config.php');
$cname=$_POST['can-name'];
$email=$_POST['can-email'];
$phone=$_POST['can-phone'];
$apply=$_POST['can-apply'];
$msg=$_POST['msg'];

define ("filesplace","doc");

if (is_uploaded_file($_FILES['resume']['tmp_name'])) {

 if ($_FILES['resume']['type'] != "application/pdf") {
 echo "<p>Class notes must be uploaded in PDF format.</p>";
 } 
 else
 {
	 $name = $_POST['can-name'];
	 $result = move_uploaded_file($_FILES['resume']['tmp_name'], filesplace."/$name.pdf");
	 if ($result == 1){
	 	$doc_name=$name.".pdf";
	 	//echo "<p>Upload done .</p>";
	 	$sql="INSERT INTO `application`(`name`, `email`, `phone`, `applyfor`, `message`, `resume`, `reg_date`) VALUES ('$cname', '$email', '$phone', '$apply', '$msg', '$doc_name', NOW())";
	 	//echo $sql;
		$res=mysqli_query($conn, $sql);
		if($res)
		{
			echo "Record inserted";
			header('Location:index.html');
		}
	 } 
	 else
	 {
	  echo "<p>Sorry, Error happened while uploading . </p>";
	 }
  } #endIF
} #endIF

//$reg_date=date("d/m/Y");
//echo $reg_date;exit();



?>