<?php if ( get_field( 'display_footer' ) ) : ?>
	<footer id="footer" class="footer footer-<?php the_field( 'footer_style', 'option' ); ?>" <?php dcp\lpb\the_background_style( get_field( 'footer_background_use_background_setting', 'option' ),get_field( 'footer_background_background_color', 'option' ),get_field( 'footer_background_background_image', 'option' ),get_field( 'footer_background_background_image_display', 'option' ),get_field( 'footer_background_background_image_fix', 'option' ),get_field( 'footer_background_background_image_darken', 'option' ) ); ?>>
		<div class="container-fluid py-3">

			<?php if ( have_rows( 'footer_link','option' ) ) : ?>
			<div class="footer-menu">
				<ul class="nav justify-content-center">
					<?php while ( have_rows( 'footer_link','option' ) ) : the_row(); ?>
						<?php
						$footer_link = get_sub_field( 'link' );
						if ( ! isset( $footer_link['title'] ) ) {
							$footer_link['title'] = '[リンクテキスト未設定]';
						}
						if ( ! isset( $footer_link['url'] ) ) {
							$footer_link['url'] = '#';
						}
						?>
					<li class="nav-item">
						<a <?php dcp\lpb\the_footer_link_classes(); ?> href="<?php echo $footer_link['url']; ?>" target="<?php echo $footer_link['target']; ?>">
							<?php echo $footer_link['title']; ?>
						</a>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
			<?php endif; ?>
			<div <?php dcp\lpb\the_footer_text_classes(); ?>>
				<?php echo do_shortcode( get_field( 'footer_text','option' ) ); ?>
			</div>
		</div>
	</footer>
	<?php endif; ?>

	<?php if ( ! dcp\lpb\is_uridas() ) : ?>
		<?php wp_footer(); ?>
<?php endif; ?>
</body>
</html>
