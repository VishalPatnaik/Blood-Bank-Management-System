<?php
session_start();
$con=mysqli_connect("localhost","root","")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysqli_error());

if(empty($_SESSION)) 
   session_start();

if(!isset($_SESSION['EMailId'])) 
{
   header("Location: donorlogin.php");
   exit;
} 
?>