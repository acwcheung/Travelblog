<?php 

function travelblog_resources() {
	wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Dancing+Script|PT+Serif|Indie+Flower|Pacifico&display=swap');
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', NULL, 1.0, true);
}

add_action('wp_enqueue_scripts', 'travelblog_resources');

function travelblog_setup() {

	//register the header and foofter menu
	register_nav_menus(array(
		'header' => __('Header Menu'),
		'footer' => __('Footer Menu'),
	));

	//add featured image support
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'travelblog_setup');

?>