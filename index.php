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
			<section class="sidebar">
				
				<aside class="widget widget_archive">
					<h3 class="widget-title">Arsip blog</h3>
					<ul>
						<li><a href="#">September 2021</a> (10)</li>
						<li><a href="#">Oktober 2021</a> (5)</li>
						<li><a href="#">November 2021</a> (8)</li>
						<li><a href="#">Desember 2021</a> (11)</li>
					</ul>
				</aside>

				<aside class="widget widget_archive">
					<h3 class="widget-title">Arsip blog dropdown</h3>
					<select name="" id="">
						<option value="">Pilih Bulan</option>
						<option value="">September 2021 (10)</option>
						<option value="">Oktober 2021 (10)</option>
						<option value="">November 2021 (10)</option>
						<option value="">Desember 2021 (10)</option>
					</select>
				</aside>

				<aside class="widget widget_search">
					<h3 class="widget-title">Cari artikel</h3>
					<form action="">
						<div>
							<input type="search" name="s" placeholder="Cari artikel">
							<button type="submit"><i class="fas fa-search"></i></button>
						</div>
					</form>
				</aside>

				<aside class="widget widget_media_image">
					<figure>
						<a href="#">
							<img src="image/img1.jpg" alt="thumbnail">
						</a>
					</figure>
				</aside>

				<aside class="widget widget_categories">
					<h3 class="widget-title">Kategori</h3>
					<ul>
						<li><a href="#">World</a> (10)</li>
						<li><a href="#">Economy</a> (5)</li>
						<li><a href="#">Business</a> (8)</li>
						<li><a href="#">Culture</a> (11)</li>
						<li><a href="#">Politics</a> (14)</li>
						<li><a href="#">Lifestyle</a> (7)</li>
						<li><a href="#">Tech</a> (5)</li>
						<li><a href="#">Covid-19</a> (15)</li>
					</ul>
				</aside>

				<aside class="widget widget_categories">
					<h3 class="widget-title">Kategori dropdown</h3>
					<form action="">
						<select name="" id="">
							<option value="">Kategori</option>
							<option value="">World (10)</option>
							<option value="">Economy (5)</option>
							<option value="">Business (8)</option>
							<option value="">Culture (11)</option>
							<option value="">Politics (14)</option>
							<option value="">Lifestyle (7)</option>
							<option value="">Tech (5)</option>
							<option value="">Covid-19 (15)</option>
						</select>
					</form>
				</aside>

			</section>
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