<?php
/*
 * Theme Functions
 *
 * @package onsite
 */

function onsite_enqueue_scripts(): void {
	wp_register_style('onsite_stylesheet', get_stylesheet_uri());
	wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', false, false, true);


	wp_enqueue_style('onsite_stylesheet');
	wp_enqueue_script('main-js');
}

add_action('wp_enqueue_scripts', 'onsite_enqueue_scripts');