			<style>
				.ads-section-2 {
					width: 100%;
					margin-top: 30px;
				}

				.ads-section-2-content {
					overflow: hidden;
					width: 580px;
					height: auto;
					margin: 0  auto;
				}

				.ads-section-2-content img {
					width: 100%;
					height: 100%;
					object-fit: cover;
					vertical-align: middle;
				}

				@media (max-width: 968px) {
					.ads-section-2-content {
						width: auto;
						height: auto;
					}
				}

				@media (max-width: 468px) {
					.ads-section-2 {
						margin-top: 15px;
					}
				}
			</style>		
	
			<div class="ads-section-2">
				<div class="ads-section-2-content">
					
					<?php raylight_ads_code( 'ads_section_2' ); ?>

				</div><!-- .ads-section-2-content -->
			</div><!-- .ads-section-2 -->