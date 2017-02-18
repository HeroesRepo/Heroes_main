<?php
$con=mysqli_connect('localhost','root','root123','map-marker') or die(mysqli_error($con));

$sqldata = mysqli_query($con,"SELECT * FROM `latlon-table`");

$rows = array();
while($r = mysqli_fetch_assoc($sqldata)) {
  $rows[] = $r;
}

echo json_encode($rows);
?>





