<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
$qry = "Select * from work where workID = '" . $module_id . "' and status = 'E' order by Project_Listing_Page_Sortorder asc";
// echo $qry;
$res = ets_db_query($qry)or die();

while ($arr = ets_db_fetch_array($res)) {

    $id = $arr['workID'];
    $page_type = $arr['pagetype'];
    $work_title = $arr['work_title'];
    $branding_title = $arr['branding_title'];
    $branding_brand = $arr['branding_brand'];
    $branding_desc = $arr['branding_desc'];
    $branding_bold = $arr['branding_bold'];
    $work_main_title = $arr['work_main_title'];
    $specification = $arr['specification'];
    $user_sur = $arr['user_sur'];
    $competitive_analysis = $arr['competitive_analysis'];
    $user_flows = $arr['user_flows'];
    $user_flows_des = $arr['user_flows_des'];
    $branding = $arr['branding'];
    $application_name = $arr['application_name'];
    $prototype = $arr['prototype'];
    $project_color = $arr['project_color'];
    $sector = $arr['Sector'];

    $url = get_pageseo_url($arr['workID'], 'works');

    $a = $arr['Banner_image'];
    $banner_image = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Banner_image'];

    $il_detail = $arr['Project_detail_image'];
    $detail_image = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Project_detail_image'];

    $i1 = $arr['Image_1'];
    $image1 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_1'];

    $i2 = $arr['Image_2'];
    $image2 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_2'];

    $i3 = $arr['Image_3'];
    $image3 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_3'];

    $i4 = $arr['Image_4'];
    $image4 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_4'];

    $i5 = $arr['Image_5'];
    $image5 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_5'];

    $i6 = $arr['Image_6'];
    $image6 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_6'];

    $i7 = $arr['Image_7'];
    $image7 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_7'];

    $i8 = $arr['Image_8'];
    $image8 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_8'];

    $i9 = $arr['user_pdf'];
    $user_pdf = DIR_WS_PDF_PATH . $arr['workID'] . "/" . $arr['user_pdf'];

    $i10 = $arr['competitive_pdf'];
    $competitive_pdf = DIR_WS_PDF_PATH . $arr['workID'] . "/" . $arr['competitive_pdf'];

    $i11 = $arr['user_flow_pdf'];
    $user_flow_pdf = DIR_WS_PDF_PATH . $arr['workID'] . "/" . $arr['user_flow_pdf'];

    $i12 = $arr['Image_9'];
    $image9 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_9'];

    $i13 = $arr['Image_10'];
    $image10 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_10'];

    $i14 = $arr['Image_11'];
    $image11 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_11'];

    $i15 = $arr['Image_12'];
    $image12 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_12'];

    $i16 = $arr['Image_13'];
    $image13 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_13'];

    $i17 = $arr['Image_14'];
    $image14 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_14'];

    $i18 = $arr['Image_15'];
    $image15 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_15'];

    $i19 = $arr['Image_16'];
    $image16 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_16'];

 $i20 = $arr['Image_17'];
    $image17 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_17'];

    $i21 = $arr['Image_18'];
    $image18 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_18'];

    $i22 = $arr['Image_19'];
    $image19 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_19'];


    $i23 = $arr['Image_20'];
    $image20 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_20'];

    $i24 = $arr['Image_21'];
    $image21 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_21'];

    $i25 = $arr['Image_22'];
    $image22 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_22'];
    
    $i27 = $arr['Image_23'];
    $image23 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_23'];
    
    $i28 = $arr['Image_24'];
    $image24 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_24'];
    
    $i29 = $arr['Image_25'];
    $image25 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['Image_25'];
    
     $i26 = $arr['video_1'];
     $video_1 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['video_1'];
     
     $i30 = $arr['video_2'];
     $video_2 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['video_2'];

     $i31 = $arr['video_3'];
     $video_3 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['video_3'];

    ?>

    <!--dektop slider-->


    <?php

    if ($page_type == 'M') {
        ?>


        <?php
        if ($a != '') {
            ?>
            <a href="#hook" class="scroll-down">
                <div class="section-scroll" style="transform:matrix(1,0,0,1,0,0)">
                    <div class="mouse">
                        <div class="wheel"></div>
                    </div>
                </div>
            </a>

            <div id="working-top" class="hidden-xs">
            <div class="container-fluid no-padding">
            <div class="col-sm-12 no-padding">
            <div class="col-sm-6 inner-block"
                 style="background-image: url('<?php echo $banner_image; ?>')"></div>
        <?php } ?>
        <div class="col-sm-6" style="float:right;top:10%">
            <div class="work-text-block">
                <div class="work-text wow fadeInUp" data-wow-delay="2s">

                    <h3 class="font-i"><?php echo $work_main_title; ?></h3>
                    <span class="iso"><?php echo $application_name; ?></span>
                    <div class="mob-side">

                        <?php echo $specification; ?>
                    </div>
                    <div>
                        <?php if  ($prototype != ''){
                        ?>
                        
                        <a href="<?php echo $prototype; ?>" target="_blank"
                           class="btn-prototype" style="border: 1px solid <?php echo $project_color; ?>;">Prototype</a>
                           
                            <?php } ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="phone-container">
            <div class="phone-cover" style="background-image: url('<?php echo $image9; ?>');">
                <div class="phone-shape">
                    <div class="phone-screen wow fadeInDown" data-wow-delay="0.5s">
                        <!-- Slider -->
                        <div class="swiper-container swiper-slider">
                            <div class="swiper-wrapper">
                                <?php
                                $sql = "select * from gallery where productID = '" . (int)$module_id . "' and status = 'E' and isFront = 'E' order by sortorder";
                                $sqlquery = ets_db_query($sql);
                                $i = 0;
                                while ($rs = ets_db_fetch_array($sqlquery)) {
                                    $galImg = DIR_WS_PROJECT_PATH . $module_id . "/" . $rs['galleryImage'];
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="event-header"><img data-src="<?php echo $galImg; ?>" class="lazyload"></div>
                                    </div>
                                <?php } ?>

                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>

        </div>

        </div>

        <!--mobile slider-->
        <div class="visible-xs">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-sm-6">
                        <div class="work-text wow fadeInUp" data-wow-delay="0.2s">
                            <h3 class="font-i"><?php echo $work_main_title; ?></h3>
                            <span class="iso"><?php echo $application_name; ?></span>
                            <div class="mob-side">
                                <?php echo $specification; ?>
                            </div>
                            <div>
                                 <?php if ($prototype != '') {
                                    ?>
                                <a href="<?php echo $prototype; ?>" target="_blank" class="btn-prototype">Prototype</a>
                                 <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 mobile-card wow fadeInUp mob-full" data-wow-delay="0.4s">
                        <div class="swiper-container swiper-slider">
                            <div class="swiper-wrapper">

                                <?php
                                $sql = "select * from gallery where productID = '" . (int)$module_id . "' and status = 'E' and isFront = 'E' order by sortorder";
                                $sqlquery = ets_db_query($sql);
                                $i = 0;
                                while ($rs = ets_db_fetch_array($sqlquery)) {
                                    $galImg = DIR_WS_PROJECT_PATH . $module_id . "/" . $rs['galleryImage'];
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="event-header"><img data-src="<?php echo $galImg; ?>" class="lazyload"></div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="work-details clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                        <h3>USER SURVEYS & USER PERSONAS</h3>
                        <?php echo $user_sur; ?>

                        <?php
                        if ($i9 != '') {
                            ?>
                            <a href="<?php echo $user_pdf; ?>" class="fancybox" target="_blank">View User Surveys</a>
                        <?php } ?>
                    </div>
                    <div class="col-sm-6 col-sm-offset-6 wow fadeInUp" data-wow-delay="0.4s">
                        <h3>COMPETITIVE ANALYSIS</h3>

                        <?php echo $competitive_analysis; ?>


                        <?php
                        if ($i10 != '') {
                            ?>
                            <a href="<?php echo $competitive_pdf; ?>" class="fancybox" target="_blank">View competitive
                                analysis </a>

                        <?php } ?>
                    </div>
                    <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                        <h3>BRANDING</h3>

                        <?php echo $branding; ?>

                    </div>
                </div>
                <div class="row branding wow fadeInUp" data-wow-delay="0.4s">
                    <div class="col-sm-4 right">
                        <?php
                        if ($i1 != '') {
                            ?>
                            <img data-src="<?php echo $image1; ?>" class="img-responsive lazyload">
                        <?php } ?>

                        <?php
                        if ($i2 != '') {
                            ?>
                            <img data-src="<?php echo $image2; ?>" class="img-responsive lazyload">
                        <?php } ?>

                        <?php
                        if ($i3 != '') {
                            ?>
                            <img data-src="<?php echo $image3; ?>" class="img-responsive lazyload">
                        <?php } ?>
                    </div>
                    <div class="col-sm-4 right">
                        <?php
                        if ($i4 != '') {
                            ?>

                            <img data-src="<?php echo $image4; ?>" class="img-responsive lazyload">
                        <?php } ?>

                        <?php
                        if ($i5 != '') {
                            ?>
                            <img data-src="<?php echo $image5; ?>" class="img-responsive lazyload">
                        <?php } ?>
                        <?php
                        if ($i6 != '') {
                            ?>

                            <img data-src="<?php echo $image6; ?>" class="img-responsive lazyload">
                        <?php } ?>
                    </div>
                    <div class="col-sm-4">

                        <?php
                        if ($i7 != '') {
                            ?>
                            <img data-src="<?php echo $image7; ?>" class="img-responsive lazyload">
                        <?php } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-6 wow fadeInUp" data-wow-delay="0.2s">
                        <h3>USER FLOWS & WIREFRAMES</h3>


                        <?php echo $user_flows; ?>

                        <?php
                        if ($i11 != '') {
                            ?>
                            <p>
                                <a href="<?php echo $user_flow_pdf; ?>" target="_blank" class="fancybox">View user
                                    flow</a>
                            </p>
                        <?php } ?>

                        <?php echo $user_flows_des; ?>
                        <br>
                        <br>
                        <div class="width:100%">

                            <?php
                            if ($i8 != '') {
                                ?>
                                <img data-src="<?php echo $image8; ?>" class="img-responsive lazyload">
                            <?php } ?>
                            <br>
                            <br>
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
                 <div class="next-previous mr-b">


                    <?php

                    /*Next Project*/
                    $ssql = "select * from work where workID = (select min(workID) from work where workID > '.$module_id.')";
                    $sql = "select workID from work where status='E' order by sortorder asc";
                    $qry = ets_db_query($ssql) or die(ets_db_error());
                    $res = ets_db_fetch_array($qry);
                    $next_id = $res['workID'];
                    
                    /*Previous Project*/
                    $ssql1 = "select * from work where workID = (select max(workID) from work where workID < '.$module_id.')";
                    $qry1 = ets_db_query($ssql1) or die(ets_db_error());
                    $res1 = ets_db_fetch_array($qry1);
                    $prev_id = $res1['workID'];

                    /*$sql = "select workID from work where status='E' order by sortorder asc";

                    $qry = ets_db_query($sql) or die(ets_db_error());
                    $company_arr = array();

                    while ($res = ets_db_fetch_array($qry)) {
                        array_push($company_arr, $res['workID']);
                    }


                    $current_index = array_search($module_id, $company_arr);

                    $length = count($company_arr);
                    //                        echo $current_index;
                    $prev = $current_index - 1;
                    $next = $current_index + 1;

                    $prev_id = $company_arr[$prev];
                    $next_id = $company_arr[$next];

                    //                        echo $prev;
                    if (empty($company_arr[$next])) { // Last Element in Array - Display First
                        $next_id = $company_arr[0];
//                            echo $next_id;
                    }

                    if (empty($company_arr[$prev])) { // First Element in Array - Display Last
                        $prev_id = $company_arr[$length - 1];
                    }*/


                    ?>

                    <a href="<?php echo HTTP_SERVER . WS_ROOT . get_pageseo_url1($prev_id, 'works'); ?>" class="pre">
                        PREVIOUS PROJECT
                    </a>
                    <a href="<?php echo HTTP_SERVER . WS_ROOT . get_pageseo_url1($next_id, 'works'); ?>" class="nxt">
                        NEXT PROJECT
                    </a>

                </div>
            </div>
        </div>


        <?php


    } elseif ($page_type == 'L') { ?>


        <?php
        if ($a != '') {
            ?>

            <a href="#hook" class="scroll-down">
                <div class="section-scroll" style="transform:matrix(1,0,0,1,0,0)">
                    <div class="mouse">
                        <div class="wheel"></div>
                    </div>
                </div>
            </a>

            <div id="working-top" class="hidden-xs">
            <div class="container-fluid no-padding">
            <div class="col-sm-12 no-padding full-height">
            <div class="col-sm-6 inner-dena"
                 style="background-image: url('<?php echo $banner_image; ?>')"></div>
        <?php } ?>


        <div class="col-sm-6" style="float:right;top:10%">
            <div class="work-text-block">
                <div class="work-text dena-work-text wow fadeInUp" data-wow-delay="2s">

                    <h3 class="font-i"><?php echo $work_main_title; ?></h3>
                    <span class="iso"><?php echo $application_name; ?></span>
                    <div class="mob-side">

                        <?php echo $specification; ?>
                    </div>
                    <div>
                        <a href="<?php echo $prototype; ?>" target="_blank"
                           class="btn-prototype">Prototype</a>

                    </div>
                </div>
            </div>
        </div>

        <div class="mac-container">
            <div class="mac-cover" style="background-image: url('<?php echo $image9; ?>');">
                <div class="mac-shape">
                    <div class="wow fadeInDown" data-wow-delay="0.5s">
                        <div class="mac-screen">
                            <!-- Slider -->
                            <div class="swiper-container swiper-slider">
                                <div class="swiper-wrapper">
                                    <?php
                                    $sql = "select * from gallery where productID = '" . (int)$module_id . "' and status = 'E' and isFront = 'E' order by sortorder";
                                    $sqlquery = ets_db_query($sql);
                                    $i = 0;
                                    while ($rs = ets_db_fetch_array($sqlquery)) {
                                        $galImg = DIR_WS_PROJECT_PATH . $module_id . "/" . $rs['galleryImage'];
                                        ?>
                                        <div class="swiper-slide">
                                            <div class="event-header"><img data-src="<?php echo $galImg; ?>" class="lazyload"></div>
                                        </div>
                                    <?php } ?>

                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination dena-dots"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>

        </div>

        </div>

        <!--mobile slider-->
        <div class="visible-xs">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-sm-6">
                        <div class="work-text wow fadeInUp" data-wow-delay="0.2s">
                            <h3 class="font-i"><?php echo $work_main_title; ?></h3>
                            <span class="iso"><?php echo $application_name; ?></span>
                            <div class="mob-side">
                                <?php echo $specification; ?>
                            </div>
                            <div>
                                <a href="<?php echo $prototype; ?>" target="_blank" class="btn-prototype">Prototype</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 mobile-card wow fadeInUp mob-full" data-wow-delay="0.4s">
                        <div class="swiper-container swiper-slider">
                            <div class="swiper-wrapper">

                                <?php
                                $sql = "select * from gallery where productID = '" . (int)$module_id . "' and status = 'E' and isFront = 'E' order by sortorder";
                                $sqlquery = ets_db_query($sql);
                                $i = 0;
                                while ($rs = ets_db_fetch_array($sqlquery)) {
                                    $galImg = DIR_WS_PROJECT_PATH . $module_id . "/" . $rs['galleryImage'];
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="event-header"><img data-src="<?php echo $galImg; ?>" class="lazyload"></div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="work-details clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                        <h3>USER SURVEYS & USER PERSONAS</h3>
                        <?php echo $user_sur; ?>

                        <?php
                        if ($i9 != '') {
                            ?>
                            <a href="<?php echo $user_pdf; ?>" class="fancybox" target="_blank">View User Surveys</a>
                        <?php } ?>
                    </div>
                    <div class="col-sm-6 col-sm-offset-6 wow fadeInUp" data-wow-delay="0.4s">
                        <h3>COMPETITIVE ANALYSIS</h3>

                        <?php echo $competitive_analysis; ?>


                        <?php
                        if ($i10 != '') {
                            ?>
                            <a href="<?php echo $competitive_pdf; ?>" class="fancybox" target="_blank">View competitive
                                analysis </a>

                        <?php } ?>
                    </div>
                    <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                        <h3>BRANDING</h3>

                        <?php echo $branding; ?>

                    </div>
                </div>
                <div class="row branding wow fadeInUp" data-wow-delay="0.4s">
                    <div class="col-sm-4 right">
                        <?php
                        if ($i1 != '') {
                            ?>
                            <img data-src="<?php echo $image1; ?>" class="img-responsive lazyload">
                        <?php } ?>

                        <?php
                        if ($i2 != '') {
                            ?>
                            <img data-src="<?php echo $image2; ?>" class="img-responsive lazyload">
                        <?php } ?>

                        <?php
                        if ($i3 != '') {
                            ?>
                            <img data-src="<?php echo $image3; ?>" class="img-responsive lazyload">
                        <?php } ?>
                    </div>
                    <div class="col-sm-4 right">
                        <?php
                        if ($i4 != '') {
                            ?>

                            <img data-src="<?php echo $image4; ?>" class="img-responsive lazyload">
                        <?php } ?>

                        <?php
                        if ($i5 != '') {
                            ?>
                            <img data-src="<?php echo $image5; ?>" class="img-responsive lazyload">
                        <?php } ?>
                        <?php
                        if ($i6 != '') {
                            ?>

                            <img data-src="<?php echo $image6; ?>" class="img-responsive lazyload">
                        <?php } ?>
                    </div>
                    <div class="col-sm-4">

                        <?php
                        if ($i7 != '') {
                            ?>
                            <img data-src="<?php echo $image7; ?>" class="img-responsive lazyload">
                        <?php } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-6 wow fadeInUp" data-wow-delay="0.2s">
                        <h3>USER FLOWS & WIREFRAMES</h3>


                        <?php echo $user_flows; ?>

                        <?php
                        if ($i11 != '') {
                            ?>
                            <p>
                                <a href="<?php echo $user_flow_pdf; ?>" target="_blank" class="fancybox">View user
                                    flow</a>
                            </p>
                        <?php } ?>

                        <?php echo $user_flows_des; ?>
                        <br>
                        <br>
                        <div class="width:100%">

                            <?php
                            if ($i8 != '') {
                                ?>
                                <img data-src="<?php echo $image8; ?>" class="img-responsive lazyload">
                            <?php } ?>
                            <br>
                            <br>
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
                 <div class="next-previous mr-b">


                    <?php

                        
                    /*Next Project*/
                    $ssql = "select * from work where workID = (select min(workID) from work where workID > '.$module_id.')";
                    $sql = "select workID from work where status='E' order by sortorder asc";
                    $qry = ets_db_query($ssql) or die(ets_db_error());
                    $res = ets_db_fetch_array($qry);
                    $next_id = $res['workID'];
                    
                    /*Previous Project*/
                    $ssql1 = "select * from work where workID = (select max(workID) from work where workID < '.$module_id.')";
                    $qry1 = ets_db_query($ssql1) or die(ets_db_error());
                    $res1 = ets_db_fetch_array($qry1);
                    $prev_id = $res1['workID'];
                        
                    /*$sql = "select workID from work where status='E' order by sortorder asc";

                    $qry = ets_db_query($sql) or die(ets_db_error());
                    $company_arr = array();

                    while ($res = ets_db_fetch_array($qry)) {
                        array_push($company_arr, $res['workID']);
                    }


                    $current_index = array_search($module_id, $company_arr);

                    $length = count($company_arr);
                    //                        echo $current_index;
                    $prev = $current_index - 1;
                    $next = $current_index + 1;

                    $prev_id = $company_arr[$prev];
                    $next_id = $company_arr[$next];*/

                    //                        echo $prev;
                   /* if (empty($company_arr[$next])) { // Last Element in Array - Display First
                        $next_id = $company_arr[0];
//                            echo $next_id;
                    }

                    if (empty($company_arr[$prev])) { // First Element in Array - Display Last
                        $prev_id = $company_arr[$length - 1];
                    }*/


                    ?>

                    <a href="<?php echo HTTP_SERVER . WS_ROOT . get_pageseo_url1($prev_id, 'works'); ?>" class="pre">
                        PREVIOUS PROJECT
                    </a>
                    <a href="<?php echo HTTP_SERVER . WS_ROOT . get_pageseo_url1($next_id, 'works'); ?>" class="nxt">
                        NEXT PROJECT
                    </a>

                </div>
            </div>
        </div>


        <?php


    } elseif ($page_type == 'B') { ?>


        <div class="branding-page">
            <div class="container-fluid">
                <div class="branding-desc">
                    <div class="row">

                        <div class="col-sm-6">

                            <div class="round-detail wow fadeInUp" data-wow-delay="0.9s">
                                <!--       <h1 class="roundhouse">Roundhouse</h1>

                                       <h3 class="sub-round">BRAND IDENTITY</h3>-->

                                <h1 class="roundhouse"><?php echo $branding_title; ?></h1>

                                <h3 class="sub-round"><?php echo $branding_brand; ?></h3>

                            </div>

                            <div class="round-desc wow fadeInUp" data-wow-delay="0.9s">
                                <!-- <p>Roundhouse is an Arthouse based in London which promotes different forms of art for the youth
                                     and
                                     holds workshops for the same. For this brand I have made use of rhythm which represents
                                     music
                                     through soundwaves, free flow dance movements and abstract art.
                                 </p>
                                 <p> Displayed here are the collaterals designed for them which include posters, hand
                                     illustrations,
                                     CD cover, magazine advert and the logo.</p>-->

                                <?php echo $branding_desc; ?>
                            </div>


                            <div class="round-main-title wow fadeInUp" data-wow-delay="0.9s">
                                <!--<h1>A strong typographic identity for<br>
                                    London’s arthouse scene to cut<br>
                                    through the
                                    visual chaos.</h1>-->
                                <?php echo $branding_bold; ?>
                            </div>

                        </div>
                        <div class="col-sm-6 img-middle">
                            <?php
                            if ($i14 != '') {
                                ?>
                                <div class="slider1 table-vertical wow fadeInUp" data-wow-delay="0.9s">
                                    <img data-src="<?php echo $image11; ?>" class="img-responsive lazyload">

                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <div class="branding-img">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php
                            if ($i13 != '') {
                                ?>
                                <div class="slider1 round-image wow fadeInUp" data-wow-delay="0.9s">
                                    <img data-src="<?php echo $image10; ?>" class="img-responsive lazyload">

                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            if ($i15 != '') {
                                ?>
                                <div class="slider1 wow fadeInUp" data-wow-delay="0.9s">
                                    <img data-src="<?php echo $image12; ?>" class="img-responsive lazyload">

                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-12 full-width-img">
                            <?php
                            if ($i16 != '') {
                                ?>
                                <div class="slider1 wow fadeInUp" data-wow-delay="0.9s">
                                    <img data-src="<?php echo $image13; ?>" class="img-responsive lazyload" style="width: 100%">

                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="branding-img-first">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php
                            if ($i17 != '') {
                                ?>
                                <div class="slider1 wow fadeInUp" data-wow-delay="0.9s">
                                    <img data-src="<?php echo $image14; ?>" class="img-responsive lazyload">

                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            if ($i18 != '') {
                                ?>
                                <div class="slider1 wow fadeInUp" data-wow-delay="0.9s">
                                    <img data-src="<?php echo $image15; ?>" class="img-responsive lazyload">

                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-12 full-width-img">
                            <?php
                            if ($i19 != '') {
                                ?>
                                <div class="slider1 wow fadeInUp" data-wow-delay="0.9s">
                                    <img data-src="<?php echo $image16; ?>" class="img-responsive lazyload" style="width: 100%">

                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
                
                 <div class="branding-img-first">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php
                            if ($i20 != '') {
                                ?>
                                <div class="slider1 wow fadeInUp" data-wow-delay="0.9s">
                                    <img data-src="<?php echo $image17; ?>" class="img-responsive lazyload">

                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            if ($i21 != '') {
                                ?>
                                <div class="slider1 wow fadeInUp" data-wow-delay="0.9s">
                                    <img data-src="<?php echo $image18; ?>" class="img-responsive lazyload">

                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-12 full-width-img">
                            <?php
                            if ($i22 != '') {
                                ?>
                                <div class="slider1 wow fadeInUp" data-wow-delay="0.9s">
                                    <img data-src="<?php echo $image19; ?>" class="img-responsive lazyload" style="width: 100%">

                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>

                <div class="branding-img-first">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php
                            if ($i23 != '') {
                                ?>
                                <div class="slider1 wow fadeInUp" data-wow-delay="0.9s">
                                    <img data-src="<?php echo $image20; ?>" class="img-responsive lazyload">

                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            if ($i24 != '') {
                                ?>
                                <div class="slider1 wow fadeInUp" data-wow-delay="0.9s">
                                    <img data-src="<?php echo $image21; ?>" class="img-responsive lazyload">

                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-12 full-width-img">
                            <?php
                            if ($i25 != '') {
                                ?>
                                <div class="slider1 wow fadeInUp" data-wow-delay="0.9s">
                                    <img data-src="<?php echo $image22; ?>" class="img-responsive lazyload" style="width: 100%">

                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
                
                <div class="branding-img-first">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php
                            if ($i27 != '') {
                                ?>
                                <div class="slider1 wow fadeInUp" data-wow-delay="0.9s">
                                    <img data-src="<?php echo $image23; ?>" class="img-responsive lazyload">

                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            if ($i28 != '') {
                                ?>
                                <div class="slider1 wow fadeInUp" data-wow-delay="0.9s">
                                    <img data-src="<?php echo $image24; ?>" class="img-responsive lazyload">

                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-12 full-width-img">
                            <?php
                            if ($i29 != '') {
                                ?>
                                <div class="slider1 wow fadeInUp" data-wow-delay="0.9s">
                                    <img data-src="<?php echo $image25; ?>" class="img-responsive lazyload" style="width: 100%">

                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
             
                <div class="branding-img-first">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php
                            if ($i26 != '') {
                                ?>
                                <div class="slider1 wow fadeInUp" data-wow-delay="0.9s">
                                    <video width="100%" height="auto" playsinline muted autoplay loop>
                                        <source src="<?php echo $video_1; ?>" type="video/mp4">
                                    </video>

                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            if ($i30 != '') {
                                ?>
                                <div class="slider1 wow fadeInUp" data-wow-delay="0.9s">
                                    <video width="100%" height="auto" playsinline muted autoplay loop>
                                        <source src="<?php echo $video_2; ?>" type="video/mp4">
                                    </video>

                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-12 full-width-img">
                            <?php
                            if ($i31 != '') {
                                ?>
                                <div class="slider1 wow fadeInUp" data-wow-delay="0.9s">
                                    <video width="100%" height="auto" playsinline muted autoplay loop>
                                        <source src="<?php echo $video_3; ?>" type="video/mp4">
                                    </video>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
                <div class="next-previous">


                    <?php
                    $ssql2 = "select * from work where workID = (select min(workID) from work where workID > '.$module_id.')";
                    $qry2 = ets_db_query($ssql2) or die(ets_db_error());
                    $res2 = ets_db_fetch_array($qry2);
                    $next_id = $res2['workID'];
                    
                    $ssql1 = "select * from work where workID = (select max(workID) from work where workID < '.$module_id.')";
                    $qry1 = ets_db_query($ssql1) or die(ets_db_error());
                    $res1 = ets_db_fetch_array($qry1);
                    $prev_id = $res1['workID'];
                    ?>

                    <a href="<?php echo HTTP_SERVER . WS_ROOT . get_pageseo_url1($prev_id, 'works'); ?>" class="pre">
                        PREVIOUS PROJECT
                    </a>
                    <a href="<?php echo HTTP_SERVER . WS_ROOT . get_pageseo_url1($next_id, 'works'); ?>" class="nxt">
                        NEXT PROJECT
                    </a>

                </div>

            </div>


        </div>

        <?php
    }
    }
    ?>





