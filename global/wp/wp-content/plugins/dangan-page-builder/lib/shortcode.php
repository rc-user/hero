<?php

namespace dcp\lpb;

$sc_prefix = '';

if(get_field('sc_prefix', 'option')){
	$sc_prefix = 'dpb_';
}

function shortcode_accent( $atts, $content = null ) {
	if ( is_page_template( DANGAN_PAGE_TEMPLATE_PATH ) ) {
		return '<span class="accent">' . do_shortcode( $content ) . '</span>';
	} else {
		return $content;
	}
}
add_shortcode( $sc_prefix . 'accent', 'dcp\lpb\shortcode_accent' );

function shortcode_label( $atts, $content = null ) {
	if ( is_page_template( DANGAN_PAGE_TEMPLATE_PATH ) ) {
		return '<span class="label">' . do_shortcode( $content ) . '</span>';
	} else {
		return $content;
	}
}
add_shortcode( $sc_prefix . 'label', 'dcp\lpb\shortcode_label' );

function shortcode_wr( $atts, $content = null ) {
	if ( is_page_template( DANGAN_PAGE_TEMPLATE_PATH ) ) {
		return '<span class="wordwrap">' . do_shortcode( $content ) . '</span>';
	} else {
		return $content;
	}
}
add_shortcode( $sc_prefix . 'wr', 'dcp\lpb\shortcode_wr' );
add_shortcode( $sc_prefix . 'word', 'dcp\lpb\shortcode_wr' );

function shortcode_marker( $atts, $content = null ) {
	if ( is_page_template( DANGAN_PAGE_TEMPLATE_PATH ) ) {
		return '<span class="marker">' . do_shortcode( $content ) . '</span>';
	} else {
		return $content;
	}
}
add_shortcode( $sc_prefix . 'marker', 'dcp\lpb\shortcode_marker' );

function shortcode_countdown() {
	if ( is_page_template( DANGAN_PAGE_TEMPLATE_PATH ) ) {
		$html = '<span class="countdown">';
		$html .= '<span class="countdown-before wordwrap">' . do_shortcode( get_field( 'countdown_before' ) ) . '</span>';
		$html .= '<span class="countdown-timer wordwrap"> </span>';
		$html .= '<span class="countdown-after wordwrap">' . do_shortcode( get_field( 'countdown_after' ) ) . '</span>';
		$html .= '<span class="countdown-elapsed" style="display:none;">' . do_shortcode( get_field( 'countdown_elapsed' ) ) . '</span>';
		$html .= '</span>' . PHP_EOL;
		return $html;

	} else {
		return '';
	}

}
add_shortcode( $sc_prefix . 'countdown', 'dcp\lpb\shortcode_countdown' );

function shortcode_text( $atts, $content = null ) {
	if ( is_page_template( DANGAN_PAGE_TEMPLATE_PATH ) ) {
		$param = shortcode_atts(array(
			'color' => '',
			'size' => '',
			'weight' => '',
		), $atts);

		$classes = '';

		if ( $param['color'] ) {
			$classes .= 'text-' . $param['color'] . ' ';
		}

		if ( $param['size'] ) {
			$classes .= 'text-size-' . $param['size'] . ' ';
		}

		if ( $param['weight'] ) {
			$classes .= 'text-weight-' . $param['weight'] . ' ';
		}

		return '<span class="' . $classes . '">' . do_shortcode( $content ) . '</span>';
	} else {
		return $content;
	}
}
add_shortcode( $sc_prefix . 'text', 'dcp\lpb\shortcode_text' );

function shortcode_waku( $atts, $content = null ) {
	if ( is_page_template( DANGAN_PAGE_TEMPLATE_PATH ) ) {
		$param = shortcode_atts(array(
			'style' => 'a',
			'title' => '',
		), $atts);

		$classes = 'waku waku-style-' . mb_strtolower( $param['style'] );
		$title = '';

		if ( $param['title'] ) {
			$title .= '<div class="waku-title"><h4>' . $param['title'] . '</h4></div>';
		}

		return '<div class="' . $classes . '">' . $title . '<div class="waku-content">' . do_shortcode( $content ) . '</div>' . '</div>';
	} else {
		return $content;
	}
}
add_shortcode( $sc_prefix . 'waku', 'dcp\lpb\shortcode_waku' );
