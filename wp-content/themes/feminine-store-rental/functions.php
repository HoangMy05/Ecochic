<?php

/**
 * Feminine Store Rental functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Feminine Store Rental
 */

define( 'FEMININE_STORE_RENTAL_URL', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'feminine_store_rental_setup' ) ) {

	load_theme_textdomain( 'feminine-store-rental', get_template_directory() . '/languages' );

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
	function feminine_store_rental_setup() {

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
add_action( 'after_setup_theme', 'feminine_store_rental_setup' );

/**
 * Enqueue scripts and styles
 */
function feminine_store_rental_scripts() {
	$version = wp_get_theme( 'feminine-store-rental' )->get( 'Version' );
	// Stylesheet
	wp_enqueue_style( 'feminine-store-rental-styles', get_theme_file_uri( '/style.css' ), array(), $version );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), $version, 'all' );

	wp_enqueue_style( 'owl.carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css');

	if ( file_exists( get_template_directory() . '/assets/css/theme-style.css' ) ) {
		wp_enqueue_style( 'feminine-store-rental-theme-style', get_template_directory_uri() . '/assets/css/theme-style.css',  array(), $version );
	}

	$deps = array( 'feminine-store-rental-animate' );
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

	wp_enqueue_script( 'feminine-store-rental-theme', get_template_directory_uri() . '/assets/js/theme.js', array( 'jquery' ), '', true );

}
add_action( 'wp_enqueue_scripts', 'feminine_store_rental_scripts' );

/**
 * Add editor styles
 */
function feminine_store_rental_editor_style() {
    wp_enqueue_style( 'feminine-store-rental-editor-style', get_template_directory_uri() . '/assets/css/editor-style.css', array(), '1.0' );
}
add_action( 'enqueue_block_editor_assets', 'feminine_store_rental_editor_style' );

/**
 * Enqueue assets scripts for both backend and frontend
 */
function feminine_store_rental_block_assets()
{
    wp_enqueue_style( 'feminine-store-rental-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css' );
}
add_action( 'enqueue_block_assets', 'feminine_store_rental_block_assets' );

/**
 * Load core file
 */
require get_theme_file_path( '/inc/core/init.php' );

/**
 * Tgm
 */
require get_theme_file_path( '/inc/Tgm/tgm.php' );

load_template( trailingslashit( get_template_directory() ) . '/inc/core/class-upgrade-pro.php' );