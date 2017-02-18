<?php
//error_reporting(0);
include "connection.php";
$start=$_POST['startDateNew'];
$end=$_POST['endDateNew'];
$search=$_POST['bloodgroupNew'];
$searchBB=$_POST['bloodbanknameNew'];

// Specify the start date. This date can be any English textual format  
					//$date_from = $start;   
					$date_from = strtotime($start); // Convert date to a UNIX timestamp  
					// Specify the end date. This date can be any English textual format  
					//$date_to = $end;  
					$date_to = strtotime($end); // Convert date to a UNIX timestamp  
					// Loop from the start date to end date and output all dates inbetween
					for ($i=$date_from; $i<=$date_to; $i+=86400) { 
					   $alldate= date("Y-m-d", $i);
					   $allArrayDates[] =$alldate;
					}

					for ($i=$date_from; $i<=$date_to; $i+=86400) { 
					   $all= date("Y-m-d", $i);
					   $allArray[$all] =null ;
					}

if(isset($_POST['bloodgroupNew']) && empty($_POST['bloodbanknameNew']))
		{
		
					$series1 = array();
					$series2 = array();
					$series3 = array();
					$series4 = array();
					/*$dates = array();*/
					
					/*   Data  with only bloodgroup between two dates */

					$bg="wb";
					$request1=$bg."_".$search;
					$query="select bb_regno,sum($request1) as stock, date, posting_time FROM bb_dailystock_hist WHERE date BETWEEN '$start' AND '$end' AND concat(bb_regno,posting_time) IN ( SELECT concat(bb_regno ,MAX(posting_time)) FROM bb_dailystock_hist GROUP BY bb_regno, date) GROUP BY date";
					$result=mysqli_query($con,$query);
						while($r = mysqli_fetch_assoc($result))
						{
						 $date = $r['date'];
						 //echo $date;
						 if (array_key_exists($date,$allArray))
								  {
								  	// echo "Keys exist!";
								  	$stock=$r['stock'];
								  	$allArray[$date]=$stock;	
								  }
								else
								  {
								  //echo "Key does not exist!";
								  }
					}
					$series1=array_values($allArray);
					
				
					$bg="pcv";
					$request2=$bg."_".$search;
					$query="select bb_regno,sum($request2) as stock, date, posting_time FROM bb_dailystock_hist WHERE date BETWEEN '$start' AND '$end' AND concat(bb_regno,posting_time) IN ( SELECT concat(bb_regno ,MAX(posting_time)) FROM bb_dailystock_hist GROUP BY bb_regno, date) GROUP BY date";
					$result=mysqli_query($con,$query);
					while($r = mysqli_fetch_assoc($result))
						{
						 $date = $r['date'];
						 //echo $date;
						 if (array_key_exists($date,$allArray))
								  {
								  	$stock=$r['stock'];
								  	$allArray[$date]=$stock;	
								  }
								else
								  {
								  //echo "Key does not exist!";
								  }
					}
					$series2=array_values($allArray);
						
					$bg="rdp";
					$request3=$bg."_".$search;
					$query="select bb_regno,sum($request3) as stock, date, posting_time FROM bb_dailystock_hist WHERE date BETWEEN '$start' AND '$end' AND concat(bb_regno,posting_time) IN ( SELECT concat(bb_regno ,MAX(posting_time)) FROM bb_dailystock_hist GROUP BY bb_regno, date) GROUP BY date";
					$result=mysqli_query($con,$query);
					while($r = mysqli_fetch_assoc($result))
						{
						 $date = $r['date'];
						 //echo $date;
						 if (array_key_exists($date,$allArray))
								  {
								  	// echo "Keys exist!";
								  	$stock=$r['stock'];
								  	$allArray[$date]=$stock;	
								  }
								else
								  {
								  //echo "Key does not exist!";
								  }
					}
					$series3=array_values($allArray);

					$bg="ffp";
					$request4=$bg."_".$search;
					$query="select bb_regno,sum($request4) as stock, date, posting_time FROM bb_dailystock_hist WHERE date BETWEEN '$start' AND '$end' AND concat(bb_regno,posting_time) IN ( SELECT concat(bb_regno ,MAX(posting_time)) FROM bb_dailystock_hist GROUP BY bb_regno, date) GROUP BY date";
					$result=mysqli_query($con,$query);
					while($r = mysqli_fetch_assoc($result))
						{
						 $date = $r['date'];
						 //echo $date;
						 if (array_key_exists($date,$allArray))
								  {
								  	// echo "Keys exist!";
								  	$stock=$r['stock'];
								  	$allArray[$date]=$stock;	
								  }
								else
								  {
								  //echo "Key does not exist!";
								  }
					}
					$series4=array_values($allArray);

						$response1 = array();
						array_push($response1, $series1);
						array_push($response1, $series2);
						array_push($response1, $series3);
						array_push($response1, $series4);
						array_push($response1, $allArrayDates);

						print json_encode($response1,JSON_NUMERIC_CHECK);
						
					
					}			
				



	else if(isset($_POST['bloodgroupNew']) && $_POST['bloodbanknameNew'])
	{
					

					
					$series1 = array();
					$series2 = array();
					$series3 = array();
					$series4 = array();
				/*	$dates=array();*/
					/*   Data  with bloodgroup & bloodbank between two dates */

					$bg="wb";
					$request1=$bg."_".$search;
					$query="select bb_regno,sum($request1) as stock, date, posting_time FROM bb_dailystock_hist WHERE date BETWEEN '$start' AND '$end' AND bb_regno='$searchBB' AND concat(bb_regno,posting_time) IN ( SELECT concat(bb_regno ,MAX(posting_time)) FROM bb_dailystock_hist GROUP BY bb_regno, date) GROUP BY date";
					$result=mysqli_query($con,$query);
						while($r = mysqli_fetch_assoc($result))
						{
						 $date = $r['date'];
						 //echo $date;
						 if (array_key_exists($date,$allArray))
								  {
								  	// echo "Keys exist!";
								  	$stock=$r['stock'];
								  	$allArray[$date]=$stock;	
								  }
								else
								  {
								  //echo "Key does not exist!";
								  }
					}
					$series1=array_values($allArray);

					$bg="pcv";
					$request2=$bg."_".$search;
					$query="select bb_regno,sum($request2) as stock, date, posting_time FROM bb_dailystock_hist WHERE date BETWEEN '$start' AND '$end' AND bb_regno='$searchBB' AND concat(bb_regno,posting_time) IN ( SELECT concat(bb_regno ,MAX(posting_time)) FROM bb_dailystock_hist GROUP BY bb_regno, date) GROUP BY date";
					$result=mysqli_query($con,$query);
						while($r = mysqli_fetch_assoc($result))
						{
						 $date = $r['date'];
						 //echo $date;
						 if (array_key_exists($date,$allArray))
								  {
								  	// echo "Keys exist!";
								  	$stock=$r['stock'];
								  	$allArray[$date]=$stock;	
								  }
								else
								  {
								  //echo "Key does not exist!";
								  }
					}
					$series2=array_values($allArray);
						
					$bg="rdp";
					$request3=$bg."_".$search;
					$query="select bb_regno,sum($request3) as stock, date, posting_time FROM bb_dailystock_hist WHERE date BETWEEN '$start' AND '$end' AND bb_regno='$searchBB'  AND concat(bb_regno,posting_time) IN ( SELECT concat(bb_regno ,MAX(posting_time)) FROM bb_dailystock_hist GROUP BY bb_regno, date) GROUP BY date";
					$result=mysqli_query($con,$query);
					while($r = mysqli_fetch_assoc($result))
						{
						 $date = $r['date'];
						 //echo $date;
						 if (array_key_exists($date,$allArray))
								  {
								  	// echo "Keys exist!";
								  	$stock=$r['stock'];
								  	$allArray[$date]=$stock;	
								  }
								else
								  {
								  //echo "Key does not exist!";
								  }
					}
					$series3=array_values($allArray);	

					$bg="ffp";
					$request4=$bg."_".$search;
					$query="select bb_regno,sum($request4) as stock, date, posting_time FROM bb_dailystock_hist WHERE date BETWEEN '$start' AND '$end' AND bb_regno='$searchBB'  AND concat(bb_regno,posting_time) IN ( SELECT concat(bb_regno ,MAX(posting_time)) FROM bb_dailystock_hist GROUP BY bb_regno, date) GROUP BY date";
					$result=mysqli_query($con,$query);
					while($r = mysqli_fetch_assoc($result))
						{
						 $date = $r['date'];
						 //echo $date;
						 if (array_key_exists($date,$allArray))
								  {
								  	// echo "Keys exist!";
								  	$stock=$r['stock'];
								  	$allArray[$date]=$stock;	
								  }
								else
								  {
								  //echo "Key does not exist!";
								  }
					}
					$series4=array_values($allArray);

						$response1 = array();
						array_push($response1, $series1);
						array_push($response1, $series2);
						array_push($response1, $series3);
						array_push($response1, $series4);
						array_push($response1, $allArrayDates);


						print json_encode($response1,JSON_NUMERIC_CHECK);
						
					
					}			
	else
	{
		echo "Error..";
	}
?>

