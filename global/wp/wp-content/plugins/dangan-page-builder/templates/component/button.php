<div <?php dcp\lpb\the_id(); ?> <?php dcp\lpb\the_classes( 'button' ); ?> <?php dcp\lpb\the_background_style( get_sub_field( 'use_background_setting' ), get_sub_field( 'background_color' ), get_sub_field( 'background_image' ), get_sub_field( 'background_image_display' ), get_sub_field( 'background_image_fix' ), get_sub_field( 'background_image_darken' ) ); ?>>
	<div <?php dcp\lpb\the_container_classes(); ?>>
		<div class="row justify-content-md-center">
		  <div class="col-md-10 col-sm-12 text-center">
			  <a href="<?php echo esc_url( get_sub_field( 'url' ) ); ?>"<?php if ( get_sub_field( 'target' ) ) : ?> target="_blank"<?php endif; ?> class="btn btn-lg btn-<?php the_sub_field( 'style' ); ?>">
				<?php if ( get_sub_field( 'text1' ) ) : ?>
			  <span class="btn-maintext"><?php echo do_shortcode( get_sub_field( 'text1' ) ); ?></span>
				<?php endif; ?>
				<?php if ( get_sub_field( 'text2' ) ) : ?>
			  <span class="btn-subtext"><?php echo do_shortcode( get_sub_field( 'text2' ) ); ?></span>
				<?php endif; ?>
			  </a>
		  </div>
		</div>
	</div>
</div>
