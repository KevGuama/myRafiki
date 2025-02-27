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

// Include the header template.
get_header();

// Start the WordPress Loop to fetch data for the current post.
if (have_posts()) :
    while (have_posts()) :
        the_post(); // Sets up global post data for use in the template.

        // Fetch custom meta fields for the current post.
        $tour_specialty = get_post_meta(get_the_ID(), 'tour_specialty', true); // Get the 'Tour Specialty' value.
        $languages_spoken = get_post_meta(get_the_ID(), 'languages_spoken', true); // Get the 'Languages Spoken' value.
        $tour_rates = get_post_meta(get_the_ID(), 'tour_rates', true); // Get the 'Tour Rates' value.
        ?>
        
        <!-- Start Article for the Tour Guide Post -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <!-- Display the Tour Guide Title -->
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); // Output the post title ?></h1>
            </header>

            <!-- Display the Tour Guide Details -->
            <div class="tour-guide-details">
                <?php if ($tour_specialty) : ?>
                    <!-- Display the Tour Specialty if available -->
                    <p><strong>Specialty:</strong> <?php echo esc_html($tour_specialty); ?></p>
                <?php endif; ?>

                <?php if ($languages_spoken) : ?>
                    <!-- Display the Languages Spoken if available -->
                    <p><strong>Languages Spoken:</strong> <?php echo esc_html($languages_spoken); ?></p>
                <?php endif; ?>

                <?php if ($tour_rates) : ?>
                    <!-- Display the Tour Rates if available -->
                    <p><strong>Rates:</strong> <?php echo esc_html($tour_rates); ?></p>
                <?php endif; ?>
            </div>

            <!-- Display the Gutenberg Content of the Post -->
            <div class="entry-content">
                <?php 
                // Output the main content entered via Gutenberg or Classic Editor.
                the_content(); 
                ?>
            </div>
        </article>

        <?php
    endwhile; // End of the Loop.
else :
    // Display a message if no tour guide post is found.
    echo '<p>No tour guide found.</p>';
endif;

// Include the footer template.
get_footer();
?>
