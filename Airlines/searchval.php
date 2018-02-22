<?php
// Start the session
session_start();
?>
<html>
<head>
<title>...</title>
<link rel="stylesheet" type="text/css" href="staticcss2.css">
<style>

.fp {
    float: left;
    width: 31%;
}
.tp {
    float: left;
    width: 35%;
}
.ft {
    float: left;
    width: 35%;
    margin-top: 10px;
}
.tt {
    float: left;
    width: 30%;
    margin-top: 10px;
}
.dot {
    float: right;
}
.dd {
    float: right;
  
    margin-right: 480px;
}
.pr {
    float: right;
    margin-right: -135px;
   
}

.displayFlights{
width:100px;
height:100px;	
}

.dura {
    margin-left: 585px;
    font-size: 15px;
    margin-bottom: 10px;
	word-spacing: 40px;
}
.ig {
    width: 20%;
    float: left;
}


.fi {
    float: left;
    width: 31%;
    margin-top: 10px;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {background-color: #008CBA;

    margin-top: -15px;
    
	    margin-left: 230px;} 
</style>
</head>
<body>
	<header>
		<div class="container">
				 <div class="grid">
		<nav>
			<ul>
				<li class="dropdown">
					<a href="search.php" class="dropbtn">Book Flight</a>
				</li>
			
			<li class="dropdown">
				<a href="contact.html" class="dropbtn">View Booking</a>
			</li>
			
			<li class="dropdown">
				<a href="contact.html" class="dropbtn">Cancel Booking</a>
			</li>
			<li class="dropdown">
				<a href="#" class="dropbtn">Logout</a>
			</li>
		</ul>
	</nav>
		</div>
		</div>	
	
	</header>
	<div>
			<img src="images/flighthome.jpg"></img>
		</div>
		<h2 align="center">Flights available info</h2>
<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="system"; // Mysql password
$db_name="project"; // Database name
$tbl_name="searchFlight";
// Connect to server and select databse.
$conn=new mysqli("$host", "$username", "$password", "$db_name")or die("cannot connect");
$fromplace=$_POST['sourcevalue'];
$toplace=$_POST['destvalue'];
$depart=$_POST['arrival'];
$_SESSION["depart"] = $depart;
//$returndate=$_POST['returndate'];
//$_SESSION["returndate"] = $returndate;
$pass=$_POST['Passengers'];
$_SESSION["pass"] = $pass; 
$sql ="SELECT fromplace,toplace,depart,fromname,toname,fromtime,totime,price,flightid FROM searchFlight WHERE fromplace='$fromplace' and toplace='$toplace' and depart ='$depart'";
$result=mysqli_query($conn,$sql);
//$count=mysqli_num_rows($result);
if((mysqli_num_rows($result))>0)
{
    while($row = $result->fetch_array())
 {	
		
         echo "<div style='color:black;margin-left:50px;margin-top:50px;text-align:center;padding:5px 0 50px;'>
		 <table>
		 <tr>
<td style=''><div class='fp'>".$row["fromname"]."</div></td>
<td class='displayFlights'><div class='tp'>".$row["toname"]."</div></td>
 <td class='displayFlights'><div class='ft'> ".$row["fromtime"]."</div> </td>
 <td class=''><div class=''>&#8594;</div></td>
 <td class='displayFlights'><div class='tt'> ".$row["totime"]."</div></td>
 <td class='displayFlights'><div class='pr'>".$row["price"]."</div></td>
 <td class='displayFlights'><div class='fi'> ".$row["flightid"]."</div></td>
 <form method='post' id='form1'action='seatredirection.php?from=".$row['fromname']."&to=".$row['toname']."&uid=".$row['price']."&ftime=".$row['fromtime']."&ttime=".$row['totime']."&fid=".$row['flightid']."&pass=".$pass."'><td class='displayFlights'><input type='submit' class='button button2 value='Select'/> </td></form>
 </tr>
 </table>
 </div>
 ";
			

}
}
else {
    header('Location:noflights.html');
}
?>
</body>
</html>

