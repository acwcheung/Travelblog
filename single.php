<?php get_header(); ?>

<div class="container-sp">
	<div class="post-sp">
		<?php if (have_posts()) { the_post(); ?>
		<h3 id="post-title" class="font-script heading post"><?php the_title(); ?></h3>
		<p><?php the_content(); ?></p>
		
		<?php 

		$fields   =  array(
		    'author' => '<input placeholder="Name" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' />',
		    'email'  => '<input placeholder="Email" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $aria_req . $html_req  . ' />',
		);

		$args = array(
			'title_reply' => 'Share Your Thoughts',
			'fields' => $fields,
			'comment_field' => '<textarea placeholder="Your comment" id="comment" name="comment" cols="45" rows="8" aria-required="true">'.'</textarea>',
			'comment_notes_before' => '<p class="comment-notes">Your email address will not be published. All fields are required.</p>'
		);
		?>

		<div class="comment-box">
			<?php comment_form($args); ?>
		</div>	

		<?php 
		$comments_number = get_comments_number();
		if($comments_number != 0) {
		?>
		
		<div class="comments">
			<h3 class="font-script sub-heading">What others say???</h3>
			<ol>
				<?php  
				$comments = get_comments(array(
					'post_id' => $post->ID,
					'status' => 'approve'
				));
				wp_list_comments(array(
					'per_page' => 15
				), $comments);
				?>
			</ol>
			
		</div>


		<?php	
		}
		?>
	</div>

	<?php 
	}
	else {
		echo "<p>No content found</p>";
	} ?>

	<div class="sidebar">
		<h3 class="sidebar-heading">Useful Info</h3>
		<div class="container-icon-label">
			<img class="post-icon" src="<?php echo get_template_directory_uri(); ?>/image/hotel.png">
			<a href="#live">Where to Live</a>
		</div>	
		<div class="container-icon-label">
			<img class="post-icon" src="<?php echo get_template_directory_uri(); ?>/image/eat.png">
			<a href="#food">Foodie</a>
		</div>	
		<div class="container-icon-label">
			<img class="post-icon" src="<?php echo get_template_directory_uri(); ?>/image/location.png">
			<a href="#location">Place to visit</a>
		</div>
		<div class="container-icon-label">
			<img class="post-icon" src="<?php echo get_template_directory_uri(); ?>/image/bus.png">
			<a href="#bus">Direction</a>
		</div>
		<div class="container-icon-label">
			<img class="post-icon" src="<?php echo get_template_directory_uri(); ?>/image/idea.png">
			<a href="#idea">Tips and Ideas</a>
		</div>
		<div class="container-icon-label">
			<img class="post-icon" src="<?php echo get_template_directory_uri(); ?>/image/home.png">
			<a href="#top">Back to Top</a>
		</div>
		<p class="tag-name"><?php get_template_part('post-tags'); ?></p>
	</div>	
</div>

	

<?php get_footer(); ?>




