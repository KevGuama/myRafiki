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