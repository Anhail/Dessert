<?php

/**
 * Single Post Options
 *
 * @package bakery_confectionery
 */

$wp_customize->add_section(
	'bakery_confectionery_single_post_options',
	array(
		'title' => esc_html__( 'Single Post Options', 'bakery-confectionery' ),
		'panel' => 'bakery_confectionery_theme_options',
	)
);


// Post Options - Hide Date.
$wp_customize->add_setting(
	'bakery_confectionery_single_post_hide_date',
	array(
		'default'           => false,
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_single_post_hide_date',
		array(
			'label'   => esc_html__( 'Hide Date', 'bakery-confectionery' ),
			'section' => 'bakery_confectionery_single_post_options',
		)
	)
);

// Post Options - Hide Author.
$wp_customize->add_setting(
	'bakery_confectionery_single_post_hide_author',
	array(
		'default'           => false,
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_single_post_hide_author',
		array(
			'label'   => esc_html__( 'Hide Author', 'bakery-confectionery' ),
			'section' => 'bakery_confectionery_single_post_options',
		)
	)
);

// Post Options - Hide Category.
$wp_customize->add_setting(
	'bakery_confectionery_single_post_hide_category',
	array(
		'default'           => false,
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_single_post_hide_category',
		array(
			'label'   => esc_html__( 'Hide Category', 'bakery-confectionery' ),
			'section' => 'bakery_confectionery_single_post_options',
		)
	)
);

// Post Options - Hide Tag.
$wp_customize->add_setting(
	'bakery_confectionery_post_hide_tags',
	array(
		'default'           => false,
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_post_hide_tags',
		array(
			'label'   => esc_html__( 'Hide Tag', 'bakery-confectionery' ),
			'section' => 'bakery_confectionery_single_post_options',
		)
	)
);