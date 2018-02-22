<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booked History Page</title>
	<link rel="stylesheet" type="text/css" href="BookedHistoryStyle.css">
</head>
<style>

.fp {
    float: left;
    width: 31%;
}
.tp {
    float: left;
    width: 35%;
}
.ft {
    float: left;
    width: 35%;
    margin-top: 10px;
}
.tt {
    float: left;
    width: 30%;
    margin-top: 10px;
}
.dot {
    float: right;
}
.dd {
    float: right;
  
    margin-right: 480px;
}
.pr {
    float: right;
    margin-right: -135px;
   
}
.dura {
    margin-left: 585px;
    font-size: 15px;
    margin-bottom: 10px;
	word-spacing: 40px;
}
.ig {
    width: 20%;
    float: left;
}


.fi {
    float: left;
    width: 31%;
    margin-top: 10px;
}
span{
	
}
.input_name{
 width:207px;
 padding:5px;
 font-size:18px;
 border: 1px solid #d3d3d3;
 }
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.sign_user{
 font-size:14px;
 color:#FFF;
 text-align:center;
 background-color:blue;
 padding:10px;
 margin-top:10px;
 cursor: pointer;
 width:100px;
 }
 
 .bookingIdHistory{
margin:20px 0 0 450px;

}
.button2 {background-color: #008CBA;

    margin-top: -15px;
    
	    margin-left: 230px;
}	
.bookingID{
margin:20px 0 0 0px;
width:50px;
}
		
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
	<div class="">
			<img src="images/flighthome.jpg"></img>
		</div>
		<h2 align="center">My Booked History</h2><br><br>
		<form action="" method="post" style="margin: 0 0 0 450px;">
		Enter  your booking id &nbsp&nbsp<input type="text" class="bookingID" name="bookingid" /><br/><br/>
		<input type="submit" style="padding: 5px 5px 5px 5px;" value="submit"/>
		</form>
<div class="bookingIdHistory"> 
<?php
session_start();
$bookid = '';
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="system"; // Mysql password
$db_name="project"; // Database name
$tbl_name="bookyourFlight"; // Table name
// Connect to server and select databse.
$connection=new mysqli("$host", "$username", "$password", "$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");
$sql="";
$emailid = $_SESSION["email"];
if(isset($_POST["bookingid"]))
{
$bookid = $_POST["bookingid"];
$_SESSION['bookingid']=$bookid;
$sql="SELECT * FROM $tbl_name WHERE isCancelled = '0' and bookingid = '$bookid'";
}
else{
$sql="SELECT * FROM $tbl_name WHERE isCancelled = '0' and email = '$emailid'";
}
$result=mysqli_query($connection,$sql);
if((mysqli_num_rows($result))!=0)
{
 while($row = $result->fetch_array()) 
 {		
		echo "<form>";
echo "<span style='color:blue'>Booking id:</span>".$row["bookingid"]."<span style='color:blue'>First Name:</span>".$row["fname"];
echo "<span style='color:blue'>Source:</span>".$row["fromplace"];
echo "<span style='color:blue'>Destination:</span>".$row["toplace"];
echo "<span style='color:blue'>Departure Date:</span>".$row["depart"].'<br>'.'<br>';
echo "<span style='color:blue'>Start Time:</span>".$row["fromtime"];
echo "<span style='color:blue'>End Time:</span>".$row["totime"];
echo "<span style='color:blue'>Seat Num:</span>".$row["seatnum"];
echo "<span style='color:blue'>Flight id:</span>".$row["flightid"].'<br>'.'<br>'.'<br>';

echo "</form>";
}
}
else{
echo "No such ticket found";
}

?>
</div>

</form>
</body>
</html>
