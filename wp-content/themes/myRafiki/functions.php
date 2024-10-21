<?php
/**
 * myRafiki functions and definitions
 *
 * This file must be parseable by PHP 5.2.
 */

<?php
// Add theme support for post thumbnails and other features
function myrafiki_setup() {
    add_theme_support('title-tag'); // Enables dynamic title tag
    add_theme_support('post-thumbnails'); // Enables featured images
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'myrafiki')
    ));
}
add_action('after_setup_theme', 'myrafiki_setup');

// Enqueue theme styles and scripts
function myrafiki_assets() {
    wp_enqueue_style('myrafiki-style', get_stylesheet_uri()); // Load main stylesheet
    wp_enqueue_script('myrafiki-scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true); // Load custom JS
}
add_action('wp_enqueue_scripts', 'myrafiki_assets');
?>
