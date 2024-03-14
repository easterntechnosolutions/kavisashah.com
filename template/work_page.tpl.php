<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <meta name="keywords" content="<?php echo $keyword; ?>">
    <meta name="description" content="<?php echo $description; ?>">
    <base href="<?php echo HTTP_SERVER . WS_ROOT; ?>">
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    
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
    <!--<link rel="stylesheet" type="text/css" href="css/loader-animations.css"/>-->
    
    <link rel="preload" href="css/jquery.mCustomScrollbar.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"></noscript>
    <!--<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" type="text/css">-->
    
    <link rel="preload" href="css/swiper.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="css/swiper.css"></noscript>
    <!--<link href="css/swiper.css" rel="stylesheet">-->
    
    <link rel="preload" href="css/swipebox.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="css/swipebox.min.css"></noscript>
   
    <!--<link href="css/swipebox.min.css" rel="stylesheet">-->
    <!-- top menu -->
    <?php
    $qry = "Select * from work where workID = '" . $module_id . "' and status = 'E' order by Project_Listing_Page_Sortorder asc";
    $res = ets_db_query($qry);

    while ($arr = ets_db_fetch_array($res)) {
        $project_color = $arr['project_color'];
        $page_type = $arr['pagetype'];
        if ($page_type === 'B') {
            $body_class = "bg_transperent";
        } else {
            $body_class = '';
        }

        ?>
         <style>
            .font-i, .fancybox {
                color: <?php echo $project_color; ?> !important;
            }
            .fancybox:active{
                color: <?php echo $project_color; ?> !important;
            }
            .fancybox:focus{
                color: <?php echo $project_color; ?> !important;
            }
            .iso {
                color: <?php echo $project_color; ?> !important;
            }

            .btn-prototype {
                border: 1px solid <?php echo $project_color; ?> !important;
            }

            .btn-prototype:hover {
                background-color: <?php echo $project_color; ?> !important;
            }
        </style>
    <?php } ?>


</head>

<body class="work-d branding-page-sty">
<div>

    <!-- Main Header-->
    <?php include 'common/header.php'; ?>
    <!-- Main Header End -->

    <!-- Main Content -->
    <?php include $content_include; ?>
    <!-- Main Content End-->

</div>

 <script src="js/lazysizes.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<!--<script type="text/javascript" src="jquery.hoverplay.js"></script>-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/jquery-2.1.3.min.js"></script>
<!--<script type="text/javascript" src="js/jquery.fancybox-1.3.4.js"></script>-->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dlmenu.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen"/>
<script src="js/swiper.min.js"></script>

<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>

<!--video hover-->
<script  src="js/script.js"></script>
<!--video hover end-->

<script>
     $(function() {
        $( '#dl-menu' ).dlmenu();
    });
    new WOW().init();

    $(function () {
        // Swiper sliders
        var swiper = new Swiper('.swiper-slider', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            autoplay: 4000,
            loop: false
        });
    });

        $(".videolooping").hover(hoverVideo, hideVideo);

    function hoverVideo(e) {
        var id = e.currentTarget.children[0].id;
        loopingiteration(this.querySelector("video"),id);
        $( "#"+id ).addClass( "video-posterdiv-display" );
    }

    function hideVideo(e) {
var id = e.currentTarget.children[0].id;
      var vdo = this.querySelector("video");
        vdo.pause();
        vdo.currentTime = 0;
        $( "#"+id ).removeClass( "video-posterdiv-display" );
    }

    function loopingiteration(vdo,id) {
        var iterations = 1;

        vdo.play();
        vdo.addEventListener('ended', function () {
            if (iterations < 3) {
                vdo.currentTime = 0;
                $( "#"+id ).addClass( "video-posterdiv-display" );
                vdo.play();
                iterations ++;
                // $( "#"+id ).removeClass( "video-posterdiv-display" );
                //document.getElementById('iteration').innerText = iterations;
            }
            else
            {
                vdo.pause();
                vdo.currentTime = 0;
                $( "#"+id ).removeClass( "video-posterdiv-display" );
              
            }

        }, false);
    }

</script>
</body>
</html>
