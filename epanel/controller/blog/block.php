<script>
$(document).ready(function(){
	
	flag = 0;
	          $('input[type=submit]').on('click', function() {       
				if ($("#testiFrm").valid()) {
					$('input[type=submit]').prop('disabled', false);  
				} else {
					$('input[type=submit]').prop('disabled', 'disabled');
				}
			  });
			  

});
</script>
<?php
include WS_PFBC_ROOT."Form.php";
class block
{
	function addForm()
	{
		
		$form = new Form("addFrm");
		$form->configure(array(
			"prevent" => array("bootstrap","jQuery"),
			"view" => new View_SideBySide,
			"id" => "testiFrm"
		));
		$status = array("E" => "Enabled", "D" => "Disabled");
		$designation = getdesignationlist('V');
		
		$form->addElement(new Element_HTML("<legend>New Concern person</legend>"));
		$form->addElement(new Element_Hidden("controller", "blog"));
		$form->addElement(new Element_Hidden("action", "block"));
		$form->addElement(new Element_Hidden("subaction", "add"));
		$form->addElement(new Element_Hidden("blog_id", $_REQUEST['blog_id']));
		
		/* Actual Form Fields Started */
		$form->addElement(new Element_Textbox("Title:", "title", array(
			"placeholder" => "Title"
			)));
		
		$form->addElement(new Element_File("Image:", "image", array(
			"placeholder" => "Image"
			)));
        
        $form->addElement(new Element_TinyMCE("Description:", "description", array(
			"placeholder" => "Description"
			)));
		
	
		$form->addElement(new Element_Textbox("Sort Order:", "sortorder", array(
			"required" => 1, 
			"placeholder" => "SortOrder"
			)));
		$form->addElement(new Element_Select("Status:", "status", $status, array(
			"required" => 1, 
			"placeholder" => "Status"
			)));		
		$form->addElement(new Element_HTML('<hr>'));
		$form->addElement(new Element_Button);
		$form->addElement(new Element_Button("Cancel", "button", array(
			"onclick" => "history.go(-1);"
		)));
		$form->render();
	}
	function add()
	{
		$sql = "Insert into block_to_blog set 
				title = '" . $_POST['title'] . "',
				description = '" .ets_db_real_escape_string($_POST['description'])  . "',
				blog_id = '" . $_POST['blog_id'] . "',
				username = '".$_SESSION['loginID']."',
				createdate = '".date('Y-m-d')."',
				status = 'E',
				sortorder = '" .$_POST['sortorder']. "',
				remote_ip ='" . $_SERVER['REMOTE_ADDR'] . "'
				";
				ets_db_query($sql) or die(ets_db_error());
		$id = ets_db_insert_id();
		//print_r($_FILES);		
		if($_FILES['image']['name'] != '')
		{
			
			$file = $_POST['blog_id'].'-'.$_FILES['image']['name'];
			$path = DIR_FS_BLOG_PATH.$_POST['blog_id'].'/';
			
			if(!file_exists($path))
			{
				mkdir($path);
				exec("chown ".FILEUSER.FILEUSER." ".$path);
				exec("chmod 0777 ".$path);
				
			}
			
			if(move_uploaded_file($_FILES['image']['tmp_name'],$path.$file))
			{
				$q = "Update block_to_blog set image = '".$file."' where id = '".$id."'";
				$r = ets_db_query($q) or die(ets_db_error());
			}
		}
		
		return true;
	}
	function editForm()
	{		
		$sql = "select * from block_to_blog where id ='".$_REQUEST['id']."'";
		$qry = ets_db_query($sql) or die(ets_db_error().$sql);
		
		if(ets_db_num_rows($qry) > 0){
			$rs=ets_db_fetch_array($qry);
			$form = new Form("html5");
			$form->configure(array(
			"prevent" => array("bootstrap","jQuery"),
			"view" => new View_SideBySide,
			"id" => "testiFrm"
			));
			$status = array("E" => "Enabled", "D" => "Disabled");
			$form->addElement(new Element_HTML("<legend>Edit Document</legend>"));
			$form->addElement(new Element_Hidden("controller", "blog"));
			$form->addElement(new Element_Hidden("action", "block"));
			$form->addElement(new Element_Hidden("subaction", "edit"));
			$form->addElement(new Element_Hidden("id", $_REQUEST['id']));
			$form->addElement(new Element_Hidden("blog_id", $_REQUEST['blog_id']));
			$form->addElement(new Element_Hidden("prevFile", $rs['image']));
			/* Actual Form Fields Started */
			$form->addElement(new Element_Textbox("Title", "title", array(
			"placeholder" => "Title",
			"value" => $rs['title'],
			)));
			
			if($rs['image'] != '')
			$form->addElement(new Element_HTML('<a href = "'.DIR_WS_BLOG_PATH.$rs['blog_id'].'/'.$rs['image'].'" target = "_blank">View Uploaded Document</a>'));			
			$form->addElement(new Element_File("Image:", "image", array(
			"placeholder" => "image"
			)));
			$form->addElement(new Element_TinyMCE("Description:", "description", array(
			"placeholder" => "Description",
            "value" => $rs['description']
			)));
					
			$form->addElement(new Element_Textbox("Sort Order:", "sortorder", array(
			"value"=> $rs['sortorder'],
			"required" => 1, 
			"placeholder" => "Sort Order"
			)));		
			$form->addElement(new Element_Select("Status:", "status", $status, array(
			"value"=> $rs['status'],
			"required" => 1, 
			"placeholder" => "Status"
			)));
			$form->addElement(new Element_HTML('<hr>'));
			$form->addElement(new Element_Button);
			$form->addElement(new Element_Button("Cancel", "button", array(
				"onclick" => "history.go(-1);"
			)));
			$form->render();
		}
		else
		{
			echo "No Tax Found...";
		}
		
	}
	function edit()
	{
		$username=$_SESSION['username'];
		$sql = "Update block_to_blog set 
				title = '" . $_POST['title'] . "',
                description = '" .ets_db_real_escape_string($_POST['description'])  . "',
				username = '".$_SESSION['loginID']."',
				modifieddate = '".date('Y-m-d')."',
				status = 'E',
				sortorder = '" .$_POST['sortorder']. "',
				remote_ip ='" . $_SERVER['REMOTE_ADDR'] . "'
				where id = '".$_REQUEST['id']."'
				";
				ets_db_query($sql) or die(ets_db_error());
			if($_FILES['image']['name'] != '')
			{
				echo $_REQUEST['blog_id'];
				$file = $_REQUEST['blog_id'].'-'.$_FILES['image']['name'];
				$path = DIR_FS_BLOG_PATH.$_REQUEST['blog_id'].'/';
				@unlink($path.$_POST['prevFile']);
				
				if(!file_exists($path))
				{
					mkdir($path);
					exec("chown ".FILEUSER.FILEUSER." ".$path);
					exec("chmod 0777 ".$path);
					
				}
				
				if(move_uploaded_file($_FILES['image']['tmp_name'],$path.$file))
				{
					$q = "Update block_to_blog set image = '".$file."' where id = '".$_REQUEST['id']."'";
					echo $q;
					$r = ets_db_query($q) or die(ets_db_error());
				}
			}	
		
		
		return true;
	}
	
