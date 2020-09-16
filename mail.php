<?php
 
$send_to= $_POST['email'];
$name=$_POST['urname'];
$msg=$_POST['msg'];
$message='From:'.$send_to.',  Name:'.$name.',  Message:'.$msg;
//echo $send_to.$name.$msg;
if (isset($send_to)) {
        ini_set("SMTP", "relay-hosting.secureserver.net");
        ini_set("smtp_port", "25");
        ini_set("sendmail_from", "info@eshopmarketing.in");


        $from = "From:".$send_to;
        $send_to="info@eshopmarketing.in";
        $subject = "Hiveslab User  Query";
        $message=$message;
        mail($send_to, $subject, $message, $from);
        header("location:index.html");
   
}
 
?>