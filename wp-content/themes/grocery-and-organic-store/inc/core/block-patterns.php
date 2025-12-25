<?php

/**
 * Grocery and Organic Store: Block Patterns
 *
 * @since Grocery and Organic Store 1.0.0
 */

/**
 * Registers pattern categories for Grocery and Organic Store
 *
 * @since Grocery and Organic Store 1.0.0
 *
 * @return void
 */
function grocery_and_organic_store_register_pattern_category() {
	$block_pattern_categories = array(
		'grocery-and-organic-store'             => array( 'label' => __( 'Grocery and Organic Store : All Patterns', 'grocery-and-organic-store' ) ),
		'grocery-and-organic-store-woocommerce' => array( 'label' => __( 'Grocery and Organic Store : WooCommerce Patterns', 'grocery-and-organic-store' ) ),
	);

	$block_pattern_categories = apply_filters( 'grocery_and_organic_store_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action( 'init', 'grocery_and_organic_store_register_pattern_category', 9 );
