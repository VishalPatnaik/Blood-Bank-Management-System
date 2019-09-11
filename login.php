<!DOCTYPE html>
<html>
<head>
    <title></title>
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
  font-size: 21px;
}

.Div3 a:hover {
  background-color: #00FFFF;
  color: black;
}

.Div3 a.active {
    background-color: #00FF00;
    color: white;
}

body{
  background-image: url("b6.jpg");
   height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	}
	label
	{
	color:black;
	}


input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    border: 1px solid #FFF;
    
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
                          <a class="TipsOnDonating" href="tips.php" aria-hidden="true">Tips on donating</a>
                          <a class="MostNeededBlood" href="most needed blood.php" aria-hidden="true">Most needed blood</a>
                          <a class="ContactUs" href="contact.php" aria-hidden="true">Contact Us</a>

</div>
<h2 >Donor login</h2>



    <table align="center" border="0" cellpadding="0"
    cellspacing="1" width="300">
        <tr>
            <td>
                <form method="post" name="loginForm" method="post" align:center style="float: right">
                    <table border="0" cellpadding="3"
                    cellspacing="1" width="100%">
                       
                        <tr>
                            <td width="78">EMailId:</td></tr>
                            <tr><td width="200"><input id="email" name=
                            "EMailId" type="text"></td>
                        </tr>
                        <tr>
                            <td>Password:</td></tr>
                            <tr><td><input id="password" name="Pswd" type=
                            "password"></td>
                        </tr>
                        <tr>
                            <td><input name="submit" type="submit" value=
                            "Login"> </td>
                            <td><input name="reset" type="reset" value=
                            "reset"></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
    <?php
    if (isset($_POST['submit']))
        {     
   session_start();
$con=mysqli_connect("localhost","root","")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysqli_error());
    $EMailId=$_POST['EMailId'];
    $Pswd=$_POST['Pswd'];
    $_SESSION['login_user']=$EMailId; 
    $query = mysqli_query($con,"SELECT EMailId FROM donor WHERE EMailId='$EMailId' and Pswd='$Pswd'");
     if (mysqli_num_rows($query) != 0)
    {
     echo "<script language='javascript' type='text/javascript'> location.href='donor.php' </script>";   
      }
      else
      {
    echo "<script type='text/javascript'>alert('EMailId Or Password Invalid!')</script>";
    }
    }
    ?>
<h1><a class="reg">Not a member?</a><br><a href="register.php"> Create Account </a>
                </h1>
<footer>developed by 5 Samaritans</footer>
</body>
</html>