<?php
/**
 * myRafiki functions and definitions
 *
 * This file must be parseable by PHP 5.2.
 */

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

// Restrict access to the "Plan Now" page for non-logged-in users
function restrict_plan_now_page_access() {
    // Specify the ID or slug of the "Plan Now" page
    $plan_now_page_slug = 'plan-now';
    
    // Check if the user is not logged in and if the current page is "Plan Now"
    if (!is_user_logged_in() && is_page($plan_now_page_slug)) {
        // Redirect to the login page or another safe page
        wp_redirect(wp_login_url());
        exit;
    }
}
add_action('template_redirect', 'restrict_plan_now_page_access');

// Conditionally remove "Plan Now" from menus if the user is not logged in
function hide_plan_now_from_menu($items, $args) {
    // Specify the "Plan Now" page slug
    $plan_now_page_slug = 'plan-now';
    
    if (!is_user_logged_in()) {
        foreach ($items as $key => $item) {
            if ($item->object == 'page' && $item->post_name == $plan_now_page_slug) {
                unset($items[$key]); // Remove the "Plan Now" menu item
            }
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'hide_plan_now_from_menu', 10, 2);

// Enqueue custom CSS files based on the current page.
function myrafiki_enqueue_page_specific_styles() {
    if ( is_page_template( 'template-parts/content-plan-now.php' ) ) {
        // Enqueue Plan Now page CSS only on the Plan Now page.
        wp_enqueue_style( 'plan-now-style', get_template_directory_uri() . '/assets/css/plan-now.css', array(), '1.0' );
    } elseif ( is_front_page() || is_home() ) {
        // Enqueue Home page CSS only on the Home page.
        wp_enqueue_style( 'home-style', get_template_directory_uri() . '/assets/css/home.css', array(), '1.0' );
    }
}
add_action( 'wp_enqueue_scripts', 'myrafiki_enqueue_page_specific_styles' );

// Register a Gutenberg block template specifically for the "Plan Now" page.
function myrafiki_register_plan_now_block_template( $post ) {
    // Replace with your actual Plan Now page ID.
    $plan_now_page_id = 949; // Replace YOUR_PLAN_NOW_PAGE_ID with the ID of your Plan Now page.

    // Check if we're editing the Plan Now page.
    if ( $post->ID != $plan_now_page_id ) {
        return;
    }

    // Define the block template layout for the Plan Now page.
    $post_type_object = get_post_type_object( 'page' );

    if ( ! $post_type_object ) {
        return;
    }

    $post_type_object->template = array(
        // Introduction section (editable in Gutenberg).
        array( 'core/paragraph', array(
            'placeholder' => 'Enter the introduction here for your Plan Now page...',
        ) ),
        // Location selection heading.
        array( 'core/heading', array(
            'level' => 2,
            'content' => 'Select a Location',
        ) ),
        // Placeholder for location dropdown.
        array( 'core/paragraph', array(
            'placeholder' => 'Location dropdown goes here...',
        ) ),
        // Placeholder for guide information.
        array( 'core/paragraph', array(
            'placeholder' => 'Enter guide information here...',
        ) ),
        // Attractions list placeholder.
        array( 'core/list', array(
            'placeholder' => 'List the attractions here...',
        ) ),
    );
}

// Hook to initialize the block template when the editor loads for pages.
add_action( 'edit_form_after_title', 'myrafiki_register_plan_now_block_template' );

function myrafiki_enqueue_plan_now_styles() {
    if ( is_page_template( 'template-parts/content-plan-now.php' ) ) {
        wp_enqueue_style( 'myrafiki-plan-now-css', get_template_directory_uri() . '/assets/css/plan-now.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'myrafiki_enqueue_plan_now_styles' );

?>

