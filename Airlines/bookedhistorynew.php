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
	<div class="">
			<img src="images/flighthome.jpg"></img>
		</div>
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                <br />  
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="TextFile Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">ID</th>  
                               <th width="25%">FirstName</th>  
                               <th width="35%">LastName</th>  
                               <th width="10%">Email</th>  
                               <th width="20%">Phone No</th>  
                               <th width="5%">Source</th> 
								<th width="5%">Destination</th>
								<th width="15%">Depart Date</th>
								<th width="15%">Arrival Date</th>
								<th width="10%">Start Time</th>
								<th width="10%">End Time</th>
								<th width="5%">FlightId</th>
								<th width="10%">Seat Num</th>
                          </tr>  
                     <?php  
					 session_start();
					$bookingid = $_SESSION['bookingid'];
					$connect = mysqli_connect("localhost", "root", "system", "project");  
					//$query ="SELECT * FROM bookyourFlight where bookingid=$bookingid";  
					$query='';
				if(isset($_POST["bookingid"]))
				{
					$bookid = $_POST["bookingid"];
					$_SESSION['bookingid']=$bookid;
					$query="SELECT * FROM bookyourFlight WHERE isCancelled = '0' and bookingid = '$bookid'";
					$result = mysqli_query($connect, $query);
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["bookingid"]; ?></td>  
                               <td><?php echo $row["fname"]; ?></td>  
                               <td><?php echo $row["lname"]; ?></td>  
                               <td><?php echo $row["email"]; ?></td>  
                               <td><?php echo $row["phonenum"]; ?></td>  
                               <td><?php echo $row["fromplace"]; ?></td>
								<td><?php echo $row["toplace"]; ?></td>  
                               <td><?php echo $row["depart"]; ?></td>  
                               <td><?php echo $row["returndate"]; ?></td>  
                               <td><?php echo $row["fromtime"]; ?></td>  
                               <td><?php echo $row["totime"]; ?></td>  
                               <td><?php echo $row["flightid"]; ?></td>
								<td><?php echo $row["seatnum"]; ?></td>
                          </tr>  
                     <?php       
                     }  
                     ?>  
					 <?php       
                     }  
                     ?>
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
