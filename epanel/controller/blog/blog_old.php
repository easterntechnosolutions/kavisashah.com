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
			  
			  $('input[type=file]').bind('change', function() {

				  //this.files[0].size gets the size of your file.
				  var iSize = ($("input[type=file]")[0].files[0].size / 1024); 
					iSize = (Math.round(iSize * 100) / 100)
				var max = '<?php echo (int)ini_get('upload_max_filesize'); ?>' * 1024;	
				  if(iSize > max)
				  {
					  $('input[type=submit]').prop('disabled', 'disabled');
					  flag = 1;
					  alert('Maximum file upload size is : '+'<?php echo (int)ini_get('upload_max_filesize'); ?>'+' MB');
				  }
					  
				  else
				  {
					 $('input[type=submit]').prop('disabled', false); 
					 flag = 0;
				  }
					 

				});

});
</script>
<?php
include WS_PFBC_ROOT."Form.php";
class blog
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
		$designation = getdesignationlist('T');
		$form->addElement(new Element_HTML("<legend>New blog</legend>"));
		$form->addElement(new Element_Hidden("controller", "blog"));
		$form->addElement(new Element_Hidden("action", "blog"));
		$form->addElement(new Element_Hidden("subaction", "add"));
		
		/* Actual Form Fields Started */
		$form->addElement(new Element_HTML('<div id="dtBox"></div>'));	
		$form->addElement(new Element_Textbox("Title:", "name", array(
			"required" => 1, 
			"placeholder" => "Name"
			)));
		$form->addElement(new Element_File("Image:", "image", array(
			"placeholder" => "image"
			)));
        $form->addElement(new Element_TinyMCE("Description:", "description", array(
			"required" => 1, 
			"placeholder" => "Description"
			)));
		//$form->addElement(new Element_HTML('<label>Note : width = 250px height = 250px require file</label><br><br>'));			
					
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
		$username=$_SESSION['username'];
		$sql = "Insert into blog_master set 
		title = '".ets_db_real_escape_string($_POST['name'])."',
        description = '".ets_db_real_escape_string($_POST['description'])."',
		bdate = '".date('Y-m-d',strtotime($_POST['bdate']))."',
		username = '".$username."',
		createdate = now(),
		sortorder='".$_POST['sortorder']."',
		status = '".$_POST['status']."',
		remote_ip ='".$_SERVER['REMOTE_ADDR']."'
		";
		$qry = ets_db_query($sql) or die(ets_db_error().$sql);
		$id = ets_db_insert_id();
		
		if($_FILES['image']['name'] != "")
		{
			
			$path = DIR_FS_BLOG_PATH;
			
			if(!file_exists($path))
			{
				mkdir($path);
				exec("chown ".FILEUSER.FILEUSER." ".$path);
				exec("chmod 0777 ".$path);
				
			}
			$logo = $id . '-' .$_FILES['image']['name'];
			if(move_uploaded_file($_FILES['image']['tmp_name'],$path.$logo))
			{
				$qry = "update blog_master set image = '".$logo."' where blog_id = '".$id."'";
				$res = ets_db_query($qry) or die(ets_db_error());
			}
		}
		
		return true;
	}
	function editForm()
	{		
		$sql = "select * from blog_master where blog_id ='".$_REQUEST['blog_id']."'";
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
			$designation = getdesignationlist('T');
			$form->addElement(new Element_HTML("<legend>Edit blog</legend>"));
			$form->addElement(new Element_Hidden("controller", "blog"));
			$form->addElement(new Element_Hidden("action", "blog"));
			$form->addElement(new Element_Hidden("subaction", "edit"));
			$form->addElement(new Element_Hidden("blog_id", $_REQUEST['blog_id']));
			$form->addElement(new Element_Hidden("prevImage", $rs['image']));
			/* Actual Form Fields Started */
			$form->addElement(new Element_HTML('<div id="dtBox"></div>'));	
			$form->addElement(new Element_Textbox("Name:", "name", array(
			"value"=> $rs['title'],
			"required" => 1, 
			"placeholder" => "Name"
			)));
			if($rs['image'] != "")
				$form->addElement(new Element_HTML('<img src="'.DIR_WS_BLOG_PATH.$rs['image'].'" height = "100px" width = "100px"><br><br>'));			
			
			$form->addElement(new Element_File("Image:", "image", array(
				"placeholder" => "Image"
				)));
            $form->addElement(new Element_TinyMCE("Description:", "description", array(
			"required" => 1, 
			"placeholder" => "Description",
            "value" => $rs['description']
			)));
            
			//$form->addElement(new Element_HTML('<label>Note : width = 250px height = 250px require file</label><br><br>'));			
			
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
		if($_FILES['image']['name'] != "")
		{
			$path = DIR_FS_BLOG_PATH;
			if(!file_exists($path))
			{
				mkdir($path);
				exec("chown ".FILEUSER.FILEUSER." ".$path);
				exec("chmod 0777 ".$path);
				
			}
			
			@unlink($path.$_POST['prevImage']);
			$id = $_POST['blog_id'];
			$logo = $id . '-' .$_FILES['image']['name'];
			if(move_uploaded_file($_FILES['image']['tmp_name'],$path.$logo))
			{
				$qry = "update blog_master set image = '".$logo."' where blog_id = '".$id."'";
				$res = ets_db_query($qry) or die(ets_db_error());
			}
			
			
		}
		
		
		$username = $_SESSION['username'];
		$updqry = ets_db_query("update blog_master set 
		title = '".ets_db_real_escape_string($_POST['name'])."',
		description = '".ets_db_real_escape_string($_POST['description'])."',
		bdate = '".date('Y-m-d',strtotime($_POST['bdate']))."',
        username = '".$username."',	
		sortorder='".$_POST['sortorder']."',
		status = '".$_POST['status']."',
		modifieddate = now(),
		remote_ip ='".$_SERVER['REMOTE_ADDR']."'
		where blog_id='" .$_POST['blog_id']."'") or die ("Updating blog records query failed: ".ets_db_error());
			
		return true;
	}
	
	
	function listData()
	{
?>
<script>
$(document).ready(function() {
	var listURL = 'helperfunc/blogList.php';
	$('#bloglist').dataTable({
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
		echo '<div id="no-more-tables"><table cellpadding="1" cellspacing="2" border="0" class="table table-striped table-bordered dataTable" id="bloglist" width="100%">
		<thead>
		<tr>
			<th align="left">ID</th>
			<th align="left">Name</th>
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
					<th align="left">Name</th>
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
		params:{"tblName":"blog_master"},
		value: 1,
		source: [{value: 'E', text: 'Active'},{value: 'D', text: 'Disabled'}]
	});
</script>
<?php		
	}
	
	function delete()
	{
		$logo = getfldValue('blog_master','blog_id',$_GET['blog_id'],'image');
		@unlink(DIR_FS_blog_PATH.$logo);
		
		$delsql = "Delete from blog_master where blog_id='".$_GET['blog_id']."'";
		$delqry = ets_db_query($delsql) or die(ets_db_error().$delsql);
		return true;		
	}
	
	
	}
?>
