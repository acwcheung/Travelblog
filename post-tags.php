<?php   
	$post_tags = get_the_tags();
	$separator = ", ";
	$output = "";

	if ($post_tags) {
		foreach($post_tags as $tag) {
		$output .= '<a href="'. get_tag_link($tag->term_id) .'">' .$tag->name . '</a>' .$separator;
		};

	echo trim($output, $separator);
	
	};
?>