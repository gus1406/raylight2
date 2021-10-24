					<h2><?php _e( 'Postingan Terakait', 'raylight' ); ?></h2>
					<ul>
						<?php
						$post_id = get_the_ID();
						$category_object = get_the_category($post_id);
						$category_name = $category_object[0]->name;

						$args_post_related = array(
							'post_type' => 'post',
							'posts_per_page' => 6,
							'order' => 'DESC',
							'orderby' => 'ID',
							'post__not_in' => array( $post->ID ),
							'category_name' => $category_name,
						);

						$post_related = new WP_Query( $args_post_related );

						if ( $post_related->have_posts() ) :
							while ( $post_related->have_posts() ) : $post_related->the_post();
						?>
						<li>
							<article class="post-related">
								<figure class="post-related-image">
									<?php raylight_post_thumbnail(); ?>
								</figure>
								<h1 class="post-related-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>
							</article>
						</li>
						<?php
							endwhile;
							$post_related->reset_postdata();
						endif;
						?>
					</ul>