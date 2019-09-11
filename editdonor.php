<html>
<head>
<title>edit donor</title>
</head>
<body>
<style>
 footer {
    
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
	width:100%;
	bottom:0;
	left:0;
position:fixed;	
}
body{
  background-image: url(".jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    
	
}
fieldset{
  border:0px solid red;
float:left;
}


input[type=text], input[type=password] {
    width: 100%;
    padding: 8px 16px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    
    width: 100%;
}

ul.b {
     list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li.b {
    float: left;
}

li.b a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li.b a:hover {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

div.div1,div.div3
{
border=none;
}
div.div1
{
text-align:left;
}

</style>
<div class="div1">
<h2 style="height:100px;">WELCOME<br>TO<br>DONOR <br>PROFILE</h2>
</div>

<div class="div3">
<ul class="b">
  <li class="b" ><a class="active" href="organiser.php">Add donor</a></li>
 <li class="b"><a href="donorlist.php">Donors list</a></li>
  <li class="b" style="float:right;background-color:red;"><a href="signout.php">Sign out</a></li>
</ul>
</div><br>
<div class="c"> 

<legend><h3 style="color:red">ENTER Phone NO</h3></legend>
  <form method="POST" action="editdonorv.php"> 
 <table border="0" style="table-align:center;">
 <tr> 
 <td>Phone no</td>
 <td> <input type="text" name="phno"></td>
 </tr>
 </table>

<legend><h3 style="color:red">EDIT donor profile</h3></legend>
 <table>
 <td>E-Mail Id*</td>
 <td> <input type="text" name="E-Mail Id"></td> 
 </tr>
 <tr> 
 <td>Name*</td>
 <td> <input type="text" name="name"></td>
 </tr> 
 <tr> 
 <td>Password*</td>
 <td> <input type="password" name="Password"></td>
 </tr> 
 <tr> 
 <td>Confirm Password*</td>
 <td>
 <input type="password" name="Confirm password"></td>
 </tr>
<tr> 
 <td>Country*</td>
 <td>
 <input type="text" name="-Select Country-"></td>
 </tr>
<td>State*</td>
 <td>
 <input type="text" name="-Select State-"></td>
 </tr>
<td>City/District*</td>
 <td>
 <input type="text" name="-Select City/District-"></td>
 </tr>
<tr> 
 <td>Location*</td>
 <td>
 <input type="text" name="Location"></td>
 </tr>
<tr> 
 <td>Pin code*</td>
 <td>
 <input type="number" name="pin"></td>
 </tr>
<td>Blood Group*</td>
 <td>
 <input type="text" name="-Group-"></td>
 </tr>
<tr> 
 <td>Date of Last Donated*</td>
 <td>
 <input type="text" name="Date of Last Donated"></td>
 </tr>
<tr> 
 <td>Age*</td>
 <td>
 <input type="number" name="Age"></td>
 </tr>
<tr> 
 <td>Weight*</td>
 <td>
 <input type="number" name="Weight"></td>
 </tr>
<tr> 
 <td>Gender</td>
 <td>
 <input type="text" name="-Select Gender-"></td>
 </tr>
<td>Phone : Mobile *</td>
 <td>
 <input type="number" name="Phone : Mobile"></td>
 </tr>
 </form> 
 </table>
 
 </div>
 <fieldset>
 <ul><h3 style="color:red">
 <li class="d" ><a  href="organiser.php">Add donor</a></li>
 <li class="d"><a  class="active" href="editdonor.php">Edit donor</a></li>
    <li class="d"><a href="deldonor.php">Remove student</a></li>
 </ul></h3>
 </fieldset>
<br>
 
<footer>developed by 5 Samaritans</footer>
 </body>
</html>

 
 