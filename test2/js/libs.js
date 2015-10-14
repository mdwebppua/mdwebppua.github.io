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
	$('.li1').click(function(){
	  var destination = $("#block4").offset().top - 104;
	  $("body,html").animate({ scrollTop: destination}, 500 );
	});
	$('.li2').click(function(){
	  var destination = $("#block11").offset().top - 104;
	  $("body,html").animate({ scrollTop: destination}, 500 );
	});
	$('.li3').click(function(){
	  var destination = $("#block13").offset().top - 104;
	  $("body,html").animate({ scrollTop: destination}, 500 );
	});
	$('.li4').click(function(){
	  var destination = $("#block8").offset().top - 104;
	  $("body,html").animate({ scrollTop: destination}, 500 );
	});
	$('.li5').click(function(){
	  var destination = $("#block5").offset().top - 104;
	  $("body,html").animate({ scrollTop: destination}, 500 );
	});
	$('.li6, .btnGo').click(function(){
	  var destination = $("#block15").offset().top - 104;
	  $("body,html").animate({ scrollTop: destination}, 500 );
	});
});
	
$(document).ready(function(){
	var w = window.innerWidth;
	$(".slBx").css({"width": w});
});

$(document).ready(function(){	
	var h = $(window).height();
	$(window).scroll(function(){
		if ( ($(this).scrollTop()+h/2) >= $("#block5").offset().top) {
			$(".kogo span img").css({visibility:"visible"});
			$(".kogo span img").addClass('animated flip');
		}
		if ( ($(this).scrollTop()+h/2) >= $("#block9").offset().top) {
			$(".sfera span img").css({visibility:"visible"});
			$(".sfera span img").addClass('animated flip');
		}
	});
});

})(jQuery)