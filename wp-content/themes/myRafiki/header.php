<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); // Hooks into the head section for loading styles/scripts ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav class="main-navigation">
            <?php wp_nav_menu(array('theme_location' => 'primary')); // Display the primary menu ?>
        </nav>
    </header>