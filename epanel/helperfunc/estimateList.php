<?php
		require ('../includes/configure.php');
		include ('../includes/functions/general.php');
		$result = array('aaData' => array());
		$sqlsel = "SELECT * from estimate_master";
		$ressql = ets_db_query($sqlsel) or die('Query failed : ' . ets_db_error());

		// Same from main controller File
			if(ets_db_num_rows($ressql) > 0) {
					while($row = ets_db_fetch_array($ressql)){ 
						$cid = $row['eid'];
						$firstname = $row['firstname'];
                        $lastname = $row['lastname'];
						$email = $row['email'];
						$phone = $row['contact'];
                        $service = $row['service'];
                        $city = $row['city'];
                        $state = $row['state'];
						$zip = $row['zip'];
						$address = $row['address'];
						$cdate = date("d-m-Y H:i:s ",strtotime($row['cdate']));
						
						$estimateID='<td>'.$cid.'</td>';

						$estimateFirstName='<td>'.$firstname.'</td>';

                        $estimateLastName='<td>'.$lastname.'</td>';

						$estimateEmail='<td>'.$email.'</td>';
                                                
						$estimatePhone='<td>'.$phone.'</td>';
						
						$estimateservice='<td>'.$service.'</td>';

                        $estimatecity='<td>'.$city.'</td>';

                        $estimatestate='<td>'.$state.'</td>';

                        $estimatezip='<td>'.$zip.'</td>';

                        $estimateaddress='<td>'.$address.'</td>';
						
						$estimateDate='<td>'.$cdate.'</td>';
						if(strlen($message) > 100)
						{
							$estimateMessage='<td>'.mb_strimwidth($message, 0, 100, "").'<br><a class="loadModal" data-cid="'.$cid.'" data-toggle="modal" data-target="#myModal">...Read More</a></td>';
						}
						else
						{
							$estimateMessage='<td>'.$message.'</td>';
						}
						
											
						$select='<td style="width:5%"><center><input type="checkbox" class="case" id="'.$cid.'"></center></td>';
//						$estimateAction='<td><center>
//						<a href="index.php?controller=estimate&action=estimate&subaction=delete&cid='.$row['cid'].'" title="Delete" class="btn btn-danger" onClick="return confirmSubmit();" ><i class="fa fa-times"></i></center></a></td>';
						
						$estimateAction='';
		
						if(strpos($_SESSION['userper'],'d') !== false) {
							$estimateAction.= '<td><center>
						<a href="index.php?controller=estimate&action=estimate&subaction=delete&cid='.$row['cid'].'" title="Delete" class="btn btn-danger" onClick="return confirmSubmit();" ><i class="fa fa-times"></i></center></a></td>';
						}

						$result['aaData'][] = array("$select", "$estimateID", "$estimateDate","$estimateFirstName","$estimateLastName", "$estimateEmail","$estimatePhone", "$estimateservice","$estimatecity","$estimatestate","$estimatezip","$estimateaddress","$estimateAction");
						}
							// End While Loop
							echo json_encode($result);
						}				
?>