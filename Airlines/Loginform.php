<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="staticcss1.css">
	<link rel="stylesheet" type="text/css" href="staticcss2.css">
	<style>
	#container {
position: fixed;
width: 340px;
height: 280px;
top: 50%;
left: 50%;
margin-top: -140px;
margin-left: -170px;
}
form {
    margin: 0 auto;
    margin-top: 20px;
}
label {
    color: #555;
    display: inline-block;
    margin-left: 18px;
    padding-top: 10px;
    font-size: 14px;
}
p a {
    font-size: 11px;
    color: #aaa;
    float: right;
    margin-top: -13px;
    margin-right: 20px;
}
p a:hover {
    color: #555;
}
input {
    font-family: "Helvetica Neue", Helvetica, sans-serif;
    font-size: 12px;
    outline: none;
}
input[type=text],
input[type=password] {
    color: #777;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 18px;
    width: 290px;
    height: 35px;
}
lower {
    background: #ecf2f5;
    width: 100%;
    height: 69px;
    margin-top: 20px;
}
input[type=checkbox] {
    margin-left: 20px;
    margin-top: 30px;
}
.check {
    margin-left: 3px;
}
input[type=submit] {
    margin-right: 20px;
    margin-top: 20px;
    width: 80px;
    height: 30px;
}
background: #fff;
    border-radius: 3px;
    border: 1px solid #ccc;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
#container {
    position: fixed;
    width: 340px;
    height: 280px;
    top: 50%;
    left: 50%;
    margin-top: -140px;
    margin-left: -170px;
	background: #fff;
    border-radius: 3px;
    border: 1px solid #ccc;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
