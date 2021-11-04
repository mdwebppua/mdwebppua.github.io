$( document ).ready(function() {

    $(window).scroll(function(){
        $('.header').toggleClass('active', $(this).scrollTop() > 0);
    });

    /* custom change cursor hover buble */
    $('.bublle-wiewasser').on("mousemove", function(e) {

        $('.wiewasser-cursor').css({
            opacity: 1
        });

    }).on('mouseenter', function () {
        $('.wiewasser-cursor, .cursor--canvas').addClass('active');
        $('.wiewasser-cursor').removeClass('transition');
    }).on('mouseleave', function () {
        $(".wiewasser-cursor, .cursor--canvas").removeClass("active");
    });

    /* custom change cursor hover sale */
    $(document).on("mousemove", function(e) {
        var offsetBubller = $('.container').offset();
        mouseX2 = e.pageX - offsetBubller.left;
        mouseY2 = e.pageY - offsetBubller.top;
        mouseX = e.pageX;
        mouseY = e.pageY - $(window).scrollTop();
        TweenLite.to('.entweder-cursor', 0, {left: mouseX, top: mouseY});
    });
    // cache the selector
    var xp = 0, yp = 0;
    var loop = setInterval(function(){
        // change 12 to alter damping higher is slower
        xp += (mouseX2 - xp) / 5;
        yp += (mouseY2 - yp) / 5;
        $(".wiewasser-cursor").css({left:xp, top:yp});

    }, 30);

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

    if ($(".wasser-aroma").length) {
        var wasserAroma = $(".wasser-aroma").offset().top / 2;
        $(window).scroll(function () {
            if ($(window).scrollTop() >= wasserAroma) {
                $(".wiewasser-cursor").addClass("absolute transition");
            } else if ($(window).scrollTop() <= wasserAroma * 2) {
                $(".wiewasser-cursor").removeClass("absolute");
            }
        });
    }



    /* Animation view scroll home page bubble following */
    var controller = new ScrollMagic.Controller();

    var timeline1 = new TimelineMax();

    timeline1
        .to('.title-wiewasser__tofrom1', {
            scale: '0',
            y: '-100vh'
        })
        .fromTo(".title-wiewasser__tofrom2", 1, {
            y: '100vh',
            scale: 0
        }, {
            y: 0,
            scale: 1,
            opacity: 1,
        }, '>')

        .to('.bublle-cir__1', {
            //bottom: '45%',
            //left: '6%'
            left: '1287px',
            bottom: '-283px',
        })
        .to('.bublle-cir__2', {
            //top: '20%',
            //right: '10%'
            right: '0%',
            top: '1100px',
        })
        .to('.bublle-cir__3', {
            //right: '53%',
            //bottom: '22%'
            bottom: '-130px',
            right: '95%',
        })
        .to('.bublle-cir__4', {
            //right: '-8%',
            //bottom: '8%'
            bottom: '-800px',
            right: '76%',
        })
        .to('.bublle-cir__1', {
            bottom: '-45%',
            left: '94%'
        })
        .to('.bublle-cir__2', {
            top: '163%',
            right: '0%'
        })
        .to('.bublle-cir__3', {
            right: '95%',
            bottom: '-22%'
        })
        .to('.bublle-cir__4', {
            right: '76%',
            bottom: '-127%'
        })

    var scene1 = new ScrollMagic.Scene({
        triggerElement: '.section-vs',
        duration: '50%',
        triggerHook: "onLeave",
        offset: '0'
    })
        .setTween(timeline1)
        .setPin('.section-vs')
        .addTo(controller)




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
        console.log(aktionBoxHeigh);
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
        const swiper = new Swiper('.wie-review', {
            loop: true,
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            spaceBetween: 50,
            speed: 5000,
            //slidesPerGroupAuto: true,
            autoplay: {
                delay: 0,
                waitForTransition: false,
                pauseOnMouseEnter: true,
                disableOnInteraction: false,
            },

        });
    };

    if ($(".aromen-slider").length) {
        const swiper = new Swiper('.aromen-slider', {
            loop: true,
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            //freeMode: true,
            spaceBetween: 50,

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
                }, 1000);

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


    $(".open-basket, .warenkorb-close, .basket-mask").click(function() {
        $("body, .warenkorb-basket").toggleClass("ov-hidden");
    });




});