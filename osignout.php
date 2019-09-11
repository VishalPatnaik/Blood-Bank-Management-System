<?php
$con=mysqli_connect("localhost","root","")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysqli_error());
session_start();
if(session_destroy())
{
header("Location: blood.php");
}
?>