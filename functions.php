<?php

add_action('wp_enqueue_scripts', 'mtTheme_resources');
function mtTheme_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

// Navigation menus
register_nav_menus(array(
	'main' => __( 'Main Menu' ),
	'footer' => __( 'Footer Menu' ),
));

//add_theme_support( 'title-tag' );
function mtTheme_wp_title($title){
	if (is_page('mt')) {
		// TODO
	}
	return $title.' | '.get_bloginfo('name').' - '.get_bloginfo('description');
}
add_filter('wp_title', 'mtTheme_wp_title');