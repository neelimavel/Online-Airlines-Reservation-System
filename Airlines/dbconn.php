<?php
// define variables and set to empty values
$fromErr = $toErr = $arrivalErr = $returnErr = $passErr = "";
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="system"; // Mysql password
$db_name="project"; // Database name
$tbl_name="searchFlight"; // Table name

// Connect to server and select databse.
$connection=new mysqli("$host", "$username", "$password", "$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");

?>