<?php

require ('../includes/configure.php');
include ('../includes/functions/general.php');

	$result = array('aaData' => array());
	$queryString =  ets_db_query("SELECT * from blog_master") or die(ets_db_error());

		while($res = ets_db_fetch_array($queryString)){

			if($res['status'] == 'E')
				$status = 'Enabled';
			else
				$status = 'Disabled';

			$pk = "blog_id:".$res['blog_id'];

			$sid = '<td>'.$res['blog_id'].'</td>';

			$Logo = '<td><img src = "'.DIR_WS_BLOG_PATH.$res['image'].'" width = "100px" height = "100px"></td>';

			$dStatus = '<td><a href="#" class="estatus" data-type="select" data-name="status" data-pk="'.$pk.'" data-url="ajaxUpd.php" data-title="Change Status">'.$status.'</a></td>';
			$dsortorder = '<td><a href="#" class="estatus" data-type="text" data-name="sortorder" data-pk="'.$pk.'" data-url="ajaxUpd.php" data-title="Change Sortorder">'.$res['sortorder'].'</a></td>';
			$Name='<td>'.$res['title'].'</td>';

          /*  $Action='<td>
            <a href="'.HTTP_SERVER.WS_ROOT.'blogs/'.$res['blog_id'].'" target = "_blank" data-toggle="tooltip" title="View" class="btn btn-info marker"><i class="icon-eye-open"></i></a>
            <a href="index.php?controller=blog&action=blog&subaction=editForm&blog_id='.$res['blog_id'].'"  data-toggle="tooltip" title="Edit Records" class="btn btn-success marker '.$edit.'"><i class="icon-edit"></i></a>
				<a href="index.php?controller=blog&action=blog&subaction=delete&blog_id='.$res['blog_id'].'" title="Delete Records" data-toggle="tooltip" class="btn btn-danger marker '.$delete.'" onClick="return confirmSubmit();" ><i class="icon-remove"></i></a>';

			$Action .='&nbsp;<a href="index.php?controller=blog&action=block&subaction=delete&blog_id='.$res['blog_id'].'" title="Add Blocks" data-toggle="tooltip" class="btn btn-warning marker"  ><i class="icon-plus"></i></a>
				</td>';*/

            $Action='';

//            if(strpos($_SESSION['userper'],'e') !== false) {
                $Action.= '<td><a href="index.php?controller=blog&action=blog&subaction=editForm&blog_id='.$res['blog_id'].'" title="Edit" class="btn btn-success"><i class="fa fa-edit"></i></a>';
//            }


//            if(strpos($_SESSION['userper'],'d') !== false) {
                $Action.= '| <a href="index.php?controller=blog&action=blog&subaction=delete&blog_id='.$res['blog_id'].'" title="Delete" class="btn btn-danger" onClick="return confirmSubmit();" ><i class="fa fa-times"></i></a> </td>';
//            }

				$result['aaData'][] = array( "$sid","$Name","$Logo","$dStatus","$dsortorder","$Action");
		}
	// End While Loop
		echo json_encode($result);

?>