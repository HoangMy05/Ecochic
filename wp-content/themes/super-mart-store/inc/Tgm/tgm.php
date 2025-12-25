<?php

require get_theme_file_path( '/inc/Tgm/class-tgm-plugin-activation.php' );
/**
 * Recommended plugins.
 */
function super_mart_store_register_recommended_plugins() {
	$plugins = array(		
		array(
			'name'      => esc_html__( 'WooCommerce', 'super-mart-store' ),
			'slug'      => 'woocommerce',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'      => esc_html__( 'Gutentor', 'super-mart-store' ),
			'slug'      => 'gutentor',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Mosaic Gallery Advanced Gallery', 'arcade-games' ),
			'slug'             => 'mosaic-gallery-advanced-gallery',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'super_mart_store_register_recommended_plugins' );