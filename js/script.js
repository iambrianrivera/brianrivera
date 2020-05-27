$( document ).ready(function() {
    $("#loading").delay(2000).fadeOut(500);
	new WOW().init();
	var scroll = new SmoothScroll('a[href*="#"]', {
		speed: 500,
		speedAsDuration: true
	});
});


// scroll to top

$(window).scroll(function() {
    if ($(this).scrollTop() > 50 ) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
});
$(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$(".scrollpos").offset().top},"2000");return false})});
$(function(){$(".scroll-inner").click(function(){$("html,body").animate({scrollTop:$(".scrollpos").offset().top},"2000");return false})});

// end of scroll to top