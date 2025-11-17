<?php get_header(); ?>

<div id="mobile-app-wrapper">

    <?php get_template_part("template-parts/mobile-header"); ?>

    <div class="page-content" style="padding:14px;">
        <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
        ?>
    </div>

</div>

<?php get_footer(); ?>
