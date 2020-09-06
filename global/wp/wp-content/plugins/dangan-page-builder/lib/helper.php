<?php

namespace dcp\lpb;

function the_id() {
	$id = get_sub_field( 'id' );
	if ( $id ) {
		echo 'id="' . $id . '"';
	}
}

function the_classes( $component ) {
	$classes = 'lpb-' . $component;
	if ( 'custom' != $component ) {
		$classes .= ' lpb-' . $component . '-' . get_sub_field( 'style' );
	}
	if ( get_sub_field( 'class' ) ) {
		$classes .= ' ' . get_sub_field( 'class' );
	}
	echo 'class="' . $classes . '"';
}

function the_container_classes() {
	$classes = 'container';
	if ( get_sub_field( 'padding-top' ) ) {
		$classes .= ' pt-' . get_sub_field( 'padding-top' );
	}
	if ( get_sub_field( 'padding-bottom' ) ) {
		$classes .= ' pb-' . get_sub_field( 'padding-bottom' );
	}
	echo 'class="' . $classes . '"';
}

function the_background_style( $use, $color, $image, $image_display, $image_fix, $image_darken ) {

	if ( $use ) {
		$css = '';
		if ( $color ) {
			$css .= 'background-color: ' . $color . '; ';
		}
		if ( $image ) {
			if ( $image_darken ) {
				$css .= 'background-image:linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(' . $image . '); ';
			} else {
				$css .= 'background-image: url(' . $image . '); ';
			}
			$css .= 'background-position: center center; ';
			if ( 'original' == $image_display ) {
				$css .= 'background-repeat: no-repeat; ';
			} elseif ( 'cover' == $image_display ) {
				$css .= 'background-size: cover; ';
			} elseif ( 'repeat' == $image_display ) {
				$css .= 'background-repeat: repeat; ';
			}
		}
		if ( $image_fix ) {
			$css .= 'background-attachment: fixed; ';
		}

		if ( '' != $css ) {
			echo 'style="' . $css . '"';
		}
	}
}

function the_youtube_url() {
	$url = 'https://www.youtube.com/embed/';
	$id = get_sub_field( 'youtube_id' );
	$param = '?';

	if ( get_sub_field( 'auto_play' ) ) {
		$param .= 'autoplay=1&';
	} else {
		$param .= 'autoplay=0&';
	}

	if ( get_sub_field( 'title_bar' ) ) {
		$param .= 'showinfo=1&';
	} else {
		$param .= 'showinfo=0&';
	}

	if ( get_sub_field( 'control_bar' ) ) {
		$param .= 'controls=1&';
	} else {
		$param .= 'controls=0&';
	}

	$param .= 'rel=0';
	echo $url . $id . $param;
}

function the_vimeo_url() {
	$url = 'https://player.vimeo.com/video/';
	$id = get_sub_field( 'vimeo_id' );
	$param = '?';

	if ( get_sub_field( 'auto_play' ) ) {
		$param .= 'autoplay=1';
	} else {
		$param .= 'autoplay=0';
	}

	echo $url . $id . $param;
}

function the_form( $id, $style ) {

	$form = '';
	$target = '';

	if ( get_field( 'target', $id ) ) {
		$target = ' target="_blank"';
	}

	$form .= '<form action="' . get_field( 'action', $id ) . '" method="post"' . $target . '>' . PHP_EOL;

	if ( have_rows( 'input', $id ) ) {
		while ( have_rows( 'input', $id ) ) {
			the_row();
			$form .= '<input';
			$form .= ' type="' . get_sub_field( 'type' ) . '"';
			if ( get_sub_field( 'placeholder' ) ) {
				$form .= ' placeholder="' . get_sub_field( 'placeholder' ) . '"';
			}
			if ( get_sub_field( 'name' ) ) {
				$form .= ' name="' . get_sub_field( 'name' ) . '"';
			}
			if ( get_sub_field( 'value' ) ) {
				$form .= ' value="' . get_sub_field( 'value' ) . '"';
			}
			if ( 'hidden' != get_sub_field( 'type' ) ) {
				$form .= ' class="form-control form-control-lg mb-3"';
			}
			if ( get_sub_field( 'required' ) ) {
				$form .= ' required';
			}
			$form .= '>' . PHP_EOL;
		}
	}

	$form .= '<button type="submit" class="btn btn-' . $style . '">';
	$form .= '<span class="btn-maintext">' . get_field( 'submit', $id ) . '</span>';
	$form .= '</button>' . PHP_EOL;;

	$form .= '</form>' . PHP_EOL;;

	echo $form;
}

function the_header_classes() {
	$classes = 'navbar navbar-expand-lg px-0';
	if ( 'style-a' == get_field( 'header_style', 'option' ) || 'style-b' == get_field( 'header_style', 'option' )  ) {
		$classes .= ' navbar-light';
	} else {
		$classes .= ' navbar-dark';
	}
	echo 'class="' . $classes . '"';
}

function the_footer_text_classes() {
	$classes = 'footer-text text-center mb-3';
	if ( 'style-a' == get_field( 'footer_style', 'option' ) || 'style-b' == get_field( 'footer_style', 'option' )  ) {
		$classes .= ' text-gray';
	} else {
		$classes .= ' text-white';
	}
	echo 'class="' . $classes . '"';
}

function the_footer_link_classes() {
	$classes = 'nav-link';
	if ( 'style-a' == get_field( 'footer_style', 'option' ) || 'style-b' == get_field( 'footer_style', 'option' )  ) {
		$classes .= ' text-secondary';
	} else {
		$classes .= ' text-light';
	}
	echo 'class="' . $classes . '"';
}
