function showLoaderImage()
{
    var d = new Date();
    $('#loadergif').attr("src", "img/Loadingonly.gif?ver="+d.getTime()); // handling for cached gif image
     setTimeout(function() {
        $('#preloader_img').show();
        $('body').css('overflow','hidden');
    }, 2000);
    
}

/* Disable scroll in mobile */
$('#preloader_img,.bounce ').on('touchstart touchmove', function(e){ 
                e.preventDefault(); 
});
/* Disable scroll in mobile */

//$('#preloader_img').hide();
  
$('#ball').on('webkitAnimationEnd', function () {
	if($(window).width() > 799){
        //showLoaderImage();
	}
});
$('#ball').on('MSAnimationEnd', function () {
	if($(window).width() > 799){
		//showLoaderImage();
	}
});
$('#ball').on('oAnimationEnd', function () {
	if($(window).width() > 799){
		//showLoaderImage();
	}
});
$('#ball').on('animationend', function () {
	if($(window).width() > 799){
		//showLoaderImage();
	}
});

$(document).ready(function() {
    if($(".fancybox").length > 0)
    {
        //$(".fancybox").fancybox();
		$(".fancybox").click(function(e){
            if(!$(this).hasClass('visited-color'))
            {
                $(this).addClass('visited-color');    
            }
        });
    }
		
        $(".scroll-down").click(function(e) {
            $('html, body').animate({
                scrollTop: $(".work-details").offset().top
            }, 2000);
            e.preventDefault();
        });
});
/* Google Analytics */
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-32579931-12', 'auto');
  ga('send', 'pageview');
/* Google Analytics */

