<?php get_header(); ?>
<div class="container-posts">

	<!-- select the featured posts by ID -->
	<?php $arg_posts = array(22, 117, 17) ?>
	<div class="top-post">
		<img class="top-post-image" src="<?php echo get_the_post_thumbnail_url($arg_posts[0]); ?>">
		<h3 class="font-script post-caption top-post-caption"><a class="top-post-link" href="<?php the_permalink($arg_posts[0]); ?>"><?php the_post_thumbnail_caption($arg_posts[0]); ?></a></h3>		
	</div>
	<div class="second-posts">
		<div>
			<img class="second-post-image" src="<?php echo get_the_post_thumbnail_url($arg_posts[1]); ?>">
			<h3 class="font-script post-caption second-post-caption"><a class="second-post-link" href="<?php the_permalink($arg_posts[1]); ?>"><?php the_post_thumbnail_caption($arg_posts[1]); ?></a></h3>
		</div>
		<div>
			<img class="second-post-image" src="<?php echo get_the_post_thumbnail_url($arg_posts[2]); ?>">
			<h3 class="font-script post-caption third-post-caption"><a class="second-post-link" href="<?php the_permalink($arg_posts[2]); ?>"><?php the_post_thumbnail_caption($arg_posts[2]); ?></a></h3>		
		</div>
	</div>
</div>

<?php wp_reset_query();	?>

<div>
	<h1 class="font-classic heading">Where have we been</h1>
	
	<div class="country-container">
		<h3 class="font-script sub-heading"><a href="<?php echo site_url() ?>/category/united-states">United States of America</a></h3>
		<div class="location-container">

		<?php  

			$args = array(
				'post-type' => 'post',
				'cat' => 10,
				'posts_per_page' => 6
			);

			$blogposts = new WP_query($args);

			if ($blogposts->have_posts()) {
				while ($blogposts->have_posts()) {
					$blogposts->the_post();
		?>			
		
			
			<div class="location-image">
				<a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>"></a>	
			</div>
			<div class="location-text">
				<h5 class="tag">
					<?php get_template_part('post-tags'); ?>
				</h5>
				<p><?php the_excerpt(); ?></p>
			</div>
		
						
		<?php		
				}
			}

			// echo paginate_links(); 	
		?>
				
		</div>
				
		<h3 class="font-script sub-heading"><a href="<?php echo site_url() ?>/category/peru">Peru</a></h3>
		<div class="location-container">
		
		<?php  

			$args = array(
				'post-type' => 'post',
				'cat' => 12,
				'posts_per_page' => 3
			);

			$blogposts = new WP_query($args);

			if ($blogposts->have_posts()) {
				while ($blogposts->have_posts()) {
					$blogposts->the_post();
		?>			
		
			<div class="location-image">
				<a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
			</div>
			<div class="location-text">
				<h5 class="tag">
					<?php get_template_part('post-tags'); ?> 
				</h5>
				<p><?php the_excerpt(); ?></p>
			</div>
									
		<?php		
				}
			}	
		?>
			
		</div>
		
		<h3 class="font-script sub-heading"><a href="<?php echo site_url() ?>/category/cuba">Cuba</a></h3>
		<div class="location-container">
		
		<?php  

			$args = array(
				'post-type' => 'post',
				'cat' => 11,
				'posts_per_page' => 3
			);

			$blogposts = new WP_query($args);

			if ($blogposts->have_posts()) {
				while ($blogposts->have_posts()) {
					$blogposts->the_post();
		?>			
		
			<div class="location-image">
				<a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>"></a>
			</div>
			<div class="location-text">
				<h5 class="tag">
					<?php get_template_part('post-tags'); ?> 
				</h5>
				<p><?php the_excerpt(); ?></p>
					
			</div>
						
		<?php		
				}
			}	
		?>
			
		</div>


</div>

<div>
	<h1 class="font-classic heading">Tips & Tricks</h1>
	<div class="country-container tips-container">
		
		<?php  

			$args = array(
				'post-type' => 'post',
				'cat' => 36,
				'posts_per_page' => 3
			);

			$blogposts = new WP_query($args);

			if ($blogposts->have_posts()) {
				while ($blogposts->have_posts()) {
					$blogposts->the_post();
		?>			
		
		<div class="tips-items">
			<img class="tips-image" src="<?php echo get_the_post_thumbnail_url() ?>">
			<h3><a class="font-classic sub-heading"  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		</div>
						
		<?php		
				}
			}	
		?>
			
	</div>

</div>

		
<?php get_footer(); ?>

