<?php
/**
 * Footer Template
 *
 * This file defines the site's footer structure.
 * It includes copyright information and other footer-level widgets or content.
 */
?>

<footer class="site-footer">
        <div class="container">
            <p>
                &copy; <?php echo date('Y'); // Displays the current year. ?> 
                <?php bloginfo('name'); // Displays the site name. ?>. All rights reserved.
            </p>

<!-- Footer Menu -->
            <nav class="footer-navigation">
                <?php
                // Displays the footer navigation menu.
                wp_nav_menu(array(
                    'theme_location' => 'footer', // Specifies the footer menu location.
                    'menu_class'     => 'footer-menu', // Adds CSS class for styling.
                ));
                ?>
  ?>
            </nav>
        </div>
    </footer>

    <?php wp_footer(); // Ensures all enqueued scripts are loaded before closing the body tag. ?>
</body>
</html>