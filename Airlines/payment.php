<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="system"; // Mysql password
$db_name="project"; // Database name
$tbl_name="payment"; // Table name

// Connect to server and select databse.
$connection=new mysqli("$host", "$username", "$password", "$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");

// vendor code sent from form
$number=$_POST['cardnumber'];
$holder=$_POST['holdername'];
$pin=$_POST['pin'];
$months=$_POST['month'];
$yearr=$_POST['year'];
//sql query
$sql="SELECT cardnumber,holdername,pin,months,yearr FROM $tbl_name WHERE cardnumber='$number' and holdername='$holder' and pin='$pin' and months='$months' and yearr='$yearr'";

$result=mysqli_query($connection,$sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched, table row must be 1 row	

if($count==1){
	while($row = $result->fetch_assoc()) {

        // echo   "<div style='color:red;border:1px solid red;margin-top:50px;text-align:center'> confirm_number: ".$row["confirm_number"]." </div>" ;
		include('successbook.html');
     }
//$pass = "VALID";
//  print $pass;
//include('validation.php');  
}
else {
    include('invalidpayment.html');
}
?>



