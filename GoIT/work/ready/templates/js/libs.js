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
$('.btn-s').click(function(){
  var destination = $("#block1").offset().top - 50;
  $("body,html").animate({ scrollTop: destination}, 500 );
});
});

})(jQuery)