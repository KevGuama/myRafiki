<?php
/**
 * Template Name: Content Plan Now
 * Description: Template for the Plan Now page with dynamic content.
 */

// Redirect if not logged in
if ( ! is_user_logged_in() ) {
    wp_redirect( wp_login_url() );
    exit;
}

// Get selected location from URL or set default
$location = isset($_GET['location']) ? sanitize_text_field($_GET['location']) : 'California';

// Define guides and attractions for each location
$locations = [
    'Nairobi' => [
        'guides' => [
            ['name' => 'Karanja', 'rating' => '5 Stars'],
            ['name' => 'Omolo', 'rating' => '4.5 Stars'],
            ['name' => 'Kelvin', 'rating' => '4 Stars']
        ],
        'attractions' => [
            'Nairobi National Park', 'National Museum', 'Nairobi Walk'
        ]
    ],
    'California' => [
        'guides' => [
            ['name' => 'Jane Doe', 'rating' => '5 Stars'],
            ['name' => 'John Doe', 'rating' => '4.5 Stars'],
            ['name' => 'Dr. Who', 'rating' => '4 Stars']
        ],
        'attractions' => [
            'Hollywood Walk of Fame', 'Disneyland Park', 'Yosemite National Park'
        ]
    ]
];

// Fetch current guides and attractions based on selected location
$current_location = $locations[$location];

// Display Title and Introduction
echo '<h1>Plan Your Trip to ' . esc_html($location) . '</h1>';
echo '<p>Explore top-rated local tour guides and attractions in ' . esc_html($location) . '.</p>';

// Display Tour Guides
echo '<h2>Top-Rated Guides in ' . esc_html($location) . '</h2>';
foreach ($current_location['guides'] as $guide) {
    echo '<p>Guide: ' . esc_html($guide['name']) . ' - ' . esc_html($guide['rating']) . '</p>';
}

// Display Attractions
echo '<h2>Popular Attractions in ' . esc_html($location) . '</h2>';
echo '<ul>';
foreach ($current_location['attractions'] as $attraction) {
    echo '<li>' . esc_html($attraction) . '</li>';
}
echo '</ul>';
?>
