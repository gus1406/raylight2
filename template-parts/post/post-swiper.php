					<?php
					$args_post_swiper = array(
						'post_type' => 'post',
						'posts_per_page' => 3,
						'post__in' => get_option( 'sticky_posts' ),
					);

					$post_swiper = new WP_Query( $args_post_swiper );

					if ( $post_swiper->have_posts() ) :
						while ( $post_swiper->have_posts() ) : $post_swiper->the_post();
					?>
					<div class="swiper-slide">
						
						<article id="post-<?php the_ID(); ?>" class="post-swiper <?php raylight_post_class(); ?>">
							<figure class="post-swiper-image">
								<?php raylight_post_thumbnail(); ?>
							</figure>
							<section class="post-swiper-entry">
								<div class="post-swiper-category">
									<?php the_category( ' ' ); ?>
								</div>
								<h1 class="post-swiper-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>
								<div class="post-swiper-datapost">
									<span><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span>
									<span class="separator">/</span>
									<span><?php the_date(); ?></span>
								</div>
							</section>
						</article>

					</div>
					<?php
						endwhile;
						$post_swiper->reset_postdata();
					endif;
					?>