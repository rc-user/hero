<div <?php dcp\lpb\the_id(); ?> <?php dcp\lpb\the_classes( 'headline' ); ?> <?php dcp\lpb\the_background_style( get_sub_field( 'use_background_setting' ), get_sub_field( 'background_color' ), get_sub_field( 'background_image' ), get_sub_field( 'background_image_display' ), get_sub_field( 'background_image_fix' ), get_sub_field( 'background_image_darken' ) ); ?>>
	<div <?php dcp\lpb\the_container_classes(); ?>>
		<div class="row justify-content-md-center d-flex align-items-center">

		<?php if ( 'text' === get_sub_field( 'layout' ) ) : ?>
			<div class="col-md-12 col-sm-12">
				<h1 class="text-center m-0">
					<?php if ( get_sub_field( 'heading1' ) ) : ?>
					<span class="heading heading-<?php the_sub_field( 'heading1_size' );?>"><?php echo do_shortcode( get_sub_field( 'heading1' ) ); ?></span>
					<?php endif; ?>
					<?php if ( get_sub_field( 'heading2' ) ) : ?>
				  <span class="heading heading-<?php the_sub_field( 'heading2_size' );?>"><?php echo do_shortcode( get_sub_field( 'heading2' ) ); ?></span>
					<?php endif; ?>
					<?php if ( get_sub_field( 'heading3' ) ) : ?>
				  <span class="heading heading-<?php the_sub_field( 'heading3_size' );?>"><?php echo do_shortcode( get_sub_field( 'heading3' ) ); ?></span>
					<?php endif; ?>
				</h1>
			</div>
		<?php elseif ( 'image' === get_sub_field( 'layout' ) ) : ?>
			<div class="col-md-12 col-sm-12">
				<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', false, array( 'class' => 'img-fluid' ) ); ?>
			</div>
		<?php elseif ( 'both' === get_sub_field( 'layout' ) ) : ?>
			<div class="col-md-8 col-sm-12">
				<h1 class="m-0 py-2">
					<?php if ( get_sub_field( 'heading1' ) ) : ?>
					<span class="heading heading-<?php the_sub_field( 'heading1_size' );?>"><?php echo do_shortcode( get_sub_field( 'heading1' ) ); ?></span>
					<?php endif; ?>
					<?php if ( get_sub_field( 'heading2' ) ) : ?>
				  <span class="heading heading-<?php the_sub_field( 'heading2_size' );?>"><?php echo do_shortcode( get_sub_field( 'heading2' ) ); ?></span>
					<?php endif; ?>
					<?php if ( get_sub_field( 'heading3' ) ) : ?>
				  <span class="heading heading-<?php the_sub_field( 'heading3_size' );?>"><?php echo do_shortcode( get_sub_field( 'heading3' ) ); ?></span>
					<?php endif; ?>
				</h1>
			</div>
			<div class="col-md-4 col-sm-12">
				<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', false, array( 'class' => 'img-fluid' ) ); ?>
			</div>
		<?php endif; ?>

		</div>
	</div>
</div>
