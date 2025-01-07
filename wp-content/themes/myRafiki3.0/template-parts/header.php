<?php
/**
 * Header Template
 *
 * This file defines the site's header structure.
 * It is loaded dynamically by WordPress and contains navigation, branding, and other top-level elements.
 */
?>
<?php
// Prevent direct access to the file.
if (!defined('ABSPATH')) {
    exit;
}
?>

<header id="masthead" class="site-header">
    <div class="site-branding">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <h1><?php bloginfo('name'); ?></h1>
        </a>
        <p><?php bloginfo('description'); ?></p>
    </div>