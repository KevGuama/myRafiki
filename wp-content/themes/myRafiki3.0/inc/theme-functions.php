<?php
// Prevent direct access to the file.
if (!defined('ABSPATH')) {
    exit;
}

// Register widget areas.
function myrafiki3_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'myrafiki'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'myrafiki'),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}