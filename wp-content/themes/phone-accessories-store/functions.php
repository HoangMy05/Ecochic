<?php
/**
 * Phone Accessories Store functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Phone Accessories Store
 */

if ( ! defined( 'PHONE_ACCESSORIES_STORE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'PHONE_ACCESSORIES_STORE_VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( ! function_exists( 'phone_accessories_store_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function phone_accessories_store_setup() {

		load_theme_textdomain( 'phone-accessories-store', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'align-wide' );

		add_theme_support( 'woocommerce' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}
endif;
add_action( 'after_setup_theme', 'phone_accessories_store_setup' );

function phone_accessories_store_scripts() {
    $phone_accessories_store_version_string = '1.0.0'; // Add this line

    wp_enqueue_style('phone-accessories-store-style', get_stylesheet_uri(), array() );
    wp_enqueue_script('jquery-wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'));
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css');

    //font-awesome
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/font-awesome/css/all.css', array(), '6.7.0' );
    wp_enqueue_style( 'owl.carousel-style', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), $phone_accessories_store_version_string );
    wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri(). '/assets/js/owl.carousel.js', array('jquery') ,$phone_accessories_store_version_string,true);
    
    wp_enqueue_script('phone-accessories-store-custom-scripts', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '', true);
    wp_style_add_data( 'phone-accessories-store-style', 'rtl', 'replace' );

    wp_enqueue_style(
        'slick-style',
        get_template_directory_uri() . '/assets/css/slick.css',
        array(),
        $phone_accessories_store_version_string // Using the variable after defining
    );
    wp_enqueue_script(
        'slick-scripts',
        get_template_directory_uri() . '/assets/js/slick.js',
        array('jquery'),
        $phone_accessories_store_version_string, // Using the variable after defining
        true
    );
}
add_action( 'wp_enqueue_scripts', 'phone_accessories_store_scripts' );


/**
 * Enqueue block editor styles
 */
function phone_accessories_store_enqueue_block_editor_styles() {
    wp_enqueue_style(
        'phone-accessories-store-block-editor-style', // Handle
        get_theme_file_uri( '/assets/css/block-editor.css' ), // File URI
        array(), // Dependencies
        filemtime( get_theme_file_path( '/assets/css/block-editor.css' ) ) // Version with file modification time for cache busting
    );
}
add_action( 'enqueue_block_editor_assets', 'phone_accessories_store_enqueue_block_editor_styles' );


function phone_accessories_store_init_setup() {
    
    /**
     * Section Pro
     */
    require get_template_directory() . '/inc/section-pro/customizer.php';

	// Add block patterns
	require get_template_directory() . '/inc/block-patterns.php';
	
	// TGM
	require_once get_template_directory() . '/inc/tgm/tgm.php';

}
add_action( 'after_setup_theme', 'phone_accessories_store_init_setup' );


//////////////////////////////////////////////   Function for Translation Error   //////////////////////////////////////////////////////
function phone_accessories_store_enqueue_function() {

    /**
    * GET START.
    */
    require get_template_directory() . '/getstarted/phone_accessories_store_about_page.php';

    define('PHONE_ACCESSORIES_STORE_FREE_SUPPORT',__('https://www.revolutionwp.com/products/phone-accessories-store','phone-accessories-store'));
    define('PHONE_ACCESSORIES_STORE_PRO_SUPPORT',__('https://www.revolutionwp.com/support/revolution-wp/','phone-accessories-store'));
    define('PHONE_ACCESSORIES_STORE_REVIEW',__('https://wordpress.org/support/theme/phone-accessories-store/reviews/','phone-accessories-store'));
    define('PHONE_ACCESSORIES_STORE_BUY_NOW',__('https://www.revolutionwp.com/products/mobile-accessories-wordpress-theme','phone-accessories-store'));
    define('PHONE_ACCESSORIES_STORE_LIVE_DEMO',__('https://demo.revolutionwp.com/phone-accessories-store-pro/','phone-accessories-store'));
    define('PHONE_ACCESSORIES_STORE_PRO_DOC',__('https://demo.revolutionwp.com/wpdocs/phone-accessories-store-pro/','phone-accessories-store'));
    define('PHONE_ACCESSORIES_STORE_LITE_DOC',__('https://demo.revolutionwp.com/wpdocs/phone-accessories-store-free/','phone-accessories-store'));
    
}
add_action( 'after_setup_theme', 'phone_accessories_store_enqueue_function' );

// Add admin notice
function phone_accessories_store_admin_notice() { 
    global $pagenow;
    $phone_accessories_store_theme_args      = wp_get_theme();
    $phone_accessories_store_meta            = get_option( 'phone_accessories_store_admin_notice' );
    $name            = $phone_accessories_store_theme_args->__get( 'Name' );
    $phone_accessories_store_current_screen  = get_current_screen();

    if( !$phone_accessories_store_meta ){
        if( is_network_admin() ){
            return;
        }

        if( ! current_user_can( 'manage_options' ) ){
            return;
        } 
        
        if( $phone_accessories_store_current_screen->base !== 'appearance_page_phone_accessories_store_guide' && 
            $phone_accessories_store_current_screen->base !== 'toplevel_page_massagewellnessretreat-demoimport' ) { ?>

            <div class="notice notice-success phone-accessories-store-welcome-notice">
                <p class="phone-accessories-store-dismiss-link">
                    <strong>
                        <a href="<?php echo esc_url( add_query_arg( 'phone_accessories_store_admin_notice', '1' ) ); ?>">
                            <?php esc_html_e( 'Dismiss', 'phone-accessories-store' ); ?>
                        </a>
                    </strong>
                </p>

                <div class="phone-accessories-store-welcome-notice-wrap">
                    <h2 class="phone-accessories-store-notice-title">
                        <span class="dashicons dashicons-admin-home"></span> 
                        <?php 
                            $phone_accessories_store_theme_name = wp_get_theme()->get( 'Name' );
                            /* translators: %s!: Theme Name. */
                            echo esc_html( sprintf( __( 'Welcome to the free theme: %s!', 'phone-accessories-store' ), $phone_accessories_store_theme_name ) );
                        ?>
                    </h2>
                    <p class="phone-accessories-store-notice-desc">
                        <?php esc_html_e( 'Get started by exploring the features of your new theme. Customize your design, add your content, and create a site that fits your vision.', 'phone-accessories-store' ); ?>
                    </p>

                   <div class="phone-accessories-store-welcome-info" style="display:flex; gap:20px; padding:30px 20px 24px 20px; margin:20px 0;">
					    <div class="phone-accessories-store-welcome-thumb" style="text-align:center; margin-bottom:20px;">
					        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/screenshot.png' ); ?>" alt="<?php esc_attr_e( 'Theme Screenshot', 'phone-accessories-store' ); ?>" style="width:200px; height:130px; border-radius:4px; box-shadow:0 0 9px #bad6ef;">
					    </div>
					    <div class="phone-accessories-store-welcome-getting-started" style="margin:0;">
					        <h3 style="margin-top:0; display:flex; align-items:center; font-size:1.35em; color:#19436c;">
					            <span class="dashicons dashicons-art" style="margin-right:9px; font-size:1.13em; color:#2c6cdf;"></span>
					            <?php esc_html_e( 'Customize Your Theme', 'phone-accessories-store' ); ?>
					        </h3>
					        <p style="margin: 13px 0 17px 0; color:#285293;">
					            <?php esc_html_e( 'Want to make it truly yours? Explore the Getting Started Guide to personalize your site to suit your needs.', 'phone-accessories-store' ); ?>
					        </p>
					        <p style="margin:0;">
					            <a class="info-link button" href="<?php echo esc_url( admin_url( 'themes.php?page=phone-accessories-store-getstart-page' ) ); ?>" style="background:#2c6cdf; color:#fff!important; border:none; border-radius:3px; padding:9px 22px; box-shadow:0 2px 4px #b7caf1; font-weight:700; text-decoration:none; transition:background 0.2s;">
					                <?php esc_html_e( 'View Getting Started Guide', 'phone-accessories-store' ); ?>
					            </a>
					        </p>
					    </div>
					</div>
                </div>
            </div>

            <?php
        }

    }
}

add_action( 'admin_notices', 'phone_accessories_store_admin_notice' );

if( ! function_exists( 'phone_accessories_store_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function phone_accessories_store_update_admin_notice(){
    if ( isset( $_GET['phone_accessories_store_admin_notice'] ) && $_GET['phone_accessories_store_admin_notice'] = '1' ) {
        update_option( 'phone_accessories_store_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'phone_accessories_store_update_admin_notice' );

add_action('after_switch_theme', 'phone_accessories_store_setup_options');
function phone_accessories_store_setup_options () {
    update_option('phone_accessories_store_admin_notice', FALSE );
}

// changelog
function phone_accessories_store_get_changelog_from_readme() {
    $phone_accessories_store_file_path = get_template_directory() . '/readme.txt'; // Adjust path if necessary

    if (file_exists($phone_accessories_store_file_path)) {
        $phone_accessories_store_content = file_get_contents($phone_accessories_store_file_path);

        // Extract changelog section
        $phone_accessories_store_changelog_start = strpos($phone_accessories_store_content, "== Changelog ==");
        $phone_accessories_store_changelog = substr($phone_accessories_store_content, $phone_accessories_store_changelog_start);

        // Split changelog into versions
        preg_match_all('/\*\s([\d\.]+)\s-\s(.+?)\n((?:\t-\s.+?\n)+)/', $phone_accessories_store_changelog, $phone_accessories_store_matches, PREG_SET_ORDER);
        
        return $phone_accessories_store_matches;
    }
    return [];
}