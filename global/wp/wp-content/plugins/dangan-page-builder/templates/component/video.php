<div <?php dcp\lpb\the_id(); ?> <?php dcp\lpb\the_classes( 'video' ); ?> <?php dcp\lpb\the_background_style( get_sub_field( 'use_background_setting' ), get_sub_field( 'background_color' ), get_sub_field( 'background_image' ), get_sub_field( 'background_image_display' ), get_sub_field( 'background_image_fix' ), get_sub_field( 'background_image_darken' ) ); ?>>
	<div <?php dcp\lpb\the_container_classes(); ?>>
		<div class="row justify-content-md-center">
			<div class="col-md-12 col-sm-12">
				<?php if ( get_sub_field( 'heading' ) ) : ?>
				<h3 class="text-center my-0 pb-3">
					<span class="heading heading-m my-0">
						<?php echo do_shortcode( get_sub_field( 'heading' ) ); ?>
					</span>
				</h3>
				<?php endif; ?>
				<div class="embed-responsive embed-responsive-<?php the_sub_field( 'aspect_ratio' );?> box-shadow">
				<?php if ( 'youtube' === get_sub_field( 'video_type' ) && get_sub_field( 'youtube_id' ) ) : ?>
				 <iframe class="embed-responsive-item" src="<?php dcp\lpb\the_youtube_url(); ?>" allowfullscreen></iframe>
				<?php elseif ( 'vimeo' === get_sub_field( 'video_type' ) && get_sub_field( 'vimeo_id' ) ) : ?>
				<iframe src="<?php dcp\lpb\the_vimeo_url(); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
