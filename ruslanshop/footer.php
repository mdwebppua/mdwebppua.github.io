<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/fa_all.min.js"></script>

<script>
    $('.summer-items').slick({
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
</script>