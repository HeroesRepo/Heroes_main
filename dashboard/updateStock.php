<?php
session_start();
if (!(isset($_SESSION['bb_regno']) && $_SESSION['bb_regno'] != '')) {

header ("Location: index.php");

}
?>
<?php
include "include/connection.php";
$query2='select * from bb_info where bb_regno="'.$_SESSION['bb_regno'].'"  ';
    $res2=mysqli_query($con,$query2);
    $rec=mysqli_fetch_array($res2);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Heroes</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script> -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
   <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
   <!-- Table style -->
   <link rel="stylesheet" type="text/css" href="dist/css/table.css">

  <!--   <link rel="stylesheet" href="dist/css/stylesheet.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  
  <style>
  .input-group{
  padding-bottom:10px;
  }
  #rcorners {
    border-radius: 25px;
    padding: 8px; 
}

 </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<script>
  $(document).ready(function() {
$('#submitBtn').attr('disabled', true);
$('input[type="text"]').on('keyup',function() {
    //var textarea_value = $("#texta").val();
    var wb_a_posNew = $('input[name="wb_a_pos"]').val();
    var wb_b_posNew = $('input[name="wb_b_pos"]').val();
    var wb_ab_posNew = $('input[name="wb_ab_pos"]').val();
    var wb_o_posNew = $('input[name="wb_o_pos"]').val();
    var wb_a_negNew = $('input[name="wb_a_neg"]').val();
    var wb_b_negNew = $('input[name="wb_b_neg"]').val();
    var wb_ab_negNew = $('input[name="wb_ab_neg"]').val();
    var wb_o_negNew = $('input[name="wb_o_neg"]').val();

    var pcv_a_posNew = $('input[name="pcv_a_pos"]').val();
    var pcv_b_posNew = $('input[name="pcv_b_pos"]').val();
    var pcv_ab_posNew = $('input[name="pcv_ab_pos"]').val();
    var pcv_o_posNew = $('input[name="pcv_o_pos"]').val();
    var pcv_a_negNew = $('input[name="pcv_a_neg"]').val();
    var pcv_b_negNew = $('input[name="pcv_b_neg"]').val();
    var pcv_ab_negNew = $('input[name="pcv_ab_neg"]').val();
    var pcv_o_negNew = $('input[name="pcv_o_neg"]').val();

    var rdp_a_posNew = $('input[name="rdp_a_pos"]').val();
    var rdp_b_posNew = $('input[name="rdp_b_pos"]').val();
    var rdp_ab_posNew = $('input[name="rdp_ab_pos"]').val();
    var rdp_o_posNew = $('input[name="rdp_o_pos"]').val();
    var rdp_a_negNew = $('input[name="rdp_a_neg"]').val();
    var rdp_b_negNew = $('input[name="rdp_b_neg"]').val();
    var rdp_ab_negNew = $('input[name="rdp_ab_neg"]').val();
    var rdp_o_negNew = $('input[name="rdp_o_neg"]').val();

    var ffp_a_posNew = $('input[name="ffp_a_pos"]').val();
    var ffp_b_posNew = $('input[name="ffp_b_pos"]').val();
    var ffp_ab_posNew = $('input[name="ffp_ab_pos"]').val();
    var ffp_o_posNew = $('input[name="ffp_o_pos"]').val();
    var ffp_a_negNew = $('input[name="ffp_a_neg"]').val();
    var ffp_b_negNew = $('input[name="ffp_b_neg"]').val();
    var ffp_ab_negNew = $('input[name="ffp_ab_neg"]').val();
    var ffp_o_negNew = $('input[name="ffp_o_neg"]').val();

    if(wb_a_posNew != '' && wb_b_posNew != '' && wb_ab_posNew != '' && wb_o_posNew != '' && wb_a_negNew != '' && wb_b_negNew != '' && wb_ab_negNew != '' && wb_o_negNew != '' && pcv_a_posNew != '' && pcv_b_posNew != '' && pcv_ab_posNew != '' && pcv_o_posNew != '' && pcv_a_negNew != '' && pcv_b_negNew != '' && pcv_ab_negNew != '' && pcv_o_negNew != '' && rdp_a_posNew != '' && rdp_b_posNew != '' && rdp_ab_posNew != '' && rdp_o_posNew != '' && rdp_a_negNew != '' && rdp_b_negNew != '' && rdp_ab_negNew != '' && rdp_o_negNew != '' && ffp_a_posNew != '' && ffp_b_posNew != '' && ffp_ab_posNew != '' && ffp_o_posNew != '' && ffp_a_negNew != '' && ffp_b_negNew != '' && ffp_ab_negNew != '' && ffp_o_negNew != '') {
        $('#submitBtn').attr('disabled' , false);
    }else{
        $('#submitBtn').attr('disabled' , true);
    }
});

});
</script>
 <script>
  $( document ).ready(function() {
    var currentBoxNumber = 0;
    $(".form-control").keyup(function (event) {
        if (event.keyCode == 13) {
            textboxes = $("input.form-control");
            currentBoxNumber = textboxes.index(this);
           // console.log(textboxes.index(this));
            if (textboxes[currentBoxNumber + 1] != null) {
                nextBox = textboxes[currentBoxNumber + 1];
                nextBox.focus();
                nextBox.select();
                event.preventDefault();
                return false;
            }
        }
});



    $('#submitBtn').click(function() {
         $('#wb_a_pos1').text(populateModal($('#wb_a_pos').val()));
         $('#wb_a_neg1').text(populateModal($('#wb_a_neg').val()));
         $('#wb_b_pos1').text(populateModal($('#wb_b_pos').val()));
         $('#wb_b_neg1').text(populateModal($('#wb_b_neg').val()));
         $('#wb_o_pos1').text(populateModal($('#wb_o_pos').val()));
         $('#wb_o_neg1').text(populateModal($('#wb_o_neg').val()));
         $('#wb_ab_pos1').text(populateModal($('#wb_ab_pos').val()));
         $('#wb_ab_neg1').text(populateModal($('#wb_ab_neg').val()));
         $('#pcv_a_pos1').text(populateModal($('#pcv_a_pos').val()));
         $('#pcv_a_neg1').text(populateModal($('#pcv_a_neg').val()));
         $('#pcv_b_pos1').text(populateModal($('#pcv_b_pos').val()));
         $('#pcv_b_neg1').text(populateModal($('#pcv_b_neg').val()));
         $('#pcv_o_pos1').text(populateModal($('#pcv_o_pos').val()));
         $('#pcv_o_neg1').text(populateModal($('#pcv_o_neg').val()));
         $('#pcv_ab_pos1').text(populateModal($('#pcv_ab_pos').val()));
         $('#pcv_ab_neg1').text(populateModal($('#pcv_ab_neg').val()));
         $('#rdp_a_pos1').text(populateModal($('#rdp_a_pos').val()));
         $('#rdp_a_neg1').text(populateModal($('#rdp_a_neg').val()));
         $('#rdp_b_pos1').text(populateModal($('#rdp_b_pos').val()));
         $('#rdp_b_neg1').text(populateModal($('#rdp_b_neg').val()));
         $('#rdp_o_pos1').text(populateModal($('#rdp_o_pos').val()));
         $('#rdp_o_neg1').text(populateModal($('#rdp_o_neg').val()));
         $('#rdp_ab_pos1').text(populateModal($('#rdp_ab_pos').val()));
         $('#rdp_ab_neg1').text(populateModal($('#rdp_ab_neg').val()));
         $('#ffp_a_pos1').text(populateModal($('#ffp_a_pos').val()));
         $('#ffp_a_neg1').text(populateModal($('#ffp_a_neg').val()));
         $('#ffp_b_pos1').text(populateModal($('#ffp_b_pos').val()));
         $('#ffp_b_neg1').text(populateModal($('#ffp_b_neg').val()));
         $('#ffp_o_pos1').text(populateModal($('#ffp_o_pos').val()));
         $('#ffp_o_neg1').text(populateModal($('#ffp_o_neg').val()));
         $('#ffp_ab_pos1').text(populateModal($('#ffp_ab_pos').val()));
         $('#ffp_ab_neg1').text(populateModal($('#ffp_ab_neg').val()));
         $('#wb_bombay1').text(populateModal($('#wb_bombay').val()));
         $('#pcv_bombay1').text(populateModal($('#pcv_bombay').val()));
         $('#rdp_bombay1').text(populateModal($('#rdp_bombay').val()));
         $('#ffp_bombay1').text(populateModal($('#ffp_bombay').val()));
 });

    var populateModal = function(val){
      if(val == "")
        return 0;
      else
        return val;

    }
});
</script>
<script>

