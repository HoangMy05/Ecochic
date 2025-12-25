<?php

/**
 * file for holding dashboard welcome page for theme
 */
if ( ! function_exists( 'shopmighty_is_plugin_installed' ) ) {
	function shopmighty_is_plugin_installed( $plugin_slug ) {
		$plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
		return file_exists( $plugin_path );
	}
}
if ( ! function_exists( 'shopmighty_is_plugin_activated' ) ) {
	function shopmighty_is_plugin_activated( $plugin_slug ) {
		return is_plugin_active( $plugin_slug );
	}
}
if ( ! function_exists( 'shopmighty_welcome_notice' ) ) :
	function shopmighty_welcome_notice() {
		if ( get_option( 'shopmighty_dismissed_custom_notice' ) ) {
			return;
		}
		global $pagenow;
		$current_screen = get_current_screen();

		if ( is_admin() ) {
			if ( $current_screen->id !== 'dashboard' && $current_screen->id !== 'themes' ) {
				return;
			}
			if ( is_network_admin() ) {
				return;
			}
			if ( ! current_user_can( 'manage_options' ) ) {
				return;
			}
			$theme = wp_get_theme();

			if ( is_child_theme() ) {
				$theme = wp_get_theme()->parent();
			}
			$shopmighty_version = $theme->get( 'Version' );

			?>

       <div class="grocery-and-organic-store-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice" id="grocery-and-organic-store-dismiss-notice">
				<div class="info-content">
					<div class="notice-holder">
						<h5><span class="theme-name"><span><?php echo __( 'Welcome to Grocery and Organic Store', 'grocery-and-organic-store' ); ?></span></h5>
						<h2><?php echo __( 'Launch Your Online Store Effortlessly with Grocery and Organic Store! 🚀 ', 'grocery-and-organic-store' ); ?></h2>
						</h3>
						<div class="notice-text">
							<p><?php echo __( 'If you are planning to build a Grocery Shop, then Groci – Grocery Market and Organic Food Shop eCommerce Elementor WooCommerce WordPress Theme is what you need. This amazing theme can help you to build your own grocery store, organic food shop, online supermarket, woocommerce grocery, grocery multivendor, agriculture, marketplace, multivendor, vegetables, food store, food delivery, food business, multi vendor, dokan, food product and online food products, electronics store, fashion store, toys store only in hours. ', 'grocery-and-organic-store' ); ?></p>
						</div>

						<a href="<?php echo __( 'https://www.templatehouse.net/themes/grocery-store-wordpress-theme/', 'grocery-and-organic-store' ); ?>" target="_blank" class="button admin-button info-button"><?php echo __( 'Upgrade Pro', 'grocery-and-organic-store' ); ?></a>
						<a href="<?php echo __( 'https://demo.templatehouse.net/groci/', 'grocery-and-organic-store' ); ?>" target="_blank" class="button admin-button info-button"><?php echo __( 'Live Demo', 'grocery-and-organic-store' ); ?></a>



					</div>
				</div>
				<div class="theme-hero-screens">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/inc/admin/images/admin-panel-img.png' ); ?>" />
				</div>

			</div>


			<?php
		}
	}
endif;
add_action( 'admin_notices', 'shopmighty_welcome_notice' );
function shopmighty_dismissble_notice() {
	if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( $_POST['nonce'], 'shopmighty_admin_nonce' ) ) {
		wp_send_json_error( array( 'message' => 'Nonce verification failed.' ) );
		return;
	}

	$result = update_option( 'shopmighty_dismissed_custom_notice', 1 );

	if ( $result ) {
		wp_send_json_success();
	} else {
		wp_send_json_error( array( 'message' => 'Failed to update option' ) );
	}
}
add_action( 'wp_ajax_shopmighty_dismissble_notice', 'shopmighty_dismissble_notice' );
// Hook into a custom action when the button is clicked
add_action( 'wp_ajax_shopmighty_install_and_activate_plugins', 'shopmighty_install_and_activate_plugins' );
add_action( 'wp_ajax_nopriv_shopmighty_install_and_activate_plugins', 'shopmighty_install_and_activate_plugins' );
add_action( 'wp_ajax_shopmighty_rplugin_activation', 'shopmighty_rplugin_activation' );
add_action( 'wp_ajax_nopriv_shopmighty_rplugin_activation', 'shopmighty_rplugin_activation' );

