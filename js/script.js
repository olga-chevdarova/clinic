$(document).ready(function(){

 wow = new WOW(
                      {
                      live:         false  , repeat: 1      // default
                    }
                    )
                    wow.init();

   // $('.tooltips').tooltipster();
$('.development').click(function() {
  alert('This function is on the stage of development now');
})


$(document).click(function(){
  $("#myDropdown").removeClass('open');
});


$('.dropdown-box').click(function(e) {
  e.stopPropagation();
  $('#myDropdown').toggleClass('open');

});
function windowSize(resolution){
    if ($(window).width() <= resolution){
          $('[data-toggle="tooltip"]').tooltip();
    // } else {
    //     notToDo();
    // }
}};

//Tooltips
$(window).on('load resize',windowSize(800));


$('#adress').click(function() {
  var googleMaps = confirm('You will be redirected to Google Maps webpage');
  if (googleMaps) {
    location.href = 'https://www.google.com.ua/maps/place/West+St,+Bourne+PE10+9NE,+UK/@50.4387744,30.3967042,15z/data=!4m5!3m4!1s0x48781f42f6474cb5:0xe5c6e7110f956fe9!8m2!3d52.7682031!4d-0.3788978?hl=en';

  }
})

var hamburgerButton = $('.hamburger-button');
var contactsButton = $('.contacts-button');
var wrap=$('#wrap');

toggleButton(hamburgerButton, openMobileMenu, closeMobileMenu);

toggleButton(contactsButton, openContacts, closeContacts);
  var toggler = true;
function toggleButton(button, functionOpen, functionClose) {

  $(button).click(function() {
    if(toggler) {
      functionOpen();
      toggler = false;
    } else {
      functionClose();
      toggler = true;
    }
  })
}

function openMobileMenu() {
    if($('.contacts-button').hasClass('open')){
  closeContacts();
  };

  $('.mobile-nav__logo, .mobile-nav__contacts-button').addClass('hidden');
  $('.hamburger-button').addClass('open');
  $('.mobile-nav__menu-button').addClass('open');
  $('.main-page').wrap('<div id="wrap"></div>');
toolTimeline.to('.mobile-nav__menu', 0.2, {left:'0',ease:Linear.easeInOut} );
toolTimeline.to('.hamburger-button', 0.1, {'position': 'relative','left': '87%', ease:Linear.easeInOut});
$('#wrap').click(function() {
closeMobileMenu();
toggler = true;
  });
}

function closeMobileMenu() {
  $('.hamburger-button').removeClass('open');
   $('.main-page').unwrap('<div id="wrap"></div>');
  toolTimeline.to('.mobile-nav__menu', 0.2, {left:'-100%',ease:Linear.easeInOut} );
  toolTimeline.to('.hamburger-button', 0.3, {'left': '0',ease:Linear.easeInOut, onComplete:function() {
      $('.mobile-nav__menu-button').removeClass('open');
  }});
  toolTimeline.to('.hamburger-button', 0.1, {position: 'static', ease:Linear.easeInOut, onComplete:function() {
      $('.mobile-nav__logo, .mobile-nav__contacts-button').removeClass('hidden');
  }});
}

function openContacts() {
  if($('.hamburger-button').hasClass('open')){
closeMobileMenu();
  };
  $('.contacts-button').addClass('open');
    $('.main-page').wrap('<div id="wrap-trans"></div>');
    toolTimeline.to('.mobile-nav__contacts', 0.3, {right:'0',ease:Linear.easeOut});


  $('#wrap-trans').click(function() {
 closeContacts();
 toggler = true;
});

}

function closeContacts() {
  toolTimeline.to('.mobile-nav__contacts', 0.2, {right:'-100%',ease:Linear.easeOut});
$('.main-page').unwrap('<div id="wrap-trans"></div>');
 $('.contacts-button').removeClass('open');
}



//Set options
// var speed = 500;
// var autoswitch = true;
// var autoswitch_speed = 4000;

//Add initial active class

// $('.slide').first().addClass('activeSlide');

// //Hide all slides

// $('.slide').hide();

// //Show first slide

// $('.activeSlide').show();

// $('#next').on('click', nextSlide);

// $('#prev').on('click', prevSlide);

// //Autoslider Handler
// if(autoswitch == true) {
//   setInterval( nextSlide, autoswitch_speed);
// }

// //Switch to next slide
// function nextSlide() {
//     $('.activeSlide').removeClass('activeSlide').addClass('oldActive');
//   // check to see if we have reached the final slide
//   if ($('.oldActive').is(':last-child')) {
//     $('.slide').first().addClass('activeSlide');
//   } else {
//     $('.oldActive').next().addClass('activeSlide');
//   }
//   $('.oldActive').removeClass('oldActive');
//   $('.slide').fadeOut(speed);
//   $('.activeSlide').fadeIn(speed);
// }

// //Switch to previus slide

// function prevSlide() {
//     $('.activeSlide').removeClass('activeSlide').addClass('oldActive');
//   // check to see if we have reached the final slide
//   if ($('.oldActive').is(':first-child')) {
//     $('.slide').last().addClass('activeSlide');
//   } else {
//     $('.oldActive').prev().addClass('activeSlide');
//   }
//   $('.oldActive').removeClass('oldActive');
//   $('.slide').fadeOut(speed);
//   $('.activeSlide').fadeIn(speed);
// }






});