function myFunction() {


               var populateModal_submit = function(value){
                    if(value == "")
                      return 0;
                    else
                      return value;

                  } 

              var date = populateModal_submit(document.getElementById("date").value);
              var wb_a_pos = populateModal_submit(document.getElementById("wb_a_pos").value);
              var wb_a_neg = populateModal_submit(document.getElementById("wb_a_neg").value);
              var wb_b_pos = populateModal_submit(document.getElementById("wb_b_pos").value);
              var wb_b_neg = populateModal_submit(document.getElementById("wb_b_neg").value);
              var wb_o_pos = populateModal_submit(document.getElementById("wb_o_pos").value);
              var wb_o_neg = populateModal_submit(document.getElementById("wb_o_neg").value);
              var wb_ab_pos = populateModal_submit(document.getElementById("wb_ab_pos").value);
              var wb_ab_neg = populateModal_submit(document.getElementById("wb_ab_neg").value);
              var pcv_a_pos = populateModal_submit(document.getElementById("pcv_a_pos").value);
              var pcv_a_neg = populateModal_submit(document.getElementById("pcv_a_neg").value);
              var pcv_b_pos = populateModal_submit(document.getElementById("pcv_b_pos").value);
              var pcv_b_neg = populateModal_submit(document.getElementById("pcv_b_neg").value);
              var pcv_o_pos = populateModal_submit(document.getElementById("pcv_o_pos").value);
              var pcv_o_neg = populateModal_submit(document.getElementById("pcv_o_neg").value);
              var pcv_ab_pos = populateModal_submit(document.getElementById("pcv_ab_pos").value);
              var pcv_ab_neg = populateModal_submit(document.getElementById("pcv_ab_neg").value);
              var rdp_a_pos = populateModal_submit(document.getElementById("rdp_a_pos").value);
              var rdp_a_neg = populateModal_submit(document.getElementById("rdp_a_neg").value);
              var rdp_b_pos = populateModal_submit(document.getElementById("rdp_b_pos").value);
              var rdp_b_neg = populateModal_submit(document.getElementById("rdp_b_neg").value);
              var rdp_o_pos = populateModal_submit(document.getElementById("rdp_o_pos").value);
              var rdp_o_neg = populateModal_submit(document.getElementById("rdp_o_neg").value);
              var rdp_ab_pos = populateModal_submit(document.getElementById("rdp_ab_pos").value);
              var rdp_ab_neg = populateModal_submit(document.getElementById("rdp_ab_neg").value);
              var ffp_a_pos = populateModal_submit(document.getElementById("ffp_a_pos").value);
              var ffp_a_neg = populateModal_submit(document.getElementById("ffp_a_neg").value);
              var ffp_b_pos = populateModal_submit(document.getElementById("ffp_b_pos").value);
              var ffp_b_neg = populateModal_submit(document.getElementById("ffp_b_neg").value);
              var ffp_o_pos = populateModal_submit(document.getElementById("ffp_o_pos").value);
              var ffp_o_neg = populateModal_submit(document.getElementById("ffp_o_neg").value);
              var ffp_ab_pos = populateModal_submit(document.getElementById("ffp_ab_pos").value);
              var ffp_ab_neg = populateModal_submit(document.getElementById("ffp_ab_neg").value);
              var wb_bombay = populateModal_submit(document.getElementById("wb_bombay").value);
              var pcv_bombay = populateModal_submit(document.getElementById("pcv_bombay").value);
              var rdp_bombay = populateModal_submit(document.getElementById("rdp_bombay").value);
              var ffp_bombay = populateModal_submit(document.getElementById("ffp_bombay").value);

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'date1=' + date + '&wb_a_pos1=' + wb_a_pos + '&wb_a_neg1=' + wb_a_neg + '&wb_b_pos1=' + wb_b_pos + '&wb_b_neg1=' + wb_b_neg + '&wb_o_pos1=' + wb_o_pos + '&wb_o_neg1=' + wb_o_neg + '&wb_ab_pos1=' + wb_ab_pos + '&wb_ab_neg1=' + wb_ab_neg + '&pcv_a_pos1=' + pcv_a_pos + '&pcv_a_neg1=' + pcv_a_neg + '&pcv_b_pos1=' + pcv_b_pos + '&pcv_b_neg1=' + pcv_b_neg + '&pcv_o_pos1=' + pcv_o_pos + '&pcv_o_neg1=' + pcv_o_neg + '&pcv_ab_pos1=' + pcv_ab_pos + '&pcv_ab_neg1=' + pcv_ab_neg + '&rdp_a_pos1=' + rdp_a_pos + '&rdp_a_neg1=' + rdp_a_neg + '&rdp_b_pos1=' + rdp_b_pos + '&rdp_b_neg1=' + rdp_b_neg + '&rdp_o_pos1=' + rdp_o_pos + '&rdp_o_neg1=' + rdp_o_neg + '&rdp_ab_pos1=' + rdp_ab_pos + '&rdp_ab_neg1=' + rdp_ab_neg + '&ffp_a_pos1=' + ffp_a_pos + '&ffp_a_neg1=' + ffp_a_neg + '&ffp_b_pos1=' + ffp_b_pos + '&ffp_b_neg1=' + ffp_b_neg + '&ffp_o_pos1=' + ffp_o_pos + '&ffp_o_neg1=' + ffp_o_neg + '&ffp_ab_pos1=' + ffp_ab_pos + '&ffp_ab_neg1=' + ffp_ab_neg + '&wb_bombay1=' + wb_bombay + '&pcv_bombay1=' + pcv_bombay + '&rdp_bombay1=' + rdp_bombay + '&ffp_bombay1=' + ffp_bombay;
// AJAX code to submit form.

            $.ajax({
            type: "POST",
            url: "ajaxcallModal.php",
            data: dataString,
            cache: false,
            success: function(result) {
              
            //alert(result);
            $('#formfield')[0].reset();
            }
            });
        }     
