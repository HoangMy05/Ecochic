<?php
/**
 * Clothing Store Lite functions and definitions
 * @package Clothing Store Lite
 */

// Include custom functions from child theme
require get_stylesheet_directory() . '/inc/custom-functions.php';

if ( ! function_exists( 'clothing_store_lite_after_theme_support' ) ) :

	function clothing_store_lite_after_theme_support() {
		
		add_theme_support( 'automatic-feed-links' );

		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'ffffff',
			)
		);

		$GLOBALS['content_width'] = apply_filters( 'clothing_store_lite_content_width', 1140 );
		
		add_theme_support( 'post-thumbnails' );

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 270,
				'width'       => 90,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);
		
		add_theme_support( 'title-tag' );

        load_theme_textdomain( 'clothing-store-lite', get_template_directory() . '/languages' );

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		add_theme_support( 'post-formats', array(
			'video',  
			'audio',  
			'gallery',
			'quote',  
			'image',  
			'link',   
			'status', 
			'aside',  
			'chat',   
		) );
		
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );
        add_theme_support( 'woocommerce' );
		add_theme_support( 'wp-block-styles' );

		if (! defined( 'ONLINE_CLOTHING_STORE_DOCS_PRO' ) ){
		define('ONLINE_CLOTHING_STORE_DOCS_PRO',__('https://layout.omegathemes.com/steps/pro-clothing-store-lite/','clothing-store-lite'));
		}
		if (! defined( 'ONLINE_CLOTHING_STORE_BUY_NOW' ) ){
		define('ONLINE_CLOTHING_STORE_BUY_NOW',__('https://www.omegathemes.com/products/clothing-store-wordpress-theme','clothing-store-lite'));
		}
		if (! defined( 'ONLINE_CLOTHING_STORE_SUPPORT_FREE' ) ){
		define('ONLINE_CLOTHING_STORE_SUPPORT_FREE',__('https://wordpress.org/support/theme/clothing-store-lite/','clothing-store-lite'));
		}
		if (! defined( 'ONLINE_CLOTHING_STORE_REVIEW_FREE' ) ){
		define('ONLINE_CLOTHING_STORE_REVIEW_FREE',__('https://wordpress.org/support/theme/clothing-store-lite/reviews/#new-post/','clothing-store-lite'));
		}
		if (! defined( 'ONLINE_CLOTHING_STORE_DEMO_PRO' ) ){
		define('ONLINE_CLOTHING_STORE_DEMO_PRO',__('https://layout.omegathemes.com/online-clothing-store/','clothing-store-lite'));
		}
		if (! defined( 'ONLINE_CLOTHING_STORE_LITE_DOCS_PRO' ) ){
		define('ONLINE_CLOTHING_STORE_LITE_DOCS_PRO',__('https://layout.omegathemes.com/steps/free-clothing-store-lite/','clothing-store-lite'));
		}
		if (! defined( 'ONLINE_CLOTHING_STORE_BUNDLE_BUTTON' ) ){
			define('ONLINE_CLOTHING_STORE_BUNDLE_BUTTON',__('https://www.omegathemes.com/products/wp-theme-bundle','clothing-store-lite'));
		}

	}

endif;

add_action( 'after_setup_theme', 'clothing_store_lite_after_theme_support' );

/**
 * Register and Enqueue Styles.
 */
function clothing_store_lite_register_styles() {

	wp_enqueue_style( 'dashicons' );

	$clothing_store_lite_css = '';

	if ( get_header_image() ) :

		$clothing_store_lite_css .=  '
			.header-navbar{
				background-image: url('.esc_url(get_header_image()).');
				-webkit-background-size: cover !important;
				-moz-background-size: cover !important;
				-o-background-size: cover !important;
				background-size: cover !important;
			}';

	endif;

	wp_add_inline_style( 'clothing-store-lite-style', $clothing_store_lite_css );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'imagesloaded' );
    wp_enqueue_script( 'masonry' );
    wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/lib/custom/js/owl.carousel.js', array('jquery'), '', 1);
	$clothing_store_lite_parentcss = 'online-clothing-store-style';
    $clothing_store_lite_theme = wp_get_theme(); 
    wp_enqueue_style( $clothing_store_lite_parentcss, get_template_directory_uri() . '/style.css', array(), $clothing_store_lite_theme->parent()->get('Version'));
    wp_enqueue_style( 'clothing-store-lite-style', get_stylesheet_uri(), array( $clothing_store_lite_parentcss ), $clothing_store_lite_theme->get('Version'));
}

add_action( 'wp_enqueue_scripts', 'clothing_store_lite_register_styles' );

// NOTICE FUNCTION

function clothing_store_lite_admin_notice() { 
    global $pagenow;
    $theme_args = wp_get_theme();
    $meta = get_option( 'clothing_store_lite_admin_notice' );
    $name = $theme_args->get( 'Name' );
    $current_screen = get_current_screen();

    if ( ! $meta ) {
        if ( is_network_admin() ) {
            return;
        }

        if ( ! current_user_can( 'manage_options' ) ) {
            return;
        }

        if ( $current_screen->base != 'appearance_page_clothingstorelite-wizard' ) {
            ?>
            <div class="notice notice-success notice-content">
                <h2><?php esc_html_e('Welcome! Thank you for choosing Clothing Store Lite. Let’s Set Up Your Website!', 'clothing-store-lite') ?> </h2>
                <p><?php esc_html_e('Before you dive into customization, let’s go through a quick setup process to ensure everything runs smoothly. Click below to start setting up your website in minutes!', 'clothing-store-lite') ?> </p>
                <div class="info-link">
                    <a href="<?php echo esc_url( admin_url( 'themes.php?page=clothingstorelite-wizard' ) ); ?>"><?php esc_html_e('Get Started with Clothing Store Lite', 'clothing-store-lite'); ?></a>
                </div>
                <p class="dismiss-link"><strong><a href="?clothing_store_lite_admin_notice=1"><?php esc_html_e( 'Dismiss', 'clothing-store-lite' ); ?></a></strong></p>
            </div>
            <?php
        }
    }
}
add_action( 'admin_notices', 'clothing_store_lite_admin_notice' );

if ( ! function_exists( 'clothing_store_lite_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
 */
function clothing_store_lite_update_admin_notice() {
    if ( isset( $_GET['clothing_store_lite_admin_notice'] ) && $_GET['clothing_store_lite_admin_notice'] == '1' ) {
        update_option( 'clothing_store_lite_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'clothing_store_lite_update_admin_notice' );

function clothing_store_lite_remove_my_action() {
    remove_action( 'admin_notices', 'online_clothing_store_admin_notice' );
}
add_action( 'after_setup_theme', 'clothing_store_lite_remove_my_action');

function clothing_store_lite_remove_parent_theme_hooks() {
    remove_action('init', 'clothing_store_lite_remove_my_action');
}
add_action('after_setup_theme', 'clothing_store_lite_remove_parent_theme_hooks', 20);