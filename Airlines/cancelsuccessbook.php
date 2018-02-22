<!DOCTYPE html>
<html lang="en" class="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="staticcss2.css">
<!-- Latest compiled and minified CSS -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
function redirectFile()
{
	window.location.href = "WriteToFile_Cancel.php";
}	
</script>
<!-- Latest compiled JavaScript -->
  </head>
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
			<a href="viewFlights.php" class="dropbtn">View Flights</a>
			</li>
			
			<li class="dropdown">
				<a href="HomePage.html" class="dropbtn">Logout</a>
			</li>
		</ul>
	</nav>
		</div>
		</div>	
	
	</header>
	<div class="bgimg">
			<img src="images/flighthome.jpg"></img>
		</div>
   
	<div id="main_container">
		<div id="header">
			<div id="logo">
			
				<div class="headers">
						<h2>You have successfully cancelled the flight!
						<input type="button" value="click here" name="export" onClick="redirectFile();"></input>
						</h2>
				</div>
				
				<div id="sig" align="center">
						<a href="search.php">back!</a>
				</div>
				
			</div>
		</div>	
		
	</div>	
	
  </body>
</html>  