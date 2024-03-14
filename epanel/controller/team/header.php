<?php 
if($_REQUEST['action'] == 'team')
{
?>	
<div class="box-header">
	<h2>Team Management</h2>
	<div class="box-icon">
		<a href="index.php?controller=team&action=team&subaction=listData" Title="List Records"><i class="fa fa-list"></i></a>
		<?php if(strpos($_SESSION['userper'],'a') !== false) { ?>
		<a href="index.php?controller=team&action=team&subaction=addForm" title="Add New Record"><i class="fa fa-plus"></i></a>
		<?php } ?>
	</div>
</div>

<?php } ?>
<?php 
if($_REQUEST['action'] == 'teamtype')
{
?>	
<div class="box-header">
	<h2>Team Type Management</h2>
	<div class="box-icon">
		<a href="index.php?controller=team&action=teamtype&subaction=listData" Title="List Records"><i class="fa fa-list"></i></a>
		<?php if(strpos($_SESSION['userper'],'a') !== false) { ?>
		<a href="index.php?controller=team&action=teamtype&subaction=addForm" title="Add New Record"><i class="fa fa-plus"></i></a>
		<?php } ?>
	</div>
</div>

<?php } ?>