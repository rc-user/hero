<?php if ( get_field( 'use_countdown' ) ) : ?>
	<div id="countdown" data-countdown="<?php echo dcp\lpb\get_countdown_limit(); ?>" data-redirect="<?php dcp\lpb\get_countdown_redirect_url(); ?>"></div>
<?php endif; ?>
