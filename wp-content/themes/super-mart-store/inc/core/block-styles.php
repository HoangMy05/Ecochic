<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Super Mart Store
 * @since 1.0.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function super_mart_store_register_block_styles() {
		// Box shadow for columns, column, group and image
		register_block_style(
			'core/columns',
			array(
				'name'  => 'bk-box-shadow',
				'label' => __( 'Box Shadow', 'super-mart-store' )
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'bk-box-shadow',
				'label' => __( 'Box Shadow', 'super-mart-store' )
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'bk-box-shadow-medium',
				'label' => __( 'Box Shadow Medium', 'super-mart-store' )
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'bk-box-shadow-large',
				'label' => __( 'Box Shadow Large', 'super-mart-store' )
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'bk-box-shadow',
				'label' => __( 'Box Shadow', 'super-mart-store' )
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'bk-box-shadow-medium',
				'label' => __( 'Box Shadow Medium', 'super-mart-store' )
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'bk-box-shadow-large',
				'label' => __( 'Box Shadow Larger', 'super-mart-store' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'bk-box-shadow',
				'label' => __( 'Box Shadow', 'super-mart-store' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'bk-box-shadow-medium',
				'label' => __( 'Box Shadow Medium', 'super-mart-store' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'bk-box-shadow-larger',
				'label' => __( 'Box Shadow Large', 'super-mart-store' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'bk-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'super-mart-store' )
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'bk-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'super-mart-store' )
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'bk-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'super-mart-store' )
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'bk-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'super-mart-store' )
			)
		);

		// Secondary button
		register_block_style(
			'core/button',
			array(
				'name'   => 'bk-button-secondary',
				'label'  => __( 'Secondary', 'super-mart-store' )
			)
		);
	}
	add_action( 'init', 'super_mart_store_register_block_styles' );
}
