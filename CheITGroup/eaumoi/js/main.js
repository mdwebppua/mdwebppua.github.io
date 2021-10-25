$( document ).ready(function() {
    $(window).scroll(function(){
        $('.header').toggleClass('active', $(this).scrollTop() > 0);
    });
    $(".cookie-close").click(function() {
        $(".cookie-zum").addClass("closed");
    });
    $(".aktion-close").click(function() {
        $(".aktion-box").addClass("closed");
    });

    if ($(".scene").length) {
        var scene = document.getElementById('scene');
        var parallaxInstance = new Parallax(scene);
    }

    /* animation */
    AOS.init();

    $(".zumshop-slick__item").mouseout(function() {
        $(this).css("background", "#fff");
    });
    $(".zumshop-slick__item").mouseover(function() {
        $(this).css("background", $(this).data("bg"));
    });

    /* start carusel zoomshop */
    gsap.defaults({
        ease: "none"
    });

    var picker = document.querySelector(".picker");
    var cells = document.querySelectorAll(".cell");
    var proxy = document.createElement("div");

    var cellWidth = 400;
    var rotation = -180;

    var numCells = cells.length;
    var cellStep = 1 / numCells;
    var wrapWidth = cellWidth * numCells;

    var baseTl = gsap.timeline({ paused: true });

    gsap.set(picker, {
        perspective: 1200,
        width: wrapWidth - cellWidth
    });

    for (var i = 0; i < cells.length; i++) {
        initCell(cells[i], i);
    }

    var animation = gsap
        .timeline({ repeat: -1, paused: true })
        .add(baseTl.tweenFromTo(1, 2))
        .progress(1);

    var draggable = new Draggable(proxy, {
        allowContextMenu: true,
        type: "x",
        trigger: picker,
        inertia: true,
        onDrag: updateProgress,
        onThrowUpdate: updateProgress,
        snap: {
            x: snapX
        },
        onThrowComplete: function () {
            console.log("onThrowComplete");
            //TODO: animation that inject selected card title
        }
    });

    function snapX(x) {
        return Math.round(x / cellWidth) * cellWidth;
    }

    function updateProgress() {
        let newProg = this.x / wrapWidth;
        newProg = newProg - Math.floor(newProg);
        animation.progress(newProg);
    }

    function initCell(element, index) {
        gsap.set(element, {
            width: cellWidth,
            scale: 0.8,
            rotation: rotation,
            x: -cellWidth
        });

        var tl = gsap
            .timeline({ repeat: 1 })
            .to(element, 1, { x: "+=" + wrapWidth, rotation: -rotation }, 0)
            .to(element, cellStep, { scale: 1, repeat: 1, yoyo: true }, 0.5 - cellStep);

        baseTl.add(tl, i * -cellStep);
    }
    /* end carusel zoomshop */

/*
    $('.zumshop-slick').on('init',function(){
        $(".slick-center").prev().removeClass('nextdiv').addClass('prevdiv');
        $(".slick-center").next().removeClass('prevdiv').addClass('nextdiv');
    });
    $('.zumshop-slick').slick({
        centerMode: true,
        focusOnSelect: true,
        slidesToShow: 3,
    });
    $('.zumshop-slick').on('beforeChange',function(){
        $(".slick-center").prev().addClass('prevdiv');
        $(".slick-center").next().addClass('nextdiv');
        $(".slick-center").removeClass('prevdiv').removeClass('nextdiv');
    });
    $('.zumshop-slick').on('afterChange',function(){
        $(".slick-center").prev().removeClass('nextdiv');
        $(".slick-center").next().removeClass('prevdiv');
        $(".slick-center").removeClass('prevdiv').removeClass('nextdiv');
    });
*/

    $(".wie-list").slick({
        centerMode: true,
        //centerPadding: '250px',
        slidesToShow: 4,
        cssEase: 'linear',
        autoplay: true,
        infinite: true,
        autoplaySpeed: 0,
        speed: 5000,
        dots: true,
        prevArrow: ".wie-prev",
        nextArrow: ".wie-next",
        appendDots: ".wie-dots",
        variableWidth: true,
    })

    $(".aromen-list").slick({
        centerMode: true,
        //centerPadding: '25px',
        slidesToShow: 3,
        dots: false,
        arrows: false,
        variableWidth: true,
        focusOnSelect: true
    })

    var trinkLottie = lottie.loadAnimation({
        container: document.getElementById('trink-lottie'),
        renderer: 'svg',
        loop: false,
        autoplay: false,
        path: 'img/lottie/dein-trink.json'
    });
    $(".dein-trink").hover(function() {

    });

    if ($(".dein-trink").length) {
        var triggerOne = $(".dein-trink").offset().top - 200;
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
        var einGutschein = $(".ein-gutschein").offset().top - 200;
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
                }, 2000);

                return false;
            }
        });
    }

    if ($(".wasser-banner").length) {
        var wasserBanner = $(".wasser-banner").offset().top;
        $(window).scroll(function () {
            if ($(window).scrollTop() >= wasserBanner) {
                $(".wasser-banner").addClass("active");
                return;
            }
        });
        var wasserhahn = $(".wasserhahn").offset().top - 500;
        $(window).scroll(function () {
            if ($(window).scrollTop() >= wasserhahn) {
                $(".wasser-banner").removeClass("active");
                return;
            }
        });
    }



    /* custom change cursor hover sale */
    $('.entweder-item').changeCursor('img/more-ico.svg', 35, 35, 13000);

    /* product button count cart */
    $('.productCountDown').on('click', function (e) {
        e.preventDefault();
        let count = $(this).next('.productCount'),
            value = +count.val();
        if (value > 1) count.val(value - 1);
        count.trigger('change');
    });
    $('.productCountUp').on('click', function (e) {
        e.preventDefault();
        let count = $(this).prev('.productCount'),
            value = +count.val();
        count.val(value + 1);
        count.trigger('change');
    });

    jQuery("body").on('click', '[href*="#"]', function(e){
        var fixed_offset = 100;
        jQuery('html,body').stop().animate({ scrollTop: jQuery(this.hash).offset().top - fixed_offset }, 1000);
        e.preventDefault();
    });

    /* tab page abo */
    $('.tabs').on('click', 'li:not(.current)', function() {
        $(this).addClass('current').siblings().removeClass('current').parents('.konfigurieren-step').find('.konfigurieren-tab').eq($(this).index()).fadeIn(150).siblings('.konfigurieren-tab').hide();
    })

    /* abo max 12 Wochen */
    $( ".allewoche" ).change(function() {
        var max = parseInt($(this).attr('max'));
        var min = parseInt($(this).attr('min'));
        if ($(this).val() > max)
        {
            $(this).val(max);
            $(".allewoche-max").addClass("active");
        } else if ($(this).val() < max) {
            $(".allewoche-max").removeClass("active");
        }
        else if ($(this).val() < min)
        {
            $(this).val(min);
        }
    });


});