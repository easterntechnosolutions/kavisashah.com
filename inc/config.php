<?php
// manage sessions

/*ini_set("log_errors", 1);
ini_set("error_log", "error_log");
error_log('inin');*/
//error_reporting( E_ALL );

session_start();
error_reporting( E_ALL );
error_reporting(~E_NOTICE||~E_WARNING);


//local


// $gen_root = $_SERVER['DOCUMENT_ROOT'].'/kavisa/code';
// define('WS_ROOT', '/');
// define('HTTP_SERVER','http://localhost/kavisa/code');


//live
$gen_root = $_SERVER['DOCUMENT_ROOT'];
define('HTTP_SERVER','https://www.kavisashah.com');
define('WS_ROOT', '/');
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


define('DIR_WS_INCLUDES','includes/');
define('DIR_WS_TEMPLATE','template/');
define('DIR_WS_PAGE_PATH','content/');

define('DIR_FS_PAGE_IMAGE_PATH',$gen_root.'/upload/image/pages/');
define('DIR_WS_PAGE_IMAGE_PATH',HTTP_SERVER.WS_ROOT.'/upload/image/pages/');



define('DIR_FS_POPUP_PATH',$gen_root.'/upload/popup/');
define('DIR_WS_POPUP_PATH',HTTP_SERVER.WS_ROOT.'upload/popup/');

define('DIR_FS_CLIENT_PATH',$gen_root.'/upload/client/');
define('DIR_WS_CLIENT_PATH',HTTP_SERVER.WS_ROOT.'upload/client/');



define('DIR_FS_WORK_PATH',$gen_root.'/upload/image/work/');
define('DIR_WS_WORK_PATH',HTTP_SERVER.WS_ROOT.'upload/image/work/');


define('DIR_FS_PDF_PATH',$gen_root.'/upload/pdf/');
define('DIR_WS_PDF_PATH',HTTP_SERVER.WS_ROOT.'upload/pdf/');

define('DIR_FS_PROJECT_PATH',$gen_root.'/upload/image/project/');
define('DIR_WS_PROJECT_PATH',HTTP_SERVER.WS_ROOT.'upload/image/project/');


define('DIR_FS_LOGO_PATH',$gen_root.'/upload/image/');
define('DIR_WS_LOGO_PATH',HTTP_SERVER.WS_ROOT.'upload/image/');

define('DIR_FS_BLOG_PATH',$gen_root.'/upload/blogs/');
define('DIR_WS_BLOG_PATH',HTTP_SERVER.WS_ROOT.'upload/blogs/');




//define('RECAPTCHA_PUBLIC_KEY', '6LeN0sQUAAAAAE5I3C0zvcfAES6H4ta3vtU-GzcS'); // replace your_public_key with your reCAPTCHA public key (from the API Signup Page https://www.google.com/recaptcha/admin/create?app=php)
define('RECAPTCHA_PUBLIC_KEY', '6LeN0sQUAAAAAE5I3C0zvcfAES6H4ta3vtU-GzcS'); // replace your_public_key with your reCAPTCHA public key (from the API Signup Page https://www.google.com/recaptcha/admin/create?app=php)
define('RECAPTCHA_PRIVATE_KEY', '6LeOvc4SAAAAAN6HeDf0cHtZJNdQ1nOMnlojN8RB'); // replace your_private_key with your reCAPTCHA private key (from the API Signup Page https://www.google.com/recaptcha/admin/create?app=php)
define('RECAPTCHA_THEME', 'white'); // red, white, blackglass, clean

define('SITENAME',"Kavisa - UI & UX Designer");
define('THUMB_WIDTH','190');
define('THUMB_HEIGHT','132');
define('PHOTO_LIST_NO','12');
define('SEP','/');


//Mail Configuration Starts
define('MAIL_HOST','smtp.gmail.com');
define('MAIL_MAILER','SMTP');
define('MAIL_SMTPAuth',true);
define('MAIL_SMTPSecure','tls');
define('MAIL_PORT',587);
define('MAIL_USERNAME','noreply.kavisashah@gmail.com');
define('MAIL_PASSWORD','kavisashah@3#');
define('MAIL_PRIORITY',1);
define('MAIL_XMAILER','Kavisa - UI & UX Designer');
define('MAIL_CHARSET','UTF-8');
define('MAIL_ENCODING','8bit');
define('MAIL_WORDWRAP',900);
define('MAIL_CONTENTTYPE','text/html; charset=utf-8\r\n');
define('MAIL_FROM','noreply.kavisashah@gmail.com');
define('MAIL_FROMNAME','Kavisa - UI & UX Designer');

define('LOGO_ALT','Kavisa - UI & UX Designer');
define('MAIL_LOGO',HTTP_SERVER.WS_ROOT.'upload/image/logo.png');
define('MAIL_TO','noreply.kavisashah@gmail.com');


//live
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




global $db_link;
$db_link = ets_db_connect($host,$user,$pwd);

?>