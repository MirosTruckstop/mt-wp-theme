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