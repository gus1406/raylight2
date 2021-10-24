<?php get_header(); ?>

<main class="main-404" id="Main_404">
	
	<div class="main-404-container">
		<h1 class="main-404-title">404</h1>
		<p class="main-404-desc"><?php _e( 'Maaf, halaman yang anda cari tidak ditemukan', 'raylight' ); ?></p>
		<p class="main-404-home-link"><?php _e( 'Kembali ke', 'raylight' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Beranda', 'raylight' ); ?></a></p>
	</div><!-- .main-404-container -->

</main><!-- .main-404 -->

<?php get_footer(); ?>