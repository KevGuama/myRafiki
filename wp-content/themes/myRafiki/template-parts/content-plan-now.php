<?php
/**
 * Template Name: Content Plan Now
 * Description: Template for the Plan Now page with dynamic content.
 */
?>

// Redirect users to the login page if they are not logged in.
if ( ! is_user_logged_in() ) {
    wp_redirect( wp_login_url() ); // Redirects to the WordPress login URL
    exit; // Prevents further code execution
}

<div class="plan-now-content">
    <h1>Plan Your Trip</h1>
    <p>Select a location to view guides and attractions available:</p>

    <div class="location" id="nairobi-kenya">
        <h2>Nairobi, Kenya</h2>
        <h3>Top-Rated Guides:</h3>
        <ul>
            <li>Karanja - 5 stars</li>
            <li>Omolo - 4.5 stars</li>
            <li>Kelvin - 5 stars</li>
        </ul>
        <h3>Best Attractions:</h3>
        <ul>
            <li>Nairobi National Park</li>
            <li>National Museum</li>
            <li>Nairobi Walk</li>
        </ul>
    </div>

    <div class="location" id="california-usa">
        <h2>California, USA</h2>
        <h3>Top-Rated Guides:</h3>
        <ul>
            <li>Jane Doe - 4.8 stars</li>
            <li>John Doe - 4.7 stars</li>
            <li>Dr. Who - 5 stars</li>
        </ul>
        <h3>Best Attractions:</h3>
        <ul>
            <li>Golden Gate Bridge</li>
            <li>Hollywood Walk of Fame</li>
            <li>Disneyland Park</li>
        </ul>
    </div>
</div>
