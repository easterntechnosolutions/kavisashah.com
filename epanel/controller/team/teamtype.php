<script>
$(document).ready(function(){
	          $('input').on('blur', function() {
					$("#albumFrm").attr("novalidate");
					$("#albumFrm").validate();
				if ($("#albumFrm").valid()) {
					$('input[type=submit]').prop('disabled', false);  
				} else {
					$('input[type=submit]').prop('disabled', 'disabled');
				}
			  });
});
</script>
<?php
include WS_PFBC_ROOT."Form.php";
class teamtype
{
	function addForm()
	{    
		$form = new Form("addFrm");
		$form->configure(array(
			"prevent" => array("bootstrap","jQuery"),
			"view" => new View_SideBySide,
			"id" => "albumFrm"
			
		));
		$status = array("E" => "Enabled", "D" => "Disabled");
		$album_type = get_albumtype_list();
		$form->addElement(new Element_HTML("<legend>Add New Type</legend>"));
		$form->addElement(new Element_Hidden("controller", "team"));
		$form->addElement(new Element_Hidden("action", "teamtype"));
		$form->addElement(new Element_Hidden("subaction", "add"));
		$form->addElement(new Element_Hidden("createdate"));
		$form->addElement(new Element_Hidden("username"));
		
		$form->addElement(new Element_Textbox("Type:", "team_type_title", array(
			"required" => 1, 
			"placeholder" => "Type"
			)));
			
		$form->addElement(new Element_HTML('<label class="control-label">Last Sort Order : '.get_last_sortorder('team_type').'</label><br><br>'));		
						
		$form->addElement(new Element_Textbox("Sortorder:", "sortorder", array(	
			"required" => 1, 
			"placeholder" => "Sortorder"
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
	
	function editForm()
	{		
	    $sql = "select * from team_type where team_type_id = '".$_REQUEST['team_type_id']."'";
		$qry = ets_db_query($sql) or die(ets_db_error().$sql);
		if(ets_db_num_rows($qry) > 0){
			$rs=ets_db_fetch_array($qry);
			$form = new Form("editFrm");
			$form->configure(array(
			"prevent" => array("bootstrap","jQuery"),
			"view" => new View_SideBySide,
			"id" => "albumFrm"
			));
			
			$form->addElement(new Element_HTML("<legend>Edit Type</legend>"));
			$form->addElement(new Element_Hidden("controller", "team"));
			$form->addElement(new Element_Hidden("action", "teamtype"));
			$form->addElement(new Element_Hidden("subaction", "edit"));
			$form->addElement(new Element_Hidden("team_type_id", $_REQUEST['team_type_id']));
			
			$status = array("E" => "Enabled", "D" => "Disabled");
			
			
			$form->addElement(new Element_Textbox("Type:", "team_type_title", array(
			"value"=> $rs['team_type_title'],
			"required" => 1, 
			"placeholder" => "Title"
			)));			
			
			$form->addElement(new Element_HTML('<label class="control-label">Last Sort Order : '.get_last_sortorder('team_type').'</label><br><br>'));					
			$form->addElement(new Element_Textbox("Sortorder:", "sortorder", array(	
			"value"=> $rs['sortorder'],
			"required" => 1
			)));	
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
			echo "No Package Found...";
		}
		
	}
	function add()
	{   
		$username=$_SESSION['username'];
		$createdate = date("Y-m-d");
		$album_slug = pro_SeoSlug(stripslashes($_POST['team_type_title']));
		$sql = "Insert into team_type set 
		team_type_title = '".$_POST['team_type_title']."',
		username = '".$username."',
		createdate = now(),
		sortorder = '".ets_db_real_escape_string($_POST['sortorder'])."',
		status = '".$_POST['status']."',
		remote_ip ='".$_SERVER['REMOTE_ADDR']."'	
		";
		$insql = ets_db_query($sql) or die(ets_db_error() . "<br>" . $sql );
		$team_type_id = ets_db_insert_id();
		
		insSeoLnk($team_type_id,"leadership",$album_slug);
		return true;
	}
	function edit()
	{  
		$username=$_SESSION['username'];
		$album_slug = pro_SeoSlug(stripslashes($_POST['team_type_title']));
		$updqry = "update team_type set 
		team_type_title = '".$_POST['team_type_title']."',
		username = '".$username."',
		modifieddate = now(),
		sortorder = '".ets_db_real_escape_string($_POST['sortorder'])."',
		status = '".$_POST['status']."',
		remote_ip ='".$_SERVER['REMOTE_ADDR']."'
		where team_type_id ='" .$_POST['team_type_id'] ."'";
		if(ets_db_query($updqry)){
			updSeoLnk($_POST['team_type_id'],"leadership",$album_slug);
		
		}else{
			die(ets_db_error() . "<br>" . $updqry);
			
		}
		return true;
	}
	function delete()
	{	
		delSeoLnk($_GET['team_type_id'],'leadership');
		$delsql = "Delete from team_type where team_type_id= '".$_GET['team_type_id']."'";
		$delqry = ets_db_query($delsql) or die(ets_db_error().$delsql);
		
		return true;
	}
	function listData()
	{  
	?>
<script>
	$(document).ready(function() {
	var listURL = 'helperfunc/teamtypeList.php';
	$('#albumlist').dataTable({
		
	 "ajax" : listURL
		
	});	
    });
</script>    
   
<?php
	
		echo '<table cellpadding="1" cellspacing="2" border="0" class="table table-striped table-bordered dataTable" id="albumlist" width="100%">
		<thead>
		<tr>
		
			<th align="left">ID</th>
			<th align="left">Title</th>
			<th align="left">Status</th>
			<th align="left">Sort Order</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>';

		echo '</tbody>	
			<tfoot>
			<tr>
				<th align="left">ID</th>	
				<th align="left">Title</th>
				<th align="left">Status</th>
				<th align="left">Sort Order</th>
				<th>Action</th>
			</tr>
		</tfoot>
		 </table>';		
    		?>
<script>
	$('.table').editable({
		selector: 'a.estatus,a.esortorder',
		params:{"tblName":"team_type"},
		value: 1,
		source: [{value: 'E', text: 'Active'},{value: 'D', text: 'Disabled'}]
	});
</script>
	<?php		
	}	
}
?>
