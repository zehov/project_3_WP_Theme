<?php
/*
*Template name:Post Page
*/

 get_header()?>
   

   <?php
            		if (have_posts()):
            			while (have_posts()):
            				the_post();
            	?>
				<div id="tooplate_content">
        		 <div class="post_box"> 
                   <h2><?php the_title()?></h2>
				   <?php $comments_count = wp_count_comments();?>
                    <div class="post_meta">
                    	Posted on <span><?php echo get_the_date(); ?></span> by <a href="#"><?php the_author(); ?> </a>, Posted in <a href="#"><?php echo get_page_template_slug(); ?></a>, <a href="#"><?php echo $comments_count->total_comments .' comments'?></a>
                    </div>
                   <div><?php the_content()?></div>
 </div>       
				
               <?php
                endwhile;
                endif;
                ?>
		<div class="cleaner h30"></div>
				<!-- start coments -->
            	<h3>Comments</h3>

	  <?php comments_template();?>
               
   
                    <h3>Leave your comment</h3>	
				
				</div>
				
				<div class="comment-form">
           
 
 </div>
 


 <?php get_footer()?>
 
 
 <!---->
 