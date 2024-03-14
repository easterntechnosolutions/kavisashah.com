<?php 
	include("includes/configure.php");
	$j_sql = "Select * from contact_master where cid = '".$_REQUEST['contact_id']."'";
	$j_qry = ets_db_query($j_sql) or die(ets_db_error().$j_sql);
	$row = ets_db_fetch_assoc($j_qry); 
	$cid = $row['cid'];
    $name = $row['name'];
    $company = $row['company'];

    $email = stripslashes($row['email_address']);	
    $phone = $row['phone'];
    $city = $row['city'];
    $country = $row['country'];
    $address = stripslashes($row['address']);
    $experience = stripslashes($row['experience']);
    $qualification = stripslashes($row['qualification']);
    $industry = stripslashes($row['industry']);
    $subject = stripslashes($row['subject']);
    $message = stripslashes($row['message']);
    $purpose = stripslashes($row['purpose']);
    $file = $row['upload_file'];
    $date = date("d-m-Y H:i a",strtotime($row['cdate']));
	?>
	
<!--<link rel="stylesheet" href="stylesheet.css" type="text/css" media="screen" />-->
	<table class="table table-bordered" cellspacing="3" cellpadding="3" width="100%">
        <tr>
		<th align="right" width="130">ID.&nbsp;:&nbsp;</th>
		<td><?php echo $cid; ?></td>
		</tr>
       
		<tr>
		<th align="right" width="130">Date.&nbsp;:&nbsp;</th>
		<td><?php echo $date; ?></td>
		</tr>
        
        <tr>
		<th align="right" width="130">Company&nbsp;:&nbsp;</th>
		<td><?php echo $company; ?></td>
		</tr>
        
         <tr>
		<th align="right" width="130">Purpose&nbsp;:&nbsp;</th>
		<td><?php echo $purpose; ?></td>
		</tr>
		
		<tr>
		<th align="right" width="130">Name&nbsp;:&nbsp;</th>
		<td><?php echo $name; ?></td>
		</tr>
		
		<tr>
		<th align="right">E-Mail&nbsp;:&nbsp;</th>
		<td><?php echo $email; ?></td></tr>
		
		<tr>
		<th align="right">Phone&nbsp;:&nbsp;</th>
		<td><?php echo $phone; ?></td>	
		</tr>
		
		<tr>
		<th align="right">City&nbsp;:&nbsp;</th>
		<td><?php echo $city; ?></td>	
		</tr>
        
        <tr>
		<th align="right">Country&nbsp;:&nbsp;</th>
		<td><?php echo $country; ?></td>	
		</tr>
        
         
        
        <?php if(!empty($address)) { ?>
        <tr>
		<th align="right">Address&nbsp;:&nbsp;</th>
		<td><?php echo $address; ?></td>	
		</tr>
        <?php } ?>
        
        <?php if(!empty($experience)) { ?>
        <tr>
		<th align="right">Experience&nbsp;:&nbsp;</th>
		<td><?php echo $experience; ?></td>	
		</tr>
        <?php } ?>
        
        <?php if(!empty($qualification)) { ?>
        <tr>
		<th align="right">Qualification&nbsp;:&nbsp;</th>
		<td><?php echo $qualification; ?></td>	
		</tr>
        <?php } ?>
        
        <?php if(!empty($industry)) { ?>
        <tr>
		<th align="right">Industry&nbsp;:&nbsp;</th>
		<td><?php echo $industry; ?></td>	
		</tr>
        <?php } ?>
        
         <?php if(!empty($file)) { ?>
		<tr>
		<th align="right">Download Resume&nbsp;:&nbsp;</th>
		<td><a href="<?php echo DIR_WS_BIODATA_PATH.$file; ?>" target = "_blank">Download</a></td>	
		
		</tr>
        <?php } ?>
	</table>


