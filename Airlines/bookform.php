<?php session_start();?>
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
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css">
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script>
$('document').ready(function()
    { 
            $("#book").validate({
                rules: {
                    fname: "required",
                    lname: "required",
                    email: {
                        required: true
                    },
                    cemail: {
                        required: true
                        
                    },
					phonenum: {
						required: true
                },
				months: {
						required: true
                },
				days: {
						required: true
                },
				years: {
						required: true
                },
				},
                messages: {
                    fname: "Please enter your first name",
                    lname: "Please enter your last name",
                    email: {
                        required: "Please enter your email",
                    },
                    cemail: {
                        required: "Please enter your email",
                    },
					phonenum: {
						required: "Please enter your phone number",
					},
					months: {
						required: "Please enter the number of months",
                },
				days: {
						required: "Please enter the number of days",
                },
				years: {
						required: "Please enter the number of years",
                },
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });  

});
</script>
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
				<a href="Homepage.html" class="dropbtn">Logout</a>
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
      <h2 class="form_title">Book Your Flight</h2>
    </div>
    <!--Form  start-->
	<form name="form" action="bookval.php" id="book" method="post">
    <div id="form_name">
      <div class="firstnameorlastname">
       
        <input type="text" name="fname" value=""  placeholder="First Name"  class="input_name" required >
        <input type="text" name="lname" value="" placeholder="Last Name" class="input_name" required >
         
      </div>
      <div id="email_form">
        <input type="text" id="email" name="email" value=""  placeholder="Your Email" class="input_email" required>
      </div>
      <div id="Re_email_form">
        <input type="text" id="cemail" name="cemail" value=""  placeholder="Re-enter Email" class="input_Re_email" required>
      </div>
      <div id="phone_form">
        <input type="tel" name="phonenum" value="" maxlength="10" placeholder="Phone number" class="input_phone" required>
      </div>
      <!--birthday details start-->
      <div>
        <h3 class="birthday_title">Birthday</h3>
      </div>
      <div>
        <select name="months" value="" >
          <option value="" selected >Month</option>
          <option value="1">Jan</option>
          <option value="2">Feb</option>
          <option value="3">Mar</option>
          <option value="4">Apr</option>
          <option value="5">May</option>
		  <option value="1">June</option>
          <option value="2">July</option>
          <option value="3">August</option>
          <option value="4">September</option>
          <option value="5">October</option>
		  <option value="1">November</option>
          <option value="2">December</option>
        </select>
        &nbsp;&nbsp;
        <select name="days" value="" >
          <option value="" selected>Day</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
		  <option value="1">6</option>
          <option value="2">7</option>
          <option value="3">8</option>
          <option value="4">9</option>
          <option value="5">10</option>
        </select>
        &nbsp;&nbsp;
        <select name="years" value="">
          <option value="" selected>Year</option>
          <option value="2013">1990</option>
          <option value="2012">1991</option>
          <option value="2011">1992</option>
          <option value="2010">1993</option>
          <option value="2009">1994</option>
		  <option value="2013">1995</option>
          <option value="2012">1996</option>
          <option value="2011">1997</option>
          <option value="2010">1998</option>
          <option value="2009">1999</option>
        </select>
      </div>
      
	   <div id="search_form">
	   <input type="submit" class="sign_user" name="Submit" value="Submit" >
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
$seatno = $_GET["seatnum"];
$_SESSION["seatnum"] = $seatno;
?>
 </body>
 </html>