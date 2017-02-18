<?php

$con=mysqli_connect('localhost','root','root123','db_bloodbank') or die(mysqli_error($con));

$q="select bb_regno,date,wb_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB001'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['wb_a_pos']==null)
{
	$wb_a_pos1=0;
}
else{
	$wb_a_pos1=$row['wb_a_pos'];
}
//$wb_a_pos1=$row['wb_a_pos'];

$q="select bb_regno,date,wb_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB002'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
//$wb_a_pos2=$row['wb_a_pos'];
if($row['wb_a_pos']==null)
{
	$wb_a_pos2=0;
}
else{
	$wb_a_pos2=$row['wb_a_pos'];
}

$q="select bb_regno,date,wb_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB003'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['wb_a_pos']==null)
{
	$wb_a_pos3=0;
}
else{
	$wb_a_pos3=$row['wb_a_pos'];
}

$q="select bb_regno,date,wb_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB004'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['wb_a_pos']==null)
{
	$wb_a_pos4=0;
}
else{
	$wb_a_pos4=$row['wb_a_pos'];
}

$q="select bb_regno,date,wb_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB005'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['wb_a_pos']==null)
{
	$wb_a_pos5=0;
}
else{
	$wb_a_pos5=$row['wb_a_pos'];
}

$q="select bb_regno,date,wb_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB006'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['wb_a_pos']==null)
{
	$wb_a_pos6=0;
}
else{
	$wb_a_pos6=$row['wb_a_pos'];
}

$q="select bb_regno,date,wb_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB007'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['wb_a_pos']==null)
{
	$wb_a_pos7=0;
}
else{
	$wb_a_pos7=$row['wb_a_pos'];
}

$q="select bb_regno,date,wb_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB008'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['wb_a_pos']==null)
{
	$wb_a_pos8=0;
}
else{
	$wb_a_pos8=$row['wb_a_pos'];
}

$q="select bb_regno,date,wb_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB009'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['wb_a_pos']==null)
{
	$wb_a_pos9=0;
}
else{
	$wb_a_pos9=$row['wb_a_pos'];
}

$q="select bb_regno,date,wb_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB0010'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['wb_a_pos']==null)
{
	$wb_a_pos10=0;
}
else{
	$wb_a_pos10=$row['wb_a_pos'];
}


/*  PCV   */

$q="select bb_regno,date,pcv_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB001'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['pcv_a_pos']==null)
{
	$pcv_a_pos1=0;
}
else{
	$pcv_a_pos1=$row['pcv_a_pos'];
}


$q="select bb_regno,date,pcv_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB002'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);

if($row['pcv_a_pos']==null)
{
	$pcv_a_pos2=0;
}
else{
	$pcv_a_pos2=$row['pcv_a_pos'];
}

$q="select bb_regno,date,pcv_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB003'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['pcv_a_pos']==null)
{
	$pcv_a_pos3=0;
}
else{
	$pcv_a_pos3=$row['pcv_a_pos'];
}

$q="select bb_regno,date,pcv_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB004'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['pcv_a_pos']==null)
{
	$pcv_a_pos4=0;
}
else{
	$pcv_a_pos4=$row['pcv_a_pos'];
}

$q="select bb_regno,date,pcv_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB005'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['pcv_a_pos']==null)
{
	$pcv_a_pos5=0;
}
else{
	$pcv_a_pos5=$row['pcv_a_pos'];
}

$q="select bb_regno,date,pcv_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB006'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['pcv_a_pos']==null)
{
	$pcv_a_pos6=0;
}
else{
	$pcv_a_pos6=$row['pcv_a_pos'];
}

$q="select bb_regno,date,pcv_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB007'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['pcv_a_pos']==null)
{
	$pcv_a_pos7=0;
}
else{
	$pcv_a_pos7=$row['pcv_a_pos'];
}

$q="select bb_regno,date,pcv_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB008'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['pcv_a_pos']==null)
{
	$pcv_a_pos8=0;
}
else{
	$pcv_a_pos8=$row['pcv_a_pos'];
}

$q="select bb_regno,date,pcv_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB009'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['pcv_a_pos']==null)
{
	$pcv_a_pos9=0;
}
else{
	$pcv_a_pos9=$row['pcv_a_pos'];
}

