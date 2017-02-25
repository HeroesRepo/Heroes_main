<?php
include "assets/php/connection.php";
    if(isset($_POST['submit']))
        {
            session_start();    
            $username=$_POST['username']; 
            $password=$_POST['password']; 
           // $encrypted_mypassword=md5($password);


$sql=mysqli_query($con,"select * FROM dashboard_admin WHERE username='$username' and password='$password'") or die(mysqli_error($con));
//$result=mysql_query($sql);

            if(mysqli_num_rows($sql)==1)
            {
                $row=mysqli_fetch_array($sql);
                
                
                
                
                    echo"<script>";
                    echo"window.location.href='dashboard.php'";
                    echo"</script>";
                }
                else
                {

                    $query=mysqli_query($con,"select * from dashboard_admin where username='$username'") or die(mysql_error($con));
                    if(mysqli_num_rows($query)==1)
                    {

                            $query1=mysqli_query($con,"select * from dashboard_admin where password='$password'") or die(mysql_error($con));
                            if(mysqli_num_rows($query1)==1)
                            {

                            }
                            else
                            {
                                echo"<script>";
                                echo "alert('Password is incorrect...!');";
                                echo"</script>";
                            }



                    }
                    else
                    {
                        echo"<script>";
                        echo "alert('Username is incorrect...! Please Sign-In to continue...!');";
                        echo"</script>";
                    }

                    
                            
                            
                    
                }
            }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Heroes</title>
	 <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style>
          .heroes-logo{
            margin: 0 auto;
            width: 200px;
          }
          body{
            background-color:  #9bb6c6;
          }
          .formdesign{
            margin: 0 auto; 
            width: 60%;
          }
          .container-fluid1{
           margin-top: 50px; 
          }
         .container-fluid2{
           margin-top: 35px; 
          }
      </style>
</head>
<body>


<div class="container-fluid1">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
            <img class="img-responsive heroes-logo" src="assets/img/logo.png"  alt="logo_image"  >
        </div>
		<div class="col-md-3"></div>
	</div>
</div>

<div class="container-fluid2">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
                    <div class="container formdesign">
                      <form method="post">
                        <div class="form-group">
                          <label for="username">Username:</label>
                          <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
                        </div>
                        <center><button type="submit" name="submit" class="btn btn-default">Submit</button></center>
                      </form>
                    </div>
                </div>
        <div class="col-md-3"></div>
    </div>
</div>
</body>
</html>