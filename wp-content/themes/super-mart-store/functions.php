<?php
/**
 * Super Mart Store functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Super Mart Store
 */

define( 'SUPER_MART_STORE_URL', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'super_mart_store_setup' ) ) {

	load_theme_textdomain( 'super-mart-store', get_template_directory() . '/languages' );

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function super_mart_store_setup() {

		// Add theme support
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'customize-selective-refresh-widgets' );

		require get_template_directory() .'/inc/core/main.php';
	}
}
add_action( 'after_setup_theme', 'super_mart_store_setup' );

/**
 * Enqueue scripts and styles
 */
function super_mart_store_scripts() {
	$version = wp_get_theme( 'super-mart-store' )->get( 'Version' );
	// Stylesheet
	wp_enqueue_style( 'super-mart-store-styles', get_theme_file_uri( '/style.css' ), array(), $version );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), $version, 'all' );

	wp_enqueue_style( 'owl.carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css');

	if ( file_exists( get_template_directory() . '/assets/css/theme-style.css' ) ) {
		wp_enqueue_style( 'super-mart-store-theme-style', get_template_directory_uri() . '/assets/css/theme-style.css',  array(), $version );
	}

	$deps = array( 'super-mart-store-animate' );
	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$deps[] = 'wc-blocks-vendors-style';
	}

	if (is_rtl()) {
	    wp_enqueue_style( 'rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css' );
	}

	// Scripts
	$deps = array( 'jquery' );
	wp_enqueue_script( 'animate', get_template_directory_uri() . '/assets/js/animate.min.js', $deps, $version );

	wp_enqueue_script('owl.carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), '', true );

	wp_enqueue_script( 'super-mart-store-theme', get_template_directory_uri() . '/assets/js/theme.js', array( 'jquery' ), '', true );

}
add_action( 'wp_enqueue_scripts', 'super_mart_store_scripts' );

/**
 * Add editor styles
 */
function super_mart_store_editor_style() {
    wp_enqueue_style( 'super-mart-store-editor-style', get_template_directory_uri() . '/assets/css/editor-style.css', array(), '1.0' );
}
add_action( 'enqueue_block_editor_assets', 'super_mart_store_editor_style' );

/**
 * Enqueue assets scripts for both backend and frontend
 */
function super_mart_store_block_assets()
{
    wp_enqueue_style( 'super-mart-store-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css' );
}
add_action( 'enqueue_block_assets', 'super_mart_store_block_assets' );

/**
 * Load core file
 */
require get_theme_file_path( '/inc/core/init.php' );

/**
 * Tgm
 */
require get_theme_file_path( '/inc/Tgm/tgm.php' );

/**
 * Getstart
 */

require get_template_directory() .'/inc/core/customizer-notice/super-mart-store-customizer-notify.php';

load_template( trailingslashit( get_template_directory() ) . '/inc/core/class-upgrade-pro.php' );