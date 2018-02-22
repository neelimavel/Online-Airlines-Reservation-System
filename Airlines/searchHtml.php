
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search a Flight Page</title>
		<link href="../assets/styles.min.css" rel="stylesheet">
	<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/ui-darkness/jquery-ui.min.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="book.css">
		<link rel="stylesheet" type="text/css" href="staticcss2.css">
		<script>
		$(function() {
			$("#datepicker1").datepicker({ minDate:0});
			$("#datepicker1").datepicker({
				dateFormat: "dd-mm-yy",
				onSelect: function(dateText, inst) {
					var date = $.datepicker.parseDate(inst.settings.dateFormat || $.datepicker._defaults.dateFormat, dateText, inst.settings);
					var dateText1 = $.datepicker.formatDate("D, d M yy", date, inst.settings);
					date.setDate(date.getDate() + 7);
					var dateText2 = $.datepicker.formatDate("D, d M yy", date, inst.settings);
					$("#dateoutput").html("Chosen date is <b>" + dateText1 + "</b>; chosen date + 7 days yields <b>" + dateText2 + "</b>");
				}
			});
		});
	</script>
	<script type="text/javascript">
	
	function getValue()
	{
		alert("Event is fired");
	}
        
	</script>
	
	
	
<!--
<script>
function Submit(){
 var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 var fname = document.form.Name.value,
  lname = document.form.LastName.value,
  femail = document.form.Email.value,
  freemail = document.form.enterEmail.value,
  fphonenum = document.form.Phonenum.value,
  fmonth = document.form.birthday_month.value,
  fday = document.form.birthday_day.value,
  fyear = document.form.birthday_year.value;
   
 if( fname == "" )
   {
     document.form.fromplace.focus() ;
  document.getElementById("errorBox").innerHTML = "Enter the first name";
     return false;
   }
 if( lname == "" )
   {
     document.form.LastName.focus() ;
   document.getElementById("errorBox").innerHTML = "Enter the last name";
     return false;
   }
    
   if (femail == "" )
 {
  document.form.Email.focus();
  document.getElementById("errorBox").innerHTML = "Enter the email";
  return false;
  }else if(!emailRegex.test(femail)){
  document.form.Email.focus();
  document.getElementById("errorBox").innerHTML = "Enter the valid email";
  return false;
  }
   
   if (freemail == "" )
 {
  document.form.enterEmail.focus();
  document.getElementById("errorBox").innerHTML = "Re-enter the email";
  return false;
  }else if(!emailRegex.test(freemail)){
  document.form.enterEmail.focus();
  document.getElementById("errorBox").innerHTML = "Re-enter the valid email";
  return false;
  }
   
  if(freemail !=  femail){
   document.form.enterEmail.focus();
   document.getElementById("errorBox").innerHTML = "Emails are not matching, re-enter again";
   return false;
   }
   
   
 if(fphonenum == "")
  {
   document.form.Phonenum.focus();
   document.getElementById("errorBox").innerHTML = "Enter the password";
   return false;
  }
   if(fmonth == "" && fday == "" && fyear =="")
   {
		document.getElementById("errorBox").innerHTML = "Enter the Birthday";
        return false;
   }
   if (fmonth == "") {
        document.form.birthday_month.focus();
  document.getElementById("errorBox").innerHTML = "Select the birthday month";
        return false;
     }
  if (fday == "") {
        document.form.birthday_day.focus();
  document.getElementById("errorBox").innerHTML = "Select the birthday day";
        return false;
     }
  if (fyear == "") {
        document.form.birthday_year.focus();
  document.getElementById("errorBox").innerHTML = "Select the birthday year";
        return false;
     }
  if(document.form.radiobutton[0].checked == false && document.form.radiobutton[1].checked == false){
    document.getElementById("errorBox").innerHTML = "Select your gender";
    return false;
   }
  if(fname != '' && lname != '' && femail != '' && freemail != '' && fpassword != '' && fmonth != '' && fday != '' && fyear != ''){
   document.getElementById("errorBox").innerHTML = "Form submitted successfully";
   }
     
}
</script>
-->
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
					<a href="search.html">Book a Flight</a>
					<a href="hotel.html">Book a Hotel</a>
				</div>
			</li>
			
			<li class="dropdown">
			<a href="#" class="dropbtn travel">Travel Information</a>
				<div class="dropdown-content">
				<a href="Bagg.html">Baggage</a>
				<a href="Travelinfo.html">Travel Docs</a>
				<a href="temple.html">Food and beverages On Board</a>
				<a href="Faq.html">FAQs</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="contact.html" class="dropbtn">Contact US</a>
			</li>
			<li class="dropdown">
				<a href="login.html" class="dropbtn">Login</a>
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
      <h2 class="form_title">Search a Flight</h2>
    </div>
    <!--Form  start-->
    <div id="form_name" >
      <div class="firstnameorlastname">
       <form name="form" action="search.php" id="searches"  method="post">
       <div id="errorBox"></div>
        <input type="text" name="from" list="from" value="" placeholder="From Place"  class="input_name" >
		<datalist id="from">
				  <option>alaska</option>
				  <option>atlanta</option>
				  <option>australia</option>
				  <option>andhra</option>
				  <option>boston</option>
				  <option>chicago</option>
				  <option>china</option>
				  <option>dallas</option>
				  <option>Kansas</option>
				</datalist>
        <input type="text" name="to" list="to" value="" placeholder="To Place" class="input_name" >
		<datalist id="to">
		
				  <option label="alaska" value="alaska" onclick="getValue()"></option>
				  <option>atlanta</option>
				  <option>australia</option>
				  <option>andhra</option>
				  <option>boston</option>
				  <option>chicago</option>
				  <option>china</option>
				  <option>dallas</option>
				</datalist>
      </div>
      <div id="email_form">
		<input type="text" name="arrival" id="datepicker1" value=""  placeholder="Arrival date" class="input_email">
		<p id="dateoutput"></p>
      </div>
      <div id="Re_email_form">
        <input type="text" name="return" id="datepicker2" value=""  placeholder="Return date" class="input_Re_email">
		<p id="dateoutput"></p>
		<script>
		$(function() {
			$("#datepicker2").datepicker({ minDate:0});
			$("#datepicker2").datepicker({
				dateFormat: "dd-mm-yy",
				onSelect: function(dateText, inst) {
					var date = $.datepicker.parseDate(inst.settings.dateFormat || $.datepicker._defaults.dateFormat, dateText, inst.settings);
					var dateText1 = $.datepicker.formatDate("D, d M yy", date, inst.settings);
					date.setDate(date.getDate() + 7);
					var dateText2 = $.datepicker.formatDate("D, d M yy", date, inst.settings);
					$("#dateoutput").html("Chosen date is <b>" + dateText1 + "</b>; chosen date + 7 days yields <b>" + dateText2 + "</b>");
				}
			});
		});
	</script>
      </div>
      <div id="phone_form">
        Passengers:<input type="number" name="Passengers" id ="passenger" value="" class="input_phone">
      </div>
      
       <div id="search_form">
	   <input type="submit" class="sign_user" name="Submit" value="Search">
      </div>
     </form>
    </div>
    <!--form ends-->
  </div>
</div>
<!--container ends-->

 </body>
 </html>