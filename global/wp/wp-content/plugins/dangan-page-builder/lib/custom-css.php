<?php

namespace dcp\lpb;

add_action( 'wp_head', 'dcp\lpb\custom_css', PHP_INT_MAX );

function custom_css() {
	if ( is_page_template( DANGAN_PAGE_TEMPLATE_PATH ) && get_field( 'add_css' ) ) {
?>
<style><?php the_field( 'css' ); ?></style>
<?php
	}
}
