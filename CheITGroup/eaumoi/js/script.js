$( document ).ready(function() {

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
            if(valueEnter <= 15) {
                $(".du-musst, .step-form").addClass("active");
            }
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
    $(".warenkorb-status__info span").html("15");
    $(".warenkorb-input").change(function() {
        var total = 0;

        $('.warenkorb-input').each(function () {
            total += Number($(this).val());
        });
        var procent = total * (100 / 15);
        $(".warenkorb-status__ico").css("width", procent + "%");
        $(".warenkorb-status__info").css("left", procent + "%");
        $(".warenkorb-status__info span, .min-15").html(15 - total);

        if (total >= 15) {
            $(".bittle-wahle__title span").addClass("active");
            $(".du-musst, .step-form").removeClass("active");
            $(".warenkorb-pluse").removeClass("productCountUp").attr("disabled", true);

        } else {
            $(".bittle-wahle__title span, .du-musst").removeClass("active");
            $(".du-musst, .step-form").addClass("active");
            $(".warenkorb-pluse").addClass("productCountUp").removeAttr("disabled");
        }
        console.log(total);
    });

    if ($('.select-js').length) {
        $('.select-js').select2();
    }
});