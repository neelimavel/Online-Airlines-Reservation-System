<?php
session_start();
$fromname = $_SESSION["fname"];
$toname = $_SESSION["toname"];
$price = $_SESSION["price"];
$ftime = $_SESSION["ftime"];
$ttime =$_SESSION["totime"];
$fid = $_SESSION["fid"];
$passengers = $_SESSION["pass"];
$depart = $_SESSION["depart"];
//$returndate = $_SESSION["returndate"];
$seatass = $_SESSION["seatnum"];
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
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$_SESSION["email"]=$email;
$phonenum=$_POST['phonenum'];
$sql = "INSERT INTO bookyourFlight(fname,lname,email,phonenum,fromplace,toplace,depart,fromtime,totime,flightid,seatnum,isCancelled) VALUES ('$fname','$lname','$email','$phonenum','$fromname','$toname','$depart','$ftime','$ttime','$fid','$seatass','0')";

if ($conn->query($sql) === TRUE) {
	 $lastbooking_id = $conn->insert_id;
	 if($lastbooking_id>0)
	 {
		 
		 header("Location:paymentpage.php?bid='$lastbooking_id'");
		 //logic to move on to payment with booking id
	 }
	 else{
	 }
    echo "New record created successfully with latest booking id :".$lastbooking_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>