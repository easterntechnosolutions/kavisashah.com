<?php
$slidersql = "select * from sliderimage where status = 'E' order by sortorder desc";
$sliderqry = ets_db_query($slidersql) or die(ets_db_error());
if (ets_db_num_rows($sliderqry) > 0) {
    $i = 1;
    ?>

    <!-- h1 slider area -->
    <div class="slider-area owl-carousel">
        <?php

        while ($result = ets_db_fetch_assoc($sliderqry)) {
            if ($i == 1) {
                $active = "active";
            } else {
                $active = "";
            }

            ?>
            <div class="single-slider bg-with-black over">
                <div class="overlay">
                    <div class="img desktop-banner">
                        <img src="<?php echo DIR_WS_SLIDER_PATH . $result['image']; ?>" alt="slider img 1">
                    </div>

                    <div class="img mobile-banner">
                        <img src="<?php echo DIR_WS_SLIDER_PATH . $result['mobile_image']; ?>" alt="slider img 1">
                    </div>

                </div>
                <?php

                if ($i == 3) {
                    $i = 1;
                }

                if ($i == 1) {
                    $slidecls = "";
                } elseif ($i == 2) {
                    $slidecls = "text-center";
                } else {
                    $slidecls = "text-right";
                }

                ?>

                <div class="content cont-non">
                    <div class="container <?php echo $slidecls; ?>">
                        <div class="row">
                            <div class="col-lg-12 col-12">

                                <h3 class="intro animated"><span
                                            class="activeColor"><?php echo $result['sliderTitle']; ?></h3>
                                <h2 class="title animated">For all Industrial Business </h2>
                                <p class="text animated"><?php echo $result['sliderDesc']; ?></p>
                                <div class="buttons animated">
                                    <a class="link btn btn-primary" href="<?php echo HTTP_SERVER . WS_ROOT; ?>quality">Our
                                        Quality</a>
                                    <a class="link btn btn-primary activeBorder"
                                       href="<?php echo HTTP_SERVER . WS_ROOT; ?>contact-us">Contact Us</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php $i++;
        } ?>

    </div>
<?php } ?>
<!-- End h1 slider area -->