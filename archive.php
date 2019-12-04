<?php get_header(); ?>

<div class="page">

	<?php if (have_posts()) { 
		while (have_posts()) { the_post(); ?>

	<h3 class="font-script heading post"><?php the_title(); ?></h3>

	<p><?php the_content(); ?></p>
	
	<?php 
		}
	}
	else {
		echo "<p>No content found</p>";
	} ?>

</div>

<?php get_footer(); ?>