$q="select bb_regno,date,pcv_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB0010'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['pcv_a_pos']==null)
{
	$pcv_a_pos10=0;
}
else{
	$pcv_a_pos10=$row['pcv_a_pos'];
}

/* RDP  */


$q="select bb_regno,date,rdp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB001'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['rdp_a_pos']==null)
{
	$rdp_a_pos1=0;
}
else{
	$rdp_a_pos1=$row['rdp_a_pos'];
}
//$rdp_a_pos1=$row['rdp_a_pos'];

$q="select bb_regno,date,rdp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB002'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
//$rdp_a_pos2=$row['rdp_a_pos'];
if($row['rdp_a_pos']==null)
{
	$rdp_a_pos2=0;
}
else{
	$rdp_a_pos2=$row['rdp_a_pos'];
}

$q="select bb_regno,date,rdp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB003'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['rdp_a_pos']==null)
{
	$rdp_a_pos3=0;
}
else{
	$rdp_a_pos3=$row['rdp_a_pos'];
}

$q="select bb_regno,date,rdp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB004'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['rdp_a_pos']==null)
{
	$rdp_a_pos4=0;
}
else{
	$rdp_a_pos4=$row['rdp_a_pos'];
}

$q="select bb_regno,date,rdp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB005'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['rdp_a_pos']==null)
{
	$rdp_a_pos5=0;
}
else{
	$rdp_a_pos5=$row['rdp_a_pos'];
}

$q="select bb_regno,date,rdp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB006'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['rdp_a_pos']==null)
{
	$rdp_a_pos6=0;
}
else{
	$rdp_a_pos6=$row['rdp_a_pos'];
}

$q="select bb_regno,date,rdp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB007'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['rdp_a_pos']==null)
{
	$rdp_a_pos7=0;
}
else{
	$rdp_a_pos7=$row['rdp_a_pos'];
}

$q="select bb_regno,date,rdp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB008'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['rdp_a_pos']==null)
{
	$rdp_a_pos8=0;
}
else{
	$rdp_a_pos8=$row['rdp_a_pos'];
}

$q="select bb_regno,date,rdp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB009'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['rdp_a_pos']==null)
{
	$rdp_a_pos9=0;
}
else{
	$rdp_a_pos9=$row['rdp_a_pos'];
}

$q="select bb_regno,date,rdp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB0010'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['rdp_a_pos']==null)
{
	$rdp_a_pos10=0;
}
else{
	$rdp_a_pos10=$row['rdp_a_pos'];
}

/* FFP  */

$q="select bb_regno,date,ffp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB001'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['ffp_a_pos']==null)
{
	$ffp_a_pos1=0;
}
else{
	$ffp_a_pos1=$row['ffp_a_pos'];
}
//$ffp_a_pos1=$row['ffp_a_pos'];

$q="select bb_regno,date,ffp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB002'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
//$ffp_a_pos2=$row['ffp_a_pos'];
if($row['ffp_a_pos']==null)
{
	$ffp_a_pos2=0;
}
else{
	$ffp_a_pos2=$row['ffp_a_pos'];
}

$q="select bb_regno,date,ffp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB003'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['ffp_a_pos']==null)
{
	$ffp_a_pos3=0;
}
else{
	$ffp_a_pos3=$row['ffp_a_pos'];
}

$q="select bb_regno,date,ffp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB004'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['ffp_a_pos']==null)
{
	$ffp_a_pos4=0;
}
else{
	$ffp_a_pos4=$row['ffp_a_pos'];
}

$q="select bb_regno,date,ffp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB005'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['ffp_a_pos']==null)
{
	$ffp_a_pos5=0;
}
else{
	$ffp_a_pos5=$row['ffp_a_pos'];
}

$q="select bb_regno,date,ffp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB006'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['ffp_a_pos']==null)
{
	$ffp_a_pos6=0;
}
else{
	$ffp_a_pos6=$row['ffp_a_pos'];
}

$q="select bb_regno,date,ffp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB007'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['ffp_a_pos']==null)
{
	$ffp_a_pos7=0;
}
else{
	$ffp_a_pos7=$row['ffp_a_pos'];
}

