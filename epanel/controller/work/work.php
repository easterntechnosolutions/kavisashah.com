<script>
    $(document).ready(function () {
        flag = 0;
        $('input').on('blur', function () {
            if ($("#ptypeFrm").valid() && flag == 0) {
                $('input[type=submit]').prop('disabled', false);
            } else {
                $('input[type=submit]').prop('disabled', 'disabled');
            }
        });

        $('input[type=file]').bind('change', function () {

            //this.files[0].size gets the size of your file.
            var iSize = ($("input[type=file]")[0].files[0].size / 1024);
            iSize = (Math.round(iSize * 100) / 100)
            var max = '<?php echo (int)ini_get('upload_max_filesize'); ?>' * 1024;
            if (iSize > max) {
                $('input[type=submit]').prop('disabled', 'disabled');
                flag = 1;
                alert('Maximum file upload size is : ' + '<?php echo (int)ini_get('upload_max_filesize'); ?>' + ' MB');
            } else {
                $('input[type=submit]').prop('disabled', false);
                flag = 0;
            }


        });

    });


    $(document).ready(function () {

        var c = $('#pagetype').val();
        // $('#branding').hide();
        if (c == 'M' || c == 'L') {
            $('#mobile').show();
            $('#branding').hide();
        } else if (c == 'B') {
            $('#mobile').hide();
            $('#branding').show();
        }
        $('#pagetype').change(function () {
            var c = $('#pagetype').val();
            if (c == 'M' || c == 'L') {
                $('#mobile').show();
                $('#branding').hide();
            } else if (c == 'B') {
                $('#mobile').hide();
                $('#branding').show();
            }
        });
    });


</script>
<script>
    $(document).ready(function () {
        $('#mainpages').select2({
            placeholder: "Select a Main Page"
        });
    });
</script>


<?php
include WS_PFBC_ROOT . "Form.php";
require_once DIR_WS_CLASSES . "proUpload.php";
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
class work
{
    function addForm()
    {

        $form = new Form("addFrm");
        $form->configure(array(
            "prevent" => array("bootstrap", "jQuery"),
            "view" => new View_SideBySide,
            "id" => "ptypeFrm"
        ));

        $status = array("E" => "Enable", "D" => "Disable");
        $page_type = array("M" => "Mobile", "L" => "Desktop", "B" => "Branding");
        $Home_Page = array("Y" => "Yes", "N" => "No");

        $form->addElement(new Element_HTML("<legend>New Work</legend>"));
        $form->addElement(new Element_Hidden("controller", "work"));
        $form->addElement(new Element_Hidden("action", "work"));
        $form->addElement(new Element_Hidden("subaction", "add"));
        $form->addElement(new Element_Hidden("createdate"));
        $form->addElement(new Element_Hidden("sortorder", "1"));
        $form->addElement(new Element_Hidden("status", "E"));

        /* Actual Form Fields Started */


        $form->addElement(new Element_Textbox("Work Name:", "work_title", array(
            "required" => 1,
            "placeholder" => "Work Name"
        )));

        $form->addElement(new Element_Select("Page Type:", "pagetype", $page_type, array(
            "required" => 1,
            "id" => "pagetype",
        )));


        $form->addElement(new Element_HTML('<div id = "mobile">'));

        /*        $sel_qry = "Select * from work ";
                $sel_res = ets_db_query($sel_qry) or die(ets_db_error());*/

        $form->addElement(new Element_TinyMCE("Work Title:", "work_main_title", array(
            "required" => 1,
            "placeholder" => "Work Title"
        )));
        $form->addElement(new Element_TinyMCE("Application Name:", "application_name", array(
            "required" => 1,
            "placeholder" => "Application Name"
        )));
        $form->addElement(new Element_TinyMCE("Specification:", "specification", array(
            "required" => 1,
            "placeholder" => "Specification"

        )));
        $form->addElement(new Element_Textbox("Prototype:", "prototype", array(
            "placeholder" => "prototype"
        )));
        /*$form->addElement(new Element_Textbox("Sector:", "Sector", array(
            "required" => 1,
            "placeholder" => "Sector"
        )));*/
        $form->addElement(new Element_File("Project Thumbnail Image:  <br>(400 × 401 pixels)", "project_listing_image1", array(
            "placeholder" => "Project Thumbnail Image"
        )));
        /* $form->addElement(new Element_File("Project Listing Hover Image:  <br>(360 × 389 pixels)", "project_listing_hover_image", array(
            "placeholder" => "Project Listing Hover Image"
        )));*/
        $form->addElement(new Element_File("Banner Image:  <br>(720 × 1025 pixels)", "Banner_image", array(
            "placeholder" => "Banner Image"
        )));
        $form->addElement(new Element_File("Desktop / Mobile image : ", "Image_9", array(
            "placeholder" => "Image 9"
        )));
        $form->addElement(new Element_Textbox("Color Code:", "color", array(
            "required" => 0,
            "placeholder" => "Color Code"
        )));
        $form->addElement(new Element_TinyMCE("Uer Surveys & User Personas:", "user_sur", array(
            "required" => 1,
            "placeholder" => "Uer Surveys & User Personas"
        )));
        $form->addElement(new Element_File("View User Surveys:", "user_pdf", array(

            "placeholder" => "user_pdf"
        )));
        $form->addElement(new Element_TinyMCE("Competitive Analysis:", "competitive_analysis", array(
            "required" => 1,
            "placeholder" => "Competitive Analysis"
        )));
        $form->addElement(new Element_File("View Competitive Analysis:", "competitive_pdf", array(

            "placeholder" => "competitive_pdf"
        )));
        $form->addElement(new Element_TinyMCE("Branding:", "new_text", array(
            "required" => 1,
            "placeholder" => "Branding",
        )));
        /* $form->addElement(new Element_File("Project Detail Image: <br>(1500 × 1010 pixels)", "Project_detail_image", array(
             "placeholder" => "Project Detail Image"
         )));*/
        $form->addElement(new Element_HTML('<div><label class="control-label" style="width:100%;text-align:left;color: red;">Logo Images: </label><br><br></div>'));
        $form->addElement(new Element_File("Logo Image 1: ", "Image_1", array(
            "placeholder" => "Image 1"
        )));
        $form->addElement(new Element_File("Logo Image 2: ", "Image_2", array(
            "placeholder" => "Image 2"
        )));
        $form->addElement(new Element_File("Logo Image 3: ", "Image_3", array(
            "placeholder" => "Image 3"
        )));
        $form->addElement(new Element_HTML('<div><label class="control-label" style="width:100%;text-align:left;color: red;">Font Images: </label><br><br></div>'));
        $form->addElement(new Element_File("Font Image 1: ", "Image_4", array(
            "placeholder" => "Image 4"
        )));
        $form->addElement(new Element_File("Font Image 2: ", "Image_5", array(
            "placeholder" => "Image 5"
        )));
        $form->addElement(new Element_File("Font Image 3: ", "Image_6", array(
            "placeholder" => "Image 6"
        )));
        $form->addElement(new Element_HTML('<div><label class="control-label" style="width:100%;text-align:left;color: red;">Color Palette Images: </label><br><br></div>'));
        $form->addElement(new Element_File("Color Palette Image 1: ", "Image_7", array(
            "placeholder" => "Image 7"
        )));
        $form->addElement(new Element_TinyMCE("User Flows & Wireframes:", "user_flows", array(
            "required" => 1,
            "placeholder" => "User Flows & Wireframes"
        )));
        $form->addElement(new Element_File("View User Flows:", "user_flow_pdf", array(

            "placeholder" => "user_flow_pdf"
        )));
        $form->addElement(new Element_TinyMCE("User Flows & Wireframes:", "user_flows_des", array(
            "required" => 1,
            "placeholder" => "User Flows & Wireframes"
        )));
        $form->addElement(new Element_File("User Flows & Wireframes Image 1:  ", "Image_8", array(
            "placeholder" => "Image 8"
        )));
        $form->addElement(new Element_HTML('</div>'));


        //        branding template

        $form->addElement(new Element_HTML('<div id = "branding">'));
        $form->addElement(new Element_Textbox("Branding Title:", "branding_title", array(
            "placeholder" => "Branding Title"
        )));
        $form->addElement(new Element_File("Project Thumbnail Image:  <br>(400 × 401 pixels)", "project_thumbnail", array(
            "placeholder" => "Project Thumbnail Image"
        )));

        $form->addElement(new Element_File("Project Thumbnail Video: ", "project_listing_video", array(
            "placeholder" => "Project Thumbnail Video"
        )));

        $form->addElement(new Element_TinyMCE("Branding Brand:", "branding_brand", array(
            "required" => 1,
            "placeholder" => "Branding Brand"

        )));
        $form->addElement(new Element_TinyMCE("Branding Description:", "branding_desc", array(
            "required" => 1,
            "placeholder" => "Branding Description"

        )));
        $form->addElement(new Element_TinyMCE("Branding Main Title:", "branding_bold", array(
            "required" => 1,
            "placeholder" => "Branding Main Title"

        )));

        $form->addElement(new Element_File("Branding Right Image : <br>(900 × 500 pixels) ", "Image_11", array(
            "placeholder" => "Branding Right Image "
        )));

        $form->addElement(new Element_File("Branding Grid 1 : <br>(900 × 500 pixels)  ", "Image_10", array(
            "placeholder" => "Branding Grid 1"
        )));

        $form->addElement(new Element_File("Branding Grid 2 : <br>(900 × 500 pixels)  ", "Image_12", array(
            "placeholder" => "Branding Grid 2 "
        )));

        $form->addElement(new Element_File("Branding Full Image :  <br>(1920 × 700 pixels) ", "Image_13", array(
            "placeholder" => "Branding Full Image "
        )));


        $form->addElement(new Element_File("Branding Grid 3 : <br>(900 × 500 pixels) ", "Image_14", array(
            "placeholder" => "Branding Grid 3"
        )));

        $form->addElement(new Element_File("Branding Grid 4 : <br>(900 × 500 pixels) ", "Image_15", array(
            "placeholder" => "Branding Grid 4 "
        )));

        $form->addElement(new Element_File("Branding Full Image : <br>(1920 × 700 pixels) ", "Image_16", array(
            "placeholder" => "Branding Full Image "
        )));


        $form->addElement(new Element_File("Branding Grid 5 : <br>(900 × 500 pixels) ", "Image_17", array(
            "placeholder" => "Branding Grid 5"
        )));

        $form->addElement(new Element_File("Branding Grid 6 : <br>(900 × 500 pixels) ", "Image_18", array(
            "placeholder" => "Branding Grid 6 "
        )));

        $form->addElement(new Element_File("Branding Full Image : <br>(1920 × 700 pixels) ", "Image_19", array(
            "placeholder" => "Branding Full Image "
        )));

        $form->addElement(new Element_File("Branding Grid 7 : <br>(900 × 500 pixels) ", "Image_20", array(
            "placeholder" => "Branding Grid 7"
        )));

        $form->addElement(new Element_File("Branding Grid 8 : <br>(900 × 500 pixels) ", "Image_21", array(
            "placeholder" => "Branding Grid 8 "
        )));

        $form->addElement(new Element_File("Branding Full Image : <br>(1920 × 900 pixels) ", "Image_22", array(
            "placeholder" => "Branding Full Image "
        )));
        $form->addElement(new Element_File("Branding Grid 9 : <br>(900 × 500 pixels) ", "Image_23", array(
            "placeholder" => "Branding Grid 9"
        )));

        $form->addElement(new Element_File("Branding Grid 10 : <br>(900 × 500 pixels) ", "Image_24", array(
            "placeholder" => "Branding Grid 10"
        )));

        $form->addElement(new Element_File("Branding Full Image : <br>(1920 × 900 pixels) ", "Image_25", array(
            "placeholder" => "Branding Full Image "
        )));

        $form->addElement(new Element_File("Branding Video 1: <br> (900 × 500 pixels) ", "video_1", array(
            "placeholder" => "Branding Video "
        )));
        
        $form->addElement(new Element_File("Branding Video 2: <br> (900 × 500 pixels) ", "video_2", array(
            "placeholder" => "Branding Video"
        )));
        
        $form->addElement(new Element_File("Branding Video 3: <br> (1920 × 900 pixels) ", "video_3", array(
            "placeholder" => "Branding Video"
        )));


        $form->addElement(new Element_HTML('</div>'));

        //        branding end template


        $form->addElement(new Element_Select("Home Page: <br>(Yes / No)", "Home_Page", $Home_Page, array(
            "required" => 1
        )));


        $form->addElement(new Element_Textbox("Sortorder:", "sortorder", array(
            "required" => 1,
            "placeholder" => "Sortorder"
        )));

        $form->addElement(new Element_HTML('<div><label class="control-label" style="width:100%;text-align:left;">Note : Works will be displayed in website in the ascending order of sort order </label><br><br></div>'));

        $form->addElement(new Element_Select("Status:", "status", $status, array(
            "required" => 1
        )));


        $form->addElement(new Element_HTML('<hr>'));
        $form->addElement(new Element_Button);
        $form->addElement(new Element_Button("Cancel", "button", array(
            "onclick" => "history.go(-1);"
        )));
        $form->render();
    }

