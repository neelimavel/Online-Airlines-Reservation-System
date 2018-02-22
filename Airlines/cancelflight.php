<?php
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="system"; // Mysql password
$db_name="project"; // Database name
$tbl_name="searchFlight"; // Table name
// Connect to server and select databse.
$conn=new mysqli("$host", "$username", "$password", "$db_name")or die("cannot connect");
//fetch field value
$departdate = $_POST['departdate'];
$_SESSION['departdate']= $departdate;
$flightid = $_POST['flightid'];
$_SESSION['flightid']= $flightid;
//$depart_time = $_POST['ftime'];
//$_SESSION['ftime']= $depart_time;
//$routeid= $_POST['routeid'];
$sql="UPDATE $tbl_name SET isCancelled= '1' WHERE depart ='$departdate' and flightid='$flightid'";
$deleteflight ="DELETE FROM $tbl_name WHERE depart ='$departdate' and flightid='$flightid'";
$flighseat_del = "DELETE FROM flightseats WHERE routeid ='$routeid'";
$result = mysqli_query($conn,$sql);
$result1 = mysqli_query($conn,$deleteflight);
$result2 = mysqli_query($conn,$flighseat_del);
if ($result) {
	header('Location:cancelsuccessbook.php');
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
mysqli_close($conn);

?>