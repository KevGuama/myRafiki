<?php
/**
 * Main Index Template
 *
 * This file is the fallback template for displaying posts and pages.
 * It renders a list of posts in a blog format when no other template matches.
 */
<?php
// Ensure the file is not accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Basic structure for the index page.
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

<main class="site-main">
    <div class="container">
        <?php if (have_posts()) : // Checks if there are posts to display. ?>
            <h1><?php single_post_title(); // Displays the page or post title. ?></h1>

            <!-- Loop Through Posts -->
<!-- Loop Through Posts -->
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); // Adds dynamic post classes ?>>
                    <h2><a href="<?php the_permalink(); // Links to the full post ?>"><?php the_title(); // Displays the post title ?></a></h2>
                    <div class="entry-meta">
                        <span>Posted on <?php echo get_the_date(); // Displays the post date ?></span>
                    </div>
                    <div class="entry-content">
                        <?php the_excerpt(); // Displays a summary of the post content. ?>
                    </div>
<?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); // Adds dynamic post classes ?>>
                    <h2><a href="<?php the_permalink(); // Links to the full post ?>"><?php the_title(); // Displays the post title ?></a></h2>
                    <div class="entry-meta">
                        <span>Posted on <?php echo get_the_date(); // Displays the post date ?></span>
                    </div>
                    <div class="entry-content">
                        <?php the_excerpt(); // Displays a summary of the post content. ?>
                    </div>
                </article>
