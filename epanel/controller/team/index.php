<?php
if(isset($_REQUEST['action'])){
	$include_class = $_REQUEST['action'].".php";
	include ($include_class);
	
	/* Start Team Type Master */
	if($_REQUEST['action'] == 'teamtype'){
		$teamtype = new teamtype();	
		switch($_REQUEST['subaction']){
			case 'add':
				if(strpos($_SESSION['userper'],'a') !== false) {
					if($teamtype->add()){
						echo'<script>location.href="index.php?controller=team&action=teamtype&subaction=listData&msg=addmsg";</script>';
					}
				}else{
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Add Record</div>';
				}
				break;
			case 'addForm':
				if(strpos($_SESSION['userper'],'a') !== false) {
				$teamtype->addForm();
				}else{
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Add Record</div>';
				}
				break;
			case 'listData':
				if(strpos($_SESSION['userper'],'v') !== false) {
				$teamtype->listData();
				}else{
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to View Record</div>';	
				}
				break;
			case 'edit':
				if(strpos($_SESSION['userper'],'e') !== false) {
				if($teamtype->edit()){
					echo'<script>location.href="index.php?controller=team&action=teamtype&subaction=listData";</script>';
				}
				}else{
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Edit Records</div>';	
				}	
				break;
			case 'editForm':
				if(strpos($_SESSION['userper'],'e') !== false) {
				$teamtype->editForm();
				}else{
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Edit Records</div>';	
				}
				break;
			case 'delete':	
				if(strpos($_SESSION['userper'],'d') !== false) {
				$teamtype->delete();
				echo'<script>location.href="index.php?controller=team&action=teamtype&subaction=listData";</script>';
				}else {
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Delete Record</div>';	
				}
				break;
		}
	}
	
	/* Start Team Master */
	if($_REQUEST['action'] == 'team'){
		$team = new team();	
		switch($_REQUEST['subaction']){
			case 'add':
				if(strpos($_SESSION['userper'],'a') !== false) {
					if($team->add()){
						echo'<script>location.href="index.php?controller=team&action=team&subaction=listData&msg=addmsg";</script>';
					}
				}else{
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Add Record</div>';
				}
				break;
			case 'addForm':
				if(strpos($_SESSION['userper'],'a') !== false) {
				$team->addForm();
				}else{
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Add Record</div>';
				}
				break;
			case 'listData':
				if(strpos($_SESSION['userper'],'v') !== false) {
				$team->listData();
				}else{
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to View Record</div>';	
				}
				break;
			case 'edit':
				if(strpos($_SESSION['userper'],'e') !== false) {
				if($team->edit()){
					echo'<script>location.href="index.php?controller=team&action=team&subaction=listData";</script>';
				}
				}else{
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Edit Records</div>';	
				}	
				break;
			case 'editForm':
				if(strpos($_SESSION['userper'],'e') !== false) {
				$team->editForm();
				}else{
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Edit Records</div>';	
				}
				break;
			case 'delete':	
				if(strpos($_SESSION['userper'],'d') !== false) {
				$team->delete();
				echo'<script>location.href="index.php?controller=team&action=team&subaction=listData";</script>';
				}else {
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Delete Record</div>';	
				}
				break;
		}
	}
	

}
else{
		echo '<center><div class="notmsgHeader" ><img src="images/error.gif">&nbsp;&nbsp;<strong>You may be in wrong place!!!</strong></div></center>';
}
?>