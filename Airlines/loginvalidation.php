<!DOCTYPE html>
<html lang="en">
  <head>
<meta http-equiv="refresh" content="2;url=userlogin.html">
</head>
<?php
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="system"; // Mysql password
$db_name="project"; // Database name
$tbl_name="login";
// Connect to server and select databse.
$conn=new mysqli("$host", "$username", "$password", "$db_name")or die("cannot connect");
$uname=$_POST['uname'];
$_SESSION['username']=$uname;
$pass=$_POST['pwd'];
$_SESSION['password']=$pass;
$sql="SELECT uname,pass FROM $tbl_name WHERE uname='$uname' and pass='$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
	while($row = $result->fetch_assoc()) {
	if($row["uname"] == $uname && $row["pass"] == $pass) 
	{
			header('Location:userloginHomepage.html');
	}
	else{	
		header('Location:userlogin.html');
		exit;
		echo "Incorrect Username and Password.Please enter valid credentials";
	}
	}
}
?>