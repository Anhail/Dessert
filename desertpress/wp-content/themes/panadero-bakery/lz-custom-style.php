<?php 

	$panadero_bakery_custom_style = '';

	// Logo Size
	$panadero_bakery_logo_top_padding = get_theme_mod('panadero_bakery_logo_top_padding');
	$panadero_bakery_logo_bottom_padding = get_theme_mod('panadero_bakery_logo_bottom_padding');
	$panadero_bakery_logo_left_padding = get_theme_mod('panadero_bakery_logo_left_padding');
	$panadero_bakery_logo_right_padding = get_theme_mod('panadero_bakery_logo_right_padding');

	if( $panadero_bakery_logo_top_padding != '' || $panadero_bakery_logo_bottom_padding != '' || $panadero_bakery_logo_left_padding != '' || $panadero_bakery_logo_right_padding != ''){
		$panadero_bakery_custom_style .=' .logo {';
			$panadero_bakery_custom_style .=' padding-top: '.esc_attr($panadero_bakery_logo_top_padding).'px; padding-bottom: '.esc_attr($panadero_bakery_logo_bottom_padding).'px; padding-left: '.esc_attr($panadero_bakery_logo_left_padding).'px; padding-right: '.esc_attr($panadero_bakery_logo_right_padding).'px;';
		$panadero_bakery_custom_style .=' }';
	}

	// Product section padding
	$panadero_bakery_product_section_padding = get_theme_mod('panadero_bakery_product_section_padding');

	if( $panadero_bakery_product_section_padding != ''){
		$panadero_bakery_custom_style .=' #product-section {';
			$panadero_bakery_custom_style .=' padding-top: '.esc_attr($panadero_bakery_product_section_padding).'px; padding-bottom: '.esc_attr($panadero_bakery_product_section_padding).'px;';
		$panadero_bakery_custom_style .=' }';
	}

	// Site Title Font Size
	$panadero_bakery_site_title_font_size = get_theme_mod('panadero_bakery_site_title_font_size');
	if( $panadero_bakery_site_title_font_size != ''){
		$panadero_bakery_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$panadero_bakery_custom_style .=' font-size: '.esc_attr($panadero_bakery_site_title_font_size).'px;';
		$panadero_bakery_custom_style .=' }';
	}

	$panadero_bakery_site_title_color = get_theme_mod('panadero_bakery_site_title_color');

	if ( $panadero_bakery_site_title_color != '') {
		$panadero_bakery_custom_style .=' .logo h1 a, .logo p.site-title a{';
			$panadero_bakery_custom_style .=' color:'.esc_attr($panadero_bakery_site_title_color).';';
		$panadero_bakery_custom_style .=' }';
	}

	// Site Tagline Font Size
	$panadero_bakery_site_tagline_font_size = get_theme_mod('panadero_bakery_site_tagline_font_size');
	if( $panadero_bakery_site_tagline_font_size != ''){
		$panadero_bakery_custom_style .=' .logo p.site-description {';
			$panadero_bakery_custom_style .=' font-size: '.esc_attr($panadero_bakery_site_tagline_font_size).'px;';
		$panadero_bakery_custom_style .=' }';
	}

	$panadero_bakery_site_tagline_color = get_theme_mod('panadero_bakery_site_tagline_color');

	if ( $panadero_bakery_site_tagline_color != '') {
		$panadero_bakery_custom_style .=' p.site-description{';
			$panadero_bakery_custom_style .=' color:'.esc_attr($panadero_bakery_site_tagline_color).';';
		$panadero_bakery_custom_style .=' }';
	}

	//Menu animation
	$panadero_bakery_dropdown_anim = get_theme_mod('panadero_bakery_dropdown_anim');

	if ( $panadero_bakery_dropdown_anim != '') {
		$panadero_bakery_custom_style .=' .nav-menu ul ul {';
			$panadero_bakery_custom_style .=' animation:'.esc_attr($panadero_bakery_dropdown_anim).' 1s ease;';
		$panadero_bakery_custom_style .=' }';
	}

	// Copyright padding
	$panadero_bakery_copyright_padding = get_theme_mod('panadero_bakery_copyright_padding');

	if( $panadero_bakery_copyright_padding != ''){
		$panadero_bakery_custom_style .=' .site-info {';
			$panadero_bakery_custom_style .=' padding-top: '.esc_attr($panadero_bakery_copyright_padding).'px; padding-bottom: '.esc_attr($panadero_bakery_copyright_padding).'px;';
		$panadero_bakery_custom_style .=' }';
	}

	$panadero_bakery_slider_hide_show = get_theme_mod('panadero_bakery_slider_hide_show',false);
	if( $panadero_bakery_slider_hide_show == true){
		$panadero_bakery_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$panadero_bakery_custom_style .=' display:none;';
		$panadero_bakery_custom_style .=' }';
	} else {
		$panadero_bakery_custom_style .=' .page-template-custom-home-page #header {';
			$panadero_bakery_custom_style .=' position:static; background: #ff6796; padding: 15px 0;';
		$panadero_bakery_custom_style .=' }';
	}

	$panadero_bakery_copyright_color = get_theme_mod('panadero_bakery_copyright_color');

	if ( $panadero_bakery_copyright_color != '') {
		$panadero_bakery_custom_style .=' .site-info p{';
			$panadero_bakery_custom_style .=' color:'.esc_attr($panadero_bakery_copyright_color).';';
		$panadero_bakery_custom_style .=' }';
	}

	$panadero_bakery_copyrightbg_color = get_theme_mod('panadero_bakery_copyrightbg_color');

	if ( $panadero_bakery_copyrightbg_color != '') {
		$panadero_bakery_custom_style .=' .copyright{';
			$panadero_bakery_custom_style .=' copyright-color:'.esc_attr($panadero_bakery_copyrightbg_color).';';
		$panadero_bakery_custom_style .=' }';
	}

	//slider color
	$panadero_bakery_slidertitle_color = get_theme_mod('panadero_bakery_slidertitle_color');

	if ( $panadero_bakery_slidertitle_color != '') {
		$panadero_bakery_custom_style .=' #slider .inner_carousel h1{';
			$panadero_bakery_custom_style .=' color:'.esc_attr($panadero_bakery_slidertitle_color).';';
		$panadero_bakery_custom_style .=' }';
	}

	$panadero_bakery_slidertext_color = get_theme_mod('panadero_bakery_slidertext_color');

	if ( $panadero_bakery_slidertext_color != '') {
		$panadero_bakery_custom_style .=' #slider .inner_carousel p{';
			$panadero_bakery_custom_style .=' color:'.esc_attr($panadero_bakery_slidertext_color).';';
		$panadero_bakery_custom_style .=' }';
	}

	$panadero_bakery_sliderbtn_color = get_theme_mod('panadero_bakery_sliderbtn_color');
	$panadero_bakery_sliderbtnbg_color = get_theme_mod('panadero_bakery_sliderbtnbg_color');

	if ( $panadero_bakery_sliderbtn_color != '') {
		$panadero_bakery_custom_style .=' #slider .read-btn a,#slider .carousel-control-next-icon i, #slider .carousel-control-prev-icon i{';
			$panadero_bakery_custom_style .=' color:'.esc_attr($panadero_bakery_sliderbtn_color).'; background-color:'.esc_attr($panadero_bakery_sliderbtnbg_color).';';
		$panadero_bakery_custom_style .=' }';
	}

	//Service color
	$panadero_bakery_feature_color = get_theme_mod('panadero_bakery_feature_color');

	if ( $panadero_bakery_feature_color != '') {
		$panadero_bakery_custom_style .=' .featured-product strong{';
			$panadero_bakery_custom_style .=' color:'.esc_attr($panadero_bakery_feature_color).';';
		$panadero_bakery_custom_style .=' }';
	}

	$panadero_bakery_featuretext_color = get_theme_mod('panadero_bakery_featuretext_color');

	if ( $panadero_bakery_featuretext_color != '') {
		$panadero_bakery_custom_style .=' #product-section p{';
			$panadero_bakery_custom_style .=' color:'.esc_attr($panadero_bakery_featuretext_color).';';
		$panadero_bakery_custom_style .=' }';
	}