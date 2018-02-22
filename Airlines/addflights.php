<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "system";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sourceid=$_POST['sourceid'];
$fplace=$_POST['fplace'];
$tplace=$_POST['toplace'];
$depart=$_POST['Depart'];
$scode=$_POST['scode'];
$dcode=$_POST['dcode'];
$ftime=$_POST['ftime'];
$ttime=$_POST['ttime'];
$price=$_POST['price'];
$fid=$_POST['fid'];
$seatcount=$_POST['seatcount'];

$sql = "INSERT INTO searchFlight(sourcekey,fromplace,toplace,depart,fromname,toname,fromtime,totime,price,flightid,isCancelled,pass_num) VALUES('$sourceid','$fplace','$tplace','$depart','$scode','$dcode','$ftime','$ttime','$price','$fid',0,0)";

$sqlflightseats = "INSERT INTO flightseats(flightid,seat_count) values('$fid','$seatcount')";
if ($conn->query($sqlflightseats) === TRUE) {
	echo "Record Inserted successfully";
	 
	// header('Location:user.html');
} else {
    echo "Error: " . $sqlflightseats . "<br>" . $conn->error;
}

if ($conn->query($sql) === TRUE) {
	echo "Record Inserted successfully";
	 
	// header('Location:user.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>