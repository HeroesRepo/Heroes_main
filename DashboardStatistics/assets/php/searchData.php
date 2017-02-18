<?php
ini_set('display_errors',1); 
error_reporting(E_ALL);
include 'connection.php';
$bloodgroup1=$_POST['bloodgroup'];
$request=$bloodgroup1;


/*$queryMale="select * from donors_master where dn_bloodgroup='$request' &&  dn_bloodgroup='$request' && dn_gender='Male'";
$result=mysqli_query($con,$queryMale);
$maleDonor=mysqli_num_rows($result);


$queryFemale="select * from donors_master where dn_bloodgroup='$request' &&  dn_bloodgroup='$request' && dn_gender='Female'";
$result=mysqli_query($con,$queryFemale);
$FemaleDonor=mysqli_num_rows($result);

$seriesMale = array();
$seriesMale['name'] = 'Male';
$seriesMale['y'] = $maleDonor;



$seriesFemale = array();
$seriesFemale['name'] = 'Female';
$seriesFemale['y'] = $FemaleDonor;


$response = array();
array_push($response, $seriesMale);
array_push($response, $seriesFemale);*/

$q_ten=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Male' && dn_age>=0 && dn_age<=10");
$var_ten=mysqli_num_rows($q_ten);

$q_twenty=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Male' && dn_age>=10 && dn_age<=20");
$var_twenty=mysqli_num_rows($q_twenty);

$q_thirty=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Male' && dn_age>=20 && dn_age<=30");
$var_thirty=mysqli_num_rows($q_thirty);

$q_fourty=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Male' && dn_age>=30 && dn_age<=40");
 $var_fourty=mysqli_num_rows($q_fourty);


$q_fifty=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Male' && dn_age>=40 && dn_age<=50");
$var_fifty=mysqli_num_rows($q_fifty);


$q_sixty=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Male' && dn_age>=50 && dn_age<=60");
$var_sixty=mysqli_num_rows($q_sixty);

$q_seventy=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Male' && dn_age>=60 && dn_age<=70");
$var_seventy=mysqli_num_rows($q_seventy);

$q_eighty=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Male' && dn_age>=70 && dn_age<=80");
$var_eighty=mysqli_num_rows($q_eighty);

$q_ninety=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Male' && dn_age>=80 && dn_age<=90");
$var_ninety=mysqli_num_rows($q_ninety);

$q_hundred=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Male' && dn_age>=90 && dn_age<=100");
$var_hundred=mysqli_num_rows($q_hundred);


//Female

$q1_ten=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Female' && dn_age>=0 && dn_age<=10");
$var_ten1=mysqli_num_rows($q1_ten);

$q1_twenty=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Female' && dn_age>=10 && dn_age<=20");
$var_twenty1=mysqli_num_rows($q1_twenty);

$q1_thirty=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Female' && dn_age>=20 && dn_age<=30");
$var_thirty1=mysqli_num_rows($q1_thirty);

$q1_fourty=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Female' && dn_age>=30 && dn_age<=40");
 $var_fourty1=mysqli_num_rows($q1_fourty);


$q1_fifty=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Female' && dn_age>=40 && dn_age<=50");
$var_fifty1=mysqli_num_rows($q1_fifty);


$q1_sixty=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Female' && dn_age>=50 && dn_age<=60");
$var_sixty1=mysqli_num_rows($q1_sixty);

$q1_seventy=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Female' && dn_age>=60 && dn_age<=70");
 $var_seventy1=mysqli_num_rows($q1_seventy);

$q1_eighty=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Female' && dn_age>=70 && dn_age<=80");
$var_eighty1=mysqli_num_rows($q1_eighty);

$q1_ninety=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Female' && dn_age>=80 && dn_age<=90");
 $var_ninety1=mysqli_num_rows($q1_ninety);

$q1_hundred=mysqli_query($con,"select * from donors_master where dn_bloodgroup='$request' &&  dn_gender='Female' && dn_age>=90 && dn_age<=100");
$var_hundred1=mysqli_num_rows($q1_hundred);



$series1 = array();
$series1['name'] = 'Male';
$series1['data'] = array();

$series2 = array();
$series2['name'] = 'Female';
$series2['data'] = array();

array_push($series1['data'], $var_ten);
array_push($series1['data'], $var_twenty);
array_push($series1['data'], $var_thirty);
array_push($series1['data'], $var_fourty);
array_push($series1['data'], $var_fifty);
array_push($series1['data'], $var_sixty);
array_push($series1['data'], $var_seventy);
array_push($series1['data'], $var_eighty);
array_push($series1['data'], $var_ninety);
array_push($series1['data'], $var_hundred);

array_push($series2['data'], $var_ten1);
array_push($series2['data'], $var_twenty1);
array_push($series2['data'], $var_thirty1);
array_push($series2['data'], $var_fourty1);
array_push($series2['data'], $var_fifty1);
array_push($series2['data'], $var_sixty1);
array_push($series2['data'], $var_seventy1);
array_push($series2['data'], $var_eighty1);
array_push($series2['data'], $var_ninety1);
array_push($series2['data'], $var_hundred1);

$response = array();
array_push($response, $series1);
array_push($response, $series2);


print json_encode($response,JSON_NUMERIC_CHECK);

?>








