<?php
// manage sessions 
session_start();
//ini_set("log_errors", 1);
//ini_set("error_log", "error_log");
error_reporting( E_ALL );
error_reporting(~E_NOTICE||~E_WARNING);

//live
$gen_root = $_SERVER['DOCUMENT_ROOT'].'/';
define('HTTP_SERVER','https://www.kavisashah.com');
define('WS_ROOT', '/');
define('WS_ADMIN_ROOT', '/epanel/');
//If the HTTPS is not found to be "on"
if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on")
{
    //Tell the browser to redirect to the HTTPS URL.
    header("Location: " . HTTP_SERVER . $_SERVER["REQUEST_URI"], true, 301);
    //Prevent the rest of the script from executing.
    exit;
}else if(explode('.', $_SERVER['HTTP_HOST'])[0] != "www" ){ // www subdomain is not added
    //Tell the browser to redirect to the HTTPS URL.
    header("Location: " . HTTP_SERVER . $_SERVER["REQUEST_URI"], true, 301);
    //Prevent the rest of the script from executing.
    exit;
}


//local
/*$gen_root = $_SERVER['DOCUMENT_ROOT'].'/kavisa/code/';
define('WS_ROOT', '/kavisa/code/');
define('WS_ADMIN_ROOT', '/kavisa/code/epanel/');
define('HTTP_SERVER','http://localhost');*/

//define('ga_view_id',182829196); // Replace id with relevant project id
define('ga_view_id',182829196); // Replace id with relevant project id

define('FS_INDEX_PATH', $gen_root);

define('DIR_WS_INCLUDES','includes/');
define('DIR_WS_CLASSES',DIR_WS_INCLUDES.'classes/');
define('WS_PFBC_ROOT', 'PFBC/');
define('DIR_WS_CONTROLLER_PATH','controller/');
define('DIR_WS_FUNCTIONS',DIR_WS_INCLUDES.'functions/');
define('DIR_WS_PAGE_PATH','/');
define('DIR_WS_IMAGE_PATH',HTTP_SERVER.WS_ROOT.'images/');
define('DIR_WS_TEMPLATE','template/');

define('DIR_FS_INCLUDES',$gen_root.'/console/includes/');
define('DIR_FS_TEMPLATE',$gen_root.'/console/template/');
define('DIR_FS_CONTROLLER',$gen_root.'/console/controller');

define('DIR_FS_UPLOAD_PATH',$gen_root.'/upload/files/download/'); 
define('DIR_WS_UPLOAD_PATH',HTTP_SERVER.WS_ROOT.'upload/files/download/');


define('DIR_FS_WORK_PATH',$gen_root.'upload/image/work/');
define('DIR_WS_WORK_PATH',HTTP_SERVER.WS_ROOT.'upload/image/work/');

define('DIR_FS_PDF_PATH',$gen_root.'/upload/pdf/');
define('DIR_WS_PDF_PATH',HTTP_SERVER.WS_ROOT.'upload/pdf/');

define('DIR_FS_POPUP_PATH',$gen_root.'/upload/popup/');
define('DIR_WS_POPUP_PATH',HTTP_SERVER.WS_ROOT.'upload/popup/');

define('DIR_FS_CLIENT_PATH',$gen_root.'/upload/client/');
define('DIR_WS_CLIENT_PATH',HTTP_SERVER.WS_ROOT.'upload/client/');

define('DIR_FS_GALLERY_PATH',$gen_root.'/upload/image/gallery/');
define('DIR_WS_GALLERY_PATH',HTTP_SERVER.WS_ROOT.'upload/image/gallery/');

define('DIR_FS_PROJECT_PATH',$gen_root.'/upload/image/project/');
define('DIR_WS_PROJECT_PATH',HTTP_SERVER.WS_ROOT.'upload/image/project/');



define('DIR_FS_PAGE_IMAGE_PATH',$gen_root.'/upload/image/pages/'); 
define('DIR_WS_PAGE_IMAGE_PATH',HTTP_SERVER.WS_ROOT.'upload/image/pages/'); 

define('DIR_FS_LOGO_PATH',$gen_root.'/upload/image/');
define('DIR_WS_LOGO_PATH',HTTP_SERVER.WS_ROOT.'upload/image/');



define('DIR_FS_SITE_PATH',$gen_root.'/');
define('DIR_FS_EPANEL_PATH',$gen_root.'/epanel/');

// Mail BOF
define('SWIFT_MAILER',$gen_root.'/swiftmailer/lib/');
// Mail EOF

define('FILEUSER','localhost'); // used for file owner
define('ADMINTITLE','Eastern - Admin Panel');

define('THUMB_WIDTH','200');
define('THUMB_HEIGHT','200');


//live
$lang_id='1';
$host = "localhost";

/*$dbname = "easyglue_leocoats";
$user = "easyglue_leocoat";
$pwd = "T~{s+%H?P&?8";*/


//local
$dbname = "kavisash_db";
$user = "kavisash_db";
$pwd = "0#6cUsqpN7OI";

define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', $user);
define('DB_SERVER_PASSWORD', $pwd);
define('DB_DATABASE', $dbname);

include ('db.php');
ets_db_connect();

$PHP_SELF = $_SERVER['PHP_SELF'];

$epanel_qry = "Select * from epanel_master where id = '1'";
$epanel_res = ets_db_query($epanel_qry);
$epanel_arr = ets_db_fetch_array($epanel_res);

if(basename($_SERVER['PHP_SELF']) != 'login.php'){
	if(!isset($_SESSION['logged'])){
		header('Location: login.php');
	}
}

?>
