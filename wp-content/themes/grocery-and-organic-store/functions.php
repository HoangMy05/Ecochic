<?php
if ( ! defined( 'GROCERY_AND_ORGANIC_STORE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'GROCERY_AND_ORGANIC_STORE_VERSION', wp_get_theme()->get( 'Version' ) );
}
define( 'GROCERY_AND_ORGANIC_STORE_DEBUG', defined( 'WP_DEBUG' ) && WP_DEBUG === true );
define( 'GROCERY_AND_ORGANIC_STORE_DIR', trailingslashit( get_template_directory() ) );
define( 'GROCERY_AND_ORGANIC_STORE_URL', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'grocery_and_organic_store_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since walker_fse 1.0.0
	 *
	 * @return void
	 */
	function grocery_and_organic_store_support() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'post-thumbnails' );
		// Enqueue editor styles.
		add_editor_style( 'style.css' );
		// Removing default patterns.
		remove_theme_support( 'core-block-patterns' );
	}

endif;
add_action( 'after_setup_theme', 'grocery_and_organic_store_support' );

/*
----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'grocery_and_organic_store_styles' ) ) :
	function grocery_and_organic_store_styles() {
		// registering style for theme
		wp_enqueue_style( 'grocery-and-organic-store-style', get_stylesheet_uri(), array(), GROCERY_AND_ORGANIC_STORE_VERSION );
		wp_enqueue_style( 'grocery-and-organic-store-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css' );
		wp_enqueue_style( 'grocery-and-organic-store-aos-style', get_template_directory_uri() . '/assets/css/aos.css' );
		if ( is_rtl() ) {
			wp_enqueue_style( 'grocery-and-organic-store-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css' );
		}
		wp_enqueue_script( 'grocery-and-organic-store-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array(),GROCERY_AND_ORGANIC_STORE_VERSION, true );
		wp_enqueue_script( 'grocery-and-organic-store-scripts', get_template_directory_uri() . '/assets/js/grocery-and-organic-store-scripts.js', array(), GROCERY_AND_ORGANIC_STORE_VERSION, true );
	}
endif;

add_action( 'wp_enqueue_scripts', 'grocery_and_organic_store_styles' );

/**
 * Enqueue scripts for admin area
 */
function grocery_and_organic_store_admin_style() {
	$hello_notice_current_screen = get_current_screen();
	if ( ! empty( $_GET['page'] ) && 'about-grocery-and-organic-store' === $_GET['page'] || $hello_notice_current_screen->id === 'themes' || $hello_notice_current_screen->id === 'dashboard' ) {
		wp_enqueue_style( 'grocery-and-organic-store-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), GROCERY_AND_ORGANIC_STORE_VERSION, 'all' );
		wp_enqueue_script( 'grocery-and-organic-store-admin-scripts', get_template_directory_uri() . '/assets/js/grocery-and-organic-store-admin-scripts.js', array(), GROCERY_AND_ORGANIC_STORE_VERSION, true );
		wp_localize_script(
			'grocery-and-organic-store-admin-scripts',
			'grocery_and_organic_store_admin_localize',
			array(
				'ajax_url' => admin_url( 'admin-ajax.php' ),
				'nonce'    => wp_create_nonce( 'grocery_and_organic_store_admin_nonce' ),
			)
		);
		wp_enqueue_script( 'grocery-and-organic-store-welcome-notice', get_template_directory_uri() . '/inc/admin/js/grocery-and-organic-store-welcome-notice.js', array( 'jquery' ), GROCERY_AND_ORGANIC_STORE_VERSION, true );
		wp_localize_script(
			'grocery-and-organic-store-welcome-notice',
			'grocery_and_organic_store_localize',
			array(
				'ajax_url'     => admin_url( 'admin-ajax.php' ),
				'nonce'        => wp_create_nonce( 'grocery_and_organic_store_welcome_nonce' ),
				'redirect_url' => admin_url( 'themes.php?page=_cozy_companions' ),
			)
		);
	}
}
add_action( 'admin_enqueue_scripts', 'grocery_and_organic_store_admin_style' );



/**
 * Enqueue assets scripts for both backend and frontend
 */
function grocery_and_organic_store_block_assets() {
	wp_enqueue_style( 'grocery-and-organic-store-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css' );
}
add_action( 'enqueue_block_assets', 'grocery_and_organic_store_block_assets' );

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

function grocery_and_organic_store_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'grocery_and_organic_store_add_woocommerce_support' );
