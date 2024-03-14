<?php

require ('../includes/configure.php');
include ('../includes/functions/general.php');
$result = array('data' => array());
$sqlsel = "SELECT * from job_master order by j_date desc";
$ressql = ets_db_query($sqlsel) or die('Query failed : ' . ets_db_error());

// Same from main controller File
if (ets_db_num_rows($ressql) > 0) {
    while ($row = ets_db_fetch_array($ressql)) {
        $jobid = $row['job_id'];
        $name = $row['j_name'];
        $email = $row['j_email'];
        $phone = $row['j_contact'];
        $jobtitle = $row['jobtitle'];
        $area = $row['j_area'];
        $exp = $row['j_exp'];
        $jdate = date("d-m-Y H:i:s", strtotime($row['j_date']));

        $JobID = $jobid;
        //$JobDT = date('Y-m-d',strtotime($row['j_date']));

        $JobName = $name;

        $JobEmail = $email;

        $JobPhone = $phone;

        $JobResume = '<center><button type="button" class="btn btn-primary loadModal" data-job="' . $row['job_id'] . '" data-toggle="modal" data-target="#myModal">
						<i class="fa fa-eye"></i>
						</button></center>';

        /* $JobResume='<center><button type="button" class="btn btn-primary btn-lg" data-job="'.$row['job_id'].'" data-toggle="modal" data-target="#myModal">
          Launch demo modal
          </button></center>'; */


//        $JobAction = '<center>
//						<a href="index.php?controller=job&action=job&subaction=delete&job_id=' . $row['job_id'] . '" title="Delete" class="btn btn-danger" onClick="return confirmSubmit();" ><i class="fa fa-times"></i></center></a></td>';
		
		
		$JobAction='';
		
		
		if(strpos($_SESSION['userper'],'d') !== false) {
			$JobAction.= '<center>
						<a href="index.php?controller=job&action=job&subaction=delete&job_id=' . $row['job_id'] . '" title="Delete" class="btn btn-danger" onClick="return confirmSubmit();" ><i class="fa fa-times"></i></center></a></td>';
		}
		
		
        $select = '<center><input type="checkbox" class="case" id="' . $jobid . '"></center></a>';

        $result['data'][] =  array("$JobID", "$jdate", "$JobName", "$jobtitle" , "$JobEmail", "$JobPhone", "$JobResume", "$JobAction");
    }
    // End While Loop
    //echo json_encode($result);
} else {
    $select = '<td></td>';
    $JobID = '<td></td>';
    $JobDT = '<td></td>';
    $JobName = '<td>' . 'No Result Found' . '</td>';
    $JobEmail = '<td></td>';
    $JobPhone = '<td></td>';
    $JobAddress = '<td></td>';
    $JobResume = '<td></td>';
    $JobAction = '<td></td>';
    $result['data'][] =  array("$JobID", "$jdate", "$JobName", "$jobtitle" , "$JobEmail", "$JobPhone", "$JobResume", "$JobAction");
}
echo json_encode($result);
?>		
