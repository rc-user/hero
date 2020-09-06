<div <?php dcp\lpb\the_id(); ?> <?php dcp\lpb\the_classes( 'profile' ); ?> <?php dcp\lpb\the_background_style( get_sub_field( 'use_background_setting' ), get_sub_field( 'background_color' ), get_sub_field( 'background_image' ), get_sub_field( 'background_image_display' ), get_sub_field( 'background_image_fix' ), get_sub_field( 'background_image_darken' ) ); ?>>
	<div <?php dcp\lpb\the_container_classes(); ?>>
		<div class="lpb-profile-inner">
			<div class="row justify-content-md-center">
				<div class="col-md-3 col-sm-12">
					<div class="profile-icon text-center">
						<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', false, array( 'class' => 'img-thumbnail img-fluid' ) ); ?>
					</div>
					<?php if ( get_sub_field( 'description' ) ) : ?>
					<div class="profile-description">
						<?php echo do_shortcode( get_sub_field( 'description' ) ); ?>
					</div>
					<?php endif; ?>
				</div>
				<div class="col-md-7 col-sm-12">
					<div class="profile-info pb-2">
						<?php if ( get_sub_field( 'label' ) ) : ?>
						<h3 class="profile-label"><?php echo do_shortcode( get_sub_field( 'label' ) ); ?></h3>
						<?php endif; ?>
						<?php if ( get_sub_field( 'name' ) ) : ?>
						<span class="profile-name"><?php echo do_shortcode( get_sub_field( 'name' ) ); ?></span>
						<?php endif; ?>
						<?php if ( get_sub_field( 'title' ) ) : ?>
						<span class="profile-title"><?php echo do_shortcode( get_sub_field( 'title' ) ); ?></span>
						<?php endif; ?>
					</div>
					<?php if ( get_sub_field( 'text' ) ) : ?>
					<div class="profile-text pt-2 px-2 clearfix">
						<?php echo do_shortcode( get_sub_field( 'text' ) ); ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
