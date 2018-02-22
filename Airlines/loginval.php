<?php
session_start();
/**
echo "the session variable is ".$_SESSION["fname"];
echo "the session variable is ".$_SESSION["tname"];
echo "the session variable is ".$_SESSION["price"];
echo "the session variable is ".$_SESSION["ftime"];
echo "the session variable is ".$_SESSION["totime"];
echo "the session variable is ".$_SESSION["fid"] ;
echo "the session variable is ".$_SESSION["pass"];
**/
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="system"; // Mysql password
$db_name="project"; // Database name
$tbl_name="login"; // Table name
// Connect to server and select databse.
$conn=new mysqli("$host", "$username", "$password", "$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");

// vendor code sent from form
$uname=$_POST['uname'];
$pass=$_POST['pwd'];
$fid = $_SESSION["fid"];
$sql="SELECT uname,pass FROM $tbl_name WHERE uname='$uname' and pass='$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["uname"] == $uname && $row["pass"] == $pass) 
		{
			if($fid == 'A123'){
		header('Location:user.html');	
			}
			else{
				header('Location:seat3.php');
			}
    }
	/**
	else{
		
		header('Location:Loginform.php');
	echo "Incorrect Username and Password.Please enter valid credentials";
	}**/
	}
	} 
	else{
		
		header('Location:Loginform.php');
	echo "Incorrect Username and Password.Please enter valid credentials";
	}
	/**
	else {
    
	echo "You have not registered.Please Sign Up.";
	header('Location:signup.html');
	}	**/
$conn->close();	
?>



