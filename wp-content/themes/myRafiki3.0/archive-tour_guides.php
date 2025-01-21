<?php

/**
 * Create the Archive Template
 * File: archive-tour_guides.php
 * Purpose: To list all tour guides with key information like title, specialty, languages  
 * spoken, and a "Read More" link to the full post.
*/

// Prevent direct access to the file.
if (!defined('ABSPATH')) {
    exit;
}

// Get the header for the archive page.
get_header(); ?>

<main id="primary" class="site-main">
    <header class="page-header">
        <h1 class="page-title">
            <?php
            // Display the archive title dynamically.
            post_type_archive_title();
            ?>
</h1>
    </header><!-- .page-header -->

    <?php
    // Check if there are any posts to display.
    if (have_posts()) :
        echo '<div class="tour-guides-list">';

        // Loop through each post.
        while (have_posts()) :
            the_post();
