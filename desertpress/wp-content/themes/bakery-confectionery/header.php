<?php

/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bakery_confectionery
 */
$bakery_confectionery_menu_text_transform = get_theme_mod( 'menu_text_transform', 'capitalize' );
$bakery_confectionery_menu_text_transform_css = ( $bakery_confectionery_menu_text_transform !== 'capitalize' ) ? 'text-transform: ' . $bakery_confectionery_menu_text_transform . ';' : '';
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site asterthemes-site-wrapper">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bakery-confectionery' ); ?></a>
	 <?php
	if ( get_theme_mod( 'bakery_confectionery_enable_preloader', false ) === true ) { ?>
		<div id="loader">
			<div class="loader-container">
				<div id="preloader">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/resource/loader.gif' ); ?>">
				</div>
			</div>
		</div>
	<?php } ?>
<header id="masthead" class="site-header">
    <div class="header-main-wrapper">
        <?php if ( get_theme_mod( 'bakery_confectionery_enable_topbar', false ) === true ) {
            $bakery_confectionery_discount_topbar_text = get_theme_mod( 'bakery_confectionery_discount_topbar_text', '' );
            $bakery_confectionery_discount_topbar_button_text = get_theme_mod( 'bakery_confectionery_discount_topbar_button_text', '' );
            $bakery_confectionery_discount_topbar_button_url = get_theme_mod( 'bakery_confectionery_discount_topbar_button_url', '' );
            $bakery_confectionery_discount_topbar_phone_nember = get_theme_mod( 'bakery_confectionery_discount_topbar_phone_nember', '' );
            ?>
            <div class="top-header-part">
                <div class="asterthemes-wrapper">
                    <div class="bottom-topbar-part-wrapper">
                        <?php if ( ! empty( $bakery_confectionery_discount_topbar_text ) ) { ?>
                            <div class="header-contact-inner">
                                <p><?php echo esc_html( $bakery_confectionery_discount_topbar_text ); ?><span><a href="<?php echo esc_url( $bakery_confectionery_discount_topbar_button_url ); ?>"><?php echo esc_html( $bakery_confectionery_discount_topbar_button_text ); ?></a></span></p>
                            </div>
                        <?php } ?>
                        <div class="header-phone-inner">
                            <?php if ( ! empty( $bakery_confectionery_discount_topbar_phone_nember ) ) { ?>
                                <p><i class="<?php echo esc_attr( get_theme_mod( 'bakery_confectionery_phone_btn_icon', 'fas fa-phone-alt' ) ); ?>"></i><a href="tell:<?php echo esc_url( $bakery_confectionery_discount_topbar_phone_nember ); ?>"><?php echo esc_html( $bakery_confectionery_discount_topbar_phone_nember ); ?></a></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="bottom-header-outer-wrapper">
            <div class="bottom-header-part">
                <div class="asterthemes-wrapper">
                    <div class="bottom-header-part-wrapper">
                        <div class="bottom-header-middle-part">
                            <div class="site-branding">
                                <?php if ( has_custom_logo() ) { ?>
                                <div class="site-logo">
                                    <?php the_custom_logo(); ?>
                                </div>
                                <?php } ?>
                                <div class="site-identity">
                                       <?php
                                    $bakery_confectionery_site_title_size = get_theme_mod( 'bakery_confectionery_site_title_size', 30 ); // Get the site title size setting value, defaulting to 32 pixels

                                    if ( get_theme_mod( 'bakery_confectionery_enable_site_title_setting', true ) ) {
                                        if ( is_front_page() && is_home() ) :
                                            ?>
                                            <h1 class="site-title" style="font-size: <?php echo esc_attr( $bakery_confectionery_site_title_size ); ?>px;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                            <?php
                                        else :
                                                ?>
                                            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                                <?php
                                            endif;
                                        }

                                        if ( get_theme_mod( 'bakery_confectionery_enable_tagline_setting', false ) ) :
                                            $bakery_confectionery_description = get_bloginfo( 'description', 'display' );

                                            if ( $bakery_confectionery_description || is_customize_preview() ) :
                                                ?>
                                            <p class="site-description">
                                                <?php
                                                echo esc_html( $bakery_confectionery_description ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                                ?>
                                            </p>
                                                <?php
                                            endif;
                                                ?>
                                        <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-header-left-part">
                            <div class="navigation-part">
                                <nav id="site-navigation" class="main-navigation" >
                                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                    <div class="main-navigation-links" style="<?php echo esc_attr( $bakery_confectionery_menu_text_transform_css ); ?>">
                                        <?php
                                            wp_nav_menu(
                                                array(
                                                    'theme_location' => 'primary',
                                                )
                                            );
                                        ?>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="bottom-header-right-part">
                            <?php if ( class_exists( 'woocommerce' ) ) {?>
                                <a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','bakery-confectionery' ); ?>"><i class="fas fa-shopping-bag "></i></a>
                            <?php }?>
                            <?php if ( get_theme_mod( 'bakery_confectionery_enable_search_icon', false ) === true ) { ?>
                                <?php if(class_exists('woocommerce')){ ?>
                                    <div class="round-btn" id="show-search-box">
                                      <i class="fa fa-search flip-icon"></i>
                                    </div>
                                    <div id="hidden-search-box">
                                        <div class="input-group add-on">
                                          <?php get_product_search_form(); ?>
                                        </div>
                                    
                                    </div>
                                <?php }?>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php
if ( ! is_front_page() || is_home() ) {

	if ( is_front_page() ) {

		require get_template_directory() . '/sections/sections.php';
		bakery_confectionery_homepage_sections();

	}

	?>

	<div id="content" class="site-content">
		<div class="asterthemes-wrapper">
			<div class="asterthemes-page">
			<?php } ?>
