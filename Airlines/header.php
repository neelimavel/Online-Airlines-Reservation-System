<?php 
session_start();
$cost = $_SESSION["price"];
$pass = $_SESSION["pass"];
?>
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

 <link rel="stylesheet" href="seat.css">
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
				<a href="foodandbeverages.html">Food and beverages On Board</a>
				<a href="Faq.html">FAQs</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="contact.html" class="dropbtn">Contact US</a>
			</li>
			<li class="dropdown">
				<a href="bookedhistory.html" class="dropbtn">My Booked History</a>
			</li>
		</ul>
	</nav>
		</div>
		</div>	
	
	</header>
	<div class="bgimg">
			<img src="images/flighthome.jpg" width="100%" height="240px"></img>
		</div>
<body>
<div class="bus">
<?php
$booked_seat=array(10,11,7,4);
for($seat= 1; $seat <=40 ;$seat++) { 
if(in_array($seat,$booked_seat))
{ $booked="red"; 
	$book_seat="data-book='1'"; 
}
else 
{ 
 $booked="";
 $book_seat="";
 }
echo "<div class='seat $booked' data-number='$seat' $book_seat>
<img src='seat.png' width='20' height='20'></img></div>";
} 
?>
</div>
<script> 
$(document).ready(function(){
var fruits = [];
var amount = <?php echo json_encode($cost);?>;
var pass = <?php echo json_encode($pass);?>;
alert(pass);
var str = amount.replace('$','');
$(".seat").click(function(){
var total_class = $('.green').length;
var book_seat = $(this).attr("data-book"); 
var current_book = $(this).attr("data-current"); 
if(current_book == 1){ 
var seat_no = $(this).attr("data-number");
$(this).removeClass('green'); 
$(this).removeAttr('data-current'); 
fruits.splice( fruits.indexOf(seat_no), 1 );
$(".book_seats").val(fruits);
$(".amount").val(fruits.length * str);
return true;
} 
else if(book_seat == 1){ 
alert("Already booked");
return false;
} 
else if(total_class < pass){ 
var seat_no = $(this).attr("data-number");
fruits.push(seat_no);
$(".book_seats").val(fruits);
$(".amount").val( fruits.length * str );
$(this).attr('data-current', '1');
$(this).addClass('green');
return true;
}
else if(total_class > pass){ 
alert("Cannot select additional seats")
return false;
} 
});
});
</script>
 <style>
.bus{width:380px;float:left;min-height:150px;border:1px solid #CCC;padding:0 0 10px 10px }
.seat{background:#CCC;float:left;margin:10px 10px 0 0;cursor:pointer;padding:4;}
.cancel_book{background:#CCC;}
.green{background:green;}
.red{background:red;}
.yellow{background:yellow;}
</style>
<form id="form" action= "booksample.html" method="post">
Seat No :<input type="text" name="seats" class="book_seats"><br>
Total Amount :<input type="text" name="amount" class="amount"><br>
<input type="submit" value="submit" class="submit">
</form>
</body>
</html>