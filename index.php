<?php get_header()?>
   

   <?php
            		if (have_posts()):
            			while (have_posts()):
            				the_post();
            	?>
				<h2><?php the_title()?></h2>
                <div><?php the_content()?></div>
               <?php
                endwhile;
                endif;
                ?>
				 <?php comment_form();?>
 <?php get_footer()?>