<?php

$con=mysqli_connect('localhost','root','root123','db_bloodbank') or die(mysqli_error($con));

$q="select * from donors_master where dn_gender='Male'";
$result=mysqli_query($con,$q);
$male=mysqli_num_rows($result);

$q="select * from donors_master where dn_gender='Female'";
$result=mysqli_query($con,$q);
$female=mysqli_num_rows($result);

$q="select * from donors_master";
$result=mysqli_query($con,$q);
$total=mysqli_num_rows($result);

$percentageMale=($male/$total)*100;
$maleCount=round($percentageMale);

$percentageFemale=($female/$total)*100;
$femaleConut=round($percentageFemale);

$seriesMale = array();
$seriesMale['name'] = 'Male';
$seriesMale['y'] = $maleCount;



$seriesFemale = array();
$seriesFemale['name'] = 'Female';
$seriesFemale['y'] = $femaleConut;


$response = array();
array_push($response, $seriesMale);
array_push($response, $seriesFemale);


print json_encode($response,JSON_NUMERIC_CHECK);


?>