<div <?php dcp\lpb\the_id(); ?> <?php dcp\lpb\the_classes( 'heading' ); ?> <?php dcp\lpb\the_background_style( get_sub_field( 'use_background_setting' ), get_sub_field( 'background_color' ), get_sub_field( 'background_image' ), get_sub_field( 'background_image_display' ), get_sub_field( 'background_image_fix' ), get_sub_field( 'background_image_darken' ) ); ?>>
	<div <?php dcp\lpb\the_container_classes(); ?>>
	<h2 class="text-center m-0">
		<?php if ( get_sub_field( 'heading1' ) ) : ?>
	  <span class="heading heading-<?php the_sub_field( 'heading1_size' );?> m-0"><?php echo do_shortcode( get_sub_field( 'heading1' ) ); ?></span>
		<?php endif; ?>
		<?php if ( get_sub_field( 'heading2' ) ) : ?>
	  <span class="heading heading-<?php the_sub_field( 'heading2_size' );?> m-0"><?php echo do_shortcode( get_sub_field( 'heading2' ) ); ?></span>
		<?php endif; ?>
	</h2>
	</div>
</div>
