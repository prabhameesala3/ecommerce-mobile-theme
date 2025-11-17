<?php
// functions.php - minimal

if ( ! defined( 'ABSPATH' ) ) exit;

function et_theme_assets() {
    wp_enqueue_style( 'et-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );
    wp_enqueue_script( 'et-main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'et_theme_assets' );

/**
 * Start mobile wrapper for WooCommerce content
 * This wraps WooCommerce pages in the mobile container
 */
function et_mobile_wrapper_start() {
    echo '<div id="mobile-app-wrapper">';
}
function et_mobile_wrapper_end() {
    echo '</div>';
}
add_action( 'woocommerce_before_main_content', 'et_mobile_wrapper_start', 1 );
add_action( 'woocommerce_after_main_content', 'et_mobile_wrapper_end', 999 );



/* Remove WooCommerce default wrappers */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

/* Add our custom mobile wrapper */
add_action('woocommerce_before_main_content', function() {
    echo '<div class="mobile-app-content">';
}, 1);

add_action('woocommerce_after_main_content', function() {
    echo '</div>';
}, 99);

/* Remove WooCommerce Shop Page Title */
add_filter('woocommerce_show_page_title', '__return_false');
