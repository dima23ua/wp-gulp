<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Function to create custom post types and taxonomies
function gulpwp_cpt() {
    // Labels for the custom post type "Antique"
    $antique_post_type_labels = array(
        'name'                  => _x('Antiques', 'Post type general name', 'antiques'),
        'singular_name'         => _x('Antique', 'Post type singular name', 'antiques'),
        'menu_name'             => _x('Antiques', 'Admin Menu text', 'antiques'),
        'name_admin_bar'        => _x('Antique', 'Add New on Toolbar', 'antiques'),
        'add_new'               => __('Add New', 'antiques'),
        'add_new_item'          => __('Add New Antique', 'antiques'),
        'new_item'              => __('New Antique', 'antiques'),
        'edit_item'             => __('Edit Antique', 'antiques'),
        'view_item'             => __('View Antique', 'antiques'),
        'all_items'             => __('All Antiques', 'antiques'),
        'search_items'          => __('Search Antiques', 'antiques'),
        'parent_item_colon'     => __('Parent Antiques:', 'antiques'),
        'not_found'             => __('No Antiques found.', 'antiques'),
        'not_found_in_trash'    => __('No Antiques found in Trash.', 'antiques'),
        'featured_image'        => _x('Antique Photo', 'antiques'),
        'set_featured_image'    => _x('Set antique photo', 'antiques'),
        'remove_featured_image' => _x('Remove antique photo', 'antiques'),
        'use_featured_image'    => _x('Use as antique photo', 'antiques'),
        'archives'              => _x('Antique archives', 'antiques'),
        'insert_into_item'      => _x('Insert into Antique', 'antiques'),
        'uploaded_to_this_item' => _x('Uploaded to this antique', 'antiques'),
        'filter_items_list'     => _x('Filter Antiques list', 'antiques'),
        'items_list_navigation' => _x('Antiques list navigation', 'antiques'),
        'items_list'            => _x('Antiques list', 'antiques'),
    );

    // Arguments for the custom post type "Antique"
    $antique_post_type_args = array(
        'labels'             => $antique_post_type_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'antique'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions'),
        'show_in_rest'       => true,
    );

    // Register the custom post type "Antique"
    register_post_type('antique', $antique_post_type_args);

    // Labels for the custom taxonomy "Antique Categories"
    $antique_taxonomy_labels = array(
        'name'              => _x('Antique Categories', 'taxonomy general name', 'antiques'),
        'singular_name'     => _x('Antique Category', 'taxonomy singular name', 'antiques'),
        'search_items'      => __('Search Antique Categories', 'antiques'),
        'all_items'         => __('All Antique Categories', 'antiques'),
        'parent_item'       => __('Parent Antique Category', 'antiques'),
        'parent_item_colon' => __('Parent Antique Category:', 'antiques'),
        'edit_item'         => __('Edit Antique Category', 'antiques'),
        'update_item'       => __('Update Antique Category', 'antiques'),
        'add_new_item'      => __('Add New Antique Category', 'antiques'),
        'new_item_name'     => __('New Antique Category Name', 'antiques'),
        'menu_name'         => __('Antique Categories', 'antiques'),
    );

    // Arguments for the custom taxonomy "Antique Categories"
    $antique_taxonomy_args = array(
        'hierarchical'      => true,
        'labels'            => $antique_taxonomy_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'antiquecat'),
        'show_in_rest'      => true,
    );

    // Register the custom taxonomy "Antique Categories"
    register_taxonomy('antiquecat', array('antique'), $antique_taxonomy_args);
}

// Hook to call the function on initialization
add_action('init', 'gulpwp_cpt');
?>