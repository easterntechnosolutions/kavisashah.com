<?php
	require ('../includes/configure.php');
	include ('../includes/functions/general.php');
	$result = array('aaData' => array());
	$queryString =  ets_db_query("SELECT * from project_type order by pTypeParent, sortorder") or die(ets_db_error());	
	
		while($res = ets_db_fetch_array($queryString)){
			if($res['status']=='E'){
				$status = "Active";
			}else{
				$status = "Disabled";
			}
			$pk = "pTypeID:".$res['pTypeID'];
			$typeID = '<td>'.$res['pTypeID'].'</td>';
			$projectsType = '<td>'.$res['pTypeTitle'].'</td>';
			$typeParent = '<td>'.getfldValue('project_type','pTypeID',$res['pTypeParent'],'pTypeTitle').'</td>';
			$Sortorder='<td><a href="#" class="esortorder" data-type="text" data-name="sortorder" data-pk="'.$pk.'" data-url="ajaxUpd.php" data-title="Change Sort Order">'.$res['sortorder'].'</a></td>';
			$Status='<td><a href="#" class="estatus" data-type="select" data-name="status" data-pk="'.$pk.'" data-url="ajaxUpd.php" data-title="Change Status">'.$status.'</a></td>';
			if($res['HasProject'] == 'Y'){
				$Action='<td><a href="index.php?controller=projects&action=project_type&subaction=editForm&pTypeID='.$res['pTypeID'].'"  data-toggle="tooltip" title="Edit Records" class="btn btn-success marker"><i class="fa fa-edit"></i></a> |
			<a href="index.php?controller=projects&action=project_type&subaction=delete&pTypeID='.$res['pTypeID'].'" title="Delete Records" data-toggle="tooltip" class="btn btn-danger marker" onClick="return confirmSubmit();" ><i class="fa fa-times"></i></a> 
			</td>';
			}else{
				$Action='<td><a href="index.php?controller=projects&action=project_type&subaction=editForm&pTypeID='.$res['pTypeID'].'"  data-toggle="tooltip" title="Edit Records" class="btn btn-success marker"><i class="fa fa-edit"></i></a> |
			<a href="index.php?controller=projects&action=project_type&subaction=delete&pTypeID='.$res['pTypeID'].'" title="Delete Records" data-toggle="tooltip" class="btn btn-danger marker" onClick="return confirmSubmit();" ><i class="fa fa-times"></i></a>
			</td>';
			}
			$result['aaData'][] = array( "$typeID", "$projectsType", "$typeParent", "$Status","$Sortorder","$Action");			
		}
	// End While Loop
		echo json_encode($result);
?>
