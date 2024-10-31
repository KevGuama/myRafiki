<?php
/**
 * Template Name: Plan Now
 * Template Post Type: page
 *
 * This is the template for the Plan Now page.
 */

get_header(); ?>

<div class="site-plan-now">
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            the_content();
        }
    }
    ?>
</div>

<?php get_footer(); ?>