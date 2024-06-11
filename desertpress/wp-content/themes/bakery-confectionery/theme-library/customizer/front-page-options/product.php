<?php

/**
 * Product Section
 *
 * @package bakery_confectionery
 */

$wp_customize->add_section(
	'bakery_confectionery_products_section',
	array(
		'panel'    => 'bakery_confectionery_front_page_options',
		'title'    => esc_html__( 'Product Section', 'bakery-confectionery' ),
		'priority' => 10,
	)
);

// Product Section - Enable Section.
$wp_customize->add_setting(
	'bakery_confectionery_enable_service_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'bakery_confectionery_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Bakery_Confectionery_Toggle_Switch_Custom_Control(
		$wp_customize,
		'bakery_confectionery_enable_service_section',
		array(
			'label'    => esc_html__( 'Enable Product Section', 'bakery-confectionery' ),
			'section'  => 'bakery_confectionery_products_section',
			'settings' => 'bakery_confectionery_enable_service_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'bakery_confectionery_enable_service_section',
		array(
			'selector' => '#bakery_confectionery_service_section .section-link',
			'settings' => 'bakery_confectionery_enable_service_section',
		)
	);
}

// Product Section - Button Label.
$wp_customize->add_setting(
	'bakery_confectionery_trending_product_heading',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'bakery_confectionery_trending_product_heading',
	array(
		'label'           => esc_html__( 'Heading', 'bakery-confectionery' ),
		'section'         => 'bakery_confectionery_products_section',
		'settings'        => 'bakery_confectionery_trending_product_heading',
		'type'            => 'text',
		'active_callback' => 'bakery_confectionery_is_product_section_enabled',
	)
);

if(class_exists('woocommerce')){
	$bakery_confectionery_args = array(
		'type'                     => 'product',
		'child_of'                 => 0,
		'parent'                   => '',
		'orderby'                  => 'term_group',
		'order'                    => 'ASC',
		'hide_empty'               => false,
		'hierarchical'             => 1,
		'number'                   => '',
		'taxonomy'                 => 'product_cat',
		'pad_counts'               => false
	);
	$bakery_confectionery_categories = get_categories($bakery_confectionery_args);
	$cat_posts = array();
	$m = 0;
	$cat_posts[]='Select';
	foreach($bakery_confectionery_categories as $category){
		if($m==0){
			$default = $category->slug;
			$m++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('bakery_confectionery_trending_product_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'bakery_confectionery_sanitize_select',
	));
	$wp_customize->add_control('bakery_confectionery_trending_product_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select category to display products ','bakery-confectionery'),
		'section' => 'bakery_confectionery_products_section',
		'active_callback' => 'bakery_confectionery_is_product_section_enabled',
	));
}