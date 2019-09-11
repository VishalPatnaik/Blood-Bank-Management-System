<?php

$con=mysqli_connect("localhost","root","")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysqli_error());
$dno=$_POST['dno'];
$EMailId=$_POST['EMailId'];
if(empty($dno) or empty($EMailId))
{
?>
<script>
alert("ENTER ALL FIELD VALUES");
document.location="eddonor.php";
</script>

<?php

} 
else
{
	$query="update donor set dno='$dno' where EMailId='$EMailId'";

	$q=mysqli_query($con,$query);
	if($q>0)
	{
	?>
	<script>
	alert("UPDATED SUCCESSFUL"); 
	document.location="eddonor.php";
	</script>
	<?php
}
else
{
	?>
	<script>
	alert("UPDATION FAILED");
	document.location="eddonor.php";
	</script>
	<?php
	}
}
mysqli_close($con);
?>