    function add()
    {
        $username = $_SESSION['fname'];
        $workslug = pro_SeoSlug(stripslashes($_POST['work_title']));
        $sql = "Insert into work set 
		username = '" . $username . "',
		createdate = now(),
		work_title = '" . ets_db_real_escape_string($_POST['work_title']) . "',
		application_name = '" . ets_db_real_escape_string($_POST['application_name']) . "',
		specification = '" . ets_db_real_escape_string($_POST['specification']) . "',
		work_main_title = '" . ets_db_real_escape_string($_POST['work_main_title']) . "',
		project_color = '" . ets_db_real_escape_string($_POST['color']) . "',
		user_sur = '" . ets_db_real_escape_string($_POST['user_sur']) . "',
		competitive_analysis = '" . ets_db_real_escape_string($_POST['competitive_analysis']) . "',
		branding = '" . ets_db_real_escape_string($_POST['new_text']) . "',
		user_flows = '" . ets_db_real_escape_string($_POST['user_flows']) . "',
		user_flows_des = '" . ets_db_real_escape_string($_POST['user_flows_des']) . "',
		prototype = '" . ets_db_real_escape_string($_POST['prototype']) . "',
		Sector = '" . ets_db_real_escape_string($_POST['Sector']) . "',
		branding_title = '" . ets_db_real_escape_string($_POST['branding_title']) . "',
		branding_desc = '" . ets_db_real_escape_string($_POST['branding_desc']) . "',
		branding_bold = '" . ets_db_real_escape_string($_POST['branding_bold']) . "',
		branding_brand = '" . ets_db_real_escape_string($_POST['branding_brand']) . "',
		sortorder = '" . $_POST['sortorder'] . "',
		Home_Page = '" . $_POST['Home_Page'] . "',
		status = '" . $_POST['status'] . "',
		pagetype = '" . $_POST['pagetype'] . "',
		
		remote_ip ='" . $_SERVER['REMOTE_ADDR'] . "'
		";
        
//        echo "work1";

        if (ets_db_query($sql)) {
            $workID = ets_db_insert_id();
            $pdfID = ets_db_insert_id();
            
            

            $path = DIR_FS_WORK_PATH . $workID;
//            echo $path;
            $path_pdf = DIR_FS_PDF_PATH . $pdfID;

            if(!file_exists($path))	{
                mkdir($path,0777,true);
                chmod("$path", 0755);
               /* exec("chown ".FILEUSER.FILEUSER." ".$path);
                exec("chmod 0777 ".$path);*/
            }
            // echo "hello";
            // exit;
            if (!file_exists($path_pdf)) {
                mkdir($path_pdf,0777,true);
                chmod("$path_pdf", 0755);
                /*exec("chown " . FILEUSER . FILEUSER . " " . $path_pdf);
                exec("chmod 0777 " . $path_pdf);*/
            }
            
            if (!empty($_FILES["project_listing_image1"]["name"])) {
//                echo "workhp";
                $listing_image1 = $workID . '-' . $_FILES["project_listing_image1"]["name"];
                
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["project_listing_image1"]["name"];
                /* echo $targeth_path;
                 echo "work2";
                die();*/
                if (move_uploaded_file($_FILES["project_listing_image1"]["tmp_name"], $targeth_path)) {
                    /*echo "file move";
                    die();*/

                } else {
                    $listing_image1 = '';
                   /* echo $listing_image1;
                    echo "harshh";
                    die();*/
                }
            } else {
                /*echo "branding";
                die();*/
                $listing_image1 = '';
            }




            if (!empty($_FILES["project_thumbnail"]["name"])) {
//                echo "workhp";
                $listing_image = $workID . '-' . $_FILES["project_thumbnail"]["name"];
                /*echo $listing_image1;
                echo "work2";
                die();*/
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["project_thumbnail"]["name"];
                /* echo $targeth_path;
                 echo "work2";
                die();*/
                if (move_uploaded_file($_FILES["project_thumbnail"]["tmp_name"], $targeth_path)) {
                    /*echo "file move";
                    die();*/

                } else {
                    $listing_image = '';
                    /* echo $listing_image1;
                     echo "harshh";
                     die();*/
                }
            } else {
                /*echo "branding";
                die();*/
                $listing_image = '';
            }


            if (!empty($_FILES["project_listing_video"]["name"])) {
//                echo "work1";
                $listing_video = $workID . '-' . $_FILES["project_listing_video"]["name"];
                /*echo $listing_image;
                echo "work2";*/
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["project_listing_video"]["name"];
                /* echo $targeth_path;
                 echo "work2";*/
                if (move_uploaded_file($_FILES["project_listing_video"]["tmp_name"], $targeth_path)) {
//                    echo "file move";

                } else {
                    $listing_video = '';
                }
            } else {
                $listing_video = '';
            }


            if (!empty($_FILES["project_listing_hover_image"]["name"])) {
                $hover_image = $workID . '-' . $_FILES["project_listing_hover_image"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["project_listing_hover_image"]["name"];

                if (move_uploaded_file($_FILES["project_listing_hover_image"]["tmp_name"], $targeth_path)) {

                } else {
                    $hover_image = '';
                }
            } else {
                $hover_image = '';
            }

            if (!empty($_FILES["Banner_image"]["name"])) {
                $banner_image = $workID . '-' . $_FILES["Banner_image"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Banner_image"]["name"];

                if (move_uploaded_file($_FILES["Banner_image"]["tmp_name"], $targeth_path)) {

                } else {
                    $banner_image = '';
                }
            } else {
                $banner_image = '';
            }

            if (!empty($_FILES["Project_detail_image"]["name"])) {
                $detail_image = $workID . '-' . $_FILES["Project_detail_image"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Project_detail_image"]["name"];

                if (move_uploaded_file($_FILES["Project_detail_image"]["tmp_name"], $targeth_path)) {

                } else {
                    $detail_image = '';
                }
            } else {
                $detail_image = '';
            }

            if (!empty($_FILES["Image_1"]["name"])) {
                $image1 = $workID . '-' . $_FILES["Image_1"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_1"]["name"];

                if (move_uploaded_file($_FILES["Image_1"]["tmp_name"], $targeth_path)) {

                } else {
                    $image1 = '';
                }
            } else {
                $image1 = '';
            }

            if (!empty($_FILES["Image_2"]["name"])) {
                $image2 = $workID . '-' . $_FILES["Image_2"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_2"]["name"];

                if (move_uploaded_file($_FILES["Image_2"]["tmp_name"], $targeth_path)) {

                } else {
                    $image2 = '';
                }
            } else {
                $image2 = '';
            }

            if (!empty($_FILES["Image_3"]["name"])) {
                $image3 = $workID . '-' . $_FILES["Image_3"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_3"]["name"];

                if (move_uploaded_file($_FILES["Image_3"]["tmp_name"], $targeth_path)) {

                } else {
                    $image3 = '';
                }
            } else {
                $image3 = '';
            }

            if (!empty($_FILES["Image_4"]["name"])) {
                $image4 = $workID . '-' . $_FILES["Image_4"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_4"]["name"];

                if (move_uploaded_file($_FILES["Image_4"]["tmp_name"], $targeth_path)) {

                } else {
                    $image4 = '';
                }
            } else {
                $image4 = '';
            }

            if (!empty($_FILES["Image_5"]["name"])) {
                $image5 = $workID . '-' . $_FILES["Image_5"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_5"]["name"];

                if (move_uploaded_file($_FILES["Image_5"]["tmp_name"], $targeth_path)) {

                } else {
                    $image5 = '';
                }
            } else {
                $image5 = '';
            }

            if (!empty($_FILES["Image_6"]["name"])) {
                $image6 = $workID . '-' . $_FILES["Image_6"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_6"]["name"];

                if (move_uploaded_file($_FILES["Image_6"]["tmp_name"], $targeth_path)) {

                } else {
                    $image6 = '';
                }
            } else {
                $image6 = '';
            }

            if (!empty($_FILES["Image_7"]["name"])) {
                $image7 = $workID . '-' . $_FILES["Image_7"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_7"]["name"];

                if (move_uploaded_file($_FILES["Image_7"]["tmp_name"], $targeth_path)) {

                } else {
                    $image7 = '';
                }
            } else {
                $image7 = '';
            }

            if (!empty($_FILES["Image_8"]["name"])) {
                $image8 = $workID . '-' . $_FILES["Image_8"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_8"]["name"];

                if (move_uploaded_file($_FILES["Image_8"]["tmp_name"], $targeth_path)) {

                } else {
                    $image8 = '';
                }
            } else {
                $image8 = '';
            }

            if (!empty($_FILES["Image_9"]["name"])) {
                $image9 = $workID . '-' . $_FILES["Image_9"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_9"]["name"];

                if (move_uploaded_file($_FILES["Image_9"]["tmp_name"], $targeth_path)) {

                } else {
                    $image9 = '';
                }
            } else {
                $image9 = '';
            }


            if (!empty($_FILES["Image_10"]["name"])) {
                $image10 = $workID . '-' . $_FILES["Image_10"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_10"]["name"];

                if (move_uploaded_file($_FILES["Image_10"]["tmp_name"], $targeth_path)) {

                } else {
                    $image10 = '';
                }
            } else {
                $image10 = '';
            }

//            echo "work2";

            if (!empty($_FILES["Image_11"]["name"])) {
                $image11 = $workID . '-' . $_FILES["Image_11"]["name"];
//                echo $image11;
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_11"]["name"];
//                echo $targeth_path;

                if (move_uploaded_file($_FILES["Image_11"]["tmp_name"], $targeth_path)) {
//                    echo "work3";

                } else {
                    $image11 = '';
                }
            } else {
                $image11 = '';
            }

            if (!empty($_FILES["Image_12"]["name"])) {
                $image12 = $workID . '-' . $_FILES["Image_12"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_12"]["name"];

                if (move_uploaded_file($_FILES["Image_12"]["tmp_name"], $targeth_path)) {

                } else {
                    $image12 = '';
                }
            } else {
                $image12 = '';
            }

            if (!empty($_FILES["Image_13"]["name"])) {
                $image13 = $workID . '-' . $_FILES["Image_13"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_13"]["name"];

                if (move_uploaded_file($_FILES["Image_13"]["tmp_name"], $targeth_path)) {

                } else {
                    $image13 = '';
                }
            } else {
                $image13 = '';
            }

            if (!empty($_FILES["Image_14"]["name"])) {
                $image14 = $workID . '-' . $_FILES["Image_14"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_14"]["name"];

                if (move_uploaded_file($_FILES["Image_14"]["tmp_name"], $targeth_path)) {

                } else {
                    $image14 = '';
                }
            } else {
                $image14 = '';
            }

            if (!empty($_FILES["Image_15"]["name"])) {
                $image15 = $workID . '-' . $_FILES["Image_15"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_15"]["name"];

                if (move_uploaded_file($_FILES["Image_15"]["tmp_name"], $targeth_path)) {

                } else {
                    $image15 = '';
                }
            } else {
                $image15 = '';
            }

            if (!empty($_FILES["Image_16"]["name"])) {
                $image16 = $workID . '-' . $_FILES["Image_16"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_16"]["name"];

                if (move_uploaded_file($_FILES["Image_16"]["tmp_name"], $targeth_path)) {

                } else {
                    $image16 = '';
                }
            } else {
                $image16 = '';
            }

            if (!empty($_FILES["Image_17"]["name"])) {
                $image17 = $workID . '-' . $_FILES["Image_17"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_17"]["name"];

                if (move_uploaded_file($_FILES["Image_17"]["tmp_name"], $targeth_path)) {

                } else {
                    $image17 = '';
                }
            } else {
                $image17 = '';
            }


            if (!empty($_FILES["Image_18"]["name"])) {
                $image18 = $workID . '-' . $_FILES["Image_18"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_18"]["name"];

                if (move_uploaded_file($_FILES["Image_18"]["tmp_name"], $targeth_path)) {

                } else {
                    $image18 = '';
                }
            } else {
                $image18 = '';
            }


            if (!empty($_FILES["Image_19"]["name"])) {
                $image19 = $workID . '-' . $_FILES["Image_19"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_19"]["name"];

                if (move_uploaded_file($_FILES["Image_19"]["tmp_name"], $targeth_path)) {

                } else {
                    $image19 = '';
                }
            } else {
                $image19 = '';
            }

            if (!empty($_FILES["Image_20"]["name"])) {
                $image20 = $workID . '-' . $_FILES["Image_20"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_20"]["name"];

                if (move_uploaded_file($_FILES["Image_20"]["tmp_name"], $targeth_path)) {

                } else {
                    $image20 = '';
                }
            } else {
                $image20 = '';
            }

            if (!empty($_FILES["Image_21"]["name"])) {
                $image21 = $workID . '-' . $_FILES["Image_21"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_21"]["name"];

                if (move_uploaded_file($_FILES["Image_21"]["tmp_name"], $targeth_path)) {

                } else {
                    $image21 = '';
                }
            } else {
                $image21 = '';
            }

            if (!empty($_FILES["Image_22"]["name"])) {
                $image22 = $workID . '-' . $_FILES["Image_22"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_22"]["name"];

                if (move_uploaded_file($_FILES["Image_22"]["tmp_name"], $targeth_path)) {

                } else {
                    $image22 = '';
                }
            } else {
                $image22 = '';
            }
            
            if (!empty($_FILES["Image_23"]["name"])) {
                $image23 = $workID . '-' . $_FILES["Image_23"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_23"]["name"];

                if (move_uploaded_file($_FILES["Image_23"]["tmp_name"], $targeth_path)) {

                } else {
                    $image23 = '';
                }
            } else {
                $image23 = '';
            }
            
            if (!empty($_FILES["Image_24"]["name"])) {
                $image24 = $workID . '-' . $_FILES["Image_24"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_24"]["name"];

                if (move_uploaded_file($_FILES["Image_24"]["tmp_name"], $targeth_path)) {

                } else {
                    $image24 = '';
                }
            } else {
                $image24 = '';
            }
            
            if (!empty($_FILES["Image_25"]["name"])) {
                $image25 = $workID . '-' . $_FILES["Image_25"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["Image_25"]["name"];

                if (move_uploaded_file($_FILES["Image_25"]["tmp_name"], $targeth_path)) {

                } else {
                    $image25 = '';
                }
            } else {
                $image25 = '';
            }
            
            
            if (!empty($_FILES["video_1"]["name"])) {
                $video_1 = $workID . '-' . $_FILES["video_1"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["video_1"]["name"];

                if (move_uploaded_file($_FILES["video_1"]["tmp_name"], $targeth_path)) {

                } else {
                    $video_1 = '';
                }
            } else {
                $video_1 = '';
            }
            
            if (!empty($_FILES["video_2"]["name"])) {
                $video_2 = $workID . '-' . $_FILES["video_2"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["video_2"]["name"];

                if (move_uploaded_file($_FILES["video_2"]["tmp_name"], $targeth_path)) {

                } else {
                    $video_2 = '';
                }
            } else {
                $video_2 = '';
            }
            
            if (!empty($_FILES["video_3"]["name"])) {
                $video_3 = $workID . '-' . $_FILES["video_3"]["name"];
                $targeth_path = DIR_FS_WORK_PATH . $workID . '/' . $workID . '-' . $_FILES["video_3"]["name"];

                if (move_uploaded_file($_FILES["video_3"]["tmp_name"], $targeth_path)) {

                } else {
                    $video_3 = '';
                }
            } else {
                $video_3 = '';
            }

            if (!empty($_FILES["user_pdf"]["name"])) {
                $user_pdf = $pdfID . '-' . $_FILES["user_pdf"]["name"];
                $pdf_path = DIR_FS_PDF_PATH . $pdfID . '/' . $pdfID . '-' . $_FILES["user_pdf"]["name"];


                if (move_uploaded_file($_FILES["user_pdf"]["tmp_name"], $pdf_path)) {

                } else {
                    $user_pdf = '';
                }
            } else {
                $user_pdf = '';
            }

            if (!empty($_FILES["competitive_pdf"]["name"])) {
                $competitive_pdf = $pdfID . '-' . $_FILES["competitive_pdf"]["name"];
                $pdf_path = DIR_FS_PDF_PATH . $pdfID . '/' . $pdfID . '-' . $_FILES["competitive_pdf"]["name"];


                if (move_uploaded_file($_FILES["competitive_pdf"]["tmp_name"], $pdf_path)) {

                } else {
                    $competitive_pdf = '';
                }
            } else {
                $competitive_pdf = '';
            }

            if (!empty($_FILES["user_flow_pdf"]["name"])) {
                $user_flow_pdf = $pdfID . '-' . $_FILES["user_flow_pdf"]["name"];
                $pdf_path = DIR_FS_PDF_PATH . $pdfID . '/' . $pdfID . '-' . $_FILES["user_flow_pdf"]["name"];


                if (move_uploaded_file($_FILES["user_flow_pdf"]["tmp_name"], $pdf_path)) {

                } else {
                    $user_flow_pdf = '';
                }
            } else {
                $user_flow_pdf = '';
            }


            /*if(!empty($_FILES["detail_image"]["name"])){
                $detail_image = $workID.'-'.$_FILES["detail_image"]["name"];

				$targeth_path = DIR_FS_WORK_PATH.$workID.'/'.$workID.'-'.$_FILES["detail_image"]["name"];


                if(move_uploaded_file($_FILES["detail_image"]["tmp_name"],$targeth_path)){

                }else{
                   $detail_image = '';
                }
            }else{
                $detail_image = '';$listing_image
            }*/
            $updqry = "Update work set  project_listing_image1 = '" . $listing_image1 . "', project_listing_image = '" . $listing_image . "', project_listing_hover_image = '" . $hover_image . "', Banner_image = '" . $banner_image . "', Project_detail_image = '" . $detail_image . "', Image_1 = '" . $image1 . "', Image_2 = '" . $image2 . "', Image_3 = '" . $image3 . "', Image_4 = '" . $image4 . "', Image_5 = '" . $image5 . "', Image_6 = '" . $image6 . "', Image_7 = '" . $image7 . "', Image_8 = '" . $image8 . "', Image_9 = '" . $image9 . "', user_pdf = '" . $user_pdf . "', Image_10 = '" . $image10 . "', Image_11 = '" . $image11 . "', Image_12 = '" . $image12 . "', Image_13 = '" . $image13 . "', Image_14 = '" . $image14 . "', Image_15 = '" . $image15 . "', Image_16 = '" . $image16 . "', Image_17 = '" . $image17 . "', Image_18 = '" . $image18 . "', Image_19 = '" . $image19 . "', Image_20 = '" . $image20 . "', Image_21 = '" . $image21 . "', Image_22 = '" . $image22 . "', Image_23 = '" . $image23 . "', Image_24 = '" . $image24 . "', Image_25 = '" . $image25 . "', video_1 = '" . $video_1 . "', video_2 = '" . $video_2 . "', video_3 = '" . $video_3 . "', project_listing_video = '" . $listing_video . "' 
			where workID = '" . $workID . "'";

            $updpdf = "Update work set user_pdf = '" . $user_pdf . "', competitive_pdf = '" . $competitive_pdf . "' , user_flow_pdf = '" . $user_flow_pdf . "'
			where workID = '" . $workID . "'";
//                        echo $updqry;
//                        die();
            $updres = ets_db_query($updqry) or die(ets_db_error());


            $updrespdf = ets_db_query($updpdf) or die(ets_db_error());

            $seoBase = "works";
            insSeoLnk($workID, $seoBase, $workslug);
            return true;
        } else {

            die(ets_db_error());
            echo "Error in Inserting Work..";
        }

        return true;
    }

    function editForm()
    {
        $sql = "select * from  work where workID ='" . $_REQUEST['workID'] . "'";
        $qry = ets_db_query($sql) or die(ets_db_error() . $sql);
        if (ets_db_num_rows($qry) > 0) {
            $rs = ets_db_fetch_array($qry);
            $form = new Form("html5");
            $form->configure(array(
                "prevent" => array("bootstrap", "jQuery"),
                "view" => new View_SideBySide,
                "id" => "ptypeFrm"
            ));
            $status = array("E" => "Enabled", "D" => "Disabled");
            $page_type = array("M" => "Mobile", "L" => "Desktop", "B" => "Branding");
            $Home_Page = array("Y" => "Yes", "N" => "No");

            $form->addElement(new Element_HTML("<legend>Edit Work</legend>"));
            $form->addElement(new Element_Hidden("controller", "work"));
            $form->addElement(new Element_Hidden("action", "work"));
            $form->addElement(new Element_Hidden("subaction", "edit"));
            $form->addElement(new Element_Hidden("workID", $_REQUEST['workID']));
            $form->addElement(new Element_Hidden("Oldhomeimage", $rs["home_image"]));
            $form->addElement(new Element_Hidden("Olddetailimage", $rs["detail_image"]));

            /* Actual Form Fields Started */
            $form->addElement(new Element_Textbox("Work Name:", "work_title", array(
                "required" => 1,
                "placeholder" => "Work Name",
                "value" => $rs["work_title"],
            )));

            $form->addElement(new Element_Select("Page Type:", "pagetype", $page_type, array(
                 "value" => $rs["pagetype"],
                "required" => 1
            )));


            $form->addElement(new Element_HTML('<div id = "mobile">'));
            $form->addElement(new Element_TinyMCE("Title:", "work_main_title", array(
                "required" => 1,
                "placeholder" => "Title",
                "value" => $rs["work_main_title"],
            )));
            $form->addElement(new Element_TinyMCE("Application Name:", "application_name", array(
                "required" => 1,
                "placeholder" => "Application Name",
                "value" => $rs["application_name"],
            )));
            $form->addElement(new Element_TinyMCE("Specification:", "specification", array(
                "required" => 1,
                "placeholder" => "Specification",
                "value" => $rs["specification"],
            )));
            $form->addElement(new Element_Textbox("Prototype Url:", "prototype", array(
                "placeholder" => "prototype",
                "value" => $rs["prototype"],
            )));

            /*$form->addElement(new Element_HTML('<img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['project_listing_image1'] . '" width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['project_listing_image1'] . '</p>'));
            $form->addElement(new Element_File("Project Thumbnail Image:  <br>(400 × 401 pixels)", "project_listing_image1", array(
                "placeholder" => "Project Thumbnail Image"
            )));
            $form->addElement(new Element_Hidden("Oldhoverimage", $rs["project_listing_image1"]));*/

//            $hp = $rs['project_listing_image1'];
            $form->addElement(new Element_Hidden("project_listing_image1", $rs["project_listing_image1"]));
            $form->addElement(new Element_HTML('<img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['project_listing_image1'] . '" width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['project_listing_image1'] . '</p>'));
            //cencle code
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel()"
            )));
            //cencle code end
            $form->addElement(new Element_File("Project Thumbnail Image:  <br>(400 × 401 pixels)", "project_listing_image1", array(
                "placeholder" => "Project Thumbnail Image"
            )));


            /* $form->addElement(new Element_HTML('<img src="'.DIR_WS_WORK_PATH.$rs['workID']."/".$rs['project_listing_hover_image'].'" width="10%" height="10%" ">'));

             $form->addElement(new Element_File("Project Listing Hover Image:  <br>(360 × 389 pixels)", "project_listing_hover_image", array(
                 "placeholder" => "Project Listing Hover Image"
             )));*/
            $form->addElement(new Element_Hidden("Oldhoverimage", $rs["project_listin g_hover_image"]));
            $form->addElement(new Element_HTML('<img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Banner_image'] . '" width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Banner_image'] . '</p>'));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return bannercan()"
            )));
            $form->addElement(new Element_File("Banner Image:  <br>(720 × 1025 pixels)", "Banner_image", array(
                "placeholder" => "Banner Image"
            )));
            $form->addElement(new Element_HTML('<img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_9'] . '" width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_9'] . '</p>'));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return tmg9can()"
            )));
            $form->addElement(new Element_File("Desktop / Mobile image:  <br>Desktop size <br>(650 × 525 pixels) <br> Mobile size<br> (296 × 550 pixels)", "Image_9", array(
                "placeholder" => "Image 9"
            )));
            $form->addElement(new Element_Hidden("Oldimage9image", $rs["Image_9"]));

            $form->addElement(new Element_Textbox("Color Code:", "color", array(
                "required" => 0,
                "placeholder" => "Color Code",
                "value" => $rs["project_color"],
            )));

            $form->addElement(new Element_TinyMCE("Uer Surveys & User Personas:", "user_sur", array(
                "required" => 1,
                "placeholder" => "Uer Surveys & User Personas",
                "value" => $rs["user_sur"],
            )));

            $form->addElement(new Element_HTML('<a href="' . DIR_WS_PDF_PATH . $rs['workID'] . "/" . $rs['user_pdf'] . '" target="_blank">view User Surveys & User Personas Pdf</a>'));
            $form->addElement(new Element_File("View User Surveys:", "user_pdf", array(

                "placeholder" => "View User Surveys",
                "value" => $rs["user_pdf"],
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return pdf()"
            )));
            $form->addElement(new Element_Hidden("Olduserpdfimage", $rs["user_pdf"]));

            $form->addElement(new Element_TinyMCE("Competitive Analysis:", "competitive_analysis", array(
                "required" => 1,
                "placeholder" => "Competitive Analysis",
                "value" => $rs["competitive_analysis"],
            )));
            $form->addElement(new Element_HTML('<a href="' . DIR_WS_PDF_PATH . $rs['workID'] . "/" . $rs['competitive_pdf'] . '" target="_blank">view competitive pdf</a>'));
            $form->addElement(new Element_File("View Competitive Pdf:", "competitive_pdf", array(

                "placeholder" => "View Competitive Pdf",
                "value" => $rs["competitive_pdf"],
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return pdf1()"
            )));
            $form->addElement(new Element_Hidden("Oldcompetitivepdfimage", $rs["competitive_pdf"]));

            $form->addElement(new Element_TinyMCE("Branding:", "new_text", array(
                "required" => 1,
                "placeholder" => "Branding",
                "value" => $rs["branding"],
            )));

            /*$form->addElement(new Element_TinyMCE("Branding:", "branding", array(
                "required" => 1,
                "placeholder" => "Branding",
                "value" => $rs["branding"],

            )));*/
            /*$form->addElement(new Element_TinyMCE("Branding:", "branding", array(
                "required" => 1,
                "placeholder" => "Branding",
                "value" => $rs["branding"],
            )));*/


            $form->addElement(new Element_Hidden("Oldbannerimage", $rs["Banner_image"]));

            /* $form->addElement(new Element_HTML('<img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Project_detail_image'] . '" width="10%" height="10%" ">'));
             $form->addElement(new Element_File("Project Detail Image: <br>(1500 × 1010 pixels)", "project_detail_image", array(
                 "placeholder" => "Project Detail Image"
             )));*/
            $form->addElement(new Element_HTML('<div><label class="control-label" style="width:100%;text-align:left;color: red;">Logo Images: </label><br><br></div>'));
            $form->addElement(new Element_HTML('<img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_1'] . '" width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_1'] . '</p>'));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel1()"
            )));
            $form->addElement(new Element_File("Logo Image 1: <br> Single Logo <br> (448 * 151)<br> or<br> full Image Logo <br> (448 * 450)  ", "Image_1", array(
                "placeholder" => "Image 1"
            )));
            $form->addElement(new Element_Hidden("Oldimage1image", $rs["Image_1"]));

            $form->addElement(new Element_HTML('<img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_2'] . '" width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_2'] . '</p>'));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel2()"
            )));
            $form->addElement(new Element_File("Logo Image 2: <br> Single Logo <br> (448 * 151) ", "Image_2", array(
                "placeholder" => "Image 2"
            )));
            $form->addElement(new Element_Hidden("Oldimage2image", $rs["Image_2"]));

            $form->addElement(new Element_HTML('<img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_3'] . '" width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_3'] . '</p>'));
            $form->addElement(new Element_File("Logo Image 3:  <br> Single Logo <br> (448 * 151) ", "Image_3", array(
                "placeholder" => "Image 3"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel3()"
            )));
            $form->addElement(new Element_HTML('<div><label class="control-label" style="width:100%;text-align:left;color: red;">Font Images: </label><br><br></div>'));
            $form->addElement(new Element_Hidden("Oldimage3image", $rs["Image_3"]));
            
            $form->addElement(new Element_Hidden("Oldimage4image", $rs["Image_4"]));
            $form->addElement(new Element_HTML('<img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_4'] . '" width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_4'] . '</p>'));
            $form->addElement(new Element_File("Font Image 1: <br> Single Logo <br> (448 * 151) <br>or<br> full Image Logo <br> (448 * 450) </br> ", "Image_4", array(
                "placeholder" => "Image 4"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel4()"
            )));
            
            $form->addElement(new Element_Hidden("Oldimage5image", $rs["Image_5"]));
            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_5'] . '" width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_5'] . '</p>'));
            $form->addElement(new Element_File("Font Image 2: <br> Single Logo <br> (448 * 151)<br> ", "Image_5", array(
                "placeholder" => "Image 5"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel5()"
            )));
            

            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_6'] . '" width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_6'] . '</p>'));
            $form->addElement(new Element_File("Font Image 3: <br> Single Logo <br> (448 * 151)<br> ", "Image_6", array(
                "placeholder" => "Image 6"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel6()"
            )));
            $form->addElement(new Element_HTML('<div><label class="control-label" style="width:100%;text-align:left;color: red;">Color Palette Images: </label><br><br></div>'));
            $form->addElement(new Element_Hidden("Oldimage6image", $rs["Image_6"]));

            $form->addElement(new Element_HTML('<img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_7'] . '" width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_7'] . '</p>'));

            $form->addElement(new Element_File("Color Palette Image: <br> full Image Logo <br> (448 * 450)", "Image_7", array(
                "placeholder" => "Image 7"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel7()"
            )));
            $form->addElement(new Element_Hidden("Oldimage7image", $rs["Image_7"]));


            $form->addElement(new Element_TinyMCE("User Flows & Wireframes:", "user_flows", array(
                "required" => 1,
                "placeholder" => "User Flows & Wireframes",
                "value" => $rs["user_flows"],
            )));

            //user flows pdf pending

            $form->addElement(new Element_HTML('<a href="' . DIR_WS_PDF_PATH . $rs['workID'] . "/" . $rs['user_flow_pdf'] . '" target="_blank">view User Flow</a>'));
            $form->addElement(new Element_File("View User Flow:", "user_flow_pdf", array(

                "placeholder" => "View User Flow",
                "value" => $rs["user_flow_pdf"],
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return pdf2()"
            )));
            $form->addElement(new Element_Hidden("Olduserflowpdf", $rs["user_flow_pdf"]));


            $form->addElement(new Element_TinyMCE("User Flows & Wireframes:", "user_flows_des", array(
                "required" => 1,
                "placeholder" => "User Flows & Wireframes",
                "value" => $rs["user_flows_des"],
            )));


            $form->addElement(new Element_HTML('<img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_8'] . '" width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_8'] . '</p>'));
            $form->addElement(new Element_File("User Flows & Wireframes Image 1:  <br>(748 × 1714 pixels) or (795 × 1000 pixels)", "Image_8", array(
                "placeholder" => "Image 8"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel8()"
            )));
            $form->addElement(new Element_Hidden("Oldimage8image", $rs["Image_8"]));


            $form->addElement(new Element_HTML('</div>'));


            //            branding template

            $form->addElement(new Element_HTML('<div id = "branding">'));
            $form->addElement(new Element_Textbox("Branding Title:", "branding_title", array(
                "placeholder" => "Branding Title",
                "value" => $rs["branding_title"],
            )));
            $form->addElement(new Element_TinyMCE("Branding Brand:", "branding_brand", array(
                "required" => 1,
                "placeholder" => "Branding Brand",
                "value" => $rs["branding_brand"],

            )));
            $form->addElement(new Element_TinyMCE("Branding Description:", "branding_desc", array(
                "placeholder" => "Branding Description",
                "value" => $rs["branding_desc"],
            )));
            $form->addElement(new Element_TinyMCE("Branding Main Title:", "branding_bold", array(
                "placeholder" => "Branding Main Title",
                "value" => $rs["branding_bold"],
            )));

            $form->addElement(new Element_HTML('<br><br><video src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['project_listing_video'] . '" width="10%" height="10%" "></video>'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['project_listing_video'] . '</p>'));
            $form->addElement(new Element_File("Project Thumbnail Video: <br>(400 × 400 pixels) ", "project_listing_video", array(
                "placeholder" => "Project Thumbnail Video"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel9()"
            )));
            $form->addElement(new Element_Hidden("Oldhomevideo", $rs["project_listing_video"]));

            $form->addElement(new Element_Hidden("Oldhomeimage", $rs["project_listing_image"]));
            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['project_listing_image'] . '" width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['project_listing_image'] . '</p>'));
            $form->addElement(new Element_File("Project Thumbnail Image: <br>(400 × 400 pixels) ", "project_listing_image", array(
                "placeholder" => "Project Thumbnail Image"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel10()"
            )));

            
            
            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_11'] . '"width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_11'] . '</p>'));
            $form->addElement(new Element_File("Branding Right Image:  <br>(900 × 500 pixels)", "Image_11", array(
                "placeholder" => "Branding Right Image"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel11()"
            )));
            $form->addElement(new Element_Hidden("Oldimage11image", $rs["Image_11"]));

            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_10'] . '"width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_10'] . '</p>'));
            $form->addElement(new Element_File("Branding Grid Image 1:  <br>(900 × 500 pixels)", "Image_10", array(
                "placeholder" => "Branding Grid Image 1"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel12()"
            )));
            $form->addElement(new Element_Hidden("Oldimage10image", $rs["Image_10"]));

            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_12'] . '"width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_12'] . '</p>'));
            $form->addElement(new Element_File("Branding Grid Image 2:  <br>(900 × 500 pixels)", "Image_12", array(
                "placeholder" => "Branding Grid Image 2"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel13()"
            )));
            $form->addElement(new Element_Hidden("Oldimage12image", $rs["Image_12"]));


            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_13'] . '"width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_13'] . '</p>'));
            $form->addElement(new Element_File("Branding Full Image:  <br>(1920 × 700 pixels)", "Image_13", array(
                "placeholder" => "Branding Full Image"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel14()"
            )));
            $form->addElement(new Element_Hidden("Oldimage13image", $rs["Image_13"]));




            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_14'] . '"width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_14'] . '</p>'));
            $form->addElement(new Element_File("Branding Grid Image 3:  <br>(900 × 500 pixels)", "Image_14", array(
                "placeholder" => "Branding Grid Image 3"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel15()"
            )));
            $form->addElement(new Element_Hidden("Oldimage14image", $rs["Image_14"]));

            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_15'] . '"width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_15'] . '</p>'));
            $form->addElement(new Element_File("Branding Grid Image 4:  <br>(900 × 500 pixels)", "Image_15", array(
                "placeholder" => "Branding Grid Image 4"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel16()"
            )));
            $form->addElement(new Element_Hidden("Oldimage15image", $rs["Image_15"]));


            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_16'] . '"width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_16'] . '</p>'));
            $form->addElement(new Element_File("Branding Full Image:  <br>(1920 × 700 pixels)", "Image_16", array(
                "placeholder" => "Branding Full Image"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel17()"
            )));
            $form->addElement(new Element_Hidden("Oldimage16image", $rs["Image_16"]));



            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_17'] . '"width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_17'] . '</p>'));
            $form->addElement(new Element_File("Branding Grid Image 5:  <br>(900 × 500 pixels)", "Image_17", array(
                "placeholder" => "Branding Grid Image 5"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel18()"
            )));
            $form->addElement(new Element_Hidden("Oldimage17image", $rs["Image_17"]));

            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_18'] . '"width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_17'] . '</p>'));
            $form->addElement(new Element_File("Branding Grid Image 6:  <br>(900 × 500 pixels)", "Image_18", array(
                "placeholder" => "Branding Grid Image 6"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel19()"
            )));
            $form->addElement(new Element_Hidden("Oldimage18image", $rs["Image_18"]));


            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_19'] . '"width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_19'] . '</p>'));
            $form->addElement(new Element_File("Branding Full Image:  <br>(1920 × 700 pixels)", "Image_19", array(
                "placeholder" => "Branding Full Image"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel20()"
            )));
            $form->addElement(new Element_Hidden("Oldimage19image", $rs["Image_19"]));



            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_20'] . '"width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_20'] . '</p>'));
            $form->addElement(new Element_File("Branding Grid Image 7:  <br>(900 × 500 pixels)", "Image_20", array(
                "placeholder" => "Branding Grid Image 7"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel21()"
            )));
            $form->addElement(new Element_Hidden("Oldimage20image", $rs["Image_20"]));


            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_21'] . '"width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_21'] . '</p>'));
            $form->addElement(new Element_File("Branding Grid Image 8:  <br>(900 × 500 pixels)", "Image_21", array(
                "placeholder" => "Branding Grid Image 8"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel22()"
            )));
            $form->addElement(new Element_Hidden("Oldimage21image", $rs["Image_21"]));


            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_22'] . '"width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_22'] . '</p>'));
            $form->addElement(new Element_File("Branding Full Image:  <br>(1920 × 900 pixels)", "Image_22", array(
                "placeholder" => "Branding Full Image"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel23()"
            )));
            $form->addElement(new Element_Hidden("Oldimage22image", $rs["Image_22"]));
            
            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_23'] . '"width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_23'] . '</p>'));
            $form->addElement(new Element_File("Branding Grid Image 9:  <br>(900 × 500 pixels)", "Image_23", array(
                "placeholder" => "Branding Grid Image 9"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel25()"
            )));
            $form->addElement(new Element_Hidden("Oldimage23image", $rs["Image_23"]));
            
            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_24'] . '"width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_24'] . '</p>'));
            $form->addElement(new Element_File("Branding Grid Image 10:  <br>(900 × 500 pixels)", "Image_24", array(
                "placeholder" => "Branding Grid Image 10"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel26()"
            )));
            $form->addElement(new Element_Hidden("Oldimage24image", $rs["Image_24"]));
            
            $form->addElement(new Element_HTML('<br><br><img src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['Image_25'] . '"width="10%" height="10%" ">'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['Image_25'] . '</p>'));
            $form->addElement(new Element_File("Branding Full Image:  <br>(1920 × 900 pixels)", "Image_25", array(
                "placeholder" => "Branding Full Image"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel27()"
            )));
            $form->addElement(new Element_Hidden("Oldimage25image", $rs["Image_25"]));
            
            $form->addElement(new Element_HTML('<br><br><video src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['video_1'] . '"width="10%" height="10%" "></video>'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['video_1'] . '</p>'));
            $form->addElement(new Element_File("Branding Video:  <br>(900 × 500 pixels)", "video_1", array(
                "placeholder" => "Branding Video"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel24()"
            )));
        
            $form->addElement(new Element_Hidden("Oldimagevideo_2", $rs["video_1"]));
            
            $form->addElement(new Element_HTML('<br><br><video src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['video_2'] . '"width="10%" height="10%" "></video>'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['video_2'] . '</p>'));
            $form->addElement(new Element_File("Branding Video:  <br>(900 × 500 pixels)", "video_2", array(
                "placeholder" => "Branding Video"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel28()"
            )));
            $form->addElement(new Element_Hidden("Oldimagevideo_3", $rs["video_2"]));
            
            $form->addElement(new Element_HTML('<br><br><video src="' . DIR_WS_WORK_PATH . $rs['workID'] . "/" . $rs['video_3'] . '"width="10%" height="10%" "></video>'));
            $form->addElement(new Element_HTML('<p style="margin-top: 10px">' . $rs['video_3'] . '</p>'));
            $form->addElement(new Element_File("Branding Video:  <br>(1920 × 900 pixels)", "video_3", array(
                "placeholder" => "Branding Video"
            )));
            $form->addElement(new Element_Button("Remove", "button", array(
                "onclick" => "return cancel29()"
            )));
            $form->addElement(new Element_Hidden("Oldimagevideo_4", $rs["video_3"]));

            $form->addElement(new Element_HTML('</div>'));
            //        branding end template
            $form->addElement(new Element_Select("Home Page: <br>(Yes / No)", "Home_Page", $Home_Page, array(
                "required" => 1,
                "value" => $rs["Home_Page"],
            )));


            $form->addElement(new Element_Textbox("Sortorder:", "sortorder", array(
                "required" => 1,
                "placeholder" => "Sortorder",
                "value" => $rs["sortorder"],
            )));

            $form->addElement(new Element_HTML('<div><label class="control-label" style="width:100%;text-align:left;">Note : Works will be displayed in website in the ascending order of sort order </label><br><br></div>'));

            $form->addElement(new Element_Select("Status:", "status", $status, array(
                "required" => 1
            )));
            $form->addElement(new Element_HTML('<hr>'));
            $form->addElement(new Element_Button);
            $form->addElement(new Element_Button("Cancel", "button", array(
                "onclick" => "history.go(-1);"
            )));
            $form->render();
        } else {
            echo "Not Found...";
        }

    }

    function edit()
    {
        $username = $_SESSION['username'];
        $modifieddate = date("Y-m-d");

        if ($_FILES['project_listing_image1']['name'] == '') {
            $listing_image1 = $_POST['project_listing_image1'];
        } else {
            $listing_image1 = $_POST['workID'] . '-' . $_FILES['project_listing_image1']['name'];
        }

        if ($_FILES['project_listing_image']['name'] == '') {
            $listing_image = $_POST['Oldhomeimage'];
        } else {
            $listing_image = $_POST['workID'] . '-' . $_FILES['project_listing_image']['name'];
        }

        if ($_FILES['project_listing_video']['name'] == '') {
            $listing_video = $_POST['Oldhomevideo'];
        } else {
            $listing_video = $_POST['workID'] . '-' . $_FILES['project_listing_video']['name'];
        }

        if ($_FILES['project_listing_hover_image']['name'] == '') {
            $hover_image = $_POST['Oldhoverimage'];
        } else {
            $hover_image = $_POST['workID'] . '-' . $_FILES['project_listing_hover_image']['name'];

        }


        if ($_FILES['Banner_image']['name'] == '') {
            $banner_image = $_POST['Oldbannerimage'];
        } else {
            $banner_image = $_POST['workID'] . '-' . $_FILES['Banner_image']['name'];
        }
        if ($_FILES['Project_detail_image']['name'] == '') {
            $detail_image = $_POST['Olddetailimage'];
        } else {
            $detail_image = $_POST['workID'] . '-' . $_FILES['Project_detail_image']['name'];
        }

        if ($_FILES['Image_1']['name'] == '') {
            $image1 = $_POST['Oldimage1image'];
        } else {
            $image1 = $_POST['workID'] . '-' . $_FILES['Image_1']['name'];
        }
        if ($_FILES['Image_2']['name'] == '') {
            $image2 = $_POST['Oldimage2image'];
        } else {
            $image2 = $_POST['workID'] . '-' . $_FILES['Image_2']['name'];
        }
        if ($_FILES['Image_3']['name'] == '') {
            $image3 = $_POST['Oldimage3image'];
        } else {
            $image3 = $_POST['workID'] . '-' . $_FILES['Image_3']['name'];
        }
        if ($_FILES['Image_4']['name'] == '') {
            $image4 = $_POST['Oldimage4image'];
        } else {
            $image4 = $_POST['workID'] . '-' . $_FILES['Image_4']['name'];
        }
        if ($_FILES['Image_5']['name'] == '') {
            $image5 = $_POST['Oldimage5image'];
        } else {
            $image5 = $_POST['workID'] . '-' . $_FILES['Image_5']['name'];
        }
        if ($_FILES['Image_6']['name'] == '') {
            $image6 = $_POST['Oldimage6image'];
        } else {
            $image6 = $_POST['workID'] . '-' . $_FILES['Image_6']['name'];
        }
        if ($_FILES['Image_7']['name'] == '') {
            $image7 = $_POST['Oldimage7image'];
        } else {
            $image7 = $_POST['workID'] . '-' . $_FILES['Image_7']['name'];
        }
        if ($_FILES['Image_8']['name'] == '') {
            $image8 = $_POST['Oldimage8image'];
        } else {
            $image8 = $_POST['workID'] . '-' . $_FILES['Image_8']['name'];
        }

        if ($_FILES['Image_9']['name'] == '') {
            $image9 = $_POST['Oldimage9image'];
        } else {
            $image9 = $_POST['workID'] . '-' . $_FILES['Image_9']['name'];
        }

//        echo $_FILES['Image_10']['name'];

        if ($_FILES['Image_10']['name'] == '') {
            $image10 = $_POST['Oldimage10image'];
//            echo $image10;
        } else {
            $image10 = $_POST['workID'] . '-' . $_FILES['Image_10']['name'];
//            echo $image10;
        }

//        die();

        if ($_FILES['Image_11']['name'] == '') {
            $image11 = $_POST['Oldimage11image'];
        } else {
            $image11 = $_POST['workID'] . '-' . $_FILES['Image_11']['name'];
        }

        if ($_FILES['Image_12']['name'] == '') {
            $image12 = $_POST['Oldimage12image'];
        } else {
            $image12 = $_POST['workID'] . '-' . $_FILES['Image_12']['name'];
        }

        if ($_FILES['Image_13']['name'] == '') {
            $image13 = $_POST['Oldimage13image'];
        } else {
            $image13 = $_POST['workID'] . '-' . $_FILES['Image_13']['name'];
        }

        if ($_FILES['Image_14']['name'] == '') {
            $image14 = $_POST['Oldimage14image'];
        } else {
            $image14 = $_POST['workID'] . '-' . $_FILES['Image_14']['name'];
        }

        if ($_FILES['Image_15']['name'] == '') {
            $image15 = $_POST['Oldimage15image'];
        } else {
            $image15 = $_POST['workID'] . '-' . $_FILES['Image_15']['name'];
        }

        if ($_FILES['Image_16']['name'] == '') {
            $image16 = $_POST['Oldimage16image'];
        } else {
            $image16 = $_POST['workID'] . '-' . $_FILES['Image_16']['name'];
        }



        if ($_FILES['Image_17']['name'] == '') {
            $image17 = $_POST['Oldimage17image'];
        } else {
            $image17 = $_POST['workID'] . '-' . $_FILES['Image_17']['name'];
        }


        if ($_FILES['Image_18']['name'] == '') {
            $image18 = $_POST['Oldimage18image'];
        } else {
            $image18 = $_POST['workID'] . '-' . $_FILES['Image_18']['name'];
        }


        if ($_FILES['Image_19']['name'] == '') {
            $image19 = $_POST['Oldimage19image'];
        } else {
            $image19 = $_POST['workID'] . '-' . $_FILES['Image_19']['name'];
        }



        if ($_FILES['Image_20']['name'] == '') {
            $image20 = $_POST['Oldimage20image'];
        } else {
            $image20 = $_POST['workID'] . '-' . $_FILES['Image_20']['name'];
        }


        if ($_FILES['Image_21']['name'] == '') {
            $image21 = $_POST['Oldimage21image'];
        } else {
            $image21 = $_POST['workID'] . '-' . $_FILES['Image_21']['name'];
        }

        if ($_FILES['Image_22']['name'] == '') {
            $image22 = $_POST['Oldimage22image'];
        } else {
            $image22 = $_POST['workID'] . '-' . $_FILES['Image_22']['name'];
        }
        
        if ($_FILES['Image_23']['name'] == '') {
            $image23 = $_POST['Oldimage23image'];
        } else {
            $image23 = $_POST['workID'] . '-' . $_FILES['Image_23']['name'];
        }
        
        if ($_FILES['Image_24']['name'] == '') {
            $image24 = $_POST['Oldimage24image'];
        } else {
            $image24 = $_POST['workID'] . '-' . $_FILES['Image_24']['name'];
        }
        
        if ($_FILES['Image_25']['name'] == '') {
            $image25 = $_POST['Oldimage25image'];
        } else {
            $image25 = $_POST['workID'] . '-' . $_FILES['Image_25']['name'];
        }
        
        if ($_FILES['video_1']['name'] == '') {
            $video_1 = $_POST['Oldimagevideo_2'];
        } else {
            $video_1 = $_POST['workID'] . '-' . $_FILES['video_1']['name'];
        }
        
        if ($_FILES['video_2']['name'] == '') {
            $video_2 = $_POST['Oldimagevideo_3'];
        } else {
            $video_2 = $_POST['workID'] . '-' . $_FILES['video_2']['name'];
        }
        
        if ($_FILES['video_3']['name'] == '') {
            $video_3 = $_POST['Oldimagevideo_4'];
        } else {
            $video_3 = $_POST['workID'] . '-' . $_FILES['video_3']['name'];
        }
//        echo $image11;


        if ($_FILES['user_pdf']['name'] == '') {
            $user_pdf = $_POST['Olduserpdfimage'];
        } else {
            $user_pdf = $_POST['workID'] . '-' . $_FILES['user_pdf']['name'];
        }

        if ($_FILES['competitive_pdf']['name'] == '') {
            $competitive_pdf = $_POST['Oldcompetitivepdfimage'];
        } else {
            $competitive_pdf = $_POST['workID'] . '-' . $_FILES['competitive_pdf']['name'];
        }


        if ($_FILES['user_flow_pdf']['name'] == '') {
            $user_flow_pdf = $_POST['Olduserflowpdf'];
        } else {
            $user_flow_pdf = $_POST['workID'] . '-' . $_FILES['user_flow_pdf']['name'];
        }


        $pTypeslug = pro_SeoSlug(stripslashes($_POST['work_title']));

        $sql = "update work set 
                username = '" . $username . "',
                work_title = '" . ets_db_real_escape_string($_POST['work_title']) . "',
                branding_title = '" . ets_db_real_escape_string($_POST['branding_title']) . "',
                branding_desc = '" . ets_db_real_escape_string($_POST['branding_desc']) . "',
                branding_brand = '" . ets_db_real_escape_string($_POST['branding_brand']) . "',
                branding_bold = '" . ets_db_real_escape_string($_POST['branding_bold']) . "',
                application_name = '" . ets_db_real_escape_string($_POST['application_name']) . "',
                specification = '" . ets_db_real_escape_string($_POST['specification']) . "',
                work_main_title = '" . ets_db_real_escape_string($_POST['work_main_title']) . "',
                project_color = '" . ets_db_real_escape_string($_POST['color']) . "',
                user_sur = '" . ets_db_real_escape_string($_POST['user_sur']) . "',
                competitive_analysis = '" . ets_db_real_escape_string($_POST['competitive_analysis']) . "',
                branding = '" . ets_db_real_escape_string($_POST['new_text']) . "',
                user_flows = '" . ets_db_real_escape_string($_POST['user_flows']) . "',
                user_flows_des = '" . ets_db_real_escape_string($_POST['user_flows_des']) . "',
                prototype = '" . ets_db_real_escape_string($_POST['prototype']) . "',
                Sector = '" . ets_db_real_escape_string($_POST['Sector']) . "',
                sortorder ='" . $_POST['sortorder'] . "',
                Home_Page = '" . $_POST['Home_Page'] . "',
                status = '" . $_POST['status'] . "',
                pagetype = '" . $_POST['pagetype'] . "',
                home_image = '" . $hfilename . "',
                detail_image = '" . $dfilename . "',
                project_listing_image1 = '" . $listing_image1 . "',
                project_listing_image = '" . $listing_image . "',
                project_listing_video = '" . $listing_video . "',
                project_listing_hover_image = '" . $hover_image . "',
                Banner_image = '" . $banner_image . "',
                Image_1 = '" . $image1 . "',
                Image_2 = '" . $image2 . "',
                Image_3 = '" . $image3 . "',
                Image_4 = '" . $image4 . "',
                Image_5 = '" . $image5 . "',
                Image_6 = '" . $image6 . "',
                Image_7 = '" . $image7 . "',
                Image_8 = '" . $image8 . "',
                Image_9 = '" . $image9 . "',
                Image_10 = '" . $image10 . "',
                Image_11 = '" . $image11 . "',
                Image_12 = '" . $image12 . "',
                Image_13 = '" . $image13 . "',
                Image_14 = '" . $image14 . "',
                Image_15 = '" . $image15 . "',
                Image_16 = '" . $image16 . "',
                Image_17 = '" . $image17 . "',
                Image_18 = '" . $image18 . "',
                Image_19 = '" . $image19 . "',
                Image_20 = '" . $image20 . "',
                Image_21 = '" . $image21 . "',
                Image_22 = '" . $image22 . "',
                Image_23 = '" . $image23 . "',
                Image_24 = '" . $image24 . "',
                Image_25 = '" . $image25 . "',
                video_1 = '" . $video_1 . "',
                video_2 = '" . $video_2 . "',
                video_3 = '" . $video_3 . "',
                user_pdf = '" . $user_pdf . "',
                competitive_pdf = '" . $competitive_pdf . "',
                user_flow_pdf = '" . $user_flow_pdf . "',
			    remote_ip ='" . $_SERVER['REMOTE_ADDR'] . "'
			    where workID = '" . $_POST['workID'] . "'";

         /*echo $sql;
         die();*/

        /* echo $image11;


         echo "work2";*/

        if (ets_db_query($sql)) {
            $workID = $_POST['workID'];
            $pdfID = $_POST['workID'];
            $path = DIR_FS_WORK_PATH . $_POST['workID'] . '/';


            $pdf_path = DIR_FS_PDF_PATH . $_POST['workID'] . '/';

            if (!file_exists($path)) {
                mkdir($path,0777,true);
                chmod($path,0755);
                /*exec("chown " . FILEUSER . FILEUSER . " " . $path);
                exec("chmod 0777 " . $path);*/
            }


            if (!file_exists($pdf_path)) {
                mkdir($pdf_path,0777,true);
                chmod($path,0755);
                /*exec("chown " . FILEUSER . FILEUSER . " " . $pdf_path);
                exec("chmod 0777 " . $pdf_path);*/
            }

            if ($_FILES['project_listing_image1']['name'] != '') {
                $htarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["project_listing_image1"]["name"];
                move_uploaded_file($_FILES["project_listing_image1"]["tmp_name"], $htarget_path);
            }
            if ($_FILES['project_listing_image']['name'] != '') {
                $htarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["project_listing_image"]["name"];
                move_uploaded_file($_FILES["project_listing_image"]["tmp_name"], $htarget_path);
            }

            if ($_FILES['project_listing_video']['name'] != '') {
                $htarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["project_listing_video"]["name"];
                move_uploaded_file($_FILES["project_listing_video"]["tmp_name"], $htarget_path);
            }

            if ($_FILES['project_listing_hover_image']['name'] != '') {
                $dtarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["project_listing_hover_image"]["name"];
                move_uploaded_file($_FILES["project_listing_hover_image"]["tmp_name"], $dtarget_path);
            }
            if ($_FILES['Banner_image']['name'] != '') {
                $dtarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Banner_image"]["name"];
                move_uploaded_file($_FILES["Banner_image"]["tmp_name"], $dtarget_path);
            }
            if ($_FILES['Project_detail_image']['name'] != '') {
                $dtarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Project_detail_image"]["name"];
                move_uploaded_file($_FILES["Project_detail_image"]["tmp_name"], $dtarget_path);
            }
            if ($_FILES['Image_1']['name'] != '') {
                $dtarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_1"]["name"];
                move_uploaded_file($_FILES["Image_1"]["tmp_name"], $dtarget_path);
            }
            if ($_FILES['Image_2']['name'] != '') {
                $dtarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_2"]["name"];
                move_uploaded_file($_FILES["Image_2"]["tmp_name"], $dtarget_path);
            }
            if ($_FILES['Image_3']['name'] != '') {
                $dtarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_3"]["name"];
                move_uploaded_file($_FILES["Image_3"]["tmp_name"], $dtarget_path);
            }
            if ($_FILES['Image_4']['name'] != '') {
                $dtarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_4"]["name"];
                move_uploaded_file($_FILES["Image_4"]["tmp_name"], $dtarget_path);
            }
            if ($_FILES['Image_5']['name'] != '') {
                $dtarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_5"]["name"];
                move_uploaded_file($_FILES["Image_5"]["tmp_name"], $dtarget_path);
            }
            if ($_FILES['Image_6']['name'] != '') {
                $dtarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_6"]["name"];
                move_uploaded_file($_FILES["Image_6"]["tmp_name"], $dtarget_path);
            }
            if ($_FILES['Image_7']['name'] != '') {
                $dtarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_7"]["name"];
                move_uploaded_file($_FILES["Image_7"]["tmp_name"], $dtarget_path);
            }
            if ($_FILES['Image_8']['name'] != '') {
                $dtarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_8"]["name"];
                move_uploaded_file($_FILES["Image_8"]["tmp_name"], $dtarget_path);
            }
            if ($_FILES['Image_9']['name'] != '') {
                $dtarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_9"]["name"];
                move_uploaded_file($_FILES["Image_9"]["tmp_name"], $dtarget_path);
            }

            if ($_FILES['Image_10']['name'] != '') {
                $dtarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_10"]["name"];
                move_uploaded_file($_FILES["Image_10"]["tmp_name"], $dtarget_path);
            }

//            echo "work3";

            if ($_FILES['Image_11']['name'] != '') {
                $btarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_11"]["name"];
                move_uploaded_file($_FILES["Image_11"]["tmp_name"], $btarget_path);
            }


            if ($_FILES['Image_12']['name'] != '') {
                $btarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_12"]["name"];
                move_uploaded_file($_FILES["Image_12"]["tmp_name"], $btarget_path);
            }
            if ($_FILES['Image_13']['name'] != '') {
                $btarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_13"]["name"];
                move_uploaded_file($_FILES["Image_13"]["tmp_name"], $btarget_path);
            }

            if ($_FILES['Image_14']['name'] != '') {
                $btarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_14"]["name"];
                move_uploaded_file($_FILES["Image_14"]["tmp_name"], $btarget_path);
            }

            if ($_FILES['Image_15']['name'] != '') {
                $btarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_15"]["name"];
                move_uploaded_file($_FILES["Image_15"]["tmp_name"], $btarget_path);
            }

            if ($_FILES['Image_16']['name'] != '') {
                $btarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_16"]["name"];
                move_uploaded_file($_FILES["Image_16"]["tmp_name"], $btarget_path);
            }


            if ($_FILES['Image_17']['name'] != '') {
                $btarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_17"]["name"];
                move_uploaded_file($_FILES["Image_17"]["tmp_name"], $btarget_path);
            }

            if ($_FILES['Image_18']['name'] != '') {
                $btarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_18"]["name"];
                move_uploaded_file($_FILES["Image_18"]["tmp_name"], $btarget_path);
            }
            if ($_FILES['Image_19']['name'] != '') {
                $btarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_19"]["name"];
                move_uploaded_file($_FILES["Image_19"]["tmp_name"], $btarget_path);
            }
            if ($_FILES['Image_20']['name'] != '') {
                $btarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_20"]["name"];
                move_uploaded_file($_FILES["Image_20"]["tmp_name"], $btarget_path);
            }

            if ($_FILES['Image_21']['name'] != '') {
                $btarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_21"]["name"];
                move_uploaded_file($_FILES["Image_21"]["tmp_name"], $btarget_path);
            }

            if ($_FILES['Image_22']['name'] != '') {
                $btarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_22"]["name"];
                move_uploaded_file($_FILES["Image_22"]["tmp_name"], $btarget_path);
            }
            
            if ($_FILES['Image_23']['name'] != '') {
                $btarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_23"]["name"];
                move_uploaded_file($_FILES["Image_23"]["tmp_name"], $btarget_path);
            }
            
            if ($_FILES['Image_24']['name'] != '') {
                $btarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_24"]["name"];
                move_uploaded_file($_FILES["Image_24"]["tmp_name"], $btarget_path);
            }
            
            if ($_FILES['Image_25']['name'] != '') {
                $btarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["Image_25"]["name"];
                move_uploaded_file($_FILES["Image_25"]["tmp_name"], $btarget_path);
            }
            
            if ($_FILES['video_1']['name'] != '') {
                $btarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["video_1"]["name"];
                move_uploaded_file($_FILES["video_1"]["tmp_name"], $btarget_path);
            }
            
            if ($_FILES['video_2']['name'] != '') {
                $btarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["video_2"]["name"];
                move_uploaded_file($_FILES["video_2"]["tmp_name"], $btarget_path);
            }
            
            if ($_FILES['video_3']['name'] != '') {
                $btarget_path = DIR_FS_WORK_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["video_3"]["name"];
                move_uploaded_file($_FILES["video_3"]["tmp_name"], $btarget_path);
            }            

            if ($_FILES['user_pdf']['name'] != '') {
                $dtarget_path = DIR_FS_PDF_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["user_pdf"]["name"];
                move_uploaded_file($_FILES["user_pdf"]["tmp_name"], $dtarget_path);
            }

            if ($_FILES['competitive_pdf']['name'] != '') {
                $dtarget_path = DIR_FS_PDF_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["competitive_pdf"]["name"];
                move_uploaded_file($_FILES["competitive_pdf"]["tmp_name"], $dtarget_path);
            }

            if ($_FILES['user_flow_pdf']['name'] != '') {
                $dtarget_path = DIR_FS_PDF_PATH . $_POST['workID'] . '/' . $_POST['workID'] . '-' . $_FILES["user_flow_pdf"]["name"];
                move_uploaded_file($_FILES["user_flow_pdf"]["tmp_name"], $dtarget_path);
            }


            $seoBase = "works";
            $seoBasepdf = "pdf";

            updSeoLnk($workID, $seoBase, $pTypeslug);


            updSeoLnk($pdfID, $seoBasepdf, $pTypeslug);

            return true;

        } else {
            echo "Error in updating project type..";
        }
    }

    function listData()
    {
        ?>
        <script>
            $(document).ready(function () {
                var listURL = 'helperfunc/workList.php';
                $('#worklist').dataTable({
                    "ajax": listURL
                });

                $('.esortorder').editable({params: {"tblName": "work"}});
            });
        </script>
        <?php
        $subvar = 'onclick="return confirmSubmit();"';
        echo '<div id="no-more-tables">
	<table cellpadding="1" cellspacing="2" border="0" class="table table-striped table-bordered dataTable" id="worklist" width="100%">
		<thead>
		<tr>
			<th width="5%">Id</th>
			<th width="25%">Work Name</th>
			<th width="25%">Work Type</th>
			<th width="10%">Status</th>
			<th width="10%">Sort-Order</th>
			<th width="25%">Action</th>
		</tr>
		</thead>
		<tbody></tbody>	
		<tfoot>	
		<tr>
			<th>Id</th>
			<th width="25%">Work Name</th>
			<th width="25%">Work Type</th>
			<th>Status</th>
			<th>Sort-Order</th>
			<th>Action</th>
		</tr>
		</tfoot>
	</table></div>';
        ?>
        <script>
            $('.table').editable({
                selector: 'a.estatus,a.esortorder',
                params: {"tblName": "work"},
                value: 1,
                source: [{value: 'E', text: 'Active'}, {value: 'D', text: 'Disabled'}]
            });
        </script>
        <?php
    }

    function delete()
    {
        $sql = "Select * from work where workID = '" . $_GET['workID'] . "'";
        $res = ets_db_query($sql) or die(ets_db_error());

        $arr = ets_db_fetch_array($res);

        $path = DIR_FS_WORK_PATH . $_GET['workID'];
        delete_folder($path);

        $delsql = "Delete from work where workID = '" . $_GET['workID'] . "'";
        $delqry = ets_db_query($delsql) or die(ets_db_error() . $delsql);

        delSeoLnk($_GET['workID'], "work");

        return true;
    }
}

?>
