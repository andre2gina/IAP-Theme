<?php get_header();?>
 
    <div id="content"> 
        <?php if(have_posts()): ?> <?php while(have_posts()):  the_post();?> 
        <div class="post"> 
            <h3> <a href=" <?php the_permalink();?>"> <?php the_title(); ?> </a></h3> 
            <div id="entry"> 
                <?php  the_content();?> 
                <?php link_pages(‘<p>Paginile:’,'</p>’,’number’); ?>
            </div>     
             <?php edit_post_link('Editeaza');?> 
            
        </div> 
        <?php endwhile;?> 
         
        <?php else:?> 
        <div class="post"> 
            <p>Nu exista niciun post</p> 
        </div> 
        <?php endif; ?> 
    </div> 
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>