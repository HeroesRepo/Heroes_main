<?php

session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {

header ("Location: index.php");

}
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


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="assets/js/visitorData.js"></script> 
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="https://heroes.org.in" class="simple-text" target="_blank">
                    Heroes
                </a>
            </div>

            <ul class="nav">
                <li>
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
                <li class="active">
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
                    <a class="navbar-brand" href="#">Visitors Statistics</a>
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


       <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                            </div>
                        <div class="content">
                                <form method="post" id="formId">
                                    <div class="container-fluid">
                                     <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                  <label for="bloodgroup">Bloodgroup:</label>
                                                  <input type="date" name="startDate" id="startDate" class="form-control">
                                                </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="form-group">
                                                  <label for="bloodbankname">Blood Banks:</label>
                                                   <input type="date" name="endDate" id="endDate" class="form-control">
                                                </div>
                                              </div>
                                              <div class="col-md-4">
                                                 
                                              </div>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                  <label for="bloodgroup">Bloodgroup:</label>
                                                  <select class="form-control" id="bloodgroup" name="bloodgroup">
                                                    <option value="">Bloodgroup</option>
                                                    <option value="a_pos">A+ve</option>
                                                    <option value="b_pos">B+ve</option>
                                                    <option value="ab_pos">AB+ve</option>
                                                    <option value="o_pos">O+ve</option>
                                                    <option value="a_neg">A-ve</option>
                                                    <option value="b_neg">B-ve</option>
                                                    <option value="ab_neg">AB-ve</option>
                                                    <option value="o_neg">O-ve</option>
                                                    <option value="bombay">Bombay Blood Group</option>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="form-group">
                                                  <label for="bloodbankname">Blood Banks:</label>
                                                  <select class="form-control" id="bloodbankname">
                                                  <option value="">Blood Banks</option>
                                                    <option value="NSKBB001">Nashik Blood Bank</option>
                                                    <option value="NSKBB002">Samta Blood Bank</option>
                                                    <option value="NSKBB003">Arpan Blood Bank</option>
                                                    <option value="NSKBB004">Jankalyan Blood Bank</option>
                                                    <option value="NSKBB005">Bytco Blood Bank</option><option value="NSKBB006">Jeevan Blood Bank</option>
                                                    <option value="NSKBB007">Sanjeevani Blood Bank</option>
                                                    <option value="NSKBB008">Metro Blood Bank</option>
                                                    <option value="NSKBB009">MVP Hospital Blood Bank</option>
                                                    <option value="NSKBB010">Government RRH Blood Bank</option>
                                                    </select>
                                                </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="form-group">
                                                  <label for="bloodgroup">&nbsp;</label>
                                                 <button type="submit" name="submit" class="btn btn-default" style="margin-top: 23px;" id="submit">Submit</button>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                   </form>
                                   <div id="container"></div>
                                   </div>
                            </div>
                        </div>
                    </div>
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
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> -->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>