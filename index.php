<?php include 'header.php'; ?>

<section class="posts-bottom-menu">
	<div class="container">
		
		<div class="posts-bottom-menu-flex">
			
			<?php include 'template-parts/post/post-bottom-menu.php'; ?>

		</div>

	</div>
</section>

<main class="main" id="Main">
	<div class="container">
		
		<div class="main-left">

			<div class="swiper posts-swiper">
				<div class="swiper-wrapper">
					
					<?php include 'template-parts/post/post-swiper.php'; ?>

				</div>
			</div>

			<div class="posts-main">
				
				<?php include 'template-parts/post/post-main.php'; ?>

				<div class="posts-main-pagination">
					<a href="#">Selanjutnya</a>
				</div>

			</div>

		</div>
		<div class="main-right">
			<aside class="sidebar">
				wdaw
			</aside>
		</div>

	</div>
</main>

<div class="posts-bottom-main">
	<div class="container">
		
		<div class="posts-bottom-main-flex">
			
			<?php include 'template-parts/post/post-bottom-main.php'; ?>

		</div>

	</div>
</div>

<?php include 'footer.php'; ?>