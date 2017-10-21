function toggleMenu() {
    var e = new TimelineMax;
    e.to(".nav--MOB__toggle-button", .3, {
        position: "absolute",
        left: "95%",
        ease: Linear.easeOut
    })
}

function newA() {
    toolTimeline.add("end", 5), logoAnimation(), welcomeDel()
}

function welcomeDel() {
    if ($(window).width() <= 500) toolTimeline.to(".welcome-page", .5, {
        display: "none",
        alpha: 0
    }), toolTimeline.from(".main-page", 1, {
        display: "none",
        alpha: 0,
        ease: Linear.easeOut,
        delay: .2
    }), toolTimeline.from("#logo__no-anim", 1, {
        alpha: 0,
        x: "-100%"
    }), toolTimeline.from(".navigation-phone-numbers", .7, {
        alpha: 0,
        y: "-100%",
        ease: Linear.easeOut,
        delay: .5
    });
    else {
        var e = !0;
        e && $(window).scroll(function() {
            toolTimeline.to(".welcome-window", .3, {
                display: "none",
                alpha: 0,
                ease: Linear.easeOut
            }), e = !1
        })
    }
}

function logoAnimation() {
    dr(), toolTimeline.to("#gradient-bet", 1.5, {
        alpha: 1,
        ease: Bounce.easeOut,
        delay: 1
    })
}

function rio() {
    (new TimelineMax).from("#logo-text-fl", 2, {
        delay: .5,
        scale: 0,
        transformOrigin: "50% 50%",
        ease: Linear.easeOut,
        onComplete: dr
    })
}

function welcomeLogo() {
    var e = new TimelineMax;
    e.from("#logo-text-fl", 2, {
        scale: 0,
        transformOrigin: "50% 50%",
        ease: Linear.easeOut
    }), e.to("#logo-text-fl", 1, {
        fill: "#FFF"
    }), e.from("#black", 1, {
        scale: 0,
        alpha: 0,
        transformOrigin: "50% 50%",
        ease: Linear.easeOut,
        delay: .2
    }), e.to("#gradient", 2, {
        strokeWidth: 5
    }), dr()
}

function buttonChange() {
    TweenLite.to(".l-toggle-menu", 2, {
        x: 20,
        display: "block"
    }), TweenLite.to(".toggle-menu__header--logo", 1, {
        rotationY: 360
    }), TweenLite.to(".chevron-icon--menu:first()", .5, {
        delay: 1,
        scale: 1.5,
        z: -300
    }), TweenLite.to("li:first()", .5, {
        delay: 1,
        color: "#199ed8"
    }), TweenLite.to(".navigation", 2, {
        y: -150
    }), TweenLite.to(".darker", .2, {
        display: "block",
        alpha: .8
    })
}

function dr() {
    $("svg").drawsvg({
        duration: 1e3,
        stagger: 3e3
    }).drawsvg("animate")
}

function first() {
    var e = $(".l-navigation");
    TweenMax.from(e, .5, {
        delay: .7,
        y: "-100%",
        ease: Linear.easeNone
    })
}

function hj() {
    TweenLite.from("#text-t", 3, {
        fill: "#000000",
        scale: .25
    }), TweenLite.from("#text-p", 3, {
        fill: "#000000",
        scale: .25
    }), TweenLite.from("#text-o", 3, {
        fill: "#000000",
        scale: .25
    })
}

