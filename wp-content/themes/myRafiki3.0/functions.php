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
