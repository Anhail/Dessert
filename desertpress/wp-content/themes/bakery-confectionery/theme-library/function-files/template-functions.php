<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package bakery_confectionery
 */

function bakery_confectionery_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	$classes[] = bakery_confectionery_sidebar_layout();

	return $classes;
}
add_filter( 'body_class', 'bakery_confectionery_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function bakery_confectionery_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'bakery_confectionery_pingback_header' );


/**
 * Get all posts for customizer Post content type.
 */
function bakery_confectionery_get_post_choices() {
	$choices = array( '' => esc_html__( '--Select--', 'bakery-confectionery' ) );
	$args    = array( 'numberposts' => -1 );
	$posts   = get_posts( $args );

	foreach ( $posts as $post ) {
		$id             = $post->ID;
		$title          = $post->post_title;
		$choices[ $id ] = $title;
	}

	return $choices;
}

/**
 * Get all pages for customizer Page content type.
 */
function bakery_confectionery_get_page_choices() {
	$choices = array( '' => esc_html__( '--Select--', 'bakery-confectionery' ) );
	$pages   = get_pages();

	foreach ( $pages as $page ) {
		$choices[ $page->ID ] = $page->post_title;
	}

	return $choices;
}

/**
 * Get all categories for customizer Category content type.
 */
function bakery_confectionery_get_post_cat_choices() {
	$choices = array( '' => esc_html__( '--Select--', 'bakery-confectionery' ) );
	$cats    = get_categories();

	foreach ( $cats as $cat ) {
		$choices[ $cat->term_id ] = $cat->name;
	}

	return $choices;
}

/**
 * Get all donation forms for customizer form content type.
 */
function bakery_confectionery_get_post_donation_form_choices() {
	$choices = array( '' => esc_html__( '--Select--', 'bakery-confectionery' ) );
	$posts   = get_posts(
		array(
			'post_type'   => 'give_forms',
			'numberposts' => -1,
		)
	);
	foreach ( $posts as $post ) {
		$choices[ $post->ID ] = $post->post_title;
	}
	return $choices;
}

if ( ! function_exists( 'bakery_confectionery_excerpt_length' ) ) :
	/**
	 * Excerpt length.
	 */
	function bakery_confectionery_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}

		return get_theme_mod( 'bakery_confectionery_excerpt_length', 20 );
	}
endif;
add_filter( 'excerpt_length', 'bakery_confectionery_excerpt_length', 999 );

if ( ! function_exists( 'bakery_confectionery_excerpt_more' ) ) :
	/**
	 * Excerpt more.
	 */
	function bakery_confectionery_excerpt_more( $more ) {
		if ( is_admin() ) {
			return $more;
		}

		return '&hellip;';
	}
endif;
add_filter( 'excerpt_more', 'bakery_confectionery_excerpt_more' );

if ( ! function_exists( 'bakery_confectionery_sidebar_layout' ) ) {
	/**
	 * Get sidebar layout.
	 */
	function bakery_confectionery_sidebar_layout() {
		$bakery_confectionery_sidebar_position      = get_theme_mod( 'bakery_confectionery_sidebar_position', 'right-sidebar' );
		$bakery_confectionery_sidebar_position_post = get_theme_mod( 'bakery_confectionery_post_sidebar_position', 'right-sidebar' );
		$bakery_confectionery_sidebar_position_page = get_theme_mod( 'bakery_confectionery_page_sidebar_position', 'right-sidebar' );

		if ( is_single() ) {
			$bakery_confectionery_sidebar_position = $bakery_confectionery_sidebar_position_post;
		} elseif ( is_page() ) {
			$bakery_confectionery_sidebar_position = $bakery_confectionery_sidebar_position_page;
		}

		return $bakery_confectionery_sidebar_position;
	}
}

