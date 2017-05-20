<?php 


/** 

 * Template for displaying Comments 
 */ 
?> 
	<div id="comment_section">
	<?php if ( have_comments() ) : ?>
	                     
                       
                                   <?php
	$n=0;							   
//Get only the approved comments 
$args = array(
    'status' => 'approve'
);
 
// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
 
// Comment Loop
if ( $comments ) {
    foreach ( $comments as $comment ) {$n+=1;
	$author=comment_author();
	
	

		echo'  <ol class="comments first_level">
		<li>
                            <div class="comment_box commentbox1">
                                    
                                <div class="gravatar">
                                    <img src="images/avator.png" alt="author 6" />
                                </div>
                                
                                <div class="comment_text">
                                    <div class="comment_author">'.$author.'<span class="date">'.  get_comment_date("d\/m\/Y").'</span> <span class="time">'.get_comment_time().'</span></div>';
        echo '<p>' . $comment->comment_content . '</p>';
    echo ' <div class="reply"><a href="/comments.php">Reply</a></div>	
	

                                </div>
                                <div class="cleaner"></div>
                            </div>                        
                            
                        </li>
				</ol>';
	
	
	}
} else {
    echo 'No comments found.';
}
?>
                                 
                <div class="cleaner h20"></div>    
          		<div class="pagging">
                    <ul>
                        <li><a href="#" target="_parent">Previous</a></li>
                        <li><a href="#" target="_parent">1</a></li>
                        <li><a href="#" target="_parent">2</a></li>
                        <li><a href="#" target="_parent">3</a></li>
                        <li><a href="#" target="_parent">4</a></li>
                        <li><a href="#" target="_parent">5</a></li>
                        <li><a href="#" target="_parent">6</a></li>
                        <li><a href="#" target="_parent">Next</a></li>
                    </ul>
                </div>    
                    
 </div>
                
                <div class="cleaner h20"></div>
                
                <div id="comment_form">
	
	
	
	
	
	<?php endif; // Check for have_comments(). ?>

<form action="<?php echo site_url('/wp-comments-post.php') ?>" method="post">
                    
                        <div class="form_row">
                            <label>Name (* required )</label><br />
                            <input type="text" name="name" />
                        </div>
                        
                        <div class="form_row">
                            <label>Email  (* required )</label><br />
                            <input type="text" name="email" />
                        </div>
                        
                        <div class="form_row">
                            <label>Comment</label><br />
                            <textarea  name="comment" rows="20" cols="40"></textarea>
                        </div>

                        <input type="submit" name="submit" value="Submit" class="submit_btn" />
                    </form>
			</div>

<?php comment_form();?>
