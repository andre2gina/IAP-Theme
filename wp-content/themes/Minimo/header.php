<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<?php wp_head(); ?>
	</head>
	<header>
		<div class="container">
			<div class="header">
			<div id="title">
				<a href="<?php the_permalink(2); ?>"><?php echo get_bloginfo( 'name' ); ?>
			</div>
		<?php 
			if ( has_nav_menu ( 'primary' ) ) :
				wp_nav_menu ( array (
					'theme_location' => 'primary',
					'container' => 'nav'
				) );
			endif;
		?>
		</div>
	</header>
	<body>