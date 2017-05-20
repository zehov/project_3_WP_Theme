<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo wp_title();?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2059 curtain store
http://www.tooplate.com/view/2059-curtain-store
-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" type="text/css"  />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/ddsmoothmenu.js">

/**********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<?php wp_head()?>
</head>
<body>

<div id="tooplate_wrapper">
	<div id="tooplate_header">
    	<div id="site_title">
        	<h1><a href="#">Curtain Store</a></h1>
        </div>
		<?php wp_nav_menu(array('theme_location'=>'header_menu',
								'container_class'=>'ddsmoothmenu',
								'container_id'=>'tooplate_menu'));?>
        
    
    	<div id="tooplate_search">
            <form action="#" method="get">
              <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
    </div>
	<div id="tooplate_main">
	<div id="tooplate_sidebar">
	<?php get_sidebar('Foobar 1');?>
	<div class="hr_divider"></div>
	<div class="sb_box">
            	<h3>Get In Touch</h3>
				<a href="#"><img src="<?php echo get_template_directory_uri();?>/images/facebook-32x32.png" title="facebook" alt="facebook" /></a>
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/flickr-32x32.png" title="flickr" alt="flickr" /></a>
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/twitter-32x32.png" title="twitter" alt="twitter" /></a>
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/youtube-32x32.png" title="youtube" alt="youtube" /></a>
            </div>
	</div>
	