border: 1px solid #c7d0d2;
    border-radius: 2px;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
}
input[type=password] {
    color: #777;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 18px;
    width: 290px;
    height: 35px;
    border: 1px solid #c7d0d2;
    border-radius: 2px;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
}
input[type=text] {
    color: #777;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 18px;
    width: 290px;
    height: 35px;
    border: 1px solid #c7d0d2;
    border-radius: 2px;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
}
font-size: 14px;
    font-weight: bold;
    color: #fff;
    background-color: #acd6ef; /*IE fallback*/
    background-image: -webkit-gradient(linear, left top, left bottom, from(#acd6ef), to(#6ec2e8));
    background-image: -moz-linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
    background-image: linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
    border-radius: 30px;
    border: 1px solid #66add6;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);
    cursor: pointer;
}
input[type=submit] {
    margin-right: 20px;
    float:right;
    margin-top: 20px;
    width: 80px;
    height: 30px;
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    background-color: #acd6ef; /*IE fallback*/
    background-image: -webkit-gradient(linear, left top, left bottom, from(#acd6ef), to(#6ec2e8));
    background-image: -moz-linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
    background-image: linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
    border-radius: 30px;
    border: 1px solid #66add6;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);
    cursor: pointer;
}
webkit-transition: all .4s ease;
    -moz-transition: all .4s ease;
    transition: all .4s ease;
}
p a {
    font-size: 11px;
    color: #aaa;
    float: right;
    margin-top: -13px;
    margin-right: 20px;
    -webkit-transition: all .4s ease;
    -moz-transition: all .4s ease;
    transition: all .4s ease;
box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
    -webkit-transition: all .4s ease;
    -moz-transition: all .4s ease;
    transition: all .4s ease;
}
input[type=text]:hover,
input[type=password]:hover {
    border: 1px solid #b6bfc0;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .7), 0 0 0 5px #f5f7f8;
}
input[type=text]:focus,
input[type=password]:focus {
    border: 1px solid #a8c9e4;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #e6f2f9;
}
input[type=submit]:hover {
    background-image: -webkit-gradient(linear, left top, left bottom, from(#b6e2ff), to(#6ec2e8));
    background-image: -moz-linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
    background-image: linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
}
input[type=submit]:active {
    background-image: -webkit-gradient(linear, left top, left bottom, from(#6ec2e8), to(#b6e2ff));
    background-image: -moz-linear-gradient(top left 90deg, #6ec2e8 0%, #b6e2ff 100%);
    background-image: linear-gradient(top left 90deg, #6ec2e8 0%, #b6e2ff 100%);
}
.loginButton{
float:left;
background-color:#c1d7d7;
margin-left:20px;
}

.submitButton{
background-color:#c1d7d7;
}
</style>
<script type="text/javascript">
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
alert(username);
if(username == "") {
      alert("Error: Username cannot be blank!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(username)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }
if(password == "") {
      alert("Error: Password cannot be blank!");
      form.username.focus();
      return false;
    }


    if(password != "") {
      if(password.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.password.focus();
        return false;
      }
	if(password.length > 16) {
        alert("Error: Password cannot exceed sixteen characters!");
        form.password.focus();
        return false;
      }
      if(password == username) {
        alert("Error: Password must be different from Username!");
        form.password.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(password)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(password)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(password)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.password.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
      return false;
    }

        return true;

}

</script>
	</head>
<body>
	<header>
		<div class="container">
				 <div class="grid">
		<nav>
			<ul>
				<li class="dropdown">
					<a href="HomePage.html" class="dropbtn">US Airlines</a>
				</li>
			<li class="dropdown">
				<a href="#" class="dropbtn">Book</a>
				<div class="dropdown-content">
					<a href="search.html">Book a Flight</a>
					<a href="hotel.html">Book a Hotel</a>
				</div>
			</li>
			
			<li class="dropdown">
			<a href="#" class="dropbtn travel">Travel Information</a>
				<div class="dropdown-content">
				<a href="Bagg.html">Baggage</a>
				<a href="temple.html">Food and beverages On Board</a>
				<a href="Faq.html">FAQs</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="contact.html" class="dropbtn">Contact US</a>
			</li>
			
		</ul>
	</nav>
		</div>
		</div>	
	
	</header>
	<div class="bgimg">
			<img src="images/flighthome.jpg"></img>
		</div>
<div id="main_container">
		<div id="header">
			<div id="logo">
					<h2 align="center">Air Ticket Reservation System</h2>
			
				<div class="headers">
						<h3 align="center">User Login Page</h3>
				<div class="logins">
				     <form name="form" action="loginval.php" id="form" method="post">
					 Username:
					  <input type="text" name="uname" value="" id="uname">
					  <br>
					  <br>
					  Password:
					  <input type="password" name="pwd" value="" id="pwd">
					  <br>
					  <input type="submit" value="Submit"/>
					  <input type="submit" value="Signup" onclick="signup.php"/>
					  <!--
					  <br><br>
					  Don't have an account?<button><a href="Signup.html">Sign Up</a></button>
					  -->
				  </form> 
				 <?php 
				  $fname='';
				  $tname='';
				  $price='0';
				  if(isset($_GET["from"]))
				  {
				  $fname=$_GET["from"];
				  $_SESSION["fname"]=$fname;
				  }		  
				 if(isset($_GET["to"]))
				 {
				  $tname=$_GET["to"];
				  $_SESSION["tname"]=$tname;
				 }
				 if(isset($_GET["uid"]))
				 {
				  $price=$_GET["uid"];
				  $_SESSION["price"]=$price;
				 }
				 if(isset($_GET["ftime"]))
				 {
				  $ftime=$_GET["ftime"];
				  $_SESSION["ftime"]=$ftime;
				 }
				 if(isset($_GET["ttime"]))
				 {
				  $ttime=$_GET["ttime"];
				  $_SESSION["totime"]=$ttime;
				 }
				 if(isset($_GET["fid"]))
				 {
				  $fid=$_GET["fid"];
				  $_SESSION["fid"]=$fid;
				 }
				 if(isset($_GET["pass"]))
				 {
				  $pass=$_GET["pass"];
				  $_SESSION["pass"]=$pass;
				 }
				  ?>
				</div>
					
				</div>
			</div>
		</div>	
		
	</div>	

</body>
</html>