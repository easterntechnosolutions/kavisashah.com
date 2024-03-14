<script>
    $(document).ready(function(){
        $('.datepicker').datepicker();
    });
</script>
<?php
include WS_PFBC_ROOT."Form.php";
require_once DIR_WS_CLASSES."proUpload.php";
class jobs
{
	function addForm()
	{
		$form = new Form("addFrm");
		$form->configure(array(
			"prevent" => array("bootstrap","jQuery"),
			"view" => new View_SideBySide
		));
		$status = array("E" => "Enabled", "D" => "Disabled");
        $type = array("Y" => "Yes", "N" => "No");
		$position = array("H" => "Home Page", "I" => "Inner Pages");
		$form->addElement(new Element_HTML("<legend>Jobs </legend>"));
		$form->addElement(new Element_Hidden("controller", "jobs"));
		$form->addElement(new Element_Hidden("action", "jobs"));
		$form->addElement(new Element_Hidden("subaction", "add"));
		$form->addElement(new Element_Hidden("createdate"));
		$form->addElement(new Element_Hidden("username"));

		/* Actual Form Fields Started */		
		$form->addElement(new Element_Textbox("Job Title:", "job_title", array(
			"required" => 1, 
			"placeholder" => "Job Title"
		)));

        $form->addElement(new Element_Textbox("Job Type:", "job_type", array(
            "placeholder" => "Job Type"
        )));


        $form->addElement(new Element_Textbox("Job Time:", "job_time", array(
            "placeholder" => "Job Time"
        )));

        $form->addElement(new Element_Textbox("Job Date:", "job_date", array(
            "class" => "datepicker",
        )));

        $form->addElement(new Element_Textbox("Job Location:", "job_location", array(
            "placeholder" => "Job Location"
        )));


        $form->addElement(new Element_TinyMCE("About Company:", "job_about", array(
            "placeholder" => "About Company"
        )));

        $form->addElement(new Element_TinyMCE("Job Description:", "job_description", array(
            "placeholder" => "Job Description"
        )));

        $form->addElement(new Element_TinyMCE("Job Responsibility:", "job_responsibility", array(
            "placeholder" => "Job Responsibility"
        )));

        $form->addElement(new Element_TinyMCE("Job Salary:", "job_salary", array(
            "placeholder" => "Job Salary"
        )));

        $form->addElement(new Element_TinyMCE("Job Contact:", "job_contact", array(
            "placeholder" => "Job Contact"
        )));


        $form->addElement(new Element_Select("Has Job Application:", "type",$type, array(
            "placeholder" => "Type",
            "id" => "type"
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
		$upload = $_FILES["image"]["name"];
		$username=$_SESSION['username'];

		$sql = "Insert into jobs set 
		job_title = '".ets_db_real_escape_string($_POST['job_title'])."',	
		job_type = '".ets_db_real_escape_string($_POST['job_type'])."',		
		job_time = '".ets_db_real_escape_string($_POST['job_time'])."',
		job_date = '".date('Y-m-d',strtotime($_POST['job_date']))."',	
		job_location = '".ets_db_real_escape_string($_POST['job_location'])."',				
		job_about = '".ets_db_real_escape_string($_POST['job_about'])."',				
		job_description = '".ets_db_real_escape_string($_POST['job_description'])."',				
		job_responsibility = '".ets_db_real_escape_string($_POST['job_responsibility'])."',				
		job_salary = '".ets_db_real_escape_string($_POST['job_salary'])."',	
		job_contact = '".ets_db_real_escape_string($_POST['job_contact'])."',
		type = '".ets_db_real_escape_string($_POST['type'])."',
		sortorder='".$_POST['sortorder']."',
		status = '".$_POST['status']."'
		";
		$qry = ets_db_query($sql) or die(ets_db_error().$sql);

		return true;

	}
	function editForm()
	{		
		$sql = "select * from jobs where job_id ='".$_REQUEST['job_id']."'";
		$qry = ets_db_query($sql) or die(ets_db_error().$sql);
		if(ets_db_num_rows($qry) > 0){
			$rs=ets_db_fetch_array($qry);
			$form = new Form("frmEdit");
			$form->configure(array(
			"prevent" => array("bootstrap","jQuery"),
			"view" => new View_SideBySide
			));
			$status = array("E" => "Enabled", "D" => "Disabled");
            $type = array("Y" => "Yes", "N" => "No");
			$position = array("H" => "Home Page", "I" => "Inner Pages");
			$form->addElement(new Element_HTML("<legend>Edit Job</legend>"));
			$form->addElement(new Element_Hidden("controller", "jobs"));
			$form->addElement(new Element_Hidden("action", "jobs"));
			$form->addElement(new Element_Hidden("subaction", "edit"));
			$form->addElement(new Element_Hidden("job_id", $_REQUEST['job_id']));
			$form->addElement(new Element_Hidden("createdate"));
			$form->addElement(new Element_Hidden("username"));
			/* Actual Form Fields Started */
			$form->addElement(new Element_Textbox("Job Title:", "job_title", array(
			"value"=> $rs['job_title'],
			"required" => 1, 
			"placeholder" => "Title"
			)));

            $form->addElement(new Element_Textbox("Job Type:", "job_type", array(
                "value"=> $rs['job_type'],
                "placeholder" => "Job Type"
            )));

            $form->addElement(new Element_Textbox("Job Time:", "job_time", array(
                "value"=> $rs['job_time'],
                "placeholder" => "Job Time"
            )));

            $form->addElement(new Element_Textbox("Job Date:", "job_date", array(
                "class" => "datepicker",
            )));

            $form->addElement(new Element_Textbox("Job Location:", "job_location", array(
                "value"=> $rs['job_title'],
                "placeholder" => "Job Location"
            )));

            $form->addElement(new Element_TinyMCE("About Company:", "job_about", array(
                "value"=> $rs['job_about'],
                "placeholder" => "About Company"
            )));

            $form->addElement(new Element_TinyMCE("Job Description:", "job_description", array(
                "value"=> $rs['job_description'],
                "placeholder" => "Job Description"
            )));

            $form->addElement(new Element_TinyMCE("Job Responsibility:", "job_responsibility", array(
                "value"=> $rs['job_responsibility'],
                "placeholder" => "Job Responsibility"
            )));

            $form->addElement(new Element_TinyMCE("Job Salary:", "job_salary", array(
                "value"=> $rs['job_salary'],
                "placeholder" => "Job Salary"
            )));

            $form->addElement(new Element_TinyMCE("Job Contact:", "job_contact", array(
                "value"=> $rs['job_contact'],
                "placeholder" => "Job Contact"
            )));

            $form->addElement(new Element_Select("Has Job Application:", "type",$type, array(
                "placeholder" => "Type",
                "value"=> $rs['type'],
                "id" => "type"
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
			$updqry = ets_db_query("update jobs set 
			job_title = '".ets_db_real_escape_string($_POST['job_title'])."',	
			job_type = '".ets_db_real_escape_string($_POST['job_type'])."',		
			job_time = '".ets_db_real_escape_string($_POST['job_time'])."',
			job_date = '".date('Y-m-d',strtotime($_POST['job_date']))."',	
            job_location = '".ets_db_real_escape_string($_POST['job_location'])."',				
            job_about = '".ets_db_real_escape_string($_POST['job_about'])."',				
            job_description = '".ets_db_real_escape_string($_POST['job_description'])."',				
            job_responsibility = '".ets_db_real_escape_string($_POST['job_responsibility'])."',				
            job_salary = '".ets_db_real_escape_string($_POST['job_salary'])."',	
            job_contact = '".ets_db_real_escape_string($_POST['job_contact'])."',		
            type = '".ets_db_real_escape_string($_POST['type'])."',
            sortorder='".$_POST['sortorder']."',
            status = '".$_POST['status']."'		
			where job_id='" .$_POST['job_id']."'") or die ("Updating   image records query failed: ".ets_db_error());
			return true;

	}
	function listData()
	{
?>
<script>
$(document).ready(function() {
	var listURL = 'helperfunc/jobsList.php';
	$('#joblist').dataTable( {
        "ajax": listURL
    } );
    /*
	$('#brandlist').dataTable({
		"bProcessing": true,
		"sAjaxSource": listURL,
		"sDom": "<'row-fluid'<'span8'l><'span4'f>r>t<'row-fluid'<'span8'i><'span4'p>>",
		"sPaginationType": "bootstrap",
		"oLanguage": {"sLengthMenu": "_MENU_ records per page"} 
	});
	*/
$('.esortorder').editable({params:{"tblName":"jobs"}});
});

</script>
<?php
		$subvar = 'onclick="return confirmSubmit();"';	

		echo '<div id="no-more-tables"><table cellpadding="1" cellspacing="2" border="0" class="table table-striped table-bordered dataTable" id="joblist" width="100%">
		<thead>
		<tr>
			<th align="left">Job Title</th>
			<th align="left">Job Location</th>
			<th align="left">Status</th>
			<th align="left">Sort Order</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody></tbody>	
		<tfoot>
				<tr>
					<th align="left">Title</th>
					<th align="left">Job Location</th>			
					<th align="left">Status</th>
					<th align="left">Sort Order</th>
					<th>Action</th>
				</tr>
		</tfoot>		
		 </table></div>';		
		?>
<script>
	$('.table').editable({
		selector: 'a.estatus,a.esortorder',
		params:{"tblName":"jobs"},
		value: 1,
		source: [{value: 'E', text: 'Active'},{value: 'D', text: 'Disabled'}]
	});
</script>
<?php		
	}	
	function delete()
	{
		$delsql = "Delete from jobs where job_id='".$_GET['job_id']."'";
		$delqry = ets_db_query($delsql) or die(ets_db_error().$delsql);
		return true;		
	}
}
?>
