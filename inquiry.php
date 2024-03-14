<?php
date_default_timezone_set('Asia/Calcutta');
include "inc/mainapp.php";
require("inc/class.phpmailer.php");

//echo $purpose ;
//exit();

//$medium = ets_db_real_escape_string($_POST['medium']);
$salutation = ets_db_real_escape_string($_POST['salutation']);

$fname = ets_db_real_escape_string($_POST['name']);
$name = $fname;
$email_address = ets_db_real_escape_string($_POST['email_address']);
$phone = ets_db_real_escape_string($_POST['phone']);
$subject = ets_db_real_escape_string($_POST['subject']);
$message = ets_db_real_escape_string($_POST['message']);
$city = ets_db_real_escape_string($_POST['city']);


$sql = "INSERT INTO  contact_master SET
			name = '" . $name . "',
			email_address = '" . $email_address . "',
			salutation = '" . $salutation . "',
			phone = '" . $phone . "',
			city = '" . $city . "',
			subject = '" . $subject . "',
			message = '" . $message . "',
			cdate	= now()";
//echo "rajath";
$query = ets_db_query($sql) or die(ets_db_error());


$id = ets_db_insert_id();


$email_message = '

    <table width="80%" class="tbl" cellpadding="3">

        <tr>

            <td ><strong>&nbsp;Name</strong></td>

            <td>:</td>

            <td>' . $salutation . ' ' . $name . '</td>

        </tr>
        <tr>

            <td><strong>&nbsp;Email Address</strong></td>

            <td>:</td>

            <td>' . $email_address . '</td>

        </tr>
        
        <tr>

            <td valign="top"><strong>&nbsp;Mobile No. </strong></td>

            <td valign="top">:</td>
            <td>' . $country_code . ' ' . $phone . '</td>
        </tr>
        
        <tr>

            <td valign="top"><strong> City </strong></td>

            <td valign="top">:</td>
            <td>' . $city . '</td>
        </tr>
        
        
        <tr>

            <td valign="top"><strong> Subject </strong></td>

            <td valign="top">:</td>
            <td>' . $subject . '</td>
        </tr>

        <tr>

            <td valign="top"><strong> Message </strong></td>

            <td valign="top">:</td>
            <td>' . $message . '</td>
        </tr>
       
    </table>';
//echo"456";
//echo $emai_message;
$company_name = 'Kavisa - UI & UX Designer';
$message_body = $email_message;
$client_body = 'Hello <strong> ' . $name . '</strong> Your Inquiry has been submitted We will get back to you soon';
// $message_body = get_default_template($email_message,$company_name .' - Inquiry');
//echo $email_message;
$company_name = 'Kavisa - UI & UX Designer';
$to_array = array();
// $to_array[] = 'kavisa@zerothreeseven.com';
$to_array[] = 'harsh.easternts@gmail.com';
$attachment = '';
//echo"84978968";

send_email($to_array, 'harsh.easternts@gmail.com', $company_name . ' - Contact Us', $message_body, $attachment);

/*
$client_message = 'Your inquiry has been submitted. We will get back to you soon.';

$client_body = $email_message;

$company_name = 'Korin optoelectronics';
$client_array = array();
//   $client_array[] = 'priyanka.easternts@gmail.com';
$client_array[] = $email;
$attachment = '';

send_email($client_array, $_POST['cremail'], $company_name . ' - Contact Us', $client_body, $attachment);
*/

$client_message = 'Your inquiry has been submitted. We will get back to you soon.';

$client_body = get_default_template($client_message, $company_name .' - Contact us');

$company_name ='Kavisa - UI & UX Designer';
$client_array = array();
//   $client_array[] = 'priyanka.easternts@gmail.com';
$client_array[] = $email_address;
$attachment='';

send_email($client_array,$_POST['email_address'],$company_name .' - Contact Us',$client_body ,$attachment);



echo 'Thank You For Your Inquiry';

/*
$to_array = MAIL_TO;

$message_body = get_default_template($message, $company_name . ' ');
send_email($to_array, $_POST['email'], $mailsubject . ' ', $message_body, $attachment);
echo "true";*/
?>