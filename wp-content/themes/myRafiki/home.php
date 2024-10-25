<?php
/**
 * Template Name: Home
 * Description: The main landing page template for myRafiki.
 */

get_header(); // Include the header

?>

<!-- Start of the Landing Page Content -->

<div class="landing-page">
    <section class="about-section">
        <h1>Welcome to myRafiki</h1>
        <p>Your go-to platform for connecting with local tour guides worldwide.</p>
    </section>

<section class="site-info">
        <h2>About the Site</h2>
        <p>Learn about unique locations, interact with locals, and make your trip unforgettable!</p>
    </section>

<section class="scenes">
        <h2>Scenes to Explore</h2>
        <p>Check out some of our top destinations and discover hidden gems.</p>
        <!-- Add images or gallery for scenes -->
    </section>

<section class="account">
        <h2>Join Us</h2>
        <a href="<?php echo wp_registration_url(); ?>">Create an Account</a> <!-- Link to WP registration -->
    </section>
