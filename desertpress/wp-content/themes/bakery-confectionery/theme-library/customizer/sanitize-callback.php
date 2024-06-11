<?php

function bakery_confectionery_sanitize_select( $input, $setting ) {
	$input = sanitize_key( $input );
	$choices = $setting->manager->get_control( $setting->id )->choices;
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

function bakery_confectionery_sanitize_switch( $input ) {
	if ( true === $input ) {
		return true;
	} else {
		return false;
	}
}
/**
 * Sanitize HTML input.
 *
 * @param string $input HTML input to sanitize.
 * @return string Sanitized HTML.
 */
function bakery_confectionery_sanitize_html( $input ) {
    return wp_kses_post( $input );
}

/**
 * Sanitize URL input.
 *
 * @param string $input URL input to sanitize.
 * @return string Sanitized URL.
 */
function bakery_confectionery_sanitize_url( $input ) {
    return esc_url_raw( $input );
}


// Sanitize Scroll Top Position
function bakery_confectionery_sanitize_scroll_top_position( $input ) {
    $bakery_confectionery_valid_positions = array( 'bottom-right', 'bottom-left', 'bottom-center' );
    if ( in_array( $input, $bakery_confectionery_valid_positions ) ) {
        return $input;
    } else {
        return 'bottom-right'; // Default to bottom-right if invalid value
    }
}