<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="search" class="search-field" placeholder="What are you looking for?" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'Black&GreenBlog' ); ?>" />
	</label>
	<button type="submit" class="search-submit" style="display: none"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'Black&GreenBlog' ); ?></span></button>
</form>