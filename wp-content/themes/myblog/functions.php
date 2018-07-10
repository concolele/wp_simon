<?php 
	function theme_setup(){
		register_nav_menu('top-menu','Menu chính');
		add_theme_support( 'post-thumbnails' );
	}
add_action('init','theme_setup');