<?php

$con=mysqli_connect("localhost","root","","db_bloodbank") or die(mysqli_error());

$query=mysqli_query($con,"SET SESSION time_zone = '+5:30'");


?>