			<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
				<button type="submit">
					<?php echo file_get_contents(get_template_directory() . "/image/search-icon.svg"); ?>
				</button>
				<input type="text" name="s" placeholder="Cari artikel" value="<?php echo get_search_query(); ?>">
				<button type="button" class="toggle-search-form-mobile">
					<?php echo file_get_contents(get_template_directory() . "/image/close-icon.svg"); ?>
				</button>
			</form>