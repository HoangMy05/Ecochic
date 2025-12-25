<?php

/**
* Get started notice
*/

add_action( 'wp_ajax_feminine_store_dismissed_notice_handler', 'feminine_store_ajax_notice_handler' );

/**
 * AJAX handler to store the state of dismissible notices.
 */
function feminine_store_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        // Store it in the options table
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function feminine_store_deprecated_hook_admin_notice() {
        // Check if it's been dismissed...
        if ( ! get_option('dismissed-get_started', FALSE ) ) {
        $current_screen = get_current_screen();
			if ($current_screen->id !== 'appearance_page_feminine-store-rental-guide-page') {
         $feminine_store_comments_theme = wp_get_theme(); ?>
            <div class="feminine-store-rental-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
			<div class="feminine-store-rental-notice">
				<div class="feminine-store-rental-notice-content">
					<div class="feminine-store-rental-notice-heading">
						<h2><?php esc_html_e('Thanks For Installing ','feminine-store-rental'); ?><?php echo esc_html( $feminine_store_comments_theme ); ?> <?php esc_html_e('Theme','feminine-store-rental'); ?></h2>
					<p><?php 
                    /* translators: %s: theme name */
                    printf(esc_html__("%s is now installed and ready to use. We've provide some links to get you started.", 'feminine-store-rental'), $feminine_store_comments_theme ); ?></p>
					</div>
					<div class="diplay-flex-btn">
						<a class="button button-primary" href="<?php echo esc_url(admin_url('themes.php?page=feminine-store-rental-guide-page')); ?>"><?php echo esc_html__('GET STARTED','feminine-store-rental'); ?></a>
						<a class="button button-primary" target="_blank" href="<?php echo esc_url( FEMININE_STORE_RENTAL_BUY_NOW ); ?>"><?php echo esc_html__('GO TO PREMIUM','feminine-store-rental'); ?></a>
					</div>
				</div>
				<div class="feminine-store-rental-notice-img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/notification.png'); ?>" alt="<?php esc_attr_e('logo', 'feminine-store-rental'); ?>">
				</div>
			</div>
		</div>
        <?php }
	}
}

add_action( 'admin_notices', 'feminine_store_deprecated_hook_admin_notice' );

function feminine_store_admin_enqueue_scripts() {
	wp_enqueue_style( 'feminine-store-rental-admin-style', esc_url( get_template_directory_uri() ).'/assets/css/main.css' );
	wp_enqueue_script( 'feminine-store-rental-admin-script', get_template_directory_uri() . '/assets/js/feminine-store-rental-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'feminine-store-rental-admin-script', 'feminine_store_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'feminine_store_admin_enqueue_scripts' );

add_action( 'admin_menu', 'feminine_store_getting_started' );
function feminine_store_getting_started() {
	add_theme_page( esc_html__('Get Started', 'feminine-store-rental'), esc_html__('Get Started', 'feminine-store-rental'), 'edit_theme_options', 'feminine-store-rental-guide-page', 'feminine_store_test_guide');
}

if ( ! defined( 'FEMININE_STORE_RENTAL_DOCS_FREE' ) ) {
define('FEMININE_STORE_RENTAL_DOCS_FREE',__('https://demo.misbahwp.com/docs/feminine-store-rental-free-docs/','feminine-store-rental'));
}
if ( ! defined( 'FEMININE_STORE_RENTAL_DOCS_PRO' ) ) {
define('FEMININE_STORE_RENTAL_DOCS_PRO',__('https://demo.misbahwp.com/docs/feminine-store-rental-pro-docs/','feminine-store-rental'));
}
if ( ! defined( 'FEMININE_STORE_RENTAL_BUY_NOW' ) ) {
define('FEMININE_STORE_RENTAL_BUY_NOW',__('https://www.misbahwp.com/products/feminine-wordpress-theme','feminine-store-rental'));
}
if ( ! defined( 'FEMININE_STORE_RENTAL_SUPPORT_FREE' ) ) {
define('FEMININE_STORE_RENTAL_SUPPORT_FREE',__('https://wordpress.org/support/theme/feminine-store-rental','feminine-store-rental'));
}
if ( ! defined( 'FEMININE_STORE_RENTAL_REVIEW_FREE' ) ) {
define('FEMININE_STORE_RENTAL_REVIEW_FREE',__('https://wordpress.org/support/theme/feminine-store-rental/reviews/#new-post','feminine-store-rental'));
}
if ( ! defined( 'FEMININE_STORE_RENTAL_DEMO_PRO' ) ) {
define('FEMININE_STORE_RENTAL_DEMO_PRO',__('https://demo.misbahwp.com/feminine-store-rental-pro/','feminine-store-rental'));
}
if( ! defined( 'FEMININE_STORE_RENTAL_THEME_BUNDLE' ) ) {
define('FEMININE_STORE_RENTAL_THEME_BUNDLE',__('https://www.misbahwp.com/products/wordpress-bundle','feminine-store-rental'));
}

function feminine_store_test_guide() { ?>
	<?php $feminine_store_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( FEMININE_STORE_RENTAL_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'feminine-store-rental' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'feminine-store-rental' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( FEMININE_STORE_RENTAL_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'feminine-store-rental' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( FEMININE_STORE_RENTAL_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'feminine-store-rental' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','feminine-store-rental'); ?><?php echo esc_html( $feminine_store_theme ); ?>  <span><?php esc_html_e('Version: ', 'feminine-store-rental'); ?><?php echo esc_html($feminine_store_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $feminine_store_theme->get_screenshot() ); ?>" />
				<div id="description-insidee">
					<?php
						$feminine_store_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $feminine_store_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postboxx donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'feminine-store-rental' ); ?></h3>
				<div class="insidee">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','feminine-store-rental'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( FEMININE_STORE_RENTAL_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'feminine-store-rental' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( FEMININE_STORE_RENTAL_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'feminine-store-rental' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( FEMININE_STORE_RENTAL_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'feminine-store-rental' ) ?></a>
					</div>
				</div>
				<h3 class="hndle bundle"><?php esc_html_e( 'Get All Themes', 'feminine-store-rental' ); ?></h3>
				<div class="insidee theme-bundle">
					<img width="100%" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bundle-image.png' ); ?>" alt="<?php esc_attr_e('logo', 'feminine-store-rental'); ?>">
					<p class="offer"><?php esc_html_e('Get 100+ Perfect WordPress Theme In A Single Package at just $89."','feminine-store-rental'); ?></p>
					<p class="coupon"><?php esc_html_e('Get Our Theme Pack of 100+ WordPress Themes At 15% Off','feminine-store-rental'); ?><span class="coupon-code"><?php esc_html_e('"Bundleup15"','feminine-store-rental'); ?></span></p>
				<div id="admin_pro_linkss">
					<a class="blue-button-1" href="<?php echo esc_url( FEMININE_STORE_RENTAL_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Buy All Themes - $89', 'feminine-store-rental' ) ?></a>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','feminine-store-rental'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','feminine-store-rental'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','feminine-store-rental'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','feminine-store-rental'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','feminine-store-rental'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','feminine-store-rental'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','feminine-store-rental'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','feminine-store-rental'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','feminine-store-rental'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','feminine-store-rental'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','feminine-store-rental'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','feminine-store-rental'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','feminine-store-rental'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>
<?php } ?>