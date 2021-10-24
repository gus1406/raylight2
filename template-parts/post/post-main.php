				<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
				?>
				<article class="post-main">
					<figure class="post-main-image">
						<?php raylight_post_thumbnail(); ?>
					</figure>
					<section class="post-main-entry">
						<div class="post-main-category">
							<?php the_category( ' ' ); ?>
						</div>
						<h1 class="post-main-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h1>
						<div class="post-main-datapost">
							<span><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span>
							<span class="separator">/</span>
							<span><?php the_date(); ?></span>
						</div>
					</section>
				</article>
				<?php
					endwhile;
				endif;
				?>