<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $description; ?>">
    <title><?php echo $title; ?></title>
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <!-- Bootstrap core CSS -->
    <link rel="preload" href="css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="css/bootstrap.min.css"></noscript>
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    
    <link rel="preload" href="css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="css/font-awesome.min.css"></noscript>
    <!--<link href="css/font-awesome.min.css" rel="stylesheet">-->
    
    <link rel="preload" href="css/animate.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="css/animate.css"></noscript>
    <!--<link href="css/animate.css" type="text/css" rel="stylesheet">-->
    
    <link rel="preload" href="css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="css/style.css"></noscript>
    <!--<link href="css/style.css" type="text/css" rel="stylesheet">-->
    
    <link rel="preload" href="css/loader-animations.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="css/loader-animations.css"></noscript>
    <!--<link rel="stylesheet" type="text/css" href="css/loader-animations.css" />-->
    
    <link rel="preload" href="css/jquery.mCustomScrollbar.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"></noscript>
    <!--<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" type="text/css">-->
    
    <link rel="preload" href="css/intlTelInput.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="css/intlTelInput.css"></noscript>
    <!--<link rel="stylesheet" href="css/intlTelInput.css">-->
    <script src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="contact-page">
<?php //include 'common/loader.php'; ?>
<?php include 'common/header.php'; ?>
<?php //include 'common/banner.php'; ?>

<?php
if(isset($content_include)) {
    include $content_include;
} else {
    echo do_shortcode(stripslashes($pageContent));
}
?>

<?php //include 'common/footer.php'; ?>


<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dlmenu.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- mobile no validation -->
<script type="text/javascript" src="js/intlTelInput.min.js"></script>
<!-- mobile no validation -->
<script type="text/javascript" src="js/jqueryvalidation/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jqueryvalidation/additional-methods.min.js"></script>
<script async src='https://www.google.com/recaptcha/api.js'></script>
<script>
    $(function() {
        $( '#dl-menu' ).dlmenu();
    });
    new WOW().init();
    (function($){
        $(window).load(function(){
            $(".contact-details").mCustomScrollbar({
                autoHideScrollbar:true,
                theme:"dark"
            });
        });
    })(jQuery);
</script>

<script>

    $(document).ready(function () {


        $(window).load(function () {
            // Remove the # from the hash, as different browsers may or may not include it
            var hash = location.hash.replace('#', '');

            if (hash != '') {

                // Clear the hash in the URL
                // location.hash = '';   // delete front "//" if you want to change the address bar
                $('html, body').animate({scrollTop: $('#contact-form').offset().top - 40}, 800);

            }
        });

        // Add smooth scrolling to all links
        $("a").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 80
                }, 800, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    /* window.location.hash = hash;*/
                });
            } // End if
        });


        $("#phone").intlTelInput({
            initialCountry: "hk"
        });

        $("#phone").val('+852 ');

        $("#phone").on("countrychange", function (e, countryData) {
            // $("#phone").val('+'+countryData.dialCode+' ');
            // $("#phone").focusin();

            if (countryData.dialCode == 'undefined ' || countryData.dialCode == undefined) {
            } else {
                $("#phone").val('+' + countryData.dialCode + ' ');
                $("#phone").focusin();
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
        /*  $('.call-btn').on('click', function() {



                 $('html, body').animate({
                     scrollTop: $("#contact-form").offset().top
                 }, 2000);
         })*/
        ;

        function recaptchaCallback() {

            if (grecaptcha.getResponse() == '') {

                // if error I post a message in a div

                $('#reCaptchaError').html('Please verify you are human');

            } else {


                $('#reCaptchaError').html('');

            }

        };


        $.validator.addMethod('regex', function (value, element, param) {
            return this.optional(element) || value.match(typeof param == 'string' ? new RegExp(param) : param);
        }, 'Please Enter a value in the correct format.');

        $('#contactusform').validate({
            rules: {
                name: {
                    required: true
                },
                email_address: {
                    required: true
                },
                city: {
                    required: true
                },
                message: {
                    required: true
                },
                phone: {
                    regex: "^(?=.*[0-9])[- +()0-9]+$",
                    required: true,
                    minlength: 8
                },

            },

            errorElement: "label",
            errorPlacement: function (error, element) {

                /* Checkbox Error Placement */
                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parents(".checkbox-label")); //checkbox
                } else if (element.prop("type") === "radio") {
                    error.insertAfter(element.parents(".radio-label")); //radio button
                } else if ((element.hasClass('select2-hidden-accessible'))) {
                    error.insertAfter(element.next('span')); // select2
                } else if ((element.hasClass('bootstrap-multiselect-drpdown'))) {
                    error.insertAfter(element.next('.btn-group')); // select2
                } else if ((element.hasClass('intl-phone-input'))) {

                    error.insertAfter(element.parents('.intl-tel-input')); // select2
                } else {
                    error.insertAfter(element);
                }
                /* Checkbox Error Placement */
            },
            messages: {
                name: {
                    required: "Please Enter Name"
                },
                email_address: {
                    required: "Please Enter Email Address"
                },
                city: {
                    required: "Please Enter City"
                },
                message: {
                    required: "Please Enter Message"
                },
                phone: {
                    required: "Please Enter Phone Number",
                    minlength: 'Please Enter Valid Contact No'
                },


            },

            invalidHandler: function () {

                //invalidHandler add below code to show error

                if (grecaptcha.getResponse() == '') {

                    // if error I post a message in a div

                    $('#reCaptchaError').html('Please verify you are human');

                }

            },
            onsubmit: true,
            submitHandler: function (form, event) {

                if (grecaptcha.getResponse() == '') {

                    // if error I post a message in a div

                    $('#reCaptchaError').html('Please verify you are human');

                } else {
                    event.preventDefault();

                    var data = new FormData($('#contactusform')[0]);
                    console.log(data);
                    $('#submit').html('Loading ..');
                    $('#submit').prop('disabled', true);
                    $.ajax({
                        url: "inquiry.php",
                        type: "post",
                        cache: false,
                        processData: false,
                        contentType: false,
                        beforeSend: function () {
                            $('#submit').prop('disabled', true);
                            $('#submit').html('Loading..');
                        },
                        data: data,
                        success: function (data) {

                            if (data) {
                                //                            console.log(data);
                                $('#label-text').show();
                                $('#submit').attr('value', '');
                                $('#submit').prop('disabled', false);
                                $('#submit').html('Submit');
                                $("#contactusform").closest('form').find("input[type=text],input[type=email], textarea").val("");
                                $('#additional').html('');
                                $('#purpose-div').html('');
                                $('#company').val('');
                                setInterval(function () {
                                    $('#label-text').hide();
                                }, 4000);
                            } else {
                                alert('There occured some problem');
                            }
                        }
                    })

                    grecaptcha.reset();

                }
            }

        });
    });
</script>
<?php //include "common/analytics.php"; ?>

</body>
</html>


