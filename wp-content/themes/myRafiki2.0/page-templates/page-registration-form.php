<?php
/**
 * Template Name: Register Now - Editable
 * Description: A custom Gutenberg-editable template for the "Register Now" page.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

<div class="register-now-page-template">

    <!-- Section 1: Gutenberg Block Editor Container -->
    <!-- This container will allow you to add, edit, and rearrange content in the Gutenberg editor. -->
    <div class="gutenberg-content">
        <!-- Page content entered in Gutenberg will be displayed here. -->
        <?php
        // Start the WordPress loop to fetch page content.
        while ( have_posts() ) : the_post();

            // Gutenberg content output.
            the_content();

        endwhile; // End of the loop.
        ?>
    </div>

    <!-- Section 2: Custom Registration Form -->
    <!-- Embedding a custom form below the editable Gutenberg content -->
    <div class="custom-registration-form">

        <h2>Register Now</h2>
        
        <!-- Form with POST method to send data to the current page URL -->
        <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST">
            <!-- Hidden fields for form security -->
            <input type="hidden" name="action" value="myrafiki_registration_form">
            <?php wp_nonce_field( 'myrafiki_register_nonce', 'myrafiki_register_nonce_field' ); ?>
            
            <!-- User Name Field -->
            <label for="user_name">Name:</label>
            <input type="text" id="user_name" name="user_name" required>

            <!-- Email Address Field -->
            <label for="user_email">Email:</label>
            <input type="email" id="user_email" name="user_email" required>

            <!-- Tour Guide Preferences Field -->
            <label for="guide_preferences">Preferred Guide:</label>
            <input type="text" id="guide_preferences" name="guide_preferences" required>

            <!-- Submit Button -->
            <button type="submit">Register</button>
        </form>
    </div>

</div>

<?php get_footer(); ?>
