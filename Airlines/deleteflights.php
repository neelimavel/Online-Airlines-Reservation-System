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

$sourceid=$_POST['sourceid'];
$source=$_POST['source'];
$destination=$_POST['destination'];

$sql = "DELETE FROM searchFlight where sourceid = '$sourceid' AND fromplace = '$source' AND toplace = '$destination'";
if ($conn->query($sql) === TRUE) {
	 
	 header('Location:adminfunc.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>