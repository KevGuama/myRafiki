/**
 * myRafiki3.0 Theme Functions
 *
 * Handles theme setup, script and style enqueues, and other functionality.
 */

<?php
// Ensure the file is not accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Add theme setup functionality.
function myrafiki3_theme_setup() {
    // Enable support for dynamic title tags.
    add_theme_support('title-tag');

    // Enable support for post thumbnails.
    add_theme_support('post-thumbnails');

    // Enable support for Gutenberg block editor styles.
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_theme_support('responsive-embeds');

    // Register primary navigation menu.
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'myrafiki'),
    ));
}
add_action('after_setup_theme', 'myrafiki3_theme_setup');

// Enqueue theme styles and scripts.
function myrafiki3_enqueue_assets() {
    // Enqueue main stylesheet.
    wp_enqueue_style('myrafiki-style', get_stylesheet_uri(), array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'myrafiki3_enqueue_assets');

<?php
// Prevent direct access to the file.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * myRafiki3.0 Theme Functions
 *
 * Handles theme setup, script and style enqueues, and other functionality.
 */

// Theme setup function.
function myrafiki_theme_setup() {
    add_theme_support('title-tag'); // Adds dynamic title support.
    add_theme_support('post-thumbnails'); // Enables featured images.
    add_theme_support('custom-logo'); // Allows custom logos.
    add_theme_support('html5', ['search-form', 'gallery', 'caption']); // Enables HTML5 support.
}
add_action('after_setup_theme', 'myrafiki_theme_setup');

// Enqueue styles and scripts.
function myrafiki_enqueue_scripts() {
    // Enqueue the main stylesheet.
    wp_enqueue_style('myrafiki-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));

    // Enqueue a custom JavaScript file.
    wp_enqueue_script('myrafiki-scripts', get_template_directory_uri() . '/assets/js/scripts.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'myrafiki_enqueue_scripts');
