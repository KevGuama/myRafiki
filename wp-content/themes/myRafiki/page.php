<?php
/**
 * The main single item template file.
 *
 * @package myRafiki Theme
 */
?>

<?php
// Include the header template
get_header();

// Start the loop to display page content
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        // Display the content of the page
        the_content();
    endwhile;
endif;

// Include the footer template
get_footer();
?>
