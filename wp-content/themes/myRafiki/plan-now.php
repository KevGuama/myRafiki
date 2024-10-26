<?php
/**
 * Template Name: Plan Now
 * Description: The page where users can plan their trips with local guides.
 */

get_header(); // Include the header

?>

<!-- Start of the Plan Now Content -->

<div class="plan-now-page">
    <h1>Plan Your Trip</h1>

<section class="location-selection">
        <h2>Choose Your Destination</h2>
        <p>Find local guides in your desired location.</p>
        <!-- Dropdown or map selection can go here -->
    </section>

<section class="top-guides">
        <h2>Top Rated Guides</h2>
        <p>Meet the best guides in the area based on ratings and feedback.</p>
        <!-- Display top guides as profiles -->
    </section>

<section class="attractions">
        <h2>Popular Attractions</h2>
        <p>Explore the most popular attractions in the area.</p>
        <!-- Display top attractions, e.g., hotels, beaches, etc. -->
    </section>
</div>

<?php
get_footer(); // Include the footer
?>