<?php
//this page is to redirect to the seat selection page depending on the flight id
session_start();
$flightid= $_GET['fid'];
$pass= $_GET['pass'];
$depart = $_SESSION['depart'];
//$passcount=$_SESSION['pass'];

$connect = mysqli_connect("localhost", "root", "system", "project"); 
 
 $query ="SELECT flightid FROM searchFlight"; 
 //$departDate = $_SESSION['depart'];
 $result = mysqli_query($connect, $query);
$sql1 ="INSERT INTO pasngrCount_inFlight(depart,passcount,flightid) VALUES('$depart','$pass','$flightid')"; 
 $result1 = mysqli_query($connect,$sql1);
 header('Location:SeatA121.php');
$fname = $_GET['from'];
$_SESSION["fname"] = $fname;
$toname= $_GET['to'];
$_SESSION["toname"] = $toname;
$price= $_GET['uid'];
$_SESSION["price"]=$price;
$ftime= $_GET['ftime'];
$_SESSION["ftime"] = $ftime;
$totime = $_GET['ttime'];
$_SESSION["totime"] = $totime;
$_SESSION["fid"] = $flightid;
$_SESSION["pass"]=$pass;

?>



