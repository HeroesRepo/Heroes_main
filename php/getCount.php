<?php
ini_set('display_errors',1); 
error_reporting(E_ALL);
include "connection.php";

$data=json_decode(file_get_contents("php://input"));
$bloodgroup=mysqli_real_escape_string($con, $data->bloodGroup);
$component=mysqli_real_escape_string($con, $data->component);

		$sql = "INSERT INTO getclick_count(search_bloodgroup,search_component) VALUES('$bloodgroup','$component')";
		$result = mysqli_query($con,$sql) or die(mysql_error($con));
		if($result){
     				echo "Successfully written";
   				}
?>