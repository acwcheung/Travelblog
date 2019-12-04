<?php get_header(); ?>

<div class="country-container">
	<h3 class="font-script sub-heading"><?php echo single_tag_title() ?></h3>
	<div class="location-container">

	<?php  

		if (have_posts()) {
			while (have_posts()) {the_post();
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
</div>