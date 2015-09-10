<?php



// function theme_styles() {

// 	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/css/less/bootstrap.min.css');
// 	wp_enqueue_style('my_css', get_template_directory_uri() . '/style.css');

// }

// add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js() {

	global $wp_scripts;

	wp_register_script( 'viewport_workaround', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js', '', '', true);
	wp_register_script('html_5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);
	wp_register_script('respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);

	$wp_scripts->add_data('html_shiv', 'conditional', 'l IE 9');
	$wp_scripts->add_data('respond_js', 'conditional', 'l IE 9');

	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true );
	$wp_scripts->add_data( 'viewport_workaround', 'conditional', 'IE 10');

}

add_action('wp_enqueue_scripts', 'theme_js');

//Toggle Logged In Admin Bar//

//add_filter( 'show_admin_bar', '__return_false' );


function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu'	=>'Header Menu',
			'left-menu' => 'Left Menu',
			'right-menu' => 'Right Menu',
		)
	);
}

add_action( 'init', 'register_theme_menus' );


?>