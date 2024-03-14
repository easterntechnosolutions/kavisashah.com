<?php
if(isset($_REQUEST['action'])){
	$include_class = $_REQUEST['action'].".php";
	include ($include_class);
	
	/* Start Product Master */
	if($_REQUEST['action'] == 'history'){
		$history = new history();	
		switch($_REQUEST['subaction']){
			case 'add':
//				if(strpos($_SESSION['userper'],'a') !== false) {
					if($history->add()){
						echo'<script>location.href="index.php?controller=history&action=history&subaction=listData&msg=addmsg";</script>';
					}
//				}else{
//					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Add Record</div>';
//				}
				break;
			case 'addForm':
//				if(strpos($_SESSION['userper'],'a') !== false) {
					$history->addForm();
//				}
//				else {
//					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Add Record</div>';	
//				}
				break;
			case 'listData':
//				if(strpos($_SESSION['userper'],'v') !== false) {
					$history->listData();
//				}
//				else{
//					echo '<div class="alert alert-error">You donot have Sufficient Permissions to View Record</div>';	
//				}
				break;
			case 'edit':
//				if(strpos($_SESSION['userper'],'e') !== false) {
					if($history->edit()){
					echo'<script>location.href="index.php?controller=history&action=history&subaction=listData";</script>';
				}
//				}else{
//					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Edit Records</div>';	
//				}
				break;
			case 'editForm':
//				if(strpos($_SESSION['userper'],'e') !== false) {
					$history->editForm();
//				}else{
//					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Edit Records</div>';	
//				}
				break;
			case 'delete':
//				if(strpos($_SESSION['userper'],'d') !== false) {
					$history->delete();
					echo'<script>location.href="index.php?controller=history&action=history&subaction=listData";</script>';
//				}else {
//					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Delete Record</div>';	
//				}
				break;
		}
	}
}
else{
		echo '<center><div class="notmsgHeader" ><img src="images/error.gif">&nbsp;&nbsp;<strong>You may be in wrong place!!!</strong></div></center>';
}
?>