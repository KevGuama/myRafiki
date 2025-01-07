<?php
// Ensure the file is not accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Add theme setup functionality.
function myrafiki3_theme_setup() {
    // Enable support for dynamic title tags.
    add_theme_support('title-tag');