<?php

/**
 * Breadcrumb
 *
 * @package bakery_confectionery
 */

$wp_customize->add_section(
	'bakery_confectionery_breadcrumb',
	array(
		'title' => esc_html__( 'Breadcrumb', 'bakery-confectionery' ),
		'panel' => 'bakery_confectionery_theme_options',
	)
);

// Breadcrumb - Enable Breadcrumb.
$wp_customize->add_setting(
	'bakery_confectionery_enable_breadcrumb',
	array(
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_enable_breadcrumb',
		array(
			'label'   => esc_html__( 'Enable Breadcrumb', 'bakery-confectionery' ),
			'section' => 'bakery_confectionery_breadcrumb',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'bakery_confectionery_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'bakery_confectionery_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'bakery-confectionery' ),
		'active_callback' => 'bakery_confectionery_is_breadcrumb_enabled',
		'section'         => 'bakery_confectionery_breadcrumb',
	)
);