function toggleMenu() {
    var toolTimeline = new TimelineMax();

    if(".nav--MOB__toggle-button[pos='static']") {
       toolTimeline.to('.nav--MOB__toggle-button', 0.3, {position:'absolute', left:'95%', ease:Linear.easeOut});
    } else {
        toolTimeline.reverse();
    }

     
           

    // toolTimeline.from('#logo-text-fl', duration, {scale:0, transformOrigin:'50% 50%', ease:Linear.easeOut});
    // toolTimeline.to('#logo-text-fl', 1, { fill:'#FFF'});
    // toolTimeline.from('#black', 1, {scale:0, alpha:0, transformOrigin:'50% 50%', ease:Linear.easeOut,  delay:0.2});
    // toolTimeline.to('#gradient', duration, {strokeWidth:5});
};


// $('.js-toggle-menu').click(function(e){
//   e.preventDefault();
//   $(this).toggleClass('open');
//     $(this).toggleClass('li');
// $('.main-menu__row ').toggleClass('disabled');
// $('.nav--MOB__menu').toggle();
// });


 $(".grid-button").on("click", function() {
        $(".grid").toggleClass("open close");
    });
  $(".menu-toggle").click(function() {
    $('.header__nav-panel').slideToggle( "slow");

  $('.loj').fadeToggle('slow');
   $('.loj').fadeToggle('slow');
});
$('.kl').click(function() {
  $('.menu__content').slideToggle( "slow");
})
$('#sandwich').click(function() {

$('.top-row__content').slideToggle( "slow", function() {
    $('.toggle-menu').fadeToggle();
  });
})

if (Modernizr.svgfilters) {
 //   logoAnimation();
 // welcomeDel();
} else {
  // $('.welcome-page').css('display','none');
  $('svg').css('display','none');
  $('.svg-image').css('display','none');
  $('.alt-image').css('display', 'block');
}
if (Modernizr.flexwrap) {

} else {
  // $('.row.about-us__main-page').css('display', 'none');
  $('.row-OLD').css('display','block');
//   $('.to-change').removeClass('row').css('max-width', '100%');
//   $('.icons-block__about-us__main-page').css({'display': 'table-cell'});
//   $('.text__about-doctor__about-us__main-page').addClass('col-12');
// //   $('.to-change-row').removeClass('row').addClass('row-old');
// //   $('.to-change-col-icons').addClass('col-old-icons');
// //  //  $('.to-change-col').addClass('col-old');
// //  // $('.text-TAB__about-doctor__about-us__main-page').css('display', 'none');
// //  //  $('.text__about-doctor__about-us__main-page').css('display', 'none');
// // // $('.icons-block__about-us__main-page').addClass('table-cell');
// // // $('.icons-block-wrap__about-us__main-page.table-row').css('text-align', 'center');
// // $
// $('.icons-block__about-us__main-page:even').before('<div class="row-old"></div>');
// // // $('.icons-block__about-us__main-page').addClass('table-cell');




}

$('.menu-icon__navbar-top-MOB').click(function(){
    $('#hamburger-icon').toggleClass('open');
    $('.mobile-menu').toggle('show');
    $('.phone-numbers__navbar-top-MOB').toggleClass('non-visible');
    $('.logo-box__navbar-top').toggleClass('non-visible');
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