<?php

/**
 * Enqueue scripts and styles.
 */
function mtTheme_scripts() {
	wp_enqueue_style('mtTheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mtTheme_scripts');

if ( ! function_exists( 'mtTheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */	
function mtTheme_setup() {
	
	// Register navigation menus
	register_nav_menus(array(
		'main' => __( 'Main Menu' ),
		'footer' => __( 'Footer Menu' ),
	));

	//add_theme_support( 'title-tag' );
	//function mtTheme_wp_title($title){
	//	return $title.' | '.get_bloginfo('name').' - '.get_bloginfo('description');
	//}
	//add_filter('wp_title', 'mtTheme_wp_title');

}
endif; // mtTheme_setup
add_action('after_setup_theme', 'mtTheme_setup');