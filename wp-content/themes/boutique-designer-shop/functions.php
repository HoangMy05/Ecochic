<?php
/**
 * Boutique Designer Shop functions and definitions
 *
 * @subpackage Boutique Designer Shop
 * @since 1.0
 */

// theme setup
function boutique_designer_shop_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( "align-wide" );
	add_theme_support( "wp-block-styles" );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'title-tag' );
	add_theme_support('custom-background',array(
		'default-color' => 'ffffff',
	));
	add_image_size( 'boutique-designer-shop-featured-image', 2000, 1200, true );
	add_image_size( 'boutique-designer-shop-thumbnail-avatar', 100, 100, true );

	load_theme_textdomain( 'boutique-designer-shop', get_template_directory() . '/languages' );

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'boutique-designer-shop' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio','quote',) );
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', boutique_designer_shop_fonts_url() ) );

	if ( ! defined( 'BOUTIQUE_DESIGNER_SHOP_SUPPORT' ) ) {
		define('BOUTIQUE_DESIGNER_SHOP_SUPPORT',__('https://wordpress.org/support/theme/boutique-designer-shop/','boutique-designer-shop'));
	}
	if ( ! defined( 'BOUTIQUE_DESIGNER_SHOP_REVIEW' ) ) {
		define('BOUTIQUE_DESIGNER_SHOP_REVIEW',__('https://wordpress.org/support/theme/boutique-designer-shop/reviews/','boutique-designer-shop'));
	}
	if ( ! defined( 'BOUTIQUE_DESIGNER_SHOP_LIVE_DEMO' ) ) {
	define('BOUTIQUE_DESIGNER_SHOP_LIVE_DEMO',__('https://trial.ovationthemes.com/boutique-designer-shop/','boutique-designer-shop'));
	}
	if ( ! defined( 'BOUTIQUE_DESIGNER_SHOP_BUY_PRO' ) ) {
	define('BOUTIQUE_DESIGNER_SHOP_BUY_PRO',__('https://www.ovationthemes.com/products/designer-shop-wordpress-theme','boutique-designer-shop'));
	}
	if ( ! defined( 'BOUTIQUE_DESIGNER_SHOP_PRO_DOC' ) ) {
	define('BOUTIQUE_DESIGNER_SHOP_PRO_DOC',__('https://trial.ovationthemes.com/docs/ot-boutique-designer-shop-pro-doc/','boutique-designer-shop'));
	}
	if ( ! defined( 'BOUTIQUE_DESIGNER_SHOP_FREE_DOC' ) ) {
	define('BOUTIQUE_DESIGNER_SHOP_FREE_DOC',__('https://trial.ovationthemes.com/docs/ot-boutique-designer-shop-free-doc/','boutique-designer-shop'));
	}
	if ( ! defined( 'BOUTIQUE_DESIGNER_SHOP_THEME_NAME' ) ) {
	define('BOUTIQUE_DESIGNER_SHOP_THEME_NAME',__('Premium Designer Shop Theme','boutique-designer-shop'));
	}
	if ( ! defined( 'BOUTIQUE_DESIGNER_SHOP_BUNDLE_LINK' ) ) {
	define('BOUTIQUE_DESIGNER_SHOP_BUNDLE_LINK',__('https://www.ovationthemes.com/products/wordpress-bundle','boutique-designer-shop'));
	}
	require get_template_directory() . '/inc/dashboard/dashboard-settings.php';
}
add_action( 'after_setup_theme', 'boutique_designer_shop_setup' );

