<?php get_header(); ?>

<div id="mobile-app-wrapper">

  <!-- Hero card -->
  <section class="hero" role="region" aria-label="Hero">
    <?php
    // Use ACF fields if present; fallback to placeholder
    $hero_img = function_exists('get_field') ? get_field('hero_image') : '';
    if($hero_img) echo wp_get_attachment_image($hero_img,'large',false,['class'=>'hero-image']);
    else echo '<div class="hero-image" aria-hidden="true"></div>';
    
    ?>
    <h1><?php echo esc_html( function_exists('get_field') ? get_field('hero_heading') : 'FIND CLOTHES THAT MATCH YOUR STYLE' ); ?></h1>
    <p><?php echo esc_html( function_exists('get_field') ? get_field('hero_subheading') : 'Browse our curated range of garments designed to elevate your style.' ); ?></p>

    <div class="stats">
      <div class="stat-item"><div class="stat-number">200+</div><div class="stat-label">International Brands</div></div>
      <div class="stat-item"><div class="stat-number">2,000+</div><div class="stat-label">High-Quality Products</div></div>
      <div class="stat-item"><div class="stat-number">30,000+</div><div class="stat-label">Happy Customers</div></div>
    </div>
  </section>

  <!-- CTA bar (black) -->
  <div style="margin:8px 10px;background:#000;border-radius:999px;padding:12px;height:18px"></div>

  <!-- New Arrivals -->
  <section class="new-arrivals" aria-label="New Arrivals">
    <h2>New Arrivals</h2>
    <p>Please choose a category in New Arrivals settings (or install WooCommerce).</p>
  </section>

</div>
<img class="hero-image" src="<?php echo esc_url( get_field('hero_image') ); ?>" alt="">

<?php get_footer(); ?>
