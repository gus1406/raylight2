			<ul>
				<?php
				$args_post_bottom_main = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
					'category_name' => '',
					'ignore_sticky_posts' => true,
				);

				$post_bottom_main = new WP_Query( $args_post_bottom_main );

				if ( $post_bottom_main->have_posts() ) :
					while ( $post_bottom_main->have_posts() ) : $post_bottom_main->the_post();
				?>
				<li>
					<article class="post-bottom-main">
						<figure class="post-bottom-main-image">
							<?php raylight_post_thumbnail(); ?>
						</figure>
						<section class="post-bottom-main-entry">
							<h1 class="post-bottom-main-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h1>
							<div class="post-bottom-main-date">
								<?php the_date(); ?>
							</div>
						</section>
					</article>
				</li>
				<?php
					endwhile;
					$post_bottom_main->reset_postdata();
				endif;
				?>
			</ul>