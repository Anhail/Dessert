<?php

/**
 * Pagination
 *
 * @package bakery_confectionery
 */

$wp_customize->add_section(
	'bakery_confectionery_pagination',
	array(
		'panel' => 'bakery_confectionery_theme_options',
		'title' => esc_html__( 'Pagination', 'bakery-confectionery' ),
	)
);

// Pagination - Enable Pagination.
$wp_customize->add_setting(
	'bakery_confectionery_enable_pagination',
	array(
		'default'           => true,
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_enable_pagination',
		array(
			'label'    => esc_html__( 'Enable Pagination', 'bakery-confectionery' ),
			'section'  => 'bakery_confectionery_pagination',
			'settings' => 'bakery_confectionery_enable_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Type.
$wp_customize->add_setting(
	'bakery_confectionery_pagination_type',
	array(
		'default'           => 'default',
		'sanitize_callback' => 'bakery_confectionery_sanitize_select',
	)
);

$wp_customize->add_control(
	'bakery_confectionery_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Type', 'bakery-confectionery' ),
		'section'         => 'bakery_confectionery_pagination',
		'settings'        => 'bakery_confectionery_pagination_type',
		'active_callback' => 'bakery_confectionery_is_pagination_enabled',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'bakery-confectionery' ),
			'numeric' => __( 'Numeric', 'bakery-confectionery' ),
		),
	)
);
