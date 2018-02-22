<?php  
session_start();
$bookingid = $_SESSION['bookingid'];
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "system", "project");  
      header('Content-Type: text/txt; charset=utf-8');  
      header('Content-Disposition: attachment; filename=ViewDetails.txt');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID', 'FirstName', 'LastName', 'Email', 'Phone No', 'Source','Destination','Depart Date','Arrival Date','Start Time','End Time','FlightId','Seat Num'));  
      $query = "SELECT * FROM bookyourFlight where bookingid=$bookingid";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
