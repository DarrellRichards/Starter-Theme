<?php 
	// Added Featured Image Support
	add_theme_support( 'post-thumbnails' ); 


	// Added Menu To Starter-Theme
	add_filter('timber_context', 'add_to_context');
		function add_to_context($data){
    	$data['menu'] = new TimberMenu();
    	return $data;
	}

	register_nav_menu( 'primary', __( 'Main Menu') );
?>