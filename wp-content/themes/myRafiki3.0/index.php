<?php
// Ensure the file is not accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Basic structure for the index page.
get_header(); // Load the header template.
get_header(); // Load the header template.

if (have_posts()) :
    while (have_posts()) :

        the_post(); 
        the_content(); // Display page content.
    endwhile;
else :
    echo '<p>' . __('No content available.', 'myrafiki') . '</p>';
endif;
get_footer(); // Load the footer template.
?>