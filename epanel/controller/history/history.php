<script>
$(document).ready(function(){
	flag = 0;
	          $('input').on('blur', function() {      
				if ($("#sliderFrm").valid() && flag == 0) {
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
class history
{
	function addForm()
	{
		$form = new Form("addFrm");
		$form->configure(array(
			"prevent" => array("bootstrap","jQuery"),
			"view" => new View_SideBySide,
			"id" => "sliderFrm"
		));
		$status = array("E" => "Enabled", "D" => "Disabled");
		$position = array("H" => "Home Page", "I" => "Inner Pages");
		$form->addElement(new Element_HTML("<legend>New history</legend>"));
		$form->addElement(new Element_Hidden("controller", "history"));
		$form->addElement(new Element_Hidden("action", "history"));
		$form->addElement(new Element_Hidden("subaction", "add"));
		$form->addElement(new Element_Hidden("createdate"));
		$form->addElement(new Element_Hidden("username"));
		/* Actual Form Fields Started */		
		$form->addElement(new Element_Textbox("History Title:", "historyTitle", array(
			"placeholder" => "Title"
			)));
		$form->addElement(new Element_File("history Image: <br>(595 × 465 pixels)", "image", array(
			"required" => 1, 
			"placeholder" => "Photo"
			)));
		$form->addElement(new Element_TinyMCE("Description:", "description", array(
			"required" => 1, 
			"placeholder" => "Description"
			)));
        $form->addElement(new Element_Textbox("History Year:", "historyYear", array(
            "required" => 1,
            "placeholder" => "Description"
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
		$upload = $_FILES["image"]["name"];
		$mobile_upload = $_FILES["mobile_image"]["name"];
		$username=$_SESSION['username'];
		$target_path = $_FILES["image"]["name"];
		$sql = "Insert into history set 
		historyTitle = '".$_POST['historyTitle']."',
		description = '".$_POST['description']."',
		historyYear = '".$_POST['historyYear']."',
		username = '".$username."',
		createdate= now(),
		remote_ip ='".$_SERVER['REMOTE_ADDR']."'
		";
		$qry = ets_db_query($sql) or die(ets_db_error().$sql);
		
		$id = ets_db_insert_id();
        
		$img_path= DIR_FS_HISTORY_PATH.$id.'-'.$target_path;
//		echo "work";
		if(move_uploaded_file($_FILES["image"]["tmp_name"],$img_path)){
//            echo "in if"
//            move_uploaded_file($_FILES["mobile_image"]["tmp_name"],DIR_FS_HISTORY_PATH.$id.'-'.$mobile_upload);
            
			$updqry = "update history set 
			image = '".$id.'-'.$upload."'
			where 	historyID = '".$id."'
			";
			$updres = ets_db_query($updqry) or die(ets_db_error());
		
			return true;
//			exit;
		}else{
           echo "in else";
		    echo "Error in uploading Image..";
//			exit;
		}
	}
	function editForm()
	{		
		$sql = "select * from history where historyID ='".$_REQUEST['historyID']."'";
		$qry = ets_db_query($sql) or die(ets_db_error().$sql);
		if(ets_db_num_rows($qry) > 0){
			$rs=ets_db_fetch_array($qry);
			$form = new Form("frmEdit");
			$form->configure(array(
			"prevent" => array("bootstrap","jQuery"),
			"view" => new View_SideBySide,
			"id" => "sliderFrm"
			));
			$status = array("E" => "Enabled", "D" => "Disabled");
			$position = array("H" => "Home Page", "I" => "Inner Pages");
			$form->addElement(new Element_HTML("<legend>Edit history</legend>"));
			$form->addElement(new Element_Hidden("controller", "history"));
			$form->addElement(new Element_Hidden("action", "history"));
			$form->addElement(new Element_Hidden("subaction", "edit"));
			$form->addElement(new Element_Hidden("historyID", $_REQUEST['historyID']));
			$form->addElement(new Element_Hidden("prevImage", $rs['image']));
			$form->addElement(new Element_Hidden("prevMobileImage", $rs['mobile_image']));
			$form->addElement(new Element_Hidden("createdate"));
			$form->addElement(new Element_Hidden("username"));
			/* Actual Form Fields Started */
            $form->addElement(new Element_Textbox("History Title:", "historyTitle", array(
			"placeholder" => "historyTitle",
			"value" => $rs['historyTitle']
			)));
			
            
			$form->addElement(new Element_HTML('<img src="'.DIR_WS_HISTORY_PATH.$rs['image'].'" width="10%" height="10%" ">'));
            
			$form->addElement(new Element_File("history Image: <br>(595 × 465 pixels)", "image", array(
			     "placeholder" => "history Image"
			)));

			
			$form->addElement(new Element_TinyMCE("Description:", "description", array(
			"placeholder" => "Description",
			"value" => $rs['description']
			)));
            $form->addElement(new Element_Textbox("History Year:", "historyYear", array(
                "required" => 1,
                "value" => $rs['historyYear']
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
			echo "No Such Entry Found";
		}
		
	}
	function edit()
	{
		$updimg = true;		
		$updimg1 = true;		
		$error = false;
		$mobile_error = false;
		$username = $_SESSION['username'];
		if($_FILES["image"]['size'] == 0 ||  $_FILES["image"] == $_POST['prevImage']){
			$updimg = false;
			$upload = $_POST['prevImage'];
		}
        

		if($updimg){
			@unlink(DIR_FS_HISTORY_PATH.$_POST['prevImage']);
			$upload = $_POST['historyID'].'-'.$_FILES["image"]["name"];
			$target_path = DIR_FS_HISTORY_PATH.$_POST['historyID'].'-'.$_FILES["image"]["name"];
			if(!move_uploaded_file($_FILES["image"]["tmp_name"],$target_path)){
				$error = true;
				echo "Error in updating member image..";
			}
		}

     
        $updqry = ets_db_query("update history set 
        image = '".$upload."',					
        historyTitle = '".$_POST['historyTitle']."',
		description = '".$_POST['description']."',
		historyYear = '".$_POST['historyYear']."',
        username = '".$username."',	
        modifieddate = now(),
        remote_ip ='".$_SERVER['REMOTE_ADDR']."'		
        where historyID='" .$_POST['historyID']."'") or die ("Updating image records query failed: ".ets_db_error());

        return true;

	}
	function listData()
	{
?>
<script>
$(document).ready(function() {
	var listURL = 'helperfunc/historyList.php';
	$('#historylist').dataTable({
		"ajax": listURL
		
	});
});

</script>
<?php
		$subvar = 'onclick="return confirmSubmit();"';	

		echo '<table cellpadding="1" cellspacing="2" border="0" class="table table-striped table-bordered dataTable" id="historylist" width="100%">
		<thead>
		<tr>
			<th align="left">Id</th>			
			<th align="left">Title</th>		
			<th align="left">Description</th>
			<th align="left">Image</th>		
			<th>Action</th>
		</tr>
		</thead>
		<tbody></tbody>	
		<tfoot>
				<tr>
					<th align="left">Id</th>	
                    <th align="left">Title</th>	
					<th align="left">Description</th>
					<th align="left">Image</th>		
                    <th>Action</th>
				</tr>
		</tfoot>		
		 </table>';		
		?>

<?php		
	}	
	function delete()
	{
		$selqry = "Select * from history where historyID='".$_GET['historyID']."'";
		$selres = ets_db_query($selqry);
		$arr = ets_db_fetch_array($selres);
		@unlink(DIR_FS_HISTORY_PATH.$arr['image']);
		$delsql = "Delete from history where historyID='".$_GET['historyID']."'";
		$delqry = ets_db_query($delsql) or die(ets_db_error().$delsql);
		
		return true;		
	}
}
?>
