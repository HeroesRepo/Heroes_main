<?php
ini_set('display_errors',1); 
error_reporting(E_ALL);
include 'connection.php';
$query="select bb_broadcast.bb_regno, bb_info.bb_name, bb_broadcast.broadcast FROM bb_broadcast LEFT JOIN bb_info ON bb_broadcast.bb_regno = bb_info.bb_regno";

$result=mysqli_query($con,$query);

$rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
//echo result as json
echo json_encode($rows);
?>





