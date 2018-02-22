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
        $this->table=mysqli_query($this->con,"INSERT INTO book(fname,lname,dob,email,phonenum,cemail) VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['dob']."','".$_POST['email']."','".$_POST['phonenum']."','".$_POST['cemail']."')");
		
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
if(($name->con))
{
   header("http://localhost/NeelLatestUpdatedProj/Airlines/successbook.html");
}
else{
	header("Location: http://localhost/airline/detailscorrect.html");
}

$name->databaseconnection();
$name->tablename();
?>