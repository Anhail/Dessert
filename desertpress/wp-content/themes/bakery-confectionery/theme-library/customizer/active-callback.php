<?php

/**
 * Active Callbacks
 *
 * @package bakery_confectionery
 */

// Theme Options.
function bakery_confectionery_is_pagination_enabled( $control ) {
	return ( $control->manager->get_setting( 'bakery_confectionery_enable_pagination' )->value() );
}
function bakery_confectionery_is_breadcrumb_enabled( $control ) {
	return ( $control->manager->get_setting( 'bakery_confectionery_enable_breadcrumb' )->value() );
}

// Header Options.
function bakery_confectionery_is_topbar_enabled( $control ) {
	return ( $control->manager->get_Setting( 'bakery_confectionery_enable_topbar' )->value() );
}

// Banner Slider Section.
function bakery_confectionery_is_banner_slider_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'bakery_confectionery_enable_banner_section' )->value() );
}
function bakery_confectionery_is_banner_slider_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'bakery_confectionery_banner_slider_content_type' )->value();
	return ( bakery_confectionery_is_banner_slider_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function bakery_confectionery_is_banner_slider_section_and_content_type_page_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'bakery_confectionery_banner_slider_content_type' )->value();
	return ( bakery_confectionery_is_banner_slider_section_enabled( $control ) && ( 'page' === $content_type ) );
}

// Places section.
function bakery_confectionery_is_product_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'bakery_confectionery_enable_service_section' )->value() );
}
function bakery_confectionery_is_product_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'bakery_confectionery_product_content_type' )->value();
	return ( bakery_confectionery_is_product_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function bakery_confectionery_is_product_section_and_content_type_page_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'bakery_confectionery_product_content_type' )->value();
	return ( bakery_confectionery_is_product_section_enabled( $control ) && ( 'page' === $content_type ) );
}