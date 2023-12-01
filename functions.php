<?php
/**
 * Load the built js and css files
 */
function load_vue_vite_less_starter_scripts() 
	{
		wp_enqueue_script(
			'vue-vite-less-starter-js',
			get_stylesheet_directory_uri() . '/dist/src/main.js',
			array( 'jquery' ),
			filemtime( get_stylesheet_directory() . '/dist/src/main.js' ),
			true
		);

		wp_enqueue_style(
			'vue-vite-less-starter-css',
			get_stylesheet_directory_uri() . '/dist/src/style.css',
			null,
			filemtime( get_stylesheet_directory() . '/dist/src/style.css' )
		);
	}

add_action( 'wp_enqueue_scripts', 'load_vue_vite_less_starter_scripts');
