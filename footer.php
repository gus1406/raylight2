<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raylight
 */
?>

<footer class="footer" id="footer">
	<div class="container">
		
		<div class="footer-flex">
			<div class="footer-column">
				<div class="footer-site-branding">

					<?php get_template_part( 'template-parts/site-branding' ); ?>

				</div><!-- .footer-site-branding -->
				<div class="footer-copy">
					<span>
						<small>

							<?php get_template_part( 'template-parts/site-copyright' ); ?>

						</small>
					</span>
				</div><!-- .footer-copy -->
			</div><!-- .footer-column -->
			<div class="footer-column">

				<?php dynamic_sidebar( 'sidebar-footer' ); ?>

			</div><!-- .footer-column -->
			<div class="footer-column">
				<div class="footer-social-media">

					<h3 class="footer-social-media-title"><?php _e( 'Ikuti Kami', 'raylight' ); ?></h3>
					<ul class="remove-list">

						<?php get_template_part( 'template-parts/site-social-media' ); ?>
						
					</ul>
					
				</div><!-- .footer-social-media -->
			</div><!-- .footer-column -->
		</div><!-- .footer-flex -->

	</div><!-- .container -->
</footer><!-- .footer -->

<section class="go-top" id="go_top">

	<span><?php echo file_get_contents(get_template_directory() . "/image/arrow-up-icon.svg"); ?></span>

</section><!-- .go-top -->

<?php wp_footer(); ?>

</body>
</html>