$( document ).ready(function() {

    $(window).scroll(function(){
        if ($(window).width() > 1199) {
            if($('body').hasClass('page-home')) {
                if($(this).scrollTop() > $('.wasser-aroma').offset().top) {
                    $('.header').addClass('active');
                } else {
                    $('.header').removeClass('active');
                }
            } else {
                $('.header').toggleClass('active', $(this).scrollTop() > 0);
            }
        }
    });

    /* custom change cursor hover buble */
    $('.bg-head').on("mousemove", function(e) {
        var offsetBubller = $('.bublle-wiewasser').offset();
        mouseX2 = e.pageX - offsetBubller.left;
        mouseY2 = e.pageY - offsetBubller.top;

        $('.wiewasser-cursor:not(.nomouse)').css({
            opacity: 1,
            left: mouseX2,
            top: mouseY2
        });

    })
    if ($(".bublle-wiewasserx").length) {
        $('.cursor--canvas, .cursor--small').addClass('active');
    }
    $('.bublle-wiewasser').on("mouseenter", function(e) {
        $('.cursor--canvas, .cursor--small').addClass('active');
    }).on('mouseleave', function () {
        $(".cursor--canvas, .cursor--small").removeClass("active");
    });

    // cache the selector
    //var xp = 0, yp = 0;
    // var loop = setInterval(function(){
    //     xp += (mouseX2 - xp) / 5;
    //     yp += (mouseY2 - yp) / 5;
    //     $(".wiewasser-cursor").css({left:xp, top:yp});
    //
    // }, 30);

    /* custom change cursor hover sale */
    $(document).on("mousemove", function(e) {
        mouseX = e.pageX;
        mouseY = e.pageY - $(window).scrollTop();
        TweenLite.to('.entweder-cursor', 0, {left: mouseX, top: mouseY});
    });


    $(document).on('mouseenter', '.entweder-body, .zumshop-swiper.swiper-slide-active .zumshop-slick__thumb', function () {
        if ($(window).width() > 1199) $('.entweder-cursor, .cursor--canvas').addClass('active');
    }).on('mouseleave', '.entweder-body, .zumshop-swiper.swiper-slide-active .zumshop-slick__thumb', function () {
        if ($(window).width() > 1199) $(".entweder-cursor, .cursor--canvas").removeClass("active");
    });

    $('.header, .aktion-box, .cookie-zum').on("mousemove", function(e) {
        $('.wiewasser-cursor').css('opacity', 0);
        $('.cursor--canvas, .cursor--small').removeClass('active');
    })

    if($(".bg-head").length) {
        gsap.registerPlugin(ScrollTrigger);

        const timelineBubble = gsap.timeline({
            defaults: {
                autoAlpha: 1,
            },
            scrollTrigger: {
                trigger: ".bg-head",
                start: "0",
                end: "70% bottom",
                //markers: true,
                scrub: 10,
                pinSpacing: false,
                onLeave: function() {
                    $(".wiewasser-cursor").addClass('nomouse');
                    $('.cursor--canvas, .cursor--small').removeClass('active');

                    gsap.to(".wiewasser-cursor", {
                        top: '177%',
                        left: '4%',
                        duration: 1,
                    });
                },
                onEnterBack: function() {
                    /*
                    let positionT = parseInt($('.entweder-cursor').css('top'));
                    let positionL = parseInt($('.entweder-cursor').css('left'));
                    let offsetScr = $(window).scrollTop();
                    gsap.to(".wiewasser-cursor", {
                        top: positionT+offsetScr,
                        left: positionL,
                        duration: .5,
                        onComplete: function () {
                        }
                    }); */

                    $(".wiewasser-cursor").removeClass('nomouse');
                    $('.cursor--canvas, .cursor--small').addClass('active');

                },
                onUpdate: function(e) {
                    let positionT = parseInt($('.entweder-cursor').css('top'));
                    let positionL = parseInt($('.entweder-cursor').css('left'));
                    let offsetScr = $(window).scrollTop();
                    gsap.to(".wiewasser-cursor:not(.nomouse)", {
                        top: positionT+offsetScr,
                        left: positionL,
                        duration: 0
                    });
                    $('.cursor--canvas, .cursor--small').addClass('active');
                }
            }
        });

        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".bg-head",
                endTrigger: ".bublle-wiewasser",
                pin: ".title-wiewasser",
                start: 0,
                end: "bottom 0%",
                scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                //markers: true,
                snap: {
                    snapTo: 1/2,
                }
            }
        });

        // add animations and labels to the timeline
        tl.to(".title-wiewasser__tofrom1", {
            opacity: 0,
        })
        .to(".title-wiewasser__tofrom2", {
            opacity: 1,
        })
        .to(".title-wiewasser__tofrom2", {
            opacity: 0,
        })
        .to(".wasser-aroma", {
            opacity: 1,
            duration: 0.5,
        })
    }



    if (!readCookie('accept')) {
        $(".cookie-zum").removeClass("closed");
    }
    $(".cookie-close, .cookie-zum__link").click(function (e) {
        e.preventDefault();
        $(".cookie-zum").addClass("closed");
        document.cookie = 'accept=true; max-age=604800;';
    });
    function readCookie(name) {
        let nameEQ = name + "=";
        let ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1, c.length);
            }
            if (c.indexOf(nameEQ) > -1) {
                return c.substring(nameEQ.length, c.length);
            }
        }
        return null;
    }

    if ($(".aktion-box").length) {
        var aktionBoxHeigh = ($(window).height());
        var aktionBox = $(".aktion-box").offset().top - aktionBoxHeigh;
        $(window).scroll(function () {
            if ($(window).scrollTop() >= aktionBox) {
                $(".aktion-box").css({
                    "opacity": 1,
                    "z-index": 20,
                    "transform": "scale(1)",
                    "position": "fixed"
                })
                    .addClass("active");
                return false;
            }
        });
    }
    $(".aktion-close").click(function() {
        $(".aktion-box").removeClass("active").addClass("closed");
    });

    /* animation */
    AOS.init({
        once: true,
        duration: 1000,
        offset: 100,
    });

    $('.wie-rating__num').each(function () {
        var wierating = (100 / 5) * $(this).data("wierating");
        $(this).css("width", wierating + "%");
    });

    if ($(".wie-review").length) {
        const wieReview = new Swiper('.wie-review', {
            loop: true,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            speed: 5000,
            grabCursor: true,
            slidesPerView: "auto",
            centeredSlides: true,
            spaceBetween: 50,
            loopPreventsSlide: false,
            freeModeMomentum: false,
            freeMode: true,
        });
    }

    if ($(".aromen-slider").length) {
        var aromenSlider = new Swiper('.aromen-slider', {
            loop: true,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            centeredSlides: true,
            slidesPerView: "auto",
            spaceBetween: 50,
            waitForTransition: false,
            speed: 5000,
            loopPreventsSlide: false,
            freeModeMomentum: false,
            freeMode: true,

        });
    }

    var trinkLottie = lottie.loadAnimation({
        container: document.getElementById('trink-lottie'),
        renderer: 'svg',
        loop: false,
        autoplay: false,
        path: 'img/lottie/dein-trink.json'
    });

    if ($(".dein-trink").length) {
        gsap.timeline({
            scrollTrigger: {
                trigger: ".dein-trink",
                start: 'top bottom',
                onEnter: function () {
                    trinkLottie.play();
                }
            }
        });
    }

    var gutscheinLottie = lottie.loadAnimation({
        container: document.getElementById('gutschein-lottie'),
        renderer: 'svg',
        loop: false,
        autoplay: false,
        hover: true,
        path: 'img/lottie/gutschein.json',
    });

    $(window).on('load resize', function () {
        if ($(window).width() <= 767) {
            gutscheinLottie.play();
        } else {
            if ($(".ein-gutschein").length) {
                $(".ein-gutschein").on('mouseenter', function () {
                    gutscheinLottie.setDirection(1);
                    gutscheinLottie.play();
                }).on('mouseleave', function () {
                    gutscheinLottie.setDirection(-1);
                    gutscheinLottie.play(0);
                });
            }
        }
    });
