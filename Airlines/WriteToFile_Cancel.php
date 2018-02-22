<?php  
session_start();
$departdate = $_SESSION['departdate'];
echo $departdate;
$flightid = $_SESSION['flightid'];
echo $flightid;
//$depart_time = $_SESSION['ftime'];
//echo $depart_time;
$connect = mysqli_connect("localhost", "root", "system", "project");  
$query ="SELECT fname,lname FROM bookyourflight where flightid='$flightid' and depart ='$departdate'"; 
$result = mysqli_query($connect, $query);  
 ?> 
 <!DOCTYPE html>  
 <html>  
      <head>   
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" type="text/css" href="BookedHistoryStyle.css">		   
      </head>
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
	<div class="">
			<img src="images/flighthome.jpg"></img>
		</div>	  
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                <br />  
                <form method="post" action="export_Cancel.php" align="center">  
                     <input type="submit" name="export" value="TextFile Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                              
                               <th width="25%">FirstName</th>  
                               <th width="35%">LastName</th>  
                              
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>   
                               <td><?php echo $row["fname"]; ?></td>  
                               <td><?php echo $row["lname"]; ?></td>  
                               
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  

 </html>  
