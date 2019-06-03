<?php

if ( ! function_exists ( 'designmyblog_setup' ) ) :
	function designmyblog_setup() {
		// add support for featured image
		add_theme_support ( 'post-thumbnails');
		add_image_size ( 'cover-image', 1063, 511);
		add_image_size ( 'post-image', 660, 495);
		add_theme_support ( 'title-tag' );
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'designmyblog'),
			)
		);
	}
	add_action( 'after_setup_theme', 'designmyblog_setup' );
endif;
if ( ! function_exists( 'designmyblog_scripts' ) ) :
	function designmyblog_scripts() {
		wp_enqueue_style('inconsolata_font', 'https://fonts.googleapis.com/css?family=Inconsolata', array(), false, 'all' );
		wp_enqueue_style( 'playfairdisplay_font', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900', array(), false, 'all' );
		wp_enqueue_style( 'ubuntu_font', 'https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i', array(), false, 'all' );
		wp_enqueue_style ( 'font_awesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), false, 'all');
		wp_enqueue_style( 'reset', get_stylesheet_directory_uri() . '/reset.css', array(), false, 'all');
		wp_enqueue_style( 'style', get_stylesheet_uri(), array(), false, 'all');
		wp_enqueue_style('style-footer', get_stylesheet_directory_uri() . '/style-footer.css', array(), false, 'all');
		wp_enqueue_style('style-header', get_stylesheet_directory_uri() . '/style-header.css', array(), false, 'all');
	add_action( 'wp_enqueue_scripts', 'designmyblog_scripts');