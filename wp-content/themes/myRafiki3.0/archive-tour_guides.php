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
// Fetch custom meta fields.
            $tour_specialty = get_post_meta(get_the_ID(), 'tour_specialty', true);
            $languages_spoken = get_post_meta(get_the_ID(), 'languages_spoken', true);
            $tour_rates = get_post_meta(get_the_ID(), 'tour_rates', true);
            ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <!-- Title and permalink -->
                <h2 class="tour-guide-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <!-- Title and permalink -->
                <h2 class="tour-guide-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

<!-- Custom fields -->
                <div class="tour-guide-meta">
                    <?php if ($tour_specialty) : ?>
                        <p><strong>Specialty:</strong> <?php echo esc_html($tour_specialty); ?></p>
                    <?php endif; ?>

<?php if ($languages_spoken) : ?>
                        <p><strong>Languages Spoken:</strong> <?php echo esc_html($languages_spoken); ?></p>
                    <?php endif; ?>

                    <?php if ($tour_rates) : ?>
                        <p><strong>Rates:</strong> <?php echo esc_html($tour_rates); ?></p>
                    <?php endif; ?>
                </div>
<!-- Read More link -->
                <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
            </article>

            <?php
        endwhile;

        echo '</div>';


