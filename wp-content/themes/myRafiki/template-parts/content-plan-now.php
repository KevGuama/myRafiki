<?php
/**
 * Template Part: Plan Now Page Content
 *
 * This template shows content for the "Plan Now" page.
 */

// Check if user is logged in
if ( ! is_user_logged_in() ) {
    wp_redirect( wp_login_url() ); // Redirects to login if not logged in
    exit;
}

// Get selected location from URL or set default
$location = isset($_GET['location']) ? sanitize_text_field($_GET['location']) : 'Nairobi';

// Define guides and attractions for each location
$locations = [
    'Nairobi' => [
        'guides' => [
            ['name' => 'Karanja', 'rating' => '5 Stars'],
            ['name' => 'Omolo', 'rating' => '4.5 Stars'],
            ['name' => 'Kelvin', 'rating' => '4 Stars']
        ],

