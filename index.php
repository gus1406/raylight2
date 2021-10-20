<?php get_header(); ?>

<section class="posts-bottom-menu">
	<div class="container">		
		<div class="posts-bottom-menu-flex">
			
			<?php get_template_part( 'template-parts/post/post', 'bottom-menu' ); ?>

		</div><!-- .posts-bottom-menu-flex -->
	</div><!-- .container -->
</section><!-- .posts-bottom-menu -->

<?php get_template_part( 'template-parts/ads/ads', 'section-1' ); ?>

<main class="main" id="Main">
	<div class="container">
		
		<div class="main-left">
			<div class="swiper posts-swiper">
				<div class="swiper-wrapper">
					
					<?php get_template_part( 'template-parts/post/post', 'swiper' ); ?>

				</div><!-- .swiper-wrapper -->
			</div><!-- .swiper -->

			<?php include 'template-parts/ads/ads-section-2.php'; ?>

			<div class="posts-main">
				
				<?php include 'template-parts/post/post-main.php'; ?>

				<div class="posts-main-pagination">
					<a href="#">Selanjutnya</a>
				</div><!-- .posts-main-pagination -->

			</div><!-- .posts-main -->
		</div><!-- .main-left -->
		
		<?php include 'sidebar.php'; ?>
		
		<div style="clear: both;"></div>

	</div><!-- .container -->
</main><!-- .main -->

<?php include 'template-parts/ads/ads-section-3.php'; ?>

<section class="posts-bottom-main">
	<div class="container">
		<div class="posts-bottom-main-flex">
			
			<?php include 'template-parts/post/post-bottom-main.php'; ?>

		</div><!-- posts-bottom-main-flex -->
	</div><!-- .container -->
</section><!-- .posts-bottom-main -->

<?php include 'footer.php'; ?>