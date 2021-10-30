<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="navbar-top-left-form">
	<input type="text" name="s" placeholder="<?php esc_attr_e( 'Cari artikel', 'raylight' ); ?>" value="<?php echo get_search_query(); ?>">
	<button type="submit">
		<?php echo file_get_contents(get_template_directory() . "/image/search-icon.svg"); ?>
	</button>
</form>