if ( ! function_exists( 'bakery_confectionery_is_sidebar_enabled' ) ) {
	/**
	 * Check if sidebar is enabled.
	 */
	function bakery_confectionery_is_sidebar_enabled() {
		$bakery_confectionery_sidebar_position      = get_theme_mod( 'bakery_confectionery_sidebar_position', 'right-sidebar' );
		$bakery_confectionery_sidebar_position_post = get_theme_mod( 'bakery_confectionery_post_sidebar_position', 'right-sidebar' );
		$bakery_confectionery_sidebar_position_page = get_theme_mod( 'bakery_confectionery_page_sidebar_position', 'right-sidebar' );

		$bakery_confectionery_sidebar_enabled = true;
		if ( is_home() || is_archive() || is_search() ) {
			if ( 'no-sidebar' === $bakery_confectionery_sidebar_position ) {
				$bakery_confectionery_sidebar_enabled = false;
			}
		} elseif ( is_single() ) {
			if ( 'no-sidebar' === $bakery_confectionery_sidebar_position || 'no-sidebar' === $bakery_confectionery_sidebar_position_post ) {
				$bakery_confectionery_sidebar_enabled = false;
			}
		} elseif ( is_page() ) {
			if ( 'no-sidebar' === $bakery_confectionery_sidebar_position || 'no-sidebar' === $bakery_confectionery_sidebar_position_page ) {
				$bakery_confectionery_sidebar_enabled = false;
			}
		}
		return $bakery_confectionery_sidebar_enabled;
	}
}

if ( ! function_exists( 'bakery_confectionery_get_homepage_sections ' ) ) {
	/**
	 * Returns homepage sections.
	 */
	function bakery_confectionery_get_homepage_sections() {
		$bakery_confectionery_sections = array(
			'banner'  => esc_html__( 'Banner Section', 'bakery-confectionery' ),
			'product' => esc_html__( 'bakery-confectionery Section', 'bakery-confectionery' ),
		);
		return $bakery_confectionery_sections;
	}
}

/**
 * Renders customizer section link
 */
function bakery_confectionery_section_link( $section_id ) {
	$bakery_confectionery_section_name      = str_replace( 'bakery_confectionery_', ' ', $section_id );
	$bakery_confectionery_section_name      = str_replace( '_', ' ', $bakery_confectionery_section_name );
	$bakery_confectionery_starting_notation = '#';
	?>
	<span class="section-link">
		<span class="section-link-title"><?php echo esc_html( $bakery_confectionery_section_name ); ?></span>
	</span>
	<style type="text/css">
		<?php echo $bakery_confectionery_starting_notation . $section_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>:hover .section-link {
			visibility: visible;
		}
	</style>
	<?php
}

/**
 * Adds customizer section link css
 */
function bakery_confectionery_section_link_css() {
	if ( is_customize_preview() ) {
		?>
		<style type="text/css">
			.section-link {
				visibility: hidden;
				background-color: black;
				position: relative;
				top: 80px;
				z-index: 99;
				left: 40px;
				color: #fff;
				text-align: center;
				font-size: 20px;
				border-radius: 10px;
				padding: 20px 10px;
				text-transform: capitalize;
			}

			.section-link-title {
				padding: 0 10px;
			}

			.banner-section {
				position: relative;
			}

			.banner-section .section-link {
				position: absolute;
				top: 100px;
			}
		</style>
		<?php
	}
}
add_action( 'wp_head', 'bakery_confectionery_section_link_css' );

/**
 * Breadcrumb.
 */
function bakery_confectionery_breadcrumb( $args = array() ) {
	if ( ! get_theme_mod( 'bakery_confectionery_enable_breadcrumb', true ) ) {
		return;
	}

	$args = array(
		'show_on_front' => false,
		'show_title'    => true,
		'show_browse'   => false,
	);
	breadcrumb_trail( $args );
}
add_action( 'bakery_confectionery_breadcrumb', 'bakery_confectionery_breadcrumb', 10 );

/**
 * Add separator for breadcrumb trail.
 */
