<div <?php dcp\lpb\the_id(); ?> <?php dcp\lpb\the_classes( 'bullet' ); ?> <?php dcp\lpb\the_background_style( get_sub_field( 'use_background_setting' ), get_sub_field( 'background_color' ), get_sub_field( 'background_image' ), get_sub_field( 'background_image_display' ), get_sub_field( 'background_image_fix' ), get_sub_field( 'background_image_darken' ) ); ?>>
	<div <?php dcp\lpb\the_container_classes(); ?>>
		<div class="row justify-content-md-center">
			<div class="col-lg-12">
				<div class="box box-l">
					<?php if ( get_sub_field( 'heading' ) ) : ?>
					<div class="box-title">
					  <div class="box-title-inner">
						<h3 class="heading heading-m">
								<?php echo do_shortcode( get_sub_field( 'heading' ) ); ?>
						</h3>
					  </div>
					</div>
					<?php endif; ?>
					<div class="box-text">
					  <div class="box-text-inner">
							<?php if ( get_sub_field( 'text1' ) ) : ?>
								<div class="clearfix">
								<?php echo do_shortcode( get_sub_field( 'text1' ) ); ?>
								</div>
							<?php endif; ?>
							<?php while ( have_rows( 'bullet_list' ) ) : the_row(); ?>
							<div class="bullet-list py-2 d-flex">
								<div class="bullet-icon pr-2">
									<i class="fa fa-check" aria-hidden="true"></i>
								</div>
								<div class="bullet-text">
									<?php echo do_shortcode( get_sub_field( 'bullet' ) ); ?>
								</div>
							</div>
							<?php endwhile; ?>
							<?php if ( get_sub_field( 'text2' ) ) : ?>
								<div class="clearfix">
								<?php echo do_shortcode( get_sub_field( 'text2' ) ); ?>
								</div>
							<?php endif; ?>

					  </div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
