<?php
/**
 * myRafiki3.0 Theme Functions
 *
 * Handles theme setup, script and style enqueues, and other functionality.
 */

// Prevent direct access to the file.
if (!defined('ABSPATH')) {
    exit;
}

// Theme setup function.
function myrafiki3_theme_setup() {
    // Enable support for dynamic title tags.
    add_theme_support('title-tag');

    // Enable support for post thumbnails.
    add_theme_support('post-thumbnails');

    // Enable support for Gutenberg block editor styles.
    add_theme_support('align-wide'); // Support for wide and full-width blocks.
    add_theme_support('editor-styles'); // Enables custom editor styles.
    add_theme_support('responsive-embeds'); // Makes embedded content responsive.
    add_theme_support('custom-logo'); // Allows custom logos.
    add_theme_support('html5', ['search-form', 'gallery', 'caption']); // Enables HTML5 support.

    // Register primary navigation menu.
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'myrafiki'),
    ));
}
add_action('after_setup_theme', 'myrafiki3_theme_setup');

// Enqueue theme styles and scripts.
function myrafiki3_enqueue_assets() {
    // Enqueue main stylesheet.
    wp_enqueue_style('myrafiki-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));

    // Enqueue a custom JavaScript file.
    wp_enqueue_script('myrafiki-scripts', get_template_directory_uri() . '/assets/js/scripts.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'myrafiki3_enqueue_assets');

// Register the Custom Post Type (CPT) for Tour Guides.
function myrafiki_register_tour_guides_cpt() {
    // Labels for the Tour Guides CPT to be displayed in the WordPress admin interface.
    $labels = array(
        'name'               => __('Tour Guides', 'myrafiki'), // Plural name for the CPT.
        'singular_name'      => __('Tour Guide', 'myrafiki'), // Singular name for a single item.
        'menu_name'          => __('Tour Guides', 'myrafiki'), // Name displayed in the admin menu.
        'name_admin_bar'     => __('Tour Guide', 'myrafiki'), // Name displayed in the admin bar.
        'add_new'            => __('Add New', 'myrafiki'), // Label for the "Add New" button.
        'add_new_item'       => __('Add New Tour Guide', 'myrafiki'), // Label for adding a new tour guide.
        'new_item'           => __('New Tour Guide', 'myrafiki'), // Label for a new item.
        'edit_item'          => __('Edit Tour Guide', 'myrafiki'), // Label for editing an existing tour guide.
        'view_item'          => __('View Tour Guide', 'myrafiki'), // Label for viewing a tour guide.
        'all_items'          => __('All Tour Guides', 'myrafiki'), // Label for viewing all tour guides.
        'search_items'       => __('Search Tour Guides', 'myrafiki'), // Label for searching tour guides.
        'not_found'          => __('No Tour Guides found.', 'myrafiki'), // Message when no tour guides are found.
        'not_found_in_trash' => __('No Tour Guides found in Trash.', 'myrafiki'), // Message for empty trash.
    );

    // Arguments that define the behavior and features of the Tour Guides CPT.
    $args = array(
        'labels'             => $labels, // Assign the labels array.
        'public'             => true, // Make the CPT publicly accessible on the frontend and admin.
        'has_archive'        => true, // Enable archive pages for the CPT.
        'show_in_rest'       => true, // Enable Gutenberg editor and REST API support.
        'supports'           => array('title', 'editor', 'thumbnail'), // Enable support for title, editor, and featured image.
        'menu_icon'          => 'dashicons-businessman', // Icon to represent the CPT in the admin menu.
        'rewrite'            => array('slug' => 'tour-guides'), // Custom slug for the CPT URL.
    );

    // Register the custom post type with the provided arguments.
    register_post_type('tour_guides', $args);
}

// Hook the function to the 'init' action to ensure it runs when WordPress initializes.
add_action('init', 'myrafiki_register_tour_guides_cpt');


// Step: Adding Custom Fields to the Tour Guides CPT

// Add meta boxes to the Tour Guides CPT.
function myrafiki_add_tour_guide_meta_boxes() {
    add_meta_box(
        'tour_guide_details', // Unique ID for the meta box.
        __('Tour Guide Details', 'myrafiki'), // Title of the meta box.
        'myrafiki_tour_guide_meta_box_callback', // Callback function to render the meta box.
        'tour_guides', // Post type to which this meta box applies.
        'normal', // Context: where to display (normal, side, advanced).
        'high' // Priority of the meta box.
    );
}
add_action('add_meta_boxes', 'myrafiki_add_tour_guide_meta_boxes');

// Callback function to render the meta box.
function myrafiki_tour_guide_meta_box_callback($post) {
    // Add a nonce field for security.
    wp_nonce_field('myrafiki_save_tour_guide_meta', 'myrafiki_tour_guide_nonce');

    // Retrieve current values (if any) for each field.
    $specialty = get_post_meta($post->ID, '_guide_specialty', true);
    $phone = get_post_meta($post->ID, '_guide_phone', true);
    $email = get_post_meta($post->ID, '_guide_email', true);
    $languages = get_post_meta($post->ID, '_guide_languages', true);
    $experience = get_post_meta($post->ID, '_guide_experience', true);
    $availability = get_post_meta($post->ID, '_guide_availability', true);

    // Render form fields.
    ?>
    <p>
        <label for="guide_specialty"><?php _e('Guide Specialty:', 'myrafiki'); ?></label>
        <select id="guide_specialty" name="guide_specialty">
            <option value="safari" <?php selected($specialty, 'safari'); ?>><?php _e('Safari', 'myrafiki'); ?></option>
            <option value="mountain_trekking" <?php selected($specialty, 'mountain_trekking'); ?>><?php _e('Mountain Trekking', 'myrafiki'); ?></option>
            <option value="cultural_tours" <?php selected($specialty, 'cultural_tours'); ?>><?php _e('Cultural Tours', 'myrafiki'); ?></option>
        </select>
    </p>
    <p>
        <label for="guide_phone"><?php _e('Phone:', 'myrafiki'); ?></label>
        <input type="text" id="guide_phone" name="guide_phone" value="<?php echo esc_attr($phone); ?>" />
    </p>
    <p>
        <label for="guide_email"><?php _e('Email:', 'myrafiki'); ?></label>
        <input type="email" id="guide_email" name="guide_email" value="<?php echo esc_attr($email); ?>" />
    </p>
    <p>
        <label for="guide_languages"><?php _e('Languages Spoken:', 'myrafiki'); ?></label>
        <textarea id="guide_languages" name="guide_languages"><?php echo esc_textarea($languages); ?></textarea>
    </p>
    <p>
        <label for="guide_experience"><?php _e('Years of Experience:', 'myrafiki'); ?></label>
        <input type="number" id="guide_experience" name="guide_experience" value="<?php echo esc_attr($experience); ?>" />
    </p>
    <p>
        <label for="guide_availability">
            <input type="checkbox" id="guide_availability" name="guide_availability" value="1" <?php checked($availability, '1'); ?> />
            <?php _e('Available Now', 'myrafiki'); ?>
        </label>
    </p>
    <?php
}

// Save custom field data.
function myrafiki_save_tour_guide_meta($post_id) {
    // Verify nonce for security.
    if (!isset($_POST['myrafiki_tour_guide_nonce']) || !wp_verify_nonce($_POST['myrafiki_tour_guide_nonce'], 'myrafiki_save_tour_guide_meta')) {
        return;
    }

    // Skip saving during autosave or if the user lacks permission.
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE || !current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save each field value.
    update_post_meta($post_id, '_guide_specialty', sanitize_text_field($_POST['guide_specialty']));
    update_post_meta($post_id, '_guide_phone', sanitize_text_field($_POST['guide_phone']));
    update_post_meta($post_id, '_guide_email', sanitize_email($_POST['guide_email']));
    update_post_meta($post_id, '_guide_languages', sanitize_textarea_field($_POST['guide_languages']));
    update_post_meta($post_id, '_guide_experience', intval($_POST['guide_experience']));
    update_post_meta($post_id, '_guide_availability', isset($_POST['guide_availability']) ? '1' : '0');
}
add_action('save_post', 'myrafiki_save_tour_guide_meta');


/**
 * Debug : Issue 1: Meta Box Not Editable in Gutenberg
 * Issue 2: Not Visible on the Frontend
 */

// Register meta fields for Tour Guides CPT.
function myrafiki_register_tour_guide_meta() {
    register_post_meta('tour_guides', 'tour_guide_specialty', array(
        'type'         => 'string',
        'single'       => true,
        'show_in_rest' => true,
    ));
    register_post_meta('tour_guides', 'tour_guide_phone', array(
        'type'         => 'string',
        'single'       => true,
        'show_in_rest' => true,
    ));
    register_post_meta('tour_guides', 'tour_guide_email', array(
        'type'         => 'string',
        'single'       => true,
        'show_in_rest' => true,
    ));
    register_post_meta('tour_guides', 'tour_guide_languages', array(
        'type'         => 'string',
        'single'       => true,
        'show_in_rest' => true,
    ));
    register_post_meta('tour_guides', 'tour_guide_experience', array(
        'type'         => 'number',
        'single'       => true,
        'show_in_rest' => true,
    ));
    register_post_meta('tour_guides', 'tour_guide_available', array(
        'type'         => 'boolean',
        'single'       => true,
        'show_in_rest' => true,
    ));
}
add_action('init', 'myrafiki_register_tour_guide_meta');


/**
 * Modify the Tour Guides Query Based on Filters
 */
function myrafiki_filter_tour_guides_query($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('tour_guides')) {
        // Get filter values from the URL.
        $specialty = sanitize_text_field(get_query_var('specialty'));
        $languages = sanitize_text_field(get_query_var('languages'));
        $rates = sanitize_text_field(get_query_var('rates'));

        // Add meta queries for filtering.
        $meta_query = array();

        if (!empty($specialty)) {
            $meta_query[] = array(
                'key'     => 'tour_specialty',
                'value'   => $specialty,
                'compare' => 'LIKE',
            );
        }

        if (!empty($languages)) {
            $meta_query[] = array(
                'key'     => 'languages_spoken',
                'value'   => $languages,
                'compare' => 'LIKE',
            );
        }

        if (!empty($rates)) {
            $meta_query[] = array(
                'key'     => 'tour_rates',
                'value'   => $rates,
                'compare' => 'LIKE',
            );
        }

        // Apply the meta query.
        if (!empty($meta_query)) {
            $query->set('meta_query', $meta_query);
        }
    }
}
add_action('pre_get_posts', 'myrafiki_filter_tour_guides_query');
