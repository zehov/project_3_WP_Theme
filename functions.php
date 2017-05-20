<?php


/*$args =array(
	'name'=>'Main Sidebar',
	'id'  =>'left_sidebar',
	);

register_sidebar($args);*/
register_sidebars(2, array('name'=>'Foobar %d'));
						
/*register_nav_menu ('header_menu', 'top site menu');*/
register_nav_menus( array(
	'header_menu' => 'top site menu',
	'footer_menu' => 'My Custom Footer Menu',
) );
?>