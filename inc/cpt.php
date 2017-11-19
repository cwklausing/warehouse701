<?php 
/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Spaces', 'Post Type General Name', 'painters_bld' ),
        'singular_name'       => _x( 'Space', 'Post Type Singular Name', 'painters_bld' ),
        'menu_name'           => __( 'Spaces', 'painters_bld' ),
        'parent_item_colon'   => __( 'Parent Space', 'painters_bld' ),
        'all_items'           => __( 'All Spaces', 'painters_bld' ),
        'view_item'           => __( 'View Space', 'painters_bld' ),
        'add_new_item'        => __( 'Add New Space', 'painters_bld' ),
        'add_new'             => __( 'Add New', 'painters_bld' ),
        'edit_item'           => __( 'Edit Space', 'painters_bld' ),
        'update_item'         => __( 'Update Space', 'painters_bld' ),
        'search_items'        => __( 'Search Space', 'painters_bld' ),
        'not_found'           => __( 'Not Found', 'painters_bld' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'painters_bld' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'warehouse-spaces', 'painters_bld' ),
        'description'         => __( 'Space news and reviews', 'painters_bld' ),
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
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'warehouse-spaces', $args );
 
}

add_action( 'init', 'custom_post_type', 0 );