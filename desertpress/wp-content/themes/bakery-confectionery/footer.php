<?php
/**
 * The template for displaying the footer
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bakery_confectionery
 */




if (!is_front_page() || is_home()) {
    ?>
    </div>
    </div>
</div>
<?php } ?>

<footer id="colophon" class="site-footer" >
    <div class="site-footer-top">
        <div class="asterthemes-wrapper">
            <div class="footer-widgets-wrapper">

                <?php
                // Footer Widget
                do_action('bakery_confectionery_footer_widget');
                ?>

            </div>
        </div>
    </div>
    <div class="site-footer-bottom">
        <div class="asterthemes-wrapper">
            <div class="site-footer-bottom-wrapper">
                <div class="site-info">
                    <?php
                    do_action('bakery_confectionery_footer_copyright');
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php
$bakery_confectionery_is_scroll_top_active = get_theme_mod( 'bakery_confectionery_scroll_top', true );
if ( $bakery_confectionery_is_scroll_top_active ) :
    $bakery_confectionery_scroll_position = get_theme_mod( 'bakery_confectionery_scroll_top_position', 'bottom-right' );
    ?>
    <style>
        #scroll-to-top {
            position: fixed;
            <?php
            switch ( $bakery_confectionery_scroll_position ) {
                case 'bottom-left':
                    echo 'bottom: 20px; left: 20px;';
                    break;
                case 'bottom-center':
                    echo 'bottom: 20px; left: 50%; transform: translateX(-50%);';
                    break;
                default: // 'bottom-right'
                    echo 'bottom: 20px; right: 20px;';
            }
            ?>
        }
    </style>
    <a href="#" id="scroll-to-top" class="bakery-confectionery-scroll-to-top"><i class="<?php echo esc_attr( get_theme_mod( 'bakery_confectionery_scroll_btn_icon', 'fas fa-chevron-up' ) ); ?>"></i></a>
<?php
endif;
?>
</div>

<?php wp_footer(); ?>

</body>

</html>
