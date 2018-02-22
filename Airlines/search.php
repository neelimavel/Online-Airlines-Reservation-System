<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT DISTINCT fromplace,sourcekey FROM searchFlight";
$results = $db_handle->runQuery($query);
$query1 ="SELECT passcount FROM passengercount";
$results1 = $db_handle->runQuery($query1);
?>
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
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
	<link rel="stylesheet" type="text/css" href="book.css">
		<link rel="stylesheet" type="text/css" href="staticcss2.css">
	<script>
function getState(val) {
	//alert($('#country :selected').html());
	 $("#sourcevalue").val($('#country :selected').html());
	$.ajax({
	type: "POST",
	url: "getdest.php",
	data:'dest='+val,
	success: function(data){
		$("#destlist").html(data);
	}
	});
}

</script>	
<script type="text/javascript">
$('document').ready(function()
    { 
            $("#searches").validate({
                rules: {
                    fromplace: "required",
                    to: "required",
                    arrival: {
                        required: true
                    },
                    returndate: {
                        required: true
                        
                    },
					Passengers: {
						required: true
                },
				},
                messages: {
                    fromplace: "Please enter your source name",
                    to: "Please enter your destination",
                    arrival: {
                        required: "Please provide arrival date",
                    },
                    returndate: {
                        required: "Please provide return date",
                    },
					Passengers: {
						required: "Please enter the passengers.",
					}
                },
                submitHandler: function(form) {
                    form.submit();
                }
				});
	});
</script>
<!--
<script>
	function passCount(){
	<?php
		foreach($results1 as $source) {
		}
	?>
		var passCount = <?php echo ($source['passcount']);?>;
		//alert(passCount);
		var pCount = document.getElementById("passenger").value;
		if(pCount>passCount)
		{
			alert("You cannot book more than available seats");
			$('#passenger').val('');
		
		}  
}
</script>
-->
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
					<a href="search.php" class="dropbtn">Book Flight</a>
				</li>
			
			<li class="dropdown">
				<a href="bookedhistory.php" class="dropbtn">View Booking</a>
			</li>
			
			<li class="dropdown">
				<a href="cancel.php" class="dropbtn">Cancel Booking</a>
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
      <h2 class="form_title">Search a Flight</h2>
    </div>
    <!--Form  start-->
    <div id="form_name" >
      <div class="firstnameorlastname">
       <form name="searchform" action="searchval.php" id="searches" method="post">
       <div id="form-content">
	  
		
        <select name="fromplace" id="country" placeholder="From Place" class="input_name"  onChange="getState(this.value);">
		<option value="">From Place</option>
		<?php
		foreach($results as $source) {
		?>
		<option value="<?php echo $source["sourcekey"]; ?>"><?php echo $source["fromplace"]; ?></option>
		<?php
		}
		?>
		</select>
		
		<input type="hidden" name="sourcevalue" id="sourcevalue" value=""/>
		
		<select name="to" id="destlist" placeholder="To Place" class="input_name">
		<option value="">To Place</option>
		</select>
		
		<input type="hidden" name="destvalue" id="destvalue" value=""/>
		<div class="fieldgroup">
	
		<input type="date" name="arrival" id="datepicker1" value=""  placeholder="Arrival date" class="input_email">
		<p id="dateoutput"></p>
	  </div>
	  </div>
	  <div class="fieldgroup">
      <div id="phone_form">
        Passengers:<input type="number" name="Passengers" id ="passenger" value="" class="input_phone" min="1" max="5">
      </div>
      </div>
	  
	  <div class="fieldgroup">
     
	   <input type="submit" class="sign_user" name="Submit" value="Search" onClick="setvalue()">
	  </div>
     </form>
    </div>
    <!--form ends-->
  </div>
</div>
<!--container ends-->

 </body>
 <script>
 $(document).ready(function () {
    var date = new Date();
    var currentMonth = date.getMonth();
    var currentDate = date.getDate();
    var currentYear = date.getFullYear();

    $('#datepicker1').datepicker({
        minDate: new Date(currentYear, currentMonth, currentDate),
        dateFormat: 'yy-mm-dd'
    });
	
});
	</script>

 </html>