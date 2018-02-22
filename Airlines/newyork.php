<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
 <link rel="stylesheet" href="staticcss2.css">

</head>

		<header>
		<div class="container-fluid">
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
					<a href="otherRestaurant.html">Book a Hotel</a>
				</div>
			</li>
			
			<li class="dropdown">
			<a href="#" class="dropbtn">Travel Information</a>
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
			
		</ul>
	</nav>
		</div>
		</div>	
	
	</header>
	<div class="bgimg">
			<img src="images/flighthome.jpg"></img>
		</div>
	
<div class="container-hotels">
	<form name="verify_form" action="paymenthotel.html" id="searches"  method="post">
	  <div class="top-lefts">
		<p class="deal">Deal of the Day</p>
		<h5>Sheraton New York Times Square Hotel</h5>
		<p>811 7th Ave, New York, NY 10019 United States</p>
		<div class="vegas">
		<img src="images/orlando.jpg" class="imgcss">
		</div>
		<ul class="options">
		<li>Sheraton New York Times Square Hotel</li>
		
			<li>4.6 miles to manhattan center</li>
			<li>2.8 miles to casual cafe</li>
		</ul>
		<span class="old-price-cont"><del data-reason="DRR-438">$167</del> <ins>$133</ins></span>
		<div class="price-breakdown"></div>
		<input type="submit"  class="cta cta-strong" name="select" value="select">
		
	</div>
	
	<br>
	<div class="top-lefts">
		
		<h5>Millennium Broadway</h5>
		<p>145 W 44th St, New York, NY 10036, United States</p>
		<div class="vegas">
		<img src="images/orlando.jpg" class="imgcss">
		</div>
		<ul class="options">
		<li>Millennium Broadway</li>
		
			<li>0.6 miles to City center</li>
			<li>2.1 miles to new york Convention Center</li>
		</ul>
		<span class="old-price-cont"><del data-reason="DRR-438">$345</del> <ins>$189</ins></span>
		<div class="price-breakdown"></div>
		<input type="submit"  class="cta cta-strong" name="select" value="select">
		
	</div>
	<br>
	<div class="top-lefts">
		
		<h5>Hotel Riu Plaza New York Times Square</h5>
		<p>305 W 46th St, New York, NY 10036 United States</p>
		<div class="vegas">
		<img src="images/orlando.jpg" class="imgcss">
		</div>
		<ul class="options">
		<li>New York Times Square</li>
		
			<li>1.8 miles to City hall</li>
			<li>3.1 miles to bright quarters</li>
		</ul>
		<span class="old-price-cont"><del data-reason="DRR-438">$234</del> <ins>$108</ins></span>
		<div class="price-breakdown"></div>
		<input type="submit"  class="cta cta-strong" name="select" value="select">
		
	</div></form>
</div>


</body>
<link rel="stylesheet" type="text/css" href="hotel.css">
<?php
$place = $_SESSION['search'];
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="system"; // Mysql password
$db_name="project"; // Database name
$tbl_name="hotellist"; // Table name
// Connect to server and select databse.
$connection=new mysqli("$host", "$username", "$password", "$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name WHERE search = '$place'";
$result=mysqli_query($connection,$sql);
$count=mysqli_num_rows($result);
// Mysql_num_row is counting table row
if(($count)>0)
{
 while($row = $result->fetch_array()) //here you can use many functions such as mysql_fetch_assoc() and other
 {		
		echo "<span style='color:blue'>hotel name:</span>".$row["hotelname"];
  }
}
?>

</html>