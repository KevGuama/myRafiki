<?php
/**
 * Template Name: Registration Form
 * Description: A custom template for user registration.
 */

get_header(); // Include the theme header

?>

<div class="registration-form-container">
    <!-- Display the page title dynamically -->
    <h2><?php the_title(); ?></h2>

    <?php
    // Check if the form has been submitted via POST request
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Sanitize and store form inputs
        $username = sanitize_text_field($_POST['username']);
        $email = sanitize_email($_POST['email']);
        $password = sanitize_text_field($_POST['password']);

        // Perform validation and check for errors
        if (username_exists($username)) {
            // Error message if username already exists
            echo '<p class="error">Username already exists.</p>';
        } elseif (!is_email($email) || email_exists($email)) {
            // Error message if email is invalid or already registered
            echo '<p class="error">Invalid or existing email.</p>';
        } else {
            // Create a new user in WordPress
            $user_id = wp_create_user($username, $password, $email);
            if (!is_wp_error($user_id)) {
                // Success message on successful registration
                echo '<p class="success">Registration successful!</p>';
            } else {
                // Error message on registration failure
                echo '<p class="error">There was an error in registration.</p>';
            }
        }
    }
    ?>

    <!-- Registration form with POST method -->
    <form method="post" class="registration-form">
        <!-- Username field -->
        <label for="username">Username</label>
        <input type="text" name="username" required>

        <!-- Email field -->
        <label for="email">Email</label>
        <input type="email" name="email" required>

        <!-- Password field -->
        <label for="password">Password</label>
        <input type="password" name="password" required>

        <!-- Submit button for form submission -->
        <input type="submit" value="Register">
    </form>
</div>

<?php get_footer(); // Include the theme footer ?>
