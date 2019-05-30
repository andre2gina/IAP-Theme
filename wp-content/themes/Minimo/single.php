<?php get_header(); ?>
<?php 
	/**
	 * #hero section will be coded live with you so you 
	 * only need to look at css/hero.css file. 
	 * There you can find the styles for this section.
	 *
	 * We will create a custom WordPress query and get posts based on a tag/category 
	 * called featured_post.
	 */
?>
<section id="hero" class="hero">
	<div class="hero-item">
		<div class="hero-content container">
			<div class="hero-avatar">
				<?php echo get_avatar('roscabgdn@gmail.com'); ?>
			</div>
			<div class="hero-title">
				<?php the_title(); ?>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 content-area">
				<?php
					// Start the loop.
					while ( have_posts() ) : the_post(); 
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_content(); ?>
				</article>
				<?php
					endwhile; 
				?>
			</div>
			
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>