function init() {
    new TimelineMax;
    TweenMax.to("#gradientBox", 2, {
        "-webkit-mask-image": "-webkit-linear-gradient(left, rgba(0,0,0,0) 0%, rgba(0,0,0,0) 100%, rgba(0,0,0,1) 105%, rgba(0,0,0,1) 100%)"
    })
}
$(document).ready(function() {
    function e() {
        $(".testimonials__item--active").removeClass("testimonials__item--active").addClass("oldActive"), $(".oldActive").is(":nth-last-child(2)") ? $(".testimonials__item").first().addClass("testimonials__item--active") : $(".oldActive").next().addClass("testimonials__item--active"), $(".oldActive").removeClass("oldActive"), $(".testimonials__item").hide(), $(".testimonials__item--active").fadeIn(s)
    }

    function o() {
        $(".testimonials__item--active").removeClass("testimonials__item--active").addClass("oldActive"), $(".oldActive").is(":nth-child(2)") ? $(".testimonials__item").last().addClass("testimonials__item--active") : $(".oldActive").prev().addClass("testimonials__item--active"), $(".oldActive").removeClass("oldActive"), $(".testimonials__item").hide(), $(".testimonials__item--active").fadeIn(s)
    }

    function t(e, o, t) {
        $(e).click(function() {
            d ? (o(), d = !1) : (t(), d = !0)
        })
    }

    function i() {
        $(".contacts-button").hasClass("open") && l(), $(".mobile-nav__logo, .mobile-nav__contacts-button").addClass("hidden"), $(".hamburger-button").addClass("open"), $(".mobile-nav__menu-button").addClass("open"), $(".main-page").wrap('<div id="wrap"></div>'), toolTimeline.to(".mobile-nav__menu", .2, {
            left: "0",
            ease: Linear.easeInOut
        }), toolTimeline.to(".hamburger-button", .1, {
            position: "relative",
            left: "87%",
            ease: Linear.easeInOut
        }), $("#wrap").click(function() {
            n(), d = !0
        })
    }

    function n() {
        $(".hamburger-button").removeClass("open"), $(".main-page").unwrap('<div id="wrap"></div>'), toolTimeline.to(".mobile-nav__menu", .2, {
            left: "-100%",
            ease: Linear.easeInOut
        }), toolTimeline.to(".hamburger-button", .3, {
            left: "0",
            ease: Linear.easeInOut,
            onComplete: function() {
                $(".mobile-nav__menu-button").removeClass("open")
            }
        }), toolTimeline.to(".hamburger-button", .1, {
            position: "static",
            ease: Linear.easeInOut,
            onComplete: function() {
                $(".mobile-nav__logo, .mobile-nav__contacts-button").removeClass("hidden")
            }
        })
    }

    function a() {
        $(".hamburger-button").hasClass("open") && n(), $(".contacts-button").addClass("open"), $(".main-page").wrap('<div id="wrap-trans"></div>'), toolTimeline.to(".mobile-nav__contacts", .3, {
            right: "0",
            ease: Linear.easeOut
        }), $("#wrap-trans").click(function() {
            l(), d = !0
        })
    }

    function l() {
        toolTimeline.to(".mobile-nav__contacts", .2, {
            right: "-100%",
            ease: Linear.easeOut
        }), $(".main-page").unwrap('<div id="wrap-trans"></div>'), $(".contacts-button").removeClass("open")
    }
    $(window).on("load", function() {
        $preload = $("#preloader"), $preload.delay(300).fadeOut("350", function() {
            wow.init(), $(".draw").addClass("active")
        })
    }), Modernizr.svgfilters || $('img[src*="svg"]').attr("src", function() {
        return $(this).attr("src").replace(".svg", ".png")
    });
    var s = 500;
    $(".testimonials__item").first().addClass("testimonials__item--active"), $(".testimonials__item").hide(), $(".testimonials__item--active").show(), $("#arrow_right").on("click", e), $("#arrow_left").on("click", o), Modernizr.flexwrap || $(".js-class").addClass("row-old");
    var r = $(window).height();
    ! function() {
        $(".slide").css("min-height", r)
    }(),
    function() {
        $(".page-services__bg").css("height", r / 2)
    }(), $("#collapse1").addClass("show"), navigator.userAgent.match(/(iPod|iPhone|iPad)/) || $.stellar({
        horizontalScrolling: !1,
        verticalScrolling: !0,
        horizontalOffset: 0,
        verticalOffset: 0,
        responsive: !1,
        scrollProperty: "scroll",
        positionProperty: "position",
        parallaxBackgrounds: !0,
        parallaxElements: !0,
        hideDistantElements: !0,
        hideElement: function(e) {
            e.hide()
        },
        showElement: function(e) {
            e.show()
        }
    }), wow = new WOW({
        live: !1,
        repeat: 1
    }), $(".development").click(function() {
        alert("This function is on the stage of development now")
    }), $(document).click(function() {
        $("#myDropdown").removeClass("open")
    }), $(".dropdown-box").click(function(e) {
        e.stopPropagation(), $("#myDropdown").toggleClass("open")
    }), $("#adress").click(function() {
        confirm("You will be redirected to Google Maps webpage") && (location.href = "https://www.google.com.ua/maps/place/West+St,+Bourne+PE10+9NE,+UK/@50.4387744,30.3967042,15z/data=!4m5!3m4!1s0x48781f42f6474cb5:0xe5c6e7110f956fe9!8m2!3d52.7682031!4d-0.3788978?hl=en")
    });
    var c = $(".hamburger-button"),
        m = $(".contacts-button");
    $("#wrap");
    t(c, i, n), t(m, a, l);
    var d = !0
}), $(".grid-button").on("click", function() {
    $(".grid").toggleClass("open close")
}), $(".menu-toggle").click(function() {
    $(".header__nav-panel").slideToggle("slow"), $(".loj").fadeToggle("slow"), $(".loj").fadeToggle("slow")
}), $(".kl").click(function() {
    $(".menu__content").slideToggle("slow")
}), $("#sandwich").click(function() {
    $(".top-row__content").slideToggle("slow", function() {
        $(".toggle-menu").fadeToggle()
    })
}), Modernizr.svgfilters || ($("svg").css("display", "none"), $(".svg-image").css("display", "none"), $(".alt-image").css("display", "block")), Modernizr.flexwrap || $(".row-OLD").css("display", "block"), $(".menu-icon__navbar-top-MOB").click(function() {
    $("#hamburger-icon").toggleClass("open"), $(".mobile-menu").toggle("show"), $(".phone-numbers__navbar-top-MOB").toggleClass("non-visible"), $(".logo-box__navbar-top").toggleClass("non-visible")
}), $("#toggle-menu-icon").click(function() {
    $(".l-toggle-menu").css("display", "block")
});
var toolTimeline = new TimelineMax,
    tl = new TimelineMax({
        paused: !0,
        repeatDelay: 1,
        repeat: 1
    });
tl.staggerTo("#lgrad stop", .1, {
    stopColor: "#FFF",
    cycle: {
        stopOffset: ["0", "0.9"]
    }
}, .1, 0).play(), TweenMax.fromTo("#lgrad stop", 1, {
    css: {
        stopOffset: "0"
    }
}, {
    css: {
        left: "130px",
        top: "130px"
    }
});