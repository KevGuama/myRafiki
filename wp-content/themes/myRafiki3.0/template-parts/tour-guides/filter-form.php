<?php
// Prevent direct access.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Filter Form Template
 *
 * Displays a form for filtering tour guides by specialty, languages, and rates.
 */
?>

<form method="GET" action="<?php echo esc_url(get_post_type_archive_link('tour_guides')); ?>" class="tour-guide-filter-form">
    <div>
        <!-- Filter by Specialty -->
        <label for="specialty"><?php _e('Specialty', 'myrafiki'); ?></label>
        <input type="text" name="specialty" id="specialty" value="<?php echo esc_attr(get_query_var('specialty')); ?>" />
    </div>
