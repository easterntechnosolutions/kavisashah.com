<?php
$web_arr = get_website_details();
?>


<div class="menu wow fadeInDown" data-wow-delay="1.5s">
    <?php
    if ($module == 'works') {
        $work_cl = 'active';
    } else {
        $work_cl = '';
    }
    ?>

    <a class="menu-desktop <?php echo $work_cl; ?>" href="<?php echo HTTP_SERVER . WS_ROOT; ?>works">Works</a>




    <?php

    /*if ($module == 'works') {
        $work_detail_cl = 'act';
    } else {
        $work_detail_cl = '';
    }*/




    $qry = "Select * from work where status = 'E' order by sortorder desc LIMIT 3";
    $res = ets_db_query($qry);

    //                    echo $qry;
    while ($arr = ets_db_fetch_array($res)) {
        $url = get_pageseo_url($arr['workID'], 'works');
        if($module_id == $arr['workID']) {
            $work_detail_cl = 'act';
        }else {
            $work_detail_cl = '';
        }

        ?>

        <a href="<?php echo $url; ?>" class="<?php echo $work_detail_cl; ?> menu-desktop"></a>

    <?php } ?>

    <!--<a class="menu-desktop" href="dena.html"></a>

    <a href="zero.html" class="menu-desktop"></a>-->


    <?php
    if ($module == 'contact-us') {
        $contact_cl = 'active';
    } else {
        $contact_cl = '';
    }
    ?>


    <a class="<?php echo $contact_cl; ?> menu-desktop" href="<?php echo HTTP_SERVER . WS_ROOT; ?>contact-us">Contact</a>


</div>
<!-- dl-Mobile Menu -->
<div class="mobile-header visible-xs">
    <div id="home">
        <div id="dl-menu" class="dl-menuwrapper ipad">
            <button class="dl-trigger">Open Menu</button>
            <ul class="dl-menu">
                <?php
                if ($module == 'home') {
                    $home_cl = 'active';
                } else {
                    $home_cl = '';
                }
                ?>

                <li><a href="<?php echo HTTP_SERVER . WS_ROOT; ?>home">Home</a></li>

                <?php
                if ($module == 'works') {
                    $work_cl = 'active';
                } else {
                    $work_cl = '';
                }
                ?>


                <li class="works-tab-mobile <?php echo $work_cl; ?>"><a
                            href="<?php echo HTTP_SERVER . WS_ROOT; ?>works">Works</a></li>

                <?php
                $qryy = "Select * from work where status = 'E' order by sortorder desc LIMIT 3";
                $rep = ets_db_query($qryy);



                //                    echo $qry;
                while ($ard = ets_db_fetch_array($rep)) {


                    $work_title = $ard['work_title'];
                    $url = get_pageseo_url($ard['workID'], 'works');


                    ?>

                    <li class="works-tab-mobile"><a href="<?php echo $url; ?>"> - <?php echo $work_title; ?></a></li>

                <?php } ?>


                <!--<li class="works-tab-mobile"><a href="dena.html">&nbsp; - Dena</a></li>
                <li class="works-tab-mobile"><a href="zero.html">&nbsp; - ZerothreeSeven</a></li>-->


                <?php
                if ($module == 'contact-us') {
                    $contact_cl = 'active-tab-mobile';
                } else {
                    $contact_cl = '';
                }
                ?>


                <li class="<?php echo $contact_cl; ?>"><a
                            href="<?php echo HTTP_SERVER . WS_ROOT; ?>contact-us">Contact</a></li>
            </ul>
        </div><!-- /dl-Mobile Menu -->
    </div>
</div>
