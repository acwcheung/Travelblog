</body>
<footer>
	<div class="footer">
		<div class="footer-column">
			<?php 
				$args = array(
					'theme_location' => 'footer'
				);
			?>
			
			<?php wp_nav_menu($args); ?>
		</div>

		<div class="footer-column">
			<p>Post#hastag</p>
			<?php 
				$tags = get_tags(array('get' => 'all'));
				$output = '';
				foreach ($tags as $tag) {
					$output .='<a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a>';
				}
			?>	
			<div class="tag-block"><?php echo $output; ?></div>	
		</div>

		<div class="footer-column">
			<p>Search</p>
			<div>
				<?php get_search_form(); ?>
			</div>
		</div>

		<div class="footer-column">
			<p>Contact</p>
			<a class="btn-subscribe" href="https://mailchi.mp/e06033b46bdb/backpackingamericas" target="_blank">Subscribe</a><br>
			<a href="#"><img class="media-icon" src="<?php echo get_template_directory_uri() ?>'/image/facebook.png'"/></a>
			<a href="#"><img class="media-icon" src="<?php echo get_template_directory_uri() ?>'/image/instagram.png'"/></a>
			<a href="#"><img class="media-icon" src="<?php echo get_template_directory_uri() ?>'/image/twitter.png'"/></a>
			<a href="#"><img class="media-icon" src="<?php echo get_template_directory_uri() ?>'/image/youtube.png'"/></a>
		</div>
	</div>
	
</footer>
	<?php wp_footer(); ?>
</html>


