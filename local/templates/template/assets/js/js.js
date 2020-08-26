$(function () {

    if (bowser) {
        var bn = bowser.name;
        var vv = parseFloat(bowser.version);
        vv = vv - (vv % 1);

        if (bn == "Internet Explorer" && vv == 10) {
            $("body").addClass("ie10");
        }
        if (bn == "Internet Explorer" && vv == 11) {
            $("body").addClass("ie11");
        }
        if (bn == "Microsoft Edge") {
            $("body").addClass("edge");
        }
    }
    var wr = document.getElementById('intro');
    var px = document.getElementById('mouse-parallax-bg');
    var headerOfferInstance = new Parallax(wr, {
        pointerEvents: true
    });
    var headerBgTitleInstance = new Parallax(px);

    $('.round .s1').hover(function () {
        $(this).parents('.techno-palo').find('.s1').addClass('on');
    }, function () {
        $(this).parents('.techno-palo').find('.s1').removeClass('on');
    });

    $('.round .s2').hover(function () {
        $(this).parents('.techno-palo').find('.s2').addClass('on');
    }, function () {
        $(this).parents('.techno-palo').find('.s2').removeClass('on');
    });

    $('.round .s3').hover(function () {
        $(this).parents('.techno-palo').find('.s3').addClass('on');
    }, function () {
        $(this).parents('.techno-palo').find('.s3').removeClass('on');
    });

    $('.round .s4').hover(function () {
        $(this).parents('.techno-palo').find('.s4').addClass('on');
    }, function () {
        $(this).parents('.techno-palo').find('.s4').removeClass('on');
    });
    $('.partner-slider').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1,
                dots: false,
                autoplay: true,
                autoplayTimeout: 2000
            },
            480: {
                items: 2
            },
            640: {
                items: 3
            },
            1000: {
                items: 4
            },
            1231: {
                items: 5
            }
        }
    });
    $('.phone-mask').inputmask("+7 (999) 999 99 99", { "clearIncomplete": true, clearMaskOnLostFocus: false });

    $('.btn-open-popup-demo-solution').click(function () {
        $('#popup-demo-solution').fadeIn(300);
        $('.mobile-menu').removeClass('opened');
    });
    $('.btn-open-popup-request-sphere').click(function () {
        $('#popup-request-sphere').fadeIn(300);
        $('.mobile-menu').removeClass('opened');
    });
    $('.btn-open-popup-request').click(function () {
        $('#popup-request').fadeIn(300);
        $('.mobile-menu').removeClass('opened');
    });
    $('.btn-open-call-popup').click(function () {
        $('#popup-call').fadeIn(300);
        $('.mobile-menu').removeClass('opened');
    });
    $('.overlay .popup-close').click(function () {
        $(this).parents('.overlay').fadeOut(300);
    });
    $('.btn-open-popup-demo').click(function () {
        $('#popup-demo').fadeIn(300);
        $('.mobile-menu').removeClass('opened');
    });
    $('.btn-open-popup-demo-sphere').click(function () {
        $('#popup-demo-sphere').fadeIn(300);
        $('.mobile-menu').removeClass('opened');
    });
    function getClientWidth() {
        return document.compatMode == 'CSS1Compat' && !window.opera ? document.documentElement.clientWidth : document.body.clientWidth;
    }
    $('.sphere-item').click(function () {
        var index = parseInt($(this).attr('data-index'));
        if ($(this).hasClass('on')) {
            $('.sphere-item').removeClass('on');
            $('.content-sphere:visible').removeClass('angle-showed').fadeOut(300);
            return false;
        }
        $('.sphere-item').removeClass('on');
        $('.content-sphere:visible').removeClass('angle-showed').fadeOut(300);
        $(this).addClass('on');
        $('.content-sphere[data-index=' + index + ']').fadeIn(300, function () {
            var ww = getClientWidth();
            if (ww > 1023) {
                $(document).scrollTo('.content-sphere:visible', 300);
            } else {
                $(document).scrollTo('.content-sphere:visible', 300, { offset: { top: -50 } });
            }
            
            $('.content-sphere:visible').addClass('angle-showed');
        });
    });
    $('.content-sphere .btn-close').click(function () {
        $(this).parents('.content-sphere').removeClass('angle-showed').fadeOut(300);
        $('.sphere-item').removeClass('on');
    });

    $('header .col-menu a').click(function () {
        var anch = $(this).attr('href');
        $(document).scrollTo(anch, 2000);
    });

    var controller = new ScrollMagic.Controller();
    new ScrollMagic.Scene({ triggerElement: ".concept", offset: '-100px' })
        .setClassToggle(".conception", "active")
        .addTo(controller);

    new ScrollMagic.Scene({ triggerElement: ".spheres .angle", offset: '-100px' })
        .setClassToggle(".spheres", "angle-showed")
        .addTo(controller);

    new ScrollMagic.Scene({ triggerElement: ".platform-item.item-1", offset: '-100px' })
        .setClassToggle(".platform-item.item-1", "angle-showed")
        .addTo(controller);

    new ScrollMagic.Scene({ triggerElement: ".platform-item.item-2", offset: '-100px' })
        .setClassToggle(".platform-item.item-2", "angle-showed")
        .addTo(controller);

    new ScrollMagic.Scene({ triggerElement: ".platform-item.item-3", offset: '-100px' })
        .setClassToggle(".platform-item.item-3", "angle-showed")
        .addTo(controller);

    new ScrollMagic.Scene({ triggerElement: ".techno", offset: '-100px' })
        .setClassToggle(".techno", "angle-showed")
        .addTo(controller);

    new ScrollMagic.Scene({ triggerElement: ".h2-instru", offset: '-100px' })
        .setClassToggle(".techno", "angle1-showed")
        .addTo(controller);
    $('.btn-menu').click(function () {
        $('.mobile-menu').toggleClass('opened');
    });
    $('.mobile-menu a[href]').click(function () {
        var anch = $(this).attr('href');
        $('.mobile-menu').removeClass('opened');
        $(document).scrollTo(anch, 2000, { offset: { top: -50 } });
    });
});