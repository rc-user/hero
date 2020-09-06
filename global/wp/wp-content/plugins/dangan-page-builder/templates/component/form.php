<div <?php dcp\lpb\the_id(); ?> <?php dcp\lpb\the_classes( 'form' ); ?> <?php dcp\lpb\the_background_style( get_sub_field( 'use_background_setting' ), get_sub_field( 'background_color' ), get_sub_field( 'background_image' ), get_sub_field( 'background_image_display' ), get_sub_field( 'background_image_fix' ), get_sub_field( 'background_image_darken' ) ); ?>>
	<div <?php dcp\lpb\the_container_classes(); ?>>
		<?php if ( get_sub_field( 'form' ) ) : ?>
		<div class="lpb-form-inner ">
		  <div class="row justify-content-md-center">
				<div class="col-md-10 col-sm-12">
					<?php if ( get_field( 'heading', get_sub_field( 'form' ) ) ) : ?>
					<div class="form-title">
						<h3 class="text-center heading heading-m mt-0">
							<?php echo do_shortcode( get_field( 'heading', get_sub_field( 'form' ) ) ); ?>
						</h3>
					</div>
					<?php endif; ?>
					<?php if ( get_field( 'text', get_sub_field( 'form' ) ) ) : ?>
					<div class="form-text px-2 clearfix">
						<?php echo do_shortcode( get_field( 'text', get_sub_field( 'form' ) ) ); ?>
					</div>
					<?php endif; ?>
					<div class="form-content rounded">
						<div class="form-inner mx-auto p-4">
							<?php dcp\lpb\the_form( get_sub_field( 'form' ), get_sub_field( 'style' ) ); ?>
						</div>
						<?php if ( get_field( 'description', get_sub_field( 'form' ) ) ) : ?>
						<div class="form-description mx-auto pb-3 px-2">
							<?php echo do_shortcode( get_field( 'description', get_sub_field( 'form' ) ) ); ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
		  </div>
		</div>
		<?php else : ?>
			<div class="alert alert-secondary m-0" role="alert">
				※登録フォームがまだ設定されていません。
			</div>
		<?php endif; ?>
	</div>
</div>
