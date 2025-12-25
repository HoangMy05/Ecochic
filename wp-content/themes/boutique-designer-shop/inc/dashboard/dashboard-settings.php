<?php
/**
 * Settings for demo import
 *
 */

/**
 * Define constants
 **/
if ( ! defined( 'WHIZZIE_DIR' ) ) {
	define( 'WHIZZIE_DIR', dirname( __FILE__ ) );
}
require trailingslashit( WHIZZIE_DIR ) . 'dashboard-contents.php';
$boutique_designer_shop_current_theme = wp_get_theme();
$boutique_designer_shop_theme_title = $boutique_designer_shop_current_theme->get( 'Name' );


/**
 * Make changes below
 **/

// Change the title and slug of your wizard page
$config['boutique_designer_shop_page_slug'] 	= 'boutique-designer-shop';
$config['boutique_designer_shop_page_title']	= 'Begin Installation';

$config['steps'] = array(
	'plugins' => array(
		'id'			=> 'plugins',
		'title'			=> __( 'Install and Activate Recommended Plugins', 'boutique-designer-shop' ),
		'icon'			=> 'admin-plugins',
		'button_text'	=> __( 'Install Recommended Plugins', 'boutique-designer-shop' ),
		'can_skip'		=> true
	),
	'widgets' => array(
		'id'			=> 'widgets',
		'title'			=> __( 'Begin With Demo Import', 'boutique-designer-shop' ),
		'icon'			=> 'welcome-widgets-menus',
		'button_text'	=> __( 'Begin With Demo Import', 'boutique-designer-shop' ),
		'can_skip'		=> true
	),
	'done' => array(
		'id'			=> 'done',
		'title'			=> __( 'Customize Your Site', 'boutique-designer-shop' ),
		'icon'			=> 'yes',
	)
);

/**
 * This kicks off the wizard
 **/
if( class_exists( 'Boutique_Designer_Shop_Whizzie' ) ) {
	$Boutique_Designer_Shop_Whizzie = new Boutique_Designer_Shop_Whizzie( $config );
}