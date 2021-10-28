<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

				<?php if ( has_excerpt() ) : ?>
				<div class="main-single-excerpt">
					<p><?php echo get_the_excerpt(); ?></p>
				</div><!-- .main-single-excerpt -->
				<?php endif; ?>

				<div class="main-single-metadata">
					<div class="main-single-date">
						<span><?php the_date(); ?> - <?php the_time(); ?></span>
					</div><!-- .main-single-date -->
					<div class="metadata-box">
						<div class="main-single-admin">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">Oleh <?php the_author(); ?></a>
						</div>
						<div class="main-single-comments-count">
							<a href="#"><i class="fas fa-comment"></i> <?php _e( 'Komentar: ', 'raylight' ); echo get_comments_number(); ?></a>
						</div>
					</div><!-- metadata-box -->
				</div><!-- .main-single-metadata -->

				<figure class="main-single-featured-image">
					<?php raylight_post_thumbnail(); ?>
				</figure><!-- .main-single-featured-image -->

				<div class="main-single-content">
					<?php the_content(); ?>
				</div><!-- .main-single-content -->

				<div class="main-single-content-pagination">
					<?php raylight_post_pagination(); ?>
				</div><!-- .main-single-content-pagination -->

				<div class="main-single-tags">
					<?php raylight_post_tags(); ?>
				</div><!-- .main-single-tags -->

				<div class="main-single-share">
					<?php get_template_part( 'template-parts/social-share' ); ?>
				</div><!-- .main-single-share -->

				<div class="main-single-author-box">
					<div class="main-single-author-box-image">
						<?php echo get_avatar( get_the_author_meta('user_email')); ?>
					</div><!-- .main-single-author-box-image -->
					<div class="main-single-author-box-content">
						<h3><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></h3>
						<p><?php echo get_the_author_meta( 'description' ); ?></p>
					</div><!-- .main-single-author-box-content -->
				</div><!-- .main-single-author-box -->

				<div class="main-single-related">
					<?php get_template_part( 'template-parts/post/post', 'related' ); ?>
				</div><!-- .main-single-related -->

				<div class="main-single-comments">
					<?php if ( comments_open() ) { comments_template(); } ?>
				</div>	

			</div><!-- .main-single -->

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