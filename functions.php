<?php

/* Create Proper WordPress Titles */
add_theme_support( 'title-tag' );
/* Support featured images */
add_theme_support( 'post-thumbnails' );

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
	wp_enqueue_style( 'puregrid', get_template_directory_uri() . '/css/main.css' );
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

/* Disable Emoji Mess */
function disable_wp_emojicons() {
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
	add_filter( 'emoji_svg_url', '__return_false' );
}
add_action( 'init', 'disable_wp_emojicons' );
function disable_emojicons_tinymce( $plugins ) {
	return is_array( $plugins ) ? array_diff( $plugins, array( 'wpemoji' ) ) : array();
}
