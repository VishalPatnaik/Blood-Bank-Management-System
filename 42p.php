<html>
<head>
<title>42</title>
</head>
<body>
<style>
input[type=text]
 {
    width: 100%;
    padding: 12px 20px;
    border: 1px solid blue;
}

button {
    background-color: blue;
    color: white;
    padding: 12px 20px;
    width:100%;
}
 footer 
 {
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
	width:100%;
	bottom:0;
	left:0;
	position:fixed;	
}
body
{
	background-image: url(".jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
}
fieldset
{
	border:0px solid red;
	float:right;
}


.Div3{
  overflow: hidden;
  background-color: #000000;
}

.Div3 a {
  float:left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 15px;
}

.Div3 a:hover {
  background-color: #00FFFF;
  color: black;


.Div3 a.active {
    background-color: #00FF00;
    color: white;
}
</style>
<div class="div1">
<center><h2><a class="a" >WELCOME TO ORGANISER PROFILE</a></h2></center>
</div>
<div class="Div3">
<a class href="donor1.php">Donors list</a>
<a class="Saranya" href="47p.php" aria-hidden="true">SARANYA</a>
                          <a class="Sanjana" href="60p.php" aria-hidden="true">SANJANA</a>
						  <a class="Vishal" href="34p.php" aria-hidden="true">VISHAL</a>
                          <a class="Srinivas" href="42p.php" aria-hidden="true">JOE</a>
                          <a class="Madhi" href="200p.php" aria-hidden="true">VIJAY REDDY</a>
<a class="active" href="deldonor.php">Delete Donor</a>
 <a class="active" href="eddonor.php">Edit Donor</a>
                    

 <a class="Logout" href="osignout.php" style="float:right;background-color:blue;">Signout</a>
</div>
 <div class="v" style="color:blue">


<?php
session_start();
$con=mysqli_connect("localhost","root","")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysql_error());
$result=mysqli_query($con,"select * from organiser where ono=4");
echo"<center><table align=center height=70 width=100% border=1>
<br><hr><h2>";
while($row=mysqli_fetch_array($result))
{
echo"<tr>";
echo"<td>".'ono'."</td>";
echo"<td>".$row['ono']."</td></tr>";
echo"<tr>";
echo"<td>".'EMailId'."</td>";
echo"<td>".$row['EMailId']."</td></tr>";
echo"<tr>";
echo"<td>".'Name'."</td>";
echo"<td>".$row['Name']."</td></tr>";
echo"<tr>";
echo"<td>".'Country'."</td>";
echo"<td>".$row['Country']."</td></tr>";
echo"<tr>";
echo"<td>".'State'."</td>";
echo"<td>".$row['State']."</td></tr>";
echo"<tr>";
echo"<td>".'City'."</td>";
echo"<td>".$row['City']."</td></tr>";
echo"<tr>";
echo"<td>".'Location'."</td>";
echo"<td>".$row['Location']."</td></tr>";
echo"<tr>";
echo"<td>".'Pincode'."</td>";
echo"<td>".$row['Pincode']."</td></tr>";
echo"<tr>";
echo"<td>".'Blood'."</td>";
echo"<td>".$row['Blood']."</td></tr>";
echo"<tr>";
echo"<td>".'Date'."</td>";
echo"<td>".$row['Date']."</td></tr>";
echo"<tr>";
echo"<td>".'Age'."</td>";
echo"<td>".$row['Age']."</td></tr>";
echo"<tr>";
echo"<td>".'Weight'."</td>";
echo"<td>".$row['Weight']."</td></tr>";
echo"<tr>";
echo"<td>".'Gender'."</td>";
echo"<td>".$row['Gender']."</td></tr>";
echo"<tr>";
echo"<td>".'phno'."</td>";
echo"<td>".$row['phno']."</td></tr>";
}
echo"</h2></table></center><hr>";

mysqli_close($con);
?>
</div>
<style>
.Srinivas{
		color: blue !important;	

		
	}
b
{
color: #0000FF;
}
</style><footer><b>developed by 5 Samaritams</b></footer>
</body>
</html>
 