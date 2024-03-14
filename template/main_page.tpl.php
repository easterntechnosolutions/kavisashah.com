<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="keywords" content="<?php echo $keyword; ?>">
    <meta name="description" content="<?php echo $description; ?>">
    <title><?php echo $title; ?></title>
    <base href="<?php echo HTTP_SERVER . WS_ROOT; ?>">

    <link rel="preload" href="css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="css/bootstrap.min.css"></noscript>
    <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>-->
    
    <link rel="preload" href="css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="css/style.css"></noscript>
    <!--<link rel="stylesheet" type="text/css" href="css/style.css"/>-->
    
    <link rel="preload" href="css/loader-animations.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="css/loader-animations.css"></noscript>
    <!--<link rel="stylesheet" type="text/css" href="css/loader-animations.css"/>-->
    
    <link rel="preload" href="css/homepage-animations.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="css/homepage-animations.css"></noscript>
    <!--<link rel="stylesheet" type="text/css" href="css/homepage-animations.css"/>-->





</head>

<body>
<?php include 'common/loader.php'; ?>
<?php //include 'common/header.php'; ?>
<?php //include 'common/slider.php'; ?>

<?php
if (isset($content_include)) {
    include $content_include;
} else {
    echo do_shortcode(stripslashes($pageContent));
}
?>

<?php //include 'common/footer.php'; ?>

<script src="js/lazysizes.min.js"></script>
<script src="js/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/animations-scripts.js"></script>
<script src="js/custom.js"></script>

<script>
    $(window).load(function () { // makes sure the whole site is loaded
        if ($(window).width() > 799) {
            $('.bounce').delay(4000).fadeOut('slow');
        } else {
            $('.bounce').delay(3000).fadeOut('slow');
        }

    })
</script>


</body>
</html>

