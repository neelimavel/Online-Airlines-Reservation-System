<?php 
session_start();
$cost = $_SESSION["price"];
$pass = $_SESSION["pass"];
$flightid = $_SESSION["fid"];
$depart = $_SESSION["depart"];
?>
<?php
?>
<html>
<head>
<title>Bus Ticket Book</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="seatselectionStyle.css">
<style>
.bus{width:380px;float:left;min-height:150px;border:1px solid #CCC;padding:0 0 10px 10px }
.seat{background:#CCC;float:left;margin:10px 10px 0 0;cursor:pointer;padding:4;}
.cancel_book{background:#CCC;}
.green{background:green;}
.red{background:red;}
.yellow{background:yellow;}
</style>
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
			<img width="100%" height="240px" src="images/flighthome.jpg"></img>
		</div>
<div class="bus">
<?php
$booked_seat=array();
// select seatnum from bookyourflight
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="system"; // Mysql password
$db_name="project"; // Database name
$tbl_name="bookyourFlight"; // Table name
$seat_count = '';
// Connect to server and select databse.
$connection=new mysqli("$host", "$username", "$password", "$db_name")or die("cannot connect");
$sql_seats =" select seat_count from flightseats where flightid='$flightid'";
$result_seats=mysqli_query($connection,$sql_seats);

//mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT seatnum FROM $tbl_name where flightid = '$flightid' and depart='$depart'";
$result=mysqli_query($connection,$sql);
$count=mysqli_num_rows($result);
 while($row = $result->fetch_array()) //here you can use many functions such as mysql_fetch_assoc() and other
 {
	$seatnum = $row['seatnum'];

	if(strpos($seatnum,',')== true){
	$str_explode=explode(",",$seatnum);
	foreach($str_explode as $seatArray)
	//$seat1 = $str_explode[$seat3]; 
	//$seat2 = $str_explode[1];
	array_push($booked_seat, $seatArray); 
	}
	
	array_push($booked_seat,$seatnum); 
}
while($row = $result_seats->fetch_array()) //here you can use many functions such as mysql_fetch_assoc() and other
 {
	 $seat_count = $row['seat_count'];
 }
 $count=0;
for($seat= 1; $seat <=$seat_count;$seat++) 
{ 
if(in_array($seat,$booked_seat))
{ $booked="red"; 
$count=$count+1;
$book_seat="data-book='1'"; 
}
else 
{ 
 $booked="";
 $book_seat="";
}
echo "<div class='seat $booked' data-number='$seat' $book_seat>
<img src='seat.png' width='20' height='20'></div>";
} 
$passengercount=0;
$totalseats=$seat_count;
$passengercount= $totalseats-$count;
$sql1 = "INSERT INTO passengercount(passcount,flightid) VALUES ('$passengercount','$flightid')";
$result1=mysqli_query($connection,$sql1);
?>
</div>
<form id="myform" action= "#" method="post">
Seat No :<input type="text" id="seatno" name="seats" class="book_seats"><br>
Total Amount :<input type="text" name="amount" class="amount"><br>
<input type="submit" value="submit" onclick="getValue()" class="submit">
</form>
</body>
<script> 
$(document).ready(function(){
var seatarr = [];
var bookedarr = '';
var amount = <?php echo json_encode($cost);?>;
var pass = <?php echo json_encode($pass);?>;
var str = amount.replace('$','');
$(".seat").click(function(){
var total_class = $('.green').length;
var book_seat = $(this).attr("data-book"); 
var current_book = $(this).attr("data-current"); 
if(current_book == 1){ 
var seat_no = $(this).attr("data-number");
$(this).removeClass('green'); 
$(this).removeAttr('data-current'); 
seatarr.splice( seatarr.indexOf(seat_no), 1 );
$(".book_seats").val(seatarr);
//document.write(bookedarr);
$(".amount").val(seatarr.length * str);
return true;
} 
else if(book_seat == 1){ 
alert("Already booked");
return false;
}
else if(total_class < pass){ 
var seat_no = $(this).attr("data-number");
seatarr.push(seat_no);
$(".book_seats").val(seatarr);
$(".amount").val( seatarr.length * str );

$(this).attr('data-current', '1');
$(this).addClass('green');
return true;
}
else if(total_class > pass){ 
alert("Cannot select additional seats");
return false;
} 
}); 
});
function getValue()
{
	 var seatass = $("#seatno").val();
	 var url = "bookform.php?seatnum=" + seatass;
	 document.getElementById("myform").setAttribute('action', url);
}
</script>
</html>