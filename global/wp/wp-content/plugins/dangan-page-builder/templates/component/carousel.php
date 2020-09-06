<?php
$carousel_id = 'c_' . rand();
?>
<div <?php dcp\lpb\the_id(); ?> <?php dcp\lpb\the_classes( 'carousel' ); ?> <?php dcp\lpb\the_background_style( get_sub_field( 'use_background_setting' ), get_sub_field( 'background_color' ), get_sub_field( 'background_image' ), get_sub_field( 'background_image_display' ), get_sub_field( 'background_image_fix' ), get_sub_field( 'background_image_darken' ) ); ?>>
	<div <?php dcp\lpb\the_container_classes(); ?>>
		<div class="row justify-content-md-center">
			<div class="col-md-12 col-sm-12">
				<?php if ( get_sub_field( 'heading' ) ) : ?>
				<h3 class="text-center heading heading-m mt-0 mb-4">
					<?php echo do_shortcode( get_sub_field( 'heading' ) ); ?>
				</h3>
				<?php endif; ?>
				<div id="<?php echo $carousel_id; ?>" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					<?php while ( have_rows( 'carousel' ) ) : the_row(); ?>
					<li data-target="#<?php echo $carousel_id; ?>" data-slide-to="<?php echo get_row_index() - 1; ?>" class="active"></li>
					<?php endwhile; ?>
					</ol>
					<div class="carousel-inner">
						<?php while ( have_rows( 'carousel' ) ) : the_row(); ?>
						<?php if ( get_sub_field( 'image' ) ) : ?>
						<div class="carousel-item<?php if (  1 == get_row_index() ) {echo ' active';}?>">
							<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', false, array( 'class' => 'd-block w-100 rounded' ) ); ?>
							<img class="d-block w-100 rounded" src="<?php the_sub_field( 'image' ); ?>" alt="<?php echo the_sub_field( 'caption' ); ?>">
							<div class="carousel-caption d-none d-md-block">
								<h4 class="<?php echo the_sub_field( 'caption-color' ); ?> my-1">
									<?php echo do_shortcode( get_sub_field( 'caption' ) ); ?>
								</h4>
							</div>
						</div>
						<?php endif; ?>
						<?php endwhile; ?>
					</div>
					<a class="carousel-control-prev" href="#<?php echo $carousel_id; ?>" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#<?php echo $carousel_id; ?>" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