//woocommerce//
//shop page no of columns
function boutique_designer_shop_woocommerce_loop_columns() {
	
	$retrun = get_theme_mod( 'boutique_designer_shop_archieve_item_columns', 3 );
    
    return $retrun;
}
add_filter( 'loop_shop_columns', 'boutique_designer_shop_woocommerce_loop_columns' );
function boutique_designer_shop_woocommerce_products_per_page() {

		$retrun = get_theme_mod( 'boutique_designer_shop_archieve_shop_perpage', 6 );
    
    return $retrun;
}
add_filter( 'loop_shop_per_page', 'boutique_designer_shop_woocommerce_products_per_page' );
// related products
function boutique_designer_shop_related_products_args( $args ) {
    $defaults = array(
        'posts_per_page' => get_theme_mod( 'boutique_designer_shop_related_shop_perpage', 3 ),
        'columns'        => get_theme_mod( 'boutique_designer_shop_related_item_columns', 3),
    );

    $args = wp_parse_args( $defaults, $args );

    return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'boutique_designer_shop_related_products_args' );

// breadcrumb seperator
function boutique_designer_shop_woocommerce_breadcrumb_separator($boutique_designer_shop_defaults) {
    $boutique_designer_shop_separator = get_theme_mod('woocommerce_breadcrumb_separator', ' / ');

    // Update the separator
    $boutique_designer_shop_defaults['delimiter'] = $boutique_designer_shop_separator;

    return $boutique_designer_shop_defaults;
}
add_filter('woocommerce_breadcrumb_defaults', 'boutique_designer_shop_woocommerce_breadcrumb_separator');

//add animation class
if ( class_exists( 'WooCommerce' ) ) { 
	add_filter('post_class', function($boutique_designer_shop_classes, $class, $product_id) {
	    if( is_shop() || is_product_category() ){
	        
	        $boutique_designer_shop_classes = array_merge(['wow','zoomIn'], $boutique_designer_shop_classes);
	    }
	    return $boutique_designer_shop_classes;
	},10,3);
}

add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );
//woocommerce-end//

// Get start function

