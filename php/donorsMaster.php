<?php
//date_default_timezone_set('UTC');
date_default_timezone_set("Asia/Kolkata");
ini_set('display_errors',1); 
error_reporting(0);
include "connection.php";
$file = file_get_contents("php://input",true);
$json = json_decode($file,true);
$name = $json["dn_name"];
$emailid=$json["dn_emailid"];
$phoneno=$json["dn_phoneno"];
$bg=$json["dn_bloodgroup"];
$checkbox=$json["dn_checkbox"];
$gender=$json["dn_gender"];
$birthdate=$json["dn_birthdate"];
$newDate = date('Y-m-d', strtotime($birthdate));

//Calculate Age
$dateOfBirth = $birthdate;
$today = date("Y-m-d");
$diff = date_diff(date_create($dateOfBirth), date_create($today));
//echo 'Male Candidate';
//echo 'Age is '.$diff->format('%y');
$age = $diff->format('%y');
//echo $new;
if($checkbox == "true")
	{
		$checkbox="true"; 

		$sql = "INSERT INTO donors_master(dn_name,dn_emailid,dn_phoneno,dn_bloodgroup,dn_checkbox,dn_gender,dn_birthdate,dn_age) VALUES('$name','$emailid',$phoneno,'$bg','$checkbox','$gender','$newDate','$age')";
		$result = mysqli_query($con,$sql) or die(mysql_error($con));
		if($result){
     				echo "Successfully written";
   				}
	}
	else{


		$checkbox="false"; 

		$sql = "INSERT INTO donors_master(dn_name,dn_emailid,dn_phoneno,dn_bloodgroup,dn_checkbox,dn_gender,dn_birthdate,dn_age) VALUES('$name','$emailid',$phoneno,'$bg','$checkbox','$gender','$newDate','$age')";
		$result = mysqli_query($con,$sql) or die(mysql_error($con));
		if($result){
     				echo "Successfully written";
   				}
} 
?>