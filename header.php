<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#0e19a9">
	<title>Raylight - Blog Wordpress Theme</title>

	<link rel="stylesheet" href="css/normalize.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
	
</head>
<body>

<nav class="navbar-top" id="navbar_top">
	<div class="container">
		
		<div class="navbar-top-flex">
			<div class="navbar-top-left">
				<ul class="remove-list">
					<li>
						<span id="open_nav_menu_slide">
							<?php echo file_get_contents("image/menu-icon-1.svg"); ?>
						</span> 
						<b>Menu</b>
					</li>
					<li>
						<form action="" class="navbar-top-left-form">
							<input type="text" name="s" placeholder="Cari artikel">
							<button type="submit">
								<?php echo file_get_contents("image/search-icon.svg"); ?>
							</button>
						</form>
					</li>
				</ul>
			</div><!-- .navbar-top-left -->
			<div class="navbar-top-right">
				<ul class="remove-list">
					<li><span>Kamis, 30 September 2021</span></li>
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				</ul>
			</div><!-- .navbar-top-right -->
		</div><!-- .navbar-top-flex -->

	</div><!-- .container -->
</nav><!-- .navbar-top -->

<nav class="navbar-menu-slide">
	<div class="navbar-menu-slide-container">
		
		<div class="navbar-menu-slide-header">
			<div class="close-navbar-menu-slide">
				<?php echo file_get_contents("image/close-icon.svg"); ?>
			</div><!-- .close-navbar-menu-slide -->
		</div><!-- .navbar-menu-slide-header -->

		<div class="navbar-menu-slide-content">
			<ul>
				<li><a href="#">Beranda</a></li>
				<li><a href="#">Dunia</a></li>
				<li><a href="#">Ekonomi</a></li>
				<li><a href="#">Bisnis</a></li>
				<li><a href="#">Budaya</a></li>
				<li><a href="#">Politik</a></li>
				<li><a href="#">Gaya Hidup</a></li>
				<li><a href="#">Teknologi</a></li>
				<li><a href="#">Covid-19</a></li>
			</ul>
		</div><!-- .navbar-menu-slide-content -->

		<div class="navbar-menu-slide-footer">
			<p>
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</p>
			<p>Copyright © 2021 - <a href="#">Raylight</a> - All Right Reserved</p>
		</div><!-- .navbar-menu-slide-footer -->

	</div><!-- .navbar-menu-slide-container -->
</nav><!-- .navbar-menu-slide -->

<nav class="navbar-main" id="navbar_main">
	<div class="container">
		
		<div class="navbar-main-flex">
			<div class="navbar-main-site-branding">
				<!--<h1><a href="#">Raylight</a></h1>-->
				<a href="#">
					<img src="image/logo_raylight.png" alt="logo">
				</a>
			</div><!-- .navbar-main-site-branding -->
			<div class="navbar-main-ads">
				<img src="image/ads_728_90.jpg" alt="ads">
			</div><!-- .navbar-main-ads -->
		</div><!-- .navbar-main-flex -->

	</div><!-- .container -->
</nav><!-- .navbar-main -->

<nav class="navbar-menu" id="navbar_menu">
	<div class="container">
		
		<div class="navbar-menu-flex">
			<div class="navbar-menu-menu">
				<ul>
					<li><a href="#">Beranda</a></li>
					<li><a href="#">Dunia</a></li>
					<li><a href="#">Ekonomi</a></li>
					<li><a href="#">Bisnis</a></li>
					<li><a href="#">Budaya</a></li>
					<li><a href="#">Politik</a></li>
					<li><a href="#">Gaya Hidup</a></li>
					<li><a href="#">Teknologi</a></li>
					<li><a href="#">Covid-19</a></li>
				</ul>
			</div><!-- .navbar-menu-menu -->
		</div><!-- .navbar-menu-flex -->

	</div><!-- .container -->
</nav><!-- .navbar-menu -->

<!-- navbar mobile, max width 768px -->

<nav class="navbar-mobile" id="navbar_mobile">
	<div class="container">
		
		<div class="navbar-mobile-flex">

			<div class="navbar-mobile-menu-button">
				<span id="navbar_mobile_open_menu_slide">
					<?php echo file_get_contents("image/menu-icon.svg"); ?>
				</span>
			</div><!-- .navbar-mobile-menu-button -->

			<div class="navbar-mobile-site-branding">
				<!--<h1><a href="#">Raylight</a></h1>-->
				<a href="#">
					<img src="image/logo_raylight.png" alt="logo">
				</a>
			</div><!-- .navbar-mobile-site-branding -->

			<div class="navbar-mobile-search-button">
				<span class="toggle-search-form-mobile">
					<?php echo file_get_contents("image/search-icon.svg"); ?>
				</span>
			</div><!-- .navbar-mobile-search-button -->

		</div><!-- .navbar-mobile-flex -->

	</div><!-- .container -->
</nav><!-- .navbar-mobile -->

<nav class="navbar-mobile-menu" id="navbar_mobile_menu">
	<div class="container">
		
		<div class="navbar-mobile-menu-flex">
			<ul>
				<li><a href="#">Beranda</a></li>
				<li><a href="#">Dunia</a></li>
				<li><a href="#">Ekonomi</a></li>
				<li><a href="#">Bisnis</a></li>
				<li><a href="#">Budaya</a></li>
				<li><a href="#">Politik</a></li>
				<li><a href="#">Gaya Hidup</a></li>
				<li><a href="#">Teknologi</a></li>
				<li><a href="#">Covid-19</a></li>
			</ul>
		</div><!-- .navbar-mobile-menu-flex -->

	</div><!-- .container -->
</nav><!-- .navbar-mobile-menu -->

<section class="search-form-mobile" id="search_form_mobile">
	<div class="container">
		
		<div class="search-form-mobile-flex">
			<form action="">
				<button type="submit">
					<?php echo file_get_contents("image/search-icon.svg"); ?>
				</button>
				<input type="text" name="s" placeholder="Cari artikel">
				<button type="button" class="toggle-search-form-mobile">
					<?php echo file_get_contents("image/close-icon.svg"); ?>
				</button>
			</form>
		</div><!-- .search-form-mobile-flex -->

	</div><!-- .container -->
</section><!-- .search-form-mobile -->