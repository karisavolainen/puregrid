<?php

/* Create Proper WordPress Titles */
add_theme_support( 'title-tag' );

/* Main navigation */
function register_my_menu() {
  register_nav_menu('nav-menu',__( 'Navigation Menu' ));
}
add_action( 'init', 'register_my_menu' );

/* Use Google fonts */
function google_fonts() {
				wp_register_style( 'WorkSans', '//fonts.googleapis.com/css?family=Work+Sans' );
				wp_enqueue_style( 'WorkSans' );
		}
add_action( 'wp_print_styles', 'google_fonts' );

/* Enqueue Styles and Scripts */
 function custom_scripts() {
	wp_enqueue_style( 'puregrid', get_template_directory_uri() . '/css/puregrid.css' );
}

add_action( 'wp_enqueue_scripts', 'custom_scripts' );

/* Add settings page for footer */
if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
                        'page_title'    => 'Footer',
                        'menu_title'    => 'Footer',
                        'menu_slug'     => 'tfh-footer',
                        'capability'    => 'publish_pages',
                        'redirect'              => false
                ));
}
