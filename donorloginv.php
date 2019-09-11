
<?php
session_start();
$con=mysqli_connect("localhost","vishal","","crr")or die(mysqli_error());
$c=mysqli_select_db($con,"crr")or die(mysqli_error());
$E-MailId=$_POST['E-MailId'];
$Pswd=$_POST['Pswd'];
$login=mysqli_query($con,"select * from donor where E-MailId=('$E-MailId') and Pswd=('$Pswd')");
$result=mysqli_fetch_array($login);


 if (mysqli_num_rows($result) == 1) {

$_SESSION['E-MailId'] = $_POST['E-MailId'];

 header('Location:donor.php');
}
else {
header('Location:donorlogin.php');
}
?>