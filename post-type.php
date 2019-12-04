<?php

function tips_post_type() {
	register_post_type('tips-and-tricks', 
		array(
			'rewrite' => array('slug' => 'tips-and-tricks'),
			'labels' => array(
				'name' => 'Tips and Tricks',
				'singular_name' => 'Tips and Tricks',
				'add_new_item' => "Add New Post",
				'edit_item' => 'Edit Post'
			),
		'menu-icon' => 'dashicons-clipboard',
		'public' => true,
		'has_archive' => true,
		'support' => array(
			'title', 'thumbnail', 'editor', 'excerpt', 'comments'
			)
		)
	);
} 

add_action('init', 'tips_post_type');

?>
