<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Feminine_Store_Rental_Customize {

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
		$manager->register_section_type( 'Feminine_Store_Rental_Customize_Section_Pro' );

		// Add the PRO Upgrade section.
		$manager->add_section(
		    new Feminine_Store_Rental_Customize_Section_Pro(
		        $manager,
		        'feminine_store_rental_upgrade_pro',
		        array(
		            'title'         => esc_html__( 'Feminine Store Rental PRO', 'feminine-store-rental' ),
		            'pro_text'      => esc_html__( 'Feminine Store PRO', 'feminine-store-rental' ),
		            'pro_url'       => esc_url( FEMININE_STORE_RENTAL_BUY_NOW ),
		            'demo_text'     => esc_html__( 'Demo', 'feminine-store-rental' ),
		            'demo_url'      => esc_url( FEMININE_STORE_RENTAL_DEMO_PRO ),
		            'support_text'  => esc_html__( 'Support', 'feminine-store-rental' ),
		            'support_url'   => esc_url( FEMININE_STORE_RENTAL_SUPPORT_FREE ),
		            'bundle_text'   => esc_html__( 'Get All Themes', 'feminine-store-rental' ),
		            'bundle_url'    => esc_url( FEMININE_STORE_RENTAL_THEME_BUNDLE ),
		            'lite_doc_text' => esc_html__( 'Lite Doc', 'feminine-store-rental' ),
		            'lite_doc_url'  => esc_url( FEMININE_STORE_RENTAL_DOCS_FREE ),
		            'review_text'   => esc_html__( 'Review', 'feminine-store-rental' ),
		            'review_url'    => esc_url( FEMININE_STORE_RENTAL_REVIEW_FREE ),
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
			'feminine-store-rental-customize-controls',
			trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js',
			array( 'customize-controls' )
		);

		wp_enqueue_style(
			'feminine-store-rental-customize-controls',
			trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css'
		);
	}
}

// Doing this customizer thang!
Feminine_Store_Rental_Customize::get_instance();
