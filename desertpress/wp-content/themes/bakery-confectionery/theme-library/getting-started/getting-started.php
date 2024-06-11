<?php
/**
 * Getting Started Page.
 *
 * @package bakery_confectionery
 */


if( ! function_exists( 'bakery_confectionery_getting_started_menu' ) ) :
/**
 * Adding Getting Started Page in admin menu
 */
function bakery_confectionery_getting_started_menu(){	
	add_theme_page(
		__( 'Getting Started', 'bakery-confectionery' ),
		__( 'Getting Started', 'bakery-confectionery' ),
		'manage_options',
		'bakery-confectionery-getting-started',
		'bakery_confectionery_getting_started_page'
	);
}
endif;
add_action( 'admin_menu', 'bakery_confectionery_getting_started_menu' );

if( ! function_exists( 'bakery_confectionery_getting_started_admin_scripts' ) ) :
/**
 * Load Getting Started styles in the admin
 */
function bakery_confectionery_getting_started_admin_scripts( $hook ){
	// Load styles only on our page
	if( 'appearance_page_bakery-confectionery-getting-started' != $hook ) return;

    wp_enqueue_style( 'bakery-confectionery-getting-started', get_template_directory_uri() . '/resource/css/getting-started.css', false, BAKERY_CONFECTIONERY_THEME_VERSION );

    wp_enqueue_script( 'bakery-confectionery-getting-started', get_template_directory_uri() . '/resource/js/getting-started.js', array( 'jquery' ), BAKERY_CONFECTIONERY_THEME_VERSION, true );
}
endif;
add_action( 'admin_enqueue_scripts', 'bakery_confectionery_getting_started_admin_scripts' );

if( ! function_exists( 'bakery_confectionery_getting_started_page' ) ) :
/**
 * Callback function for admin page.
*/
function bakery_confectionery_getting_started_page(){ 
	$bakery_confectionery_theme = wp_get_theme();?>
	<div class="wrap getting-started">
		<div class="intro-wrap">
			<div class="intro cointaner">
				<div class="intro-content">
					<h3><?php echo esc_html( 'Welcome to', 'bakery-confectionery' );?> <span class="theme-name"><?php echo esc_html( BAKERY_CONFECTIONERY_THEME_NAME ); ?></span></h3>
					<p class="about-text">
						<?php
						// Remove last sentence of description.
						$bakery_confectionery_description = explode( '. ', $bakery_confectionery_theme->get( 'Description' ) );

						array_pop( $bakery_confectionery_description );

						$bakery_confectionery_description = implode( '. ', $bakery_confectionery_description );

						echo esc_html( $bakery_confectionery_description . '.' );
					?></p>
					<a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>"target="_blank" class="button button-primary"><?php esc_html_e( 'Customize', 'bakery-confectionery' ); ?></a>
			        <a class="button button-primary" href="<?php echo esc_url( 'https://wordpress.org/support/theme/bakery-confectionery/reviews/#new-post' ); ?>" title="<?php esc_attr_e( 'Visit the Review', 'bakery-confectionery' ); ?>" target="_blank">
			            <?php esc_html_e( 'REVIEW', 'bakery-confectionery' ); ?>
			        </a>
			        <a class="button button-primary" href="<?php echo esc_url( 'https://wordpress.org/support/theme/bakery-confectionery/' ); ?>" title="<?php esc_attr_e( 'Visit the Support', 'bakery-confectionery' ); ?>" target="_blank">
			            <?php esc_html_e( 'CONTACT SUPPORT', 'bakery-confectionery' ); ?>
			        </a>
				</div>
				<div class="intro-img">
					<img src="<?php echo esc_url(get_template_directory_uri()) .'/screenshot.png'; ?>" />
				</div>				
			</div>
		</div>

		<div class="cointaner panels">
			<ul class="inline-list">
				<li class="current">
                    <a id="help" href="javascript:void(0);">
                        <?php esc_html_e( 'Getting Started', 'bakery-confectionery' ); ?>
                    </a>
                </li>
				<li>
                    <a id="free-pro-panel" href="javascript:void(0);">
                        <?php esc_html_e( 'Free Vs Pro', 'bakery-confectionery' ); ?>
                    </a>
                </li>
			</ul>
			<div id="panel" class="panel">
				<?php require get_template_directory() . '/theme-library/getting-started/tabs/help-panel.php'; ?>
				<?php require get_template_directory() . '/theme-library/getting-started/tabs/free-vs-pro-panel.php'; ?>
				<?php require get_template_directory() . '/theme-library/getting-started/tabs/link-panel.php'; ?>
			</div>
		</div>
	</div>
	<?php
}
endif;