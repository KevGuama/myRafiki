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

    <div>
        <!-- Filter by Languages -->
        <label for="languages"><?php _e('Languages', 'myrafiki'); ?></label>
        <input type="text" name="languages" id="languages" value="<?php echo esc_attr(get_query_var('languages')); ?>" />
    </div>

    <div>
        <!-- Filter by Rates -->
        <label for="rates"><?php _e('Rates', 'myrafiki'); ?></label>
        <input type="text" name="rates" id="rates" value="<?php echo esc_attr(get_query_var('rates')); ?>" />
    </div>

    <div>
        <!-- Submit Button -->
        <button type="submit"><?php _e('Filter', 'myrafiki'); ?></button>
    </div>
</form>
