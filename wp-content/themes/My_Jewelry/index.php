<?php get_header(); ?>

<div id="content"> 
    <?php if(have_posts()): ?> <?php while(have_posts()):  the_post();?> 
    <div class="post"> 
        <h3> <a href=" <?php the_permalink();?>"> <?php the_title(); ?> </a></h3> 
        <div id="entry"> 
            <?php  the_content();?> 
        </div>     
        <p> 
            <?php _e("Categoria "); the_category(' , '); _e("; scris de "); the_author();?> 
        </p> 
        <p> 
            <?php comments_popup_link('Niciun comentariu','1 comentariu','% comentarii');?> | <?php edit_post_link('Editeaza');?> 
        </p> 
    </div> 
    <?php endwhile;?> 
    <?php posts_nav_link();?> 
    <?php else:?> 
    <div class="post"> 
        <p>Nu exista niciun post</p> 
    </div> 
    <?php endif; ?> 
</div> 

<?php get_siderbar(); ?>

<?php get_footer(); ?>