// Function to install and activate the plugins



function check_plugin_installed_status( $pugin_slug, $plugin_file ) {
	return file_exists( ABSPATH . 'wp-content/plugins/' . $pugin_slug . '/' . $plugin_file ) ? true : false;
}

/* Check if plugin is activated */


function check_plugin_active_status( $pugin_slug, $plugin_file ) {
	return is_plugin_active( $pugin_slug . '/' . $plugin_file ) ? true : false;
}

require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
require_once ABSPATH . 'wp-admin/includes/file.php';
require_once ABSPATH . 'wp-admin/includes/misc.php';
require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
function shopmighty_install_and_activate_plugins() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	check_ajax_referer( 'shopmighty_welcome_nonce', 'nonce' );
	// Define the plugins to be installed and activated


	// Set up a transient to store the installation progress
	set_transient( 'install_and_activate_progress', array(), MINUTE_IN_SECONDS * 10 );

	// Loop through each plugin
	foreach ( $recommended_plugins as $plugin ) {
		$plugin_slug = $plugin['slug'];
		$plugin_file = $plugin['file'];
		$plugin_name = $plugin['name'];

		// Check if the plugin is active
		if ( is_plugin_active( $plugin_slug . '/' . $plugin_file ) ) {
			update_install_and_activate_progress( $plugin_name, 'Already Active' );
			continue; // Skip to the next plugin
		}

		// Check if the plugin is installed but not active
		if ( is_shopmighty_plugin_installed( $plugin_slug . '/' . $plugin_file ) ) {
			$activate = activate_plugin( $plugin_slug . '/' . $plugin_file );
			if ( is_wp_error( $activate ) ) {
				update_install_and_activate_progress( $plugin_name, 'Error' );
				continue; // Skip to the next plugin
			}
			update_install_and_activate_progress( $plugin_name, 'Activated' );
			continue; // Skip to the next plugin
		}

		// Plugin is not installed or activated, proceed with installation
		update_install_and_activate_progress( $plugin_name, 'Installing' );

		// Fetch plugin information
		$api = plugins_api(
			'plugin_information',
			array(
				'slug'   => $plugin_slug,
				'fields' => array( 'sections' => false ),
			)
		);

		// Check if plugin information is fetched successfully
		if ( is_wp_error( $api ) ) {
			update_install_and_activate_progress( $plugin_name, 'Error' );
			continue; // Skip to the next plugin
		}

		// Set up the plugin upgrader
		$upgrader = new Plugin_Upgrader();
		$install  = $upgrader->install( $api->download_link );

		// Check if installation is successful
		if ( $install ) {
			// Activate the plugin
			$activate = activate_plugin( $plugin_slug . '/' . $plugin_file );

			// Check if activation is successful
			if ( is_wp_error( $activate ) ) {
				update_install_and_activate_progress( $plugin_name, 'Error' );
				continue; // Skip to the next plugin
			}
			update_install_and_activate_progress( $plugin_name, 'Activated' );
		} else {
			update_install_and_activate_progress( $plugin_name, 'Error' );
		}
	}

	// Delete the progress transient
	$redirect_url = admin_url( 'themes.php?page=advanced-import' );

	// Delete the progress transient
	delete_transient( 'install_and_activate_progress' );
	// Return JSON response
	wp_send_json_success( array( 'redirect_url' => $redirect_url ) );
}

// Function to check if a plugin is installed but not active
function is_shopmighty_plugin_installed( $plugin_slug ) {
	$plugins = get_plugins();
	return isset( $plugins[ $plugin_slug ] );
}

// Function to update the installation and activation progress
function update_install_and_activate_progress( $plugin_name, $status ) {
	$progress   = get_transient( 'install_and_activate_progress' );
	$progress[] = array(
		'plugin' => $plugin_name,
		'status' => $status,
	);
	set_transient( 'install_and_activate_progress', $progress, MINUTE_IN_SECONDS * 10 );
}


