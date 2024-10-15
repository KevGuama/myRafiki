<?php
function kelvin_portfolio_enqueue_styles() {
    wp_enqueue_style('kelvin-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'kelvin_portfolio_enqueue_styles');

// Register navigation menu
function kelvin_register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'kelvin-portfolio'),
    ));
}
add_action('init', 'kelvin_register_menus');
?>

