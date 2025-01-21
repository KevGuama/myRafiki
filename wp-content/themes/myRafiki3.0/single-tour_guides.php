<?php
// Prevent direct access to the file.
if (!defined('ABSPATH')) {
    exit;
}

// Get the header.
get_header();

// Start the Loop.
if (have_posts()) :
    while (have_posts()) :
        the_post();
        ?>

        <div class="tour-guide-container">
            <h1><?php the_title(); ?></h1>
            <div class="tour-guide-details">
                <p><strong>Specialty:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'tour_guide_specialty', true)); ?></p>
                <p><strong>Phone:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'tour_guide_phone', true)); ?></p>
                <p><strong>Email:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'tour_guide_email', true)); ?></p>
                <p><strong>Languages:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'tour_guide_languages', true)); ?></p>
                <p><strong>Experience:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'tour_guide_experience', true)); ?> years</p>
                <p><strong>Available Now:</strong> <?php echo get_post_meta(get_the_ID(), 'tour_guide_available', true) ? 'Yes' : 'No'; ?></p>
            </div>
            <div class="tour-guide-content">
                <?php the_content(); ?>
            </div>
        </div>

        <?php
    endwhile;
else :
    echo '<p>No Tour Guides found.</p>';
endif;

// Get the footer.
get_footer();


/**
 * Next step: Display Meta Box Data on the Frontend
 * 
 * Use the single-tour_guides.php template to display:
 * Tour Guide Name (post title).
 * Tour Guide Details (custom fields from the meta box).
 * Any additional content or blocks added in Gutenberg.
*/

// Get the header.
get_header();

// Start the Loop to fetch the current post's data.
if (have_posts()) :
    while (have_posts()) :
        the_post();