// Enqueue scripts and styles
function boutique_designer_shop_enqueue_admin_script($hook) {
    // Admin JS
    wp_enqueue_script('boutique-designer-shop-admin-js', get_theme_file_uri('/assets/js/boutique-designer-shop-admin.js'), array('jquery'), true);
    wp_localize_script(
		'boutique-designer-shop-admin-js',
		'boutique_designer_shop',
		array(
			'admin_ajax'	=>	admin_url('admin-ajax.php'),
			'wpnonce'			=>	wp_create_nonce('boutique_designer_shop_dismissed_notice_nonce')
		)
	);
	wp_enqueue_script('boutique-designer-shop-admin-js');

    wp_localize_script( 'boutique-designer-shop-admin-js', 'boutique_designer_shop_scripts_localize',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action('admin_enqueue_scripts', 'boutique_designer_shop_enqueue_admin_script');

//dismiss function 
add_action( 'wp_ajax_boutique_designer_shop_dismissed_notice_handler', 'boutique_designer_shop_ajax_notice_dismiss_fuction' );

function boutique_designer_shop_ajax_notice_dismiss_fuction() {
	if (!wp_verify_nonce($_POST['wpnonce'], 'boutique_designer_shop_dismissed_notice_nonce')) {
		exit;
	}
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

//get start box
function boutique_designer_shop_custom_admin_notice() {
    // Check if the notice is dismissed
    if ( ! get_option('dismissed-get_started_notice', FALSE ) )  {
        // Check if not on the theme documentation page
        $boutique_designer_shop_current_screen = get_current_screen();
        $boutique_designer_shop_theme = wp_get_theme();
        $boutique_designer_shop_theme_name = strtolower( preg_replace( '#[^a-zA-Z]#', '', $boutique_designer_shop_theme->get( 'Name' ) ) );
		$boutique_designer_shop_demo_page_slug = apply_filters( $boutique_designer_shop_theme_name . '_theme_setup_wizard_boutique_designer_shop_page_slug', $boutique_designer_shop_theme_name . '-wizard' );
		$boutique_designer_shop_expected_screen_id = 'appearance_page_' . $boutique_designer_shop_demo_page_slug;
        if ( $boutique_designer_shop_current_screen && $boutique_designer_shop_current_screen->id !== $boutique_designer_shop_expected_screen_id ) { ?>
            <div class="notice notice-info is-dismissible" data-notice="get_started_notice">
                <div class="notice-div">
                    <div>
                        <p class="theme-name"><?php echo esc_html($boutique_designer_shop_theme->get('Name')); ?></p>
                        <p><?php _e('For information and detailed instructions, check out our theme documentation.', 'boutique-designer-shop'); ?></p>
                    </div>
                    <div class="notice-buttons-box">
                        <a class="button-primary livedemo" href="<?php echo esc_url( BOUTIQUE_DESIGNER_SHOP_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'boutique-designer-shop'); ?></a>
                        <a class="button-primary buynow" href="<?php echo esc_url( BOUTIQUE_DESIGNER_SHOP_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'boutique-designer-shop'); ?></a>
                        <a class="button-primary theme-install" href="<?php echo esc_url( 'themes.php?page=' . $boutique_designer_shop_demo_page_slug ); ?>"><?php _e( 'Begin Installation', 'boutique-designer-shop' ); ?></a>
                    </div>
                </div>
            </div>
        <?php
        }
    }
}
add_action('admin_notices', 'boutique_designer_shop_custom_admin_notice');

//after switch theme
add_action('after_switch_theme', 'boutique_designer_shop_after_switch_theme');
function boutique_designer_shop_after_switch_theme () {
    update_option('dismissed-get_started_notice', FALSE );
}
//get-start-function-end//

// tag count
function boutique_designer_shop_display_post_tag_count() {
    $boutique_designer_shop_tags = get_the_tags();
    $boutique_designer_shop_tag_count = ($boutique_designer_shop_tags) ? count($boutique_designer_shop_tags) : 0;
    $boutique_designer_shop_tag_text = ($boutique_designer_shop_tag_count === 1) ? 'tag' : 'tags';
    echo $boutique_designer_shop_tag_count . ' ' . $boutique_designer_shop_tag_text;
}

// Date formatting
function boutique_designer_shop_display_shop_date() {
    // Get the date type option
    $boutique_designer_shop_date_type = get_theme_mod( 'boutique_designer_shop_date_type', 'published' );

    // Determine the date to display based on the type
    if ( $boutique_designer_shop_date_type === 'modified' && get_the_modified_time( 'U' ) !== get_the_time( 'U' ) ) {
        $boutique_designer_shop_date_to_display = get_the_modified_date( get_option( 'date_format' ) );
    } else {
        $boutique_designer_shop_date_to_display = get_the_date( get_option( 'date_format' ) );
    }

    // Output the date HTML

    echo esc_html( $boutique_designer_shop_date_to_display );
}

//media post format
function boutique_designer_shop_get_media($boutique_designer_shop_type = array()){
	$boutique_designer_shop_content = apply_filters( 'the_content', get_the_content() );
  	$output = false;

  // Only get media from the content if a playlist isn't present.
  if ( false === strpos( $boutique_designer_shop_content, 'wp-playlist-script' ) ) {
    $output = get_media_embedded_in_content( $boutique_designer_shop_content, $boutique_designer_shop_type );
    return $output;
  }
}

// front page template
function boutique_designer_shop_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'boutique_designer_shop_front_page_template' );

// excerpt function
function boutique_designer_shop_custom_excerpt() {
    $boutique_designer_shop_excerpt = get_the_excerpt();
    $boutique_designer_shop_plain_text_excerpt = wp_strip_all_tags($boutique_designer_shop_excerpt);
    
    // Get dynamic word limit from theme mod
    $boutique_designer_shop_word_limit = esc_attr(get_theme_mod('boutique_designer_shop_post_excerpt', '30'));
    
    // Limit the number of words
    $boutique_designer_shop_limited_excerpt = implode(' ', array_slice(explode(' ', $boutique_designer_shop_plain_text_excerpt), 0, $boutique_designer_shop_word_limit));

    echo esc_html($boutique_designer_shop_limited_excerpt);
}

// typography
function boutique_designer_shop_fonts_scripts() {
	$boutique_designer_shop_headings_font = esc_html(get_theme_mod('boutique_designer_shop_headings_text'));
	$boutique_designer_shop_body_font = esc_html(get_theme_mod('boutique_designer_shop_body_text'));

	if( $boutique_designer_shop_headings_font ) {
		wp_enqueue_style( 'boutique-designer-shop-headings-fonts', '//fonts.googleapis.com/css?family='. $boutique_designer_shop_headings_font );
	} else {
		wp_enqueue_style( 'boutique-designer-shop-source-sans', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
	}
	if( $boutique_designer_shop_body_font ) {
		wp_enqueue_style( 'boutique-designer-shop-body-fonts', '//fonts.googleapis.com/css?family='. $boutique_designer_shop_body_font );
	} else {
		wp_enqueue_style( 'boutique-designer-shop-source-body', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,700,600');
	}
}
add_action( 'wp_enqueue_scripts', 'boutique_designer_shop_fonts_scripts' );

// google fonts url
function boutique_designer_shop_fonts_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Arsenal:ital,wght@0,400;0,700;1,400;1,700';
	$font_family[] = 'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

// Footer Text
function boutique_designer_shop_copyright_link() {
    $boutique_designer_shop_footer_text = get_theme_mod('boutique_designer_shop_footer_text', esc_html__('Boutique Designer Shop WordPress Theme', 'boutique-designer-shop'));
    $boutique_designer_shop_credit_link = esc_url('https://www.ovationthemes.com/products/free-boutique-wordpress-theme');

    echo '<a href="' . $boutique_designer_shop_credit_link . '" target="_blank">' . esc_html($boutique_designer_shop_footer_text) . '<span class="footer-copyright">' . esc_html__(' By Ovation Themes', 'boutique-designer-shop') . '</span></a>';
}

//cusatom sanitization
//dropdown
function boutique_designer_shop_sanitize_dropdown_pages( $page_id, $setting ) {
	$page_id = absint( $page_id );
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}
// phone number
function boutique_designer_shop_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}
// select post page
function boutique_designer_shop_sanitize_select( $input, $setting ){
    $input = sanitize_key($input);
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}
//choices control
function boutique_designer_shop_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}
// slider custom control
if ( ! function_exists( 'boutique_designer_shop_sanitize_integer' ) ) {
	function boutique_designer_shop_sanitize_integer( $input ) {
		return (int) $input;
	}
}
// range contol
function boutique_designer_shop_sanitize_number_absint( $number, $setting ) {

	// Ensure input is an absolute integer.
	$number = absint( $number );

	// Get the input attributes associated with the setting.
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;

	// Get minimum number in the range.
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );

	// Get maximum number in the range.
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );

	// Get step.
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

	// If the number is within the valid range, return it; otherwise, return the default
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}
// toggle switch
function boutique_designer_shop_callback_sanitize_switch( $value ) {
	// Switch values must be equal to 1 of off. Off is indicator and should not be translated.
	return ( ( isset( $value ) && $value == 1 ) ? 1 : 'off' );
}
// Sanitize Sortable control.
function boutique_designer_shop_sanitize_sortable( $val, $setting ) {
	if ( is_string( $val ) || is_numeric( $val ) ) {
		return array(
			esc_attr( $val ),
		);
	}
	$sanitized_value = array();
	foreach ( $val as $item ) {
		if ( isset( $setting->manager->get_control( $setting->id )->choices[ $item ] ) ) {
			$sanitized_value[] = esc_attr( $item );
		}
	}
	return $sanitized_value;
}

