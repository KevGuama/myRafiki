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
    $labels = array(
        'name'               => __('Tour Guides', 'myrafiki'),
        'singular_name'      => __('Tour Guide', 'myrafiki'),
        'menu_name'          => __('Tour Guides', 'myrafiki'),
        'name_admin_bar'     => __('Tour Guide', 'myrafiki'),
	'add_new'            => __('Add New', 'myrafiki'),
        'add_new_item'       => __('Add New Tour Guide', 'myrafiki'),
        'new_item'           => __('New Tour Guide', 'myrafiki'),
        'edit_item'          => __('Edit Tour Guide', 'myrafiki'),
        'view_item'          => __('View Tour Guide', 'myrafiki'),
        'all_items'          => __('All Tour Guides', 'myrafiki'),
        'search_items'       => __('Search Tour Guides', 'myrafiki'),
        'not_found'          => __('No Tour Guides found.', 'myrafiki'),
        'not_found_in_trash' => __('No Tour Guides found in Trash.', 'myrafiki'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'show_in_rest'       => true, // Enables Gutenberg support.
        'supports'           => array('title', 'editor', 'thumbnail'),
        'menu_icon'          => 'dashicons-businessman',
        'rewrite'            => array('slug' => 'tour-guides'),
    );
    

register_post_type('tour_guides', $args);
}
add_action('init', 'myrafiki_register_tour_guides_cpt');




