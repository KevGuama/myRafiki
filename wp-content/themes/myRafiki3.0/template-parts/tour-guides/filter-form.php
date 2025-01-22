?php
// Prevent direct access.
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="tour-guides-filters">
    <form id="tour-guides-filter-form" method="GET" action="">
        <!-- Search Bar -->
        <input
            type="text"
            name="search_query"
            placeholder="Search Tour Guides"
            value="<?php echo isset($_GET['search_query']) ? esc_attr($_GET['search_query']) : ''; ?>"
        />

<!-- Specialty Dropdown -->
        <select name="filter_specialty">
            <option value="">Select Specialty</option>
            <option value="hiking" <?php selected($_GET['filter_specialty'] ?? '', 'hiking'); ?>>Hiking</option>
            <option value="safari" <?php selected($_GET['filter_specialty'] ?? '', 'safari'); ?>>Safari</option>
            <option value="cultural-tours" <?php selected($_GET['filter_specialty'] ?? '', 'cultural-tours'); ?>>Cultural Tours</option>
        </select>