// widgets
function boutique_designer_shop_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'boutique-designer-shop' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'boutique-designer-shop' ),
		'before_widget' => '<section id="%1$s" class="widget wow zoomIn %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'boutique-designer-shop' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'boutique-designer-shop' ),
		'before_widget' => '<section id="%1$s" class="widget wow zoomIn %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'boutique-designer-shop' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'boutique-designer-shop' ),
		'before_widget' => '<section id="%1$s" class="widget wow zoomIn %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'boutique-designer-shop' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'boutique-designer-shop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'boutique-designer-shop' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'boutique-designer-shop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'boutique-designer-shop' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'boutique-designer-shop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'boutique-designer-shop' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'boutique-designer-shop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'boutique_designer_shop_widgets_init' );

//Enqueue scripts and styles.
function boutique_designer_shop_scripts() {

	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'boutique-designer-shop-fonts', boutique_designer_shop_fonts_url(), array() );

	//Bootstarp
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.css' );

	// Theme stylesheet.
	wp_enqueue_style( 'boutique-designer-shop-style', get_stylesheet_uri() );
	wp_style_add_data('boutique-designer-shop-style', 'rtl', 'replace');

	// Theme Customize CSS.
	require get_parent_theme_file_path( 'inc/extra_customization.php' );
	wp_add_inline_style( 'boutique-designer-shop-style',$boutique_designer_shop_custom_style );

	//font-awesome
	wp_enqueue_style( 'font-awesome-style', get_template_directory_uri().'/assets/css/fontawesome-all.css' );

	// Block Style
	wp_enqueue_style( 'boutique-designer-shop-block-style', esc_url( get_template_directory_uri() ).'/assets/css/blocks.css' );

	//Custom JS
	wp_enqueue_script( 'boutique-designer-shop-custom.js', get_theme_file_uri( '/assets/js/theme-script.js' ), array( 'jquery' ), true );

	//Nav Focus JS
	wp_enqueue_script( 'boutique-designer-shop-navigation-focus', get_theme_file_uri( '/assets/js/navigation-focus.js' ), array( 'jquery' ), true );

	//Bootstarp JS
	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ),true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	//animation
	if (get_option('boutique_designer_shop_animation_enable', false) !== 'off') {
		//wow.js
		wp_enqueue_script( 'boutique-designer-shop-wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );

		//animate.css
		wp_enqueue_style( 'boutique-designer-shop-animate-css', get_template_directory_uri().'/assets/css/animate.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'boutique_designer_shop_scripts' );

function boutique_designer_shop_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'boutique-designer-shop-block-editor-style', trailingslashit( esc_url ( get_template_directory_uri() ) ) . '/assets/css/editor-blocks.css' );

	// Add custom fonts.
	wp_enqueue_style( 'boutique-designer-shop-fonts', boutique_designer_shop_fonts_url(), array() );
}
add_action( 'enqueue_block_editor_assets', 'boutique_designer_shop_block_editor_styles' );

# Load scripts and styles.(fontawesome)
add_action( 'customize_controls_enqueue_scripts', 'boutique_designer_shop_customize_controls_register_scripts' );
function boutique_designer_shop_customize_controls_register_scripts() {	
	wp_enqueue_style( 'boutique-designer-shop-ctypo-customize-controls-style', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
}

require get_parent_theme_file_path( '/inc/custom-header.php' );
require get_parent_theme_file_path( '/inc/template-tags.php' );
require get_parent_theme_file_path( '/inc/template-functions.php' );
require get_parent_theme_file_path( '/inc/typofont.php' );
require get_parent_theme_file_path( '/inc/breadcrumb.php' );
require get_parent_theme_file_path( 'inc/sortable/sortable_control.php' );
require get_parent_theme_file_path( '/inc/customizer.php' );
require get_template_directory() . '/inc/wptt-webfont-loader.php';

//woocommerce plugin skip 
add_filter( 'woocommerce_prevent_automatic_wizard_redirect', '__return_true' );