$(window).on("load", function(){

	$("#open_nav_menu_slide, #navbar_mobile_open_menu_slide").click(function(){
		$(".navbar-menu-slide").animate({ marginLeft: '0' }, 1000);
		$(".navbar-menu-slide-container").animate({ marginLeft: '0' }, 1200);
	});

	$(".close-navbar-menu-slide").click(function(){
		$(".navbar-menu-slide").animate({ marginLeft: '-100%' }, 1000);
		$(".navbar-menu-slide-container").animate({ marginLeft: '-100%' }, 1200);
	});

	$(window).scroll(function(){
		if ($(this).scrollTop() > 300) {
			$("#go_top").fadeIn();
		} else {
			$("#go_top").fadeOut();
		}
	})

	$("#go_top").click(function(){
		$("html, body").animate({ scrollTop: 0 }, 1000);
	});

	$(window).scroll(function(){
		if ($(this).scrollTop() > 110) {
			$("#navbar_mobile").addClass("scroll");
		} else {
			$("#navbar_mobile").removeClass("scroll");
		}
	});

	$(".toggle-search-form-mobile").click(function(){
		$("#search_form_mobile").slideToggle();
	})

});