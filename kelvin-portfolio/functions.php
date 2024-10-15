<?php
// Enqueue the theme's stylesheet
// This function is hooked into 'wp_enqueue_scripts', which is used to add scripts and styles in WordPress.
function kelvin_portfolio_enqueue_styles() {
    // This function loads the theme's main stylesheet (style.css).
    wp_enqueue_style('kelvin-style', get_stylesheet_uri());
}
// Hook the 'kelvin_portfolio_enqueue_styles' function into 'wp_enqueue_scripts'
add_action('wp_enqueue_scripts', 'kelvin_portfolio_enqueue_styles');

// Register a primary menu location for the theme
// This function is used to register navigation menus for the theme.
function kelvin_register_menus() {
    // Register a menu location with the identifier 'primary-menu' for the theme.
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'kelvin-portfolio'),
    ));
}
// Hook the 'kelvin_register_menus' function into 'init', which initializes various WordPress features.
add_action('init', 'kelvin_register_menus');

?>
