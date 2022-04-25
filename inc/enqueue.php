<?php

/**
 * Enqueue frontend style sheets
 */
function dtd_child_enqueue_styles() {

	wp_enqueue_style( 'dtd-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime( get_stylesheet_directory() . '/style.css' ), 'all' );
}

add_action( 'wp_enqueue_scripts', 'dtd_child_enqueue_styles' );
