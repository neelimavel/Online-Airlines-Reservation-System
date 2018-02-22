<?php
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
$phonenum=$_POST['phonenum'];
$sql = "INSERT INTO bookyourFlight (fname,lname,email,phonenum) VALUES ('$fname','$lname','$email','$phonenum')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>