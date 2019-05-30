<?php get_header(); ?>

<div id="content"> 
    <?php if(have_posts()): ?> <?php while(have_posts()):  the_post();?> 
    <div class="post"> 
        <h3> <a href=" <?php the_permalink();?>"> <?php the_title(); ?> </a></h3> 
        <div id="entry"> 
            <?php  the_content();?>
            <?php comments_template();?> 
        </div>     
        <p> 
            <?php _e("Categoria "); the_category(' , '); _e("; scris de "); the_author();?> 
        </p> 
        
    </div> 
    <?php endwhile;?> 
    <?php posts_nav_link();?>
    <?php previous_post_link();?><?php next_post_link();?> 
    <?php else:?> 
    <div class="post"> 
        <p>Nu exista niciun post</p> 
    </div> 
    <?php endif; ?> 
</div> 

<?php get_siderbar(); ?>

<?php get_footer(); ?>

