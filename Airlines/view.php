 <?php 
 session_start();
 $connect = mysqli_connect("localhost", "root", "system", "project");  
 $datevalue = $_POST['datevalue'];
 $query ="SELECT routeid,fromplace,toplace,depart,fromname,toname,fromtime,totime,price,flightid FROM searchFlight where depart<'$datevalue'";  
 $result = mysqli_query($connect, $query);  
 $json_array = array();
 $count=0;
 while($row = mysqli_fetch_array($result))  
 {  
									//counting the number of records fetched
									$count=$count+1;
									 $json_array[]=$row;
							
 }
$num_rows = $count;
$_SESSION["numrows"] = $num_rows;
print_r($_SESSION);
echo json_encode( $json_array);
 ?>