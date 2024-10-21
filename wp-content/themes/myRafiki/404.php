<?php
/**
 * The template for displaying 404 pages (not found) 
*/

namespace Kadence;

get_header();

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
do_action( 'kadence_single' );

get_footer();
