<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raylight
 */

get_header(); 
?>

<section class="posts-bottom-menu">
	<div class="container">		
		<div class="posts-bottom-menu-flex">
			
			<?php get_template_part( 'template-parts/post/post-bottom-menu' ); ?>

		</div><!-- .posts-bottom-menu-flex -->
	</div><!-- .container -->
</section><!-- .posts-bottom-menu -->

<?php get_template_part( 'template-parts/ads/ads-section-1' ); ?>

<main class="main" id="Main">
	<div class="container">
		
		<div class="main-left">
			<div class="swiper posts-swiper">
				<div class="swiper-wrapper">
					
					<?php get_template_part( 'template-parts/post/post-swiper' ); ?>

				</div><!-- .swiper-wrapper -->
			</div><!-- .swiper -->

			<?php get_template_part( 'template-parts/ads/ads-section-2' ); ?>

			<div class="posts-main">
				
				<?php get_template_part( 'template-parts/post/post-main' ); ?>

				<div class="posts-main-pagination">

					<?php posts_nav_link( ' ', 'Sebelumnya', 'Selanjutnya' ); ?>
					
				</div><!-- .posts-main-pagination -->

			</div><!-- .posts-main -->
		</div><!-- .main-left -->
		
		<?php get_sidebar(); ?>
		
		<div style="clear: both;"></div>

	</div><!-- .container -->
</main><!-- .main -->

<?php get_template_part( 'template-parts/ads/ads-section-3' ); ?>

<section class="posts-bottom-main">
	<div class="container">
		<div class="posts-bottom-main-flex">
			
			<?php get_template_part( 'template-parts/post/post-bottom-main' ); ?>

		</div><!-- posts-bottom-main-flex -->
	</div><!-- .container -->
</section><!-- .posts-bottom-main -->

<?php get_footer(); ?>