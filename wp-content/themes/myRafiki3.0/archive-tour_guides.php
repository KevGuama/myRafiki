<?php

/**
 * Create the Archive Template
 * File: archive-tour_guides.php
 * Purpose: To list all tour guides with key information like title, specialty, languages  
 * spoken, and a "Read More" link to the full post.
 * Added filter logic for tour guides
*/

<?php
// Prevent direct access to the file.
if (!defined('ABSPATH')) {
    exit;
}

// Include the header.
get_header();
?>

<div class="tour-guides-archive">

    <!-- Include the Filter Form -->
    <?php get_template_part('template-parts/tour-guides/filter-form'); ?>

    <!-- Tour Guides List -->
    <div class="tour-guides-list">
        <?php
        // Arguments for WP_Query based on filter values.
        $args = [
            'post_type' => 'tour_guides',
            'posts_per_page' => -1,
            's' => isset($_GET['search_query']) ? sanitize_text_field($_GET['search_query']) : '',
            'meta_query' => [
                'relation' => 'AND',
            ],
        ];

        // Add specialty filter if selected.
        if (!empty($_GET['filter_specialty'])) {
            $args['meta_query'][] = [
                'key' => 'tour_specialty',
                'value' => sanitize_text_field($_GET['filter_specialty']),
                'compare' => 'LIKE',
            ];
        }

        // Add language filter if selected.
        if (!empty($_GET['filter_language'])) {
            $args['meta_query'][] = [
                'key' => 'languages_spoken',
                'value' => sanitize_text_field($_GET['filter_language']),
                'compare' => 'LIKE',
            ];
        }

        // Query the posts.
        $query = new WP_Query($args);

        // Check if there are posts.
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="tour-guide-excerpt"><?php the_excerpt(); ?></div>
                </article>
                <?php
            endwhile;
        else :
            echo '<p>No tour guides found matching your criteria.</p>';
        endif;

        // Reset post data.
        wp_reset_postdata();
        ?>
    </div>
</div>

<?php
// Include the footer.
get_footer();
?>