/*
    if ($(window).width() > 769) {
        if ($(".ein-gutschein").length) {
            gsap.timeline({
                scrollTrigger: {
                    trigger: ".ein-gutschein",
                    start: 'top 80%',
                    onEnter: function () {
                        gutscheinLottie.play();
                    }
                }
            });
        }
    }

 */

    // if ($(".ein-gutschein").length) {
    //     var einGutschein = $(".ein-gutschein").offset().top - 400;
    //     $(window).scroll(function () {
    //         if ($(window).scrollTop() >= einGutschein) {
    //             gutscheinLottie.play();
    //             return false;
    //         }
    //     });
    // }


    if ($(".fruchtepuree").length) {
        var kleinerBanner = $(".fruchtepuree").offset().top;
        $(window).scroll(function () {
            if ($(window).scrollTop() >= kleinerBanner) {
                setTimeout(function() {
                    $(".kleiner-banner").addClass("active");
                }, 500);

                return false;
            }
        });
    }

    if ($(".wasser-banner").length) {
        var wasserBanner = $(".wasserhahn").offset().top / 1.25;
        $(window).scroll(function () {
            if ($(window).scrollTop() >= wasserBanner) {
                $(".wasser-banner").addClass("fadeout");
                return;
            }
        });
    }

    /* product button count cart */
    $('.productCountDown').on('click', function (e) {
        e.preventDefault();
        let count = $(this).next('.productCount'),
            value = +count.val();
        value = +count.val();
        if (value > 0) count.val(value - 1);
        count.trigger('change');
    });
    $('.productCountUp').on('click', function (e) {
        e.preventDefault();
        let count = $(this).prev('.productCount'),
            value = +count.val();
        count.val(value + 1);
        count.trigger('change');
    });
    $( ".productCount" ).keypress(function() {
        return false;
    });

    $(document).on('click', '.shop-nav li a', function(e){
        var fixed_offset = 100;
        $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top}, 1000);
        e.preventDefault();
    });

    $(".open-basket").click(function() {
        $("html, body, .warenkorb-basket").addClass("ov-hidden");
    });
    $(".warenkorb-close, .basket-mask").click(function() {
        $("html, body, .warenkorb-basket").removeClass("ov-hidden");
    });
    $(document).on('click', ".warenkorb-close, .basket-mask", function() {
        $("html, body, .warenkorb-basket").removeClass("ov-hidden");
    });

    function zumshopSlider1() {
        var zumshopSlider1 = new Swiper('.zumshop-slider', {
            loop: true,
            slidesPerView: "auto",
            centeredSlides: true,
            spaceBetween: 0,
        });
    }
    function zumshopSlider2() {
        var zumshopSlider2 = new Swiper('.zumshop-slider', {
            loop: true,
            autoplay: {
                delay: 1000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            speed: 800,
            grabCursor: true,
            slidesPerView: "auto",
            centeredSlides: true,
            spaceBetween: 0,
            loopPreventsSlide: false,
            freeModeMomentum: false,
            freeMode: {
                enabled: true,
                momentum: false,
            },
            pagination: {
                el: ".zumshop-dots",
                clickable: true,
            },
            navigation: {
                nextEl: ".zumshop-next",
                prevEl: ".zumshop-prev",
            },
            effect: 'creative',
            creativeEffect: {
                prev: {
                    translate: ['-70%', 0, 0],
                    rotate: [0, 0, -15],
                    scale: .85,
                    origin: `50% 100%`,
                },
                next: {
                    translate: ['70%', 0, 0],
                    rotate: [0, 0, 15],
                    scale: .85,
                    origin: `50% 100%`
                },
                perspective: false,
                limitProgress: 6,
                progressMultipler: 1,
                //transformEl: '.item'
            },
        });
    }


    $(window).on('load', function () {
        if ($(window).width() <= 1200) {
            zumshopSlider1();

            $(".zumshop-slick__item").each(function() {
                $(this).css({
                    "background": $(this).data('bg')
                });
            });
        } else {
            zumshopSlider2();

            $(".zumshop-slick__item").mouseout(function() {
                $(this).css("background", "transparent");
            });
            $(".zumshop-slick__item").mouseover(function() {
                $(this).css("background", $(this).data("bg"));
            });
        }
    });




    $(".bezahlung-lieferung").click(function() {
        $("this")
        $(".bezahlung-lieferung__eine").toggleClass("active");
    });

    /* product page JS */
    const productSlider = new Swiper('.product-slider', {
        loop: true,
        pagination: {
            el: '.product-pagination',
            clickable: true,
        },
    });

    $(window).load(function(){
        $(".product-maskload, .product-maskload2").addClass("active");
    });

    $(".link-load").click(function(e) {
        e.preventDefault();
        $(".page-maskload").addClass("active");
        $(".header").addClass("mask-active");
        var loadBg = $(this).data('bg');
        $(".page-maskload path").css({
            fill: loadBg
        });
        var url = $(this).attr('href');
        setInterval(function() {
            window.location = url;
        }, 1000);
    });

    $('.show-password').on('click', function(){
        if ($(this).parent('.login-form__password').find('input').attr('type') == 'password'){
            $(this).addClass('view');
            $(this).parent('.login-form__password').find('input').attr('type', 'text');
        } else {
            $(this).removeClass('view');
            $(this).parent('.login-form__password').find('input').attr('type', 'password');
        }
        return false;
    });

    var dpMin, dpMax;
    var localeDe = {
        days: ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'],
        daysShort: ['Son', 'Mon', 'Die', 'Mit', 'Don', 'Fre', 'Sam'],
        daysMin: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
        months: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
        monthsShort: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'],
        today: 'Heute',
        clear: 'Aufräumen',
        dateFormat: 'dd.MM.yyyy',
        timeFormat: 'HH:ii',
        firstDay: 1,
    };

    dpMin = new AirDatepicker('.input-time__min', {
        locale: localeDe,
        dateFormat: 'yyyy-MM-dd',
        onSelect({date}) {
            dpMax.update({
                minDate: date
            })
        }
    });

    dpMax = new AirDatepicker('.input-time__max', {
        locale: localeDe,
        dateFormat: 'yyyy-MM-dd',
        onSelect({date}) {
            dpMin.update({
                maxDate: date
            })
        }
    });
    const inputTime = new AirDatepicker('.input-time__enter', {
        locale: localeDe,
        dateFormat: 'yyyy-MM-dd'
    });

    const kommtBody = new Swiper('.kommt-body', {
        loop: true,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        speed: 5000,
        grabCursor: true,
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 0,
        loopPreventsSlide: false,
        freeModeMomentum: false,
        freeMode: true,
    });

    $('.freude-input').on('focus', function () {
        if ($(this).val() !== '') {
            $(this).next('.freude-label').addClass('blur');
        } else {
            $(this).next('.freude-label').removeClass('blur');
        }
    });

    $("textarea").each(function () {
        this.setAttribute("style", "height:" + (this.scrollHeight) + "px;overflow-y:hidden;");
    }).on("input", function () {
        this.style.height = "auto";
        this.style.height = (this.scrollHeight) + "px";
    });

    /* validator kontakt form


    $('.freude-kontaktform').on('submit', function(e) {
        if ( validateForm() ) { // если есть ошибки возвращает true
            e.preventDefault();
        }
    });

    function validateForm() {
        $('.error').removeClass('error');

        var rqVorname = $('.rq-vorname').val();
        var rqName = $('.rq-name').val();
        var rqEmail = $('.rq-email').val();
        var rqNachricht = $('.rq-nachricht').val();

        // Проверка
        if ( rqVorname.length < 4 ) {
            $('.rq-vorname').parent('.freude-forminput').addClass('error').find('.freude-formerror').addClass('error');
        } else {
            var regEx = /^[a-z A-Z._%+-]{0,63}$/;
            var validName = regEx.test(rqVorname);
            if (!validName) {
                $('.rq-vorname').parent('.freude-forminput').addClass('error').find('.freude-formerror').addClass('error');
            }
        }
        if ( rqName.length < 4 ) {
            $('.rq-name').parent('.freude-forminput').addClass('error').find('.freude-formerror').addClass('error');
        }
        if ( rqEmail.length < 4 ) {
            $('.rq-email').parent('.freude-forminput').addClass('error').find('.freude-formerror').addClass('error');
        }
        if ( rqNachricht.length < 4 ) {
            $('.rq-nachricht').parent('.freude-forminput').addClass('error').find('.freude-formerror').addClass('error');
        }
    }

     */

    $('.faq-item__name').click(function () {
        $(this).toggleClass('active').next().slideToggle();
        $('.faq-item__name').not(this).removeClass('active').next().slideUp();
    });
    //$('.faq-name:eq(0)').addClass('active');
    //$('.faq-about:eq(0)').show();

    $(".menu-button").click(function (e) {
        e.preventDefault();
        $(".header, .header-shop, .user-box").addClass("menu");
        setTimeout(function() {
            $(".navigation-page").addClass("menu");
        }, 1000);
        $("html, body").addClass("ov-hidden");
        $(".page-maskload").addClass("active");

        $(".page-maskload path").css({
            fill: '#F4F8FF'
        });
    });
    $(".close-menu").click(function () {
        $(".navigation-page, .header, .header-shop, .user-box").removeClass("menu");
        $("html, body").removeClass("ov-hidden");
        $(".page-maskload").removeClass("active");
    });

    if ($('.vimeo-video').length > 0) {
        var video = document.querySelector(".player");
        var progressBar = document.querySelector('.progress-bar');
        var progress = document.querySelector('.progress');
        var tick;
        var mouse = {x: 0, y: 0};

        $('.abvideo-body').on('click', function () {
            $('body').addClass('open-video');
            if (video.paused) {
                video.play();
                $('.controls .play').addClass('playing');
            } else {
                video.pause();
                $('.controls .play').removeClass('playing');
            }
        });

        $('.player').on('click', function () {
            if (video.paused) {
                $(this).closest('.content-video').addClass('content-video-playing');
                video.play();
                $('.controls .play').addClass('playing');
            } else {
                $(this).closest('.content-video').removeClass('content-video-playing');
                video.pause();
                $('.controls .play').removeClass('playing');
            }
        });

        $('.close-video').on('click', function () {
            $('body').removeClass('open-video');
            video.pause();
            $('.controls .play').removeClass('playing');
        });
    }

    /* mobile script */
    var entwederMain = null;
    function entwederMainInit () {
        if (!entwederMain) {
            entwederMain = new Swiper('.entweder-main', {
                slidesPerView: "auto",
                loop: true,
                freeMode: false,
                centeredSlides: true,
            });
        }
    }
    function entwederMainDestroy () {
        if (entwederMain) {
            entwederMain.destroy();
            entwederMain = null;
        }
    }
    $(window).on('load resize', function () {
        setTimeout(function (){
            AOS.refresh();
        },1500);
        if ($(window).width() <= 767) {
            entwederMainInit();
        } else {
            entwederMainDestroy();
        }
    });
    $('.wasserhahn-body').scrollLeft(52);
    $('.fruchtepuree-main').scrollLeft(52);

    $(".navigation-page").css({
       "display": "flex"
    });

    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('.button-arrtop').fadeIn();
        } else {
            $('.button-arrtop').fadeOut();
        }
    });

    $('.button-arrtop').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 2000);
    });

    $(".button-abo").click(function(){
        $(".abo-mobilesecond").fadeIn();
        $(".abo-mobilefirst").fadeOut();
    });

    if($(".konto-dashboard").length) {
        $(".header").addClass("konto");
        $(".open-sidebar").addClass("active");
    }
    $(".kundenkonto-open, .open-sidebar").on("click", function() {
        $(".konto-sidebar").toggleClass("active");
    });

    replaceAmp('.productfull-descritpion')

    function replaceAmp(el) {
        if($(el).length == 0 ) return false;
        let thSt = $(el).html();
        $(el).html(thSt.replace(/&amp;/g, '<span style="font-family: FarnhamDisplay, sans-serif">&amp;</span>'));
    }

    var sectionIds = $('.shop-nav li a');

    $(document).scroll(function(){
        if($('body').hasClass('page-shop')) {
            sectionIds.each(function(){
                var container = $(this).attr('href');
                var containerOffset = $(container).offset().top;
                var containerHeight = $(container).innerHeight();
                var containerBottom = containerOffset + containerHeight;
                var scrollPosition = $(document).scrollTop();

                if(scrollPosition < containerBottom - 20 && scrollPosition >= containerOffset - 20) $(this).addClass('active');
                else $(this).removeClass('active');
            });
        }
    });

    /* page-kontakt.php */
    $('.freude-kontaktform').validate({
        rules: {
            Vorname: "required",
            Name: "required",
            Email: {
                required: true,
                email: true
            },
            Nachricht: "required"
        },
        messages: {
            rules: "Bitte prüfe deine Eingabe",
            Name: "Bitte prüfe deine Eingabe",
            Email: {
                required: "We need your email address to contact you",
                email: "Your email address must be in the format of name@domain.com"
            },
            Nachricht: "Bitte prüfe deine Eingabe"
        },
        errorElement : 'div',
        invalidHandler: function(event, validator) {
            $('.freude-label').addClass('blur');
        }
    });

    /* page-bezahlung.php */
    $('.bezahlung-form').validate({
        rules: {
            Vorname: "required",
            Name: "required",
            Addresse: "required",
            Ort: "required",
            PLZ: "required",
            Land: "required",
            Telefonnummer: "required",
            Email: {
                required: true,
                email: true
            }
        },
        messages: {
            Vorname: "Bitte prüfe deine Eingabe",
            Name: "Bitte prüfe deine Eingabe",
            Addresse: "Bitte prüfe deine Eingabe",
            Ort: "Bitte prüfe deine Eingabe",
            PLZ: "Bitte prüfe deine Eingabe",
            Land: "Bitte prüfe deine Eingabe",
            Telefonnummer: "Bitte prüfe deine Eingabe",
            Email: {
                required: "We need your email address to contact you",
                email: "Your email address must be in the format of name@domain.com"
            },
            Nachricht: "Bitte prüfe deine Eingabe"
        },
        errorElement : 'div',
    });
});

