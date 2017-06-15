
$(document).ready(function(){
if (Modernizr.svgfilters) {
 //   logoAnimation();
 // welcomeDel();
} else {
  // $('.welcome-page').css('display','none');
  $('svg').css('display','none');
  $('.svg-image').css('display','none');
  $('.alt-image').css('display', 'block');


}

$('.menu-icon__navbar-top-MOB').click(function(){
    $('#hamburger-icon').toggleClass('open');
    $('.mobile-menu').toggle('non-visible');
    $('.phone-numbers__navbar-top-MOB').toggleClass('non-visible');
    $('.logo-box__navbar-top').toggleClass('non-visible');
  });
  });






// function iconAnim() {
// var toolTimeline = new TimelineMax();
// toolTimeline.to('#hamburger-icon-middle', 0.5, {display:'none'});
// toolTimeline.to('#hamburger-icon-top', 0.5, { rotation: -60, ease: Linear.easeNone });
// toolTimeline.to('#hamburger-icon-bottom', 0.5, {rotation:60});
// }

$('#toggle-menu-icon').click(function() {
  $('.l-toggle-menu').css('display','block')

});


var toolTimeline = new TimelineMax();
function newA() {
		 toolTimeline.add("end", 5)
	logoAnimation();
welcomeDel();
  
  }


function welcomeDel() {


if ($(window).width() <= 500 ) {
      toolTimeline.to('.welcome-page', 0.5, {display:'none',  alpha:0});

    toolTimeline.from('.main-page', 1, {display:'none', alpha:0, ease:Linear.easeOut, delay:0.2});
  toolTimeline.from('#logo__no-anim', 1, {alpha:0, x:'-100%'});
   toolTimeline.from('.navigation-phone-numbers', 0.7, {alpha:0, y:'-100%',  ease:Linear.easeOut, delay:0.5});

  }
    else {
    var windowPc = true;
    if(windowPc) {
      $(window).scroll(function() {
        toolTimeline.to('.welcome-window', 0.3, {display:'none',  alpha:0, ease:Linear.easeOut});

  windowPc = false;
      })
    }
  }

}
 /* toolTimeline.from('#logo-main', 1, {transformOrigin:'50% 50%'}, 0.2);
  toolTimeline.to('.welcome-window', 1, {display:'none', y:'-100%', alpha:0});
    
 toolTimeline.to(".welcome-window", 1, {display:'none', alpha:0, delay:0.5});
toolTimeline.to(".welcome-block", 2, {display:'block', bottom: "100%", ase:Linear.easeOut});
 
     toolTimeline.from('#toggle-menu-icon', 1, {alpha:0, x:'100%'});*/
    
   // toolTimeline.from('.welcome-block__text--motto', 1.5, {y:'100%', alpha:0});


function logoAnimation() {

          dr();

 toolTimeline.to('#gradient-bet', 1.5, { alpha:1, ease:Bounce.easeOut, delay:1});
}


function rio() {
  var toolTimeline = new TimelineMax();
  toolTimeline.from('#logo-text-fl', 2, {delay:0.5, scale:0, transformOrigin:'50% 50%', ease:Linear.easeOut, onComplete:dr});

};

function welcomeLogo() {
	var toolTimeline = new TimelineMax();
    var duration = 2;
    toolTimeline.from('#logo-text-fl', duration, {scale:0, transformOrigin:'50% 50%', ease:Linear.easeOut});
    toolTimeline.to('#logo-text-fl', 1, { fill:'#FFF'});
    toolTimeline.from('#black', 1, {scale:0, alpha:0, transformOrigin:'50% 50%', ease:Linear.easeOut,  delay:0.2});
    toolTimeline.to('#gradient', duration, {strokeWidth:5});
    dr();

    /*TweenMax.from('#Background', 1, {delay:1, scale:0, transformOrigin:'50% 50%', ease:Linear.easeInOut});*/
    // TweenMax.from('#gradient--colors', 1, {x:-100, ease: Power2.easeOut , opacity:0,});
    /*TweenMax.to('#gradientBox' ,2 , {'-webkit-mask-image': '-webkit-linear-gradient(left, rgba(0,0,0,0) 0%, rgba(0,0,0,0) 100%, rgba(0,0,0,1) 105%, rgba(0,0,0,1) 100%)'});*/
};

function buttonChange() {
	 TweenLite.to('.l-toggle-menu', 2, {x:20, display:'block'});
	 TweenLite.to('.toggle-menu__header--logo', 1, {rotationY:360});
	 TweenLite.to('.chevron-icon--menu:first()', 0.5, {delay:1, scale:1.5, z:-300});
	 TweenLite.to('li:first()', 0.5, {delay:1, color:'#199ed8'});
	 TweenLite.to('.navigation', 2, {y:-150});
	 TweenLite.to('.darker', 0.2, {display:'block', alpha:0.8});
	
}
  function dr() {
var $svg = $('svg').drawsvg({
      duration: 1000,
      stagger:3000
    });

$svg.drawsvg('animate');
// toolTimeline.to('#gradient-box', duration, {fill: "url(#gradient_1_)"});
// toolTimeline.from('#black-stroke', duration, {delay:3, scale:0, transformOrigin:'50% 50%', ease:Bounce.easeOut});
};
   


function first(){
		var menu = $('.l-navigation');
		TweenMax.from(menu, 0.5, {
			delay:0.7,
			y:'-100%',
			ease: Linear.easeNone
		});
	};



function hj() {
	TweenLite.from('#text-t', 3, {fill:"#000000", scale:0.25});
	TweenLite.from('#text-p', 3, {fill:"#000000", scale:0.25});
	TweenLite.from('#text-o', 3, {fill:"#000000", scale:0.25});

}



function init(){
    var toolTimeline = new TimelineMax();
    var duration = 1;

    /*toolTimeline.from('#text', duration, { alpha:0, ease:Linear.easeInOut});
    TweenMax.from('#Background', 1, {delay:1, scale:0, transformOrigin:'50% 50%', ease:Linear.easeInOut});*/
    // TweenMax.from('#gradient--colors', 1, {x:-100, ease: Power2.easeOut , opacity:0,});
    TweenMax.to('#gradientBox' ,2 , {'-webkit-mask-image': '-webkit-linear-gradient(left, rgba(0,0,0,0) 0%, rgba(0,0,0,0) 100%, rgba(0,0,0,1) 105%, rgba(0,0,0,1) 100%)'});
    };


var tl = new TimelineMax({
  paused:true, 
  repeatDelay:1, 
  repeat:1, 

});

tl

// animate the radial gradient
.staggerTo("#lgrad stop", 0.1, {
  stopColor:'#FFF',
  cycle:{
    stopOffset: ['0', '0.9']    
  }
}, 0.1, 0)



// hammer time
.play();

TweenMax.fromTo('#lgrad stop', 1, {css: {stopOffset: "0"}}, {css:{left:"130px", top: "130px"}} )


