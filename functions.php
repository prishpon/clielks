<?php
//menu
add_action('after_setup_theme','theme_register_nav_menu');
function theme_register_nav_menu(){
    register_nav_menu('primary','Primary menu');
}
//enque styles
function theme_enqueue_scripts() {	
	wp_enqueue_style( 'Style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/css/style.css' );
	}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );



