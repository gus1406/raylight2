<?php include 'header.php'; ?>

<?php include 'template-parts/ads/ads-section-1.php'; ?>

<main class="main" id="Main">
	<div class="container">
		
		<div class="main-left">

			<div class="posts-main paged">

				<div class="posts-main-paged-title">
					<span>Menampilkan postingan dengan kata kunci <b>Pencarian</b>. <a href="#">Tampilkan semua postingan</a></span>
				</div>
				
				<?php include 'template-parts/post/post-main.php'; ?>

				<div class="posts-main-pagination">
					<a href="#">Sebelumnya</a>
					<a href="#">Selanjutnya</a>
				</div><!-- .posts-main-pagination -->

			</div><!-- .posts-main -->

		</div><!-- .main-left -->
		<div class="main-right">
			<aside class="sidebar">
				
				<?php include 'sidebar.php'; ?>

			</aside><!-- .sidebar -->
		</div><!-- .main-right -->

	</div><!-- .container -->
</main><!-- .main -->

<?php include 'template-parts/ads/ads-section-3.php'; ?>

<?php include 'footer.php'; ?>