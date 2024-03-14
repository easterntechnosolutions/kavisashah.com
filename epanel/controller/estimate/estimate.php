<script>
    $(document).ready(function () {

        $('#mainpages').select2({
            placeholder: "Select a Main Page"
        });

        $("#selectall").click(function () {
            $('.case').not(this).prop('checked', this.checked);
        });

        $(document).on("click", ".case", function () {
            if ($(".case").length == $(".case:checked").length) {
                $("#selectall").prop("checked", "checked");
            } else {
                $("#selectall").removeAttr("checked");
            }

        });

        $(document).on("click", ".loadModal", function () {

            var cID = $(this).attr('data-cid');
            $('.modal-body').load('viewestimate.php?cid=' + cID);

        });

        $("#deleteMultiple").click(function () {

            var result = confirm("Are You Sure you want to delete? ");
            if (result == true) {
                var delIDarray = [];
                $('.case').each(function () {
                    var ar = this.id;
                    var selectval = $('#' + ar).is(':checked');
                    if (selectval) {
                        delIDarray.push(ar);
                    }
                });
                var finalDelArray = delIDarray.join(',');
                var loc = 'index.php?controller=estimate&action=estimate&subaction=deleteestimate&cid=' + finalDelArray;
                window.location.assign(loc);
            } else {

            }
            //location.href="index.php?controller=products&action=subscriptionlist&subaction=delete&sid="+finalDelArray;
        });

    });
</script>
<?php
class estimate
{
	function listData()
	{
		$table = 'estimate_master';
        update_data($table);
?>
    <script>
        $(document).ready(function () {
            var listURL = 'helperfunc/estimateList.php';
            $('#estimatelist').dataTable({

                "ajax": listURL,
                "order": [[1, "desc"]]

            });
        });
    </script>
    <?php
		$subvar = 'onclick="return confirmSubmit();"';	
//		echo '<a href="estimate-report.php">Export To Excel</a>';
		echo $list='
		<div id="no-more-tables">
		<table cellpadding="1" cellspacing="2" border="0" class="table table-striped table-bordered dataTable"	id="estimatelist" width="100%">
					<thead>
					<tr>
							<td colspan="8"><input type="checkbox" id="selectall" value="false">&nbsp; &nbsp;Select All</input>&nbsp; &nbsp;
							<button class="btn btn-danger" id="deleteMultiple">Delete Selected</td>	
						</tr>
						<tr>
							<th style="width:5%";><center>Select</center></th>
							<th>Free Estimate Id</th>	
							<th>Date</th>			
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Service</th>
							<th>City</th>
							<th>State</th>
							<th>Zip</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody></tbody>
					<tfoot class="hidden-xs">
						<tr>
							<th style="width:5%";><center>Select</center></th>
							<th>Free Estimate Id</th>	
							<th>Date</th>			
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Service</th>
							<th>City</th>
							<th>State</th>
							<th>Zip</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
					</tfoot>	
				</table>
				</div>';


?>
        <script>
            $('.table').editable({
                selector: 'a.estatus,a.esortorder',
                params: {
                    "tblName": "estimate_master"
                },
                value: 1,
                source: [{
                    value: 'E',
                    text: 'Active'
                }, {
                    value: 'D',
                    text: 'Disabled'
                }]
            });
        </script>
        <?php	 
	}
	function delete()    
	{
		$values = explode(",", $_GET["cid"]);
        if (count($values) > 1) {
            foreach ($values as $key => $val) {
                $delsql = "DELETE FROM `estimate_master` WHERE cid='" . $val . "'";
                $delqry = ets_db_query($delsql) or die(ets_db_error() . $delsql);
            }
        } else {
            $delsql = "DELETE FROM `estimate_master` WHERE cid='" . $_GET['cid'] . "'";
            $delqry = ets_db_query($delsql) or die(ets_db_error() . $delsql);
        }
		return true;		
	}	
}




?>

            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">


                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 id="myModalLabel">Free Estimate Detail</h3>
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