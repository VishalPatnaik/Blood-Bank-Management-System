<html>
<head>
<title>donor</title>
</head>
<body>
<style>

footer {
  padding: 1em;  
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
    background-size: cover;
	}
fieldset
{
	color:black;
	border:2px solid black;
}


.active {
    background-color: blue;
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
  padding: 14px 13px;
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
div.div1
{
text-align:left;
}
</style>
<div class="div1">
<a><center><h2 style="width:40%;height:;">WELCOME TO DONOR PROFILE</h2></center></a>
</div>
<div class="Div3">
	<a class="active" href="donor.php" style="float:left;background-color:blue;">Search</a>
	   <a class="active" href="editinfo.php" style="float:left;background-color:blue;">Edit</a>  
                         
<a class="Logout" href="dsignout.php" style="float:right;background-color:blue;">Signout</a>
	</div>

<center>	
<fieldset>					<div class="search">
<form action="search.php" method="post" > 											<label class="1">Blood Group</label>
						<select required autocomplete="off" ID="Blood" name="Blood">
												<option value="">-Group-</option>
												<option  value="A1+">A1+</option>
												<option  value="A1-">A1-</option>
												<option  value="A2+">A2+</option>
												<option  value="A2-">A2-</option>
												<option  value="B+">B+</option>
												<option  value="B-">B-</option>
												<option  value="A1B+-">A1B+</option>
												<option  value="A1B-">A1B-</option>
												<option  value="A2B+">A2B+</option>
												<option  value="A2B-">A2B-</option>
												<option  value="AB+">AB+</option>
												<option  value="AB-">AB-</option>
												<option  value="O+">O+</option>
												<option  value="O-">O-</option>
												<option  value="A+">A+</option>
												<option  value="A-">A-</option>
												<option  value="Bombay Group">Bombay Group</option>
			
									</select>
<button type="submit">SEARCH</button>								
			</div>		  
</form>
</fieldset>
</center>

<style>
b
{
color: #0000FF;
}
</style><footer><b>developed by 5 Samaritams</b></footer>
</body>
</html>
 