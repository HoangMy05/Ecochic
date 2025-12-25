<?php

require get_theme_file_path( '/inc/Tgm/class-tgm-plugin-activation.php' );
/**
 * Recommended plugins.
 */
function feminine_store_rental_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'      => esc_html__( 'WooCommerce', 'feminine-store-rental' ),
			'slug'      => 'woocommerce',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'feminine_store_rental_register_recommended_plugins' );