function bakery_confectionery_breadcrumb_trail_print_styles() {
	$bakery_confectionery_breadcrumb_separator = get_theme_mod( 'bakery_confectionery_breadcrumb_separator', '/' );

	$style = '
		.trail-items li::after {
			content: "' . $bakery_confectionery_breadcrumb_separator . '";
		}'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	$style = apply_filters( 'bakery_confectionery_breadcrumb_trail_inline_style', trim( str_replace( array( "\r", "\n", "\t", '  ' ), '', $style ) ) );

	if ( $style ) {
		echo "\n" . '<style type="text/css" id="breadcrumb-trail-css">' . $style . '</style>' . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
add_action( 'wp_head', 'bakery_confectionery_breadcrumb_trail_print_styles' );

/**
 * Pagination for archive.
 */
function bakery_confectionery_render_posts_pagination() {
	$bakery_confectionery_is_pagination_enabled = get_theme_mod( 'bakery_confectionery_enable_pagination', true );
	if ( $bakery_confectionery_is_pagination_enabled ) {
		$bakery_confectionery_pagination_type = get_theme_mod( 'bakery_confectionery_pagination_type', 'default' );
		if ( 'default' === $bakery_confectionery_pagination_type ) :
			the_posts_navigation();
		else :
			the_posts_pagination();
		endif;
	}
}
add_action( 'bakery_confectionery_posts_pagination', 'bakery_confectionery_render_posts_pagination', 10 );

/**
 * Pagination for single post.
 */
function bakery_confectionery_render_post_navigation() {
	the_post_navigation(
		array(
			'prev_text' => '<span>&#10229;</span> <span class="nav-title">%title</span>',
			'next_text' => '<span class="nav-title">%title</span> <span>&#10230;</span>',
		)
	);
}
add_action( 'bakery_confectionery_post_navigation', 'bakery_confectionery_render_post_navigation' );

/**
 * Adds footer copyright text.
 */
function bakery_confectionery_output_footer_copyright_content() {
    $bakery_confectionery_theme_data = wp_get_theme();
    $bakery_confectionery_copyright_text = get_theme_mod('bakery_confectionery_footer_copyright_text');

    if (!empty($bakery_confectionery_copyright_text)) {
        $bakery_confectionery_text = $bakery_confectionery_copyright_text;
    } else {
        $bakery_confectionery_default_text = '<a href="'. esc_url(__('https://asterthemes.com/products/free-bakery-wordpress-theme/','bakery-confectionery')) . '" target="_blank"> ' . esc_html($bakery_confectionery_theme_data->get('Name')) . '</a>' . '&nbsp;' . esc_html__('by', 'bakery-confectionery') . '&nbsp;<a target="_blank" href="' . esc_url($bakery_confectionery_theme_data->get('AuthorURI')) . '">' . esc_html(ucwords($bakery_confectionery_theme_data->get('Author'))) . '</a>';
        $bakery_confectionery_default_text .= sprintf(esc_html__(' | Powered by %s', 'bakery-confectionery'), '<a href="' . esc_url(__('https://wordpress.org/', 'bakery-confectionery')) . '" target="_blank">WordPress</a>. ');

        $bakery_confectionery_text = $bakery_confectionery_default_text;
    }
    ?>
    <span><?php echo wp_kses_post($bakery_confectionery_text); ?></span>
    <?php
}
add_action('bakery_confectionery_footer_copyright', 'bakery_confectionery_output_footer_copyright_content');



/**
 * GET START FUNCTION
 */

function bakery_confectionery_getpage_css($hook) {
	wp_enqueue_script( 'bakery-confectionery-admin-script', get_template_directory_uri() . '/resource/js/bakery-confectionery-admin-notice-script.js', array( 'jquery' ) );
    wp_localize_script( 'bakery-confectionery-admin-script', 'bakery_confectionery_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
    wp_enqueue_style( 'bakery-confectionery-notice-style', get_template_directory_uri() . '/resource/css/notice.css' );
}

add_action( 'admin_enqueue_scripts', 'bakery_confectionery_getpage_css' );


add_action('wp_ajax_bakery_confectionery_dismissable_notice', 'bakery_confectionery_dismissable_notice');
	function bakery_confectionery_switch_theme() {
	    delete_user_meta(get_current_user_id(), 'bakery_confectionery_dismissable_notice');
	}
	add_action('after_switch_theme', 'bakery_confectionery_switch_theme');
	function bakery_confectionery_dismissable_notice() {
	    update_user_meta(get_current_user_id(), 'bakery_confectionery_dismissable_notice', true);
	    die();
	}

function bakery_confectionery_deprecated_hook_admin_notice() {
    global $pagenow;
    
    // Check if the current page is the one where you don't want the notice to appear
    if ( $pagenow === 'themes.php' && isset( $_GET['page'] ) && $_GET['page'] === 'bakery-confectionery-getting-started' ) {
        return;
    }

    $dismissed = get_user_meta( get_current_user_id(), 'bakery_confectionery_dismissable_notice', true );
    if ( !$dismissed) { ?>
        <div class="getstrat updated notice notice-success is-dismissible notice-get-started-class">
            <div class="at-admin-content" >
                <h2><?php esc_html_e('Welcome to Bakery Confectionery', 'bakery-confectionery'); ?></h2>
                <p><?php _e('Explore the features of our Pro Theme and take your Bakery Confectionery to the next level.', 'bakery-confectionery'); ?></p>
                <p ><?php _e('Get Started With Theme By Clicking On Getting Started.', 'bakery-confectionery'); ?><p>
                <div style="display: flex; justify-content: center;">
                    <a class="admin-notice-btn button button-primary button-hero" href="<?php echo esc_url( admin_url( 'themes.php?page=bakery-confectionery-getting-started' )); ?>"><?php esc_html_e( 'Get started', 'bakery-confectionery' ) ?></a>
                    <a  class="admin-notice-btn button button-primary button-hero" target="_blank" href="https://demo.asterthemes.com/bakery-confectionery/"><?php esc_html_e('View Demo', 'bakery-confectionery') ?></a>
                    <a  class="admin-notice-btn button button-primary button-hero" target="_blank" href="https://asterthemes.com/products/bakery-wordpress-theme"><?php esc_html_e('Buy Now', 'bakery-confectionery') ?></a>
                    <a  class="admin-notice-btn button button-primary button-hero" target="_blank" href="#"><?php esc_html_e('Free Doc', 'bakery-confectionery') ?></a>
                </div>
            </div>
            <div class="at-admin-image">
                <img style="width: 100%;max-width: 320px;line-height: 40px;display: inline-block;vertical-align: top;border: 2px solid #ddd;border-radius: 4px;" src="<?php echo esc_url(get_stylesheet_directory_uri()) .'/screenshot.png'; ?>" />
            </div>
        </div>
    <?php }
}

add_action( 'admin_notices', 'bakery_confectionery_deprecated_hook_admin_notice' );


//Admin Notice For Getstart
function bakery_confectionery_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}	

if ( ! function_exists( 'bakery_confectionery_footer_widget' ) ) :
function bakery_confectionery_footer_widget() {
	$bakery_confectionery_footer_widget_column	= get_theme_mod('bakery_confectionery_footer_widget_column','4'); 
		if ($bakery_confectionery_footer_widget_column == '4') {
			$bakery_confectionery_recent_column = '3';
		} elseif ($bakery_confectionery_footer_widget_column == '3') {
			$bakery_confectionery_recent_column = '4';
		} elseif ($bakery_confectionery_footer_widget_column == '2') {
			$bakery_confectionery_recent_column = '6';
		} else{
			$bakery_confectionery_recent_column = '12';
		}
	if($bakery_confectionery_footer_widget_column !==''): 
	?>
	<div class="dt_footer-widgets">
		
    <div class="footer-widgets-column">
    	<?php
		$bakery_confectionery_footer_widget_column = get_theme_mod('bakery_confectionery_footer_widget_column','4');
	for ($i=1; $i<=$bakery_confectionery_footer_widget_column; $i++) { ?>
        <?php if ( is_active_sidebar( 'bakery-confectionery-footer-widget-' .$i ) ) : ?>
            <div class="footer-one-column" >
                <?php dynamic_sidebar( 'bakery-confectionery-footer-widget-'.$i); ?>
            </div>
        <?php endif; ?>
        <?php  } ?>
    </div>

</div>
	<?php 
	endif; } 
endif;
add_action( 'bakery_confectionery_footer_widget', 'bakery_confectionery_footer_widget' );

function bakery_confectionery_footer_text_transform_css() {
    $bakery_confectionery_footer_text_transform = get_theme_mod('footer_text_transform', 'none');
    ?>
    <style type="text/css">
        .site-footer h4 {
            text-transform: <?php echo esc_html($bakery_confectionery_footer_text_transform); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'bakery_confectionery_footer_text_transform_css');