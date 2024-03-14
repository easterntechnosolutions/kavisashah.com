<?php
if(isset($_REQUEST['action'])){
	
	$include_class = $_REQUEST['action'].".php";
	include ($include_class);
	
	/* Start work Master*/
	if($_REQUEST['action'] == 'work'){
		$work = new work();
		switch($_REQUEST['subaction']){
			case 'add':
//				if(strpos($_SESSION['userper'],'a') !== false) {
				if($work->add()){
					echo'<script>location.href="index.php?controller=work&action=work&subaction=listData";</script>';
				}
//					}else{
//					echo '<div class="alert alert-error">You donot have Sufficient Permissions to Add Record</div>';
//				}
				break;
			case 'addForm':
//				if(strpos($_SESSION['userper'],'a') !== false) {
					$work->addForm();
//				}else{
//					echo '<div class="alert alert-error">You do not have Sufficient Permissions to Add Record</div>';				
//				}
				break;
			case 'edit':
//				if(strpos($_SESSION['userper'],'e') !== false) {
				if($work->edit()){
					echo'<script>location.href="index.php?controller=work&action=work&subaction=listData";</script>';
				}
//				}else{
//					echo '<div class="alert alert-error">You do not have Sufficient Permissions to Edit Record</div>';				
//				}
				break;
			case 'editForm':
//				if(strpos($_SESSION['userper'],'e') !== false) {
					$work->editForm();
//				}else{
//					echo '<div class="alert alert-error">You do not have Sufficient Permissions to Edit Record</div>';				
//				}
				break;				
			case 'listData':
//				if(strpos($_SESSION['userper'],'v') !== false) {
					$work->listData();
//				}else{
//					echo '<div class="alert alert-error">You do not have Sufficient Permissions to View Record</div>';				
//				}
				break;
			case 'delete':
//				if(strpos($_SESSION['userper'],'d') !== false) {
					if($work->delete()){
						echo'<script>location.href="index.php?controller=work&action=work&subaction=listData";</script>';
					}
//				}else{
//					echo '<div class="alert alert-error">You do not have Sufficient Permissions to Delete Record</div>';					
//				}
				break;
		}
	}
	
    if($_REQUEST['action'] == 'productimages'){
    	$productimages = new productimages();
    	switch($_REQUEST['subaction']){
    		case 'add':
    			if($productimages->add()){
    				echo'<script>location.href="index.php?controller=work&action=productimages&subaction=listData&workID='.$_REQUEST['workID'].'";</script>';
    			}
    			break;
    		case 'addForm':
    			if(strpos($_SESSION['userper'],'a') !== false) {
    				$productimages->addForm();
    			}else{
    				echo '<div class="alert alert-error">You do not have Sufficient Permissions to Add Record</div>';
    			}
    			break;
    		case 'edit':
    			if($productimages->edit()){
    				echo'<script>location.href="index.php?controller=work&action=productimages&subaction=listData&workID='.$_REQUEST['workID'].'";</script>';
    			}
    			break;
    		case 'editForm':
    			if(strpos($_SESSION['userper'],'e') !== false) {
    				$productimages->editForm();
    			}else{
    				echo '<div class="alert alert-error">You do not have Sufficient Permissions to Edit Record</div>';
    			}
    			break;
    		case 'listData':
    			if(strpos($_SESSION['userper'],'v') !== false) {
    				$productimages->listData();
    			}else{
    				echo '<div class="alert alert-error">You do not have Sufficient Permissions to View Record</div>';
    			}
    			break;
    		case 'delete':
    			if(strpos($_SESSION['userper'],'d') !== false) {
    				if($productimages->delete()){
    					echo'<script>location.href="index.php?controller=work&action=productimages&subaction=listData&workID='.$_REQUEST['workID'].'";</script>';
    				}
    			}else{
    				echo '<div class="alert alert-error">You do not have Sufficient Permissions to Delete Record</div>';
    			}
    			break;
    	}
    }
    
    if($_REQUEST['action'] == 'workvideo'){
	$workvideo = new workvideo();
	switch($_REQUEST['subaction']){
		case 'add':
			if($workvideo->add()){
				echo'<script>location.href="index.php?controller=work&action=workvideo&subaction=listData&workID='.$_REQUEST['workID'].'";</script>';
			}
			break;
		case 'addForm':
			if(strpos($_SESSION['userper'],'a') !== false) {
				$workvideo->addForm();
			}else{
				echo '<div class="alert alert-error">You do not have Sufficient Permissions to Add Record</div>';
			}
			break;
		case 'edit':
			if($workvideo->edit()){
				echo'<script>location.href="index.php?controller=work&action=workvideo&subaction=listData&workID='.$_REQUEST['workID'].'";</script>';
			}
			break;
		case 'editForm':
			if(strpos($_SESSION['userper'],'e') !== false) {
				$workvideo->editForm();
			}else{
				echo '<div class="alert alert-error">You do not have Sufficient Permissions to Edit Record</div>';
			}
			break;
		case 'listData':
			if(strpos($_SESSION['userper'],'v') !== false) {
				$workvideo->listData();
			}else{
				echo '<div class="alert alert-error">You do not have Sufficient Permissions to View Record</div>';
			}
			break;
		case 'delete':
			if(strpos($_SESSION['userper'],'d') !== false) {
				if($workvideo->delete()){
					echo'<script>location.href="index.php?controller=work&action=workvideo&subaction=listData&workID='.$_REQUEST['workID'].'";</script>';
				}
			}else{
				echo '<div class="alert alert-error">You do not have Sufficient Permissions to Delete Record</div>';
			}
			break;
	}
}

if($_REQUEST['action'] == 'workfont'){
	$workfont = new workfont();
	switch($_REQUEST['subaction']){
		case 'add':
			if($workfont->add()){
				echo'<script>location.href="index.php?controller=work&action=workfont&subaction=listData&workID='.$_REQUEST['workID'].'";</script>';
			}
			break;
		case 'addForm':
			if(strpos($_SESSION['userper'],'a') !== false) {
				$workfont->addForm();
			}else{
				echo '<div class="alert alert-error">You do not have Sufficient Permissions to Add Record</div>';
			}
			break;
		case 'edit':
			if($workfont->edit()){
				echo'<script>location.href="index.php?controller=work&action=workfont&subaction=listData&workID='.$_REQUEST['workID'].'";</script>';
			}
			break;
		case 'editForm':
			if(strpos($_SESSION['userper'],'e') !== false) {
				$workfont->editForm();
			}else{
				echo '<div class="alert alert-error">You do not have Sufficient Permissions to Edit Record</div>';
			}
			break;
		case 'listData':
			if(strpos($_SESSION['userper'],'v') !== false) {
				$workfont->listData();
			}else{
				echo '<div class="alert alert-error">You do not have Sufficient Permissions to View Record</div>';
			}
			break;
		case 'delete':
			if(strpos($_SESSION['userper'],'d') !== false) {
				if($workfont->delete()){
					echo'<script>location.href="index.php?controller=work&action=workfont&subaction=listData&workID='.$_REQUEST['workID'].'";</script>';
				}
			}else{
				echo '<div class="alert alert-error">You do not have Sufficient Permissions to Delete Record</div>';
			}
			break;
	}
}

if($_REQUEST['action'] == 'worklogo'){
	$worklogo = new worklogo();
	switch($_REQUEST['subaction']){
		case 'add':
			if($worklogo->add()){
				echo'<script>location.href="index.php?controller=work&action=worklogo&subaction=listData&workID='.$_REQUEST['workID'].'";</script>';
			}
			break;
		case 'addForm':
			if(strpos($_SESSION['userper'],'a') !== false) {
				$worklogo->addForm();
			}else{
				echo '<div class="alert alert-error">You do not have Sufficient Permissions to Add Record</div>';
			}
			break;
		case 'edit':
			if($worklogo->edit()){
				echo'<script>location.href="index.php?controller=work&action=worklogo&subaction=listData&workID='.$_REQUEST['workID'].'";</script>';
			}
			break;
		case 'editForm':
			if(strpos($_SESSION['userper'],'e') !== false) {
				$worklogo->editForm();
			}else{
				echo '<div class="alert alert-error">You do not have Sufficient Permissions to Edit Record</div>';
			}
			break;
		case 'listData':
			if(strpos($_SESSION['userper'],'v') !== false) {
				$worklogo->listData();
			}else{
				echo '<div class="alert alert-error">You do not have Sufficient Permissions to View Record</div>';
			}
			break;
		case 'delete':
			if(strpos($_SESSION['userper'],'d') !== false) {
				if($worklogo->delete()){
					echo'<script>location.href="index.php?controller=work&action=worklogo&subaction=listData&workID='.$_REQUEST['workID'].'";</script>';
				}
			}else{
				echo '<div class="alert alert-error">You do not have Sufficient Permissions to Delete Record</div>';
			}
			break;
	}
}

if($_REQUEST['action'] == 'workcolor'){
	$workcolor = new workcolor();
	switch($_REQUEST['subaction']){
		case 'add':
			if($workcolor->add()){
				echo'<script>location.href="index.php?controller=work&action=workcolor&subaction=listData&workID='.$_REQUEST['workID'].'";</script>';
			}
			break;
		case 'addForm':
			if(strpos($_SESSION['userper'],'a') !== false) {
				$workcolor->addForm();
			}else{
				echo '<div class="alert alert-error">You do not have Sufficient Permissions to Add Record</div>';
			}
			break;
		case 'edit':
			if($workcolor->edit()){
				echo'<script>location.href="index.php?controller=work&action=workcolor&subaction=listData&workID='.$_REQUEST['workID'].'";</script>';
			}
			break;
		case 'editForm':
			if(strpos($_SESSION['userper'],'e') !== false) {
				$workcolor->editForm();
			}else{
				echo '<div class="alert alert-error">You do not have Sufficient Permissions to Edit Record</div>';
			}
			break;
		case 'listData':
			if(strpos($_SESSION['userper'],'v') !== false) {
				$workcolor->listData();
			}else{
				echo '<div class="alert alert-error">You do not have Sufficient Permissions to View Record</div>';
			}
			break;
		case 'delete':
			if(strpos($_SESSION['userper'],'d') !== false) {
				if($workcolor->delete()){
					echo'<script>location.href="index.php?controller=work&action=workcolor&subaction=listData&workID='.$_REQUEST['workID'].'";</script>';
				}
			}else{
				echo '<div class="alert alert-error">You do not have Sufficient Permissions to Delete Record</div>';
			}
			break;
	}
}

}
else{
		echo '<center><div class="notmsgHeader" ><img src="images/error.gif">&nbsp;&nbsp;<strong>You may be in wrong place!!!</strong></div></center>';
}
?>

