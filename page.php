<?php get_header(); ?>

<?php    
	if(is_page('tips-tricks')) {
?>

<div class="country-container tips-container">
		
<?php  

	$args = array(
		'post-type' => 'post',
		'cat' => 36
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

<?php
	}
	else {
?>

<div class="page">

	<?php if (have_posts()) { the_post(); ?>

	<h3 class="font-script heading post"><?php the_title(); ?></h3>

	<p><?php the_content(); ?></p>

	<?php 
	}
	else {
		echo "<p>No content found</p>";
	} ?>

</div>


<?php
	}
?>

<?php get_footer(); ?>

