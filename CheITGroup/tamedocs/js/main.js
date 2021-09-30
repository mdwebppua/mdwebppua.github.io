$( document ).ready(function() {
    $('.batter-wrapper').slick({
        vertical: true,
        infinite: true,
        dots: true,
        arrows: false,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    vertical: false,
                }
            }
        ]
    });

    $('.quote-wrapper').slick({
        arrows: true,
        infinite: false,
        prevArrow: $('.quote-prev'),
        nextArrow: $('.quote-next')
    });

    if( window.innerWidth <= 767 ){
        //$(".nav-header").hide();
    } else {
        //не выполнять
    }

    $(".menu-button").click(function() {
        $("body, .menu-button, .header").toggleClass("active");
        //$(".nav-header").slideToggle(500);
    });
    $(".submenu > a").click(function() {
        $(".submenu").toggleClass("active");
        return false;
    });
    $('.faq-name').click(function () {
        $(this).toggleClass('active').next().slideToggle();
        $('.faq-name').not(this).removeClass('active').next().slideUp();
    });
    $('.faq-name:eq(0)').addClass('active');
    $('.faq-about:eq(0)').show();
});