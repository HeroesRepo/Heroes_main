<?php
ini_set('display_errors',1); 
error_reporting(E_ALL);
include "connection.php";
$file = file_get_contents("php://input",true);
$json = json_decode($file,true);
$name = $json["dn_name"];
$emailid=$json["dn_emailid"];
$phoneno=$json["dn_phoneno"];
$bg=$json["dn_bloodgroup"];
$sql = "INSERT INTO donors_master(dn_name,dn_emailid,dn_phoneno,dn_bloodgroup) VALUES('$name','$emailid',$phoneno,'$bg')";
$result = mysqli_query($con,$sql) or die(mysql_error($con));
$response = array();
if($result){
	$response["status"] = "OK";
	$response["msg"] = "Inserted successfully";
}
else
{
	$response["status"] = "Error";
	$response["msg"] = "Not inserted successfully";
}
print json_encode($response);
?>