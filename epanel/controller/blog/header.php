<?php
if($_REQUEST['action'] == 'blog'){
?>
<div class="box-header">
	<h2>Blog Management</h2>
	<div class="box-icon">
		<a href="index.php?controller=blog&action=blog&subaction=listData" Title="List Records"><i class="fa fa-list"></i></a><a href="index.php?controller=blog&action=blog&subaction=addForm" title="Add New Record"><i class="fa fa-plus"></i></a>
	</div>
</div>
<?php
}else if($_REQUEST['action'] == 'block'){
?>
<div class="box-header">
	<h2>Block Management</h2>
	<div class="box-icon">
		<a href="index.php?controller=blog&action=block&subaction=listData&blog_id=<?php echo $_REQUEST['blog_id']; ?>" Title="List Records"><i class="fa fa-list"></i></a><a href="index.php?controller=blog&action=block&subaction=addForm&blog_id=<?php echo $_REQUEST['blog_id']; ?>" title="Add New Record"><i class="fa fa-plus"></i></a>
	</div>
</div>
<?php
} 
?>

