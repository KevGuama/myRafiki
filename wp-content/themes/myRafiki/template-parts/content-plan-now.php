<?php
/**
 * Template Name: Content Plan Now
 * Description: Template for the Plan Now page with dynamic content.
 * Make the Plan Now page Gutenberg-compatible .
 */

// Redirect users to the login page if they are not logged in.
if ( ! is_user_logged_in() ) {
    wp_redirect( wp_login_url() ); // Redirects to the WordPress login URL
    exit; // Prevents further code execution
}

get_header(); ?>

<div class="plan-now-container">
    <!-- Gutenberg editable section for adding blocks in Plan Now page -->
    <div class="plan-now-content">