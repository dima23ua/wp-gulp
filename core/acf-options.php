<?php
// Prevent direct access to this file
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Check if ACF function exists before using it
if ( function_exists( 'acf_add_options_page' ) ) {
    // Add ACF options page for theme settings
    acf_add_options_page( array(
        'page_title'    => esc_html__( 'Theme General Settings', '<THEMENAME>' ),
        'menu_title'    => esc_html__( 'Theme Settings', '<THEMENAME>' ),
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_theme_options',
        'redirect'      => false
    ) );
}
?>