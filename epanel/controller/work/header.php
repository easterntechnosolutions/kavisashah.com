<?php
if($_REQUEST['action'] == 'work'){
?>
<div class="box-header">
	<h2>Mobile Page Management</h2>
	<div class="box-icon">
		<a href="index.php?controller=work&action=work&subaction=listData" Title="List Records"><i class="fa fa-list"></i></a>
		<?php 
//			if(strpos($_SESSION['userper'],'a') !== false) { 
		?>
		<a href="index.php?controller=work&action=work&subaction=addForm" title="Add New Record"><i class="fa fa-plus"></i></a>
		<?php 
//			}
		?>
	</div>
</div>
<?php
}

if($_REQUEST['action'] == 'productimages'){
    ?>
    <div class="box-header">
        <h2>Work Brand Image Management (<?php echo getfldValue('work','workID',$_REQUEST['workID'],'is_work'); ?>&nbsp;&nbsp;<a href="index.php?controller=work&action=work&subaction=listData&is_work=<?php echo getfldValue('work','workID',$_REQUEST['workID'],'work_title'); ?>" Title="Go Back to Projects's List"><i class="fa fa-reply"></i></a>)</h2>
        <div class="box-icon">
            <a href="index.php?controller=work&action=productimages&subaction=listData&workID=<?php echo $_REQUEST['workID']; ?>" Title="List Records"><i class="fa fa-list"></i></a><a href="index.php?controller=work&action=productimages&subaction=addForm&workID=<?php echo $_REQUEST['workID']; ?>" title="Add New Record"><i class="fa fa-plus"></i></a>
        </div>
    </div>
    <?php
}
?>
<?php 
if($_REQUEST['action'] == 'workvideo'){
    ?>
    <div class="box-header">
        <h2>Work Video Management (<?php echo getfldValue('work','workID',$_REQUEST['workID'],'is_work'); ?>&nbsp;&nbsp;<a href="index.php?controller=work&action=work&subaction=listData&is_work=<?php echo getfldValue('work','workID',$_REQUEST['workID'],'work_title'); ?>" Title="Go Back to Projects's List"><i class="fa fa-reply"></i></a>)</h2>
        <div class="box-icon">
            <a href="index.php?controller=work&action=workvideo&subaction=listData&workID=<?php echo $_REQUEST['workID']; ?>" Title="List Records"><i class="fa fa-list"></i></a><a href="index.php?controller=work&action=workvideo&subaction=addForm&workID=<?php echo $_REQUEST['workID']; ?>" title="Add New Record"><i class="fa fa-plus"></i></a>
        </div>
    </div>
<?php
}
?>

<?php 
if($_REQUEST['action'] == 'workfont'){
    ?>
    <div class="box-header">
        <h2>Work Font Image Management (<?php echo getfldValue('work','workID',$_REQUEST['workID'],'is_work'); ?>&nbsp;&nbsp;<a href="index.php?controller=work&action=work&subaction=listData&is_work=<?php echo getfldValue('work','workID',$_REQUEST['workID'],'work_title'); ?>" Title="Go Back to Projects's List"><i class="fa fa-reply"></i></a>)</h2>
        <div class="box-icon">
            <a href="index.php?controller=work&action=workfont&subaction=listData&workID=<?php echo $_REQUEST['workID']; ?>" Title="List Records"><i class="fa fa-list"></i></a><a href="index.php?controller=work&action=workfont&subaction=addForm&workID=<?php echo $_REQUEST['workID']; ?>" title="Add New Record"><i class="fa fa-plus"></i></a>
        </div>
    </div>
<?php
}
?>

<?php 
if($_REQUEST['action'] == 'worklogo'){
    ?>
    <div class="box-header">
        <h2>Work Logo Image Management (<?php echo getfldValue('work','workID',$_REQUEST['workID'],'is_work'); ?>&nbsp;&nbsp;<a href="index.php?controller=work&action=work&subaction=listData&is_work=<?php echo getfldValue('work','workID',$_REQUEST['workID'],'work_title'); ?>" Title="Go Back to Projects's List"><i class="fa fa-reply"></i></a>)</h2>
        <div class="box-icon">
            <a href="index.php?controller=work&action=worklogo&subaction=listData&workID=<?php echo $_REQUEST['workID']; ?>" Title="List Records"><i class="fa fa-list"></i></a><a href="index.php?controller=work&action=worklogo&subaction=addForm&workID=<?php echo $_REQUEST['workID']; ?>" title="Add New Record"><i class="fa fa-plus"></i></a>
        </div>
    </div>
<?php
}
?>
<?php 
if($_REQUEST['action'] == 'workcolor'){
    ?>
    <div class="box-header">
        <h2>Work Color Palette Image Management (<?php echo getfldValue('work','workID',$_REQUEST['workID'],'is_work'); ?>&nbsp;&nbsp;<a href="index.php?controller=work&action=work&subaction=listData&is_work=<?php echo getfldValue('work','workID',$_REQUEST['workID'],'work_title'); ?>" Title="Go Back to Projects's List"><i class="fa fa-reply"></i></a>)</h2>
        <div class="box-icon">
            <a href="index.php?controller=work&action=workcolor&subaction=listData&workID=<?php echo $_REQUEST['workID']; ?>" Title="List Records"><i class="fa fa-list"></i></a><a href="index.php?controller=work&action=workcolor&subaction=addForm&workID=<?php echo $_REQUEST['workID']; ?>" title="Add New Record"><i class="fa fa-plus"></i></a>
        </div>
    </div>
<?php
}
?>