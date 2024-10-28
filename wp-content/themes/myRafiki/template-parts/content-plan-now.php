<?php
/**
 * Template Name: Content Plan Now
 * Description: Template for the Plan Now page with dynamic content.
 * Make the Plan Now page Gutenberg-compatible .
 */
// Redirect if not logged in
if ( ! is_user_logged_in() ) {
    wp_redirect( wp_login_url() );
    exit;
}

get_header(); ?>

<div class="plan-now-container">
    <!-- Gutenberg editable section for adding blocks in Plan Now page -->
    <div class="plan-now-content">
        <?php
        // Gutenberg blocks can be added in this section
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</div>

<?php
/**
* Description: Displays dynamic location and guide information.
*/

// Fetch selected location (default to Nairobi)
$selected_location = isset($_GET['location']) ? sanitize_text_field($_GET['location']) : 'Nairobi';

// Query Pods to retrieve location details
$location_pod = pods('location', array(
    'where' => 'location_name.meta_value = "' . esc_sql($selected_location) . '"',
    'limit' => 1,
));

if ( $location_pod->total() > 0 ) {
    while ( $location_pod->fetch() ) {
        $location_name = $location_pod->display('location_name');
        $location_description = $location_pod->display('description');
        $top_attractions = $location_pod->field('top_attractions');
    }
?>

    <h1>Plan Your Trip to <?php echo esc_html( $location_name ); ?></h1>
    <p><?php echo wp_kses_post( $location_description ); ?></p>
<!-- Display Top Attractions -->
    <h2>Top Attractions in <?php echo esc_html( $location_name ); ?></h2>
    <ul>
        <?php foreach ( $top_attractions as $attraction ) : ?>
            <li><?php echo esc_html( $attraction['top_attraction'] ); ?></li>
        <?php endforeach; ?>
    </ul>


<?php get_footer(); ?>
