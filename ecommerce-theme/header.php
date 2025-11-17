<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="mobile-app-wrapper">

    <!-- Announcement bar -->
    <div class="announcement">Sign up and get 20% off</div>

    <!-- ========= MOBILE HEADER (Hidden on Shop Page) ========== -->
    <?php if ( ! is_shop() ) : ?>
    <header class="mobile-header">
        <div class="header-left">
            <button id="openMenu" class="hamburger">☰</button>
        </div>

        <div class="header-center">
            <span class="brand">SONY.CO</span>
        </div>

        <div class="header-right">
            <a href="<?php echo wc_get_page_permalink('cart'); ?>" class="icon">🛒</a>
        </div>
    </header>
    <?php endif; ?>


    <!-- ========= DRAWER + OVERLAY (inside wrapper only) ========== -->
    <div class="drawer-overlay" id="drawerOverlay"></div>

    <div class="side-menu" id="sideMenu">
        <button class="close-btn" id="closeMenu">✕</button>

        <ul class="menu-links">
            <li><a href="/ecommerce-wp/">Home</a></li>
            <li><a href="/ecommerce-wp/shop/">Shop</a></li>
            <li><a href="/ecommerce-wp/cart/">Cart</a></li>
            <li><a href="/ecommerce-wp/my-account/">My Account</a></li>
        </ul>
    </div>
