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
</script>
<script>
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

class workfont
{
    function addForm()
    {
        $form = new Form("addFrm");
        $form->configure(array(
            "prevent" => array("bootstrap", "jQuery"),
            "view" => new View_SideBySide
        ));
        $status = array("E" => "Enabled", "D" => "Disabled");

        $form->addElement(new Element_HTML("<legend>Video Section</legend>"));
        $form->addElement(new Element_Hidden("controller", "work"));
        $form->addElement(new Element_Hidden("action", "workfont"));
        $form->addElement(new Element_Hidden("subaction", "add"));
        $form->addElement(new Element_Hidden("createdate"));
        $form->addElement(new Element_Hidden("sortorder", "1"));
        $form->addElement(new Element_Hidden("workID",$_REQUEST['workID']));
        $form->addElement(new Element_Hidden("isFront","F"));
        $form->addElement(new Element_Hidden("status", "E"));


        // $form->addElement(new Element_Textbox("Brand Name:", "galleryTitle", array(
        //     "required" => 1,
        //     "placeholder" => "Image Title"
        // )));
       /* $form->addElement(new Element_File("Products Image: ", "master_plan", array(
            "placeholder" => "Products Image"
        )));*/
        $form->addElement(new Element_File("Font Image 1", "galleryImage", array(
            "placeholder" => "Video"
        )));
        
        $form->addElement(new Element_File("Font Image 2 ", "galleryImage1", array(
            "placeholder" => "Video"
        )));
        
        $form->addElement(new Element_File("Font Image 3 ", "galleryImage2", array(
            "placeholder" => "Video"
        )));

        $form->addElement(new Element_HTML('<label class="control-label">Last Sort Order : ' . get_last_sortorder('gallery') . '</label><br><br>'));
        $form->addElement(new Element_Textbox("Sortorder:", "sortorder", array(
            "required" => 1,
            "placeholder" => "Sortorder"
        )));
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

        $sql = "Insert into gallery set 
		username = '" . $username . "',
		createdate = now(),
		modifieddate = now(),
		galleryTitle = '" . ets_db_real_escape_string($_POST['galleryTitle']) . "',		
		productID = '" . $_POST['workID'] . "',
		galleryImage = '" . $_FILES["galleryImage"]["name"] . "',
		galleryImage1 = '" . $_FILES["galleryImage1"]["name"] . "',
		galleryImage2 = '" . $_FILES["galleryImage2"]["name"] . "',
		sortorder = '" . $_POST['sortorder'] . "',
		status = '" . $_POST['status'] . "',
		remote_ip ='" . $_SERVER['REMOTE_ADDR'] . "',
		isFront ='" . $_POST['isFront'] . "'
		";

        if(ets_db_query($sql)){

            $viewID = ets_db_insert_id();

            $path = DIR_FS_WORK_PATH.$res['productID'];
            
            if(!file_exists($path))	{
                mkdir($path);
                exec("chown ".FILEUSER.FILEUSER." ".$path);
                exec("chmod 0777 ".$path);
            }
                
            $tfilename = $_FILES['galleryImage']['name'];
            $targetthumb_path = DIR_FS_WORK_PATH.$_POST['workID'].'/'.$tfilename;
            move_uploaded_file($_FILES["galleryImage"]["tmp_name"],$targetthumb_path);
            if(!empty($tfilename))
            {
                ets_db_query("Update gallery set galleryImage = '".$tfilename."' where galleryID = '".$viewID."'") or die(ets_db_error());
            }
            
            $tfilename1 = $_FILES['galleryImage1']['name'];
            $targetthumb_path1 = DIR_FS_WORK_PATH.$_POST['workID'].'/'.$tfilename1;
            move_uploaded_file($_FILES["galleryImage1"]["tmp_name"],$targetthumb_path1);
            if(!empty($tfilename1))
            {
                ets_db_query("Update gallery set galleryImage1 = '".$tfilename1."' where galleryID = '".$viewID."'") or die(ets_db_error());
            }
            
            $tfilename2 = $_FILES['galleryImage2']['name'];
            $targetthumb_path2 = DIR_FS_WORK_PATH.$_POST['workID'].'/'.$tfilename2;
            move_uploaded_file($_FILES["galleryImage2"]["tmp_name"],$targetthumb_path2);
            if(!empty($tfilename2))
            {
                ets_db_query("Update gallery set galleryImage2 = '".$tfilename2."' where galleryID = '".$viewID."'") or die(ets_db_error());
            }
            return true;
        }else{
            echo "Error in Inserting Project..";
            ets_db_query($sql) or die(ets_db_error());
        }
    }

