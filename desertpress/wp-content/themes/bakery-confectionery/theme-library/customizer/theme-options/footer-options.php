<?php
/**
 * Footer Options
 *
 * @package bakery_confectionery
 */

$wp_customize->add_section(
	'bakery_confectionery_footer_options',
	array(
		'panel' => 'bakery_confectionery_theme_options',
		'title' => esc_html__( 'Footer Options', 'bakery-confectionery' ),
	)
);

$wp_customize->add_setting(
	'bakery_confectionery_footer_copyright_text',
	array(
		'sanitize_callback' => 'wp_kses_post',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control(
	'bakery_confectionery_footer_copyright_text',
	array(
		'label'    => esc_html__( 'Copyright Text', 'bakery-confectionery' ),
		'section'  => 'bakery_confectionery_footer_options',
		'settings' => 'bakery_confectionery_footer_copyright_text',
		'type'     => 'textarea',
	)
);

// Footer Options - Scroll Top.
$wp_customize->add_setting(
	'bakery_confectionery_scroll_top',
	array(
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_scroll_top',
		array(
			'label'   => esc_html__( 'Enable Scroll Top Button', 'bakery-confectionery' ),
			'section' => 'bakery_confectionery_footer_options',
		)
	)
);
// column // 
$wp_customize->add_setting(
	'bakery_confectionery_footer_widget_column',
	array(
        'default'			=> '4',
		'capability'     	=> 'edit_theme_options',
		'sanitize_callback' => 'bakery_confectionery_sanitize_select',
		
	)
);	

$wp_customize->add_control(
	'bakery_confectionery_footer_widget_column',
	array(
	    'label'   		=> __('Select Widget Column','bakery-confectionery'),
	    'section' 		=> 'bakery_confectionery_footer_options',
		'type'			=> 'select',
		'choices'        => 
		array(
			'' => __( 'None', 'bakery-confectionery' ),
			'1' => __( '1 Column', 'bakery-confectionery' ),
			'2' => __( '2 Column', 'bakery-confectionery' ),
			'3' => __( '3 Column', 'bakery-confectionery' ),
			'4' => __( '4 Column', 'bakery-confectionery' )
		) 
	) 
);

$wp_customize->add_setting(
	'bakery_confectionery_scroll_btn_icon',
	array(
        'default' => 'fas fa-chevron-up',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
		
	)
);	

$wp_customize->add_control(new Aster_Change_Icon_Control($wp_customize, 
	'bakery_confectionery_scroll_btn_icon',
	array(
	    'label'   		=> __('Scroll Top Icon','bakery-confectionery'),
	    'section' 		=> 'bakery_confectionery_footer_options',
		'iconset' => 'fa',
	))  
);

$wp_customize->add_setting( 'bakery_confectionery_scroll_top_position', array(
    'default'           => 'bottom-right',
    'sanitize_callback' => 'bakery_confectionery_sanitize_scroll_top_position',
) );

// Add control for Scroll Top Button Position
$wp_customize->add_control( 'bakery_confectionery_scroll_top_position', array(
    'label'    => __( 'Scroll Top Position', 'bakery-confectionery' ),
    'section'  => 'bakery_confectionery_footer_options',
    'settings' => 'bakery_confectionery_scroll_top_position',
    'type'     => 'select',
    'choices'  => array(
        'bottom-right' => __( 'Bottom Right', 'bakery-confectionery' ),
        'bottom-left'  => __( 'Bottom Left', 'bakery-confectionery' ),
        'bottom-center'=> __( 'Bottom Center', 'bakery-confectionery' ),
    ),
) );

$wp_customize->add_setting('footer_text_transform', array(
    'default' => 'none',
    'sanitize_callback' => 'sanitize_text_field',
));

// Add Footer Text Transform Control
$wp_customize->add_control('footer_text_transform', array(
    'label' => __('Footer Text Transform', 'bakery-confectionery'),
    'section' => 'bakery_confectionery_footer_options',
    'settings' => 'footer_text_transform',
    'type' => 'select',
    'choices' => array(
        'none' => __('None', 'bakery-confectionery'),
        'capitalize' => __('Capitalize', 'bakery-confectionery'),
        'uppercase' => __('Uppercase', 'bakery-confectionery'),
        'lowercase' => __('Lowercase', 'bakery-confectionery'),
    ),
));