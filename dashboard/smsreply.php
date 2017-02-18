<?php
include "include/connection.php";
//$mobile = $_GET["mobile"];
//$msg =  $_GET["msg"];
$msg =  "BLOOD B+";
$data = json_encode($_GET);
$reply = "";
		
switch ($msg) {
    case "BLOOD":
        $reply = "Please send the Blood type, E.x. BLOOD B+";
        break;
    case "BLOOD B+":
            
            $q = "select info.bb_name , curr.wb_b_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where wb_b_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){

               // $reply.=$row['bb_name']."Stock:".$row['stock']."Contact No.:".$row['contact_no'];
                //$new = nl2br($reply);
                //$foo = 'bar'; 
                //echo nl2br("Hello \n $foo!");
                
                $reply.=$row['bb_name']."\nStock:".$row['stock']."\nContact No.:".$row['contact_no']."\n\n";
            
            }
           
        break;
    case "BLOOD B-":
          
            $q = "select info.bb_name , curr.wb_b_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where wb_b_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.= $row['bb_name'] . " ," . $row['stock'] ." ," . $row['contact_no'] ." ," . $row['altcontact_no'] . "<br>";
            }
        break;
    case "BLOOD A+":
           
            $q = "select info.bb_name , curr.wb_a_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where wb_a_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.= $row['bb_name'] . " ," . $row['stock'] ." ," . $row['contact_no'] ." ," . $row['altcontact_no'] . "<br>";
            }
        break;
    case "BLOOD A-":
           
            $q = "select info.bb_name , curr.wb_a_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where wb_a_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.= $row['bb_name'] . " ," . $row['stock'] ." ," . $row['contact_no'] ." ," . $row['altcontact_no'] . "<br>";
            }

        break;
    case "BLOOD O+":
         
            $q = "select info.bb_name , curr.wb_o_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where wb_o_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.= $row['bb_name'] . " ," . $row['stock'] ." ," . $row['contact_no'] ." ," . $row['altcontact_no'] . "<br>";
            }
        break;
    case "BLOOD O-":
       
            $q = "select info.bb_name , curr.wb_o_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where wb_o_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
           $reply.= "<li>".$row['bb_name'] . " ," . $row['stock'] ." ," . $row['contact_no'] ." ," . $row['altcontact_no'] . "</li>";
            }
        break;
    case "BLOOD AB+":
        
            $q = "select info.bb_name , curr.wb_ab_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where wb_ab_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.= $row['bb_name'] . " ," . $row['stock'] ." ," . $row['contact_no'] ." ," . $row['altcontact_no'] . "<br>";
            }
        break;
    case "BLOOD AB-":
        
            $q = "select info.bb_name , curr.wb_ab_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where wb_ab_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.= $row['bb_name'] . " ," . $row['stock'] ." ," . $row['contact_no'] ." ," . $row['altcontact_no'] . "<br>";
            }
        break;
}
	
echo nl2br($reply);
		


?>