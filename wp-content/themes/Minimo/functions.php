<?php 
if ( ! function_exists( 'iap_setup' ) ) :
	function iap_setup() {
		/**
		 * You can find the add_theme_support documentation here: 
		 * https://developer.wordpress.org/reference/functions/add_theme_support/
		 */
		// add support for featured image
		add_theme_support( 'post-thumbnails' );
		/**
		 * Create image sizes based on our design
		 */
		add_image_size( 'featured-image', 220, 180 ); 
		add_image_size( 'featured-image-small', 380, 255, true ); 
		add_image_size( 'featured-image-sticky', 1200, 400, true ); 
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 *
		 */
		add_theme_support( 'title-tag' );
		/**
		 * You can find the register_nav_menus documentation here: 
		 * https://developer.wordpress.org/reference/functions/register_nav_menus/
		 *
		 * This theme uses wp_nav_menu() in two locations.
		 */
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'iaptheme' ),
				'secondary'  => __( 'Secondary Menu', 'iaptheme' ),
			)
		);
	}
/**
 * The after_setup_theme action documentation 
 * https://codex.wordpress.org/Plugin_API/Action_Reference/after_setup_theme
 */
add_action( 'after_setup_theme', 'iap_setup' );
endif; // iap_setup
/**
 * Enqueues scripts and styles.
 *
 * Documentation for enqueuing styles and scripts can be found in the links below 
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 */
if ( ! function_exists( 'iap_scripts' ) ) :
	function iap_scripts() {
		
		wp_enqueue_style( 'pt_serif_font', 'https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i', array(), false, 'all' );
		wp_enqueue_style( 'bootstrap-grid', get_stylesheet_directory_uri() . '/css/bootstrap-grid.css', array(), false, 'all' );
		wp_enqueue_style( 'main-style', get_stylesheet_uri() , array(), false, 'all' );
	}
	add_action( 'wp_enqueue_scripts', 'iap_scripts' );
endif;
/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 */
function iap_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'iaptheme' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'iaptheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	
}
add_action( 'widgets_init', 'iap_widgets_init' );