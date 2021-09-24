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

//
add_action('init', 'service_custom_post_type');
function service_custom_post_type(){

	register_post_type('service', array(
		'labels'             => array(
			'name'               => 'service', 
			'singular_name'      => 'Услуги', 
			'add_new'            => 'Добавить',
			'add_new_item'       => 'Добавить новую',
			'edit_item'          => 'Редактировать услугу',
			'new_item'           => 'Новая услуга',
			'view_item'          => 'Просмотр',
			'search_items'       => 'Search',
			'not_found'          =>  'not found',
			'not_found_in_trash' => 'not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Услуги'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 15,
        'menu_icon'          => 'dashicons-welcome-add-page',
	    'supports'           => array('title','editor','thumbnail','excerpt','custom-fields')
	
		) );

}
//gallery post type
add_action('init', 'gallery_custom_post_type');
function gallery_custom_post_type(){

	register_post_type('gallery', array(
		'labels'             => array(
			'name'               => 'gallery', 
			'singular_name'      => 'Галерея', 
			'add_new'            => 'Добавить',
			'add_new_item'       => 'Добавить новый',
			'edit_item'          => 'Редактировать',
			'new_item'           => 'Новый',
			'view_item'          => 'Просмотр',
			'search_items'       => 'Search gallery',
			'not_found'          =>  'gallery not found',
			'not_found_in_trash' => 'not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Галерея'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 15,
        'menu_icon'          => 'dashicons-welcome-add-page',
		'supports'           => array('title','editor','thumbnail')
	
		) );

}
//silcon post type
add_action('init', 'silcon_custom_post_type');
function silcon_custom_post_type(){

	register_post_type('silcon', array(
		'labels'             => array(
			'name'               => 'silcon', 
			'singular_name'      => 'Потолок', 
			'add_new'            => 'Добавить',
			'add_new_item'       => 'Добавить новый',
			'edit_item'          => 'Редактировать',
			'new_item'           => 'Новый',
			'view_item'          => 'Просмотр',
			'search_items'       => 'Search gallery',
			'not_found'          =>  'gallery not found',
			'not_found_in_trash' => 'not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Виды потолков '

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 15,
        'menu_icon'          => 'dashicons-welcome-add-page',
		'supports'           => array('title','editor','thumbnail')
	
		) );

}
//FAQ post type
add_action('init', 'faq_custom_post_type');
function faq_custom_post_type(){

	register_post_type('faq', array(
		'labels'             => array(
			'name'               => 'faq', 
			'singular_name'      => 'Вопрос', 
			'add_new'            => 'Добавить',
			'add_new_item'       => 'Добавить новый',
			'edit_item'          => 'Редактировать',
			'new_item'           => 'Новый',
			'view_item'          => 'Просмотр',
			'search_items'       => 'Search gallery',
			'not_found'          =>  'gallery not found',
			'not_found_in_trash' => 'not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Вопросы'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 15,
        'menu_icon'          => 'dashicons-welcome-add-page',
		'supports'           => array('title','thumbnail')
	
		) );

}

