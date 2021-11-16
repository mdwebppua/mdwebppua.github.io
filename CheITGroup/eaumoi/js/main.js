$( document ).ready(function() {

    $(window).scroll(function(){
        $('.header').toggleClass('active', $(this).scrollTop() > 0);
    });

    /* custom change cursor hover buble */
    $('.bublle-wiewasser').on("mousemove", function(e) {
        var offsetBubller = $('.bublle-wiewasser').offset();
        mouseX2 = e.pageX - offsetBubller.left;
        mouseY2 = e.pageY - offsetBubller.top;

        $('.wiewasser-cursor:not(.nomouse)').css({
            opacity: 1,
            left: mouseX2,
            top: mouseY2
        });

    }).on('mouseenter', function () {
        $('.cursor--canvas').addClass('active');
    }).on('mouseleave', function () {
        $(".cursor--canvas").removeClass("active");
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


    $(document).on('mouseenter', '.entweder-body', function () {
        $('.entweder-cursor, .cursor--canvas').addClass('active');
    }).on('mouseleave', '.entweder-body', function () {
        $(".entweder-cursor, .cursor--canvas").removeClass("active");
    });

    $('.header').on("mousemove", function(e) {
        $('.wiewasser-cursor').css({
            opacity: 0,
        });
    })


    gsap.registerPlugin(ScrollTrigger);

    const timelineBubble = gsap.timeline({
        defaults: {
            autoAlpha: 1,
        },
        scrollTrigger: {
            trigger: ".bublle-wiewasser",
            start: "top top",
            end: "bottom 80%",
            scrub: 2,
            pinSpacing: false,
            onLeave: function() {
                $(".wiewasser-cursor").addClass('nomouse');
                gsap.to(".wiewasser-cursor", {
                    top: '90%',
                    left: '5%',
                    duration: 1,
                });
                $(".bublle-cir__1").css({
                    left: '1287px',
                    bottom: '-283px',
                });
                $(".bublle-cir__2").css({
                    right: '0%',
                    top: '1100px',
                });
                $(".bublle-cir__3").css({
                    bottom: '-130px',
                    right: '95%',
                });
                $(".bublle-cir__4").css({
                    bottom: '-800px',
                    right: '76%',
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
                $(".bublle-cir__1").css({
                    bottom: '15%',
                    left: '4%'
                });
                $(".bublle-cir__2").css({
                    right: '4%',
                    top: '24%',
                });
                $(".bublle-cir__3").css({
                    right: '22%',
                    bottom: '13%',
                });
                $(".bublle-cir__4").css({
                    right: '0',
                    bottom: '-20%',
                });
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
            }
        }
    });


    let titleAnim = gsap.timeline()
        .to(".title-wiewasser__tofrom1", {
            yPercent: -100,
            scale: 0.5,
            ease: "slow",
        }, "+=1%")
        .to(".title-wiewasser__tofrom2", {
            yPercent: -100,
            scale: 1,
            ease: "slow",
        },"<-30%")
        .to(".title-wiewasser__tofrom2", {
            yPercent: -200,
            scale: 0.5,
            ease: "slow",
        },"+=40%")

    ScrollTrigger.create({
        trigger: ".bublle-wiewasser",
        endTrigger: '.title-wiewasser__tofrom1',
        pin: ".title-wiewasser",
        animation: titleAnim,
        anticipatePin: 1,
        fastScrollEnd: false,
        pinSpacing: false,
        start: 'top top',
        end: "+=200%",
        scrub: true,
    })



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
        var aktionBoxHeigh = ($(window).height() / 1.25);
        var aktionBox = $(".aktion-box").offset().top - aktionBoxHeigh;
        $(window).scroll(function () {
            if ($(window).scrollTop() >= aktionBox) {
                $(".aktion-box").css({
                    "opacity": 1,
                    "z-index": 20,
                    "transform": "scale(1)",
                    "position": "fixed"
                });
                return false;
            }
        });
    }
    $(".aktion-close").click(function() {
        $(".aktion-box").addClass("closed");
    });

    /* animation */
    AOS.init({
        once: true
    });

    $(".zumshop-slick__item").mouseout(function() {
        $(this).css("background", "transparent");
    });
    $(".zumshop-slick__item").mouseover(function() {
        $(this).css("background", $(this).data("bg"));
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

            //slidesPerGroupAuto: true,


        });
    };

    if ($(".aromen-slider").length) {
        const aromenSlider = new Swiper('.aromen-slider', {
            loop: true,
            centeredSlides: true,
            slidesPerView: "auto",
            //freeMode: true,
            spaceBetween: 50,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            speed: 5000,
            loopPreventsSlide: false,
            freeModeMomentum: false,
            freeMode: true,

        });
    };




    var trinkLottie = lottie.loadAnimation({
        container: document.getElementById('trink-lottie'),
        renderer: 'svg',
        loop: false,
        autoplay: false,
        path: 'img/lottie/dein-trink.json'
    });

    if ($(".dein-trink").length) {
        var triggerOne = $(".dein-trink").offset().top - 400;
        $(window).scroll(function () {
            if ($(window).scrollTop() >= triggerOne) {
                trinkLottie.play();
                return false;
            }
        });
    }


    var gutscheinLottie = lottie.loadAnimation({
        container: document.getElementById('gutschein-lottie'),
        renderer: 'svg',
        loop: false,
        autoplay: false,
        path: 'img/lottie/gutschein.json'
    });


    if ($(".ein-gutschein").length) {
        var einGutschein = $(".ein-gutschein").offset().top - 400;
        $(window).scroll(function () {
            if ($(window).scrollTop() >= einGutschein) {
                gutscheinLottie.play();
                return false;
            }
        });
    }

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
        var wasserBanner = $(".wasser-banner").offset().top - 200;
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

    $("body").on('click', '[href*="#"]', function(e){
        var fixed_offset = 100;
        $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
        e.preventDefault();
    });

    /* tab page abo */
    $('.tabs').on('click', 'li:not(.current)', function() {
        $(this).addClass('current').siblings().removeClass('current').parents('.konfigurieren-step').find('.konfigurieren-tab').eq($(this).index()).addClass('visible').siblings('.konfigurieren-tab').removeClass('visible');
    })
    var stepNum = 0;
    $('.step-form').click(function(){
        stepNum++;
        $('.konfigurieren-tab').each(function(){
            if($(this).hasClass('visible')) {
                $(this).removeClass('visible');
                $(this).next().addClass('visible');
                return false;
            }
        })
        $('.tabs li').each(function(){
            if($(this).hasClass('current')) {
                $(this).removeClass('current');
                $(this).next().addClass('current');
                return false;
            }
        })
        if(stepNum == 2) {
            $('.konfigurieren-step').addClass('step-num'+stepNum);
            $('.step-form').text($(this).data("submit"));
        }
        console.log(stepNum);
    })



    /* abo max 12 Wochen STEP1 */
    $( ".allewoche" ).change(function() {
        var max = parseInt($(this).attr('max'));
        var min = parseInt($(this).attr('min'));
        if ($(this).val() >= max) {
            $(this).val(max);
            $(".allewoche-max").addClass("active");
        } else if ($(this).val() < max) {
            $(".allewoche-max").removeClass("active");
        }
        else if ($(this).val() < min) {
            $(this).val(min);
        }
    });

    /* abo warenkorb STEP2 */
    var valueEnter  = $(".warenkorb-input").val();
    $(".warenkorb-status__info span").html("0");
    $( ".warenkorb-input" ).change(function() {
        var total = 0;

        $('.warenkorb-input').each(function () {
            total += Number($(this).val());
        });
        var procent = total * (100 / 15);
        $(".warenkorb-status__ico").css("width", procent + "%");
        $(".warenkorb-status__info").css("left", procent + "%");

        $(".warenkorb-status__info span").html(total);

        if (total >= 15) {
            $(".bittle-wahle__title span ").addClass("active");
            $(".warenkorb-pluse").removeClass("productCountUp");
            $(".warenkorb-pluse").attr("disabled", true);

        } else {
            $(".bittle-wahle__title span ").removeClass("active");
            $(".warenkorb-pluse").addClass("productCountUp");
            $(".warenkorb-pluse").removeAttr("disabled");
        }
        console.log(total);
    });


    $(".open-basket").click(function() {
        $("html, body, .warenkorb-basket").addClass("ov-hidden");
    });
    $(".warenkorb-close, .basket-mask").click(function() {
        $("html, body, .warenkorb-basket").removeClass("ov-hidden");
    });

    const zumshopSlider = new Swiper('.zumshop-slider', {
        loop: true,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        speed: 5000,
        grabCursor: true,
        slidesPerView: 3,
        centeredSlides: true,
        spaceBetween: 0,
        loopPreventsSlide: false,
        freeModeMomentum: false,
        freeMode: true,
        effect: 'creative',
        creativeEffect: {
            prev: {
                translate: ['-70%', 120, 0],
                rotate: [0, 0, -15],
                scale: .85,
                origin: `50% 100%`
            },
            next: {
                translate: ['70%', 120, 0],
                rotate: [0, 0, 15],
                scale: .85,
                origin: `50% 100%`
            },
            perspective: false,
            limitProgress: 6,
            progressMultipler: 1,
            //transformEl: '.item'
        }
    });

    $(".bezahlung-lieferung").click(function() {
        $(".bezahlung-lieferung__eine").toggleClass("active");
    });

    /* product page JS */
    const productSlider = new Swiper('.product-slider', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
        },
    });

    $(window).load(function(){
        $(".product-maskload, .product-maskload2").addClass("active");
    });
    setTimeout(function() {

    }, 1000);

    $(".link-load").click(function(e) {
        e.preventDefault();
        $(".page-maskload").addClass("active");
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


});

$(".product-maskload").addClass("load");
$(".page-maskload").removeClass("none");