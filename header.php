<?php
/*
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raylight
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#0e19a9">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="navbar-top" id="navbar_top">
	<div class="container">
		
		<div class="navbar-top-flex">
			<div class="navbar-top-left">
				<ul class="remove-list">
					<li>
						<span id="open_nav_menu_slide">
							<?php echo file_get_contents(get_template_directory() . "/image/menu-icon-1.svg"); ?>
						</span> 
						<b><?php _e( 'Menu', 'raylight' ); ?></b>
					</li>
					<li>
						<?php get_search_form(); ?>
					</li>
				</ul>
			</div><!-- .navbar-top-left -->
			<div class="navbar-top-right">
				<ul class="remove-list">
					<li><span><?php get_template_part( 'template-parts/date' ); ?></span></li>
					<li><a href="<?php social_media_url( 'facebook_url' ); ?>"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="<?php social_media_url( 'twitter_url' ); ?>"><i class="fab fa-twitter"></i></a></li>
					<li><a href="<?php social_media_url( 'instagram_url' ); ?>"><i class="fab fa-instagram"></i></a></li>
					<li><a href="<?php social_media_url( 'youtube_url' ); ?>"><i class="fab fa-youtube"></i></a></li>
				</ul>
			</div><!-- .navbar-top-right -->
		</div><!-- .navbar-top-flex -->

	</div><!-- .container -->
</nav><!-- .navbar-top -->

<nav class="navbar-menu-slide">
	<div class="navbar-menu-slide-container">
		
		<div class="navbar-menu-slide-header">
			<div class="close-navbar-menu-slide">
				<?php echo file_get_contents(get_template_directory() . "/image/close-icon.svg"); ?>
			</div><!-- .close-navbar-menu-slide -->
		</div><!-- .navbar-menu-slide-header -->

		<div class="navbar-menu-slide-content">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-slide' ) ); ?>
		</div><!-- .navbar-menu-slide-content -->

		<div class="navbar-menu-slide-footer">
			<p>
				<a href="<?php social_media_url( 'facebook_url' ); ?>"><i class="fab fa-facebook-f"></i></a>
				<a href="<?php social_media_url( 'twitter_url' ); ?>"><i class="fab fa-twitter"></i></a>
				<a href="<?php social_media_url( 'instagram_url' ); ?>"><i class="fab fa-instagram"></i></a>
				<a href="<?php social_media_url( 'youtube_url' ); ?>"><i class="fab fa-youtube"></i></a>
			</p>
			<p><?php _e( 'Copyright © 2021', 'raylight' ); ?> - <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo bloginfo( 'name' ); ?></a> - <?php _e( 'All Right Reserved', 'raylight' ); ?></p>
		</div><!-- .navbar-menu-slide-footer -->

	</div><!-- .navbar-menu-slide-container -->
</nav><!-- .navbar-menu-slide -->

<nav class="navbar-main" id="navbar_main">
	<div class="container">
		
		<div class="navbar-main-flex">
			<div class="navbar-main-site-branding">

				<?php raylight_custom_logo(); ?>

			</div><!-- .navbar-main-site-branding -->
			<div class="navbar-main-ads">

				<?php raylight_ads_code( 'ads_header' ); ?>
				
			</div><!-- .navbar-main-ads -->
		</div><!-- .navbar-main-flex -->

	</div><!-- .container -->
</nav><!-- .navbar-main -->

<nav class="navbar-menu" id="navbar_menu">
	<div class="container">
		
		<div class="navbar-menu-flex">
			<div class="navbar-menu-menu">

				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

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
					<?php echo file_get_contents(get_template_directory() . "/image/menu-icon.svg"); ?>
				</span>
			</div><!-- .navbar-mobile-menu-button -->

			<div class="navbar-mobile-site-branding">

				<?php raylight_custom_logo(); ?>

			</div><!-- .navbar-mobile-site-branding -->

			<div class="navbar-mobile-search-button">
				<span class="toggle-search-form-mobile">
					<?php echo file_get_contents(get_template_directory() . "/image/search-icon.svg"); ?>
				</span>
			</div><!-- .navbar-mobile-search-button -->

		</div><!-- .navbar-mobile-flex -->

	</div><!-- .container -->
</nav><!-- .navbar-mobile -->

<nav class="navbar-mobile-menu" id="navbar_mobile_menu">
	<div class="container">
		
		<div class="navbar-mobile-menu-flex">
			
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

		</div><!-- .navbar-mobile-menu-flex -->

	</div><!-- .container -->
</nav><!-- .navbar-mobile-menu -->

<section class="search-form-mobile" id="search_form_mobile">
	<div class="container">
		
		<div class="search-form-mobile-flex">
			
			<?php get_template_part( 'template-parts/searchformmobile' ); ?>

		</div><!-- .search-form-mobile-flex -->

	</div><!-- .container -->
</section><!-- .search-form-mobile -->