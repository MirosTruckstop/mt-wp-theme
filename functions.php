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
	
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain('mtTheme', get_template_directory() . '/languages');

	// Register navigation menus
	register_nav_menus(array(
		'primary' => __('Primary Menu', 'mtTheme'),
		'footer' => __('Footer Links Menu', 'mtTheme'),
	));

	//add_theme_support( 'title-tag' );
	//function mtTheme_wp_title($title){
	//	return $title.' | '.get_bloginfo('name').' - '.get_bloginfo('description');
	//}
	//add_filter('wp_title', 'mtTheme_wp_title');

}
endif; // mtTheme_setup
add_action('after_setup_theme', 'mtTheme_setup');