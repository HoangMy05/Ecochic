<?php

class Super_Mart_Store_Customizer_Notify {

	private $config = array(); // Declare $config property
	
	private $super_mart_store_recommended_actions;
	
	private $recommended_plugins;
	
	private static $instance;
	
	private $super_mart_store_recommended_actions_title;
	
	private $super_mart_store_recommended_plugins_title;
	
	private $dismiss_button;
	
	private $super_mart_store_install_button_label;
	
	private $super_mart_store_activate_button_label;
	
	private $super_mart_store_deactivate_button_label;

	
	public static function init( $config ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Super_Mart_Store_Customizer_Notify ) ) {
			self::$instance = new Super_Mart_Store_Customizer_Notify;
			if ( ! empty( $config ) && is_array( $config ) ) {
				self::$instance->config = $config;
				self::$instance->setup_config();
				self::$instance->setup_actions();
			}
		}

	}

	
	public function setup_config() {

		global $super_mart_store_customizer_notify_recommended_plugins;
		global $super_mart_store_customizer_notify_super_mart_store_recommended_actions;

		global $super_mart_store_install_button_label;
		global $super_mart_store_activate_button_label;
		global $super_mart_store_deactivate_button_label;

		$this->super_mart_store_recommended_actions = isset( $this->config['super_mart_store_recommended_actions'] ) ? $this->config['super_mart_store_recommended_actions'] : array();
		$this->recommended_plugins = isset( $this->config['recommended_plugins'] ) ? $this->config['recommended_plugins'] : array();

		$this->super_mart_store_recommended_actions_title = isset( $this->config['super_mart_store_recommended_actions_title'] ) ? $this->config['super_mart_store_recommended_actions_title'] : '';
		$this->super_mart_store_recommended_plugins_title = isset( $this->config['super_mart_store_recommended_plugins_title'] ) ? $this->config['super_mart_store_recommended_plugins_title'] : '';
		$this->dismiss_button            = isset( $this->config['dismiss_button'] ) ? $this->config['dismiss_button'] : '';

		$super_mart_store_customizer_notify_recommended_plugins = array();
		$super_mart_store_customizer_notify_super_mart_store_recommended_actions = array();

		if ( isset( $this->recommended_plugins ) ) {
			$super_mart_store_customizer_notify_recommended_plugins = $this->recommended_plugins;
		}

		if ( isset( $this->super_mart_store_recommended_actions ) ) {
			$super_mart_store_customizer_notify_super_mart_store_recommended_actions = $this->super_mart_store_recommended_actions;
		}

		$super_mart_store_install_button_label    = isset( $this->config['super_mart_store_install_button_label'] ) ? $this->config['super_mart_store_install_button_label'] : '';
		$super_mart_store_activate_button_label   = isset( $this->config['super_mart_store_activate_button_label'] ) ? $this->config['super_mart_store_activate_button_label'] : '';
		$super_mart_store_deactivate_button_label = isset( $this->config['super_mart_store_deactivate_button_label'] ) ? $this->config['super_mart_store_deactivate_button_label'] : '';

	}

	
	public function setup_actions() {

		// Register the section
		add_action( 'customize_register', array( $this, 'super_mart_store_plugin_notification_customize_register' ) );

		// Enqueue scripts and styles
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'super_mart_store_customizer_notify_scripts_for_customizer' ), 0 );

		/* ajax callback for dismissable recommended actions */
		add_action( 'wp_ajax_quality_customizer_notify_dismiss_action', array( $this, 'super_mart_store_customizer_notify_dismiss_recommended_action_callback' ) );

		add_action( 'wp_ajax_ti_customizer_notify_dismiss_recommended_plugins', array( $this, 'super_mart_store_customizer_notify_dismiss_recommended_plugins_callback' ) );

	}

	
	public function super_mart_store_customizer_notify_scripts_for_customizer() {

		wp_enqueue_style( 'super-mart-store-customizer-notify-css', get_template_directory_uri() . '/core/includes/customizer-notice/css/super-mart-store-customizer-notify.css', array());

		wp_enqueue_style( 'plugin-install' );
		wp_enqueue_script( 'plugin-install' );
		wp_add_inline_script( 'plugin-install', 'var pagenow = "customizer";' );

		wp_enqueue_script( 'updates' );

		wp_enqueue_script( 'super-mart-store-customizer-notify-js', get_template_directory_uri() . '/core/includes/customizer-notice/js/super-mart-store-customizer-notify.js', array( 'customize-controls' ));
		wp_localize_script(
			'super-mart-store-customizer-notify-js', 'supermartstoreCustomizercompanionObject', array(
				'ajaxurl'            => admin_url( 'admin-ajax.php' ),
				'template_directory' => get_template_directory_uri(),
				'base_path'          => admin_url(),
				'activating_string'  => __( 'Activating', 'super-mart-store' ),
			)
		);

	}

	
	public function super_mart_store_plugin_notification_customize_register( $wp_customize ) {

		
		require_once get_template_directory() . '/core/includes/customizer-notice/super-mart-store-customizer-notify-section.php';

		$wp_customize->register_section_type( 'Super_Mart_Store_Customizer_Notify_Section' );

		$wp_customize->add_section(
			new Super_Mart_Store_Customizer_Notify_Section(
				$wp_customize,
				'super-mart-store-customizer-notify-section',
				array(
					'title'          => $this->super_mart_store_recommended_actions_title,
					'plugin_text'    => $this->super_mart_store_recommended_plugins_title,
					'dismiss_button' => $this->dismiss_button,
					'priority'       => 0,
				)
			)
		);

	}

	
	public function super_mart_store_customizer_notify_dismiss_recommended_action_callback() {

		global $super_mart_store_customizer_notify_super_mart_store_recommended_actions;

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */ 

		if ( ! empty( $action_id ) ) {
			
			if ( get_option( 'super_mart_store_customizer_notify_show' ) ) {

				$super_mart_store_customizer_notify_show_super_mart_store_recommended_actions = get_option( 'super_mart_store_customizer_notify_show' );
				switch ( $_GET['todo'] ) {
					case 'add':
						$super_mart_store_customizer_notify_show_super_mart_store_recommended_actions[ $action_id ] = true;
						break;
					case 'dismiss':
						$super_mart_store_customizer_notify_show_super_mart_store_recommended_actions[ $action_id ] = false;
						break;
				}
				update_option( 'super_mart_store_customizer_notify_show', $super_mart_store_customizer_notify_show_super_mart_store_recommended_actions );

				
			} else {
				$super_mart_store_customizer_notify_show_super_mart_store_recommended_actions = array();
				if ( ! empty( $super_mart_store_customizer_notify_super_mart_store_recommended_actions ) ) {
					foreach ( $super_mart_store_customizer_notify_super_mart_store_recommended_actions as $super_mart_store_lite_customizer_notify_recommended_action ) {
						if ( $super_mart_store_lite_customizer_notify_recommended_action['id'] == $action_id ) {
							$super_mart_store_customizer_notify_show_super_mart_store_recommended_actions[ $super_mart_store_lite_customizer_notify_recommended_action['id'] ] = false;
						} else {
							$super_mart_store_customizer_notify_show_super_mart_store_recommended_actions[ $super_mart_store_lite_customizer_notify_recommended_action['id'] ] = true;
						}
					}
					update_option( 'super_mart_store_customizer_notify_show', $super_mart_store_customizer_notify_show_super_mart_store_recommended_actions );
				}
			}
		}
		die(); 
	}

	
	public function super_mart_store_customizer_notify_dismiss_recommended_plugins_callback() {

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */

		if ( ! empty( $action_id ) ) {

			$super_mart_store_lite_customizer_notify_show_recommended_plugins = get_option( 'super_mart_store_customizer_notify_show_recommended_plugins' );

			switch ( $_GET['todo'] ) {
				case 'add':
					$super_mart_store_lite_customizer_notify_show_recommended_plugins[ $action_id ] = false;
					break;
				case 'dismiss':
					$super_mart_store_lite_customizer_notify_show_recommended_plugins[ $action_id ] = true;
					break;
			}
			update_option( 'super_mart_store_customizer_notify_show_recommended_plugins', $super_mart_store_lite_customizer_notify_show_recommended_plugins );
		}
		die(); 
	}

}
