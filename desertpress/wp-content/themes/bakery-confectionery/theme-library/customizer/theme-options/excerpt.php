<?php

/**
 * Excerpt
 *
 * @package bakery_confectionery
 */

$wp_customize->add_section(
	'bakery_confectionery_excerpt_options',
	array(
		'panel' => 'bakery_confectionery_theme_options',
		'title' => esc_html__( 'Excerpt', 'bakery-confectionery' ),
	)
);

// Excerpt - Excerpt Length.
$wp_customize->add_setting(
	'bakery_confectionery_excerpt_length',
	array(
		'default'           => 20,
		'sanitize_callback' => 'absint',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control(
	'bakery_confectionery_excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length (no. of words)', 'bakery-confectionery' ),
		'section'     => 'bakery_confectionery_excerpt_options',
		'settings'    => 'bakery_confectionery_excerpt_length',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 10,
			'max'  => 200,
			'step' => 1,
		),
	)
);