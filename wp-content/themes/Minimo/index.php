<?php get_header(); 

	if ( have_posts() ) :
			while ( have_posts() ) : 
				the_post(); ?>
				<div class="image">
					<?php the_post_thumbnail(); ?>
				</div>
			<div class="pagina">
				<div class="category">
					<?php the_category(); ?>
				
				<div class="title-post">
					<?php the_title(); ?>
				<div class="post">
					<?php the_content(); ?>
			</div>
	<?php
		
			endwhile;
		else :
			echo 'nu avem posturi';
		endif;
	?>
	<form action="action_page.php">
		<div class="newsletter">
			<p>Sign up for our newsletter!</p>
		<div class="enter-email">
			<input type="text" placeholder="Enter a valid email adress" name="name" required>
			<input type="submit">
		</div>
	</form>
	<?php get_footer(); ?>