<?php
	require ('../includes/configure.php');
	include ('../includes/functions/general.php');
	$result = array('aaData' => array());
	$queryString =  ets_db_query("SELECT * from industry_type") or die(ets_db_error());	
	// Same from main controller File
		while($res = ets_db_fetch_array($queryString)){
			
			if($res['status']=='E'){
				$status = "Active";
			}else{
				$status = "Disabled";
			}
			$pk = "id:".$res['id'];
			    $id = $res['id'];
				
				$ID='<td>'.$id.'</td>';
				
				$type = $res['type'];
				
				$Type='<td>'.$type.'</td>';
				
				$Status='<td><a href="#" class="estatus" data-type="select" data-name="status" data-pk="'.$pk.'" data-url="ajaxUpd.php" data-title="Change Status">'.$status.'</a></td>';
				
				$Sortorder='<td>'.$res['sortorder'].'</td>';
				
			    
				$Action='<td><a href="index.php?controller=products&action=industry_type&subaction=editForm&id='.$res['id'].'"  data-toggle="tooltip" title="Edit Records" class="btn btn-success marker"><i class="fa fa-edit"></i></a> |
				<a href="index.php?controller=products&action=industry_type&subaction=delete&id='.$res['id'].'" title="Delete Records" data-toggle="tooltip" class="btn btn-danger marker" onClick="return confirmSubmit();" ><i class="fa fa-times"></i></a>
				</td>';
		
				$result['aaData'][] = array( "$ID","$Type","$Status","$Sortorder","$Action");			
		}
	// End While Loop
		echo json_encode($result);
?>