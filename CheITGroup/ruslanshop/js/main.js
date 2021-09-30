$( document ).ready(function() {
    $(".open-basket, .warenkorb-close").click(function() {
        $("body, .open-basket, .basket-short").toggleClass("active");
    });
    $('.summer-slider').slick({
        infinite: true,
        dots: true,
        arrows: false,
        adaptiveHeight: true,
    });

    $('.passt-items').slick({
        centerMode: true,
        centerPadding: '100px',
        slidesToShow: 4,
        dots: true,
        arrows: false,
        focusOnSelect: true
    });
    $('.review-slider').slick({
        slidesToShow: 3,
        dots: true,
        prevArrow: $('.review-prev'),
        nextArrow: $('.review-next')
    });
});