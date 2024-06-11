<?php
/**
 * Color Option
 *
 * @package bakery_confectionery
 */

// Primary Color.
$wp_customize->add_setting(
	'primary_color',
	array(
		'default'           => '#ff5d80',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'primary_color',
		array(
			'label'    => __( 'Primary Color', 'bakery-confectionery' ),
			'section'  => 'colors',
			'priority' => 5,
		)
	)
);