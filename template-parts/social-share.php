					<div class="main-single-share-title">
						<span><?php _e( 'Bagikan:', 'raylight' ); ?></span>
					</div>
					<a class="fb" target="_blank" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
					<a class="tw" target="_blank" href="https://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
					<a class="wa" target="_blank" href="https://wa.me/?text=<?php the_title(); ?>%20<?php the_permalink(); ?>" title="Share on Whatsapp"><i class="fab fa-whatsapp"></i></a>
					<a class="em" target="_blank" href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>" title="Share on Email"><i class="fas fa-envelope"></i></a>