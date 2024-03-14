<?php
include ('inc/db.php');
include ('inc/config.php');
ets_db_connect();
include "inc/generalfunc.php";
include "inc/seofunction.php";
include "inc/shortcodes.php";
include "inc/shortcode-func.php";
// include "inc/Zebra_Pagination.php";

/*include "inc/breadcrumb.php";

$bc = new breadcrumbs;

$bc->crumbs();*/


$path = explode('/', $_SERVER['REQUEST_URI']);
//   $path = explode('/', $_SERVER['PATH_INFO']);

$get_object = array_filter($path);

$pathcnt = count($get_object);
/*print_r($get_object);
exit;*/
if(count($get_object) == 0){
	$url_slug = '';
	$module = 'home';
}else{
	$url_slug = $get_object[$pathcnt];
	$module = $get_object[1];
	if($pathcnt == 1){
		$module = $url_slug;
		$url_slug = '';
	}else{
		if($pathcnt > 1) {
			$moduleName = "";
			for($i = 1; $i < $pathcnt; $i++){
				$moduleName .= $get_object[$i]."/";
			}
			$moduleName = rtrim($moduleName, "/");
			$submodule = $module;
			$module = $get_object[1];
//			$module_id = generate_seo_link($url_slug,$moduleName);

            if($module == "jobinfo"){
                $module_id = $get_object[2];
            }else{
                $module_id = generate_seo_link($url_slug,$moduleName);
            }

		}else{
			$module_id = generate_seo_link($url_slug,$module);
		}
		
	}
}

?>
