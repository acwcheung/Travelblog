<?php  

		$args = array(
			'post-type' => 'post',
			'post_per_page' => 3
		);

		$blogposts = new WP_query($args);

		$address = array();
		if ($blogposts->have_posts()) {
			while ($blogposts->have_posts()){ $blogposts->the_post();
				array_push($address, get_the_ID());
			}	
		}
	?>