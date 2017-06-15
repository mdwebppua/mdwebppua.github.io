(function($) {

$(function() {
    $(".showwind").click(function(){
      var idlink = $(this).attr("id");
      $("#windid-" + idlink).fadeIn().addClass("windactiv");
      $(".mask").fadeIn();
  });
   $(".mask, .bw_close").click(function(){
      $(".windactiv").fadeOut();
      $(".mask").fadeOut();
  });
});

/*скрол*/
$(function() {
  $('.btnGo_bx3').click(function(){
    var destination = $("#block7").offset().top - 56;
    $("body,html").animate({ scrollTop: destination}, 500 );
  });
});

})(jQuery)