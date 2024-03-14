<?php
	require ('../includes/configure.php');
	include ('../includes/functions/general.php');
include ('../includes/permissions.php');
	$result = array('aaData' => array());
	// Same from main controller File
	$queryString =  ets_db_query("SELECT * from block_to_blog where blog_id = '".$_REQUEST['blog_id']."'") or die(ets_db_error());
	while($res = ets_db_fetch_array($queryString)){
		if($res['status']=='E'){
			$status = "Active";
		}else{
			$status = "Disabled";
		}
		$edit = '';
            $view = '';
            $delete = '';
        $per_acc_arr = explode(',',$per['block']);
          if(!in_array("e", $per_acc_arr)){ 
              $edit = 'edit-hide-td';
          }
        if(!in_array("d", $per_acc_arr)){ 
              $delete = 'delete-hide-td';
          }
            if(!in_array("v", $per_acc_arr)){ 
              $view = 'view-hide-td';
          }
		
		
		$pk = "id:".$res['id'];
		
		$blockID = '<td>'.$res['id'].'</td>';
		
		$blockTitle = '<td>'.$res['title'].'</td>';
		
		$blockDoc  = '<td><img src = "'.DIR_WS_BLOG_PATH.$res['blog_id'].'/'.$res['image'].'" width = "100px" height = "100px"></td>';
		
		$blockStatus = '<td><a href="#" class="estatus" data-type="select" data-name="status" data-pk="'.$pk.'" data-url="ajaxUpd.php" data-title="Change Status">'.$status.'</a></td>';
		
		$blockSortorder = '<td><a href="#" class="esortorder" data-type="text" data-name="sortorder" data-pk="'.$pk.'" data-url="ajaxUpd.php" data-title="Change Sort Order">'.$res['sortorder'].'</a></td>';
		
		$Action = '<td><a href="index.php?controller=blog&action=block&subaction=editForm&id='.$res['id'].'&blog_id='.$res['blog_id'].'" title="Edit" class="btn btn-success '.$edit.'"><i class="icon-edit"></i></a> 
				<a href="index.php?controller=blog&action=block&subaction=delete&id='.$res['id'].'&blog_id='.$res['blog_id'].'" title="Delete" class="btn btn-danger '.$delete.'" onClick="return confirmSubmit();" ><i class="icon-remove"></i></a>
		
				</td>';
		
		$result['aaData'][] = array( "$blockID","$blockTitle","$blockDoc","$blockStatus", "$blockSortorder","$Action");
	}
	// End While Loop
	
	echo json_encode($result);
?>