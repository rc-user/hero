<div <?php dcp\lpb\the_id(); ?> <?php dcp\lpb\the_classes( 'custom' ); ?> <?php dcp\lpb\the_background_style( get_sub_field( 'use_background_setting' ), get_sub_field( 'background_color' ), get_sub_field( 'background_image' ), get_sub_field( 'background_image_display' ), get_sub_field( 'background_image_fix' ), get_sub_field( 'background_image_darken' ) ); ?>>
	<div <?php dcp\lpb\the_container_classes(); ?>>
<?php echo do_shortcode( get_sub_field( 'html' ) ); ?>
	</div>
</div>
