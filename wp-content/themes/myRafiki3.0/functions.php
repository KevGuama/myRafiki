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


<?php
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
