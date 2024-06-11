<?php
/**
 * Header Options
 *
 * @package bakery_confectionery
 */

// General Options
$wp_customize->add_section(
	'bakery_confectionery_general_options',
	array(
		'panel' => 'bakery_confectionery_theme_options',
		'title' => esc_html__( 'General Options', 'bakery-confectionery' ),
	)
);

// General Options - Enable Preloader.
$wp_customize->add_setting(
	'bakery_confectionery_enable_preloader',
	array(
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_enable_preloader',
		array(
			'label'   => esc_html__( 'Enable Preloader', 'bakery-confectionery' ),
			'section' => 'bakery_confectionery_general_options',
		)
	)
);

// Site Title - Enable Setting.
$wp_customize->add_setting(
	'bakery_confectionery_enable_site_title_setting',
	array(
		'default'           => true,
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_enable_site_title_setting',
		array(
			'label'    => esc_html__( 'Disable Site Title', 'bakery-confectionery' ),
			'section'  => 'title_tagline',
			'settings' => 'bakery_confectionery_enable_site_title_setting',
		)
	)
);

// Tagline - Enable Setting.
$wp_customize->add_setting(
	'bakery_confectionery_enable_tagline_setting',
	array(
		'default'           => false,
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_enable_tagline_setting',
		array(
			'label'    => esc_html__( 'Enable Tagline', 'bakery-confectionery' ),
			'section'  => 'title_tagline',
			'settings' => 'bakery_confectionery_enable_tagline_setting',
		)
	)
);
$wp_customize->add_setting( 'bakery_confectionery_site_title_size', array(
    'default'           => 30, // Default font size in pixels
    'sanitize_callback' => 'absint', // Sanitize the input as a positive integer
) );

// Add control for site title size
$wp_customize->add_control( 'bakery_confectionery_site_title_size', array(
    'type'        => 'number',
    'section'     => 'title_tagline', // You can change this section to your preferred section
    'label'       => __( 'Site Title Font Size ', 'bakery-confectionery' ),
    'input_attrs' => array(
        'min'  => 10,
        'max'  => 100,
        'step' => 1,
    ),
) );

$wp_customize->add_section(
	'bakery_confectionery_header_options',
	array(
		'panel' => 'bakery_confectionery_theme_options',
		'title' => esc_html__( 'Header Options', 'bakery-confectionery' ),
	)
);

// Header Options - Enable Topbar.
$wp_customize->add_setting(
	'bakery_confectionery_enable_topbar',
	array(
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_enable_topbar',
		array(
			'label'   => esc_html__( 'Enable Topbar', 'bakery-confectionery' ),
			'section' => 'bakery_confectionery_header_options',
		)
	)
);

// Header Options - Contact Number.
$wp_customize->add_setting(
	'bakery_confectionery_discount_topbar_text',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'bakery_confectionery_discount_topbar_text',
	array(
		'label'           => esc_html__( 'Topbar Discount Text', 'bakery-confectionery' ),
		'section'         => 'bakery_confectionery_header_options',
		'type'            => 'text',
		'active_callback' => 'bakery_confectionery_is_topbar_enabled',
	)
);

// Header Options - Topbar Button Text.
$wp_customize->add_setting(
	'bakery_confectionery_discount_topbar_button_text',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'bakery_confectionery_discount_topbar_button_text',
	array(
		'label'           => esc_html__( 'Discount Button Text', 'bakery-confectionery' ),
		'section'         => 'bakery_confectionery_header_options',
		'type'            => 'text',
		'active_callback' => 'bakery_confectionery_is_topbar_enabled',
	)
);


// Header Options - Topbar Button Link.
$wp_customize->add_setting(
	'bakery_confectionery_discount_topbar_button_url',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'bakery_confectionery_discount_topbar_button_url',
	array(
		'label'           => esc_html__( 'Discount Button Link', 'bakery-confectionery' ),
		'section'         => 'bakery_confectionery_header_options',
		'type'            => 'url',
		'active_callback' => 'bakery_confectionery_is_topbar_enabled',
	)
);

// Header Options - Topbar Phone Number.
$wp_customize->add_setting(
	'bakery_confectionery_discount_topbar_phone_nember',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'bakery_confectionery_discount_topbar_phone_nember',
	array(
		'label'           => esc_html__( 'Phone Number', 'bakery-confectionery' ),
		'section'         => 'bakery_confectionery_header_options',
		'type'            => 'text',
		'active_callback' => 'bakery_confectionery_is_topbar_enabled',
	)
);

// Header Options - Topbar Phone Icon.
$wp_customize->add_setting(
	'bakery_confectionery_phone_btn_icon',
	array(
        'default' => 'fas fa-phone-alt',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
		
	)
);	

$wp_customize->add_control(new Aster_Change_Icon_Control($wp_customize, 
	'bakery_confectionery_phone_btn_icon',
	array(
	    'label'   		=> __('Phone Icon','bakery-confectionery'),
	    'section' 		=> 'bakery_confectionery_header_options',
		'iconset' => 'fa',
	))  
);

// Header Options - Enable Search Icon.
$wp_customize->add_setting(
	'bakery_confectionery_enable_search_icon',
	array(
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_enable_search_icon',
		array(
			'label'   => esc_html__( 'Enable Search Icon', 'bakery-confectionery' ),
			'section' => 'bakery_confectionery_header_options',
		)
	)
);
