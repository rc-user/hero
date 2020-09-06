<div <?php dcp\lpb\the_id(); ?> <?php dcp\lpb\the_classes( 'grid' ); ?> <?php dcp\lpb\the_background_style( get_sub_field( 'use_background_setting' ), get_sub_field( 'background_color' ), get_sub_field( 'background_image' ), get_sub_field( 'background_image_display' ), get_sub_field( 'background_image_fix' ), get_sub_field( 'background_image_darken' ) ); ?>>
	<div <?php dcp\lpb\the_container_classes(); ?>>
	<div class="row justify-content-md-center">
<?php
if ( have_rows( 'box' ) ) :
	while ( have_rows( 'box' ) ) : the_row();
?>
<div class="col-lg-<?php the_sub_field( 'col' ) ?>">
	<div class="box">
	<?php if ( get_sub_field( 'heading' ) != '' && get_sub_field( 'heading' ) != null ) : ?>
	<div class="box-title">
	  <div class="box-title-inner">
		<h3><?php echo do_shortcode( get_sub_field( 'heading' ) ); ?></h3>
	  </div>
	</div>
	<?php endif; ?>
	<div class="box-text">
	  <div class="box-text-inner clearfix">
		<?php echo do_shortcode( get_sub_field( 'text' ) ); ?>
	  </div>
	</div>
	</div>
</div>
<?php
	endwhile;
endif;
?>
	</div>
	</div>
</div>
