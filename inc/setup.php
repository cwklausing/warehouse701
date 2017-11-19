<?php
/**
 * Project setup
 */

if ( ! function_exists( painters_bld_setup ) ) {
	function painters_bld_setup() {
		// Nav menus
		register_nav_menu( 'primary', __( 'Main Menu', 'painters_bld' ) );
	
		// Add post thumbnail support.
		add_theme_support( 'post-thumbnails' );
	
		// Extra image sizes
		add_image_size( 'xl', 1200, 9999 );
		add_image_size( 'xxl', 2000, 9999 );
	
		// HTML5 support
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	
		// Title tags
		add_theme_support( 'title-tag' );
	}
	
	add_action( 'after_setup_theme', 'painters_bld_setup' );
}