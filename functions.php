

<?php
function my_css() {

$css =  [
'site_css' => get_template_directory_uri() . '/style.css',
'font-awsomme' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'
    ]; 

	// Load css files.
	foreach ( $css as $key => $value ) {
		wp_enqueue_style( $key, $value, false, null );
	}
 $scripts = [
			'script_js' => get_template_directory_uri() . '/script.js'
		];

	// Load scripts files.
	foreach ( $scripts as $key => $value ) {
		wp_enqueue_script( $key, $value, [], null, true );
	}
}

add_action( 'wp_enqueue_scripts', 'my_css' );

function register_my_menus(){
register_nav_menus(
    array('portfolio-menu' => __('Portfolio Menu'),
    )
);
}

add_action('init', 'register_my_menus');