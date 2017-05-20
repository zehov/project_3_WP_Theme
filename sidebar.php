<?php 
   if (!function_exists('dynamic_sidebar')||!dynamic_sidebar('Foobar 1')):
?>

        	<div class="sb_box">
            	<h3>Categories</h3>
                <ul class="sb_menu">
                    <li><a href="#">Donec tempor dapibus</a></li>
                    <li><a href="#">Etiam tempus quam odio</a></li>
                    <li><a href="#">Nullam ornare vulputate</a></li>
                    <li><a href="#">Pellentesque eget magna</a></li>
                    <li><a href="#">Vestibulum erat erat</a></li>
                </ul>
			</div>
            <div class="sb_box">
            	<h3>Twitter</h3>
            	<ul class="twitter_post">
          			<li>Suspendisse at scelerisque urna. Aenean tincidunt massa in tellus varius ultricies. <a href="#">http://bit.ly/13IwZO</a></li>
                    <li>Proin dignissim, diam nec <a href="#">@tooplate</a> enim lorem tempus orci, ac imperdiet ante purus in justo.</li>
                    <li>Fusce cursus consectetur ultricies <a href="#">#freetemplate</a> uis nisl lectus, mattis ut elementum id, fermentum sed erat. </li>
              	</ul>
          	</div>
        	
   
   <?php 
   endif;

?>
<?php
if (!function_exists('dynamic_sidebar')||!dynamic_sidebar('Foobar 2')):?>
<div class="hr_divider"></div>

<?php 
   endif;
?>