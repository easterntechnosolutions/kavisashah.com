<?php
include "inc/mainapp.php";
include "inc/content_function.php";

switch ($module) {

    case 'works':
//        echo "nkfnds";

        if ($pathcnt == 1) {
            $page_res = get_record_from_db('work', 'workID', $module_id);

            $pageTitle = $page_res['work_title'];
            $title = "Work | " . $page_res['work_title'] . SITENAME;
            $title_description = $page_res['service'];
            $template = "work_page.tpl.php";
            $content_include = "content/work.php";
            $description = "We help brands communicate.";
        }

        if (isset($module_id) && $module_id > 0) {
            
            if ($pathcnt == 2) {
//                echo $pathcnt;
                $page_res = get_record_from_db('work', 'workID', $module_id);
                
                $breadcrumb_title = $page_res['work_title'];
                $pageTitle = $page_res['work_title'];
                $title = "Work - " . $page_res['work_title'] . SITENAME;
                $title_description = $page_res['service'];
                $template = "work_page.tpl.php";
                $content_include = "content/work-detail.php";
                $description = $title_description;

            }
        }

        $keyword = $title;
        // $description = "We help brands communicate.";
        $breadcrumb_title = $breadcrumb_title;
        include DIR_WS_TEMPLATE . $template;

        break;




    case 'contact-us':
        $pageTitle = "Contact Us";
        $title = "Contact Us | " . SITENAME;
        $keyword = $title;
        $description = "Contact Us" . SITENAME;

        $breadcrumb_title = "Contact Us";
        $content_include = "content/contact_us.php";
        include DIR_WS_TEMPLATE . "contact_page.tpl.php";
        break;




    case 'home':
    default:
        $page = "Kavisa - UI & UX Designer";
        $keyword = "Kavisa - UI & UX Designer";
        $description = "Best UI designer in Hong Kong, UI designer for websites and mobile applications";
        $content_include = "content/index.php";
        $pageTitle = "Kavisa - UI & UX Designer";
        $title = "Kavisa - UI & UX Designer";
        include DIR_WS_TEMPLATE . "main_page.tpl.php";
        break;
}

?>