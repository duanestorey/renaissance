<?php

namespace Renaissance;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_scripts' );
add_action( 'after_setup_theme', __NAMESPACE__ . '\\setup_theme' );
add_filter( 'excerpt_length',  __NAMESPACE__ . '\\excerpt_length', 999 );

function enqueue_scripts() {
	wp_enqueue_style( 'renaissance', get_template_directory_uri() . '/dist/css/theme.css', array(), time() );
	wp_enqueue_script( 'renaissance', get_template_directory_uri() . '/dist/js/bundle.min.js', array(), time() );
}	

function setup_theme() {
	// Add theme support
	add_theme_support( 'html5' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-logo' );

	register_nav_menu( 'main_header', __( 'Top Header Menu', 'renaissance' ) );

	add_image_size( 'renaissance-archive', 320, 200,  true );
	add_image_size( 'renaissance-featured', 1000, 400,  true );
}

function excerpt_length( $length ) {
	return 120;
}

