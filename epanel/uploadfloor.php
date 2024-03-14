<?php

include "includes/app_top.php";
require_once DIR_WS_CLASSES."proUpload.php";
//error_reporting(E_ALL | E_STRICT);

$uploadPath = DIR_FS_PROJECT_PATH.$_REQUEST['productID']."/";
$uploadUrl = DIR_WS_PROJECT_PATH.$_REQUEST['productID']."/";

$options=array(
'upload_dir' => $uploadPath,
'upload_url' => $uploadUrl
);

require('UploadHandler.php');

class CustomUploadHandler extends UploadHandler {

	protected function handle_form_data($file, $index) {
	   	$file->title = $_REQUEST['title'][$index];
	   	$file->productID = $_REQUEST['productID'];
   		$file->isFront = 'D';
	}
	protected function trim_file_name($file_path, $name, $size, $type, $error,
            $index, $content_range) {
		$name = parent::trim_file_name($file_path, $name, $size, $type, $error,
            $index, $content_range);
		$name = strtolower($name);
		$name= trim($name);
		return $name;
	}
    protected function handle_file_upload($uploaded_file, $name, $size, $type, $error, $index = null, $content_range = null)
    {
        	$file = parent::handle_file_upload(
            	$uploaded_file, $name, $size, $type, $error, $index, $content_range
        	);
        	if (empty($file->error)) {
            	$sql = "
	            	INSERT INTO gallery Set
	            	username = '".$_SESSION['fname']."',
	            	productID = '".$file->productID."',
	            	galleryImage = '".$file->name."',
                    sortorder = '1',
	            	createdate = now(),
                    remote_ip ='".$_SERVER['REMOTE_ADDR']."',
	            	modifieddate = now(),
	            	galleryTitle = '".$file->title."',
	            	isFront = 'D'
	            ";
            	$query = ets_db_query($sql) or die(ets_db_error());
            	$file->id = ets_db_insert_id();
                
                $title = preg_replace("![^a-z0-9]+!i", "-", trim($file->title));
                $title = $file->id.'-'.str_replace(' ', '-', trim($title)).'.jpg';
                $old_path = DIR_FS_PROJECT_PATH.$_REQUEST['productID']."/".$file->name;
                $old_thumb_path = DIR_FS_PROJECT_PATH.$_REQUEST['productID']."/thumbnail/".$file->name;
                $path = DIR_FS_PROJECT_PATH.$_REQUEST['productID']."/".$title;
                $thumb_path = DIR_FS_PROJECT_PATH.$_REQUEST['productID']."/thumbnail/".$title;
                
                rename($old_path,$path);
                rename($old_thumb_path,$thumb_path);
                
                $file->name = $title;
                $file->url = DIR_WS_PROJECT_PATH.$_REQUEST['productID']."/".$title;;;
                $file->thumbnailUrl = DIR_WS_PROJECT_PATH.$_REQUEST['productID']."/thumbnail/".$title;;
                $file->deleteUrl = DIR_WS_PROJECT_PATH.$_REQUEST['productID']."/".$title;;
                
                ets_db_query("Update gallery set galleryImage = '".$title."' where galleryID = '".$file->id."'") or die(ets_db_error());
                
                //$path = DIR_FS_PROJECT_PATH.$_REQUEST['productID']."/".$file->name;
                $image = new ImageUploader\ProUpload;
                $mresult = $image->shrink(array("height"=>480, "width"=>480),true)
    				->makecopy('shrink',$path,$path.'_mobile.jpg');
        	}
  		return $file;
    }

    public function delete($print_response = true) {
        $response = parent::delete(false);
        foreach ($response as $name => $deleted) {
            if ($deleted) {
                $sql = "DELETE FROM gallery WHERE galleryImage = '".$name."'";
                ets_db_query($sql) or die(ets_db_error());
            }
        } 
        return $this->generate_response($response, $print_response);
    }
}

$upload_handler = new CustomUploadHandler($options);