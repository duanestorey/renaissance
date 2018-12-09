<?php

namespace Renaissance;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_scripts' );
add_action( 'after_setup_theme', __NAMESPACE__ . '\\setup_theme' );

function enqueue_scripts() {
	wp_enqueue_style( 'renaissance', get_template_directory_uri() . '/dist/css/theme.css', array(), time() );
}	

function setup_theme() {
	// Add theme support
	add_theme_support( 'html5' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-logo' );
}