<?php get_header(); ?>
<div class="country-container">
	<h3 class="font-script sub-heading">West Coast of United States, 2018 Oct 10-20</h3>
	<div class="location-container">
	<?php  

		$args = array(
			'post-type' => 'post',
			'category_name' => 'west-coast'			
		);
 	
		$blogposts = new WP_query($args);

		if ($blogposts->have_posts()) {
			while ($blogposts->have_posts()) {
				$blogposts->the_post();
			get_template_part('post-cats');			
			}
		} 
	?>
				
	</div>

	<h3 class="font-script sub-heading">National Park, United States, 2018 Oct 10-20</h3>
	<div class="location-container">
	<?php  

		$args = array(
			'post-type' => 'post',
			'category_name' => 'national-parks'
		);

		$blogposts = new WP_query($args);

		if ($blogposts->have_posts()) {
			while ($blogposts->have_posts()) {
				$blogposts->the_post();
			get_template_part('post-cats');					
			}
		}
	?>
		
	</div>

	<h3 class="font-script sub-heading">South & Mid-West, United States, 2018 Oct 10-20</h3>
	<div class="location-container">
	<?php  

		$args = array(
			'post-type' => 'post',
			'category_name' => 'south-mid-west'
		);

		$blogposts = new WP_query($args);

		if ($blogposts->have_posts()) {
			while ($blogposts->have_posts()) {
				$blogposts->the_post();
			get_template_part('post-cats');					
			}
		}
	?>
		
	</div>

	<h3 class="font-script sub-heading">New England, United States, 2018 Oct 10-20</h3>
	<div class="location-container">
	<?php  

		$args = array(
			'post-type' => 'post',
			'category_name' => 'new-england'
		);

		$blogposts = new WP_query($args);

		if ($blogposts->have_posts()) {
			while ($blogposts->have_posts()) {
				$blogposts->the_post();
			get_template_part('post-cats');					
			}
		}
	?>
		
	</div>

</div>	


<?php get_footer(); ?>