    function editForm()
    {
        $sql = "select * from  gallery where galleryID ='" . $_REQUEST['galleryID'] . "'";
        $qry = ets_db_query($sql) or die(ets_db_error() . $sql);
        if (ets_db_num_rows($qry) > 0) {
            $rs = ets_db_fetch_array($qry);
            $form = new Form("editForm");
            $form->configure(array(
                "prevent" => array("bootstrap", "jQuery"),
                "view" => new View_SideBySide
            ));
            $status = array("E" => "Enabled", "D" => "Disabled");

            $form->addElement(new Element_HTML("<legend>Video Section</legend>"));
            $form->addElement(new Element_Hidden("controller", "work"));
            $form->addElement(new Element_Hidden("action", "workfont"));
            $form->addElement(new Element_Hidden("subaction", "edit"));
            $form->addElement(new Element_Hidden("galleryID", $_REQUEST['galleryID']));
            $form->addElement(new Element_Hidden("productID",$_REQUEST['productID']));
            $form->addElement(new Element_Hidden("prevImage", $rs['galleryImage']));
            $form->addElement(new Element_Hidden("prevImage1", $rs['galleryImage1']));
            $form->addElement(new Element_Hidden("prevImage2", $rs['galleryImage2']));


            if ($rs["galleryImage"] != "") {
                $thumbnail_path = DIR_WS_WORK_PATH . $_REQUEST['productID'] . '/' . $rs["galleryImage"];
                $form->addElement(new Element_HTML('<img src="'.$thumbnail_path.'" width="30%" height="30%" ">'));
                $form->addElement(new Element_Hidden("viewImage", $rs["galleryImage"]));
            }
            
            $form->addElement(new Element_File("Font Image 1", "galleryImage", array(
                "placeholder" => "Brand Image"
            )));
            
            if ($rs["galleryImage1"] != "") {
                $thumbnail_path1 = DIR_WS_WORK_PATH . $_REQUEST['productID'] . '/' . $rs["galleryImage1"];
                $form->addElement(new Element_HTML('<img src="'.$thumbnail_path1.'" width="30%" height="30%" ">'));
                $form->addElement(new Element_Hidden("viewImage", $rs["galleryImage1"]));
            }
           
            $form->addElement(new Element_File("Font Image 2 ", "galleryImage1", array(
                "placeholder" => "Brand Image"
            )));
            
             if ($rs["galleryImage2"] != "") {
                $thumbnail_path2 = DIR_WS_WORK_PATH . $_REQUEST['productID'] . '/' . $rs["galleryImage2"];
                $form->addElement(new Element_HTML('<img src="'.$thumbnail_path2.'" width="30%" height="30%" ">'));
                $form->addElement(new Element_Hidden("viewImage", $rs["galleryImage2"]));
            }
            $form->addElement(new Element_File("Font Image 3", "galleryImage2", array(
                "placeholder" => "Brand Image"
            )));

            $form->addElement(new Element_HTML('<label class="control-label">Last Sort Order : ' . get_last_sortorder('gallery') . '</label><br><br>'));
            $form->addElement(new Element_Textbox("Sortorder:", "sortorder", array(
                "required" => 1,
                "value" => $rs['sortorder']
            )));
            $form->addElement(new Element_Select("Status:", "status", $status, array(
                "required" => 1,
                "value" => $rs['status']
            )));
            $form->addElement(new Element_HTML('<hr>'));
            $form->addElement(new Element_Button);
            $form->addElement(new Element_Button("Cancel", "button", array(
                "onclick" => "history.go(-1);"
            )));
            $form->addElement(new Element_HTML('<hr>'));
            $form->render();
        } else {
            echo "No Found...";
        }
    }

