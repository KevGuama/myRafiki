<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>"> 
    <!-- Output the charset defined in WordPress settings -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- Ensure the website is responsive and scales properly on mobile devices -->

    <title>
        <?php 
        // Display the site title and page title dynamically
        bloginfo('name'); ?> | <?php 
        // If it's the homepage, display the site's description, otherwise display the page title
        is_front_page() ? bloginfo('description') : wp_title(''); 
        ?>
    </title>

    <?php 
    // This function ensures that any necessary WordPress scripts, styles, or metadata are inserted in the header
    wp_head(); 
    ?>
</head>
<body <?php body_class(); ?>> 
    <!-- Adds classes to the body element based on the current page or post (useful for styling) -->

<header>
    <nav>
        <?php
        // Display the primary menu, which was registered in functions.php using 'primary-menu' as the location
        wp_nav_menu(array(
            'theme_location' => 'primary-menu', // The registered location for the navigation menu
            'container' => 'ul', // This sets the menu to be output inside a <ul> element
        ));
        ?>
    </nav>
</header>
