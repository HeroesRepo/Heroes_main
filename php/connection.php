<?php
$con=mysqli_connect('localhost','root','','db_bloodbank') or die(mysql_error($con));
//$con=mysqli_connect('localhost','root','droughtisbad1#','db_bloodbank') or die(mysqli_error($con));
$query=mysqli_query($con, "SET SESSION time_zone = '+5:30'");
?>