<?php
session_start();
$bookingid=$_GET['bid'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="book.css">
	<link rel="stylesheet" type="text/css" href="staticcss2.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script>
$('document').ready(function()
    { 
            $("#book").validate({
                rules: {
					cardnumber: {
						required: true,
						maxlength:16
					},
                    holdername: "required",
                    pin: {
                        required: true,
						maxlength:3
                    },
                    month: {
                        required: true
                        
                    },
					year: {
						required: true
                },
				},
                messages: {
					cardnumber: {
						required: "Please enter the card number",
						maxlength: "Only 16 digits allowed",
					},
                    holdername: "Please enter the name",
                    pin: {
                        required: "Please enter your pin",
						maxlength:"CVV has only 3 digits",
                    },
                    month: {
                        required: "Please enter the month",
                    },
					year: {
						required: "Please enter the year",
					},
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });  

});
</script>
<style>
label {
    color: #555;
    display: inline-block;
    margin-left: 18px;
    padding-top: 10px;
    font-size: 14px;
}
</style>
	</head>
	<body>
	<header>
		<div class="container">
				 <div class="grid">
		<nav>
			<ul>
				<li class="dropdown">
					<a href="HomePage.html" class="dropbtn">US Airlines</a>
				</li>
			<li class="dropdown">
				<a href="#" class="dropbtn">Book</a>
				<div class="dropdown-content">
					<a href="search.html">Book Your Flight</a>
					<a href="hotel.html">Book a Hotel</a>
					<a href="cancel.php">Cancel Your Flight</a>
				</div>
			</li>
			
			<li class="dropdown">
			<a href="#" class="dropbtn travel">Travel Information</a>
				<div class="dropdown-content">
				<a href="foodbeverages.html">Food and beverages On Board</a>
				<a href="Faq.html">FAQs</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="contact.html" class="dropbtn">Contact US</a>
			</li>
			<li class="dropdown">
				<a href="logout.php" class="dropbtn">Log Out</a>
			</li>
			
			
		</ul>
	</nav>
		</div>
		</div>	
	
	</header>
	<div class="bgimg">
			<img src="images/flighthome.jpg"></img>
		</div>
	<div id="emptyDiv"></div>
<div id="description"></div>
<!--container start-->
<div id="container">
  <div id="container_body">
    <div>
      <h2 class="form_title">Payment Info</h2>
    </div>
    <!--Form  start-->
	<form name="form" action="successbook.php" id="book"  method="post" >
    <div id="form_name">
      <!--birthday details ends-->
	  <div id="email_form">
      <input type="number" name="cardnumber" value=""  placeholder="Card number" class="input_Re_email" maxlength="16">
	  </div>
	  
	   <div id="email_form">
      <input type="text" name="holdername" value=""  placeholder="Cardholder name" class="input_Re_email">
	  </div>
	  
	  <div class="fieldgroup">
      <input type="number" name="pin" value=""  placeholder="CVV" class="input_Re_email" maxlength="3">
	  </div>
	  <!--<div>
        <select name="month" >
          <option value="" selected >Month</option>
          <option value="1">Jan</option>
          <option value="2">Feb</option>
          <option value="3">Mar</option>
          <option value="4">Apr</option>
          <option value="5">May</option>
		  <option value="5">June</option>
		  <option value="5">July</option>
		  <option value="5">August</option>
		  <option value="5">September</option>
		  <option value="5">October</option>
		  <option value="5">November</option>
		  <option value="5">December</option>
        </select>
        &nbsp;&nbsp;
        <select name="year">
          <option value="" selected>Year</option>
          <option value="2013">2018</option>
          <option value="2012">2019</option>
          <option value="2011">2020</option>
          <option value="2010">2021</option>
          <option value="2009">2022</option>
        </select>
		</div>
       <div>-->
	 <input type="text" name="month" list="month" value="" placeholder="Month"  class="input_name" >
		<datalist id="month">
				  <option>Jan</option>
				  <option>Feb</option>
				  <option>March</option>
				  <option>April</option>
				  <option>May</option>
				  <option>June</option>
				  <option>July</option>
				  <option>August</option>
				  <option>September</option>
				  <option>October</option>
				  <option>November</option>
				  <option>December</option>
				</datalist>
        <input type="text" name="year" list="year" value="" placeholder="Year" class="input_name" >
		<datalist id="year">
				  <option>2017</option>
				  <option>2018</option>
				  <option>2019</option>
				  <option>2020</option>
				  <option>2021</option>
				  <option>2022</option>
				  <option>2023</option>
				  <option>2024</option>
				</datalist>
	   <div id="search_form">
	   <input type="submit" class="sign_user" name="submit" value="submit">
      </div>
        <!--<p id="sign_user" onClick="Submit()">Submit </p> -->
      </div>
     </form>
    </div>
    <!--form ends-->
  </div>
</div>
<!--container ends-->
<?php
$_SESSION["bookingid"] = $bookingid;
if( $_SERVER['REQUEST_METHOD'] == 'POST')
{
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="system"; // Mysql password
$db_name="project"; // Database name
$tbl_name="payment"; // Table name
// Connect to server and select databse.
$conn=new mysqli("$host", "$username", "$password", "$db_name")or die("cannot connect");
//fetch field value
$chname= $_POST['holdername'];
$sql="UPDATE $tbl_name SET bookingId=".$bookingid." WHERE holdername='$chname'";
$result = mysqli_query($conn,$sql);
if ($result) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
mysqli_close($conn);
}
?>
</body>
 </html>