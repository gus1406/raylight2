<?php get_header(); ?>

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

				<div class="main-single-metadata">
					<div class="main-single-date">
						<span><?php the_date(); ?> - <?php the_time(); ?></span>
					</div><!-- .main-single-date -->
				</div><!-- .main-single-metadata -->

				<div class="main-single-content">
					<?php the_content(); ?>
				</div><!-- .main-single-content -->

				<div class="main-single-content-pagination">
					<?php
					/*
					 * page break with number
					 *
					 * @link https://developer.wordpress.org/reference/functions/wp_link_pages/
					 */
					wp_link_pages( array(
						'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Halaman:', 'raylight' ) . '</span>',
						'after' => '</div>',
						'next_or_number' => 'number',
						'nextpagelink' => '<span class="previous-next-link">' . __( 'Selanjutnya', 'raylight' ) . '</span>',
						'previouspagelink' => '<span class="previous-next-link">' . __( 'Sebelumnya', 'raylight' ) . '</span>',
						'link_before' => '<span class="link-number">',
						'link_after' => '</span>',
						
					) );
					?>
				</div><!-- .main-single-content-pagination -->

				<div class="main-single-share">
					<div class="main-single-share-title">
						<span>Bagikan:</span>
					</div>
					<a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="tw"><i class="fab fa-twitter"></i></a>
					<a href="#" class="wa"><i class="fab fa-whatsapp"></i></a>
					<a href="#" class="em"><i class="fas fa-envelope"></i></a>
				</div><!-- .main-single-share -->

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