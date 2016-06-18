<?php
	
function sierra_script_enqueue() {
	
//css
wp_enqueue_style('bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css", array(), '3.3.6', 'all');
wp_enqueue_style('customstyle', get_template_directory_uri() . "/css/sierra.css", array(), '1.0.0', 'all');

//js
wp_enqueue_script('jquery');
wp_enqueue_script('bootstrapjs', get_template_directory_uri() . "/js/bootstrap.min.js", array(), '3.3.6', true);
wp_enqueue_script('customjs', get_template_directory_uri() . "/js/sierra.js", array(), '1.0.0', true);
	
}

add_action( 'wp_enqueue_scripts', 'sierra_script_enqueue');

function sierra_theme_setup() {
	
	add_theme_support('menus');
	register_nav_menu('primary', 'primary header navigation');
	register_nav_menu('secondary', 'footer navigation');
}

add_action('init', 'sierra_theme_setup');

add_theme_support ('custom-background');
add_theme_support ('custom-header');
add_theme_support ('post-thumbnails');
add_theme_support ('post-formats',array('aside','image','video'));

function sierra_widget_setup() {
	
	register_sidebar(
	array(
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
			)
	);
}
add_action('widgets_init','sierra_widget_setup');