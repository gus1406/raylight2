				<?php if ( is_search() ) : ?>
				<div class="posts-main-paged-title">
					<span><?php _e( 'Menampilkan postingan dengan kata kunci', 'raylight' ); ?> <b><?php echo get_search_query(); ?></b>. <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Tampilkan semua postingan', 'raylight' ); ?></a></span>
				</div>
				<?php elseif ( is_tag() ) : ?>
				<div class="posts-main-paged-title">
					<span><?php _e( 'Menampilkan postingan dengan tag', 'raylight' ); ?> <b><?php echo single_tag_title( "", true ); ?></b>. <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Tampilkan semua postingan', 'raylight' ); ?></a></span>
				</div>
				<?php elseif ( is_category() ) : ?>
				<div class="posts-main-paged-title">
					<span><?php _e( 'Menampilkan postingan dengan kategori', 'raylight' ); ?> <b><?php echo single_cat_title( "", true ); ?></b>. <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Tampilkan semua postingan', 'raylight' ); ?></a></span>
				</div>
				<?php elseif ( is_archive() ) : ?>
				<div class="posts-main-paged-title">
					<span><?php _e( 'Menampilkan postingan', 'raylight' ); ?> <b><?php echo the_archive_title(); ?></b>. <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Tampilkan semua postingan', 'raylight' ); ?></a></span>
				</div>
				<?php endif; ?>