<?php 
function wp_enqueue_theme_custom()
{
	//wp_enqueue_style('theme-child-styles', get_template_directory_uri() . '/css/theme.min.css', false, '1.0', 'all');
	//wp_enqueue_script('theme-child-script', get_template_directory_uri() . '/js/theme.min.js', array(), '1.0.0', true);	wp_enqueue_script('theme-child-script');
}
add_action('wp_enqueue_scripts', 'wp_enqueue_theme_custom');
