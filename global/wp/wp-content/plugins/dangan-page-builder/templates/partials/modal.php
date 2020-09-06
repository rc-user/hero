<?php if ( get_field( 'use_popup' ) ) : ?>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" data-modal="<?php the_field( 'popup_condition' ); ?>" data-count="<?php the_field( 'popup_countdonw' ); ?>">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content rounded-0 border-0 shadow-box-harder">
			<a href="#" class="close-modal shadow-box" data-dismiss="modal" aria-label="Close">
				<!-- <i class="fas fa-times text-center" aria-hidden="true"></i> -->
				<span aria-hidden="true">&times;</span>
			</a>
		  <div class="modal-body">
				<?php if ( 'form' == get_field( 'popup_type' ) && get_field( 'popup_form' ) ) : ?>
				<div class="lpb-form lpb-form-<?php the_field( 'popup_style' ); ?> p-3">
					<?php if ( get_field( 'heading', get_field( 'popup_form' ) ) ) : ?>
					<div class="form-title">
						<h3 class="text-center heading heading-m mt-4">
							<?php echo do_shortcode( get_field( 'heading', get_field( 'popup_form' ) ) ); ?>
						</h3>
					</div>
					<?php endif; ?>
					<?php if ( get_field( 'text', get_field( 'popup_form' ) ) ) : ?>
					<div class="form-text px-2 clearfix">
						<?php echo do_shortcode( get_field( 'text', get_field( 'popup_form' ) ) ); ?>
					</div>
					<?php endif; ?>
					<div class="form-content rounded">
						<div class="form-inner mx-auto p-4">
							<?php dcp\lpb\the_form( get_field( 'popup_form' ), get_field( 'popup_style' ) ); ?>
						</div>
						<?php if ( get_field( 'description', get_field( 'popup_form' ) ) ) : ?>
						<div class="form-description mx-auto pb-3 px-2">
							<?php echo do_shortcode( get_field( 'description', get_field( 'popup_form' ) ) ); ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			<?php elseif ( 'image' == get_field( 'popup_type' ) && get_field( 'popup_image' ) ) : ?>
				<div class="modal-image">
					<?php if ( get_field( 'popup_url' ) ) : ?>
					<a href="<?php the_field( 'popup_url' ); ?>"<?php if ( get_field( 'popup_target' ) ) : ?> target="_blank"<?php endif; ?>>
					<?php endif; ?>
						<img src="<?php the_field( 'popup_image' )?>" class="w-100">
					<?php if ( get_field( 'popup_url' ) ) : ?>
					</a>
					<?php endif; ?>
				</div>
			<?php else : ?>
				<div class="alert alert-secondary m-5" role="alert">
					※ポップアップの表示項目がまだ設定されていません。
				</div>
			<?php endif; ?>
			</div>
	  </div>
	</div>
</div>
<?php if ( 'frameOut' == get_field( 'popup_condition' ) ) : ?>
<div id="modalTrigger" class="fixed-top" style="height:80px;">
</div>
<?php endif; ?>
<div id="reModal" class="fixed-bottom invisible">
	<div class="d-flex">
		<div class="ml-auto px-4">
			<a href="#" class="remodal remodal-<?php the_field( 'popup_style' ); ?>" data-toggle="modal" data-target="#modal">
				<?php echo do_shortcode( get_field( 'popup_remodal' ) ); ?>
			</a>
		</div>
	</div>
</div>
<?php endif; ?>
