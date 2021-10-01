$(window).on("load", function(){

	$("#open_nav_menu_slide").click(function(){
		$(".navbar-menu-slide").animate({ marginLeft: '0' }, 1000);
		$(".navbar-menu-slide-container").animate({ marginLeft: '0' }, 1200);
	});

	$(".close-navbar-menu-slide").click(function(){
		$(".navbar-menu-slide").animate({ marginLeft: '-100%' }, 1000);
		$(".navbar-menu-slide-container").animate({ marginLeft: '-100%' }, 1200);
	});

});