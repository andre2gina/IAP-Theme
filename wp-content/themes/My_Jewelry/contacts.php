<?php 
 
/* Verificăm daca fişierul comments.php a fost accesat direct din browser. Accesându-l direct din browser, nu ştim a cărui post interogăm comentariile. */
 
if(!empty($_SERVER['SCRIPT_FILENAME'])&& 'contacts.php'==basename($_SERVER['SCRIPT_FILENAME'])) 
    die('Nu accesaţi acest fişier direct din browser!'); 
 
//Verificăm să vedem dacă comentariilor sunt pentru persoane publice sau doar pentru cele logate 
 
if(post_password_required()){ 
    echo(' Lista de comentarii este destinta doar persoanelor logate! Creaţivă un cont, dacă nu aveţi. '); 
 return; } ?> 
<div id="comments"> 
    <h3><?php comments_number('No comments','1 comments','% comments');?></h3> 
    <?php if(have_comments()):?> 
    <?php wp_list_comments('avatar_size=64&type=comment');?> 
    <?php if($wp_query->max_num_pages>1):?> 
        <?php previous_comments_links();?> 
        <?php next_comments_links();?> 
    <?php endif;?> 
    <?php endif;?> 
  
    <?php if(comments_open()):?> 
    <div id="respond"> 
        <h3>Leave a response:</h3> 
 
        <form action="<?php echo get_option('siteurl');?>/wp-comments-post.php" method="post" id="commentform"> 
        <fieldset> 
            <label for="author">Name:</label> 
            <input type="text" name="author" id="author" value="<?php $comment_author; ?>"/><br/> 
 
            <label for="author">E-mail:</label> 
            <input type="text" name="email" id="email" value="<?php $comment_author_email; ?>"/><br/> 
 
            <label for="author">Website:</label> 
            <input type="text" name="url" id="uel" value="<?php $comment_author_url; ?>"/><br/> 
 
            <label for="comment">Message:</label> 
            <textarea name="comment" id="comment" rows="" cols=""></textarea><br/> 
 
            <input type="submit" class="commentsubmit" value="Submit Comment"/>    
            <?php comment_id_fields();?> 
            <?php do_action('comment_form',$post->ID); ?> 
        </fieldset> 
        </form> 
        <p class="cancel"><?php cancel_comment_reply_link('Cancel Reply'); ?></p>  
    </div> 
    <?php else:?> 
        <h3> Comments are now closed.</h3> 
    <?php endif;?> 
    </div> 