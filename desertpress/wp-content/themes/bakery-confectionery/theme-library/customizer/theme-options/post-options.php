<?php
/**
 * Post Options
 *
 * @package bakery_confectionery
 */

$wp_customize->add_section(
	'bakery_confectionery_post_options',
	array(
		'title' => esc_html__( 'Post Options', 'bakery-confectionery' ),
		'panel' => 'bakery_confectionery_theme_options',
	)
);

// Post Options - Hide Feature Image.
$wp_customize->add_setting(
	'bakery_confectionery_post_hide_feature_image',
	array(
		'default'           => false,
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_post_hide_feature_image',
		array(
			'label'   => esc_html__( 'Hide Featured Image', 'bakery-confectionery' ),
			'section' => 'bakery_confectionery_post_options',
		)
	)
);

// Post Options - Hide Post Heading.
$wp_customize->add_setting(
	'bakery_confectionery_post_hide_post_heading',
	array(
		'default'           => false,
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_post_hide_post_heading',
		array(
			'label'   => esc_html__( 'Hide Post Heading', 'bakery-confectionery' ),
			'section' => 'bakery_confectionery_post_options',
		)
	)
);

// Post Options - Hide Post Content.
$wp_customize->add_setting(
	'bakery_confectionery_post_hide_post_content',
	array(
		'default'           => false,
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_post_hide_post_content',
		array(
			'label'   => esc_html__( 'Hide Post Content', 'bakery-confectionery' ),
			'section' => 'bakery_confectionery_post_options',
		)
	)
);

// Post Options - Hide Date.
$wp_customize->add_setting(
	'bakery_confectionery_post_hide_date',
	array(
		'default'           => false,
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_post_hide_date',
		array(
			'label'   => esc_html__( 'Hide Date', 'bakery-confectionery' ),
			'section' => 'bakery_confectionery_post_options',
		)
	)
);

// Post Options - Hide Author.
$wp_customize->add_setting(
	'bakery_confectionery_post_hide_author',
	array(
		'default'           => false,
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_post_hide_author',
		array(
			'label'   => esc_html__( 'Hide Author', 'bakery-confectionery' ),
			'section' => 'bakery_confectionery_post_options',
		)
	)
);

// Post Options - Hide Category.
$wp_customize->add_setting(
	'bakery_confectionery_post_hide_category',
	array(
		'default'           => true,
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_post_hide_category',
		array(
			'label'   => esc_html__( 'Hide Category', 'bakery-confectionery' ),
			'section' => 'bakery_confectionery_post_options',
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
			'section' => 'bakery_confectionery_post_options',
		)
	)
);

// Post Options - Related Post Label.
$wp_customize->add_setting(
	'bakery_confectionery_post_related_post_label',
	array(
		'default'           => __( 'Related Posts', 'bakery-confectionery' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'bakery_confectionery_post_related_post_label',
	array(
		'label'    => esc_html__( 'Related Posts Label', 'bakery-confectionery' ),
		'section'  => 'bakery_confectionery_post_options',
		'settings' => 'bakery_confectionery_post_related_post_label',
		'type'     => 'text',
	)
);

// Post Options - Hide Related Posts.
$wp_customize->add_setting(
	'bakery_confectionery_post_hide_related_posts',
	array(
		'default'           => false,
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_post_hide_related_posts',
		array(
			'label'   => esc_html__( 'Hide Related Posts', 'bakery-confectionery' ),
			'section' => 'bakery_confectionery_post_options',
		)
	)
);