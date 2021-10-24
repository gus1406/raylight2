<style>
	.ads-section-3 {
		width: 100%;
		margin-top: 20px;
	}

	.ads-section-3-content {
		overflow: hidden;
		width: 930px;
		height: auto;
		margin: 0 auto;
	}

	.ads-section-3-content img {
		width: 100%;
		height: 100%;
		object-fit: cover;
		vertical-align: middle;
	}

	@media (max-width: 930px) {
		.ads-section-3-content {
			width: auto;
			height: auto;
		}
	}

	@media (max-width: 468px) {
		.ads-section-3 {
			margin-top: 15px;
		}
	}
</style>

<section class="ads-section-3">
	<div class="container">
		<div class="ads-section-3-content">

			<?php raylight_ads_code( 'ads_section_3' ); ?>
			
		</div><!-- .ads-section-3-content -->
	</div><!-- .container -->
</section><!-- .ads-section-3 -->