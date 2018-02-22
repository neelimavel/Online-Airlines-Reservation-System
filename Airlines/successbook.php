<?php
/**
session_start();
echo "the session variable is ".$_SESSION["fname"];
echo "the session variable is ".$_SESSION["tname"];
echo "the session variable is ".$_SESSION["price"];
echo "the session variable is ".$_SESSION["ftime"];
//echo "the session variable is ".$_SESSION["totime"];
echo "the session variable is ".$_SESSION["fid"] ;
echo "the session variable is ".$_SESSION["pass"];
**/
?>
<!DOCTYPE html>
<html lang="en" class="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="staticcss2.css">
<!-- Latest compiled and minified CSS -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
function redirectFile()
{
	window.location.href = "WriteToFile.php";
}	

</script>
<!-- Latest compiled JavaScript -->
  </head>
  <body>
	<header>
		<div class="container">
				 <div class="grid">
		<nav>
			<ul>
				<li class="dropdown">
					<a href="search.php" class="dropbtn">Book Flight</a>
				</li>
			
			<li class="dropdown">
				<a href="bookedhistory.php" class="dropbtn">View Booking</a>
			</li>
			
			<li class="dropdown">
				<a href="cancel.php" class="dropbtn">Cancel Booking</a>
			</li>
			<li class="dropdown">
				<a href="Homepage.html" class="dropbtn">Logout</a>
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
			
				<div class="headers">
						<h2>You have successfully booked the ticket!
						<input type="button" value="click here" onClick="redirectFile();"></input>
						</h2>
				</div>
				<div id="sig" align="center">
				<a href="search.html">back!</a>
				
				</div>
			</div>
		</div>	
		
	</div>	
	
  </body>
</html>  