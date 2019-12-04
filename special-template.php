<?php  
/* 
Template Name:  No info box
Template Post Type: post, page
*/

get_header();
?>

<div class="post-sp-tips">
	<?php if (have_posts()) { the_post(); ?>
	<h3 class="font-script heading post"><?php the_title(); ?></h3>
	<p><?php the_content(); ?></p>
</div>

	<?php 
	}
	else {
		echo "<p>No content found</p>";
	} ?>

<?php get_footer(); ?>