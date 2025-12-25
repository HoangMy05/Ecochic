<?php
/**
 * Phone Accessories Store: Block Patterns
 *
 * @since Phone Accessories Store 1.0
 */

 /**
  * Get patterns content.
  *
  * @param string $file_name Filename.
  * @return string
  */
function phone_accessories_store_get_pattern_content( $file_name ) {
	ob_start();
	include get_theme_file_path( '/patterns/' . $file_name . '.php' );
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}

/**
 * Registers block patterns and categories.
 *
 * @since Phone Accessories Store 1.0
 *
 * @return void
 */
function phone_accessories_store_register_block_patterns() {

	$patterns = array(
		'header-default' => array(
			'title'      => __( 'Default header', 'phone-accessories-store' ),
			'categories' => array( 'phone-accessories-store-headers' ),
			'blockTypes' => array( 'parts/header' ),
		),
		'footer-default' => array(
			'title'      => __( 'Default footer', 'phone-accessories-store' ),
			'categories' => array( 'phone-accessories-store-footers' ),
			'blockTypes' => array( 'parts/footer' ),
		),
		'home-banner' => array(
			'title'      => __( 'Home Banner', 'phone-accessories-store' ),
			'categories' => array( 'phone-accessories-store-banner' ),
		),
		'product-section' => array(
			'title'      => __( 'Product Sections', 'phone-accessories-store' ),
			'categories' => array( 'phone-accessories-store-product-section' ),
		),
		'primary-sidebar' => array(
			'title'    => __( 'Primary Sidebar', 'phone-accessories-store' ),
			'categories' => array( 'phone-accessories-store-sidebars' ),
		),
		'hidden-404' => array(
			'title'    => __( '404 content', 'phone-accessories-store' ),
			'categories' => array( 'phone-accessories-store-pages' ),
		),
		'post-listing-single-column' => array(
			'title'    => __( 'Post Single Column', 'phone-accessories-store' ),
			//'inserter' => false,
			'categories' => array( 'phone-accessories-store-query' ),
		),
		'post-listing-two-column' => array(
			'title'    => __( 'Post Two Column', 'phone-accessories-store' ),
			//'inserter' => false,
			'categories' => array( 'phone-accessories-store-query' ),
		),
		'post-listing-three-column' => array(
			'title'    => __( 'Post Three Column', 'phone-accessories-store' ),
			//'inserter' => false,
			'categories' => array( 'phone-accessories-store-query' ),
		),
		'post-listing-four-column' => array(
			'title'    => __( 'Post Four Column', 'phone-accessories-store' ),
			//'inserter' => false,
			'categories' => array( 'phone-accessories-store-query' ),
		),
		'feature-post-column' => array(
			'title'    => __( 'Feature Post Column', 'phone-accessories-store' ),
			//'inserter' => false,
			'categories' => array( 'phone-accessories-store-query' ),
		),
		'comment-section-1' => array(
			'title'    => __( 'Comment Section 1', 'phone-accessories-store' ),
			'categories' => array( 'phone-accessories-store-comment-sections' ),
		),
		'cover-with-post-title' => array(
			'title'    => __( 'Cover With Post Title', 'phone-accessories-store' ),
			'categories' => array( 'phone-accessories-store-banner-sections' ),
		),
		'theme-button' => array(
			'title'    => __( 'Theme Button', 'phone-accessories-store' ),
			'categories' => array( 'phone-accessories-store-theme-button' ),
		),
	);

	$block_pattern_categories = array(
		'phone-accessories-store-footers' => array( 'label' => __( 'Footers', 'phone-accessories-store' ) ),
		'phone-accessories-store-headers' => array( 'label' => __( 'Headers', 'phone-accessories-store' ) ),
		'phone-accessories-store-pages'   => array( 'label' => __( 'Pages', 'phone-accessories-store' ) ),
		'phone-accessories-store-query'   => array( 'label' => __( 'Query', 'phone-accessories-store' ) ),
		'phone-accessories-store-sidebars'   => array( 'label' => __( 'Sidebars', 'phone-accessories-store' ) ),
		'phone-accessories-store-banner'   => array( 'label' => __( 'Banner Sections', 'phone-accessories-store' ) ),
		'phone-accessories-store-product-section'   => array( 'label' => __( 'Product Section', 'phone-accessories-store' ) ),
		'phone-accessories-store-comment-section'   => array( 'label' => __( 'Comment Sections', 'phone-accessories-store' ) ),
		'phone-accessories-store-theme-button'   => array( 'label' => __( 'Theme Button Sections', 'phone-accessories-store' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Phone Accessories Store 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'phone_accessories_store_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Phone Accessories Store 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$patterns = apply_filters( 'phone_accessories_store_block_patterns', $patterns );

	foreach ( $patterns as $block_pattern => $pattern ) {
		$pattern['content'] = phone_accessories_store_get_pattern_content( $block_pattern );
		register_block_pattern(
			'phone-accessories-store/' . $block_pattern,
			$pattern
		);
	}
}
add_action( 'init', 'phone_accessories_store_register_block_patterns', 9 );
