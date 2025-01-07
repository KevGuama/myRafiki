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