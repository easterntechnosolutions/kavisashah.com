<?php
	require ('../includes/configure.php');
	include ('../includes/functions/general.php');
	$result = array('aaData' => array());
	// Same from main controller File
	$queryString =  ets_db_query("SELECT * from history") or die(ets_db_error());
	while($res = ets_db_fetch_array($queryString)){
		
		$pk = "historyID:".$res['historyID'];
		$thumb_image = HTTP_SERVER.WS_ROOT."timthumb.php?src=".DIR_WS_HISTORY_PATH.$res['image']."&w=100&h=67&zc=0";

		$historyID = '<td>'.$res['historyID'].'</td>';
		$historyTitle = '<td>'.$res['historyTitle'].'</td>';
		$historyDescription = '<td>'.$res['description'].'</td>';
		$historyImage = '<td><img src="'.$thumb_image.'"></td>';
        
		$Action='';
		
//		if(strpos($_SESSION['userper'],'e') !== false) { 
			$Action.= '<td><a href="index.php?controller=history&action=history&subaction=editForm&historyID='.$res['historyID'].'" title="Edit" class="btn btn-success"><i class="fa fa-edit"></i></a>';
//		}
		
		
//		if(strpos($_SESSION['userper'],'d') !== false) {
			$Action.= '| <a href="index.php?controller=history&action=history&subaction=delete&historyID='.$res['historyID'].'" title="Delete" class="btn btn-danger" onClick="return confirmSubmit();" ><i class="fa fa-times"></i></a> </td>';
//		}
	$result['aaData'][] = array("$historyID","$historyTitle", "$historyDescription","$historyImage", "$Action");
	}
	// End While Loop
	
	echo json_encode($result);
?>
