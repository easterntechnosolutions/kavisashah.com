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

class products
{
    function addForm()
    {
        $form = new Form("addFrm");
        $form->configure(array(
            "prevent" => array("bootstrap", "jQuery"),
            "view" => new View_SideBySide
        ));
        $status = array("E" => "Enabled", "D" => "Disabled");
        $pstatus = array("Residential" => "Residential", "Kitchen" => "Kitchen", "Commercial" => "Commercial", "Sample Flats" => "Sample Flats", "3D Commercial" => "3D Commercial", "3D Residential" => "3D Residential");
        $layoutplan = array("Yes" => "Yes", "No" => "No");
        $haswhy = array("No" => "No", "Yes" => "Yes");

        $form->addElement(new Element_HTML("<legend>New Service</legend>"));
        $form->addElement(new Element_Hidden("controller", "products"));
        $form->addElement(new Element_Hidden("action", "products"));
        $form->addElement(new Element_Hidden("subaction", "add"));
        $form->addElement(new Element_Hidden("createdate"));
        $form->addElement(new Element_Hidden("sortorder", "1"));
        $form->addElement(new Element_Hidden("status", "E"));


        /* Actual Form Fields Started */
        $pTypeID = getproductTypelist();
        $query = 'select pTypeID, pTypeTitle, pTypeParent from producttype ORDER BY pTypeID';
        $result = ets_db_query($query);
        $menu_array = array();
        while ($row = ets_db_fetch_array($result)) {
            $menu_array[$row['pTypeID']] = $row;
        }

        $typeParents = '<select name="pTypeID" id="mainpages" class="span3"><option value="0">Service Type Parent</option>' . display_parent_items($menu_array, 'pTypeParent', 'pTypeID', 'pTypeTitle', $_REQUEST['pTypeID']) . '</select>';


        $form->addElement(new Element_HTML('
			<div class="control-group"><label class="control-label" for="frmedit-element-5">Type Parent:</label><div class="controls">' . $typeParents . '</div></div>
		'));

        $form->addElement(new Element_Textbox("Service Name:", "productTitle", array(
            "required" => 1,
            "placeholder" => "Service Name"
        )));


        $form->addElement(new Element_TinyMCE("Service Description:", "productDescr", array(
            "placeholder" => "Service Description"
        )));

        $form->addElement(new Element_TinyMCE("Service Specification:", "productSpecifi", array(
            "required" => 1,
            "value" => stripcslashes($rs['productSpecifi'])
        )));

       /* $form->addElement(new Element_TinyMCE("Service Description:", "productDescr", array(
            "placeholder" => "Service Description"
        )));*/

        $form->addElement(new Element_HTML('<label>Note : width= 264px , height= 200px require jpg file</label>'));
        $form->addElement(new Element_File("Service Thumbnail:", "productThumbnail", array(
            "placeholder" => "Service Thumbnail"
        )));
        $form->addElement(new Element_HTML('<label>Note : width= 264px , height= 200px require jpg file</label>'));
        $form->addElement(new Element_File("Project Detail:", "productDetail", array(
            "placeholder" => "Project Detail"
        )));

        /* $form->addElement(new Element_File("Project Detail Image (445px X 380px):", "productShareImage", array(
         "placeholder" => "Project Detail Image"
             )));*/

        $form->addElement(new Element_HTML('<label class="control-label">Last Sort Order : ' . get_last_sortorder('products') . '</label><br><br>'));
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
        $createdate = date("Y-m-d");

        $product_slug = pro_SeoSlug(stripslashes($_POST['productTitle']));

        $sql = "Insert into products set 
		username = '" . $username . "',
		createdate = now(),
		modifieddate = now(),
		productTitle = '" . ets_db_real_escape_string($_POST['productTitle']) . "',		
		productDescr = '" . ets_db_real_escape_string($_POST['productDescr']) . "',
		productSpecifi = '" . ets_db_real_escape_string($_POST['productSpecifi']) . "',
		pTypeID = '" . $_POST['pTypeID'] . "',
		siteaddress = '-',
		productThumbnail = '" . $_FILES["productThumbnail"]["name"] . "',	
		productDetail = '" . $_FILES["productDetail"]["name"] . "',			
		productShareImage = '" . $_FILES["productShareImage"]["name"] . "',	
		sortorder = '" . $_POST['sortorder'] . "',
		status = '" . $_POST['status'] . "',
		hasmasterplan = '" . $_POST['hasmasterplan'] . "',
		remote_ip ='" . $_SERVER['REMOTE_ADDR'] . "'
		";

        if (ets_db_query($sql)) {

            $productID = ets_db_insert_id();
            $title = preg_replace("![^a-z0-9]+!i", "-", trim($_POST['productTitle']));
            $title = $productID . '-' . str_replace(' ', '-', trim($title));

            $typeParent = getproductTypeParent($_POST['pTypeID']);
            if ($typeParent > 0) {
                $parent = getfldValue('producttype', 'pTypeID', $typeParent, 'pTypeTitle');
                $seo_mod = strtolower(str_replace(" ", "-", $parent)) . "/" . strtolower(str_replace(" ", "-", getfldValue("producttype", "pTypeID", $_POST['pTypeID'], "pTypeTitle")));
            } else {
                $seo_mod = strtolower(str_replace(" ", "-", getfldValue("producttype", "pTypeID", $_POST['pTypeID'], "pTypeTitle")));
            }
            $seo_mod = str_replace("---", "-", $seo_mod);
//			echo $seo_mod;
//			exit;
            insSeoLnk($productID, $seo_mod, $product_slug);

            $path = DIR_FS_PROJECT_PATH . $productID . '/';


            if (!file_exists($path)) {
                mkdir($path);
                exec("chown " . FILEUSER . FILEUSER . " " . $path);
                exec("chmod 0777 " . $path);
            }


            $image = new ImageUploader\ProUpload;

            $targetshare_path = DIR_FS_PROJECT_PATH . $productID . '/' . $title . '_share.jpg';
            $sfilename = $title . '_share.jpg';
            move_uploaded_file($_FILES["productShareImage"]["tmp_name"], $targetshare_path);
            if (!empty($sfilename)) {
                ets_db_query("Update products set productShareImage = '" . $sfilename . "' where productID = '" . $productID . "'") or die(ets_db_error());

            }


            $tfilename = $title . '_thumb.jpg';
            $targetthumb_path = DIR_FS_PROJECT_PATH . $productID . '/' . $tfilename;

            move_uploaded_file($_FILES["productThumbnail"]["tmp_name"], $targetthumb_path);
            if (!empty($tfilename)) {

                ets_db_query("Update products set productThumbnail = '" . $tfilename . "' where productID = '" . $productID . "'") or die(ets_db_error());
                /*$mresult = $image->shrink(array("height"=>480, "width"=>480),true)
    				->makecopy('shrink',$targetthumb_path,DIR_FS_PROJECT_PATH.$productID.'/'.$tfilename.'_mobile.jpg');*/
            }

            $pfilename = $title . '_thumb.jpg';
            $targetdetail_path = DIR_FS_PROJECT_PATH . $productID . '/' . $pfilename;

            move_uploaded_file($_FILES["productDetail"]["tmp_name"], $targetdetail_path);
            if (!empty($pfilename)) {

                ets_db_query("Update products set productDetail = '" . $pfilename . "' where productID = '" . $productID . "'") or die(ets_db_error());
                /*$mresult = $image->shrink(array("height"=>480, "width"=>480),true)
    				->makecopy('shrink',$targetthumb_path,DIR_FS_PROJECT_PATH.$productID.'/'.$tfilename.'_mobile.jpg');*/
            }


            return true;
        } else {
            echo "Error in Inserting Service..";
            ets_db_query($sql) or die(ets_db_error());
        }
    }

    function editForm()
    {
        $sql = "select * from  products where productID ='" . $_REQUEST['productID'] . "'";
        $qry = ets_db_query($sql) or die(ets_db_error() . $sql);
        if (ets_db_num_rows($qry) > 0) {
            $rs = ets_db_fetch_array($qry);
            $form = new Form("editForm");
            $form->configure(array(
                "prevent" => array("bootstrap", "jQuery"),
                "view" => new View_SideBySide
            ));
            $status = array("E" => "Enabled", "D" => "Disabled");
            $pstatus = array("Residential" => "Residential", "Kitchen" => "Kitchen", "Commercial" => "Commercial", "Sample Flats" => "Sample Flats", "3D Commercial" => "3D Commercial", "3D Residential" => "3D Residential");
            $layoutplan = array("Yes" => "Yes", "No" => "No");
            $haswhy = array("No" => "No", "Yes" => "Yes");

            $form->addElement(new Element_HTML("<legend>Edit Service</legend>"));
            $form->addElement(new Element_Hidden("controller", "products"));
            $form->addElement(new Element_Hidden("action", "products"));
            $form->addElement(new Element_Hidden("subaction", "edit"));
            $form->addElement(new Element_Hidden("productID", $_REQUEST['productID']));
            //$form->addElement(new Element_Hidden("pTypeID",$_REQUEST['pTypeID']));
            $form->addElement(new Element_Hidden("prevImage", $rs['productImage']));

            /* Actual Form Fields Started */
            $pTypeID = getproductTypelist();
            $query = 'select pTypeID, pTypeTitle, pTypeParent from producttype ORDER BY pTypeID';
            $result = ets_db_query($query);
            $menu_array = array();
            while ($row = ets_db_fetch_array($result)) {
                $menu_array[$row['pTypeID']] = $row;
            }

            $typeParents = '<select name="pTypeID" id="mainpages" class="span3"><option value="0">Service Type Parent</option>' . display_parent_items($menu_array, 'pTypeParent', 'pTypeID', 'pTypeTitle', $_REQUEST['pTypeID']) . '</select>';

            $form->addElement(new Element_HTML('
			<div class="control-group"><label class="control-label" for="frmedit-element-5">Type Parent:</label><div class="controls">' . $typeParents . '</div></div>
		'));

            $form->addElement(new Element_Textbox("Service Name:", "productTitle", array(
                "required" => 1,
                "value" => stripcslashes($rs['productTitle'])
            )));

            $form->addElement(new Element_TinyMCE("Service Description:", "productDescr", array(
                "required" => 1,
                "value" => stripcslashes($rs['productDescr'])
            )));

            $form->addElement(new Element_TinyMCE("Service Specification:", "productSpecifi", array(
                "required" => 1,
                "value" => stripcslashes($rs['productSpecifi'])
            )));

            if ($rs["productThumbnail"] != "") {
                $thumbnail_path = DIR_WS_PROJECT_PATH . $_REQUEST['productID'] . '/' . $rs["productThumbnail"];
                $form->addElement(new Element_HTML('<a href="' . $thumbnail_path . '" target="_blank">View Thumbnail</a><br>'));
                $form->addElement(new Element_Hidden("OldproductThumbnail", $rs["productThumbnail"]));
            }
            $form->addElement(new Element_HTML('<label>Note : width= 264px , height= 200px require jpg file</label>'));
            $form->addElement(new Element_File("Project Thumbnail:", "productThumbnail", array(
                "placeholder" => "Project Thumbnail"
            )));
            if ($rs["productDetail"] != "") {
                $detail_path = DIR_WS_PROJECT_PATH . $_REQUEST['productID'] . '/' . $rs["productDetail"];
                $form->addElement(new Element_HTML('<a href="' . $detail_path . '" target="_blank">View Product detail Image</a><br>'));
                $form->addElement(new Element_Hidden("OldproductDetail", $rs["productDetail"]));
            }
            $form->addElement(new Element_HTML('<label>Note : width= 264px , height= 200px require jpg file</label>'));
            $form->addElement(new Element_File("Project Detail:", "productDetail", array(
                "placeholder" => "Project Detail"
            )));

            /*if($rs["productShareImage"] != "")
            {
                $thumbnail_path = DIR_WS_PROJECT_PATH.$_REQUEST['productID'].'/'.$rs["productShareImage"];
                $form->addElement(new Element_HTML('<a href="'.$thumbnail_path.'" target="_blank">View Image</a>'));
                $form->addElement(new Element_Hidden("OldproductShareImage",$rs["productShareImage"]));
            }
            $form->addElement(new Element_File("Project Detail Image (445px X 380px):", "productShareImage", array(
            "placeholder" => "Project Detail Image"
            )));*/

            $form->addElement(new Element_HTML('<label class="control-label">Last Sort Order : ' . get_last_sortorder('products') . '</label><br><br>'));
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
        $productID = $_POST['productID'];
        $title = preg_replace("![^a-z0-9]+!i", "-", trim($_POST['productTitle']));
        $title = $productID . '-' . str_replace(' ', '-', trim($title));

        $username = $_SESSION['fname'];
        $createdate = date("Y-m-d");

        /* Thumbnail Image */
        if ($_FILES['productThumbnail']['name'] == '') {
            $tfilename = $_POST['OldproductThumbnail'];
        } else {
            $tfilename = $title . '_thumb.jpg';
        }

        /*project detail image*/
        if ($_FILES['productDetail']['name'] == '') {
            $pfilename = $_POST['OldproductDetail'];
        } else {
            $pfilename = $title . '_detail.jpg';
        }

        /* Share Image */
        if ($_FILES['productShareImage']['name'] == '') {
            $sfilename = $_POST['OldproductShareImage'];
        } else {
            $sfilename = $title . '_share.jpg';
        }


        $product_slug = pro_SeoSlug(stripslashes($_POST['productTitle']));
        $sql = "update products set 
		username = '" . $username . "',
		createdate = now(),
		productTitle = '" . ets_db_real_escape_string($_POST['productTitle']) . "',
		productDescr = '" . ets_db_real_escape_string($_POST['productDescr']) . "',
		productSpecifi = '" . ets_db_real_escape_string($_POST['productSpecifi']) . "',
		pTypeID = '" . $_POST['pTypeID'] . "',
		siteaddress = '-',
		productThumbnail = '" . $tfilename . "',
		productDetail = '" . $pfilename . "',
		productShareImage = '" . $sfilename . "',
		sortorder = '" . $_POST['sortorder'] . "',
		hasmasterplan = '" . $_POST['hasmasterplan'] . "',
		status = '" . $_POST['status'] . "',
		remote_ip ='" . $_SERVER['REMOTE_ADDR'] . "'
		where productID = '" . $_POST['productID'] . "'
		";
        if (ets_db_query($sql)) {

            $productID = $_POST['productID'];

            $path = DIR_FS_PROJECT_PATH . $productID . '/';
            if (!file_exists($path)) {
                mkdir($path);
                exec("chown " . FILEUSER . FILEUSER . " " . $path);
                exec("chmod 0777 " . $path);
            }
            $image = new ImageUploader\ProUpload;

            if ($_FILES['productThumbnail']['name'] != '') {
                $target_path = DIR_FS_PROJECT_PATH . $productID . '/' . $tfilename;
                move_uploaded_file($_FILES["productThumbnail"]["tmp_name"], $target_path);
                $mresult = $image->shrink(array("height" => 480, "width" => 480), true)
                    ->makecopy('shrink', $target_path, DIR_FS_PROJECT_PATH . $productID . '/' . $tfilename . '_mobile.jpg');
            }


            if ($_FILES['productDetail']['name'] != '') {
                $target_path = DIR_FS_PROJECT_PATH . $productID . '/' . $pfilename;
                move_uploaded_file($_FILES["productDetail"]["tmp_name"], $target_path);
                $mresult = $image->shrink(array("height" => 480, "width" => 480), true)
                    ->makecopy('shrink', $target_path, DIR_FS_PROJECT_PATH . $productID . '/' . $pfilename . '_mobile.jpg');
            }

            if ($_FILES['productShareImage']['name'] != '') {
                $target_path = DIR_FS_PROJECT_PATH . $productID . '/' . $sfilename;
                move_uploaded_file($_FILES["productShareImage"]["tmp_name"], $target_path);
            }

            $typeParent = pro_SeoSlug(getproductTypeTitle($_POST['pTypeID']));
            $seo_mod = getSeoModule($typeParent, $_POST['pTypeID']) . "/" . $typeParent;

            $seo_mod = str_replace("---", "-", $seo_mod);
            if ($_POST['productID'] != '25') {
                updSeoLnk($productID, $seo_mod, $product_slug);
            }

            return true;
        } else {
            die(ets_db_error());
            echo "Error in updating Service..";
        }

    }

    function listData()
    {

        $form = new Form("addFrm");
        $form->configure(array(
            "prevent" => array("bootstrap", "jQuery"),
            "view" => new View_Inline
        ));

        $q = "select * from products where status = 'E' and pTypeID = '" . $_REQUEST['pTypeID'] . "'";
        $r = ets_db_query($q);
        $group[''] = 'Select Service';

        while ($arr = ets_db_fetch_array($r)) {
            $group[$arr['productID']] = $arr['productTitle'];
        }


        $form->addElement(new Element_Hidden("controller", "products"));
        $form->addElement(new Element_Hidden("action", "products"));
        $form->addElement(new Element_Hidden("subaction", "listData"));

        $form->addElement(new Element_HTML('<span id = "group">'));
        if (isset($_POST['group']) && $_POST['group'] != "") {
            $grp = $_POST['group'];
        } else {
            $grp = '';
        }

        $form->addElement(new Element_Select("Project :", "group", $group, array(
            "id" => "group",
            "value" => $grp
        )));


        $form->addElement(new Element_HTML('</span>'));
        $form->addElement(new Element_Button);
        $form->render();

        $whr = "";
        $disQry = "SELECT * from products where 1=1 and pTypeID = '" . $_REQUEST['pTypeID'] . "'";

        if (!empty($_REQUEST['group'])) {
            $grp = $_REQUEST['group'];
            $whr .= ' AND productID = "' . $grp . '"';
        }
        $disQry .= $whr;


        echo '<br>';

        if (isset($_SESSION['listSQL'])) {
            unset($_SESSION['listSQL']);
        }

        $_SESSION['listSQL'] = $disQry;
        ?>
        <script>
            $(document).ready(function () {
                var listURL = "helperfunc/productsList.php?pTypeID=<?php echo $_REQUEST['pTypeID']; ?>";
                var oTable = $('#productslist').dataTable({
                    "ajax": listURL
                });

                $(window).bind('resize', function () {
                    oTable.fnAdjustColumnSizing();
                });
                $('.esortorder').editable({params: {"tblName": "products"}});
            });
        </script>
        <?php
        $subvar = 'onclick="return confirmSubmit();"';
        echo '<div id="no-more-tables">
	<table class="table table-striped table-bordered dataTable" id="productslist" style="width:100%;">
		<thead>
		<tr>
			<th>Id</th>
			<th>Type</th>
			<th>Name</th>
			<th>Service Status</th>
			<th width="60">Status</th>
			<th width="60">SortOrder</th>
			<th width="300">Action</th>
		</tr>
		</thead>
		<tbody></tbody>	
		<tfoot>	
		<tr>
			<th>Id</th>
			<th>Type</th>
			<th>Name</th>
			<th>Service Status</th>
			<th>Status</th>
			<th>SortOrder</th>
			<th width="300">Action</th>
		</tr>
		</tfoot>
	</table></div>';
        ?>
        <script>
            $('.table').editable({
                selector: 'a.estatus,a.esortorder',
                params: {"tblName": "products"},
                value: 1,
                source: [{value: 'E', text: 'Active'}, {value: 'D', text: 'Disabled'}]
            });
        </script>
        <?php
    }

    function delete()
    {
        $delsql = "Delete from products where productID = '" . $_GET['productID'] . "'";
        $delqry = ets_db_query($delsql) or die(ets_db_error() . $delsql);
        return true;
    }
}

?>
