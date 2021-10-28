<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raylight
 */

get_header();
?>

<?php get_template_part( 'template-parts/ads/ads', 'section-1' ); ?>

<main class="main" id="Main">
	<div class="container">
		
		<div class="main-left">

			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
			?>

			<div class="main-single">
				
				<div class="main-single-breadcrumbs">
					<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
				</div><!-- .main-single-breadcrumbs -->

				<div class="main-single-title">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				</div><!-- .main-single-title -->

				<div class="main-single-content">
					<?php the_content(); ?>
				</div><!-- .main-single-content -->

				<div class="main-single-content-pagination">
					<?php raylight_post_pagination(); ?>
				</div><!-- .main-single-content-pagination -->

			</div>
			<?php
				endwhile;
			endif;
			?>

		</div><!-- .main-left -->

		<?php get_sidebar(); ?>
		
		<div style="clear: both;"></div>

	</div><!-- .container -->
</main><!-- .main -->

<?php get_template_part( 'template-parts/ads/ads', 'section-3' ); ?>

<?php get_footer(); ?>