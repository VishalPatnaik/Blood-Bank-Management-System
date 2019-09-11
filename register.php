<html>
<head>
<style type="text/css">
div.org
{
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid blue;
    background-color: black;
}
div.don
{
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid blue;
    float:right;
    background-color: black;
}
div.con
{
padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid blue;
    background-color: black;
}

footer {
  padding: 0.5em;  
    color: white;
    background-color: black;
    clear: left;
border: 1px solid blue;
    text-align: center;
	width:100%;
	bottom:0;
	left:0;
	position:fixed;
}
fieldset{
  border:0px solid red;
float:right;
}
body{
  background-image: url("b5.jpg");
   height:100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	}
.Div2{
  background-image: url(".jpg");
   height:100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	}

.Div3{
  overflow: hidden;
  background-color: #000000;
border: 1px solid blue;
width:100%;
}

.Div3 a {
  float:left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 12px 18px;
  text-decoration: none;
  font-size: 19px;
border: 1px solid blue;
}

.Div3 a:hover {
  background-color: #00FFFF;
  color: black;

}
.Div3 a.active {
    background-color: #00FF00;
    color: white;
}
</style>
</head>
<body>
	<div class="Div3">
 <a class="Home" href="blood.php" aria-hidden="true">Home</a>
                          <a class="Register" href="register.php" aria-hidden="true">Register</a>
	       <a class="WhoNeedsBlood" href="who needs blood.php" aria-hidden="true">Who?</a>
						  <a class="WhyDonateBlood" href="why donate blood.php" aria-hidden="true">Why?</a>
                          <a class="Benifits" href="benifits.php" aria-hidden="true">What did they gain?</a>
                          <a class="TipsOnDonating" href="tips.php" aria-hidden="true">Tips on donating blood</a>
                          <a class="MostNeededBlood" href="most needed blood.php" aria-hidden="true">Most needed blood</a>
                          
                          <a class="ContactUs" href="contact.php" aria-hidden="true">Contact Us</a>
	</div>		  
					
					
<div class="org">
<h3><a href="organiser.php">ORGANISER</a><h3>
</div> 
  
<div class="don">
<h3><a href="donorlogin.php">DONOR</a><h3>
</div>   							
                        </form>
					</div>					
                			
		
		 <center><div class="row">
     											<h2> Donor Registration </h2>								
							</div>			<form role="form" method="POST" action="registerv.php" name="registerForm"  id="registerForm">	
						<div class="Div2">					<label class="1"> E-Mail Id <span style="color:#d42e2e;">*</span></label><br>		<input onkeyup="TovlidateEmailDonar(this.value);" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  placeholder="E-Mail Id" value="" required autocomplete="on" ID="EmailId" name="EMailId">
<br>	
<label class="1">Name <span style="color:#d42e2e;">*</span></label>
<br>
<input type="text" placeholder="Name" value="" required autocomplete="on" ID="Name" name="Name" >
<br>
<label class=1">Password <span style="color:#d42e2e;">*</span> </label>
<br>
<input type="password" placeholder="Password"required autocomplete="on" ID="Pswd" name="Pswd" >
<br>
<label class="1">City <span style="color:#d42e2e;">*</span></label>
<br>
<input placeholder="City/District" type="text" value=""autocomplete="on"  ID="City" name="City">
<br>
<label class="1">Blood Group <span style="color:#d42e2e;">*</span></label>
<br>
<select required autocomplete="on" ID="Group" name="Blood">
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
												</select><br>
<label class="1">Date of Last Donated <span style="color:#d42e2e;">*</span></label><br>
<input type="text" placeholder="Date" value="" required autocomplete="off" name="Date" id="Date" ><br>
<label class="1">Age <span style="color:#d42e2e;">*</span> </label><br>
<input type="text"  placeholder="Age" value="" required autocomplete="on" ID="Age" name="Age"><br>
<label class="1">Weight <span style="color:#d42e2e;">*</span></label><br>
<input type="text"  value="" placeholder="Weight" autocomplete="on" ID="Weight"  name="Weight"><br>			<label class="1">Gender  <span style="color:#d42e2e;">*</span></label><br>
<select required autocomplete="on" ID="Gender" name="Gender">
<option value="">-Gender-</option>
<option  Value="M">Male</option>
                                                 <option  Value="F">Female</option></select>
<br><label class="1">Phone : Mobile <span style="color:#d42e2e;">*</span></label><br>
<input type="text" value=""   maxlength="10"  placeholder="Phone : Mobile" pattern="[0-9]{10}"  required autocomplete="on" ID="Mob" name="phno">		<div class="b" align="center">				<br>			
<button type="submit">Submit</button>

&nbsp;&nbsp;
						<button type="reset">Reset</button>
							</div>
</center>
<style>
.Register{
		color: blue !important;			
	}
p{
 color: cyan;
}
c{
color: #00CC00;
}
u{
color: #0000FF;
}
a{
color: #0000FF;
}
</style>  
<footer><a><b>developed by 5 Samaritans</b></a></footer>  
                </body>
</html>