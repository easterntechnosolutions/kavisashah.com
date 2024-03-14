<?php
	require ('../includes/configure.php');
	include ('../includes/functions/general.php');
	$result = array('aaData' => array());
	$pid = $_REQUEST['pid'];
	//$pid = 1;
	$queryString =  ets_db_query("SELECT * from stakeholder where project_id = '".$pid."'") or die(ets_db_error());	
	
	// Same from main controller File
		while($res = ets_db_fetch_array($queryString)){
			
			if($res['status']=='E'){
				$status = "Active";
			}else{
				$status = "Disabled";
			}
			$pk = "id:".$res['id'];
			
			$Status='<td><a href="#" class="estatus" data-type="select" data-name="status" data-pk="'.$pk.'" data-url="ajaxUpd.php" data-title="Change Status">'.$status.'</a></td>';
				
			$Sortorder='<td>'.$res['sortorder'].'</td>';
			    $id = $res['id'];
				
				$ID='<td>'.$id.'</td>';
				
				
				$type = getindustrytype($res['industry_type']);
				
				$Type='<td>'.$type.'</td>';
				$Shop='<td>'.$res['shop_no'].'</td>';
				$Name='<td>'.$res['name'].'</td>';
				$Email='<td>'.$res['email'].'</td>';
				$Phone='<td>'.$res['phone'].'</td>';
				$Website='<td>'.$res['website'].'</td>';
				
			    $Desc='<td>'.$res['description'].'</td>';
				
				$Action='<td><a href="index.php?controller=products&action=stakeholder&subaction=editForm&id='.$res['id'].'&pid='.$pid.'"  data-toggle="tooltip" title="Edit Records" class="btn btn-success marker"><i class="fa fa-edit"></i></a> |
				<a href="index.php?controller=products&action=stakeholder&subaction=delete&id='.$res['id'].'&pid='.$pid.'" title="Delete Records" data-toggle="tooltip" class="btn btn-danger marker" onClick="return confirmSubmit();" ><i class="fa fa-times"></i></a>
				</td>';
		
				$result['aaData'][] = array( "$ID","$Type","$Shop","$Name","$Email","$Phone","$Website","$Desc","$Status","$Sortorder","$Action");			
		}
	// End While Loop
		echo json_encode($result);
?>