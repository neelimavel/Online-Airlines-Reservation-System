<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up Page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="staticcss1.css">
	<link rel="stylesheet" type="text/css" href="staticcss2.css">
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
				<a href="Travelinfo.html">Travel Docs</a>
				<a href="temple.html">Food and beverages On Board</a>
				<a href="Faq.html">FAQs</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="contact.html" class="dropbtn">Contact US</a>
			</li>
			<li class="dropdown">
				<a href="login.html" class="dropbtn">Login</a>
			</li>
			
		</ul>
	</nav>
		</div>
		</div>	
	
	</header>
	<div class="bgimg">
			<img src="images/flighthome.jpg"></img>
		</div>
<div>
Flight Select
</div>
<br>

<div><h1>DEPARTING</h1>
<?php
include('dbconn.php');
include('search.php');
echo "$fromplace";
?>
</div>