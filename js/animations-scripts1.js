$(document).ready(function(){
       
 $('.red-home-block').animate({left: '0%'}, 2000);
        $('.blue-home-block').animate({right: '0%'}, 2000);
     $('#works').delay(2000).animate({top: '60%'}, 1000).animate({top: '50%'}, 200);
     $('#contact').delay(2000).animate({top: '60%'}, 1000).animate({top: '50%'}, 200);
     $('#truck').delay(4000).animate({top: '42%'}, 500).animate({top:'32%'},200);
     $('#bread').delay(4000).animate({top: '65%'}, 500).animate({top: '55%'}, 200);
     $('#breadbag').delay(4000).animate({top: '58%'}, 500).animate({top: '48%'}, 200);
      $('#veggies').delay(4000).animate({top: '70%'}, 500).animate({top: '60%'}, 200);
      $('#plate').delay(4000).animate({top: '83%'}, 500).animate({top: '72%'}, 200);
      $('#cloud').delay(4000).animate({top: '15%'}, 1000);
      $('#diamond').delay(4000).animate({top: '66%'}, 500).animate({top: '56%'}, 200);
      $('#cycle').delay(4000).animate({top: '83%'}, 500).animate({top: '73%'}, 200);
      $('#email').delay(4000).animate({top: '85%'}, 500).animate({top: '73%'}, 200);
      $('#parachute').delay(4000).animate({top: '10%'}, 500).animate({top: '0%'}, 200);
      $('#location').delay(4000).animate({top: '78%'}, 500).animate({top: '68%'}, 200);
      $('#country').delay(4000).animate({top: '77%'}, 500).animate({top: '67%'}, 200);
      function cloudAnimate(){
              $('#cloud').delay(1000).animate({left:'66%'},3000).delay(2000).animate({left:'76%'},3000);
       }
       $(function () {
    setInterval(cloudAnimate, 8000);
}); 

       function cycleAnimate(){
        $('#cycle').delay(1000).animate({left: '34%'}, 4000).animate({left: '66%'}, 4000);
      }
        $(function () {
    setInterval(cycleAnimate, 6000);
});


function headlightsShow(){
    setTimeout(function() {
        $('#headlights').css({'visibility': 'visible'});
        $('#headlights2').css({'visibility': 'visible'});
        setInterval(headlightsAnimate, 5000);
    }, 6000);
}
var headlights_flag = 0;
function headlightsAnimate(){
    if(headlights_flag == 0) 
    {
        setTimeout(function() {
            $('#headlights').css({opacity: 1.0, visibility: "visible"}).animate({opacity: 0}, 1000);
            $('#headlights2').css({opacity: 1.0, visibility: "visible"}).animate({opacity: 0}, 1000);
            headlights_flag = 1; 
        }, 2000);
    }
    else
    {
        $('#headlights').css({opacity: 0, visibility: "visible"}).animate({opacity: 1.0}, 1000);
        $('#headlights2').css({opacity: 0, visibility: "visible"}).animate({opacity: 1.0}, 1000);
        headlights_flag = 0;
    }
    
}
var loaded = 0;
$(function () {
    headlightsShow();
});
function headlightsShowMobile(){
        $('#headlights-mobile').delay(3000).css({'visibility': 'visible'});
        $('#headlights2-mobile').delay(3000).css({'visibility': 'visible'});
}
$(function () {
    setInterval(headlightsShowMobile, 6000);
});
 
 
          
function parachuteAnimate(){
        $('#parachute').delay(6000).css({
            "-webkit-animation-name": "rotate",
            "-moz-animation-name": "rotate",
            "animation-name": "rotate",
  "-webkit-transform-origin": "50% 0%",
  "-webkit-transform-origin":"50% 0",
   "-moz-transform-origin":"50% 0",
    "transform-origin":"50% 0",
     "animation-delay": "10s",
  "-webkit-animation-duration":"9s",
    "-webkit-animation-iteration-count":"infinite",
    "-moz-animation-iteration-count":"infinite",
    "animation-iteration-count":"infinite",
     "-webkit-animation-direction": "alternate",
      "-moz-animation-direction": "alternate",
       "animation-direction": "alternate",
       "-webkit-animation-timing-function": "ease-in-out",
       "-moz-animation-timing-function": "ease-in-out",
       "animation-timing-function": "ease-in-out" 
}) 
};    
setTimeout(parachuteAnimate, 3000);



    
    $('.right-menu-text').delay(100).animate({bottom: '3%'}, 2000);
     $('.left-menu-text').delay(100).animate({bottom: '3%'}, 2000);
   
               

      
     
      function cloudAnimateMobile(){
              $('#cloud-mobile').delay(1000).animate({left:'66%'},3000).delay(2000).animate({left:'76%'},3000);
       }
       $(function () {
    setInterval(cloudAnimateMobile, 8000);
}); 

       function cycleAnimateMobile(){
        $('#cycle-mobile').delay(1000).animate({left: '34%'}, 4000).animate({left: '66%'}, 4000);
      }
        $(function () {
    setInterval(cycleAnimateMobile, 6000);
});

     
function parachuteAnimateMobile(){
        $('#parachute-mobile').delay(6000).css({
            "-webkit-animation-name": "rotate-mobile",
            "-moz-animation-name": "rotate-mobile",
            "animation-name": "rotate-mobile",
  "-webkit-transform-origin": "50% 0%",
  "-webkit-transform-origin":"50% 0",
   "-moz-transform-origin":"50% 0",
    "transform-origin":"50% 0",
     "animation-delay": "10s",
  "-webkit-animation-duration":"9s",
    "-webkit-animation-iteration-count":"infinite",
    "-moz-animation-iteration-count":"infinite",
    "animation-iteration-count":"infinite",
     "-webkit-animation-direction": "alternate",
      "-moz-animation-direction": "alternate",
       "animation-direction": "alternate",
       "-webkit-animation-timing-function": "ease-in-out",
       "-moz-animation-timing-function": "ease-in-out",
       "animation-timing-function": "ease-in-out" 
}) 
};    
setTimeout(parachuteAnimateMobile, 3000);
          

    });

    $(window).load(function() { // makes sure the whole site is loaded
        $('#ball').delay(4000).fadeOut('slow');
        
        $('#preloader_img').delay(7000).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(10000).css({'overflow':'visible'})
    })
