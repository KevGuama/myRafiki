<?php
// Prevent direct access.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Content Template for Archive Pages
 *
 * Displays a single tour guide's excerpt in the archive view.
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('tour-guide-summary'); ?>>
    <header class="entry-header">
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
    </header>

    <div class="entry-meta">
        <?php
        // Display specialties if available.
        $specialty = get_post_meta(get_the_ID(), 'tour_specialty', true);
        if ($specialty) {
            echo '<p><strong>' . __('Specialty:', 'myrafiki') . '</strong> ' . esc_html($specialty) . '</p>';
        }
        ?>
    </div>

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
</article>
