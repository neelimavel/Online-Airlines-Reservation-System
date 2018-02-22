<?php
 $display = $_session['price'];
 echo $display;
?>
		<form method='post' id='form1' action='seatselectionSamhtml.php?uid=".$row['price']."?from=".$row['fromname']."?to=".$row['toname']."?ftime=".$row['fromtime']."?ttime=".$row['totime']."?dur=".$row['duration']."?price=".$row['price']."?flightid=".$row['flightid']."'>
		
		
<?php
class Database
{
	//declaring for establishing connection
    var $host;
    var $user;
    var $pass;
    var $data;
    var $con;
    var $table;
    var $db;

    public function controls()
    {
		//assigning values 
        $this->host="localhost";
        $this->user="root";
        $this->pass="system";
        $this->data="project";
    }

    public function connection()
    {
		//establishing connection
        $this->con = mysqli_connect($this->host,$this->user,$this->pass);
    }
	public function tablename()
    {
			//insert values to database mysqli
        $this->table=mysqli_query($this->con,"INSERT INTO bookedHistory(fromplace,toplace,depart,returndate,fromtime,totime,flightid) VALUES ('".$_GET['fromname']."','".$_GET['toname']."','".$_GET['fromtime']."','".$_GET['totime']."','".$_GET['flightid']."')");
		
    }
    public function databaseconnection()
    {
			//connecting to database
        $this->db=mysqli_select_db($this->con,$this->data);
    }

}

$name=new Database();
$name->controls();
$name->connection();
$name->databaseconnection();
$name->tablename();
?>	