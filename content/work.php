<div class="working grid">
    <div class="container">
        <div class="row">

            <?php
            $qry = "Select * from work where status = 'E' order by sortorder desc";
            $res = ets_db_query($qry);
            $index = 1;

            //                    echo $qry;
            while ($arr = ets_db_fetch_array($res)) {

                $id = $arr['workID'];
                            // echo $id;
                            // exit;
                $title = $arr['title'];
                $work_title = $arr['work_title'];
                //            echo $title;
                $url = get_pageseo_url($arr['workID'], 'works');
                /*echo $url;
                exit;*/
                //            echo $url;
                $thumb_image = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['project_listing_image'];
                $thumb_image1 = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['project_listing_image1'];
                $thumb_video = DIR_WS_WORK_PATH . $arr['workID'] . "/" . $arr['project_listing_video'];

                //            echo $thumb_image;

                $type = $arr['pagetype'];




                ?>


                <div class="col-sm-4 col-xs-12 col-md-4 item wow fadeInUp" data-wow-delay="0.2s">

                    <div class="project-items project-height">
                        <figure class="effect-bubba">
                            <!--                        <img src="img/Work-loading-1.jpg" class="img-responsive">-->

                            <?php if ($type !== 'B') { ?>
                                <img src="<?php echo $thumb_image1; ?>" class="img-responsive">
                                <div class="">
                                    <a href="<?php echo $url; ?>">
                                        <div class="item-overlay right"></div>
                                        <div class="buttons">
                                                <span class="project-ico"><i class="fa fa-link"
                                                                             aria-hidden="true"></i></span>
                                            <h3 class="thumb-title"><?php echo $work_title; ?></h3>
                                        </div>

                                    </a>


                                </div>

                                
                                
                            <?php } else { ?>


                                
                                
                                <!--<div class="video">
                                    <a href="<?php echo $url; ?>">
                                        <div> <span id="iteration"></span></div>
                                        <video id="myVideo" class="thevideo" webkit-playsinline="true" playsinline="playsinline" preload="auto" muted="muted" autoplay>
                                            <source src="<?php echo $thumb_video; ?>" type="video/mp4">
                                        </video>
                                    </a>
                                </div>-->
                                
                               <div class="video visible-lg visible-md visible-sm">
                                    <a href="<?php echo $url; ?>">
                                        <div class="videolooping">
                                            <div id="<?php echo $index; ?>" class="video-posterdiv"> <img src="<?php echo $thumb_image; ?>" class="img-responsive video-poster"></div>
                                            <video id="myVideo" class="thevideo" webkit-playsinline="true" playsinline="playsinline" preload="auto" muted="muted" poster="<?php echo $thumb_image ?>">
                                                <source src="<?php echo $thumb_video; ?>" type="video/mp4;codecs="hevc, hvc1, avc1.42E01E, mp4a.40.2"">
                                            </video>
                                        </div>
                                    </a>
                                </div>

                                <div class="video visible-xs">
                                    <a href="<?php echo $url; ?>">
                                        <video class="thevideo"  webkit-playsinline="true" playsinline="playsinline" autoplay  preload="auto" muted="muted" poster="<?php echo $thumb_image ?>">
                                            <source src="<?php echo $thumb_video; ?>" type="video/mp4">
                                        </video>

                                        <!--<video id="myVideo" class="thevideo" webkit-playsinline="true" playsinline="playsinline" preload="auto" muted="muted" poster="<?php echo $thumb_image ?>">
                                             <source src="<?php echo $thumb_video; ?>" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
                                             <source src="<?php echo $thumb_video; ?>" type="video/webm; codecs=&quot;vp8, vorbis&quot;">
                                         </video>-->
                                    </a>
                                </div>
                            <?php } ?>
                           
                        </figure>
                    </div>
                </div>

            <?php  
                $index++;
            } ?>

        </div>
    </div>
</div>


