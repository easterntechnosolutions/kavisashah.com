<?php
//include("includes/configure.php");
if(isset($_REQUEST['action'])){
	$include_class = $_REQUEST['action'].".php";
	include ($include_class);
	if($_REQUEST['action'] == 'subscription'){
		$subscription = new subscription();	
		switch($_REQUEST['subaction']){
			case 'listData':
				$subscription->listData();
				break;
			case 'delete':
				if($subscription->delete()){
					echo '<script>location.href="index.php?controller=subscription&action=subscription&subaction=listData";</script>';
				}
				break;
		}
	}
}
?>
