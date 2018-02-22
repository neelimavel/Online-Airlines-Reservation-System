<?php  
 $connect = mysqli_connect("localhost", "root", "system", "project");  
 $query ="SELECT * FROM searchFlight ";  
 $result = mysqli_query($connect, $query);  
 ?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="addflightStyle.css">
	</head>
	<script>
	function display(val) {
	var datevalue = document.getElementById("viewflights");
	var str = datevalue.options[datevalue.selectedIndex].text;
	if(str == "sevendays")
	{
		var tdate = new Date(2018,12,24); // 1 Feb -> 30 Jan
		tdate.setDate(tdate.getDate() - 7);
		console.log(tdate.toString()); 
		var dateval = tdate.toString();
		$.ajax({
	type: "POST",
	url: "view.php",
	data:'date='+dateval,
	success: function(data){
		$("#datevalue").html(data);
	}
	});
		
	}
	else
	{
		<?php  
                     while($row = mysqli_fetch_array($result))  
                     { 
                     ?>  
                          
                         
                               <?php echo $row["routeid"]; ?></td>  
                                
                               <?php echo $row["fromplace"]; ?></td>  
                               <?php echo $row["toplace"]; ?></td>  
                               <?php echo $row["depart"]; ?></td>  
                               <?php echo $row["fromname"]; ?></td>
								<?php echo $row["toname"]; ?></td>  
                               <?php echo $row["fromtime"]; ?></td>  
                               <?php echo $row["totime"]; ?></td>  
                                <?php echo $row["price"]; ?></td> 
                               <?php echo $row["flightid"]; ?></td>
                           
                           
                     <?php       
                     }  
                     ?>  
}
		
		
	}
	}
	</script>
	<body>
	<header>
		<div class="container">
				 <div class="grid">
		<nav>
			<ul>
				<li class="dropdown">
					<a href="addflights.html" class="dropbtn">Add Flights</a>
				</li>
			
				<li class="dropdown">
					<a href="cancelflight.html" class="dropbtn">Cancel Flights</a>
				</li>
			
			<li class="dropdown">
				<a href="admin.html" class="dropbtn">Logout</a>
			</li>
		</ul>
	</nav>
		</div>
		</div>	
	
	</header>
		<div class="bgimg">
			<img src="images/flighthome.jpg"></img>
		</div>
		<body>  
           <br /><br />  
		 
		
           <div class="container" style="width:900px;">  
                <br />  
                <form method="post" action="export.php" align="center">   
				
                </form>  
				 <select name="viewflights" id="viewflights" onChange="display(this.value);">
				<option value="seven days" selected >seven days</option>
					<option value="all">all</option>
					</select> 
                <br />  
				<input type="hidden" name="datevalue" id="datevalue" value=""/>
                
           </div>  
      </body>  
</html>