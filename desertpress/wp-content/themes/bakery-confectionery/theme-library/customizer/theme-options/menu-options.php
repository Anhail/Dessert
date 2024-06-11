<?php

/**
 * Menu Options
 *
 * @package bakery_confectionery
 */

// Menu Options
$wp_customize->add_section(
	'bakery_confectionery_Menu_options',
	array(
		'panel' => 'bakery_confectionery_theme_options',
		'title' => esc_html__( 'Menu Options', 'bakery-confectionery' ),
	)
);

$wp_customize->add_setting( 'menu_text_transform', array(
    'default'           => 'none', // Default value for text transform
    'sanitize_callback' => 'sanitize_text_field',
) );

// Add control for menu text transform
$wp_customize->add_control( 'menu_text_transform', array(
    'type'     => 'select',
    'section'  => 'bakery_confectionery_Menu_options', // Adjust the section as needed
    'label'    => __( 'Menu Text Transform', 'bakery-confectionery' ),
    'choices'  => array(
        'none'       => __( 'None', 'bakery-confectionery' ),
        'capitalize' => __( 'Capitalize', 'bakery-confectionery' ),
        'uppercase'  => __( 'Uppercase', 'bakery-confectionery' ),
        'lowercase'  => __( 'Lowercase', 'bakery-confectionery' ),
    ),
) );
