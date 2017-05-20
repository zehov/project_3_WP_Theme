<?php
/*
*Template name:Demo 1
*/


 get_header()?>
             
        
            	<?php
            		if (have_posts()):
            			while (have_posts()):
            				the_post();
            	?>
				<div id="templatemo_main">
				<div class="col_2 float_r">
                <h2><?php the_title()?></h2>
                <div><?php the_content()?></div>
                <?php
                endwhile;
                endif;
                ?>
             </div>
        </div>
        <div class="cleaner"></div>
		 <?php comment_form();?>
		<div>
	 <?php get_sidebar('Foobar 2');?>
	 </div>
   <?php get_footer()?>