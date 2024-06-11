<?php

/**
 * Sidebar Position
 *
 * @package bakery_confectionery
 */

$wp_customize->add_section(
	'bakery_confectionery_sidebar_position',
	array(
		'title' => esc_html__( 'Sidebar Position', 'bakery-confectionery' ),
		'panel' => 'bakery_confectionery_theme_options',
	)
);

// Sidebar Position - Global Sidebar Position.
$wp_customize->add_setting(
	'bakery_confectionery_sidebar_position',
	array(
		'sanitize_callback' => 'bakery_confectionery_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'bakery_confectionery_sidebar_position',
	array(
		'label'   => esc_html__( 'Global Sidebar Position', 'bakery-confectionery' ),
		'section' => 'bakery_confectionery_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'bakery-confectionery' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'bakery-confectionery' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'bakery-confectionery' ),
		),
	)
);

// Sidebar Position - Post Sidebar Position.
$wp_customize->add_setting(
	'bakery_confectionery_post_sidebar_position',
	array(
		'sanitize_callback' => 'bakery_confectionery_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'bakery_confectionery_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'bakery-confectionery' ),
		'section' => 'bakery_confectionery_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'bakery-confectionery' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'bakery-confectionery' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'bakery-confectionery' ),
		),
	)
);

// Sidebar Position - Page Sidebar Position.
$wp_customize->add_setting(
	'bakery_confectionery_page_sidebar_position',
	array(
		'sanitize_callback' => 'bakery_confectionery_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'bakery_confectionery_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'bakery-confectionery' ),
		'section' => 'bakery_confectionery_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'bakery-confectionery' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'bakery-confectionery' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'bakery-confectionery' ),
		),
	)
);