<?php
/**
 * Archive Template for Tour Guides
 * File: archive-tour_guides.php
 * Purpose: Lists all tour guides with key information like title, specialty, and languages spoken.
 */

// Prevent direct access.
if (!defined('ABSPATH')) {
    exit;
}

// Include the header.
get_header();
?>

<div class="tour-guides-archive">

    <!-- Page Header -->
    <header class="page-header">
        <h1 class="page-title"><?php post_type_archive_title(); ?></h1>
    </header>

