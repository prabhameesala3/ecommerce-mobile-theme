<?php
defined('ABSPATH') || exit;

get_header(); ?>

<div class="shop-page-wrapper">

    <header class="woocommerce-products-header">
        <?php do_action('woocommerce_before_main_content'); ?>
    </header>

    <?php if (woocommerce_product_loop()) : ?>

        <?php do_action('woocommerce_before_shop_loop'); ?>

        <ul class="products columns-2">
            <?php while (have_posts()) : the_post(); ?>
                <?php wc_get_template_part('content', 'product'); ?>
            <?php endwhile; ?>
        </ul>

        <?php do_action('woocommerce_after_shop_loop'); ?>

    <?php else : ?>

        <?php do_action('woocommerce_no_products_found'); ?>

    <?php endif; ?>

</div>

<?php
do_action('woocommerce_after_main_content');
get_footer();
