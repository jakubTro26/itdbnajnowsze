<?php
/**
 * Shop Box Style Four Template
 *
 * @package Consultix
 */
?>

<!-- rt-shop-box style-four -->
<?php if ( 'shop-one' === consultix_global_var( 'shop-style', '', false ) ) { ?>
    <div <?php post_class( 'rt-shop-box style-four matchHeight col-lg-4 col-md-4 col-sm-6 col-xs-12' ); ?> class="">
<?php } elseif ( 'shop-two' === consultix_global_var( 'shop-style', '', false ) ) { ?>
    <div <?php post_class( 'rt-shop-box style-four matchHeight col-lg-3 col-md-4 col-sm-6 col-xs-12' ); ?>>
<?php } else { ?>
    <div <?php post_class( 'rt-shop-box style-four matchHeight col-lg-4 col-md-4 col-sm-6 col-xs-12' ); ?>>
<?php } ?>
    <div class="holder">
        <?php if ( $product->is_on_sale() ) { ?>
            <?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html__( 'Sale!', 'consultix' ) . '</span>', $post, $product ); ?>
        <?php } ?>
        <div class="pic">
            <div class="product-image">
                <?php the_post_thumbnail('large');?>
			</div>
			<div class="overlay">
			    <div class="table">
			        <div class="table-cell">
			            <a class="btn" href="<?php the_permalink();?>"><i class="fa fa-eye"></i> View Details</a>
			        </div>
			    </div>
			</div>
        </div>
        <div class="data">
            <?php
			/**
			 * Woocommerce Before Shop Loop Item hook.
			 * woocommerce_before_shop_loop_item hook.
			 *
			 * @hooked woocommerce_template_loop_product_link_open - 10
			 */
			do_action( 'woocommerce_before_shop_loop_item' );
			?>
            <?php
			/**
			 * Woocommerce Shop Loop Item Title hook.
			 * woocommerce_shop_loop_item_title hook.
			 *
			 * @hooked woocommerce_template_loop_product_title - 10
			 */
			do_action( 'woocommerce_shop_loop_item_title' );
			?>
			</a>
			<?php
			/**
			 * Woocommerce After Shop Loop Item Title hook.
			 * woocommerce_after_shop_loop_item_title hook.
			 *
			 * @hooked woocommerce_template_loop_rating - 5
			 * @hooked woocommerce_template_loop_price - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item_title' );
			?>
			<?php
			/**
			 * Woocommerce After Shop Loop Item hook.
			 * woocommerce_after_shop_loop_item hook.
			 *
			 * @hooked woocommerce_template_loop_product_link_close - 5
			 * @hooked woocommerce_template_loop_add_to_cart - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item' );
			?>
        </div>
    </div>
</div>
<!-- rt-shop-box style-two -->