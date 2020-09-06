<?php

include 'partials/header.php';
if( !post_password_required( $post->ID ) ) :
	if ( have_rows( 'lpb_content' ) ) :
		while ( have_rows( 'lpb_content' ) ) :
			the_row();
			if ( get_row_layout() ) {
				include 'component/' . get_row_layout() . '.php';
			}
		endwhile;
	endif;
	include 'partials/modal.php';
	include 'partials/countdown.php';
else:
	include 'partials/password.php';
endif;
include 'partials/footer.php';
