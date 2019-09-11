<?php

$con=mysqli_connect("localhost","vishal","","crr")or die(mysqli_error());
$c=mysqli_select_db($con,"crr")or die(mysqli_error());
$E-MailId=$_POST['E-MailId'];
$Name=$_POST['Name'];
$Pswd=$_POST['Pswd'];
$Confirm=$_POST['Confirm'];
$Country=$_POST['Country'];
$State=$_POST['State'];
$City=$_POST['City'];
$Location=$_POST['Location'];
$Pin-code=$_POST['Pin-code'];
$Group=$_POST['Group'];
$Date=$_POST['Date'];
$Age=$_POST['Age'];
$Weight=$_POST['Weight'];
$Gender=$_POST['Gender'];
$phno=$_POST['phno'];
if(empty($sname)or empty($sregno)or empty($semail)or empty($sphno) or empty($spassword))
{
?>
<script>
alert("ENTER ALL FIELD VALUES");
document.location="organiser.php";
</script>

<?php

} 
else
{
	$q=mysqli_query($con,"insert into donor(E-MailId,Name,Pswd,Confirm,Country,State,City,Location,Pin-code,Group,Date,Age,Weight,Gender,phno) values('$E-MailId','$Name','$Pswd','$Confirm','$Country','$State','$City','$Location','$Pin-code','$Group','$Date','$Age','$Weight','$Gender','$phno')");
	if($q)
	{
	?>
	<script>
	alert("INSERTION SUCCESSFUL");
	document.location="organiser.php";
	</script>
	<?php
}
else
{
	?>
	<script>
	alert("INSERTION FAILED");
	document.location="organiser.php";
	</script>
	<?php
	}
}
mysqli_close($con);
?>
