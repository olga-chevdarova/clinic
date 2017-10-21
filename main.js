$(window).on('load', function () {
  $('#preloader').fadeOut('250');

});

$(document).ready(function(){

  var windowHeight = $(window).height(),
  hamburgerButton = $('.hamburger-button'),
  mobileMenuAnimation = new TimelineLite({paused:true}),
  mobileMenuToggle = true,
  menu = $('.mobile-nav__menu');

  /*Modernizr*/

  if (!Modernizr.svgfilters) {
    $('img[src*="svg"]').attr('src', function() {
      return $(this).attr('src').replace('.svg', '.png');
    });
  } 

  if (!Modernizr.flexwrap) {
    // $('.js-class').addClass('row-old');
    $('.row-OLD').css('display', 'block');
    $('.row-OLD').children().css('display', 'inline-block');
    // $('.desktop-nav__wrap').css('position', 'absolute');
  }
  
  /*Parallax bg settings*/

  if (!navigator.userAgent.match(/(iPod|iPad)/)) {
    $.stellar({
      horizontalScrolling: false,
      verticalScrolling: true,
      horizontalOffset: 0,
      verticalOffset: 0,
      responsive: false,
      scrollProperty: 'scroll',
      positionProperty: 'position',
      parallaxBackgrounds: true,
      parallaxElements: true,
      hideDistantElements: true,
      hideElement: function($elem) { $elem.hide(); },
      showElement: function($elem) { $elem.show(); }
    });
  }

  $('#appointment-button--mob-menu').on('click', function() {
    mobileMenuAnimation.reverse();
    mobileMenuToggle = true;
  });


  $('.welcome-slide__button').on('click', function() {
    TweenLite.to(window, 1, {scrollTo:".about-us__clinic"});
  })


  hamburgerButton.on('click', function() {
    toggleAnimation();
  });

  function toggleAnimation() {
    if(mobileMenuToggle == true) {
      mobileMenuAnimation.restart();
      mobileMenuToggle = false;
    } else {
      mobileMenuAnimation.reverse();
      mobileMenuToggle = true;
    }


    $(document).click(function (e){ // событие клика по веб-документу
    var divMobCont = $('.header-mob__menu'); // тут указываем класс элемента

    if (!divMobCont.is(e.target)   // если клик был не по нашему блоку
      && divMobCont.has(e.target).length === 0) { // и не по его дочерним элементам
      mobileMenuAnimation.reverse();
    mobileMenuToggle = true;
  }
});
  }

  mobileMenuAnimation.set($('.hamburger-item:nth-child(2)'), {autoAlpha: 0})
  .set($('.hamburger-item'), {margin: '2px 0 4px'}) 
  .to($('.hamburger-item:first-child'), 0.5, {rotation:45, transformOrigin:'10px'})
  .to($('.hamburger-item:last-child'), 0.5, {rotation:-45, transformOrigin:'8px'}, '-=0.5')
  .to(menu, 0.5, {left: '0', ease:Expo.easeOut}, '-=0.4')

  $('#appointment-button').on('click', function() {
    mobileMenuAnimation.reverse();
    mobileMenuToggle = true;
  })


});

