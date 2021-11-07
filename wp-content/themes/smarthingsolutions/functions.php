<?php 

/*****************************************
 * StyleSheet *
 *****************************************/

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
 

/*****************************************
 * Js Scripts *
 *****************************************/

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


/*****************************************
 * Post Thumbnails *
 *****************************************/

add_theme_support('post-thumbnails');


/*****************************************
 * Header Menu *
 *****************************************/

add_theme_support('menus');
register_nav_menus(
	array('top_menu'=>'Header Menu')
);

/*****************************************
 * Add custom Widgets *
 *****************************************/

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


/****************************************
 * Add custom taxonomy for Portfolio *
 ****************************************/

add_action('init', 'portfolios_categories_register');

function portfolios_categories_register() {
$labels = array(
    'name'                          => 'Portfolio Categories',
    'singular_name'                 => 'Portfolio Category',
    'search_items'                  => 'Search Portfolio Categories',
    'popular_items'                 => 'Popular Portfolio Categories',
    'all_items'                     => 'All Portfolio Categories',
    'parent_item'                   => 'Parent Portfolio Category',
    'edit_item'                     => 'Edit Portfolio Category',
    'update_item'                   => 'Update Portfolio Category',
    'add_new_item'                  => 'Add New Portfolio Category',
    'new_item_name'                 => 'New Portfolio Category',
    'separate_items_with_commas'    => 'Separate Portfolio categories with commas',
    'add_or_remove_items'           => 'Add or remove Portfolio categories',
    'choose_from_most_used'         => 'Choose from most used Portfolio categories'
    );

$args = array(
    'label'                         => 'Portfolio Categories',
    'labels'                        => $labels,
    'public'                        => true,
    'hierarchical'                  => true,
    'show_ui'                       => true,
    'show_in_nav_menus'             => true,
    'args'                          => array( 'orderby' => 'term_order' ),
    'rewrite'                       => array( 'slug' => 'portfolios', 'with_front' => true, 'hierarchical' => true ),
    'query_var'                     => true
);

register_taxonomy( 'portfolios_categories', 'portfolios', $args );
}

/*****************************************
 * Custom post-type for Portfolios *
 *****************************************/

add_action('init', 'portfolios_register');

function portfolios_register() {

    $labels = array(
        'name' => 'Portfolio',
        'singular_name' => 'Portfolio',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Portfolios',
        'edit_item' => 'Edit Portfolio',
        'new_item' => 'New Portfolio',
        'view_item' => 'View Portfolio',
        'search_items' => 'Search Portfolio',
        'not_found' =>  'Nothing found',
        'not_found_in_trash' => 'Nothing found in Trash',
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'has_archive' => true,
        'rewrite' => array( 'slug' => 'portfolios', 'with_front' => true ),
        'capability_type' => 'post',
        'menu_position' => 6,
		'menu_icon' => 'dashicons-nametag',
        'supports' => array('title', 'excerpt', 'editor','thumbnail') //here you can specify what type of inputs will be accessible in the admin area
      );

    register_post_type( 'portfolios' , $args );
}

function smartthingsolutions_customize_register($wp_customize){
     
    $wp_customize->add_section('smartthingsolutions_theme_scheme', array(
        'title'    => __('SmartThing Solutions Theme Settings', 'smartthingsolutions'),
        'description' => '',
        'priority' => 120,
    ));
  
    $wp_customize->add_setting('smartthingsolutions_phone_number_options', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
  
    $wp_customize->add_control('smartthingsolutions_phone_number', array(
        'label'      => __('Phone Number', 'smartthingsolutions'),
        'section'    => 'smartthingsolutions_theme_scheme',
        'settings'   => 'smartthingsolutions_phone_number_options',
    ));

    $wp_customize->add_setting('smartthingsolutions_email_options', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
  
    $wp_customize->add_control('smartthingsolutions_email', array(
        'label'      => __('Email', 'smartthingsolutions'),
        'section'    => 'smartthingsolutions_theme_scheme',
        'settings'   => 'smartthingsolutions_email_options',
    ));
	
    $wp_customize->add_setting('smartthingsolutions_work_time_option', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
  
    $wp_customize->add_control('smartthingsolutions_work_time', array(
        'label'      => __('Work Timigs', 'smartthingsolutions'),
        'section'    => 'smartthingsolutions_theme_scheme',
        'settings'   => 'smartthingsolutions_work_time_option',
    ));	

    $wp_customize->add_setting('smartthingsolutions_footercopyright_option', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
  
    $wp_customize->add_control('smartthingsolutions_footercopyright', array(
        'label'      => __('Footer Copyright', 'smartthingsolutions'),
        'section'    => 'smartthingsolutions_theme_scheme',
        'settings'   => 'smartthingsolutions_footercopyright_option',
    ));
	
	$wp_customize->add_setting('smartthingsolutions_headerquote_option', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
  
    $wp_customize->add_control('smartthingsolutions_headerquote', array(
        'label'      => __('Button Text', 'smartthingsolutions'),
        'section'    => 'smartthingsolutions_theme_scheme',
        'settings'   => 'smartthingsolutions_headerquote_option',
    ));
	
	$wp_customize->add_setting('smartthingsolutions_buttonurl_option', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
  
    $wp_customize->add_control('smartthingsolutions_buttonurl', array(
        'label'      => __('Button URL', 'smartthingsolutions'),
        'section'    => 'smartthingsolutions_theme_scheme',
        'settings'   => 'smartthingsolutions_buttonurl_option',
    ));
	
    $wp_customize->add_setting('smartthingsolutions_social_icons_option', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
  
    $wp_customize->add_control('smartthingsolutions_social_icons', array(
        'label'      => __('Social Icons shortcode', 'smartthingsolutions'),
        'section'    => 'smartthingsolutions_theme_scheme',
        'settings'   => 'smartthingsolutions_social_icons_option',
    ));	
}
  
add_action('customize_register', 'smartthingsolutions_customize_register');

/*****************************************
 * Website Logo *
 *****************************************/

function theme_logo() {

    // <title> tag 
    add_theme_support( 'title-tag' );  
	
    // custom-logo 
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'theme_logo');

/*****************************************
 * Breadcrumb *
 *****************************************/

function get_breadcrumb() {
    echo '<li><i class="fa fa-home"></i><a href="'.home_url().'" rel="nofollow">Home</a></li>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo "</li> &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title()."</li>";
            }
    } elseif (is_page()) {
        echo "</li>&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title()."</li>";
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

/*****************************************
 * Partner Logo ACF Option *
 *****************************************/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Partner Logo',
		'menu_title'	=> 'Partner Logo',
		'menu_slug' 	=> 'partner-logo',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'position'      => 7,
		'icon_url' 		=> 'dashicons-cover-image'
	));
}

?>