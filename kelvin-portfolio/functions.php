<?php
// Theme setup
function kelvin_portfolio_setup() {
    // Gutenberg support
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('post-thumbnails');

    // Register menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'kelvin-portfolio'),
    ));
}
add_action('after_setup_theme', 'kelvin_portfolio_setup');

// Enqueue styles and scripts
function kelvin_portfolio_enqueue_scripts() {
    wp_enqueue_style('main-styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'kelvin_portfolio_enqueue_scripts');
