<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package bakery_confectionery
 */

function bakery_confectionery_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'bakery_confectionery_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1360,
		'height'                 => 110,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'bakery_confectionery_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'bakery_confectionery_custom_header_setup' );

if ( ! function_exists( 'bakery_confectionery_header_style' ) ) :

add_action( 'wp_enqueue_scripts', 'bakery_confectionery_header_style' );
function bakery_confectionery_header_style() {
	if ( get_header_image() ) :
	$bakery_confectionery_custom_css = "
        header.site-header .header-main-wrapper .bottom-header-outer-wrapper .bottom-header-part{
			background-image:url('".esc_url(get_header_image())."') !important;
			background-position: center top;
		}";
	   	wp_add_inline_style( 'bakery-confectionery-style', $bakery_confectionery_custom_css );
	endif;
}
endif;