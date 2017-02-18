<?php

$mobile = $_GET["mobile"];
$msg =  $_GET["msg"];
//$msg =  "BLOOD O+";
$data = json_encode($_GET);
$reply = "";

function send_message($mob, $Msg){
    
    $ch = curl_init();
        // set URL and other appropriate options
        
        $sms_gate = "http://sms.technovalabs.com/sendsmsv2.asp?user=heroes&password=heroes777&sender=HEROES&PhoneNumber=". $mob ."&text="."'".$Msg."'"."&track=1";
        
        curl_setopt($ch, CURLOPT_URL, $sms_gate);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        // grab URL and pass it to the browser  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);     
        curl_exec($ch);
        
        // close cURL resource, and free up system resources        
        curl_close($ch);
    
    
}

// import database connection variables
         include "../php/connection.php";
        //require_once __DIR__ . '/db_config.php';
 		//require_once __DIR__ . '/utility.php';

switch ($msg) {
    case "BLOOD":
        $reply = "Please send Blood type e.g.O+";
        break;
    case "BLOOD B+":
         $q = "select info.bb_name , curr.wb_b_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where wb_b_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
                $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            
            }
        break;
        case "BLOOD B-":
          
            $q = "select info.bb_name , curr.wb_b_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where wb_b_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
           $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;

    case "BLOOD A+":
           
            $q = "select info.bb_name , curr.wb_a_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where wb_a_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;
    case "BLOOD A-":
           
            $q = "select info.bb_name , curr.wb_a_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where wb_a_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }

        break;

    case "BLOOD O+":
         
            $q = "select info.bb_name , curr.wb_o_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where wb_o_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;

    case "BLOOD O-":
       
            $q = "select info.bb_name , curr.wb_o_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where wb_o_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
           $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;
        
    case "BLOOD AB+":
        
            $q = "select info.bb_name , curr.wb_ab_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where wb_ab_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;

    case "BLOOD AB-":
        
            $q = "select info.bb_name , curr.wb_ab_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where wb_ab_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;

         case "BLOOD B+":
         $q = "select info.bb_name , curr.pcv_b_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where pcv_b_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
                $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            
            }
        break;
        case "BLOOD B-":
          
            $q = "select info.bb_name , curr.pcv_b_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where pcv_b_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
           $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;

    case "BLOOD A+":
           
            $q = "select info.bb_name , curr.pcv_a_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where pcv_a_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;
    case "BLOOD A-":
           
            $q = "select info.bb_name , curr.pcv_a_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where pcv_a_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }

        break;

    case "BLOOD O+":
         
            $q = "select info.bb_name , curr.pcv_o_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where pcv_o_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;

    case "BLOOD O-":
       
            $q = "select info.bb_name , curr.pcv_o_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where pcv_o_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
           $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;
        
    case "BLOOD AB+":
        
            $q = "select info.bb_name , curr.pcv_ab_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where pcv_ab_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;

    case "BLOOD AB-":
        
            $q = "select info.bb_name , curr.pcv_ab_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where pcv_ab_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;

        case "BLOOD B+":
         $q = "select info.bb_name , curr.rdp_b_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where rdp_b_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
                $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            
            }
        break;
        case "BLOOD B-":
          
            $q = "select info.bb_name , curr.rdp_b_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where rdp_b_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
           $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;

    case "BLOOD A+":
           
            $q = "select info.bb_name , curr.rdp_a_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where rdp_a_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;
    case "BLOOD A-":
           
            $q = "select info.bb_name , curr.rdp_a_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where rdp_a_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }

        break;

    case "BLOOD O+":
         
            $q = "select info.bb_name , curr.rdp_o_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where rdp_o_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;

    case "BLOOD O-":
       
            $q = "select info.bb_name , curr.rdp_o_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where rdp_o_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
           $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;
        
    case "BLOOD AB+":
        
            $q = "select info.bb_name , curr.rdp_ab_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where rdp_ab_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;

    case "BLOOD AB-":
        
            $q = "select info.bb_name , curr.rdp_ab_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where rdp_ab_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;

        case "BLOOD B+":
         $q = "select info.bb_name , curr.ffp_b_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where ffp_b_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
                $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            
            }
        break;
        case "BLOOD B-":
          
            $q = "select info.bb_name , curr.ffp_b_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where ffp_b_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
           $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;

    case "BLOOD A+":
           
            $q = "select info.bb_name , curr.ffp_a_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where ffp_a_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;
    case "BLOOD A-":
           
            $q = "select info.bb_name , curr.ffp_a_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where ffp_a_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }

        break;

    case "BLOOD O+":
         
            $q = "select info.bb_name , curr.ffp_o_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where ffp_o_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;

    case "BLOOD O-":
       
            $q = "select info.bb_name , curr.ffp_o_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where ffp_o_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
           $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;
        
    case "BLOOD AB+":
        
            $q = "select info.bb_name , curr.ffp_ab_pos as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where ffp_ab_pos > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;

    case "BLOOD AB-":
        
            $q = "select info.bb_name , curr.ffp_ab_neg as stock,cred.contact_no,cred.altcontact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno where ffp_ab_neg > 0";
            $result = mysqli_query($con,$q);
            while($row=mysqli_fetch_array($result)){
            $reply.=$row['bb_name']."\nAvailable Stock:".$row['stock']."\nContact No.:".$row['contact_no'].",".$row['altcontact_no']."\n\n";
            }
        break;


    }     

        $txt = urlencode($reply);
        send_message($mobile,$txt);
    
?>		
		
