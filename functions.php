<?php
/*
 * Theme Functions
 *
 * @package onsite
 */

function onsite_enqueue_scripts(): void {
	// register styles
	wp_register_style('onsite_stylesheet', get_stylesheet_uri());
	wp_register_style('bootstrap_css', get_template_directory_uri() . '/assets/src/bootstrap/css/bootstrap.min.css');

	// register scripts
	wp_register_script('main_js', get_template_directory_uri() . '/assets/main.js', false, false, true);
	wp_register_script('bootstrap_js', get_template_directory_uri() . '/assets/src/bootstrap/js/bootstrap.min.js', false, false, true);

	// enqueue styles
	wp_enqueue_style('onsite_stylesheet');
	wp_enqueue_style('bootstrap_css');

	// enqueue scripts
	wp_enqueue_script('main_js');
	wp_enqueue_script('bootstrap_js');
}

add_action('wp_enqueue_scripts', 'onsite_enqueue_scripts');
