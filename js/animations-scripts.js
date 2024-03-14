$(document).ready(function(){
       
     $('.red-home-block').delay(500).animate({left: '0%'}, 2000);
     $('.blue-home-block').delay(500).animate({right: '0%'}, 2000);
     $('#works').delay(7000).animate({top: '60%'}, 300).animate({top: '50%'}, 70);
     $('.right-menu-text').delay(4000).show();
     $('.left-menu-text').delay(4000).show();
     $('#contact').delay(7000).animate({top: '60%'}, 300).animate({top: '50%'}, 70);
     $('#truck').delay(8000).animate({top: '42%'}, 200).animate({top:'32%'},70);
     $('#bread').delay(8000).animate({top: '65%'}, 200).animate({top: '55%'}, 70);
     $('#breadbag').delay(8000).animate({top: '58%'}, 200).animate({top: '48%'}, 70);
      $('#veggies').delay(8000).animate({top: '70%'}, 200).animate({top: '60%'}, 70);
      $('#plate').delay(8000).animate({top: '83%'}, 200).animate({top: '72%'}, 70);
      $('#cloud').delay(8000).animate({top: '15%'}, 300);
      $('#diamond').delay(8000).animate({top: '66%'}, 200).animate({top: '56%'}, 70);
      $('#cycle').delay(8000).animate({top: '83%'}, 200).animate({top: '73%'}, 70);
      $('#email').delay(8000).animate({top: '85%'}, 200).animate({top: '73%'}, 70);
      $('#parachute').delay(8000).animate({top: '10%'}, 200).animate({top: '0%'}, 70);
      $('#location').delay(8000).animate({top: '78%'}, 200).animate({top: '68%'}, 70);
      $('#country').delay(8000).animate({top: '77%'}, 200).animate({top: '67%'}, 70);
      function cloudAnimate(){
              $('#cloud').delay(2000).animate({left:'66%'},3000).delay(2000).animate({left:'76%'},3000);
       }
       function diamondAnimate(){


       $('#diamond img,#country img,#email img,#location img').css({
                    "animation": "bounceDiamond 4s infinite ease",
                    "-webkit-animation": "bounceDiamond 4s infinite ease",
                    "-moz-animation": "bounceDiamond 4s infinite ease",
                    "-o-animation": "bounceDiamond 4s infinite ease"
                });

       }
      function diamondMobileAnimate(){
//              $('#diamond-mobile').delay(1500).animate({top:'55.7%'},150, 'linear').delay(1500).animate({top:'56%'},150, 'linear');
//              $('#country-mobile').delay(1500).animate({top:'66.7%'},150, 'linear').delay(1500).animate({top:'67%'},150, 'linear');
//              $('#email-mobile').delay(1500).animate({top:'72.7%'},150, 'linear').delay(1500).animate({top:'73%'},150, 'linear');
//              $('#location-mobile').delay(1500).animate({top:'67.7%'},150, 'linear').delay(1500).animate({top:'68%'},150, 'linear');
          $('#diamond-mobile img,#country-mobile img,#email-mobile img,#location-mobile img').css({
                    "animation": "bounceDiamond 4s infinite ease",
                    "-webkit-animation": "bounceDiamond 4s infinite ease",
                    "-moz-animation": "bounceDiamond 4s infinite ease",
                    "-o-animation": "bounceDiamond 4s infinite ease"
                });
       }
       $(function () {
    setInterval(cloudAnimate, 8000);
}); 
    $(function () {
            setTimeout(function() {
                setInterval(diamondAnimate, 3000);
            }, 7000);
            setTimeout(function() {
                setInterval(diamondMobileAnimate, 3000);
            }, 7000);
        }); 

       function cycleAnimate(){
        $('#cycle').delay(1000).animate({left: '34%'}, 4000).animate({left: '66%'}, 4000);
      }
        $(function () {
    setInterval(cycleAnimate, 7000);
});

function headlightsShow(){
    setTimeout(function() {
        $('#headlights').css({'visibility': 'visible'});
        $('#headlights2').css({'visibility': 'visible'});
        setInterval(headlightsAnimate, 9000);
        $('body').css('overflow','visible');
    }, 10000);
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

var mobile_headlights_flag = 0;
function headlightsMobileAnimate(){
    if(mobile_headlights_flag == 0) 
    {
        setTimeout(function() {
            $('#headlights-mobile').css({opacity: 1.0, visibility: "visible"}).animate({opacity: 0}, 1000);
            $('#headlights2-mobile').css({opacity: 1.0, visibility: "visible"}).animate({opacity: 0}, 1000);
            mobile_headlights_flag = 1; 
        }, 2000);
    }
    else
    {
        $('#headlights-mobile').css({opacity: 0, visibility: "visible"}).animate({opacity: 1.0}, 1000);
        $('#headlights2-mobile').css({opacity: 0, visibility: "visible"}).animate({opacity: 1.0}, 1000);
        mobile_headlights_flag = 0;
    }
    
}
$(function () {
    headlightsShow();
    headlightsShowMobile();
});
function headlightsShowMobile(){
    setTimeout(function() {
        $('#headlights-mobile').css({'visibility': 'visible'});
        $('#headlights2-mobile').css({'visibility': 'visible'});
        setInterval(headlightsMobileAnimate, 7000);
        $('body').css('overflow','visible');
    }, 7000);
}

 
          
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



    
    
     $('.right-menu-text').animate({top:'120%'}, 300).animate({top:'92%'}, 2000); 
   $('.left-menu-text').animate({top:'120%'}, 300).animate({top:'92%'}, 2000);
               

      
     
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

    