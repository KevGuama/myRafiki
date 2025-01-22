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

article id="post-<?php the_ID(); ?>" <?php post_class('tour-guide-summary'); ?>>
    <header class="entry-header">
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
    </header>