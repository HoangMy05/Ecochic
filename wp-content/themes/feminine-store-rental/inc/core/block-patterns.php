<?php
/**
 * Block Patterns
 *
 * @since 1.0.0
 */

/**
 * Registers pattern categories for Feminine Store Rental
 *
 * @since 1.0.0
 *
 * @return void
 */
function feminine_store_rental_register_pattern_category() {
	$block_pattern_categories = array(
		'banner'      => array( 'label' => __( 'Feminine Store Rental Patterns', 'feminine-store-rental' ) ),
		'product'  => array( 'label' => __( 'Product', 'feminine-store-rental' ) ),
	);

	$block_pattern_categories = apply_filters( 'feminine_store_rental_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}		
	}
}
add_action( 'init', 'feminine_store_rental_register_pattern_category', 9 );


