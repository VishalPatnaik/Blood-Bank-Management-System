<?php

$con=mysqli_connect("localhost","root","")or die(mysqli_error());
mysqli_select_db($con,"cse")or die(mysqli_error());

	$p=mysqli_query($con,"insert into donor values('','$_POST[EMailId]','$_POST[Name]','$_POST[Pswd]','$_POST[City]','$_POST[Blood]','$_POST[Date]','$_POST[Age]','$_POST[Weight]','$_POST[Gender]','$_POST[phno]')");
	if($p)
	{
	?>
	<script>
	alert("REGISTRATION SUCCESSFUL");
	document.location="blood.php";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("REGISTRATION FAILED");
	document.location="register.php";
	</script>
	<?php
	}
mysqli_close($con);
?>
