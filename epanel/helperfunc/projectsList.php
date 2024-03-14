<?php
	require ('../includes/configure.php');
	include ('../includes/functions/general.php');
	$result = array('aaData' => array());
	$sqlsel = $_SESSION['listSQL'];
	$queryString =  ets_db_query($sqlsel) or die(ets_db_error());	
	//$queryString =  ets_db_query("SELECT * from projects where pTypeID = '".(int)$_REQUEST['pTypeID']."' order by sortorder") or die(ets_db_error());	
	
		while($res = ets_db_fetch_array($queryString)){
			if($res['status']=='E'){
				$status = "Active";
			}else{
				$status = "Disabled";
			}
			$pk = "projectsID:".$res['projectID'];
			$projectsID = '<td>'.$res['projectID'].'</td>';
			$projectsType = '<td>'.getfldValue("project_type","pTypeID",$res['pTypeID'],"pTypeTitle").'</td>';
			$projectsLocation = '<td>'.$res['projectStatus'].'</td>';
			$projectsName = '<td>'.$res['projectTitle'].'</td>';
			
			$Sortorder='<td><a href="#" class="esortorder" data-type="text" data-name="sortorder" data-pk="'.$pk.'" data-url="ajaxUpd.php" data-title="Change Sort Order">'.$res['sortorder'].'</a></td>';
			$Status='<td><a href="#" class="estatus" data-type="select" data-name="status" data-pk="'.$pk.'" data-url="ajaxUpd.php" data-title="Change Status">'.$status.'</a></td>';
			
			
				
			$Action='<td><a href="index.php?controller=projects&action=projects&subaction=editForm&projectID='.$res['projectID'].'&pTypeID='.$res['pTypeID'].'"  data-toggle="tooltip" title="Edit Records" class="btn btn-success marker"><i class="fa fa-edit"></i></a> |
			<a href="index.php?controller=projects&action=projects&subaction=delete&projectID='.$res['projectID'].'&pTypeID='.$res['pTypeID'].'" title="Delete Records" data-toggle="tooltip" class="btn btn-danger marker" onClick="return confirmSubmit();" ><i class="fa fa-times"></i></a> | 
			<a href="index.php?controller=projects&action=projectimages&subaction=listData&projectID='.$res['projectID'].'" title="Add Project Images" data-toggle="tooltip" class="btn btn-info marker"><i class="fa fa-picture-o"></i></a> | 
			<a href="index.php?controller=projects&action=projectfloors&subaction=listData&projectID='.$res['projectID'].'" title="Add Project Floor Plans" data-toggle="tooltip" class="btn btn-warning marker"><i class="fa fa-building-o"></i></a> | 
			<a href="index.php?controller=projects&action=projectslider&subaction=listData&projectID='.$res['projectID'].'" title="Add Project Slider Images" data-toggle="tooltip" class="btn btn-primary marker"><i class="fa fa-play-circle-o"></i></a> 
			</td>';
	
			$result['aaData'][] = array( "$projectsID", "$projectsType","$projectsName",  "$projectsLocation", "$Status","$Sortorder","$Action");			
		}
	// End While Loop
		echo json_encode($result);
?>
