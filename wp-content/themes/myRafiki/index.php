<?php
/**
 * The main archive template file
 *
 */

get_header(); // Loads the header.php file ?>

<div class="content">
    <?php
    // Start the loop to check if there are any posts or pages to display
    if (have_posts()) :
        
        // Loop through the available posts/pages
        while (have_posts()) : the_post();
            
            // Load content template from the template-parts folder
            // The second argument dynamically loads content based on the post format (e.g., gallery, video, etc.)
            get_template_part('template-parts/content', get_post_format());
        
        // End the loop
        endwhile;
    
    // If no posts are found, display a message to the user
    else :
        echo '<p>No content found</p>'; // Output a fallback message when there are no posts
    
    endif;
    ?>
</div>

<?php get_footer(); // Loads the footer.php file ?>