</script>
<SCRIPT language=Javascript>
function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
            return true;
      }
</SCRIPT>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').value =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
</head>
<body class="hold-transition skin-blue sidebar-mini" onload="startTime()">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="updateStock.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">Heroes</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Heroes</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
   <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
 
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img  class="user-image img-responsive img-circle"  src="dist/img/download.jpg" alt="User profile picture">
            <span class="hidden-xs"><?php echo $rec['bb_name'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
            <img  class="profile-user-img img-responsive img-circle"  src="dist/img/download.jpg" alt="User profile picture">
            <p align="center"><?php echo $rec['bb_name'];?></p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
               <li class="user-footer">
               
                <div class="pull-centre"><center>
                  <a href="logout.php" class="btn btn-default btn-flat">Logout</a></center>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img  class="profile-user-img img-responsive img-circle"  src="dist/img/download.jpg" alt="User profile picture">
          </div>
        <div class="pull-left info">
          <p><?php echo $rec['bb_name'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
         <li><a href="#"><i class="fa fa-th-list"></i> <span>Update  Stock</span></a></li>
        <li><a href="currentdailyStock.php"><i class="fa fa-th"></i> <span>Current Stock</span></a></li>
       <li><a href="historicalStock.php"><i class="fa fa-table"></i> <span>Historical Stock</span></a></li>
       <li><a href="broadCast.php"><i class="fa fa-globe"></i> <span>Broadcast</span></a></li>
        <li><a href="findDonors.php"><i class="fa fa-search"></i> <span>Find Donors</span></a></li>
        <li><a href="userProfile.php"><i class="fa fa-user"></i> <span>Profile</span></a></li>
        <li><a href="changePassword.php"><i class="fa fa-save"></i> <span>Change Password</span></a></li>
          <li><a href="logout.php"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>    
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Update Stock
        <!--<small>advanced tables</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Update Stock</li>
      </ol>
    </section>

   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
        <div class="box-body">
             
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
          <div class="container-fluid">
                <div class="row">
                
               
                
                <div class="col-md-6">
                <div class="col-md-12" id="smalldivD" align="left">Date</div>
                <div class="col-md-12" align="left">
                <form role="form" id="formfield" method="post"  enctype="multipart/form-data" onkeypress="return event.keyCode != 13;">
                <input type="hidden" name="action" value="add_form" /> 
                        <div class="input-group" id="smalldivD">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                 <input type="date" value="<?php echo date('Y-m-d'); ?>" name="date" placeholder="01/02/2014" class="form-control" id="date"/>
                 <input type="text" name="zero" id="zero" hidden="">
                  </div>
            </div>
        </div>
                
   
                <div class="col-md-6">
                <div class="col-md-12" align="left">Time</div>
                 <div class="col-md-12" align="left">
                 <div class="input-group" id="smalldivT">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                 <input type="text" name="time" class="form-control" id="txt"/>
                  </div>
                 </div> 
              </div></div>
        
      
             <div class="col-md-12" id="smalldivD" align="left"><p>Daily Stock</p></div>
             
                <div class="col-md-12" style="background-color: #9ab4bd" id="rcorners"><div class="col-md-12"><b>Whole Blood<span>*</span> :</b></div>
               <div class="col-md-12">&nbsp;</div>
                <div class="tab-content">
             
    <div id="wb" class="tab-pane fade in active">
    
                        
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">A+</span>
                          <input type="text" class="form-control input" placeholder="" aria-describedby="basic-addon1" name="wb_a_pos" onkeypress="return isNumberKey(event)" id="wb_a_pos" required>
                        </div>
                 </div>
                
                
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">B+</span>
                           <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="wb_b_pos" onkeypress="return isNumberKey(event)" id="wb_b_pos" required>            
                        </div>
                 </div>
                <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">AB+</span>
                            <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="wb_ab_pos" onkeypress="return isNumberKey(event)" id="wb_ab_pos" required>
                        </div>
                 </div>
                 <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">O+</span>
                           <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="wb_o_pos" onkeypress="return isNumberKey(event)" id="wb_o_pos" required>
                        </div>
                 </div>
                 <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">ANeg</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="wb_a_neg" onkeypress="return isNumberKey(event)" id="wb_a_neg" required>
                        </div>
                 </div>
                 <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">BNeg</span>
                           <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="wb_b_neg" onkeypress="return isNumberKey(event)" id="wb_b_neg" required> 
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">ABNeg</span>
                           <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="wb_ab_neg" onkeypress="return isNumberKey(event)" id="wb_ab_neg" required>
                        
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">ONeg</span>
                           <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="wb_o_neg" onkeypress="return isNumberKey(event)" id="wb_o_neg" required>
                   </div>
                 </div>
             </div>
            </div></div>
 <!-- PCV Tab --><div class="col-md-12">&nbsp;</div>
  <div class="col-md-12" style="background-color: #d56073" id="rcorners">
        <div class="col-md-12"><b>PCV<span>*</span> :</b></div>
        <div class="col-md-12">&nbsp;</div>
              <div id="pcv">
                            
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">A+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="pcv_a_pos" onkeypress="return isNumberKey(event)" id="pcv_a_pos" required>
                        </div>
                 </div>

                <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">B+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="pcv_b_pos" onkeypress="return isNumberKey(event)" id="pcv_b_pos" required>
                        </div>
                 </div>  

                  <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">AB+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="pcv_ab_pos" onkeypress="return isNumberKey(event)" id="pcv_ab_pos" required>
                        </div>
                 </div>

                 <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">O+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="pcv_o_pos" onkeypress="return isNumberKey(event)" id="pcv_o_pos" required>
                        </div>
                 </div>
                 
                
                
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">ANeg</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="pcv_a_neg" onkeypress="return isNumberKey(event)" id="pcv_a_neg" required>
                        </div>
                 </div>
                 
                 
             
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">BNeg</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="pcv_b_neg" onkeypress="return isNumberKey(event)" id="pcv_b_neg" required>
                        </div>
                 </div>
                 
                  <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">ABNeg</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="pcv_ab_neg" onkeypress="return isNumberKey(event)" id="pcv_ab_neg" required>
                        </div>
                 </div>
                 
            <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">ONeg</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="pcv_o_neg" onkeypress="return isNumberKey(event)" id="pcv_o_neg" required>
                        </div>
            </div>
    
              </div>
            </div>
          <!-- /PCV Tab -->
          <!-- RDP Tab --><div class="col-md-12">&nbsp;</div>
        <div class="col-md-12" style="background-color: #ec9e69" id="rcorners">   
        <div class="col-md-12"><b>RDP<span>*</span> :</b></div>
        <div class="col-md-12">&nbsp;</div> 

           <div id="rdp">
    
                      
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">A+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="rdp_a_pos" onkeypress="return isNumberKey(event)" id="rdp_a_pos" required>
                        </div>
                 </div>
                <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">B+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="rdp_b_pos" onkeypress="return isNumberKey(event)" id="rdp_b_pos" required>
                        </div>
                 </div>
                 <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">AB+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="rdp_ab_pos" onkeypress="return isNumberKey(event)" id="rdp_ab_pos" required>
                        </div>
                 </div>
                  <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">O+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="rdp_o_pos" onkeypress="return isNumberKey(event)" id="rdp_o_pos">
                        </div>
                 </div>
                <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">ANeg</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="rdp_a_neg" onkeypress="return isNumberKey(event)" id="rdp_a_neg">
                        </div>
                 </div>
                 <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">BNeg</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="rdp_b_neg" onkeypress="return isNumberKey(event)" id="rdp_b_neg">
                        </div>
                 </div>
                 <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">ABNeg</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="rdp_ab_neg" onkeypress="return isNumberKey(event)" id="rdp_ab_neg">
                        </div>
                 </div>
                 <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">ONeg</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="rdp_o_neg" onkeypress="return isNumberKey(event)" id="rdp_o_neg">
                        </div>
                 </div>     
            </div>
        </div>
      <!-- /RDP Tab -->
                <!-- FFP Tab --><div class="col-md-12">&nbsp;</div> 
        <div class="col-md-12" style="background-color: #ffff8f"  id="rcorners">  
        <div class="col-md-12"><b>FFP<span>*</span> :</b></div>
        <div class="col-md-12">&nbsp;</div> 

    <div id="ffp" class="ffp">
    
                  
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">A+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="ffp_a_pos" onkeypress="return isNumberKey(event)" id="ffp_a_pos">
                        </div>
                 </div>
                 <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">B+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="ffp_b_pos" onkeypress="return isNumberKey(event)" id="ffp_b_pos">
                        </div>
                 </div>
                  <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">AB+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="ffp_ab_pos" onkeypress="return isNumberKey(event)" id="ffp_ab_pos">
                        </div>
                 </div>
                 <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">O+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="ffp_o_pos" onkeypress="return isNumberKey(event)" id="ffp_o_pos">
                        </div>
                 </div>
                <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">ANeg</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="ffp_a_neg" onkeypress="return isNumberKey(event)" id="ffp_a_neg">
                        </div>
                 </div>
                 <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">BNeg</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="ffp_b_neg" onkeypress="return isNumberKey(event)" id="ffp_b_neg">
                        </div>
                 </div>
                  <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">ABNeg</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="ffp_ab_neg" onkeypress="return isNumberKey(event)" id="ffp_ab_neg">
                        </div>
                 </div>
                 <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">ONeg</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="ffp_o_neg" onkeypress="return isNumberKey(event)" id="ffp_o_neg">
                        </div>
                 </div>
          </div>
          </div>
          <!-- BBG Tab --><div class="col-md-12">&nbsp;</div> 
        <div class="col-md-12" style="background-color: #dee5ed""  id="rcorners">  
        <div class="col-md-12"><b>Bombay Blood Group:</b></div>
        <div class="col-md-12">&nbsp;</div> 

    <div id="bombay_bg" class="bombay_bg">
    
                  
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">WB</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="wb_bombay" onkeypress="return isNumberKey(event)" id="wb_bombay">
                        </div>
                 </div>
                 <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">PCV</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="pcv_bombay" onkeypress="return isNumberKey(event)" id="pcv_bombay">
                        </div>
                 </div>
                  <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">RDP</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="rdp_bombay" onkeypress="return isNumberKey(event)" id="rdp_bombay">
                        </div>
                 </div>
                 <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">FFP</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="ffp_bombay" onkeypress="return isNumberKey(event)" id="ffp_bombay">
                        </div>
                 </div>

          </div>
          </div> 
          <div class="col-md-12">&nbsp;</div>
           <div class="col-md-12">
                 <p><b>Section marked with * are compulsory.</b></p>
                    </div> 
          <div class="col-md-12">&nbsp;</div>
          <div class="col-md-12">
                  <center>
                      <input type="button" name="btn" value="Submit" id="submitBtn" data-target="#confirm-submit" data-toggle="modal" class="btn btn-primary"/></center>
                    </div>       
          </div>

          </form> 
      </div>
  </div>
            <div class="col-md-2"></div>
            </div>
          </div>
           
         </div>
          <!-- /.box -->
       </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  <div id="footer">
      <img src= "images/logo.png" />
  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs"></div>
    <strong>Copyright &copy; 2016 <a href="#">Heroes</a>.</strong> All rights
    reserved.
  </footer>
 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



<div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 style="color: red">Are you sure you want to submit the following details?</h4>
            </div>
            
                
               
              <div id="no-more-tables">
                <table class="col-md-12 table table-hover cf table-bordered" id="example2" style="border: black">
                    <thead class="cf">
                        <tr>
                            <th>Component/Blood Group</th>
                            <th>A+ve</th>
                            <th>B+ve</th>
                            <th>AB+ve</th>
                            <th>O+ve</th>
                            <th>ANeg</th>
                            <th>BNeg</th>
                            <th>ABNeg</th>
                            <th>ONeg</th>
                            <th>BBG</th>
                        </tr>
                    </thead>
                    <tbody>
           
                            <tr>
                              <td data-title="Component">Whole Blood</td>
                              <td class="center" data-title="A+ve" id="wb_a_pos1"></td>
                              <td class="center" data-title="B+ve" id="wb_b_pos1"></td>
                              <td class="center" data-title="AB+ve" id="wb_ab_pos1"></td>
                              <td class="center" data-title="O+ve" id="wb_o_pos1"></td>
                              <td class="center" data-title="ANeg" id="wb_a_neg1"></td>
                              <td class="center" data-title="BNeg" id="wb_b_neg1"></td>
                              <td class="center" data-title="ABNeg" id="wb_ab_neg1"></td>         
                              <td class="center" data-title="ONeg" id="wb_o_neg1"></td>
                              <td class="center" data-title="BBG" id="wb_bombay1"></td>
                            </tr>

                             <tr>
                              <td data-title="Component">PCV</td>
                              <td class="center" data-title="A+ve" id="pcv_a_pos1"></td>
                              <td class="center" data-title="B+ve" id="pcv_b_pos1"></td>
                              <td class="center" data-title="AB+ve" id="pcv_ab_pos1"></td>
                              <td class="center" data-title="O+ve" id="pcv_o_pos1"></td>
                              <td class="center" data-title="ANeg" id="pcv_a_neg1"></td>
                              <td class="center" data-title="BNeg" id="pcv_b_neg1"></td>
                              <td class="center" data-title="ABNeg" id="pcv_ab_neg1"></td>        
                              <td class="center" data-title="ONeg" id="pcv_o_neg1"></td> 
                              <td class="center" data-title="BBG" id="pcv_bombay1"></td>
                            </tr>


                             <tr>
                              <td data-title="Component">RDP</td>
                              <td class="center" data-title="A+ve" id="rdp_a_pos1"></td>
                              <td class="center" data-title="B+ve" id="rdp_b_pos1"></td>
                              <td class="center" data-title="AB+ve" id="rdp_ab_pos1"></td>
                              <td class="center" data-title="O+ve" id="rdp_o_pos1"></td>
                              <td class="center" data-title="ANeg" id="rdp_a_neg1"></td>
                              <td class="center" data-title="BNeg" id="rdp_b_neg1"></td>
                              <td class="center" data-title="ABNeg" id="rdp_ab_neg1"></td>         
                              <td class="center" data-title="ONeg" id="rdp_o_neg1"></td>           
                              <td class="center" data-title="BBG" id="rdp_bombay1"></td>
                            </tr>


                             <tr>
                              <td data-title="Component">FFP</td>
                              <td class="center" data-title="A+ve" id="ffp_a_pos1"></td>
                              <td class="center" data-title="B+ve" id="ffp_b_pos1"></td>
                              <td class="center" data-title="AB+ve" id="ffp_ab_pos1"></td>
                              <td class="center" data-title="O+ve" id="ffp_o_pos1"></td>
                              <td class="center" data-title="ANeg" id="ffp_a_neg1"></td>
                              <td class="center" data-title="BNeg" id="ffp_b_neg1"></td>
                              <td class="center" data-title="ABNeg" id="ffp_ab_neg1"></td>        
                              <td class="center" data-title="ONeg" id="ffp_o_neg1"></td> 
                              <td class="center" data-title="BBG" id="ffp_bombay1"></td>
                            </tr>
                      </tbody>
                </table>
                
            </div>

        
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              <input type="submit" href="#" id="submit" class="btn btn-success success" name="Confirm" onclick="myFunction();" data-dismiss="modal"/> 
             <!--  <button id="submit" type="submit" name="submit" data-dismiss="modal" class="btn btn-success" onkeypress="myFunction();" value="Confirm">Confirm</button> -->
            </div>
        </div>
    </div>
</div>
<!-- jQuery 2.2.3 -->
<!-- <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script> -->
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script> 
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
