<?php 
/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Spaces', 'Post Type General Name', 'wh701' ),
        'singular_name'       => _x( 'Space', 'Post Type Singular Name', 'wh701' ),
        'menu_name'           => __( 'Spaces', 'wh701' ),
        'parent_item_colon'   => __( 'Parent Space', 'wh701' ),
        'all_items'           => __( 'All Spaces', 'wh701' ),
        'view_item'           => __( 'View Space', 'wh701' ),
        'add_new_item'        => __( 'Add New Space', 'wh701' ),
        'add_new'             => __( 'Add New', 'wh701' ),
        'edit_item'           => __( 'Edit Space', 'wh701' ),
        'update_item'         => __( 'Update Space', 'wh701' ),
        'search_items'        => __( 'Search Space', 'wh701' ),
        'not_found'           => __( 'Not Found', 'wh701' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'wh701' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'spaces', 'wh701' ),
        'description'         => __( 'Space news and reviews', 'wh701' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
        'taxonomies'          => array( 'genres' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-multisite',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'spaces', $args );
 
}

add_action( 'init', 'custom_post_type', 0 );