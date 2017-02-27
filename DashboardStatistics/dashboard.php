<?php

session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {

header ("Location: index.php");

}
?>
<?php
include "assets/php/connection.php";
//include "assets/php/SessionNotSet.php"
/*$q="select * from donors_master where dn_gender='Male'";
$result=mysqli_query($con,$q);
$male=mysqli_num_rows($result);

$q="select * from donors_master where dn_gender='Female'";
$result=mysqli_query($con,$q);
$female=mysqli_num_rows($result);*/

//$totalVisitors=0;
$totalMsgCall=0;

$que="select * from donors_master";
$result=mysqli_query($con,$que);
$totalDonors=mysqli_num_rows($result);

$query="select * from getclick_count";
$result=mysqli_query($con,$query);
$totalSearches=mysqli_num_rows($result);


$totalVisitors = trim(file_get_contents('../php/count_file.txt'));

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Heroes</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--  Card   -->
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$( document ).ready(function() {
    $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
  });
});
</script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="https://heroes.org.in" class="simple-text" target="_blank">
                    Heroes
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="searchData.html">
                        <i class="pe-7s-user"></i>
                        <p>Search Statistics</p>
                    </a>
                </li>
                <li>
                    <a href="donorData.php">
                        <i class="pe-7s-note2"></i>
                        <p>Donor Statistics</p>
                    </a>
                </li>
                <li>
                    <a href="visitorData.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Visitors Statistics</p>
                    </a>
                </li>
                <li>
                    <a href="maps.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="w3-panel w3-card-16 w3-hover-shadow">
                     <center>
                            <div class="header" style="color: #f06292">
                               <h3>Visitors</h3>   
                            </div>
                            <div class="content">
                                <button class="btn btn-default"><div><h3 class="count"><?php echo $totalVisitors;?></h3></div></button>
                            </div>
                             <br>
                            </center>
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="w3-panel w3-card-16 w3-hover-shadow">
                     <center>
                            <div class="header" style="color: #81c784">
                               <h3>Messages & calls</h3>   
                            </div>
                            <div class="content">
                                <button class="btn btn-default"><div><h3 class="count"><?php echo $totalMsgCall;?></h3></div></button>
                            </div>
                             <br>
                            </center>
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="w3-panel w3-card-16 w3-hover-shadow">
                     <center>
                            <div class="header" style="color: #303f9f">
                               <h3>Donors</h3>   
                            </div>
                            <div class="content">
                                <button class="btn btn-default"><div><h3 class="count"><?php echo $totalDonors;?></h3></div></button>
                            </div>
                             <br>
                            </center>
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="w3-panel w3-card-16 w3-hover-shadow">
                     <center>
                            <div class="header" style="color: #d4e157">
                               <h3>Searches</h3>   
                            </div>
                            <div class="content">
                                <button class="btn btn-default"><div><h3 class="count"><?php echo $totalSearches;?></h3></div></button>
                            </div>
                             <br>
                            </center>
                        </div>
                </div>
                
                
            </div>
        </div>
<br>  


        <div class="content">
            <div class="container-fluid">
              


                <div class="row">
                </div>
                    <!-- <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">2014 Sales</h4>
                                <p class="category">All products including Taxes</p>
                            </div>
                            <div class="content">
                                <div id="chartActivity" class="ct-chart"></div>
                    
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Tesla Model S
                                        <i class="fa fa-circle text-danger"></i> BMW 5 Series
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                   <!--  <div class="col-md-6">
                       <div class="card ">
                           <div class="header">
                               
                           </div>
                           <div class="content">
                               <div class="table-full-width">
                                  
                               </div>
                   
                               <div class="footer">
                                   <hr>
                                   <div class="stats">
                                       <i class="fa fa-history"></i> Updated 3 minutes ago
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div> -->
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">Copyright
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Heroes</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
                $(document).ready(function(){
        
                    demo.initChartist();
        
                });
        </script>
  
</html>
