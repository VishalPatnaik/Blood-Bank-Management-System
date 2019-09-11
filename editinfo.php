<html>
<head>
<title>Edit Donor</title>
</head>
<body>
<style>
input[type=text]
 {
    width: 100%;
    padding: 12px 20px;
    border: 1px solid blue;
}
hr
{
	color:blue;
	border:1px solid blue;
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
	border:3px dotted red;
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
<center><h2 <a class="a" >WELCOME TO DONOR PROFILE</a></h2></center>
</div>
<div class="Div3">
<a class="active" href="donor.php" style="float:left;background-color:blue;">Search</a>
	   <a class="active" href="editinfo.php" style="float:left;background-color:blue;">Edit</a>  
                          
<a class="Logout" href="dsignout.php" style="float:right;background-color:blue;">Signout</a>
</div>
<br>

<fieldset>
<form action="editinfov.php" method="post" > 
<label style="color:blue"><b><h2>Enter EMAIL.</b></label></h2>
    <input type="text" placeholder="Enter EMAIL..." name="EMailId" >
    <label style="color:blue"><b><h2>Enter PASSWORD.</b></label></h2>
    <input type="text" placeholder="Enter PASSWORD..." name="Pswd" >
        <label style="color:blue"><b><h2>Enter last donated date:</b></label></h2>
    <input type="text" placeholder="Date..." name="Date" ><br>
<label style="color:blue"><b><h2>Enter phone number:</b></label></h2>
<input type="text" placeholder="phone..." name="phno" ><br>
    <button type="submit">UPDATE</button>
    
 </form>
</fieldset> 

</div>
<style>
b
{
color: #0000FF;
}
</style><footer><b>developed by 5 Samaritams</b></footer>
</body>
</html>



