<?php 

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );

function base_nav_init() {
	register_nav_menus( array(
		'menu-initial' => 'Primary Menu',
	) );
}
add_action( 'init', 'base_nav_init' );

function base_scripts() {
	wp_enqueue_style( 'base-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_script( 'base-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js' );
	wp_enqueue_style( 'base-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'base_scripts' );

?>