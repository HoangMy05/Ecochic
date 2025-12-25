<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Super_Mart_Store_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/core/upgrade-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Super_Mart_Store_Customize_Section_Pro' );

		// Add the PRO Upgrade section.
		$manager->add_section(
		    new Super_Mart_Store_Customize_Section_Pro(
		        $manager,
		        'super_mart_store_upgrade_pro',
		        array(
		            'title'         => esc_html__( 'Super Mart Store PRO', 'super-mart-store' ),
		            'pro_text'      => esc_html__( 'Super Mart PRO', 'super-mart-store' ),
		            'pro_url'       => esc_url( SUPER_MART_STORE_BUY_NOW ),
		            'demo_text'     => esc_html__( 'Demo', 'super-mart-store' ),
		            'demo_url'      => esc_url( SUPER_MART_STORE_DEMO_PRO ),
		            'support_text'  => esc_html__( 'Support', 'super-mart-store' ),
		            'support_url'   => esc_url( SUPER_MART_STORE_SUPPORT_FREE ),
		            'bundle_text'   => esc_html__( 'Get All Themes', 'super-mart-store' ),
		            'bundle_url'    => esc_url( SUPER_MART_STORE_THEME_BUNDLE ),
		            'lite_doc_text' => esc_html__( 'Lite Doc', 'super-mart-store' ),
		            'lite_doc_url'  => esc_url( SUPER_MART_STORE_DOCS_FREE ),
		            'review_text'   => esc_html__( 'Review', 'super-mart-store' ),
		            'review_url'    => esc_url( SUPER_MART_STORE_REVIEW_FREE ),
		            'priority'      => 1,
		        )
		    )
		);

	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script(
			'super-mart-store-customize-controls',
			trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js',
			array( 'customize-controls' )
		);

		wp_enqueue_style(
			'super-mart-store-customize-controls',
			trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css'
		);
	}
}

// Doing this customizer thang!
Super_Mart_Store_Customize::get_instance();
