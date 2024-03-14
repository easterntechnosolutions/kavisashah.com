<?php
	require ('../includes/configure.php');
	include ('../includes/functions/general.php');
	$result = array('aaData' => array());
	$queryString =  ets_db_query("SELECT * from company_master order by sortorder") or die(ets_db_error());	
	
		while($res = ets_db_fetch_array($queryString)){
			if($res['status']=='E'){
				$status = "Active";
			}else{
				$status = "Disabled";
			}
			$pk = "companyID:".$res['companyID'];
			$companyID = '<td>'.$res['companyID'].'</td>';
			$company_name = '<td>'.$res['company_name'].'</td>';
			
			$Sortorder='<td><a href="#" class="esortorder" data-type="text" data-name="sortorder" data-pk="'.$pk.'" data-url="ajaxUpd.php" data-title="Change Sort Order">'.$res['sortorder'].'</a></td>';
			$Status='<td><a href="#" class="estatus" data-type="select" data-name="status" data-pk="'.$pk.'" data-url="ajaxUpd.php" data-title="Change Status">'.$status.'</a></td>';
			
            $Action='<td><a href="index.php?controller=projects&action=company&subaction=editForm&companyID='.$res['companyID'].'"  data-toggle="tooltip" title="Edit Records" class="btn btn-success marker"><i class="fa fa-edit"></i></a> |
			<a href="index.php?controller=projects&action=company&subaction=delete&companyID='.$res['companyID'].'" title="Delete Records" data-toggle="tooltip" class="btn btn-danger marker" onClick="return confirmSubmit();" ><i class="fa fa-times"></i></a>
			</td>';
			
			$result['aaData'][] = array( "$companyID", "$company_name",  "$Status","$Sortorder","$Action");			
		}
	// End While Loop
		echo json_encode($result);
?>
