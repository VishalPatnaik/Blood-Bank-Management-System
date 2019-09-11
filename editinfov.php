<?php

$con=mysqli_connect("localhost","root","")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysqli_error());
$EMailId=$_POST['EMailId'];
$Pswd=$_POST['Pswd'];
$Date=$_POST['Date'];
$phno=$_POST['phno'];
if(empty($EMailId)or empty($Pswd)or empty($Date)or empty($phno))
{
?>
<script>
alert("ENTER ALL FIELD VALUES");
document.location="editinfo.php";
</script>

<?php

} 
else
{
	$query="update donor set Date='$Date',phno='$phno' where EMailId='$EMailId' && Pswd='$Pswd'";

	$q=mysqli_query($con,$query);
	if($q>0)
	{
	?>
	<script>
	alert("UPDATED SUCCESSFUL"); 
	document.location="editinfo.php";
	</script>
	<?php
}
else
{
	?>
	<script>
	alert("UPDATION FAILED");
	document.location="editinfo.php";
	</script>
	<?php
	}
}
mysqli_close($con);
?>