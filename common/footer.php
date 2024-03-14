<!-- Subscription Section -->
<div class="subscription">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-5">
                <div class="block mb-4 mb-md-0">
                    <a href="<?php echo HTTP_SERVER . WS_ROOT; ?>">
                        <img src="img/footer-logo.png" alt="Subscription Logo">
                    </a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 text-left text-lg-right">
                <div class="block">
                    <form method="post" action="subscription.php" class="subscription-form subscribe-submit-message"
                          id="subscribe-form" novalidate>
                        <div class="padd">
                            <input type="text" name="sname" id="subscribe-name" placeholder="Name" required="">
                        </div>
                        <div class="padd">
                            <input type="email" name="semail" id="subscribe-email" placeholder="Email Address"
                                   required="">
                        </div>
                        <div class="padd">
                            <button type="submit" class="btn btn-primary" id="subscribe-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End h1 Subscription Section -->

<!-- h1 Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 col-xl-2">
                <div class="block mb-4 mb-lg-0">
                    <h5 class="footer-nav-title text-light">Our Company</h5>
                    <ul class="footer-nav-list">
                        <li><a href="<?php echo HTTP_SERVER . WS_ROOT; ?>">Home</a></li>
                        <li><a href="<?php echo HTTP_SERVER . WS_ROOT; ?>about-us">About Us</a></li>
                        <li><a href="<?php echo HTTP_SERVER . WS_ROOT; ?>">Adding Value</a></li>
                        <li><a href="<?php echo HTTP_SERVER . WS_ROOT; ?>quality">Quality</a></li>
                        <li><a href="<?php echo HTTP_SERVER . WS_ROOT; ?>safety">Safety</a></li>
                        <li><a href="<?php echo $contact_cl; ?>contact-us">Contact Us</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3">
                <div class="block mb-4 mb-lg-0">
                    <h5 class="footer-nav-title text-light">Service</h5>
                    <ul class="footer-nav-list">
                        <?php
                        $menusql = ets_db_query("SELECT * FROM products WHERE pTypeID = 1 and status = 'E'  order by sortorder LIMIT 0, 7") or die();

                        while ($rs = ets_db_fetch_array($menusql)) {
                            $url = HTTP_SERVER . WS_ROOT . get_projectseo_url($rs['productID'], pro_SeoSlug($rs['productTitle']));

                            ?>
                            <li><a href="<?php echo $url; ?>"><?php echo $rs['productTitle']; ?></a></li>

                        <?php } ?>
                        <!--<li><a href="#">Surface Prepration</a></li>
                        <li><a href="#">Painting</a></li>
                        <li><a href="#">Thermal Spary Of Alloys(Metalizing)</a></li>
                        <li><a href="#">Passive Fire Proofing</a></li>
                        <li><a href="#">Industrial Decorating Coating</a></li>
                        <li><a href="#">Scaffolding</a></li>
                        <li><a href="#">Specialized Coating Such As</a></li>-->
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3">
                <div class="block mb-4 mb-lg-0">
                    <h5 class="footer-nav-title text-light">Sector</h5>
                    <ul class="footer-nav-list">
                        <?php
                        $menusql = ets_db_query("SELECT * FROM products WHERE pTypeID = 2 and status = 'E'  order by sortorder LIMIT 0, 11") or die();

                        while ($rs = ets_db_fetch_array($menusql)) {
                            $url = HTTP_SERVER . WS_ROOT . get_projectseo_url($rs['productID'], pro_SeoSlug($rs['productTitle']));

                            ?>
                            <li><a href="<?php echo $url; ?>"><?php echo $rs['productTitle']; ?></a></li>
                        <?php } ?>
                        <!--<li><a href="#">Plant Maintenance</a></li>
                        <li><a href="#">Offshore</a></li>
                        <li><a href="#">Hydrocarbon Processing Industry</a></li>
                        <li><a href="#">Chemical</a></li>
                        <li><a href="#">Thermal Power Plants</a></li>
                        <li><a href="#">Energy</a></li>
                        <li><a href="#">Passive Fire Proofing</a></li>
                        <li><a href="#">Concrete</a></li>
                        <li><a href="#">Storage Tanks</a></li>
                        <li><a href="#">Pharmaceutical</a></li>-->
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-4">
                <div class="block">
                    <h5 class="footer-nav-title text-light">Contact Us</h5>
                    <div class="media footer-block">
                        <div class="mr-3">
                            <i class="fa fa-address-book-o" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">


                            <h5 class="m-0 footer-blog-title add"><?php echo $web_arr['address']; ?></h5>

                        </div>
                    </div>


                    <div class="media footer-block">
                        <div class="mx-3">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">

                            <a class="phone-footer"
                               href="tel:<?php echo $web_arr['tel1']; ?>"><?php echo $web_arr['tel1']; ?></a>


                        </div>
                    </div>
                    <div class="media footer-block">
                        <div class="mx-3">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">

                            <a class="phone-footer"
                               href="mailto:<?php echo $web_arr['email1']; ?>"><?php echo $web_arr['email1']; ?></a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End h1 Footer -->

<!-- h1 Copyright Section -->
<div class="copyright">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="block copyright-content mb-2 mb-md-0">
                    <p class="m-0 text-light text-center">Copyrights &copy; 2019 All Rights Reserved by <a
                                class="company-name activeColor text-uppercase" href="#">Leo Coats.</a></p>
                    <!--<p class="m-0 text-light">Designed by <a class="company-name activeColor text-uppercase" href="#">Eastern Techno Solution.</a></p>-->
                </div>
            </div>
            <div class="col-md-4">
                <div class="block social-media d-flex justify-content-center">

                    <?php if ($web_arr['social']['twitter']) { ?>
                        <a class="ct-twitter d-flex justify-content-center align-items-center"
                           href="<?php echo $web_arr['social']['twitter']; ?>" target="_blank">
                            <i
                                    class="fa fa-twitter" aria-hidden="true">

                            </i>
                        </a>
                    <?php } ?>

                    <?php if ($web_arr['social']['facebook']) { ?>
                        <a class="ct-facebookr d-flex justify-content-center align-items-center"
                           href="<?php echo $web_arr['social']['facebook']; ?>" target="_blank"><i
                                    class="fa fa-facebook" aria-hidden="true"></i></a>
                    <?php } ?>

                    <?php if ($web_arr['social']['instagram']) { ?>
                        <a class="ct-instagramr d-flex justify-content-center align-items-center"
                           href="<?php echo $web_arr['social']['instagram']; ?>" target="_blank"><i
                                    class="fa fa-instagram" aria-hidden="true"></i></a>
                    <?php } ?>

                    <?php if ($web_arr['social']['pinterest']) { ?>
                        <a class="ct-pinterest d-flex justify-content-center align-items-center"
                           href="<?php echo $web_arr['social']['pinterest']; ?>" target="_blank"><i
                                    class="fa fa-pinterest"
                                    aria-hidden="true"></i></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block copyright-content mb-2 mb-md-0 des-eastern">
                    <!--<p class="m-0 text-light">Copyrights &copy; 2018 All Rights Reserved by <a class="company-name activeColor text-uppercase" href="#">Leo Coats.</a></p>-->
                    <p class="m-0 text-light text-center">Designed by <a class="company-name activeColor text-uppercase"
                                                             href="https://www.easternts.com/" target="_blank">Eastern
                            Techno Solution.</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End h1 Copyright Section -->