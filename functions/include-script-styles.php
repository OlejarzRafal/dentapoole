<?php
function add_theme_assets()
{
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
	wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), '1.0.1', true);
}
add_action('wp_enqueue_scripts', 'add_theme_assets');