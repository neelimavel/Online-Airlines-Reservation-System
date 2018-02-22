<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["dest"])) {
	$query ="SELECT DISTINCT toplace,sourcekey FROM searchFlight WHERE sourcekey = '".$_POST["dest"]."'";
	$results = $db_handle->runQuery($query);
?>
	<option value="">To Place</option>
<?php
if($results == true)
{
	foreach((array)$results as $source) {
?>
	<option value="<?php echo $source["sourcekey"]; ?>"><?php echo $source["toplace"]; ?></option>
<?php
	}
}
}
?>