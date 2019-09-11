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
if(empty($E-MailId)or empty($Name)or empty($Pswd)or empty($Confirm) or empty($Country)or empty($State)or empty($City)or empty($Location)or empty($Pin-code)or empty($Group)or empty($Date)or empty($Age)or empty($Weight)or empty($Gender)or empty($phno))
{
?>
<script>
alert("ENTER ALL FIELD VALUES");
document.location="editdonor.php";
</script>

<?php
}
else
{
	$q=mysqli_query($con,"UPDATE donor SET E-MailId='$E-MailId',Name='$Name',Country='$Country',State='$State',City='$City',Location='$Location',Pin-code='$Pin-code',Group='$Group', WHERE phno='$phno'");
	if($q)
	{
	?>
	<script>
	alert("EDITED SUCCESSFUL");
	document.location="editdonor.php";
	</script>
	<?php
}
else
{
	?>
	<script>
	alert("EDIT FAILED");
	document.location="editdonor.php";
	</script>
	<?php
	}
}
mysqli_close($con);
?>
