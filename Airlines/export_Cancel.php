<?php  
session_start();
$departdate = $_SESSION['departdate'];
$flightid = $_SESSION['flightid'];
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "system", "project");  
      header('Content-Type: text/txt; charset=utf-8');  
      header('Content-Disposition: attachment; filename=ViewUsernames.txt');  
      $output = fopen("php://output", "w");  
      //fputcsv($output, array('FirstName','LastName'));  
      $query = "SELECT fname,lname FROM bookyourflight where flightid ='$flightid' and depart ='$departdate'";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
?>