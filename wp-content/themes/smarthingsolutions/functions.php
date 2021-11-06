<?php 

// Stylesheet

function load_stylesheet(){
	wp_register_style('bootstrap_min', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), 1, 'all');
	wp_enqueue_style( 'bootstrap_min' );
	
	wp_register_style('font_awesome_min', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), 1,'all');
	wp_enqueue_style( 'font_awesome_min' );
	
	wp_register_style('slicknav_min', get_template_directory_uri().'/assets/css/slicknav.min.css', array(), 1, 'all');
	wp_enqueue_style( 'slicknav_min' );
	
	wp_register_style('cubeportfolio', get_template_directory_uri().'/assets/css/cubeportfolio.min.css', array(), 1,'all');
	wp_enqueue_style( 'cubeportfolio' );
	
	wp_register_style('magnific_popup', get_template_directory_uri().'/assets/css/magnific-popup.min.css', array(), 1,'all');
	wp_enqueue_style( 'magnific_popup' );	

	wp_register_style('fancybox_min', get_template_directory_uri().'/assets/css/jquery.fancybox.min.css', array(), 1,'all');
	wp_enqueue_style( 'fancybox_min' );
	
	wp_register_style('niceselect', get_template_directory_uri().'/assets/css/niceselect.css', array(), 1,'all');
	wp_enqueue_style( 'niceselect' );
	
	wp_register_style('owltheme', get_template_directory_uri().'/assets/css/owl.theme.default.css', array(), 1, 'all');
	wp_enqueue_style( 'owltheme' );
	
	wp_register_style('owl_carousel_min', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), 1,'all');
	wp_enqueue_style( 'owl_carousel_min' );
	
	wp_register_style('slickslider_min', get_template_directory_uri().'/assets/css/slickslider.min.css', array(), 1,'all');
	wp_enqueue_style( 'slickslider_min' );
	
	wp_register_style('animate_min', get_template_directory_uri().'/assets/css/animate.min.css', array(), 1, 'all');
	wp_enqueue_style( 'animate_min' );
	
	wp_register_style('reset', get_template_directory_uri().'/assets/css/reset.css', array(), 1,'all');
	wp_enqueue_style( 'reset' );
	
	wp_register_style('style', get_template_directory_uri().'/style.css', array(), 1, 'all');
	wp_enqueue_style( 'style' );
	
	wp_register_style('responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), 1,'all');
	wp_enqueue_style( 'responsive' );
	
	wp_register_style('color', get_template_directory_uri().'/assets/css/color/color1.css', array(), 1,'all');
	wp_enqueue_style( 'color' );	

}
add_action( 'wp_enqueue_scripts', 'load_stylesheet' );
 
// Js Scripts

