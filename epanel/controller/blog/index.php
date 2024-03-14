<?php
if(isset($_REQUEST['action'])){
	$include_class = $_REQUEST['action'].".php";
	include ($include_class);
	
	
	/* Start blog Master */
	if($_REQUEST['action'] == 'blog'){
		$blog = new blog();	
		switch($_REQUEST['subaction']){
			case 'add':
				if($blog->add()){
					echo'<script>location.href="index.php?controller=blog&action=blog&subaction=listData&msg=addmsg";</script>';
				}
				break;
			case 'addForm':
				$blog->addForm();
				
				break;
			case 'listData':
				$blog->listData();
				
				break;
			case 'edit':
				if($blog->edit()){
					echo'<script>location.href="index.php?controller=blog&action=blog&subaction=listData";</script>';
				}
				break;
			case 'editForm':
				$blog->editForm();
				
				break;
			case 'delete':
			    echo "work";
				 $blog->delete();
					echo'<script>location.href="index.php?controller=blog&action=blog&subaction=listData";</script>';
				break;


		}
	}
	
	if($_REQUEST['action'] == 'block'){
		$block = new block();
        $blog_id = $_REQUEST['blog_id'];
		switch($_REQUEST['subaction']){
			case 'add':
				if($block->add()){
					echo'<script>location.href="index.php?controller=blog&action=block&subaction=listData&blog_id='.$blog_id.'";</script>';
				}
				break;
			case 'addForm':
				$block->addForm();
				break;
			case 'listData':
				$block->listData();
                //echo'<script>location.href="index.php?controller=blog&action=block&subaction=listData&blog_id='.$blog_id.'";</script>';
				break;
			case 'edit':
				if($block->edit()){
					echo'<script>location.href="index.php?controller=blog&action=block&subaction=listData&blog_id='.$blog_id.'";</script>';
				}
				break;
			case 'editForm':
				$block->editForm();
				break;
			case 'delete':			    
				 $block->delete();
					echo'<script>location.href="index.php?controller=blog&action=block&subaction=listData&blog_id='.$blog_id.'";</script>';
				break;
		}
	}
	
	
}
else{
		echo '<center><div class="notmsgHeader" ><img src="images/error.gif">&nbsp;&nbsp;<strong>You may be in wrong place!!!</strong></div></center>';
}
?>