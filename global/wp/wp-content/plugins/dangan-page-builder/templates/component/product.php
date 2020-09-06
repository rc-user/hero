<?php
$product_info = get_sub_field( 'info' );
$product_price = get_sub_field( 'price' );
$product_button = get_sub_field( 'button' );

$product_image_class = 'img-fluid';

if ( $product_info['image_round'] ) {
	$product_image_class .= ' rounded';
}
?>

<div <?php dcp\lpb\the_id(); ?> <?php dcp\lpb\the_classes( 'product' ); ?> <?php dcp\lpb\the_background_style( get_sub_field( 'use_background_setting' ), get_sub_field( 'background_color' ), get_sub_field( 'background_image' ), get_sub_field( 'background_image_display' ), get_sub_field( 'background_image_fix' ), get_sub_field( 'background_image_darken' ) ); ?>>
	<?php if ( '2' === get_sub_field( 'layout' ) ) : // ２カラム  ?>
	<div <?php dcp\lpb\the_container_classes(); ?>>
		<div class="row justify-content-md-center">
		  <div class="col-md-6 col-sm-12 text-center">
				<div class="product-image">
					<?php echo wp_get_attachment_image( $product_info['image'], 'full', false, array( 'class' => $product_image_class ) ); ?>
				</div>
		  </div>
		  <div class="col-md-6 col-sm-12 text-center px-3 d-flex">
				<div class="product-order align-self-center">
					<?php if ( $product_info['name'] ) : ?>
					<h2 class="product-title  heading heading-m mt-0 mb-1"><?php echo do_shortcode( $product_info['name'] ); ?></h2>
					<?php endif; ?>
					<?php if ( $product_info['subname'] ) : ?>
					<span class="product-subtitle"><?php echo do_shortcode( $product_info['subname'] ); ?></span>
					<?php endif; ?>
					<div class="product-price mt-2 mb-4">
						<?php if ( $product_price['label'] ) : ?>
					  <span class="pricelabel mr-1"><?php echo do_shortcode( $product_price['label'] ); ?></span>
						<?php endif; ?>
						<?php if ( $product_price['amount'] ) : ?>
					  <span class="amount"><?php echo number_format( $product_price['amount'] ); ?></span>
					  <span class="currency">円</span>
						<?php endif; ?>
						<?php if ( $product_price['tax'] ) : ?>
					  <span class="tax"><?php echo do_shortcode( $product_price['tax'] ); ?></span>
						<?php endif; ?>
						<?php if ( $product_price['description'] ) : ?>
						<span class="description text-center">
							<?php echo do_shortcode( $product_price['description'] ); ?>
						</span>
						<?php endif; ?>
					</div>
					<a href="<?php echo esc_url( $product_button['url'] ); ?>"<?php if ( $product_button['target'] ) : ?> target="_blank"<?php endif; ?> class="btn btn-<?php the_sub_field( 'style' ); ?>">
						<?php if ( $product_button['text1'] ) : ?>
					  <span class="btn-maintext"><?php echo do_shortcode( $product_button['text1'] ); ?></span>
						<?php endif; ?>
						<?php if ( $product_button['text2'] ) : ?>
						<span class="btn-subtext"><?php echo do_shortcode( $product_button['text2'] ); ?></span>
						<?php endif; ?>
					</a>
					<?php if ( $product_button['description'] ) : ?>
					<div class="product-description mt-4 py-2 px-4">
						<?php echo do_shortcode( $product_button['description'] ); ?>
					</div>
					<?php endif; ?>
				</div>
		  </div>
		</div>
	</div>
<?php elseif ( '1' === get_sub_field( 'layout' ) ) : // １カラム ?>
	<div <?php dcp\lpb\the_container_classes(); ?>>
		<div class="row justify-content-md-center">
		  <div class="col-md-10 col-sm-12 text-center px-3">
					<?php if ( $product_info['name'] ) : ?>
					<h2 class="product-title heading heading-l mt-0 mb-1"><?php echo do_shortcode( $product_info['name'] ); ?></h2>
					<?php endif; ?>
					<?php if ( $product_info['subname'] ) : ?>
					<span class="product-subtitle"><?php echo do_shortcode( $product_info['subname'] ); ?></span>
					<?php endif; ?>
					<div class="product-image mt-3">
						<?php echo wp_get_attachment_image( $product_info['image'], 'full', false, array( 'class' => $product_image_class ) ); ?>
					</div>
					<div class="product-price my-4">
						<?php if ( $product_price['label'] ) : ?>
					  <span class="pricelabel mr-1"><?php echo do_shortcode( $product_price['label'] ); ?></span>
						<?php endif; ?>
						<?php if ( $product_price['amount'] ) : ?>
					  <span class="amount"><?php echo number_format( $product_price['amount'] ); ?></span>
					  <span class="currency">円</span>
						<?php endif; ?>
						<?php if ( $product_price['tax'] ) : ?>
					  <span class="tax"><?php echo do_shortcode( $product_price['tax'] ); ?></span>
						<?php endif; ?>
						<?php if ( $product_price['description'] ) : ?>
						<span class="description text-center">
							<?php echo do_shortcode( $product_price['description'] ); ?>
						</span>
						<?php endif; ?>
					</div>
					<a href="<?php echo esc_url( $product_button['url'] ); ?>"<?php if ( $product_button['target'] ) : ?> target="_blank"<?php endif; ?> class="btn btn-lg btn-<?php the_sub_field( 'style' ); ?>">
						<?php if ( $product_button['text1'] ) : ?>
						<span class="btn-maintext"><?php echo do_shortcode( $product_button['text1'] ); ?></span>
						<?php endif; ?>
						<?php if ( $product_button['text2'] ) : ?>
						<span class="btn-subtext"><?php echo do_shortcode( $product_button['text2'] ); ?></span>
						<?php endif; ?>
					</a>
					<?php if ( $product_button['description'] ) : ?>
					<div class="product-description mt-4 py-2 px-4">
						<?php echo do_shortcode( $product_button['description'] ); ?>
					</div>
					<?php endif; ?>
		  </div>
		</div>
	</div>
	<?php endif; ?>
</div>
