<?php
/**
 * Template Part: Plan Now Page Content
 *
 * This template shows content for the "Plan Now" page.
 */

// Check if user is logged in
if ( ! is_user_logged_in() ) {
    wp_redirect( wp_login_url() ); // Redirects to login if not logged in
    exit;
}