$q="select bb_regno,date,ffp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB008'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['ffp_a_pos']==null)
{
	$ffp_a_pos8=0;
}
else{
	$ffp_a_pos8=$row['ffp_a_pos'];
}

$q="select bb_regno,date,ffp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB009'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['ffp_a_pos']==null)
{
	$ffp_a_pos9=0;
}
else{
	$ffp_a_pos9=$row['ffp_a_pos'];
}

$q="select bb_regno,date,ffp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB0010'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['ffp_a_pos']==null)
{
	$ffp_a_pos10=0;
}
else{
	$ffp_a_pos10=$row['ffp_a_pos'];
}




/*$q="select bb_regno,date,pcv_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB001'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$pcv_a_pos=$row['pcv_a_pos'];

$q="select bb_regno,date,rdp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB001'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$rdp_a_pos=$row['rdp_a_pos'];

$q="select bb_regno,date,ffp_a_pos from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='NSKBB001'
";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$ffp_a_pos=$row['ffp_a_pos'];


*/

$series1 = array();
$series1['name'] = 'Whole Blood';
$series1['data'] = array();

array_push($series1['data'], $wb_a_pos1);
array_push($series1['data'], $wb_a_pos2);
array_push($series1['data'], $wb_a_pos3);
array_push($series1['data'], $wb_a_pos4);
array_push($series1['data'], $wb_a_pos5);
array_push($series1['data'], $wb_a_pos6);
array_push($series1['data'], $wb_a_pos7);
array_push($series1['data'], $wb_a_pos8);
array_push($series1['data'], $wb_a_pos9);
array_push($series1['data'], $wb_a_pos10);

$series2 = array();
$series2['name'] = 'PCV';
$series2['data'] = array();

array_push($series2['data'], $pcv_a_pos1);
array_push($series2['data'], $pcv_a_pos2);
array_push($series2['data'], $pcv_a_pos3);
array_push($series2['data'], $pcv_a_pos4);
array_push($series2['data'], $pcv_a_pos5);
array_push($series2['data'], $pcv_a_pos6);
array_push($series2['data'], $pcv_a_pos7);
array_push($series2['data'], $pcv_a_pos8);
array_push($series2['data'], $pcv_a_pos9);
array_push($series2['data'], $pcv_a_pos10);

$series3 = array();
$series3['name'] = 'RDP';
$series3['data'] = array();

array_push($series3['data'], $rdp_a_pos1);
array_push($series3['data'], $rdp_a_pos2);
array_push($series3['data'], $rdp_a_pos3);
array_push($series3['data'], $rdp_a_pos4);
array_push($series3['data'], $rdp_a_pos5);
array_push($series3['data'], $rdp_a_pos6);
array_push($series3['data'], $rdp_a_pos7);
array_push($series3['data'], $rdp_a_pos8);
array_push($series3['data'], $rdp_a_pos9);
array_push($series3['data'], $rdp_a_pos10);


$series4 = array();
$series4['name'] = 'FFP';
$series4['data'] = array();

array_push($series4['data'], $ffp_a_pos1);
array_push($series4['data'], $ffp_a_pos2);
array_push($series4['data'], $ffp_a_pos3);
array_push($series4['data'], $ffp_a_pos4);
array_push($series4['data'], $ffp_a_pos5);
array_push($series4['data'], $ffp_a_pos6);
array_push($series4['data'], $ffp_a_pos7);
array_push($series4['data'], $ffp_a_pos8);
array_push($series4['data'], $ffp_a_pos9);
array_push($series4['data'], $ffp_a_pos10);



$response = array();
array_push($response, $series1);
array_push($response, $series2);
array_push($response, $series3);
array_push($response, $series4);
/*array_push($response, $wb_a_pos3);
array_push($response, $wb_a_pos4);
array_push($response, $wb_a_pos5);
array_push($response, $wb_a_pos6);
array_push($response, $wb_a_pos7);
array_push($response, $wb_a_pos8);
array_push($response, $wb_a_pos9);
array_push($response, $wb_a_pos10);*/



print json_encode($response,JSON_NUMERIC_CHECK);


?>