<?php
if(isset($_REQUEST['action'])){
	$include_class = $_REQUEST['action'].".php";
	include ($include_class);	
	/* Start Product Master */
	if($_REQUEST['action'] == 'successstory'){
		$successstory = new successstory();	
		switch($_REQUEST['subaction']){
			case 'add':
				if(strpos($_SESSION['userper'],'a') !== false) {
					if($successstory->add()){
						echo '<script>location.href="index.php?controller=successstory&action=successstory&subaction=listData";</script>';
					}
				}else{
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Add Record</div>';
				}
				/*if($successstory->add()){
					echo'<script>location.href="index.php?controller=successstory&action=successstory&subaction=listData&msg=addmsg";</script>';
				}*/
				break;
			case 'addForm':

				if(strpos($_SESSION['userper'],'a') !== false) {
					$successstory->addForm();
				}else {
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Add Record</div>';	
				}
				/*$successstory->addForm();
				$permission = getPermission($_SESSION['group'],'successstory');
				$pos = strrpos($permission,"a");	
				if(!(is_bool($pos)) && $pos >= 0){
					$successstory->successstoryuccessstory_display();
				}else	{
					echo '<center><div class="notmsgHeader" ><img src="images/error.gif">&nbsp;&nbsp;&nbsp;<strong>You donot have Sufficient Permissions to Add New Records</strong></div></center>';	
				}*/
				break;
			case 'listData':
				if(strpos($_SESSION['userper'],'v') !== false) {
					$successstory->listData();
				}
				else{
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to View Record</div>';	
				}
				/*$successstory->listData();
				$permission = getPermission($_SESSION['group'],'successstory');
				$pos = strrpos($permission,"v");	
				if(!(is_bool($pos)) && $pos >= 0){
					$successstory->listsuccessstory();
				}else {
					echo '<center><div class="notmsgHeader" ><img src="images/error.gif">&nbsp;&nbsp;&nbsp;<strong>You donot have Sufficient Permissions to View Records</strong></div></center>';
				} */
				break;
			case 'edit':
				if(strpos($_SESSION['userper'],'e') !== false) {
					if($successstory->edit()){
					echo '<script>location.href="index.php?controller=successstory&action=successstory&subaction=listData";</script>';
					}
				}else{
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Edit Records</div>';	
				}
				/*if($successstory->edit()){
					echo'<script>location.href="index.php?controller=successstory&action=successstory&subaction=listData";</script>';
				}*/
				break;
			case 'editForm':
				if(strpos($_SESSION['userper'],'e') !== false) {
					$successstory->editForm();
				}else{
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Edit Records</div>';	
				}
				/*$successstory->editForm();
				$permission = getPermission($_SESSION['group'],'successstory');
				$pos = strrpos($permission,"e");	
				if(!(is_bool($pos)) && $pos >= 0){
					$successstory->editsuccessstory_display();
				}else{
					echo '<center><div class="notmsgHeader" ><img src="images/error.gif">&nbsp;&nbsp;&nbsp;<strong>You donot have Sufficient Permissions to Edit Records</strong></div></center>';
				}
				*/
				break;
			case 'delete':			
				if(strpos($_SESSION['userper'],'d') !== false) {
					if($successstory->delete()){
					echo '<script>location.href="index.php?controller=successstory&action=successstory&subaction=listData";</script>';
					}	
				}else {
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Delete Record</div>';	
				}
				 /*$successstory->delete();	echo'<script>location.href="index.php?controller=successstory&action=successstory&subaction=listData";</script>';*/
				break;
			case 'ajaxPost':
				$successstory->ajaxPost();
				break;
		}
	}
	/* Start successstory_Master */
	if($_REQUEST['action'] == 'successstorymaster'){
		$successstorymaster = new successstorymaster();	
		switch($_REQUEST['subaction']){
			case 'add':
				if(strpos($_SESSION['userper'],'a') !== false) {
					if($successstorymaster->add()){
						echo '<script>location.href="index.php?controller=successstory&action=successstorymaster&subaction=listData";</script>';
					}
				}else{
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Add Record</div>';
				}
				/*if($successstorymaster->add()){
					echo'<script>location.href="index.php?controller=successstory&action=successstorymaster&subaction=listData&msg=addmsg";</script>';
				}*/
				break;
			case 'addForm':
				if(strpos($_SESSION['userper'],'a') !== false) {
					$successstorymaster->addForm();
				}else {
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Add Record</div>';	
				}
				/*$successstorymaster->addForm();
				$permission = getPermission($_SESSION['group'],'successstory');
				$pos = strrpos($permission,"a");	
				if(!(is_bool($pos)) && $pos >= 0){
					$successstory->successstoryuccessstory_display();
				}else	{
					echo '<center><div class="notmsgHeader" ><img src="images/error.gif">&nbsp;&nbsp;&nbsp;<strong>You donot have Sufficient Permissions to Add New Records</strong></div></center>';	
				}*/
				break;
			case 'listData':
				if(strpos($_SESSION['userper'],'v') !== false) {
					$successstorymaster->listData();
				}
				else{
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to View Record</div>';	
				}
				/*$successstorymaster->listData();
				$permission = getPermission($_SESSION['group'],'successstory');
				$pos = strrpos($permission,"v");	
				if(!(is_bool($pos)) && $pos >= 0){
					$successstory->listsuccessstory();
				}else {
					echo '<center><div class="notmsgHeader" ><img src="images/error.gif">&nbsp;&nbsp;&nbsp;<strong>You donot have Sufficient Permissions to View Records</strong></div></center>';
				} */
				break;
			case 'edit':
				if(strpos($_SESSION['userper'],'e') !== false) {
					if($successstorymaster->edit()){
					echo '<script>location.href="index.php?controller=successstory&action=successstorymaster&subaction=listData";</script>';
					}
				}else{
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Edit Records</div>';	
				}
			/*	if($successstorymaster->edit()){
					echo'<script>location.href="index.php?controller=successstory&action=successstorymaster&subaction=listData";</script>';
				}*/
				break;
			case 'editForm':
				if(strpos($_SESSION['userper'],'e') !== false) {
					$successstorymaster->editForm();
				}else{
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Edit Records</div>';	
				}
				/*$successstorymaster->editForm();
				$permission = getPermission($_SESSION['group'],'successstory');
				$pos = strrpos($permission,"e");	
				if(!(is_bool($pos)) && $pos >= 0){
					$successstory->editsuccessstory_display();
				}else{
					echo '<center><div class="notmsgHeader" ><img src="images/error.gif">&nbsp;&nbsp;&nbsp;<strong>You donot have Sufficient Permissions to Edit Records</strong></div></center>';
				}
				*/
				break;
			case 'delete':		
				if(strpos($_SESSION['userper'],'d') !== false) {
					if($successstorymaster->delete()){
					echo '<script>location.href="index.php?controller=successstory&action=successstorymaster&subaction=listData";</script>';
					}	
				}else {
					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Delete Record</div>';	
				}
				/* $successstorymaster->delete();
					echo'<script>location.href="index.php?controller=successstory&action=successstorymaster&subaction=listData";</script>';*/
				break;
		}
	}
}
else{
		echo '<center><div class="notmsgHeader" ><img src="images/error.gif">&nbsp;&nbsp;<strong>You may be in wrong place!!!</strong></div></center>';
}


?>