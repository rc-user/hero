<div <?php dcp\lpb\the_id(); ?> <?php dcp\lpb\the_classes( 'testimonial' ); ?> <?php dcp\lpb\the_background_style( get_sub_field( 'use_background_setting' ), get_sub_field( 'background_color' ), get_sub_field( 'background_image' ), get_sub_field( 'background_image_display' ), get_sub_field( 'background_image_fix' ), get_sub_field( 'background_image_darken' ) ); ?>>
	<div <?php dcp\lpb\the_container_classes(); ?>>
		<div class="row justify-content-md-center">
			<div class="col-lg-12">
				<div class="box box-l">
					<?php if ( get_sub_field( 'heading' ) ) : ?>
					<div class="box-title">
						<div class="box-title-inner">
							<h3 class="text-center heading heading-m">
								<?php echo do_shortcode( get_sub_field( 'heading' ) ); ?>
							</h3>
						</div>
					</div>
					<?php endif; ?>
					<div class="box-text">
						<div class="box-text-inner">
							<?php while ( have_rows( 'testimonial' ) ) : the_row(); ?>
							<div class="testimonial">
								<h4 class="testimonial-title mt-0">
									<?php echo do_shortcode( get_sub_field( 'title' ) ); ?>
								</h4>
								<div class="d-flex align-items-center">
									<?php if ( get_sub_field( 'image' ) ) : ?>
									<div class="testimonial-icon mr-3">
										<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', false, array( 'class' => 'rounded-circle img-fluid shadow-box-lighter' ) ); ?>
									</div>
									<?php endif; ?>
									<div class="testimonial-customer">
										<?php if ( get_sub_field( 'name' ) ) : ?>
										<span class="testimonial-customer-name"><?php echo do_shortcode( get_sub_field( 'name' ) ); ?></span>
										<?php endif; ?>
										<?php if ( get_sub_field( 'info' ) ) : ?>
										<span	class="testimonial-customer-info"><?php echo do_shortcode( get_sub_field( 'info' ) ); ?></span>
										<?php endif; ?>
									</div>
								</div>
								<?php if ( get_sub_field( 'text' ) ) : ?>
								<div class="testimonial-text clearfix">
									<?php echo do_shortcode( get_sub_field( 'text' ) ); ?>
								</div>
								<?php endif; ?>
							</div>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
