<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package grocery-and-organic-store
 * @since 1.0.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function grocery_and_organic_store_register_block_styles() {
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'grocery-and-organic-store-navigation-primary',
				'label' => __( 'Hover : Primary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'grocery-and-organic-store-navigation-secondary',
				'label' => __( 'Hover : Secondary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'grocery-and-organic-store-navigation-terniary',
				'label' => __( 'Hover : Ternairy', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/page-list',
			array(
				'name'  => 'grocery-and-organic-store-page-list-hidden',
				'label' => __( 'List Style : Hidden', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/search',
			array(
				'name'  => 'grocery-and-organic-store-search-primary',
				'label' => __( 'Hover : Primary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/search',
			array(
				'name'  => 'grocery-and-organic-store-search-secondary',
				'label' => __( 'Hover : Secondary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/search',
			array(
				'name'  => 'grocery-and-organic-store-search-terniary',
				'label' => __( 'Hover : Terniary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/search',
			array(
				'name'  => 'grocery-and-organic-store-search-rounded',
				'label' => __( 'Hover : Rounded', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'grocery-and-organic-store-button-primary',
				'label' => __( 'Hover : Primary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'grocery-and-organic-store-button-secondary',
				'label' => __( 'Hover : Secondary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'grocery-and-organic-store-button-terniary',
				'label' => __( 'Hover : Terniary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'grocery-and-organic-store-button-arrow',
				'label' => __( 'Button with Arrow', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'grocery-and-organic-store-button-up-arrow',
				'label' => __( 'Button with Up Arrow', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'grocery-and-organic-store-read-more-primary',
				'label' => __( 'Hover : Primary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'grocery-and-organic-store-read-more-secondary',
				'label' => __( 'Hover : Secondary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'grocery-and-organic-store-read-more-terniary',
				'label' => __( 'Hover : Ternairy', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'title-hover-primary',
				'label' => __( 'Hover : Primary Underline', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'title-hover-secondary',
				'label' => __( 'Hover : Secondary Underline', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'title-hover-terniary',
				'label' => __( 'Hover : Terniary Underline', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/categories',
			array(
				'name'  => 'grocery-and-organic-store-categories-primary',
				'label' => __( 'Primary : Space Between', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/categories',
			array(
				'name'  => 'grocery-and-organic-store-categories-secondary',
				'label' => __( 'Secondary : Space Between', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/categories',
			array(
				'name'  => 'grocery-and-organic-store-categories-terniary',
				'label' => __( 'Ternairy : Space Between', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'grocery-and-organic-store-boxshadow-light',
				'label' => __( 'Box Shadow : Light', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'grocery-and-organic-store-boxshadow-medium',
				'label' => __( 'Box Shadow : Medium', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'grocery-and-organic-store-boxshadow-large',
				'label' => __( 'Box Shadow : Large', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'grocery-and-organic-store-boxshadow-hover',
				'label' => __( 'Hover : Box Shadow', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'grocery-and-organic-store-overflow-hidden',
				'label' => __( 'Overflow : Hidden', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'grocery-and-organic-store-boxshadow-light',
				'label' => __( 'Box Shadow : Light', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'grocery-and-organic-store-boxshadow-medium',
				'label' => __( 'Box Shadow : Medium', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'grocery-and-organic-store-boxshadow-large',
				'label' => __( 'Box Shadow : Large', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'grocery-and-organic-store-boxshadow-hover',
				'label' => __( 'Hover : Box Shadow', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'grocery-and-organic-store-overflow-hidden',
				'label' => __( 'Overflow : Hidden', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'grocery-and-organic-store-boxshadow-light',
				'label' => __( 'Box Shadow : Light', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'grocery-and-organic-store-boxshadow-medium',
				'label' => __( 'Box Shadow : Medium', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'grocery-and-organic-store-boxshadow-large',
				'label' => __( 'Box Shadow : Large', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'grocery-and-organic-store-boxshadow-hover',
				'label' => __( 'Hover : Box Shadow', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'grocery-and-organic-store-overflow-hidden',
				'label' => __( 'Overflow : Hidden', 'grocery-and-organic-store' ),
			)
		);

		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-primary-background',
				'label' => __( 'Background : Primary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-secondary-background',
				'label' => __( 'Background : Secondary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-terniary-background',
				'label' => __( 'Background : Terniary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-mixed-background',
				'label' => __( 'Background : Mixed', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-faded-background',
				'label' => __( 'Background : Faded & Round', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocery-and-organic-store-hover-zoom-in',
				'label' => __( 'Hover : Zoom In', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocery-and-organic-store-hover-zoom-out',
				'label' => __( 'Hover : Zoom Out', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocery-and-organic-store-animation-spin',
				'label' => __( 'Spin Animation', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocery-and-organic-store-animation-pulse',
				'label' => __( 'Pulse Animation', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocery-and-organic-store-hover-animation-spin',
				'label' => __( 'Hover : Spin Animation', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocery-and-organic-store-hover-animation-pulse',
				'label' => __( 'Hover : Pulse Animation', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/post-featured-image',
			array(
				'name'  => 'grocery-and-organic-store-hover-zoom-in',
				'label' => __( 'Hover : Zoom In', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/post-featured-image',
			array(
				'name'  => 'grocery-and-organic-store-hover-zoom-out',
				'label' => __( 'Hover : Zoom Out', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'grocery-and-organic-store-hover-zoom-in',
				'label' => __( 'Hover : Zoom In', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'grocery-and-organic-store-hover-zoom-out',
				'label' => __( 'Hover : Zoom Out', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/post-date',
			array(
				'name'  => 'grocery-and-organic-store-date-icon-dark',
				'label' => __( 'Icon : Filled', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/post-date',
			array(
				'name'  => 'grocery-and-organic-store-date-icon-light',
				'label' => __( 'Icon : Outline', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/post-author-name',
			array(
				'name'  => 'grocery-and-organic-store-author-icon-dark',
				'label' => __( 'Icon : Filled', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/post-author-name',
			array(
				'name'  => 'grocery-and-organic-store-author-icon-light',
				'label' => __( 'Icon : Outline', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'grocery-and-organic-store-list-style-none',
				'label' => __( 'List Style : None', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/query-pagination',
			array(
				'name'  => 'grocery-and-organic-store-pagination-primary',
				'label' => __( 'Pagination : Primary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/query-pagination',
			array(
				'name'  => 'grocery-and-organic-store-pagination-secondary',
				'label' => __( 'Pagination : Secondary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'core/query-pagination',
			array(
				'name'  => 'grocery-and-organic-store-pagination-terniary',
				'label' => __( 'Pagination : Terniary', 'grocery-and-organic-store' ),
			)
		);

		// WooCommerce Blocks.
		register_block_style(
			'woocommerce/product-stock-indicator',
			array(
				'name'  => 'grocery-and-organic-store-wc-custom-psi-rounded',
				'label' => __( 'Rounded Borders', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-stock-indicator',
			array(
				'name'  => 'grocery-and-organic-store-wc-custom-psi-pointed',
				'label' => __( 'Pointed Border', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-button',
			array(
				'name'  => 'grocery-and-organic-store-wc-btn-primary',
				'label' => __( 'Hover : Primary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-button',
			array(
				'name'  => 'grocery-and-organic-store-wc-btn-secondary',
				'label' => __( 'Hover : Secondary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-button',
			array(
				'name'  => 'grocery-and-organic-store-wc-btn-terniary',
				'label' => __( 'Hover : Terniary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-button',
			array(
				'name'  => 'grocery-and-organic-store-wc-btn-faded',
				'label' => __( 'Hover : Faded', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-button',
			array(
				'name'  => 'grocery-and-organic-store-wc-btn-icon',
				'label' => __( 'Cart Icon', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-image',
			array(
				'name'  => 'grocery-and-organic-store-hover-zoom-in',
				'label' => __( 'Hover : Zoom In', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-image',
			array(
				'name'  => 'grocery-and-organic-store-hover-zoom-out',
				'label' => __( 'Hover : Zoom Out', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-image',
			array(
				'name'  => 'grocery-and-organic-store-sales-badge-primary',
				'label' => __( 'Sales Badge : Primary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-image',
			array(
				'name'  => 'grocery-and-organic-store-sales-badge-secondary',
				'label' => __( 'Sales Badge : Secondary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-image',
			array(
				'name'  => 'grocery-and-organic-store-sales-badge-terniary',
				'label' => __( 'Sales Badge : Terniary', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-price',
			array(
				'name'  => 'grocery-and-organic-store-wc-hide-strikeout',
				'label' => __( 'Hide Strikeout Price', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-price',
			array(
				'name'  => 'grocery-and-organic-store-wc-strikeout-primary',
				'label' => __( 'Primary Strikeout Price', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-price',
			array(
				'name'  => 'grocery-and-organic-store-wc-strikeout-secondary',
				'label' => __( 'Secondary Strikeout Price', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-price',
			array(
				'name'  => 'grocery-and-organic-store-wc-strikeout-terniary',
				'label' => __( 'Terniary Strikeout Price', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-price',
			array(
				'name'  => 'grocery-and-organic-store-wc-strikeout-foreground',
				'label' => __( 'Foreground Strikeout Price', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-categories',
			array(
				'name'  => 'grocery-and-organic-store-wc-categories-primary',
				'label' => __( 'Primary Border', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-categories',
			array(
				'name'  => 'grocery-and-organic-store-wc-categories-secondary',
				'label' => __( 'Secondary Border', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-categories',
			array(
				'name'  => 'grocery-and-organic-store-wc-categories-terniary',
				'label' => __( 'Terniary Border', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/product-categories',
			array(
				'name'  => 'grocery-and-organic-store-wc-categories-border',
				'label' => __( 'Faded Border', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/catalog-sorting',
			array(
				'name'  => 'grocery-and-organic-store-wc-sorting-primary',
				'label' => __( 'Primary Background', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/catalog-sorting',
			array(
				'name'  => 'grocery-and-organic-store-wc-sorting-secondary',
				'label' => __( 'Secondary Background', 'grocery-and-organic-store' ),
			)
		);
		register_block_style(
			'woocommerce/catalog-sorting',
			array(
				'name'  => 'grocery-and-organic-store-wc-sorting-terniary',
				'label' => __( 'Terniary Background', 'grocery-and-organic-store' ),
			)
		);
	}
	add_action( 'init', 'grocery_and_organic_store_register_block_styles' );
}
