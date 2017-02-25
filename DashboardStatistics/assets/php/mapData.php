<?php
$con=mysqli_connect('localhost','root','root123','db_bloodbank') or die(mysqli_error($con));

$sqldata = mysqli_query($con,"select * from latlondetails");

$rows = array();
while($r = mysqli_fetch_assoc($sqldata)) {
  $rows[] = $r;
}

echo json_encode($rows);
?>





