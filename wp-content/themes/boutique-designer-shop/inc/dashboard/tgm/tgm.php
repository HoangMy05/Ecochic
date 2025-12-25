<?php

	require get_template_directory() . '/inc/dashboard/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function boutique_designer_shop_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Ovation Elements', 'boutique-designer-shop' ),
			'slug'             => 'ovation-elements',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'WooCommerce', 'boutique-designer-shop' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		)
		

	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'boutique_designer_shop_register_recommended_plugins' );