<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <!-- Table style -->
 

</head>

<body>
<?php
if($_POST['request'])
{
$request=ltrim($_POST['request']);
//$string = preg_replace('/\s+/','',$string);
include "include/connection.php";
$query="select distinct dn_name,dn_gender,dn_phoneno from donors_master where dn_bloodgroup='$request' && dn_checkbox='true'";
$result=mysqli_query($con,$query);
echo "<br />Total Number of Records: ".mysqli_num_rows($result);
          if (mysqli_num_rows($result) == 0) {
                                    /*echo "<br>";
                                    echo "Record Not Found....!!!"; */
                                   } 

          else { 
        ?>
            <div id="no-more-tables">
                <table class="col-md-12 table table-hover cf center" id="example2">
                    <thead class="cf">
                        <tr>
                           
                            <th style="text-align: center;">Name</th>
                            <th style="text-align: center;">Gender</th>
                            <th style="text-align: center;">Phone No.</th>
                           
                        </tr>
                    </thead>
                    <tbody>
            <?php
                while($row=mysqli_fetch_array($result))
                  {
                    ?>
                           <tr>
                              
                              <td class="center" data-title="Name" style="text-align: center;"><?php echo $row['dn_name']?></td>
                              <td class="center" data-title="Gender" style="text-align: center;"><?php echo $row['dn_gender']?></td>
                              <td class="center" data-title="Phone No" style="text-align: center;"><?php echo $row['dn_phoneno']?></td>
                            <!--  <td class="center" data-title="Birthdate" style="text-align: center;">
                            <?php echo $row['dn_birthdate']?></td> -->
                            </tr>
                           <?php
                  };  
                ?>
                      </tbody>
                  
            </table>
          </div>
      <?php
      };
    ?>
<?php
}
?>
</body>
</html>


