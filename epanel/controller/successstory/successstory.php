<script>
$(document).ready(function(){
	flag = 0;
	          $('input').on('blur', function() {      
				if ($("#successstoryFrm").valid() && flag == 0) {
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
class successstory
{
	function addForm()
	{

		$form = new Form("successstoryFrm");
		$form->configure(array(
			"prevent" => array("bootstrap","jQuery"),
			"view" => new View_SideBySide,
			"id" => "successstoryFrm"
		));
		$status = array("E" => "Enabled", "D" => "Disabled");
		$position = array("H" => "Set As Home Page", "I" => "Not Set As Home Page");
		$form->addElement(new Element_HTML("<legend>Add Success Story </legend>"));
		$form->addElement(new Element_Hidden("controller", "successstory"));
		$form->addElement(new Element_Hidden("action", "successstory"));
		$form->addElement(new Element_Hidden("subaction", "add"));

		$form->addElement(new Element_Textbox("Success Story Title:", "successstory_title", array(
			"required" => 1, 
			"placeholder" => "Success Story Title"
			)));

		$form->addElement(new Element_TinyMCE("Success Story Description:", "successstory_desc", array(
                "placeholder" => "Success Story Title")
			));
		
        
		$form->addElement(new Element_jQueryUIDate("Date:", "successstory_date", array(
			"jqueryOptions" => array("pickTime" => "false"),
			"required" => 1,
			"data-date-format" => "yyyy-mm-dd",
			"placeholder" => "Date"
			)));	
						
		$form->addElement(new Element_Textbox("Sortorder:", "sortorder", array(
			"required" => 1, 
			"placeholder" => "Sortorder"
			)));
        
        $form->addElement(new Element_HTML('<div><label class="control-label" style="width:100%;text-align:left;">Note : Success Story will be displayed in website in the descending order of date </label><br><br></div>'));
            
        $form->addElement(new Element_Select("Status:", "status", $status, array(
			"required" => 1, 
			"placeholder" => "Status"
			)));			
		$form->addElement(new Element_HTML('<hr>'));
		$form->addElement(new Element_Button);
		$form->addElement(new Element_Button("Cancel", "button", array(
			"onclick" => "history.go(-1);"
		)));
		$form->addElement(new Element_HTML('<hr>'));
		$form->render();
	}
	function add()
	{
		$successstory_slug = pro_SeoSlug(stripslashes($_POST['successstory_title']));
		$username=$_SESSION['username'];
		$createdate = date("Y-m-d");
		
		$my_date = date('Y-m-d', strtotime($_POST['successstory_date']));
		
		$sql = "Insert into successstory set 
		username = '".$username."',
		createdate = '".$createdate."',
		successstory_type = '1',
		successstory_title = '".ets_db_real_escape_string($_POST['successstory_title'])."',
		successstory_desc = '".ets_db_real_escape_string($_POST['successstory_desc'])."',
		successstory_date = '".($my_date)."',
		sortorder = '".$_POST['sortorder']."',
		status = '".$_POST['status']."',
		remote_ip ='".$_SERVER['REMOTE_ADDR']."'
		";
		if(ets_db_query($sql)){			
			$successstory_id = ets_db_insert_id();
			return true;		
		}else{
			die(ets_db_error());
			return false;			
		}
		
	}
	function editForm()
	{		
		$sql = "select * from successstory where successstory_id ='".$_REQUEST['successstory_id']."'";
		$qry = ets_db_query($sql) or die(ets_db_error().$sql);
		
		if(ets_db_num_rows($qry) > 0){
			$rs=ets_db_fetch_array($qry);
			$form = new Form("successstoryFrm");
			$form->configure(array(
				"prevent" => array("bootstrap","jQuery"),
				"view" => new View_SideBySide,
				"id" => "successstoryFrm"
			));
			$status = array("E" => "Enabled", "D" => "Disabled");
			$position = array("H" => "Set As Home Page", "I" => "Not Set As Home Page");
			$form->addElement(new Element_HTML("<legend>Edit Success Story</legend>"));
			$form->addElement(new Element_Hidden("controller", "successstory"));
			$form->addElement(new Element_Hidden("action", "successstory"));
			$form->addElement(new Element_Hidden("subaction", "edit"));
			$form->addElement(new Element_Hidden("successstory_id", $_REQUEST['successstory_id']));
			$form->addElement(new Element_Hidden("prevImage", $rs['image']));
			
			/* Actual Form Fields Started */
		/*	$successstory = getsuccessstorylist();
			$form->addElement(new Element_Select("Success Story/Event Type:", "successstory_type",$successstory, array(
			"required" => 1, 
			"value"=> $rs['successstory_type']
			)));
		*/	$form->addElement(new Element_Textbox("Success Story Title:", "successstory_title", array(
				"required" => 1,
				"placeholder" => "Success Story Title",
				"value"=> $rs['successstory_title']
				)));
			
			$form->addElement(new Element_TinyMCE("Success Story Description:", "successstory_desc", array(
			"value"=> stripslashes($rs['successstory_desc']))
				));
			
			$form->addElement(new Element_jQueryUIDate("Date:", "successstory_date", array(
			"jqueryOptions" => array("pickTime" => "false"),
			"required" => 1,
			"data-date-format" => "yyyy-mm-dd",
			"placeholder" => "Date",
			"value"=> $rs['successstory_date']
			)));
            
					
			$form->addElement(new Element_Textbox("Sortorder:", "sortorder", array(
			"required" => 1, 
			"value"=> $rs['sortorder']
			)));
            
            $form->addElement(new Element_HTML('<div><label class="control-label" style="width:100%;text-align:left;">Note : Success Story will be displayed in website in the descending order of date </label><br><br></div>'));
            
			$form->addElement(new Element_Select("Status:", "status", $status, array(
			"required" => 1, 
			"value"=> $rs['status']
			)));
            
			$form->addElement(new Element_HTML('<hr>'));
			$form->addElement(new Element_Button);
			$form->addElement(new Element_Button("Cancel", "button", array(
				"onclick" => "history.go(-1);"
			)));
			$form->addElement(new Element_HTML('<hr>'));
			$form->render();
		}
		else
		{
			echo "No Data Exists...";
		}
		
	}
	function edit()
	{
	    	$username=$_SESSION['username'];
	    	$modifieddate = date("Y-m-d");
        
			$my_date = date('Y-m-d', strtotime($_POST['successstory_date']));
			
			$updqry = ets_db_query("update successstory set 
			username = '".$username."',
			modifieddate = '".$modifieddate."',
			successstory_type = '1',
			successstory_title = '".ets_db_real_escape_string($_POST['successstory_title'])."',
			successstory_desc = '".ets_db_real_escape_string($_POST['successstory_desc'])."',
			successstory_date = '".($my_date)."',
			sortorder = '".$_POST['sortorder']."',
			status = '".$_POST['status']."',
			remote_ip ='".$_SERVER['REMOTE_ADDR']."'
			where successstory_id='" .$_POST['successstory_id']."'") or die ("Updating successstory records query failed: ".ets_db_error());	
            return true;
			
		
	}
	function listData()
	{
?>
<script>
$(document).ready(function() {
	var listURL = 'helperfunc/successstoryList.php';
	var oTable = $('#successstorylist').dataTable({
			"ajax": listURL
	});
	
    $(".marker").tooltip({placement: 'top'});
	$('.esortorder').editable({params:{"tblName":"successstory"}});
});
</script>
<?php
		$subvar = 'onclick="return confirmSubmit();"';	
		echo '<div id="no-more-tables"><table cellpadding="1" cellspacing="2" border="0" class="table table-striped table-bordered dataTable" id="successstorylist" width="100%">
		<thead>
		<tr>
			
			<th>Date</th>
			<th>Success Story Title</th>
			<th>Status</th>
			<th>Sort-Order</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody></tbody>	
		<tfoot>
				<tr>
					
					<th>Date</th>
					<th>Success Story Title</th>
					<th>Status</th>
					<th>Sort-Order</th>
					<th>Action</th>
				</tr>
		</tfoot>
		
		 </table></div>';		
	?>
<script>
	$('.table').editable({
		selector: 'a.estatus,a.esortorder',
		params:{"tblName":"successstory"},
		value: 1,
		source: [{value: 'E', text: 'Active'},{value: 'D', text: 'Disabled'}]
	});
</script>
<?php
			
	}		
	function delete()
	{
		$delsql = "Delete from successstory where successstory_id='".$_GET['successstory_id']."'";
		$delqry = ets_db_query($delsql) or die(ets_db_error().$delsql);
		delSeoLnk($_GET['successstory_id'],"Success Story");
		return true;		
	}
	function ajaxPost()
	{
		print_r($_POST);
		return true;
	}
	
	}
?>
