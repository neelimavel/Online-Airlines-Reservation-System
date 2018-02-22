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
$uname=$_POST['uname'];
$password=$_POST['password'];
$email=$_POST['email'];
$sql = "INSERT INTO login(uname,pass,email) VALUES('$uname','$password','$email')";

if ($conn->query($sql) === TRUE) {
	 
	 header('Location:userlogin.html');
	 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>