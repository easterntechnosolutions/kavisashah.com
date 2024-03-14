<?php


include "includes/app_top.php";
//error_reporting(E_ALL | E_STRICT);

$uploadPath = DIR_FS_PROJECT_PATH.$_REQUEST['productID']."/";
$uploadUrl = DIR_WS_PROJECT_PATH.$_REQUEST['productID']."/";
  if(!file_exists($uploadPath))
   {
//		mkdir($uploadPath);
        mkdir($uploadPath, 0777, true);
        exec("chown ".FILEUSER.FILEUSER." ".$uploadPath);
		exec("chmod 0777 ".$uploadPath);	
     
   }
$options=array(
'upload_dir' => $uploadPath,
'upload_url' => $uploadUrl
);

require('UploadHandler.php');

class CustomUploadHandler extends UploadHandler {

	protected function handle_form_data($file, $index) {
	   	$file->title = $_REQUEST['title'][$index];
	   	$file->productID = $_REQUEST['productID'];
		$file->isFront = $_REQUEST['isFront'];
	   	
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
	            	galleryTitle = '".$file->title."',
	            	isFront = 'E'
	            ";
            	$query = ets_db_query($sql) or die(ets_db_error());
            	$file->id = ets_db_insert_id();
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