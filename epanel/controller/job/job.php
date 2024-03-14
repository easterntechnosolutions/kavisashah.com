<?php
class job
{
	function listData()
	{
?>
<script>
$(document).ready(function() {
	var listURL = 'helperfunc/jobList.php';
	$('#joblist').dataTable({
		"ajax": listURL
      
	});
});
</script>
	<?php
        echo '<a href="job-report.php">Export To Excel</a>';
		$subvar = 'onclick="return confirmSubmit();"';	

		echo $list='<table cellpadding="1" cellspacing="2" border="0" class="table table-striped table-bordered dataTable"	id="joblist" width="100%">
					<thead>
						<tr>
							<th>Job Id</th>	
							<th>Date</th>		
							<th>Name</th>
							<th>Job Title</th>
							<th>Email</th>
							<th>Phone No</th>
							<th>View Resume</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody></tbody>
					<tfoot>
						<tr>
							<th>Job Id</th>	
							<th>Date</th>		
							<th>Name</th>
							<th>Job Title</th>
							<th>Email</th>
							<th>Phone No</th>
							<th>View Resume</th>
							<th>Action</th>
						</tr>
					</tfoot>	
				</table>';
?>
<script>
	/*$("body").on("click","a[rel^='jobDetail']", function(e){
		var jobID = $(this).attr('data-job');
		$('.modal-body').load('viewjob.php',{job_id: jobID, ajax: 'true'});
		$('#myModal').modal('show');
	});*/
	
	$(document).on("click",".loadModal" ,function(){

        var jobID = $(this).attr('data-job');

        $('.modal-body').load('viewjob.php?job_id='+jobID);

    });
	
	$('.table').editable({
		selector: 'a.estatus,a.esortorder',
		params:{"tblName":"job_master"},
		value: 1,
		source: [{value: 'E', text: 'Active'},{value: 'D', text: 'Disabled'}]
	});
</script>
<?php	 
	}
	function delete()    
	{
		$delsql = "DELETE FROM  `job_master` WHERE job_id='".$_GET['job_id']."'";
		$delqry = ets_db_query($delsql) or die(ets_db_error().$delsql);
		return true;		
	}	
}
?>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">


        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 id="myModalLabel">Resume Detail</h3>
            </div>
            <div class="modal-body">
                &nbsp;
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
