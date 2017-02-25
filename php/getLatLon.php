<?php
ini_set('display_errors',0); 
error_reporting(E_ALL);
include "connection.php";

$data=json_decode(file_get_contents("php://input"));
$Searchlatitude=(float)$data->latitude;
$Searchlongitude=(float)$data->longitude;



$geocodeFromLatLong = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($Searchlatitude).','.trim($Searchlongitude).'&sensor=false'); 
$output = json_decode($geocodeFromLatLong);
$status = $output->status;
$address = ($status=="OK")?$output->results[1]->formatted_address:'';
//echo $address;

		$sql = "INSERT INTO latlondetails(latt,lng,title) VALUES('$Searchlatitude','$Searchlongitude','$address')";
		$result = mysqli_query($con,$sql) or die(mysql_error($con));
		if($result){
     				echo "Successfully written";
   				}
?>