function shopmighty_dashboard_menu() {
	add_theme_page( esc_html__( 'About Grocery and Organic Store', 'grocery-and-organic-store' ), esc_html__( 'About Grocery and Organic Store', 'grocery-and-organic-store' ), 'edit_theme_options', 'about-grocery-and-organic-store', 'shopmighty_theme_info_display' );
}
add_action( 'admin_menu', 'shopmighty_dashboard_menu' );
function shopmighty_theme_info_display() {

	?>
	<div class="dashboard-about-grocery-and-organic-store">
		<div class="grocery-and-organic-store-dashboard">
			<ul id="grocery-and-organic-store-dashboard-tabs-nav">
				<li><a href="#grocery-and-organic-store-welcome"><?php echo __( 'Get Started', 'grocery-and-organic-store' ); ?></a></li>
				<li><a href="#grocery-and-organic-store-setup"><?php echo __( 'Setup Instruction', 'grocery-and-organic-store' ); ?></a></li>
				<li><a href="#grocery-and-organic-store-comparision"><?php echo __( 'FREE VS PRO', 'grocery-and-organic-store' ); ?></a></li>
			</ul> <!-- END tabs-nav -->
			<div id="tabs-content">
				<div id="grocery-and-organic-store-welcome" class="tab-content">
					<h1> <?php echo __( 'Welcome to the Grocery and Organic Store', 'grocery-and-organic-store' ); ?></h1>
					<span>
						<p><?php echo __( 'Grocery and Organic Store is a Clean Multi-purpose WooCommerce WordPress Theme comes with Product Filter, Ajax Search, Ajax Add to Cart, Quick View, Bought Together, Compare , Wishlist , Mini Cart etc.. . It was built for multipurpose shops like mega store, grocery store, super market, organic shop and online stores selling products like beverages, vegetables, fruits, ice creams, paste, herbs, juice, meat, cold drinks, sausages, cocktails, soft drinks, cookies, electronics gadgets, shoes, watches, sport wears, baby products, skincare products, modern arts, etc. NeGrocery and Organic Storest comes along with Elementor page builder. The most powerful Page Builder providing you with an advanced handy tool with drag and drop mode to customize your pages on the front end. A User-friendly & real-time customizer helps you design the desired website fast and review your results instantly..', 'grocery-and-organic-store' ); ?></p>

						<p><?php echo __( 'Creative Design: Grocery and Organic Store is a bold theme that organizing content to follow natural eyes, striking balance between beautiful and visual hierarchy. Drag and drop facility always helpful and comfortable while customizing the pages on the fronted. Elementor is the most powerful page builder gives you a handy tool to do that with no efforts. Changing any front-end is simple and easy for anyone without any prior coding knowledge.', 'grocery-and-organic-store' ); ?></p>

					</span>
						<a href="<?php echo __( 'https://www.templatehouse.net/themes/grocery-store-wordpress-theme/', 'grocery-and-organic-store' ); ?>" target="_blank" class="button admin-button info-button"><?php echo __( 'Upgrade Pro', 'grocery-and-organic-store' ); ?></a>
						<a href="<?php echo __( 'https://demo.templatehouse.net/groci/', 'grocery-and-organic-store' ); ?>" target="_blank" class="button admin-button info-button"><?php echo __( 'Live Demo', 'grocery-and-organic-store' ); ?></a>

					</div>
				<div id="grocery-and-organic-store-setup" class="tab-content">
					<h3 class="grocery-and-organic-store-baisc-guideline-header"><?php echo __( 'Basic Theme Setup', 'grocery-and-organic-store' ); ?></h3>
					<div class="grocery-and-organic-store-baisc-guideline">
						<div class="featured-box">
							<ul>
								<li><strong><?php echo __( 'Setup Header Layout:', 'grocery-and-organic-store' ); ?></strong>
									<ul>
										<li> - <?php echo __( 'Go to Appearance -> Editor -> Patterns -> Template Parts -> Header:', 'grocery-and-organic-store' ); ?></li>
										<li> - <?php echo __( 'click on Header > Click on Edit (Icon) -> Add or Remove Requirend block/content as your requirement.:', 'grocery-and-organic-store' ); ?></li>
										<li> - <?php echo __( 'Click on save to update your layout', 'grocery-and-organic-store' ); ?></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="featured-box">
							<ul>
								<li><strong><?php echo __( 'Setup Footer Layout:', 'grocery-and-organic-store' ); ?></strong>
									<ul>
										<li> - <?php echo __( 'Go to Appearance -> Editor -> Patterns -> Template Parts -> Footer:', 'grocery-and-organic-store' ); ?></li>
										<li> - <?php echo __( 'click on Footer > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'grocery-and-organic-store' ); ?></li>
										<li> - <?php echo __( 'Click on save to update your layout', 'grocery-and-organic-store' ); ?></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="featured-box">
							<ul>
								<li><strong><?php echo __( 'Setup Templates like Homepage/404/Search/Page/Single and more templates Layout:', 'grocery-and-organic-store' ); ?></strong>
									<ul>
										<li> - <?php echo __( 'Go to Appearance -> Editor -> Templates:', 'grocery-and-organic-store' ); ?></li>
										<li> - <?php echo __( 'click on Template(You need to edit/update) > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'grocery-and-organic-store' ); ?></li>
										<li> - <?php echo __( 'Click on save to update your layout', 'grocery-and-organic-store' ); ?></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="featured-box">
							<ul>
								<li><strong><?php echo __( 'Restore/Reset Default Content layout of Template(Like: Frontpage/Blog/Archive etc.)', 'grocery-and-organic-store' ); ?></strong>
									<ul>
										<li> - <?php echo __( 'Go to Appearance -> Editor -> Templates:', 'grocery-and-organic-store' ); ?></li>
										<li> - <?php echo __( 'Click on Manage all Templates', 'grocery-and-organic-store' ); ?></li>
										<li> - <?php echo __( 'Click on 3 Dots icon ( ⋮ ) at right side of respective Template', 'grocery-and-organic-store' ); ?></li>
										<li> - <?php echo __( 'Click on Reset', 'grocery-and-organic-store' ); ?></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="featured-box">
							<ul>
								<li><strong><?php echo __( 'Restore/Reset Default Content layout of Template Parts(Header/Footer/Sidebar)', 'grocery-and-organic-store' ); ?></strong>
								<ul>
									<li> - <?php echo __( 'Go to Appearance -> Editor -> Patterns:', 'grocery-and-organic-store' ); ?></li>
									<li> - <?php echo __( 'Click on Manage All Template Parts', 'grocery-and-organic-store' ); ?></li>
									<li> - <?php echo __( 'Click on 3 Dots icon ( ⋮ ) at right side of respective Template parts', 'grocery-and-organic-store' ); ?></li>
									<li> - <?php echo __( 'Click on Reset', 'grocery-and-organic-store' ); ?></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="grocery-and-organic-store-comparision" class="tab-content">
					<div class="featured-list">
						<div class="half-col free-features">
							<h3><?php echo __( 'Grocery and Organic Store Features (Free)', 'grocery-and-organic-store' ); ?></h3>
							<ul>
								<li>
									<ul>
										<li><?php echo __( '404 Page Not Found Section', 'grocery-and-organic-store' ); ?></li>
										<li><?php echo __( 'Marquee Section', 'grocery-and-organic-store' ); ?></li>
										<li><?php echo __( 'Latest Blogs Section - 2', 'grocery-and-organic-store' ); ?></li>
										<li><?php echo __( 'Call To Action Section - 2', 'grocery-and-organic-store' ); ?></li>
										<li><?php echo __( 'WooCommerce Product Showcase Section - 9', 'grocery-and-organic-store' ); ?></li>
										<li><?php echo __( 'Testimonial Grid Section', 'grocery-and-organic-store' ); ?></li>
										<li><?php echo __( 'About Us Section', 'grocery-and-organic-store' ); ?></li>
										<li><?php echo __( 'Header Section', 'grocery-and-organic-store' ); ?></li>
										<li><?php echo __( 'Footer Section - 2', 'grocery-and-organic-store' ); ?></li>
										<li><?php echo __( 'Sitemap Section', 'grocery-and-organic-store' ); ?></li>
										<li><?php echo __( 'Sidebar Section - 2', 'grocery-and-organic-store' ); ?></li>
									</ul>
								</li>

								<li> <strong>- <?php echo __( 'FSE Templates Ready', 'grocery-and-organic-store' ); ?></strong>
									<ul>
										<li> <?php echo __( '404 Template', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'Archive Template', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'Product Archive Template', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'Blank Template', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'Blank Template with Header and Footer', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'WooCommerce Cart Template', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'WooCommerce Checkout Template', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'Front Page Template', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'Blog Home Template', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'Index Page Template', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'Search Template', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'Sitemap Template', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'Page Template', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'Page Template with Left Sidebar', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'Page  Template with Right Sidebar', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'Single Template', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'Single Template with Left Sidebar', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'Single Template with Right Sidebar', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'Single Product Template', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'Single Product Template with Left Sidebar', 'grocery-and-organic-store' ); ?></li>
										<li> <?php echo __( 'Single Product Template with Right Sidebar', 'grocery-and-organic-store' ); ?></li>

									</ul>
								<li>
								<li><strong> - <?php echo __( 'Fully Customizable Header Layout', 'grocery-and-organic-store' ); ?></strong></li>
								<li> <strong>- <?php echo __( 'Fully Customizable Footer Layout ', 'grocery-and-organic-store' ); ?></strong></li>
								<li> <strong>- <?php echo __( 'On Scroll Animation option', 'grocery-and-organic-store' ); ?></strong></li>
								<li> <strong>- <?php echo __( 'One Click Demo Import Features', 'grocery-and-organic-store' ); ?></strong></li>
								</ul>
						</div>
						<div class="half-col pro-features">
							<h3><?php echo __( 'Premium Features', 'grocery-and-organic-store' ); ?></h3>
							
							<ul>
								<li><?php echo __( 'Dokan (Multi Vendor Plugin) ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'WC Marketplace (Multi Vendor Plugin) ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Compatible with RTL(Right to Left Arabic)', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Location Filter ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Popup Location Filter ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Added to Cart Ajax Popup Notice ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Quantity Field for Product Box ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Load More Pagination Ajax ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Infinite Scroll Pagination Ajax ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Quick View ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Order on WhatsApp ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'AJAX Shop Filters ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'AJAX Product Search ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'AJAX Add to Cart For Variable & Grouped Products ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'AJAX Remove From Cart ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Wishlist ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Mobile Bottom Menu ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Recently Viewed Products ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Side Cart ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Min/Max Quantity Option ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Min Order Amount ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Catalog Mode ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Sticky Add to Cart ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Mobile Sticky Add to Cart ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Single Product Stock Progress Bar ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Single Product Time Countdown ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Buy Now Button ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Product Image Zoom ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Product Video (Youtube and Vimeo) ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Product Mobile Filters ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Product Category Filters ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Product Status (Stock/On Sale) ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Product Filter by Color', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Product Filter by Brand', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Sticky Add to Cart for mobile ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Order Tracking ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'GDPR cookie consent ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Popup Newsletter ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Maintenance – Coming Soon ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Free Shipping Bar ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Sticky Titles for Product Detail ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Login/Register Form with Tab ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Ajax Login/Register Form ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'WOOCS Multi Currency ready', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'WPML(Multilanguage) supported', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Polylang(Multilanguage) supported', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Loco Translate supported', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Contact Form 7', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'POT for all languages – Multi language', 'grocery-and-organic-store' ); ?></li>
								<li><?php echo __( 'Parallax background image and video supported', 'grocery-and-organic-store' ); ?></li>

							</ul>



						<a href="<?php echo __( 'https://www.templatehouse.net/themes/grocery-store-wordpress-theme/', 'grocery-and-organic-store' ); ?>" target="_blank" class="button admin-button info-button"><?php echo __( 'Upgrade Pro', 'grocery-and-organic-store' ); ?></a>
						<a href="<?php echo __( 'https://demo.templatehouse.net/groci/', 'grocery-and-organic-store' ); ?>" target="_blank" class="button admin-button info-button"><?php echo __( 'Live Demo', 'grocery-and-organic-store' ); ?></a>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
