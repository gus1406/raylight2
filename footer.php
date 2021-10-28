<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raylight
 */

if ( ! is_404() ) : 
?>

<footer class="footer" id="footer">
	<div class="container">
		
		<div class="footer-flex">
			<div class="footer-column">
				<div class="footer-site-branding">
					<?php raylight_custom_logo(); ?>
				</div>
				<div class="footer-copy">
					<span><small><?php _e( 'Copyright © 2021', 'raylight' ); ?> - <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo bloginfo( 'name' ); ?></a> - <?php _e( 'All Right Reserved', 'raylight' ); ?></small></span>
				</div>
			</div><!-- .footer-column -->
			<div class="footer-column">
				<?php dynamic_sidebar( 'sidebar-footer' ); ?>
			</div><!-- .footer-column -->
			<div class="footer-column">
				<div class="footer-social-media">
					<h3 class="footer-social-media-title"><?php _e( 'Ikuti Kami', 'raylight' ); ?></h3>
					<ul class="remove-list">
						<li><a href="<?php social_media_url( 'facebook_url' ); ?>"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="<?php social_media_url( 'twitter_url' ); ?>"><i class="fab fa-twitter"></i></a></li>
						<li><a href="<?php social_media_url( 'instagram_url' ); ?>"><i class="fab fa-instagram"></i></a></li>
						<li><a href="<?php social_media_url( 'youtube_url' ); ?>"><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
			</div><!-- .footer-column -->
		</div><!-- .footer-flex -->

	</div><!-- .container -->
</footer><!-- .footer -->

<section class="go-top" id="go_top">
	<span><?php echo file_get_contents(get_template_directory() . "/image/arrow-up-icon.svg"); ?></span>
</section><!-- .go-top -->

<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>