<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="system"; // Mysql password
$db_name="project"; // Database name
$tbl_name="searchFlight"; // Table name
// Connect to server and select databse.
$conn=new mysqli("$host", "$username", "$password", "$db_name")or die("cannot connect");
//fetch field value
$routeid= $_POST['routeid'];
$sql="UPDATE $tbl_name SET isCancelled= '1' WHERE routeid ='$routeid'";
$result = mysqli_query($conn,$sql);
if ($result) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
mysqli_close($conn);

?>