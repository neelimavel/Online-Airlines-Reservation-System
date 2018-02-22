<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="cancel.css">
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
<body>
<form method="post" action="?" style="margin:100px 0 0 500px;">
  Enter You Booking Id:
  <input type="text" name="bookingid" value="" style="width:100px;">
  <input type="submit" value="Submit" style="padding:5px 5px 5px 5px">
</form> 
</body>
</html>
<div style="margin: 0 0 0 500px;">
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{	
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="system"; // Mysql password
$db_name="project"; // Database name
$tbl_name="bookyourFlight"; // Table name
// Connect to server and select databse.
$conn=new mysqli("$host", "$username", "$password", "$db_name")or die("cannot connect");
//fetch field value
$bookingid= '';
if(isset($_POST['bookingid']))
{
$bookingid= $_POST['bookingid'];
}
$sql="UPDATE $tbl_name SET isCancelled='1' WHERE bookingid='$bookingid'";
$sql1="DELETE FROM $tbl_name WHERE isCancelled = '1' and bookingid = '$bookingid'";
$result = mysqli_query($conn,$sql);
$result1 = mysqli_query($conn,$sql1);
if ($result && $result1 == true) {
    echo "Your Ticket is cancelled";
} 

mysqli_close($conn);
}
?>
</div>