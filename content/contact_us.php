<div class="contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 blue-block">
                <div class="blue-heading hidden-xs wow fadeInDown" data-wow-delay="0.5s">
                    <div>
                        <div class="heading blue-heading-section"
                             style="width:55%;text-align:right;float:left;padding-right:5px">
                            <h1 style="padding-right: 3px;margin-top:10px;margin-bottom:0px"> Hi, I’m a User Experience
                                desi</h1>
                        </div>
                        <div class="heading white-heading-section" style="width:40%;text-align:left;float: left;">
                            <h2 style="margin-top:10px;margin-bottom:0px"><span class="blue">gner with a strong </span>
                            </h2>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div>
                        <div class="heading blue-heading-section"
                             style="width:55%;text-align:right;float:left;padding-right:5px">
                            <h2 style="padding-right: 3px;padding-right: 2px;margin-top:10px;margin-bottom:0px"> graphic
                                design background, ha</h2>
                        </div>
                        <div class="heading white-heading-section" style="width:40%;text-align:left;float: left;">
                            <h2 style="margin-top:10px;margin-bottom:0px"><span class="blue">iling from India </span>
                            </h2>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div>
                        <div class="heading blue-heading-section" style="width:55%;text-align:right;float:left">
                            <h2 style="padding-right: 3px;margin-top:10px;margin-bottom:0px"> living in Hong Kong</h2>
                        </div>
                    </div>
                </div>
                <div class="formob wow fadeInUp" data-wow-delay="0.9s">
                    <div class="heading">
                        <h2>Hi, I’m a User Experience designer with a strong graphic design background, hailing from
                            India living in Hong Kong</h2>
                    </div>
                </div>
                <div style="clear:both"></div>
                <div class="details wow fadeInUp" data-wow-delay="0.9s">
                    <p>I am passionate about “designing” unique solutions for User Interface challenges based on
                        in-depth research collected from target audience, application of relevant UI skills and an
                        obsession to keep it minimalistic!</p>
                    <p>When I am not in front of a computer screen, everything looks upside down in my world. I am not
                        crazy, I am just doing head-stands at my yoga studio!</p>
                </div>
                <div class="name wow fadeInUp" data-wow-delay="1.8s">
                    <h2 class="font-name">Kavisa Shah</h2>
                    <div class="social">
                        <a href="mailto:<?php echo $web_arr['email1']; ?>">
                            Email&nbsp;<i class="fa fa-circle" aria-hidden="true"></i>
                        </a>

                        <?php if ($web_arr['social']['linkedin']) { ?>
                            <a href="<?php echo $web_arr['social']['linkedin']; ?>" target="_blank">
                                Linkedin&nbsp;<i class="fa fa-circle" aria-hidden="true"></i>
                            </a>
                        <?php } ?>

                        <?php if ($web_arr['social']['dribbble']) { ?>
                            <a href="<?php echo $web_arr['social']['dribbble']; ?>" target="_blank">
                                Dribbble&nbsp;<i class="fa fa-circle" aria-hidden="true"></i>
                            </a>
                        <?php } ?>

                        <?php if ($web_arr['social']['instagram']) { ?>
                            <a href="<?php echo $web_arr['social']['instagram']; ?>" target="_blank">
                                Instagram <i class="fa fa-circle" aria-hidden="true"></i>
                            </a>

                        <?php } ?>

                        <a href="#" data-toggle="modal"
                           data-target="#modalform" class="focus-contact">
                            Contact Us
                        </a>

                    </div>
                </div>

            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 blue-white">
                <div class="contact-details wow fadeInUp" data-wow-delay="0.9s">
                    <h3 class="contact-heading">MY TOOLS</h3>


                    <?php echo $web_arr['address'];

                    ?>


                    <h3 class="contact-heading">WORK</h3>

                    <?php echo $web_arr['address2'];

                    ?>


                    <h3 class="contact-heading pd-tp">EDUCATION</h3>

                    <?php echo $web_arr['address3']; ?>


                    <h3 class="contact-heading pd-tp">AWARDS </h3>

                    <?php echo $web_arr['address4']; ?>

                    <div class="designed_by">&copy; Designed By Kavisa
                        Shah
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalform" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header heading-modal">
                <button type="button" class="close btn-close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Say Hi</h4>

            </div>
            <div class="modal-body">
                <form id="contactusform" name="contactusform" action="" method="post" novalidate
                      enctype="multipart/form-data">

                    <div class="form-group">
                        <span class="required" aria-required="true"></span>
                        <input name="name" id="name" type="text" placeholder="Name"/>

                    </div>
                    <div class="form-group">
                        <span class="required" aria-required="true"></span>
                        <input name="email_address" id="email_address" type="text" placeholder="Email"/>

                    </div>
                    <div class="form-group">
                        <div class="form-group ph-req">

                            <input class="intl-phone-input" name="phone" id="phone" type="text"
                                   placeholder="Phone Number"/>
                            <span class="required" aria-required="true"></span>


                        </div>
                    </div>
                    <div class="form-group">
                        <span class="required" aria-required="true"></span>
                        <input name="city" id="city" type="text" placeholder="City"/>

                    </div>
                    <!--<div class="form-group">
                        <input name="country" id="country" type="text" placeholder="Country"/>
                    </div>-->

                    <div class="purpose-div" id="purpose-div">

                    </div>
                    <div class="additional" id="additional">

                    </div>
                    <div class="common-div" id="common-div">
                        <div class="form-group">
                            <input name="subject" id="subject" type="text" placeholder="Subject"/>
                        </div>
                        <div class="form-group">
                            <span class="required" aria-required="true"></span>
                            <textarea placeholder="Message" name="message" id="message"></textarea>

                        </div>

                    </div>

                    <div class="form-group recap">

                        <div id="g-recaptcha" class="g-recaptcha"
                             data-sitekey="6LeN0sQUAAAAAE5I3C0zvcfAES6H4ta3vtU-GzcS"

                             data-callback="recaptchaCallback">

                            <!--                             data-sitekey="6LeN0sQUAAAAAE5I3C0zvcfAES6H4ta3vtU-GzcS"-->
                        </div>

                        <label id="reCaptchaError" class="" for=""></label>

                    </div>


                    <div class="form-group">
                        <button id="submit" type="submit"
                                class="highlight-button-dark">Send message
                        </button>
                        <div id='label-text' class="alert alert-success" style="margin-top:15px;display:none;"> Your
                            inquiry has been succesfully sent.
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
