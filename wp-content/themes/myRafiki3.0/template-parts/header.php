<?php
/**
 * Header Template
 *
 * This file defines the site's header structure.
 * It is loaded dynamically by WordPress and contains navigation, branding, and other top-level elements.
 */

<!DOCTYPE html>
<html <?php language_attributes(); // Adds language attributes dynamically. ?>>
<head>
    <meta charset="<?php bloginfo('charset'); // Defines the site's character set. ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); // Dynamically generates the page title. ?></title>
    <?php wp_head(); // Ensures all enqueued styles and scripts are loaded. ?>
</head>

<body <?php body_class(); // Adds specific body classes for the current page. ?>>
    <?php wp_body_open(); // Hook for adding scripts at the top of the body tag. ?>

    <header class="site-header">
        <div class="container">
            <!-- Site Branding -->
            <div class="site-branding">
                <a href="<?php echo esc_url(home_url('/')); // Home URL ?>" rel="home">
                    <img src="<?php echo get_theme_mod('custom_logo'); // Fetches the custom logo set in the customizer ?>" alt="<?php bloginfo('name'); ?>">
                </a>
                <p class="site-description"><?php bloginfo('description'); // Displays the site description set in the customizer. ?></p>
            </div>
<header class="site-header">
        <div class="container">
            <!-- Site Branding -->
            <div class="site-branding">
                <a href="<?php echo esc_url(home_url('/')); // Home URL ?>" rel="home">
                    <img src="<?php echo get_theme_mod('custom_logo'); // Fetches the custom logo set in the customizer ?>" alt="<?php bloginfo('name'); ?>">
                </a>
                <p class="site-description"><?php bloginfo('description'); // Displays the site description set in the customizer. ?></p>
            </div>