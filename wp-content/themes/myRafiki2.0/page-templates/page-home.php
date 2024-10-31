<?php
/**
 * Template Name: Home Page
 * Template Post Type: page
 *
 * This is the template for the home page.
 */

get_header(); ?>

<div class="site-home">
    <!-- Gutenberg content will be editable here -->
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