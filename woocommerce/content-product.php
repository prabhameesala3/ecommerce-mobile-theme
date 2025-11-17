<?php
defined( 'ABSPATH' ) || exit;
global $product;
?>

<li <?php wc_product_class(); ?>>

  <a href="<?php the_permalink(); ?>">
    <?php woocommerce_show_product_loop_sale_flash(); ?>
    <?php woocommerce_template_loop_product_thumbnail(); ?>
  </a>

  <h2 class="woocommerce-loop-product__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  <?php woocommerce_template_loop_price(); ?>

  <div class="product-buttons">
    <?php
    // Default add-to-cart (loop)
    woocommerce_template_loop_add_to_cart();
    // Buy Now button (adds to cart and goes to checkout could be wired via JS if required)
    ?>
    <a class="buy-now" href="<?php echo esc_url( $product->add_to_cart_url() ); ?>">Buy Now</a>
  </div>

</li>
