<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>  
</head>
<header>
	<h1 class="brand"><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></h1>
	<div class="container-navbar">
		<nav class="font-classic navbar">
			<?php 
				$args = array(
					'theme_location' => 'header'
				);
			?>
				
			<?php wp_nav_menu($args); ?>
		</nav>
	</div>
</header>
<body <?php body_class(); ?>>