    function edit()
    {
        $viewID = $_POST['galleryID'];
        $oldproImg = $_POST['prevImage'];
        $oldproImg1 = $_POST['prevImage1'];
        $oldproImg2 = $_POST['prevImage2'];

        $username = $_SESSION['fname'];

        /* Thumbnail Image */
        if ($_FILES['galleryImage']['name'] == '') {
            $tfilename = $_POST['prevImage'];
        }
        else{
            $tfilename = $_FILES['galleryImage']['name'];
        }
        if ($_FILES['galleryImage1']['name'] == '') {
            $tfilename1 = $_POST['prevImage1'];
        }
        else{
            $tfilename1 = $_FILES['galleryImage1']['name'];
        }
        if ($_FILES['galleryImage2']['name'] == '') {
            $tfilename2 = $_POST['prevImage2'];
        }
        else{
            $tfilename2 = $_FILES['galleryImage2']['name'];
        }

        $sql = "update gallery set 
		username = '" . $username . "',
		createdate = now(),
		modifieddate = now(),
		galleryTitle = '" . ets_db_real_escape_string($_POST['galleryTitle']) . "',
		galleryImage = '" . $tfilename . "',
		galleryImage1 = '" . $tfilename1 . "',
		galleryImage2 = '" . $tfilename2 . "',
		sortorder = '" . $_POST['sortorder'] . "',
		status = '" . $_POST['status'] . "',
		remote_ip ='" . $_SERVER['REMOTE_ADDR'] . "'
		where galleryID = '" . $viewID . "'
		";
        if (ets_db_query($sql)) {

            $viewID = $_POST['galleryID'];

            $path = DIR_FS_WORK_PATH.$_REQUEST['productID'].'/';
            if (!file_exists($path)) {
                mkdir($path);
                exec("chown " . FILEUSER . FILEUSER . " " . $path);
                exec("chmod 0777 " . $path);
            }

            if ($_FILES['galleryImage']['name'] != '') {
                $target_path = DIR_FS_WORK_PATH . $_REQUEST['productID'] . '/' . $tfilename;
                @unlink(DIR_FS_WORK_PATH . $_REQUEST['pTypeID'] . '/' . $oldproImg);
                move_uploaded_file($_FILES["galleryImage"]["tmp_name"], $target_path);
            }
            if ($_FILES['galleryImage1']['name'] != '') {
                $target_path1 = DIR_FS_WORK_PATH . $_REQUEST['productID'] . '/' . $tfilename1;
                @unlink(DIR_FS_WORK_PATH . $_REQUEST['pTypeID'] . '/' . $oldproImg1);
                move_uploaded_file($_FILES["galleryImage"]["tmp_name"], $target_path1);
            }
            if ($_FILES['galleryImage2']['name'] != '') {
                $target_path2 = DIR_FS_WORK_PATH . $_REQUEST['productID'] . '/' . $tfilename2;
                @unlink(DIR_FS_WORK_PATH . $_REQUEST['pTypeID'] . '/' . $oldproImg2);
                move_uploaded_file($_FILES["galleryImage"]["tmp_name"], $target_path2);
            }
            
            return true;
        } else {
            die(ets_db_error());
            echo "Error in updating project..";
        }

    }

    function listData()
    {
        
        ?>
        <script>
            $(document).ready(function () {
                var listURL = "helperfunc/workfontList.php?workID=<?php echo $_REQUEST['workID']; ?>";
                var oTable = $('#projectviewslist').dataTable({
                    "ajax": listURL
                });

                $(window).bind('resize', function () {
                    oTable.fnAdjustColumnSizing();
                });
                $('.esortorder').editable({params: {"tblName": "projectviews"}});
            });
        </script>
        <?php
        $subvar = 'onclick="return confirmSubmit();"';
        echo '<div id="no-more-tables">
	<table class="table table-striped table-bordered dataTable" id="projectviewslist" style="width:100%;">
		<thead>
		<tr>
			<th>Id</th>
			<th>Font Image 1</th>
			<th>Font Image 2</th>
			<th>Font Image 3</th>
			<th width="60">Status</th>
			<th width="60">SortOrder</th>
			<th width="300">Action</th>
		</tr>
		</thead>
		<tbody></tbody>	
		<tfoot>	
		<tr>
			<th>Id</th>
			<th>Font Image 1</th>
			<th>Font Image 2</th>
			<th>Font Image 3</th>
			<th width="60">Status</th>
			<th width="60">SortOrder</th>
			<th width="300">Action</th>
		</tr>
		</tfoot>
	</table></div>';
        ?>
        <script>
            $('.table').editable({
                selector: 'a.estatus,a.esortorder',
                params: {"tblName": "gallery"},
                value: 1,
                source: [{value: 'E', text: 'Active'}, {value: 'D', text: 'Disabled'}]
            });
        </script>
        <?php
    }

    function delete()
    {
        $viewID = $_GET['galleryID'];
        $sql = ets_db_query("Select galleryImage from gallery where galleryID= '". $viewID ."'") or die(ets_db_error().$sql);
        $name = ets_db_fetch_array($sql);
        @unlink(DIR_FS_WORK_PATH . $_REQUEST['workID'].'/'.$name['galleryImage']);
        $delsql = "Delete from gallery where galleryID = '" . $_GET['galleryID'] . "'";
        $delqry = ets_db_query($delsql) or die(ets_db_error() . $delsql);
        return true;
    }
}

?>