		function listData()
	{
?>
<script>
$(document).ready(function() {
	var listURL = 'helperfunc/blockList.php?blog_id=<?php echo $_REQUEST['blog_id']; ?>';
	$('#blocklist').dataTable({
		"bProcessing": true,
		"sAjaxSource": listURL,
		"sDom": "<'row-fluid'<'span8'l><'span4'f>r>t<'row-fluid'<'span8'i><'span4'p>>",
		"sPaginationType": "bootstrap",
		"oLanguage": {"sLengthMenu": "_MENU_ records per page"} 
	});
});

</script>
	

<?php
		$subvar = 'onclick="return confirmSubmit();"';	
		echo '<div id="no-more-tables"><table cellpadding="1" cellspacing="2" border="0" class="table table-striped table-bordered dataTable" id="blocklist" width="100%">
		<thead>
		<tr>
			<th align="left">ID</th>
			<th align="left">Title</th>
			<th align="left">Image</th>
			<th align="left">Status</th>
			<th align="left">Sortorder</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody></tbody>	
		<tfoot>
				<tr>
					<th align="left">ID</th>
					<th align="left">Title</th>
					<th align="left">Image</th>
					<th align="left">Status</th>
					<th align="left">Sortorder</th>
					<th>Action</th>
				</tr>
		</tfoot>
		 </table></div>';		
	?>
<script>
	$('.table').editable({
		selector: 'a.estatus,a.esortorder',
		params:{"tblName":"block_to_blog"},
		value: 1,
		source: [{value: 'E', text: 'Active'},{value: 'D', text: 'Disabled'}]
	});
</script>
<?php		
	}		
	function delete()
	{
		$file = getfldValue('block_to_blog','id',$_GET['id'],'image');
		$path = DIR_FS_BLOG_PATH.$_REQUEST['blog_id'].'/';
		@unlink($path.$file);
		
		$delsql = "Delete from block_to_blog where id='".$_GET['id']."'";
		$delqry = ets_db_query($delsql) or die(ets_db_error().$delsql);
		return true;		
	}
	
	
}
?>
