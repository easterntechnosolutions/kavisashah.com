<?php
require ('../includes/configure.php');
include ('../includes/functions/general.php');
$result = array('aaData' => array());
$queryString =  ets_db_query("SELECT * from gallery where productID = '".$_REQUEST['workID']."' and isFront = 'V' and status = 'E' order by sortorder") or die(ets_db_error());

while($res = ets_db_fetch_array($queryString)){
	if($res['status']=='E'){
		$status = "Active";
	}else{
		$status = "Disabled";
	}

	$pk = "galleryID:".$res['galleryID'];
	$viewID = '<td>'.$res['galleryID'].'</td>';
	$viewTitle = '<td>'.$res['galleryTitle'].'</td>';

	$thumb_image = DIR_WS_WORK_PATH.$res['productID']."/".$res['galleryImage'];
	$thumb_image1 = DIR_WS_WORK_PATH.$res['productID']."/".$res['galleryImage1'];
	$thumb_image2 = DIR_WS_WORK_PATH.$res['productID']."/".$res['galleryImage2'];

	$viewImage='<td><video width = "100" height = "100" src="'.$thumb_image.'"></video></td>';
	$viewImage1='<td><video width = "100" height = "100" src="'.$thumb_image1.'"></video></td>';
	$viewImage2='<td><video width = "100" height = "100" src="'.$thumb_image2.'"></video></td>';

	$Sortorder='<td><a href="#" class="esortorder" data-value = "'.$res['sortorder'].'" data-type="text" data-name="sortorder" data-pk="'.$pk.'" data-url="ajaxUpd.php" data-title="Change Sort Order">'.$res['sortorder'].'</a></td>';
	$Status='<td><a href="#" class="estatus" data-type="select" data-name="status" data-pk="'.$pk.'" data-url="ajaxUpd.php" data-title="Change Status">'.$status.'</a></td>';

	$Action='<td><a href="index.php?controller=work&action=workvideo&subaction=editForm&galleryID='. $res['galleryID'] .'&workID='.$_REQUEST['workID'].'"  data-toggle="tooltip" title="Edit Records" class="btn btn-success marker"><i class="fa fa-edit"></i></a> |
			<a href="index.php?controller=work&action=workvideo&subaction=delete&galleryID='. $res['galleryID'] .'&workID='.$_REQUEST['workID'].'" title="Delete Records" data-toggle="tooltip" class="btn btn-danger marker" onClick="return confirmSubmit();" ><i class="fa fa-times"></i></a>
			</td>';
	$result['aaData'][] = array( "$viewID", "$viewImage" ,"$viewImage1" ,"$viewImage2" , "$Status","$Sortorder","$Action");
}
// End While Loop
echo json_encode($result);
?>
