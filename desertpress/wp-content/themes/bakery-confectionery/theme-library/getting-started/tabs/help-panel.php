<?php
/**
 * Help Panel.
 *
 * @package bakery_confectionery
 */
?>

<div id="help-panel" class="panel-left visible">
    <div id="#help-panel" class="steps">  
        <h4><?php esc_html_e( 'Quick Setup for Home Page', 'bakery-confectionery' ); ?></h4>
        <hr class="quick-set">
        <p><?php esc_html_e( '1) Go to the dashboard. navigate to pages, add a new one, and label it "home" or whatever else you like.The page has now been created.', 'bakery-confectionery' ); ?></p>
        <p><?php esc_html_e( '2) Go back to the dashboard and then select Settings.', 'bakery-confectionery' ); ?></p>
        <p><?php esc_html_e( '3) Then Go to readings in the setting.', 'bakery-confectionery' ); ?></p>
        <p><?php esc_html_e( '4) There are 2 options your latest post or static page.', 'bakery-confectionery' ); ?></p>
        <p><?php esc_html_e( '5) Select static page and select from the dropdown you wish to use as your home page, save changes.', 'bakery-confectionery' ); ?></p>
        <p><?php esc_html_e( '6) You can set the home page in this manner.', 'bakery-confectionery' ); ?></p>
        <hr>
        <h4><?php esc_html_e( 'Setup Slider Section', 'bakery-confectionery' ); ?></h4>
        <hr class="quick-set">
        <p><?php esc_html_e( '1) Go to dashboard > Go to appereance > then Go to customizer.', 'bakery-confectionery' ); ?></p>
        <p><?php esc_html_e( '2) In Customizer > Go to Front Page Options > Go to Banner Section.', 'bakery-confectionery' ); ?></p>
        <p><?php esc_html_e( '3) For Setup Banner Section you have to create post in dashbord first.', 'bakery-confectionery' ); ?></p>
        <p><?php esc_html_e( '4) In Banner Section > Enable the Toggle button > and fill the following details.', 'bakery-confectionery' ); ?></p>
        <p><?php esc_html_e( '5) In this way you can set Banner Section.', 'bakery-confectionery' ); ?></p>
        <hr>
        <h4><?php esc_html_e( 'Setup Product Section', 'bakery-confectionery' ); ?></h4>
        <hr class="quick-set">
        <p><?php esc_html_e( '1) Go to dashboard > Go to plugin > add Woocommerce plugin.', 'bakery-confectionery' ); ?></p>
        <p><?php esc_html_e( '2) After installing plugin make products in it and give them particular category.', 'bakery-confectionery' ); ?></p>
        <p><?php esc_html_e( '3) In Customizer > Go to Front Page Options > Go to Product Section.', 'bakery-confectionery' ); ?></p>
        <p><?php esc_html_e( '4) In Product Section > Enable the Toggle button > and select the category whick you want display.', 'bakery-confectionery' ); ?></p>
        <p><?php esc_html_e( '5) In this way you can set Product Section.', 'bakery-confectionery' ); ?></p>
    </div>
    <hr>
    <div class="custom-setting">
        <h4><?php esc_html_e( 'Quick Customizer Settings', 'bakery-confectionery' ); ?></h4>
        <span><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" target="_blank"><?php esc_html_e( 'Customize', 'bakery-confectionery' ); ?></a></span>
    </div>
    <hr>
   <div class="setting-box">
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-admin-site-alt3"></span>
            </div>
            <h5><?php esc_html_e( 'Site Logo', 'bakery-confectionery' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=custom_logo' ) ); ?>" target="_blank"><?php esc_html_e( 'Customize', 'bakery-confectionery' ); ?></a>
        </div>
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-color-picker"></span>
            </div>
            <h5><?php esc_html_e( 'Color', 'bakery-confectionery' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=primary_color' ) ); ?>" target="_blank"><?php esc_html_e( 'Customize', 'bakery-confectionery' ); ?></a>
        </div>
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-screenoptions"></span>
            </div>
            <h5><?php esc_html_e( 'Theme Options', 'bakery-confectionery' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=bakery_confectionery_theme_options' ) ); ?>"target="_blank"><?php esc_html_e( 'Customize', 'bakery-confectionery' ); ?></a>
        </div>
    </div>
    <div class="setting-box">
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-format-image"></span>
            </div>
            <h5><?php esc_html_e( 'Header Image ', 'bakery-confectionery' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=header_image' ) ); ?>" target="_blank"><?php esc_html_e( 'Customize', 'bakery-confectionery' ); ?></a>
        </div>
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-align-full-width"></span>
            </div>
            <h5><?php esc_html_e( 'Footer Options ', 'bakery-confectionery' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=bakery_confectionery_footer_copyright_text' ) ); ?>" target="_blank"><?php esc_html_e( 'Customize', 'bakery-confectionery' ); ?></a>
        </div>
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-admin-page"></span>
            </div>
            <h5><?php esc_html_e( 'Front Page Options', 'bakery-confectionery' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=bakery_confectionery_front_page_options' ) ); ?>" target="_blank"><?php esc_html_e( 'Customize', 'bakery-confectionery' ); ?></a>
        </div>
    </div>
</div>