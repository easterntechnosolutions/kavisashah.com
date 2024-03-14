<?php
	require ('../includes/configure.php');
	include ('../includes/functions/general.php');
	$result = array('aaData' => array());
	// Same from main controller File
	$queryString =  ets_db_query("SELECT * from client where status ='E' order by sortorder desc") or die(ets_db_error());
	while($res = ets_db_fetch_array($queryString)){
		
		$pk = "clientID:".$res['clientID'];
		$clientTitle = '<td>'.$res['clientTitle'].'</td>';
		$type = $res['type'];
		
		if($res['status']=='E'){
			$status = "Active";
		}else{
			$status = "Disabled";
		}

		$clientStatus = '<td><a href="#" class="estatus" data-type="select" data-name="status" data-pk="'.$pk.'" data-url="ajaxUpd.php" data-title="Change Status">'.$status.'</a></td>';
		$clientSortorder = '<td><a href="#" class="esortorder" data-type="text" data-name="sortorder" data-pk="'.$pk.'" data-url="ajaxUpd.php" data-title="Change Sort Order">'.$res['sortorder'].'</a></td>';
		
		$Action='';
		
		if(strpos($_SESSION['userper'],'e') !== false) { 
			$Action.= '<td><a href="index.php?controller=client&action=client&subaction=editForm&clientID='.$res['clientID'].'" title="Edit" class="btn btn-success"><i class="fa fa-edit"></i></a>';
		}

		if(strpos($_SESSION['userper'],'d') !== false) {
			$Action.= '| 
				<a href="index.php?controller=client&action=client&subaction=delete&clientID='.$res['clientID'].'" title="Delete" class="btn btn-danger" onClick="return confirmSubmit();" ><i class="fa fa-times"></i></a>
				</td>';
		}
		
		$result['aaData'][] = array( "$clientTitle", "$type" , "$clientStatus","$clientSortorder","$Action");
	}
	// End While Loop
	
	echo json_encode($result);
?>
