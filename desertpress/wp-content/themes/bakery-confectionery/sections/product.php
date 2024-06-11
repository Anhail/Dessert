<?php

if ( ! get_theme_mod( 'bakery_confectionery_enable_service_section', false ) ) {
	return;
}

$bakery_confectionery_args = '';

bakery_confectionery_render_service_section( $bakery_confectionery_args );

/**
 * Render Service Section.
 */
function bakery_confectionery_render_service_section( $bakery_confectionery_args ) { ?>
		<section id="bakery_confectionery_trending_section" class="asterthemes-frontpage-section trending-section trending-style-1">
		<?php
		if ( is_customize_preview() ) :
			bakery_confectionery_section_link( 'bakery_confectionery_service_section' );
		endif;

		$bakery_confectionery_trending_product_heading = get_theme_mod( 'bakery_confectionery_trending_product_heading', '' );
		?>
		<div class="asterthemes-wrapper">
			<?php if ( ! empty( $bakery_confectionery_trending_product_heading ) ) { ?>
				<div class="product-contact-inner">
					<h3><?php echo esc_html( $bakery_confectionery_trending_product_heading ); ?></h3>
				</div>
			<?php } ?>
			<?php $bakery_confectionery_catData = get_theme_mod('bakery_confectionery_trending_product_category','');
      if ( class_exists( 'WooCommerce' ) ) {
        $bakery_confectionery_args = array(
          'post_type' => 'product',
          'posts_per_page' => 100,
          'product_cat' => $bakery_confectionery_catData,
          'order' => 'ASC'
        );?>
        <div class="product-box"> 
	        <?php $loop = new WP_Query( $bakery_confectionery_args );
	        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
	          <div class="tab-product">
            	<figure>
              	<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(wc_placeholder_img_src()).'" />'; ?>
                <?php if(class_exists('YITH_WCWL')){ ?>
                  <span class="wishlist"><?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?></span>
                <?php }?>
              </figure>
        			<div class="product-content-box">
        				<h5 class="product-text"><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h5>
        				<div class="product-rating">
        					<span class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>">
        						<?php echo $product->get_price_html(); ?></span>
        					<span class="rating-box">
        						<?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_rating( $loop->post, $product ); } ?>	
        					</span>
        				</div>
                <div class="box-content intro-button">
                  <?php if( $product->is_type( 'simple' ) ) { woocommerce_template_loop_add_to_cart(  $loop->post, $product );} ?>
                </div>
        			</div>
	          </div>
	        <?php endwhile; wp_reset_postdata(); ?>
	      </div>
      <?php } ?>
		</div>
	</section>
	<?php
}
