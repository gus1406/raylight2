			<?php

			$post_bottom_menu_cat = get_theme_mod( 'setting_home_post_top' );

			$args_post_bottom_menu = array(
				'post_type' => 'post',
				'posts_per_page' => 3,
				'category_name' => $post_bottom_menu_cat,
				'ignore_sticky_posts' => true,
			);

			$post_bottom_menu = new WP_Query( $args_post_bottom_menu );

			if ( $post_bottom_menu->have_posts() ) :
				while ( $post_bottom_menu->have_posts() ) : $post_bottom_menu->the_post();
			?>

			<article id="post-<?php the_ID(); ?>" class="post-bottom-menu">
				<figure class="post-bottom-menu-image">
					<?php
					$post_thumbnail = get_the_post_thumbnail_url( get_the_ID() );

					if ( has_post_thumbnail() ) {
						echo '<a href="' . get_permalink() . '"><img src="' . esc_url( $post_thumbnail ) . '" ></a>';
					}
					?>
				</figure>
				<section class="post-bottom-menu-entry">
					<h1 class="post-bottom-menu-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h1>
					<span class="post-bottom-menu-date">
						<?php echo get_the_date(); ?>
					</span>
				</section>
			</article>
			
			<?php
				endwhile;
				$post_bottom_menu->reset_postdata();
			endif;
			?>