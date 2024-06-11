<?php
/**
 * Front Page Options
 *
 * @package Bakery Confectionery
 */

$wp_customize->add_panel(
	'bakery_confectionery_front_page_options',
	array(
		'title'    => esc_html__( 'Front Page Options', 'bakery-confectionery' ),
		'priority' => 20,
	)
);

// Banner Section.
require get_template_directory() . '/theme-library/customizer/front-page-options/banner.php';

// Tranding Product Section.
require get_template_directory() . '/theme-library/customizer/front-page-options/product.php';