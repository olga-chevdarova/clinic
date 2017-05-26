$(document).ready(function(){


$('#toggle-menu-icon').click(function() {
	$('.l-toggle-menu').css('display','block')
});

});

function buttonChange() {
	 TweenLite.to('.l-toggle-menu', 2, {x:20, display:'block'});
	 TweenLite.to('.toggle-menu__header--logo', 1, {rotationY:360});
	 TweenLite.to('.chevron-icon--menu:first()', 0.5, {delay:1, scale:1.5, z:-300});
	 TweenLite.to('li:first()', 0.5, {delay:1, color:'#199ed8'});
	 TweenLite.to('.navigation', 2, {y:-150});
	 TweenLite.to('.darker', 0.2, {display:'block', alpha:0.8});
	
}

function first(){
		var menu = $('.l-navigation');
		TweenMax.from(menu, 0.5, {
			delay:0.7,
			y:'-100%',
			ease: Linear.easeNone
		});
	};

function dr() {
var $svg = $('svg').drawsvg({
      duration: 5000,
      easing: 'linear'
    });

$svg.drawsvg('animate');
}

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


