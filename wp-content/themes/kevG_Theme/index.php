<?php
/**
 * Main index file that WordPress uses to display the site.
 */

// Include the header
get_header(); 

// Check if the current page is the front page (home) or any other page.
if ( is_front_page() ) {
    // Load the homepage content
    get_template_part( 'template-parts/content', 'home' );
} elseif ( is_page('about') ) {
    // Load the about page content
    get_template_part( 'template-parts/content', 'about' );
} else {
    // Fallback for other pages
    echo '<p>Content for this page is under development.</p>';
}

// Include the footer
get_footer(); 
?>
