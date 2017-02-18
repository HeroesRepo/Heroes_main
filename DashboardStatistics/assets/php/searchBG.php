<?php

include 'connection.php';


	if(isset($_POST['bloodgroup1']) && empty($_POST['bloodbankname1']))
	{
		
					$search=$_POST['bloodgroup1'];
					$searchBB=$_POST['bloodbankname1'];

					
					$series1 = array();
					$series2 = array();
					$series3 = array();
					$series4 = array();
					$series5 = array();
					$series6 = array();
					$series7 = array();
					$series8 = array();
					$series9 = array();
					$series10 = array();
					$series11 = array();
					$series12 = array();
					
					/*   Daily data  with only bloodgroup */

					$bg="wb";
					$request1=$bg."_".$search;
					$query=mysqli_query($con,"select date,SUM($request1) as stock from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE)");
					$row=mysqli_fetch_array($query);
					$wb= $row['stock'];


					$bg="pcv";
					$request2=$bg."_".$search;
					$query=mysqli_query($con,"select date,SUM($request2) as stock from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE)");
					$row=mysqli_fetch_array($query);
					$pcv= $row['stock'];



					$bg="rdp";
					$request3=$bg."_".$search;
					$query=mysqli_query($con,"select date,SUM($request3) as stock from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE)");
					$row=mysqli_fetch_array($query);
					$rdp= $row['stock'];


					$bg="ffp";
					$request4=$bg."_".$search;
					$query=mysqli_query($con,"select date,SUM($request4) as stock from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE)");
					$row=mysqli_fetch_array($query);
					$ffp= $row['stock'];

					$series1['name'] = 'Whole Blood';
					$series1['data']=array();
					array_push($series1['data'], $wb);
					

					$series2['name'] = 'PCV';
					$series2['data']=array();
					array_push($series2['data'], $pcv);

					$series3['name'] = 'RDP';
					$series3['data']=array();
					array_push($series3['data'], $rdp);

					$series4['name'] = 'FFP';
					$series4['data']=array();
					array_push($series4['data'], $ffp);

					$response1 = array();
					array_push($response1, $series1);
					array_push($response1, $series2);
					array_push($response1, $series3);
					array_push($response1, $series4);


					/*   Weekly data with only bloodgroup  */

					$bg="wb";
					$request1=$bg."_".$search;
					$query=mysqli_query($con,"Select (Select SUM($request1) FROM bb_dailystock_curr WHERE WEEKOFYEAR(date)=WEEKOFYEAR(NOW())) + (Select SUM($request1) FROM bb_dailystock_hist WHERE WEEKOFYEAR(date)=WEEKOFYEAR(NOW())) FinalValue");
					$row=mysqli_fetch_array($query);
					$wb= $row['FinalValue'];


					$bg="pcv";
					$request2=$bg."_".$search;
					$query=mysqli_query($con,"Select (Select SUM($request2) FROM bb_dailystock_curr WHERE WEEKOFYEAR(date)=WEEKOFYEAR(NOW()))+ (Select SUM($request2) FROM bb_dailystock_hist WHERE WEEKOFYEAR(date)=WEEKOFYEAR(NOW())) FinalValue");
					$row=mysqli_fetch_array($query);
					$pcv= $row['FinalValue'];



					$bg="rdp";
					$request3=$bg."_".$search;
					$query=mysqli_query($con,"Select (Select SUM($request3) FROM bb_dailystock_curr WHERE WEEKOFYEAR(date)=WEEKOFYEAR(NOW()))+ (Select SUM($request3) FROM bb_dailystock_hist WHERE WEEKOFYEAR(date)=WEEKOFYEAR(NOW())) FinalValue");
					$row=mysqli_fetch_array($query);
					$rdp= $row['FinalValue'];


					$bg="ffp";
					$request4=$bg."_".$search;
					$query=mysqli_query($con,"Select (Select SUM($request4) FROM bb_dailystock_curr WHERE WEEKOFYEAR(date)=WEEKOFYEAR(NOW()))+ (Select SUM($request4) FROM bb_dailystock_hist WHERE WEEKOFYEAR(date)=WEEKOFYEAR(NOW())) FinalValue");
					$row=mysqli_fetch_array($query);
					$ffp= $row['FinalValue'];

					
					$series5['name'] = 'Whole Blood';
					$series5['data']=array();
					array_push($series5['data'], $wb);
					

					$series6['name'] = 'PCV';
					$series6['data']=array();
					array_push($series6['data'], $pcv);

					$series7['name'] = 'RDP';
					$series7['data']=array();
					array_push($series7['data'], $rdp);

					$series8['name'] = 'FFP';
					$series8['data']=array();
					array_push($series8['data'], $ffp);

					$response2 = array();
					array_push($response2, $series5);
					array_push($response2, $series6);
					array_push($response2, $series7);
					array_push($response2, $series8);

					/*   Monthly data with only bloodgroup */

					$bg="wb";
					$request1=$bg."_".$search;
					$query=mysqli_query($con,"Select (Select SUM($request1) FROM bb_dailystock_curr WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE()))+ (Select SUM($request1) FROM bb_dailystock_hist WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE())) FinalValue");
					$row=mysqli_fetch_array($query);
					$wb= $row['FinalValue'];


					$bg="pcv";
					$request2=$bg."_".$search;
					$query=mysqli_query($con,"Select (Select SUM($request2) FROM bb_dailystock_curr WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE()))+ (Select SUM($request2) FROM bb_dailystock_hist WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE())) FinalValue");
					$row=mysqli_fetch_array($query);
					$pcv= $row['FinalValue'];



					$bg="rdp";
					$request3=$bg."_".$search;
					$query=mysqli_query($con,"Select (Select SUM($request3) FROM bb_dailystock_curr WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE()))+ (Select SUM($request3) FROM bb_dailystock_hist WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE())) FinalValue");
					$row=mysqli_fetch_array($query);
					$rdp= $row['FinalValue'];


					$bg="ffp";
					$request4=$bg."_".$search;
					$query=mysqli_query($con,"Select (Select SUM($request4) FROM bb_dailystock_curr WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE()))+ (Select SUM($request4) FROM bb_dailystock_hist WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE())) FinalValue");
					$row=mysqli_fetch_array($query);
					$ffp= $row['FinalValue'];


					$series9['name'] = 'Whole Blood';
					$series9['data']=array();
					array_push($series9['data'], $wb);
					

					$series10['name'] = 'PCV';
					$series10['data']=array();
					array_push($series10['data'], $pcv);

					$series11['name'] = 'RDP';
					$series11['data']=array();
					array_push($series11['data'], $rdp);

					$series12['name'] = 'FFP';
					$series12['data']=array();
					array_push($series12['data'], $ffp);

					$response3 = array();
					array_push($response3, $series9);
					array_push($response3, $series10);
					array_push($response3, $series11);
					array_push($response3, $series12);

					$final=array();
					array_push($final, $response1);
					array_push($final, $response2);
					array_push($final, $response3);


					print json_encode($final,JSON_NUMERIC_CHECK);
				
	}
	else if(isset($_POST['bloodgroup1']) && $_POST['bloodbankname1'])
	{
					$search=$_POST['bloodgroup1'];
					$searchBB=$_POST['bloodbankname1'];

					
					$series1 = array();
					$series2 = array();
					$series3 = array();
					$series4 = array();
					$series5 = array();
					$series6 = array();
					$series7 = array();
					$series8 = array();
					$series9 = array();
					$series10 = array();
					$series11 = array();
					$series12 = array();
					
					/*   Daily data with bloodgroup and bloodbank */

					$bg="wb";
					$request1=$bg."_".$search;
					$query=mysqli_query($con,"select date,$request1 as stock from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='$searchBB'");
					$row=mysqli_fetch_array($query);
					$wb= $row['stock'];


					$bg="pcv";
					$request2=$bg."_".$search;
					$query=mysqli_query($con,"select date,SUM($request2) as stock from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='$searchBB'");
					$row=mysqli_fetch_array($query);
					$pcv= $row['stock'];



					$bg="rdp";
					$request3=$bg."_".$search;
					$query=mysqli_query($con,"select date,SUM($request3) as stock from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='$searchBB'");
					$row=mysqli_fetch_array($query);
					$rdp= $row['stock'];


					$bg="ffp";
					$request4=$bg."_".$search;
					$query=mysqli_query($con,"select date,SUM($request4) as stock from bb_dailystock_curr where date = CAST(CURRENT_TIMESTAMP AS DATE) && bb_regno='$searchBB'");
					$row=mysqli_fetch_array($query);
					$ffp= $row['stock'];

					$series1['name'] = 'Whole Blood';
					$series1['data']=array();
					array_push($series1['data'], $wb);
					

					$series2['name'] = 'PCV';
					$series2['data']=array();
					array_push($series2['data'], $pcv);

					$series3['name'] = 'RDP';
					$series3['data']=array();
					array_push($series3['data'], $rdp);

					$series4['name'] = 'FFP';
					$series4['data']=array();
					array_push($series4['data'], $ffp);

					$response1 = array();
					array_push($response1, $series1);
					array_push($response1, $series2);
					array_push($response1, $series3);
					array_push($response1, $series4);


					/*   Weekly data with bloodgroup and bloodbank */

					$bg="wb";
					$request1=$bg."_".$search;
					$query=mysqli_query($con,"Select (Select SUM($request1) FROM bb_dailystock_curr WHERE WEEKOFYEAR(date)=WEEKOFYEAR(NOW()) && bb_regno='$searchBB') + (Select SUM($request1) FROM bb_dailystock_hist WHERE WEEKOFYEAR(date)=WEEKOFYEAR(NOW()) && bb_regno='$searchBB') FinalValue");
					$row=mysqli_fetch_array($query);
					$wb= $row['FinalValue'];


					$bg="pcv";
					$request2=$bg."_".$search;
					$query=mysqli_query($con,"Select (Select SUM($request2) FROM bb_dailystock_curr WHERE WEEKOFYEAR(date)=WEEKOFYEAR(NOW()) && bb_regno='$searchBB')+ (Select SUM($request2) FROM bb_dailystock_hist WHERE WEEKOFYEAR(date)=WEEKOFYEAR(NOW()) && bb_regno='$searchBB') FinalValue");
					$row=mysqli_fetch_array($query);
					$pcv= $row['FinalValue'];



					$bg="rdp";
					$request3=$bg."_".$search;
					$query=mysqli_query($con,"Select (Select SUM($request3) FROM bb_dailystock_curr WHERE WEEKOFYEAR(date)=WEEKOFYEAR(NOW()) && bb_regno='$searchBB')+ (Select SUM($request3) FROM bb_dailystock_hist WHERE WEEKOFYEAR(date)=WEEKOFYEAR(NOW()) && bb_regno='$searchBB') FinalValue");
					$row=mysqli_fetch_array($query);
					$rdp= $row['FinalValue'];


					$bg="ffp";
					$request4=$bg."_".$search;
					$query=mysqli_query($con,"Select (Select SUM($request4) FROM bb_dailystock_curr WHERE WEEKOFYEAR(date)=WEEKOFYEAR(NOW()) && bb_regno='$searchBB')+ (Select SUM($request4) FROM bb_dailystock_hist WHERE WEEKOFYEAR(date)=WEEKOFYEAR(NOW()) && bb_regno='$searchBB') FinalValue");
					$row=mysqli_fetch_array($query);
					$ffp= $row['FinalValue'];

					
					$series5['name'] = 'Whole Blood';
					$series5['data']=array();
					array_push($series5['data'], $wb);
					

					$series6['name'] = 'PCV';
					$series6['data']=array();
					array_push($series6['data'], $pcv);

					$series7['name'] = 'RDP';
					$series7['data']=array();
					array_push($series7['data'], $rdp);

					$series8['name'] = 'FFP';
					$series8['data']=array();
					array_push($series8['data'], $ffp);

					$response2 = array();
					array_push($response2, $series5);
					array_push($response2, $series6);
					array_push($response2, $series7);
					array_push($response2, $series8);

					/*   Monthly data with bloodgroup and bloodbank */

					$bg="wb";
					$request1=$bg."_".$search;
					$query=mysqli_query($con,"Select (Select SUM($request1) FROM bb_dailystock_curr WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE()) && bb_regno='$searchBB')+ (Select SUM($request1) FROM bb_dailystock_hist WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE()) && bb_regno='$searchBB') FinalValue");
					$row=mysqli_fetch_array($query);
					$wb= $row['FinalValue'];


					$bg="pcv";
					$request2=$bg."_".$search;
					$query=mysqli_query($con,"Select (Select SUM($request2) FROM bb_dailystock_curr WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE()) && bb_regno='$searchBB')+ (Select SUM($request2) FROM bb_dailystock_hist WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE()) && bb_regno='$searchBB') FinalValue");
					$row=mysqli_fetch_array($query);
					$pcv= $row['FinalValue'];



					$bg="rdp";
					$request3=$bg."_".$search;
					$query=mysqli_query($con,"Select (Select SUM($request3) FROM bb_dailystock_curr WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE()) && bb_regno='$searchBB')+ (Select SUM($request3) FROM bb_dailystock_hist WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE()) && bb_regno='$searchBB') FinalValue");
					$row=mysqli_fetch_array($query);
					$rdp= $row['FinalValue'];


					$bg="ffp";
					$request4=$bg."_".$search;
					$query=mysqli_query($con,"Select (Select SUM($request4) FROM bb_dailystock_curr WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE()) && bb_regno='$searchBB')+ (Select SUM($request4) FROM bb_dailystock_hist WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE()) && bb_regno='$searchBB') FinalValue");
					$row=mysqli_fetch_array($query);
					$ffp= $row['FinalValue'];


					$series9['name'] = 'Whole Blood';
					$series9['data']=array();
					array_push($series9['data'], $wb);
					

					$series10['name'] = 'PCV';
					$series10['data']=array();
					array_push($series10['data'], $pcv);

					$series11['name'] = 'RDP';
					$series11['data']=array();
					array_push($series11['data'], $rdp);

					$series12['name'] = 'FFP';
					$series12['data']=array();
					array_push($series12['data'], $ffp);

					$response3 = array();
					array_push($response3, $series9);
					array_push($response3, $series10);
					array_push($response3, $series11);
					array_push($response3, $series12);

					$final=array();
					array_push($final, $response1);
					array_push($final, $response2);
					array_push($final, $response3);


					print json_encode($final,JSON_NUMERIC_CHECK);
	}
	else
	{
		echo "Error..";
	}




				

?>