//$(".product-maskload").addClass("load");
$(".page-maskload").removeClass("none");

/* magnetize cursor */
var cerchio = document.querySelectorAll('.social');

cerchio.forEach(function(elem){
    $(document).on('mousemove touch', function(e){
        magnetize(elem, e);
    });
})

function magnetize(el, e){
    var mX = e.pageX,
        mY = e.pageY;
    const item = $(el);

    const customDist = item.data('dist') || 30;
    const centerX = item.offset().left + (item.width()/2);
    const centerY = item.offset().top + (item.height()/2);

    var deltaX = Math.floor((centerX - mX)) * -0.45;
    var deltaY = Math.floor((centerY - mY)) * -0.45;

    var distance = calculateDistance(item, mX, mY);

    if(distance < customDist){
        TweenMax.to(item, 0.5, {y: deltaY, x: deltaX, scale:1.1});
        item.addClass('magnet');
    }
    else {
        TweenMax.to(item, 0.6, {y: 0, x: 0, scale:1});
        item.removeClass('magnet');
    }
}

function calculateDistance(elem, mouseX, mouseY) {
    return Math.floor(Math.sqrt(Math.pow(mouseX - (elem.offset().left+(elem.width()/2)), 2) + Math.pow(mouseY - (elem.offset().top+(elem.height()/2)), 2)));
}