<style>
	.ads-section-1 {
		width: 100%;
		margin-top: 30px;
	}

	.ads-section-1-content {
		overflow: hidden;
		width: 930px;
		height: auto;
		margin: 0 auto;
	}

	.ads-section-1-content img {
		width: 100%;
		height: 100%;
		object-fit: cover;
		vertical-align: middle;
	}

	@media (max-width: 930px) {
		.ads-section-1-content {
			width: auto;
			height: auto;
		}
	}

	@media (max-width: 468px) {
		.ads-section-1 {
			margin-top: 15px;
		}
	}
</style>

<section class="ads-section-1">
	<div class="container">
		
		<div class="ads-section-1-content">
			
			<?php
			$ads_section_1 = get_theme_mod( 'setting_ads_section_1' );
			echo $ads_section_1;
			?>

		</div><!-- .ads-section-1-content -->

	</div><!-- .container -->
</section><!-- .ads-section-1 -->