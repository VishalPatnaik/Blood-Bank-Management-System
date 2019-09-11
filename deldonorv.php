<?php
$con=mysqli_connect("localhost","root","") or die(mysqli_error());
$c=mysqli_select_db($con,"cse") or die(mysqli_error());
$dno=$_POST['dno'];
if($dno==null)
{
?>
<script>
alert("ENTER ALL FIELD VALUES");
document.location="deldonor.php";
</script>
<?php
} 
else
{
	$q=mysqli_query($con,"delete from donor where dno='$dno'");
	if($q)
	{
	?>
	<script>
	alert("DELETION SUCCESSFUL");
	document.location="deldonor.php";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("DELETION FAILED");
	document.location="deldonor.php";
	</script>
	<?php
	}
}
mysqli_close($con);
?>
