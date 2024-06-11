<?php
/**
 * Banner Section
 *
 * @package bakery_confectionery
 */

$wp_customize->add_section(
	'bakery_confectionery_banner_section',
	array(
		'panel'    => 'bakery_confectionery_front_page_options',
		'title'    => esc_html__( 'Banner Section', 'bakery-confectionery' ),
		'priority' => 10,
	)
);

// Banner Section - Enable Section.
$wp_customize->add_setting(
	'bakery_confectionery_enable_banner_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_enable_banner_section',
		array(
			'label'    => esc_html__( 'Enable Banner Section', 'bakery-confectionery' ),
			'section'  => 'bakery_confectionery_banner_section',
			'settings' => 'bakery_confectionery_enable_banner_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'bakery_confectionery_enable_banner_section',
		array(
			'selector' => '#bakery_confectionery_banner_section .section-link',
			'settings' => 'bakery_confectionery_enable_banner_section',
		)
	);
}

// Banner Section - Banner Slider Content Type.
$wp_customize->add_setting(
	'bakery_confectionery_banner_slider_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'bakery_confectionery_sanitize_select',
	)
);

$wp_customize->add_control(
	'bakery_confectionery_banner_slider_content_type',
	array(
		'label'           => esc_html__( 'Select Banner Slider Content Type', 'bakery-confectionery' ),
		'section'         => 'bakery_confectionery_banner_section',
		'settings'        => 'bakery_confectionery_banner_slider_content_type',
		'type'            => 'select',
		'active_callback' => 'bakery_confectionery_is_banner_slider_section_enabled',
		'choices'         => array(
			'page' => esc_html__( 'Page', 'bakery-confectionery' ),
			'post' => esc_html__( 'Post', 'bakery-confectionery' ),
		),
	)
);

for ( $i = 1; $i <= 3; $i++ ) {

	// Banner Section - Select Banner Post.
	$wp_customize->add_setting(
		'bakery_confectionery_banner_slider_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'bakery_confectionery_banner_slider_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'bakery-confectionery' ), $i ),
			'section'         => 'bakery_confectionery_banner_section',
			'settings'        => 'bakery_confectionery_banner_slider_content_post_' . $i,
			'active_callback' => 'bakery_confectionery_is_banner_slider_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => bakery_confectionery_get_post_choices(),
		)
	);

	// Banner Section - Select Banner Page.
	$wp_customize->add_setting(
		'bakery_confectionery_banner_slider_content_page_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'bakery_confectionery_banner_slider_content_page_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Page %d', 'bakery-confectionery' ), $i ),
			'section'         => 'bakery_confectionery_banner_section',
			'settings'        => 'bakery_confectionery_banner_slider_content_page_' . $i,
			'active_callback' => 'bakery_confectionery_is_banner_slider_section_and_content_type_page_enabled',
			'type'            => 'select',
			'choices'         => bakery_confectionery_get_page_choices(),
		)
	);

	// Banner Section - Button Label.
	$wp_customize->add_setting(
		'bakery_confectionery_banner_button_label_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'bakery_confectionery_banner_button_label_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Button Label %d', 'bakery-confectionery' ), $i ),
			'section'         => 'bakery_confectionery_banner_section',
			'settings'        => 'bakery_confectionery_banner_button_label_' . $i,
			'type'            => 'text',
			'active_callback' => 'bakery_confectionery_is_banner_slider_section_enabled',
		)
	);

	// Banner Section - Button Link.
	$wp_customize->add_setting(
		'bakery_confectionery_banner_button_link_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'bakery_confectionery_banner_button_link_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Button Link %d', 'bakery-confectionery' ), $i ),
			'section'         => 'bakery_confectionery_banner_section',
			'settings'        => 'bakery_confectionery_banner_button_link_' . $i,
			'type'            => 'url',
			'active_callback' => 'bakery_confectionery_is_banner_slider_section_enabled',
		)
	);
}