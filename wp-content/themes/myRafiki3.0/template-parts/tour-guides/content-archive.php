<?php
/**
 * Archive Template for Tour Guides
 * File: archive-tour_guides.php
 * Purpose: Lists all tour guides with key information like title, specialty, and languages spoken.
 */

// Prevent direct access.
if (!defined('ABSPATH')) {
    exit;
}

// Include the header.
get_header();
?>

<div class="tour-guides-archive">

    <!-- Page Header -->
    <header class="page-header">
        <h1 class="page-title"><?php post_type_archive_title(); ?></h1>
    </header>

<!-- Include the Filter Form -->
    <section class="tour-guide-filter">
        <?php get_template_part('template-parts/tour-guides/filter-form'); ?>
    </section>

<!-- Tour Guides List -->
    <section class="tour-guides-list">
        <?php
        // Start the Loop.
        if (have_posts()) :
            while (have_posts()) :
                the_post();

// Use a template part for consistent content display.
                get_template_part('template-parts/tour-guides/content', 'archive');

            endwhile;
// Display pagination.
            the_posts_pagination([
                'prev_text' => __('Previous', 'myrafiki'),
                'next_text' => __('Next', 'myrafiki'),
            ]);
        else :
// No posts found message.
            echo '<p>' . __('No tour guides found matching your criteria.', 'myrafiki') . '</p>';
        endif;
        ?>
</section>
</div>

<?php
// Include the footer.
get_footer();
?>
