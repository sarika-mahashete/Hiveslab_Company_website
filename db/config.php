<?php 
$GLOBALS['server']='http://localhost/Eshop2/';
$servername = "localhost";
$username = "root";
$dbname="hives";
$password="";
//Create connection
// $servername = "mysql.hostinger.in";
// $username = "u575986124_hives";
// $password = "ivesLAB*&";
// $dbname="u575986124_hives";
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>