function load_js(){
	wp_register_script('jquery_min', get_template_directory_uri().'/assets/js/jquery.min.js', array(),1,1,1);
	wp_enqueue_script( 'jquery_min' );
	
	wp_register_script('jquery_migrate', get_template_directory_uri().'/assets/js/jquery-migrate.min.js', array(),1,1,1);
	wp_enqueue_script( 'jquery_migrate' );
	
	wp_register_script('popper_min', get_template_directory_uri().'/assets/js/popper.min.js', array(),1,1,1);
	wp_enqueue_script( 'popper_min' );
	
	wp_register_script('bootstrap_min', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(),1,1,1);
	wp_enqueue_script( 'bootstrap_min' );	

	wp_register_script('colors', get_template_directory_uri().'/assets/js/colors.js', array(),1,1,1);
	wp_enqueue_script( 'colors' );
	
	wp_register_script('modernizr_min', get_template_directory_uri().'/assets/js/modernizr.min.js', array(),1,1,1);
	wp_enqueue_script( 'modernizr_min' );
	
	wp_register_script('niceselect', get_template_directory_uri().'/assets/js/niceselect.js', array(),1,1,1);
	wp_enqueue_script( 'niceselect' );
	
	wp_register_script('tilt_jquery_min', get_template_directory_uri().'/assets/js/tilt.jquery.min.js', array(),1,1,1);
	wp_enqueue_script( 'tilt_jquery_min' );	
	
	wp_register_script('fancybox_min', get_template_directory_uri().'/assets/js/jquery.fancybox.min.js', array(),1,1,1);
	wp_enqueue_script( 'fancybox_min' );

	wp_register_script('jquery_nav', get_template_directory_uri().'/assets/js/jquery.nav.js', array(),1,1,1);
	wp_enqueue_script( 'jquery_nav' );	
	
	wp_register_script('owl_carousel_min', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array(),1,1,1);
	wp_enqueue_script( 'owl_carousel_min' );
	
	wp_register_script('slickslider_min', get_template_directory_uri().'/assets/js/slickslider.min.js', array(),1,1,1);
	wp_enqueue_script( 'slickslider_min' );
	
	wp_register_script('cubeportfolio_min', get_template_directory_uri().'/assets/js/cubeportfolio.min.js', array(),1,1,1);
	wp_enqueue_script( 'cubeportfolio_min' );
	
	wp_register_script('slicknav_min', get_template_directory_uri().'/assets/js/jquery.slicknav.min.js', array(),1,1,1);
	wp_enqueue_script( 'slicknav_min' );
	
	wp_register_script('stellar_min', get_template_directory_uri().'/assets/js/jquery.stellar.min.js', array(),1,1,1);
	wp_enqueue_script( 'stellar_min' );	
	
	wp_register_script('magnific_popup_min', get_template_directory_uri().'/assets/js/magnific-popup.min.js', array(),1,1,1);
	wp_enqueue_script( 'magnific_popup_min' );
	
	wp_register_script('wow_min', get_template_directory_uri().'/assets/js/wow.min.js', array(),1,1,1);
	wp_enqueue_script( 'wow_min' );
	
	wp_register_script('jquery_counterup_min', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array(),1,1,1);
	wp_enqueue_script( 'jquery_counterup_min' );

	wp_register_script('waypoints_min', get_template_directory_uri().'/assets/js/waypoints.min.js', array(),1,1,1);
	wp_enqueue_script( 'waypoints_min' );

	wp_register_script('easing_min', get_template_directory_uri().'/assets/js/easing.min.js', array(),1,1,1);
	wp_enqueue_script( 'easing_min' );

	wp_register_script('main_min', get_template_directory_uri().'/assets/js/main.js', array(),1,1,1);
	wp_enqueue_script( 'main_min' );
	
}
add_action( 'wp_enqueue_scripts', 'load_js' );

// Post Thumbnails
add_theme_support('post-thumbnails');

// Top Menu Bar
add_theme_support('menus');
register_nav_menus(
	array('top_menu'=>'Header Menu')
);

// Widgets
function get_widgets(){
	// Footer Area 1
	register_sidebar(array(
		"name"=>_('Footer Area 1'),
		"id"=>'footer_area1',
		'before_widget'=>'<p>',
		'after_widget'=>'</p>',
		'before_title'=>'<h2>',
		'after_title'=>'</h2>'		 
	));

	// Footer Area 2
	register_sidebar(array(
		"name"=>_('Footer Area 2'),
		"id"=>'footer_area2',
		'before_widget'=>'<p>',
		'after_widget'=>'</p>',
		'before_title'=>'<h2>',
		'after_title'=>'</h2>'			 
	));

	// Footer Area 3
	register_sidebar(array(
		"name"=>_('Footer Area 3'),
		"id"=>'footer_area3',
		'before_widget'=>'<p>',
		'after_widget'=>'</p>',
		'before_title'=>'<h2>',
		'after_title'=>'</h2>' 
	));

	// Footer Area 4
	register_sidebar(array(
		"name"=>_('Footer Area 4'),
		"id"=>'footer_area4',
		'before_widget'=>'<p>',
		'after_widget'=>'</p>',
		'before_title'=>'<h2>',
		'after_title'=>'</h2>' 
	));			
}
add_action('widgets_init','get_widgets');

?>