<?php
/*
*Template name:My Custom Page1
*/

 get_header()?>
   

   <?php
            		if (have_posts()):
            			while (have_posts()):
            				the_post();
            	?>
				<h2><?php the_title()?></h2>
                <div><?php the_content()?></div>

                <h2>Latest Work</h2>
                <h2>Contact Information</h2>
                <div class="col_b float_l">
                    <p>Nunc scelerisque nisi quis velit condimentum eu interdum augue eleifend.  Mattis nisi a interdum. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                    <div id="contact_form">
                        <form method="post" name="contact" action="#"> 

                            <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                            <div class="cleaner h10"></div>
                                                        
                            <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                            <div class="cleaner h10"></div>
                                                
                            <label for="subject">Subject:</label> <input type="text" class="validate-subject required input_field" name="subject" id="subject"/>				               
                            <div class="cleaner h10"></div>

                                
                            <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                            <div class="cleaner h10"></div>				
                                                    
                            <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
                            <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
                            
 						</form>
                    </div> 
                </div>
                <div class="col_3 col_l float_r">
					<h5>HQ Location</h5>
					<a href="images/map_l.jpg" rel="lightbox" title="Our Location"><img src="images/map_t.jpg" alt="Our Location" class="image_frame" /></a>
                    	 <h5>Office One</h5>
            122-550 Duis lacinia dictum, <br />
            Donec lorem tortor, 10560<br />
            Quisque sed elit ut<br /><br />
            
            <strong>Phone:</strong>020-445-1440<br />

            <strong>Email:</strong> <a href="mailto:info@company.com">info@company.com</a>
            
            <div class="cleaner h20"></div>
            
                <h5>Office Two</h5>
                144-660 Nullam in augue turpis, <br />
                Aliquam condimentum, 10450<br />
                Donec interdum venenatis<br /><br />
                
                <strong>Phone:</strong>030-060-0360<br />
                <strong>Email:</strong> <a href="mailto:info@company.com">info@company.com</a>
                    
            </div>
				<h2>Testimonial</h2>
               <?php
                endwhile;
                endif;
                ?>
 <?php get_footer()?>