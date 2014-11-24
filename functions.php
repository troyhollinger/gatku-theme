<?php 

//Load theme CSS
function theme_styles() {
	wp_enqueue_style('owl-css' , get_template_directory_uri() . '/owl-carousel/owl.carousel.css');
	wp_enqueue_style('lightbox-css' , get_template_directory_uri() . '/lightbox.css');
	wp_enqueue_style('mmenu-css' , get_template_directory_uri() . '/jquery.mmenu.css');
	wp_enqueue_style('skippr-css' , get_template_directory_uri() . '/css/jquery.skippr.css');
	wp_enqueue_style('googlefonts' , "http://fonts.googleapis.com/css?family=Raleway:100");
	wp_enqueue_style('main' , get_template_directory_uri() . '/style.css');

	if(is_page('media')) {
		wp_enqueue_style('media-css' , get_template_directory_uri() . '/css/media.css');
	}

	if (is_page('apparel')) {
		wp_enqueue_style('apparel' , get_template_directory_uri() . '/css/apparel.css');
	}

}
//Load theme JS
function theme_js() {
	wp_enqueue_script('yellow', get_template_directory_uri() . '/jquery.js', array(), '', true );
	wp_enqueue_script('windows', get_template_directory_uri() . '/jquery.windows.js', array('jquery'), '', true );
	wp_enqueue_script('waypoints', get_template_directory_uri() . '/waypoints.js', array('jquery'), '', true );
	wp_enqueue_script('owl', get_template_directory_uri() . '/owl-carousel/owl.carousel.js', array('jquery'), '', true );
	wp_enqueue_script('lightbox-js', get_template_directory_uri() . '/lightbox-2.6.min.js', array('jquery'), '', true );
	wp_enqueue_script('mmenu', get_template_directory_uri() . '/jquery.mmenu.min.js', array('jquery'), '', true );

	if(is_page('apparel')) {

		wp_enqueue_script('skippr-js', get_template_directory_uri() . '/js/jquery.skippr.min.js', array('jquery'), '', true );
		wp_enqueue_script('apparel-js', get_template_directory_uri() . '/js/apparel.js', array('jquery'), '', true );

	}
	
	wp_enqueue_script('theme_js', get_template_directory_uri() . '/script.js', array('jquery'), '', true );
}

add_action('wp_enqueue_scripts', 'theme_js');
add_action('wp_enqueue_scripts', 'theme_styles'); 

// add ie conditional html5 shim to header
function add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');

function add_ie_conditional_stylesheets() {
	echo '<!--[if lte IE 8]>';
	echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/ie.css" />';
	echo '<![endif]-->';
}
add_action('wp_head' , 'add_ie_conditional_stylesheets');

//Allow eshop widgets to display on custom post type UI
function mycustomtype($array){
$array[]='products';
return $array;
};

function mycustomtype2($array){
$array[]='poles';
return $array;
};
function mycustomtype3($array){
$array[]='extras';
return $array;
};
function mycustomtype4($array){
$array[]='shrinker';
return $array;
};

function mycustomtype5($array){
	$array[]='apparel';
	return $array;
};

add_filter('eshop_post_types','mycustomtype');
add_filter('eshop_post_types','mycustomtype2');
add_filter('eshop_post_types','mycustomtype3');
add_filter('eshop_post_types','mycustomtype4');
add_filter('eshop_post_types','mycustomtype5');


add_theme_support( 'post-thumbnails' );

// 2014-01-09:
// Enable HTML formatted email (for eShop primarily)
// Jeremy Edmiston @ipixel8
add_filter('wp_mail_content_type',create_function('', 'return "text/html"; '));

?>