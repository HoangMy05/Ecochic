<?php
/**
 * Boutique Designer Shop: Customizer
 *
 * @subpackage Boutique Designer Shop
 * @since 1.0
 */

function boutique_designer_shop_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/assets/css/customizer.css');

	// fontawesome icon-picker

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

  	require get_parent_theme_file_path( 'inc/switch/control_switch.php' );

  	require get_parent_theme_file_path( 'inc/custom-control.php' );

  	//Register the sortable control type.
	$wp_customize->register_control_type( 'Boutique_Designer_Shop_Control_Sortable' );

  	// Add homepage customizer file
  	require get_template_directory() . '/inc/customizer-home-page.php';

  	add_action( 'customize_controls_enqueue_scripts', function() {
    	wp_enqueue_script(
	        'boutique-designer-shop-customizer-reset',
	        get_theme_file_uri() . '/assets/js/color-reset.js', // Ensure the JS file exists in your theme
	        array( 'customize-controls', 'jquery' ),
	        '1.0',
	        true
    	);
	} );
  	
	// pro section
 	$wp_customize->add_section('boutique_designer_shop_pro', array(
        'title'    => __('UPGRADE DESIGNER SHOP PREMIUM', 'boutique-designer-shop'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('boutique_designer_shop_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Boutique_Designer_Shop_Pro_Control($wp_customize, 'boutique_designer_shop_pro', array(
        'label'    => __('DESIGNER SHOP PREMIUM', 'boutique-designer-shop'),
        'section'  => 'boutique_designer_shop_pro',
        'settings' => 'boutique_designer_shop_pro',
        'priority' => 1,
    )));

    // site-identity
	$wp_customize->add_setting('boutique_designer_shop_logo_title',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_logo_title',
			array(
				'settings'        => 'boutique_designer_shop_logo_title',
				'section'         => 'title_tagline',
				'label'           => __( 'Show Site Title', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting('boutique_designer_shop_site_title_fontsize',array(
		'default'=> 25,
		'transport' => 'refresh',
		'sanitize_callback' => 'boutique_designer_shop_sanitize_integer'
	));
	$wp_customize->add_control(new Boutique_Designer_Shop_Slider_Custom_Control( $wp_customize, 'boutique_designer_shop_site_title_fontsize',array(
		'label' => esc_html__( 'Site Title font size','boutique-designer-shop' ),
		'section'=> 'title_tagline',
		'settings'=>'boutique_designer_shop_site_title_fontsize',
		'input_attrs' => array(
			'reset'			   => 25,
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));
	$wp_customize->add_setting('boutique_designer_shop_logo_text',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => 'off',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_logo_text',
			array(
				'settings'        => 'boutique_designer_shop_logo_text',
				'section'         => 'title_tagline',
				'label'           => __( 'show Site Tagline', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting('boutique_designer_shop_site_tagline_fontsize',array(
		'default'=> 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'boutique_designer_shop_sanitize_integer'
	));
	$wp_customize->add_control(new Boutique_Designer_Shop_Slider_Custom_Control( $wp_customize, 'boutique_designer_shop_site_tagline_fontsize',array(
		'label' => esc_html__( 'Site Tagline font size','boutique-designer-shop' ),
		'section'=> 'title_tagline',
		'settings'=>'boutique_designer_shop_site_tagline_fontsize',
		'input_attrs' => array(
			'reset'			   => 15,
            'step'             => 1,
			'min'              => 0,
			'max'              => 30,
        ),
	)));
    $wp_customize->add_setting('boutique_designer_shop_logo_max_height',array(
		'default'=> '100',
		'transport' => 'refresh',
		'sanitize_callback' => 'boutique_designer_shop_sanitize_integer'
	));
	$wp_customize->add_control(new Boutique_Designer_Shop_Slider_Custom_Control( $wp_customize, 'boutique_designer_shop_logo_max_height',array(
		'label'	=> esc_html__('Logo Width','boutique-designer-shop'),
		'section'=> 'title_tagline',
		'settings'=>'boutique_designer_shop_logo_max_height',
		'input_attrs' => array(
			'reset'			   => 100,
            'step'             => 1,
			'min'              => 0,
			'max'              => 250,
        ),
        'priority' => 9,
	)));

	//colors
	if ( $wp_customize->get_section( 'colors' ) ) {
        $wp_customize->get_section( 'colors' )->title = __( 'Global Colors', 'boutique-designer-shop' );
        $wp_customize->get_section( 'colors' )->priority = 2;
    }

    $wp_customize->add_setting( 'boutique_designer_shop_reset_colors', array(
	    'default'           => '',
	    'sanitize_callback' => 'sanitize_text_field',
	    'transport'         => 'postMessage', 
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'boutique_designer_shop_reset_colors', array(
	    'label'       => esc_html__( 'Reset Colors', 'boutique-designer-shop' ),
	    'section'     => 'colors',
	    'settings'    => 'boutique_designer_shop_reset_colors',
	    'type'        => 'button',
	    'input_attrs' => array(
	        'class' => 'button color-reset-btn',
	        'onclick' => 'resetColorsToDefault();', // Attach custom JS function
	    ),
	    'priority' => '2'
	) ) );

    $wp_customize->add_setting( 'boutique_designer_shop_global_color_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_global_color_heading', array(
			'label'       => esc_html__( 'Global Colors', 'boutique-designer-shop' ),
			'section'     => 'colors',
			'settings'    => 'boutique_designer_shop_global_color_heading',
			'priority'       => 1,

	) ) );

	$wp_customize->add_setting('boutique_designer_shop_heading_color', array(
	    'default' => '#121212',
	    'sanitize_callback' => 'sanitize_hex_color',
	    'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'boutique_designer_shop_heading_color', array(
	    'section' => 'colors',
	    'label' => esc_html__('Theme Color', 'boutique-designer-shop'),
	 
	)));

	$wp_customize->add_setting('boutique_designer_shop_text_color', array(
	    'default' => '#121212',
	    'sanitize_callback' => 'sanitize_hex_color',
	    'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'boutique_designer_shop_text_color', array(
	    'section' => 'colors',
	    'label' => esc_html__('Theme Text Color', 'boutique-designer-shop'),
	 
	)));

	$wp_customize->add_setting('boutique_designer_shop_second_color', array(
	    'default' => '#f4eee9',
	    'sanitize_callback' => 'sanitize_hex_color',
	    'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'boutique_designer_shop_second_color', array(
	    'section' => 'colors',
	    'label' => esc_html__('theme second color', 'boutique-designer-shop'),
	 
	)));

	$wp_customize->add_setting('boutique_designer_shop_footer_bg', array(
	    'default' => '#121212',
	    'sanitize_callback' => 'sanitize_hex_color',
	    'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'boutique_designer_shop_footer_bg', array(
	    'section' => 'colors',
	    'label' => esc_html__('Header/Footer Bg', 'boutique-designer-shop'),
	)));

	$wp_customize->add_setting('boutique_designer_shop_post_bg', array(
	    'default' => '#ffffff',
	    'sanitize_callback' => 'sanitize_hex_color',
	    'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'boutique_designer_shop_post_bg', array(
	    'section' => 'colors',
	    'label' => esc_html__('White Color', 'boutique-designer-shop'),
	)));

	// Typography
	$wp_customize->add_section( 'boutique_designer_shop_typography_settings', array(
		'title'       => __( 'Typography Settings', 'boutique-designer-shop' ),
		'priority'       => 2,
	) );
	$font_choices = array(
		'' => 'Select',
		'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
		'Open Sans:400italic,700italic,400,700' => 'Open Sans',
		'Oswald:400,700' => 'Oswald',
		'Playfair Display:400,700,400italic' => 'Playfair Display',
		'Montserrat:400,700' => 'Montserrat',
		'Raleway:400,700' => 'Raleway',
		'Droid Sans:400,700' => 'Droid Sans',
		'Lato:400,700,400italic,700italic' => 'Lato',
		'Arvo:400,700,400italic,700italic' => 'Arvo',
		'Lora:400,700,400italic,700italic' => 'Lora',
		'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
		'Oxygen:400,300,700' => 'Oxygen',
		'PT Serif:400,700' => 'PT Serif',
		'PT Sans:400,700,400italic,700italic' => 'PT Sans',
		'PT Sans Narrow:400,700' => 'PT Sans Narrow',
		'Cabin:400,700,400italic' => 'Cabin',
		'Fjalla One:400' => 'Fjalla One',
		'Francois One:400' => 'Francois One',
		'Josefin Sans:400,300,600,700' => 'Josefin Sans',
		'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
		'Arimo:400,700,400italic,700italic' => 'Arimo',
		'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
		'Bitter:400,700,400italic' => 'Bitter',
		'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
		'Roboto:400,400italic,700,700italic' => 'Roboto',
		'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
		'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
		'Roboto Slab:400,700' => 'Roboto Slab',
		'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
		'Rokkitt:400' => 'Rokkitt',
	);
	$wp_customize->add_setting( 'boutique_designer_shop_section_typo_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_typo_heading', array(
		'label'       => esc_html__( 'Typography Setting', 'boutique-designer-shop' ),
		'section'     => 'boutique_designer_shop_typography_settings',
		'settings'    => 'boutique_designer_shop_section_typo_heading',
	) ) );
	$wp_customize->add_setting( 'boutique_designer_shop_headings_text', array(
		'sanitize_callback' => 'boutique_designer_shop_sanitize_fonts',
	));
	$wp_customize->add_control( 'boutique_designer_shop_headings_text', array(
		'type' => 'select',
		'description' => __('Select your suitable font for the headings.', 'boutique-designer-shop'),
		'section' => 'boutique_designer_shop_typography_settings',
		'choices' => $font_choices
	));
	$wp_customize->add_setting( 'boutique_designer_shop_body_text', array(
		'sanitize_callback' => 'boutique_designer_shop_sanitize_fonts'
	));
	$wp_customize->add_control( 'boutique_designer_shop_body_text', array(
		'type' => 'select',
		'description' => __( 'Select your suitable font for the body.', 'boutique-designer-shop' ),
		'section' => 'boutique_designer_shop_typography_settings',
		'choices' => $font_choices
	) );

    // Theme General Settings
    $wp_customize->add_section('boutique_designer_shop_theme_settings',array(
        'title' => __('Theme General Settings', 'boutique-designer-shop'),
        'priority' => 2,
    ) );
    $wp_customize->add_setting( 'boutique_designer_shop_sticky_header_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_sticky_header_heading', array(
		'label'       => esc_html__( 'Sticky Header Setting', 'boutique-designer-shop' ),
		'section'     => 'boutique_designer_shop_theme_settings',
		'settings'    => 'boutique_designer_shop_sticky_header_heading',
	) ) );
    $wp_customize->add_setting(
		'boutique_designer_shop_sticky_header',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => 'off',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_sticky_header',
			array(
				'settings'        => 'boutique_designer_shop_sticky_header',
				'section'         => 'boutique_designer_shop_theme_settings',
				'label'           => __( 'Show Sticky Header', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting( 'boutique_designer_shop_loader_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_loader_heading', array(
		'label'       => esc_html__( 'Loader Setting', 'boutique-designer-shop' ),
		'section'     => 'boutique_designer_shop_theme_settings',
		'settings'    => 'boutique_designer_shop_loader_heading',
	) ) );
	$wp_customize->add_setting(
		'boutique_designer_shop_theme_loader',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => 'off',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_theme_loader',
			array(
				'settings'        => 'boutique_designer_shop_theme_loader',
				'section'         => 'boutique_designer_shop_theme_settings',
				'label'           => __( 'Show Site Loader', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting('boutique_designer_shop_loader_style',array(
        'default' => 'style_one',
        'sanitize_callback' => 'boutique_designer_shop_sanitize_choices'
	));
	$wp_customize->add_control('boutique_designer_shop_loader_style',array(
        'type' => 'select',
        'label' => __('Select Loader Design','boutique-designer-shop'),
        'section' => 'boutique_designer_shop_theme_settings',
        'choices' => array(
            'style_one' => __('Circle','boutique-designer-shop'),
            'style_two' => __('Bar','boutique-designer-shop'),
        ),
	) );
	$wp_customize->add_setting( 'boutique_designer_shop_theme_width_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_theme_width_heading', array(
		'label'       => esc_html__( 'Theme Width Setting', 'boutique-designer-shop' ),
		'section'     => 'boutique_designer_shop_theme_settings',
		'settings'    => 'boutique_designer_shop_theme_width_heading',
	) ) );
	$wp_customize->add_setting('boutique_designer_shop_width_options',array(
        'default' => 'full_width',
        'sanitize_callback' => 'boutique_designer_shop_sanitize_choices'
	));
	$wp_customize->add_control('boutique_designer_shop_width_options',array(
        'type' => 'select',
        'label' => __('Theme Width Option','boutique-designer-shop'),
        'section' => 'boutique_designer_shop_theme_settings',
        'choices' => array(
            'full_width' => __('fullwidth','boutique-designer-shop'),
            'container' => __('container','boutique-designer-shop'),
            'container_fluid' => __('container fluid','boutique-designer-shop'),
        ),
	) );
	$wp_customize->add_setting( 'boutique_designer_shop_menu_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_menu_heading', array(
		'label'       => esc_html__( 'Menu Setting', 'boutique-designer-shop' ),
		'section'     => 'boutique_designer_shop_theme_settings',
		'settings'    => 'boutique_designer_shop_menu_heading',
	) ) );
	$wp_customize->add_setting('boutique_designer_shop_menu_text_transform',array(
        'default' => 'UPPERCASE',
        'sanitize_callback' => 'boutique_designer_shop_sanitize_choices'
	));
	$wp_customize->add_control('boutique_designer_shop_menu_text_transform',array(
        'type' => 'select',
        'label' => __('Menus Text Transform','boutique-designer-shop'),
        'section' => 'boutique_designer_shop_theme_settings',
        'choices' => array(
            'CAPITALISE' => __('CAPITALISE','boutique-designer-shop'),
            'UPPERCASE' => __('UPPERCASE','boutique-designer-shop'),
            'LOWERCASE' => __('LOWERCASE','boutique-designer-shop'),
        ),
	) );
	$wp_customize->add_setting('boutique_designer_shop_menu_fontsize',array(
		'default'=> 14,
		'transport' => 'refresh',
		'sanitize_callback' => 'boutique_designer_shop_sanitize_integer'
	));
	$wp_customize->add_control(new Boutique_Designer_Shop_Slider_Custom_Control( $wp_customize, 'boutique_designer_shop_menu_fontsize',array(
		'label' => esc_html__( 'menu font size','boutique-designer-shop' ),
		'section'=> 'boutique_designer_shop_theme_settings',
		'settings'=>'boutique_designer_shop_menu_fontsize',
		'input_attrs' => array(
			'reset'			   => 14,
            'step'             => 1,
			'min'              => 0,
			'max'              => 20,
        ),
	)));
	$wp_customize->add_setting( 'boutique_designer_shop_section_scroll_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_scroll_heading', array(
		'label'       => esc_html__( 'Scroll Top Setting', 'boutique-designer-shop' ),
		'section'     => 'boutique_designer_shop_theme_settings',
		'settings'    => 'boutique_designer_shop_section_scroll_heading',
	) ) );
	$wp_customize->add_setting(
		'boutique_designer_shop_scroll_enable',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_scroll_enable',
			array(
				'settings'        => 'boutique_designer_shop_scroll_enable',
				'section'         => 'boutique_designer_shop_theme_settings',
				'label'           => __( 'show Scroll Top', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting('boutique_designer_shop_scroll_options',array(
        'default' => 'right_align',
        'sanitize_callback' => 'boutique_designer_shop_sanitize_choices'
	));
	$wp_customize->add_control('boutique_designer_shop_scroll_options',array(
		'type' => 'radio',
		'label'     => __('Scroll Top Alignment', 'boutique-designer-shop'),
		'section' => 'boutique_designer_shop_theme_settings',
		'type' => 'select',
		'choices' => array(
			'left_align' => __('LEFT','boutique-designer-shop'),
			'center_align' => __('CENTER','boutique-designer-shop'),
			'right_align' => __('RIGHT','boutique-designer-shop'),
		)
	) );
	$wp_customize->add_setting('boutique_designer_shop_scroll_top_icon',array(
		'default'	=> 'fas fa-chevron-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Boutique_Designer_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'boutique_designer_shop_scroll_top_icon',array(
		'label'	=> __('Add Scroll Top Icon','boutique-designer-shop'),
		'transport' => 'refresh',
		'section'	=> 'boutique_designer_shop_theme_settings',
		'setting'	=> 'boutique_designer_shop_scroll_top_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('boutique_designer_shop_scroll_color', array(
	    'default' => '#121212',
	    'sanitize_callback' => 'sanitize_hex_color',
	    'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'boutique_designer_shop_scroll_color', array(
	    'section' => 'boutique_designer_shop_theme_settings',
	    'label' => esc_html__('Scroll Top Color', 'boutique-designer-shop'),
	)));

	$wp_customize->add_setting( 'boutique_designer_shop_section_cursor_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_cursor_heading', array(
		'label'       => esc_html__( 'Cursor Setting', 'boutique-designer-shop' ),
		'section'     => 'boutique_designer_shop_theme_settings',
		'settings'    => 'boutique_designer_shop_section_cursor_heading',
	) ) );

	$wp_customize->add_setting(
		'boutique_designer_shop_enable_custom_cursor',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_enable_custom_cursor',
			array(
				'settings'        => 'boutique_designer_shop_enable_custom_cursor',
				'section'         => 'boutique_designer_shop_theme_settings',
				'label'           => __( 'show custom cursor', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting( 'boutique_designer_shop_section_animation_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_animation_heading', array(
		'label'       => esc_html__( 'Animation Setting', 'boutique-designer-shop' ),
		'section'     => 'boutique_designer_shop_theme_settings',
		'settings'    => 'boutique_designer_shop_section_animation_heading',
	) ) );

	$wp_customize->add_setting(
		'boutique_designer_shop_animation_enable',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_animation_enable',
			array(
				'settings'        => 'boutique_designer_shop_animation_enable',
				'section'         => 'boutique_designer_shop_theme_settings',
				'label'           => __( 'show/Hide Animation', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting( 'boutique_designer_shop_section_description_first_letter', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_description_first_letter', array(
		'label'       => esc_html__( 'First Letter Capital Settings', 'boutique-designer-shop' ),
		'section'     => 'boutique_designer_shop_theme_settings',
		'settings'    => 'boutique_designer_shop_section_description_first_letter',
	) ) );
	$wp_customize->add_setting(
		'boutique_designer_shop_first_letter_capital_enable',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_first_letter_capital_enable',
			array(
				'settings'        => 'boutique_designer_shop_first_letter_capital_enable',
				'section'         => 'boutique_designer_shop_theme_settings',
				'label'           => __( 'Show/Hide First Letter Capital', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);

	// Post Layouts
	$wp_customize->add_panel( 'boutique_designer_shop_post_panel', array(
		'title' => esc_html__( 'Post Layout', 'boutique-designer-shop' ),
		'priority' => 4,
	));

	$wp_customize->add_section('boutique_designer_shop_blog_meta',array(
        'title' => __('Blog Meta', 'boutique-designer-shop'), 
        'panel' => 'boutique_designer_shop_post_panel',       
    ) );

    $wp_customize->add_setting( 'boutique_designer_shop_section_blog_meta_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_blog_meta_heading', array(
		'label'       => esc_html__( 'Blog Meta Settings', 'boutique-designer-shop' ),
		'section'     => 'boutique_designer_shop_blog_meta',
		'settings'    => 'boutique_designer_shop_section_blog_meta_heading',
	) ) );

	$wp_customize->add_setting('boutique_designer_shop_date',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_date',
			array(
				'settings'        => 'boutique_designer_shop_date',
				'section'         => 'boutique_designer_shop_blog_meta',
				'label'           => __( 'Show Date', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'boutique_designer_shop_date', array(
		'selector' => '.date-box',
		'render_callback' => 'boutique_designer_shop_customize_partial_boutique_designer_shop_date',
	) );
	$wp_customize->add_setting('boutique_designer_shop_date_icon',array(
		'default'	=> 'far fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Boutique_Designer_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'boutique_designer_shop_date_icon',array(
		'label'	=> __('date Icon','boutique-designer-shop'),
		'transport' => 'refresh',
		'section'	=> 'boutique_designer_shop_blog_meta',
		'setting'	=> 'boutique_designer_shop_date_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('boutique_designer_shop_date_type',array(
        'default' => 'published',
        'sanitize_callback' => 'boutique_designer_shop_sanitize_choices'
	));
	$wp_customize->add_control('boutique_designer_shop_date_type',array(
		'type' => 'radio',
		'label'     => __('Date Format', 'boutique-designer-shop'),
		'section' => 'boutique_designer_shop_blog_meta',
		'type' => 'select',
		'choices' => array(
			'published' => __('published date','boutique-designer-shop'),
            'modified' => __('modified date','boutique-designer-shop'),
		),
	) );



	$wp_customize->add_setting('boutique_designer_shop_sticky_icon',array(
		'default'	=> 'fas fa-thumb-tack',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Boutique_Designer_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'boutique_designer_shop_sticky_icon',array(
		'label'	=> __('Sticky Post Icon','boutique-designer-shop'),
		'transport' => 'refresh',
		'section'	=> 'boutique_designer_shop_blog_meta',
		'setting'	=> 'boutique_designer_shop_sticky_icon',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('boutique_designer_shop_admin',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_admin',
			array(
				'settings'        => 'boutique_designer_shop_admin',
				'section'         => 'boutique_designer_shop_blog_meta',
				'label'           => __( 'Show Author/Admin', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'boutique_designer_shop_admin', array(
		'selector' => '.entry-author',
		'render_callback' => 'boutique_designer_shop_customize_partial_boutique_designer_shop_admin',
	) );
	$wp_customize->add_setting('boutique_designer_shop_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Boutique_Designer_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'boutique_designer_shop_author_icon',array(
		'label'	=> __('Author Icon','boutique-designer-shop'),
		'transport' => 'refresh',
		'section'	=> 'boutique_designer_shop_blog_meta',
		'setting'	=> 'boutique_designer_shop_author_icon',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('boutique_designer_shop_comment',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_comment',
			array(
				'settings'        => 'boutique_designer_shop_comment',
				'section'         => 'boutique_designer_shop_blog_meta',
				'label'           => __( 'Show Comment', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'boutique_designer_shop_comment', array(
		'selector' => '.entry-comments',
		'render_callback' => 'boutique_designer_shop_customize_partial_boutique_designer_shop_comment',
	) );
	$wp_customize->add_setting('boutique_designer_shop_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Boutique_Designer_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'boutique_designer_shop_comment_icon',array(
		'label'	=> __('comment Icon','boutique-designer-shop'),
		'transport' => 'refresh',
		'section'	=> 'boutique_designer_shop_blog_meta',
		'setting'	=> 'boutique_designer_shop_comment_icon',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('boutique_designer_shop_tag',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_tag',
			array(
				'settings'        => 'boutique_designer_shop_tag',
				'section'         => 'boutique_designer_shop_blog_meta',
				'label'           => __( 'Show tag count', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'boutique_designer_shop_tag', array(
		'selector' => '.tags',
		'render_callback' => 'boutique_designer_shop_customize_partial_boutique_designer_shop_tag',
	) );
	$wp_customize->add_setting('boutique_designer_shop_tag_icon',array(
		'default'	=> 'fas fa-tags',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Boutique_Designer_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'boutique_designer_shop_tag_icon',array(
		'label'	=> __('tag Icon','boutique-designer-shop'),
		'transport' => 'refresh',
		'section'	=> 'boutique_designer_shop_blog_meta',
		'setting'	=> 'boutique_designer_shop_tag_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_section('boutique_designer_shop_layout',array(
        'title' => __('single-Post Layout', 'boutique-designer-shop'), 
        'panel' => 'boutique_designer_shop_post_panel',       
    ) );
    $wp_customize->add_setting( 'boutique_designer_shop_section_post_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_post_heading', array(
		'label'       => esc_html__( 'single Post Structure', 'boutique-designer-shop' ),
		'section'     => 'boutique_designer_shop_layout',
		'settings'    => 'boutique_designer_shop_section_post_heading',
	) ) );
	$wp_customize->add_setting( 'boutique_designer_shop_single_post_option',
		array(
			'default' => 'single_right_sidebar',
			'transport' => 'refresh',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control( new boutique_designer_shop_Radio_Image_Control( $wp_customize, 'boutique_designer_shop_single_post_option',
			array(
				'type'=>'select',
				'label' => __( 'select Single Post Page Layout', 'boutique-designer-shop' ),
				'section' => 'boutique_designer_shop_layout',
				'choices' => array(

					'single_right_sidebar' => array(
						'image' => get_template_directory_uri().'/assets/images/2column.jpg',
						'name' => __( 'Right Sidebar', 'boutique-designer-shop' )
					),
					'single_left_sidebar' => array(
						'image' => get_template_directory_uri().'/assets/images/left.png',
						'name' => __( 'Left Sidebar', 'boutique-designer-shop' )
					),
					'single_full_width' => array(
						'image' => get_template_directory_uri().'/assets/images/1column.jpg',
						'name' => __( 'One Column', 'boutique-designer-shop' )
					),
				)
			)
		) 
	);
	$wp_customize->add_setting('boutique_designer_shop_single_post_tag',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_single_post_tag',
			array(
				'settings'        => 'boutique_designer_shop_single_post_tag',
				'section'         => 'boutique_designer_shop_layout',
				'label'           => __( 'Show Tags', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'boutique_designer_shop_single_post_tag', array(
		'selector' => '.single-tags',
		'render_callback' => 'boutique_designer_shop_customize_partial_boutique_designer_shop_single_post_tag',
	) );
	$wp_customize->add_setting('boutique_designer_shop_similar_post',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_similar_post',
			array(
				'settings'        => 'boutique_designer_shop_similar_post',
				'section'         => 'boutique_designer_shop_layout',
				'label'           => __( 'Show Similar post', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting('boutique_designer_shop_similar_text',array(
		'default' => 'Explore More',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('boutique_designer_shop_similar_text',array(
		'label' => esc_html__('Similar Post Heading','boutique-designer-shop'),
		'section' => 'boutique_designer_shop_layout',
		'setting' => 'boutique_designer_shop_similar_text',
		'type'    => 'text'
	));
	$wp_customize->add_section('boutique_designer_shop_archieve_post_layot',array(
        'title' => __('Archieve-Post Layout', 'boutique-designer-shop'),
        'panel' => 'boutique_designer_shop_post_panel',
    ) );
	$wp_customize->add_setting( 'boutique_designer_shop_section_archive_post_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_archive_post_heading', array(
		'label'       => esc_html__( 'Archieve Post Structure', 'boutique-designer-shop' ),
		'section'     => 'boutique_designer_shop_archieve_post_layot',
		'settings'    => 'boutique_designer_shop_section_archive_post_heading',
	) ) );
    $wp_customize->add_setting( 'boutique_designer_shop_post_option',
		array(
			'default' => 'right_sidebar',
			'transport' => 'refresh',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control( new Boutique_Designer_Shop_Radio_Image_Control( $wp_customize, 'boutique_designer_shop_post_option',
		array(
			'type'=>'select',
			'label' => __( 'select Post Page Layout', 'boutique-designer-shop' ),
			'section' => 'boutique_designer_shop_archieve_post_layot',
			'choices' => array(
				'right_sidebar' => array(
					'image' => get_template_directory_uri().'/assets/images/2column.jpg',
					'name' => __( 'Right Sidebar', 'boutique-designer-shop' )
				),
				'left_sidebar' => array(
					'image' => get_template_directory_uri().'/assets/images/left.png',
					'name' => __( 'Left Sidebar', 'boutique-designer-shop' )
				),
				'one_column' => array(
					'image' => get_template_directory_uri().'/assets/images/1column.jpg',
					'name' => __( 'One Column', 'boutique-designer-shop' )
				),
				'three_column' => array(
					'image' => get_template_directory_uri().'/assets/images/3column.jpg',
					'name' => __( 'Three Column', 'boutique-designer-shop' )
				),
				'four_column' => array(
					'image' => get_template_directory_uri().'/assets/images/4column.jpg',
					'name' => __( 'Four Column', 'boutique-designer-shop' )
				),
				'grid_sidebar' => array(
					'image' => get_template_directory_uri().'/assets/images/grid-sidebar.jpg',
					'name' => __( 'Grid-Sidebar Layout', 'boutique-designer-shop' )
				),
				'grid_left_sidebar' => array(
					'image' => get_template_directory_uri().'/assets/images/grid-left.png',
					'name' => __( 'Grid-Sidebar Layout', 'boutique-designer-shop' )
				),
				'grid_post' => array(
					'image' => get_template_directory_uri().'/assets/images/grid.jpg',
					'name' => __( 'Grid Layout', 'boutique-designer-shop' )
				)
			)
		)
	) );
    $wp_customize->add_setting('boutique_designer_shop_grid_column',array(
        'default' => '3_column',
        'sanitize_callback' => 'boutique_designer_shop_sanitize_choices'
	));
	$wp_customize->add_control('boutique_designer_shop_grid_column',array(
		'type' => 'radio',
		'label'     => __('Grid Post Per Row', 'boutique-designer-shop'),
		'section' => 'boutique_designer_shop_archieve_post_layot',
		'type' => 'select',
		'choices' => array(
			'1_column' => __('1','boutique-designer-shop'),
            '2_column' => __('2','boutique-designer-shop'),
            '3_column' => __('3','boutique-designer-shop'),
            '4_column' => __('4','boutique-designer-shop'),
		)
	) );
	$wp_customize->add_setting('archieve_post_order', array(
        'default' => array('title', 'image', 'meta','excerpt','btn'),
        'sanitize_callback' => 'boutique_designer_shop_sanitize_sortable',
    ));
    $wp_customize->add_control(new Boutique_Designer_Shop_Control_Sortable($wp_customize, 'archieve_post_order', array(
    	'label' => esc_html__('Post Order', 'boutique-designer-shop'),
        'description' => __('Drag & Drop post items to re-arrange the order and also hide and show items as per the need by clicking on the eye icon.', 'boutique-designer-shop') ,
        'section' => 'boutique_designer_shop_archieve_post_layot',
        'choices' => array(
            'title' => __('title', 'boutique-designer-shop') ,
            'image' => __('media', 'boutique-designer-shop') ,
            'meta' => __('meta', 'boutique-designer-shop') ,
            'excerpt' => __('excerpt', 'boutique-designer-shop') ,
            'btn' => __('Read more', 'boutique-designer-shop') ,
        ) ,
    )));
	$wp_customize->add_setting('boutique_designer_shop_post_excerpt',array(
		'default'=> 30,
		'transport' => 'refresh',
		'sanitize_callback' => 'boutique_designer_shop_sanitize_integer'
	));
	$wp_customize->add_control(new Boutique_Designer_Shop_Slider_Custom_Control( $wp_customize, 'boutique_designer_shop_post_excerpt',array(
		'label' => esc_html__( 'Excerpt Limit','boutique-designer-shop' ),
		'section'=> 'boutique_designer_shop_archieve_post_layot',
		'settings'=>'boutique_designer_shop_post_excerpt',
		'input_attrs' => array(
			'reset'			   => 30,
            'step'             => 1,
			'min'              => 0,
			'max'              => 100,
        ),
	)));
	$wp_customize->add_setting('boutique_designer_shop_read_more_text',array(
		'default' => 'Read More',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('boutique_designer_shop_read_more_text',array(
		'label' => esc_html__('Read More Text','boutique-designer-shop'),
		'section' => 'boutique_designer_shop_archieve_post_layot',
		'setting' => 'boutique_designer_shop_read_more_text',
		'type'    => 'text'
	));

	$wp_customize->add_section('boutique_designer_shop_blog_pagination',array(
        'title' => __('Pagination', 'boutique-designer-shop'), 
        'panel' => 'boutique_designer_shop_post_panel',       
    ) );

	$wp_customize->add_setting('boutique_designer_shop_pagination_type',array(
        'default' => 'numbered',
        'sanitize_callback' => 'boutique_designer_shop_sanitize_choices'
	));
	$wp_customize->add_control('boutique_designer_shop_pagination_type',array(
		'type' => 'radio',
		'label'     => __('Blog Pagination', 'boutique-designer-shop'),
		'section' => 'boutique_designer_shop_blog_pagination',
		'type' => 'select',
		'choices' => array(
			'default' => __('Previous/Next','boutique-designer-shop'),
            'numbered' => __('Numbered','boutique-designer-shop'),
		),
	) );

	$wp_customize->add_setting('boutique_designer_shop_single_post_pagination_type',array(
        'default' => 'default',
        'sanitize_callback' => 'boutique_designer_shop_sanitize_choices'
	));
	$wp_customize->add_control('boutique_designer_shop_single_post_pagination_type',array(
		'type' => 'radio',
		'label'     => __('Post Pagination', 'boutique-designer-shop'),
		'section' => 'boutique_designer_shop_blog_pagination',
		'type' => 'select',
		'choices' => array(
			'default' => __('Previous/Next','boutique-designer-shop'),
            'post-name' => __('Post Title','boutique-designer-shop'),
		),
	) );

	// header-image
	$wp_customize->add_setting( 'boutique_designer_shop_section_header_image_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_header_image_heading', array(
		'label'       => esc_html__( 'Header Image Settings', 'boutique-designer-shop' ),
		'section'     => 'header_image',
		'settings'    => 'boutique_designer_shop_section_header_image_heading',
		'priority'    =>'1',
	) ) );

	$wp_customize->add_setting('boutique_designer_shop_show_header_image',array(
        'default' => 'on',
        'sanitize_callback' => 'boutique_designer_shop_sanitize_choices'
	));
	$wp_customize->add_control('boutique_designer_shop_show_header_image',array(
        'type' => 'select',
        'label' => __('Select Option','boutique-designer-shop'),
        'section' => 'header_image',
        'choices' => array(
            'on' => __('With Header Image','boutique-designer-shop'),
            'off' => __('Without Header Image','boutique-designer-shop'),
        ),
	) );

	// breadcrumb
	$wp_customize->add_section('boutique_designer_shop_breadcrumb_settings',array(
        'title' => __('Breadcrumb Settings', 'boutique-designer-shop'),
        'priority' => 4
    ) );
	$wp_customize->add_setting( 'boutique_designer_shop_section_breadcrumb_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_breadcrumb_heading', array(
		'label'       => esc_html__( 'Theme Breadcrumb Setting', 'boutique-designer-shop' ),
		'section'     => 'boutique_designer_shop_breadcrumb_settings',
		'settings'    => 'boutique_designer_shop_section_breadcrumb_heading',
	) ) );
	$wp_customize->add_setting(
		'boutique_designer_shop_enable_breadcrumb',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_enable_breadcrumb',
			array(
				'settings'        => 'boutique_designer_shop_enable_breadcrumb',
				'section'         => 'boutique_designer_shop_breadcrumb_settings',
				'label'           => __( 'Show Breadcrumb', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);	
	$wp_customize->add_setting('boutique_designer_shop_breadcrumb_separator', array(
        'default' => ' / ',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('boutique_designer_shop_breadcrumb_separator', array(
        'label' => __('Breadcrumb Separator', 'boutique-designer-shop'),
        'section' => 'boutique_designer_shop_breadcrumb_settings',
        'type' => 'text',
    ));
	$wp_customize->add_setting( 'boutique_designer_shop_single_breadcrumb_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_single_breadcrumb_heading', array(
		'label'       => esc_html__( 'Single post & Page', 'boutique-designer-shop' ),
		'section'     => 'boutique_designer_shop_breadcrumb_settings',
		'settings'    => 'boutique_designer_shop_single_breadcrumb_heading',
	) ) );
	$wp_customize->add_setting(
		'boutique_designer_shop_single_enable_breadcrumb',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_single_enable_breadcrumb',
			array(
				'settings'        => 'boutique_designer_shop_single_enable_breadcrumb',
				'section'         => 'boutique_designer_shop_breadcrumb_settings',
				'label'           => __( 'Show Breadcrumb', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);
	if ( class_exists( 'WooCommerce' ) ) { 
		$wp_customize->add_setting( 'boutique_designer_shop_woocommerce_breadcrumb_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_woocommerce_breadcrumb_heading', array(
			'label'       => esc_html__( 'Woocommerce Breadcrumb', 'boutique-designer-shop' ),
			'section'     => 'boutique_designer_shop_breadcrumb_settings',
			'settings'    => 'boutique_designer_shop_woocommerce_breadcrumb_heading',
		) ) );
		$wp_customize->add_setting(
			'boutique_designer_shop_woocommerce_enable_breadcrumb',
			array(
				'type'                 => 'option',
				'capability'           => 'edit_theme_options',
				'theme_supports'       => '',
				'default'              => '1',
				'transport'            => 'refresh',
				'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
			)
		);
		$wp_customize->add_control(
			new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
				$wp_customize,
				'boutique_designer_shop_woocommerce_enable_breadcrumb',
				array(
					'settings'        => 'boutique_designer_shop_woocommerce_enable_breadcrumb',
					'section'         => 'boutique_designer_shop_breadcrumb_settings',
					'label'           => __( 'Show Breadcrumb', 'boutique-designer-shop' ),				
					'choices'		  => array(
						'1'      => __( 'On', 'boutique-designer-shop' ),
						'off'    => __( 'Off', 'boutique-designer-shop' ),
					),
					'active_callback' => '',
				)
			)
		);
		$wp_customize->add_setting('woocommerce_breadcrumb_separator', array(
	        'default' => ' / ',
	        'sanitize_callback' => 'sanitize_text_field',
	    ));
	    $wp_customize->add_control('woocommerce_breadcrumb_separator', array(
	        'label' => __('Breadcrumb Separator', 'boutique-designer-shop'),
	        'section' => 'boutique_designer_shop_breadcrumb_settings',
	        'type' => 'text',
	    ));
	}
	
	// woocommerce 
	if ( class_exists( 'WooCommerce' ) ) { 

		$wp_customize->add_section('boutique_designer_shop_woocoomerce_section',array(
	        'title' => __('Custom Woocommerce Settings', 'boutique-designer-shop'),
	        'panel' => 'woocommerce',
	        'priority' => 4,
	    ) );
		$wp_customize->add_setting( 'boutique_designer_shop_section_shoppage_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_shoppage_heading', array(
			'label'       => esc_html__( 'Sidebar Setting', 'boutique-designer-shop' ),
			'section'     => 'boutique_designer_shop_woocoomerce_section',
			'settings'    => 'boutique_designer_shop_section_shoppage_heading',
		) ) );
		$wp_customize->add_setting( 'boutique_designer_shop_shop_page_sidebar',
			array(
				'default' => 'right_sidebar',
				'transport' => 'refresh',
				'sanitize_callback' => 'sanitize_text_field'
			)
		);
		$wp_customize->add_control( new Boutique_Designer_Shop_Radio_Image_Control( $wp_customize, 'boutique_designer_shop_shop_page_sidebar',
			array(
				'type'=>'select',
				'label' => __( 'Show Shop Page Sidebar', 'boutique-designer-shop' ),
				'section'     => 'boutique_designer_shop_woocoomerce_section',
				'choices' => array(

					'right_sidebar' => array(
						'image' => get_template_directory_uri().'/assets/images/2column.jpg',
						'name' => __( 'Right Sidebar', 'boutique-designer-shop' )
					),
					'left_sidebar' => array(
						'image' => get_template_directory_uri().'/assets/images/left.png',
						'name' => __( 'Left Sidebar', 'boutique-designer-shop' )
					),
					'full_width' => array(
						'image' => get_template_directory_uri().'/assets/images/1column.jpg',
						'name' => __( 'Full Width', 'boutique-designer-shop' )
					),
				)
			)
		) );
		$wp_customize->add_setting( 'boutique_designer_shop_wocommerce_single_page_sidebar',
			array(
				'default' => 'right_sidebar',
				'transport' => 'refresh',
				'sanitize_callback' => 'sanitize_text_field'
			)
		);
		$wp_customize->add_control( new Boutique_Designer_Shop_Radio_Image_Control( $wp_customize, 'boutique_designer_shop_wocommerce_single_page_sidebar',
			array(
				'type'=>'select',
				'label'           => __( 'Show Single Product Page Sidebar', 'boutique-designer-shop' ),
				'section'     => 'boutique_designer_shop_woocoomerce_section',
				'choices' => array(

					'right_sidebar' => array(
						'image' => get_template_directory_uri().'/assets/images/2column.jpg',
						'name' => __( 'Right Sidebar', 'boutique-designer-shop' )
					),
					'left_sidebar' => array(
						'image' => get_template_directory_uri().'/assets/images/left.png',
						'name' => __( 'Left Sidebar', 'boutique-designer-shop' )
					),
					'full_width' => array(
						'image' => get_template_directory_uri().'/assets/images/1column.jpg',
						'name' => __( 'Full Width', 'boutique-designer-shop' )
					),
				)
			)
		) );
		$wp_customize->add_setting( 'boutique_designer_shop_section_archieve_product_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_archieve_product_heading', array(
			'label'       => esc_html__( 'Archieve Product Settings', 'boutique-designer-shop' ),
			'section'     => 'boutique_designer_shop_woocoomerce_section',
			'settings'    => 'boutique_designer_shop_section_archieve_product_heading',
		) ) );
		$wp_customize->add_setting('boutique_designer_shop_archieve_item_columns',array(
	        'default' => '3',
	        'sanitize_callback' => 'boutique_designer_shop_sanitize_choices'
		));
		$wp_customize->add_control('boutique_designer_shop_archieve_item_columns',array(
	        'type' => 'select',
	        'label' => __('Select No of Columns','boutique-designer-shop'),
	        'section' => 'boutique_designer_shop_woocoomerce_section',
	        'choices' => array(
	            '1' => __('One Column','boutique-designer-shop'),
	            '2' => __('Two Column','boutique-designer-shop'),
	            '3' => __('Three Column','boutique-designer-shop'),
	            '4' => __('four Column','boutique-designer-shop'),
	            '5' => __('Five Column','boutique-designer-shop'),
	            '6' => __('Six Column','boutique-designer-shop'),
	        ),
		) );
		$wp_customize->add_setting( 'boutique_designer_shop_archieve_shop_perpage', array(
			'default'              => 6,
			'type'                 => 'theme_mod',
			'transport' 		   => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_sanitize_number_absint',
			'sanitize_js_callback' => 'absint',
		) );
		$wp_customize->add_control( 'boutique_designer_shop_archieve_shop_perpage', array(
			'label'       => esc_html__( 'Display Products','boutique-designer-shop' ),
			'section'     => 'boutique_designer_shop_woocoomerce_section',
			'type'        => 'number',
			'input_attrs' => array(
				'step'             => 1,
				'min'              => 0,
				'max'              => 30,
			),
		) );
		$wp_customize->add_setting( 'boutique_designer_shop_section_related_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_related_heading', array(
			'label'       => esc_html__( 'Related Product Settings', 'boutique-designer-shop' ),
			'section'     => 'boutique_designer_shop_woocoomerce_section',
			'settings'    => 'boutique_designer_shop_section_related_heading',
		) ) );
		$wp_customize->add_setting('boutique_designer_shop_related_item_columns',array(
	        'default' => '3',
	        'sanitize_callback' => 'boutique_designer_shop_sanitize_choices'
		));
		$wp_customize->add_control('boutique_designer_shop_related_item_columns',array(
	        'type' => 'select',
	        'label' => __('Select No of Columns','boutique-designer-shop'),
	        'section' => 'boutique_designer_shop_woocoomerce_section',
	        'choices' => array(
	            '1' => __('One Column','boutique-designer-shop'),
	            '2' => __('Two Column','boutique-designer-shop'),
	            '3' => __('Three Column','boutique-designer-shop'),
	            '4' => __('four Column','boutique-designer-shop'),
	            '5' => __('Five Column','boutique-designer-shop'),
	            '6' => __('Six Column','boutique-designer-shop'),
	        ),
		) );
		$wp_customize->add_setting( 'boutique_designer_shop_related_shop_perpage', array(
			'default'              => 3,
			'type'                 => 'theme_mod',
			'transport' 		   => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_sanitize_number_absint',
			'sanitize_js_callback' => 'absint',
		) );
		$wp_customize->add_control( 'boutique_designer_shop_related_shop_perpage', array(
			'label'       => esc_html__( 'Display Products','boutique-designer-shop' ),
			'section'     => 'boutique_designer_shop_woocoomerce_section',
			'type'        => 'number',
			'input_attrs' => array(
				'step'             => 1,
				'min'              => 0,
				'max'              => 10,
			),
		) );
		$wp_customize->add_setting(
			'boutique_designer_shop_related_product',
			array(
				'type'                 => 'option',
				'capability'           => 'edit_theme_options',
				'theme_supports'       => '',
				'default'              => '1',
				'transport'            => 'refresh',
				'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
			)
		);
		$wp_customize->add_control(new Boutique_Designer_Shop_Customizer_Customcontrol_Switch($wp_customize,'boutique_designer_shop_related_product',
			array(
				'settings'        => 'boutique_designer_shop_related_product',
				'section'         => 'boutique_designer_shop_woocoomerce_section',
				'label'           => __( 'Show Related Products', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		));
	}

	// mobile width
	$wp_customize->add_section('boutique_designer_shop_mobile_options',array(
        'title' => __('Mobile Media settings', 'boutique-designer-shop'),
        'priority' => 4,
    ) );
    $wp_customize->add_setting( 'boutique_designer_shop_section_mobile_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_mobile_heading', array(
		'label'       => esc_html__( 'Mobile Media settings', 'boutique-designer-shop' ),
		'section'     => 'boutique_designer_shop_mobile_options',
		'settings'    => 'boutique_designer_shop_section_mobile_heading',
	) ) );
	$wp_customize->add_setting('boutique_designer_shop_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Boutique_Designer_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'boutique_designer_shop_menu_icon',array(
		'label'	=> __('Menu Icon','boutique-designer-shop'),
		'transport' => 'refresh',
		'section'	=> 'boutique_designer_shop_mobile_options',
		'setting'	=> 'boutique_designer_shop_menu_icon',
		'type'		=> 'icon'
	))); 
	$wp_customize->add_setting(
		'boutique_designer_shop_slider_button_mobile_show_hide',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_slider_button_mobile_show_hide',
			array(
				'settings'        => 'boutique_designer_shop_slider_button_mobile_show_hide',
				'section'         => 'boutique_designer_shop_mobile_options',
				'label'           => __( 'Show Slider Button', 'boutique-designer-shop' ),
				'description' => __('Control wont function if the button is off in the main slider settings.', 'boutique-designer-shop') ,
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting(
		'boutique_designer_shop_scroll_enable_mobile',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_scroll_enable_mobile',
			array(
				'settings'        => 'boutique_designer_shop_scroll_enable_mobile',
				'section'         => 'boutique_designer_shop_mobile_options',
				'label'           => __( 'Show Scroll Top', 'boutique-designer-shop' ),	
				'description' => __('Control wont function if scroll-top is off in the main settings.', 'boutique-designer-shop') ,			
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting( 'boutique_designer_shop_section_mobile_breadcrumb_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_mobile_breadcrumb_heading', array(
		'label'       => esc_html__( 'Mobile Breadcrumb settings', 'boutique-designer-shop' ),
		'description' => __('Controls wont function if the breadcrumb is off in the main breadcrumb settings.', 'boutique-designer-shop') ,
		'section'     => 'boutique_designer_shop_mobile_options',
		'settings'    => 'boutique_designer_shop_section_mobile_breadcrumb_heading',
	) ) );
	$wp_customize->add_setting(
		'boutique_designer_shop_enable_breadcrumb_mobile',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_enable_breadcrumb_mobile',
			array(
				'settings'        => 'boutique_designer_shop_enable_breadcrumb_mobile',
				'section'         => 'boutique_designer_shop_mobile_options',
				'label'           => __( 'Theme Breadcrumb', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting(
		'boutique_designer_shop_single_enable_breadcrumb_mobile',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
			$wp_customize,
			'boutique_designer_shop_single_enable_breadcrumb_mobile',
			array(
				'settings'        => 'boutique_designer_shop_single_enable_breadcrumb_mobile',
				'section'         => 'boutique_designer_shop_mobile_options',
				'label'           => __( 'Single Post & Page', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);
	if ( class_exists( 'WooCommerce' ) ) {
		$wp_customize->add_setting(
			'boutique_designer_shop_woocommerce_enable_breadcrumb_mobile',
			array(
				'type'                 => 'option',
				'capability'           => 'edit_theme_options',
				'theme_supports'       => '',
				'default'              => '1',
				'transport'            => 'refresh',
				'sanitize_callback'    => 'boutique_designer_shop_callback_sanitize_switch',
			)
		);
		$wp_customize->add_control(
			new Boutique_Designer_Shop_Customizer_Customcontrol_Switch(
				$wp_customize,
				'boutique_designer_shop_woocommerce_enable_breadcrumb_mobile',
				array(
					'settings'        => 'boutique_designer_shop_woocommerce_enable_breadcrumb_mobile',
					'section'         => 'boutique_designer_shop_mobile_options',
					'label'           => __( 'wooCommerce Breadcrumb', 'boutique-designer-shop' ),				
					'choices'		  => array(
						'1'      => __( 'On', 'boutique-designer-shop' ),
						'off'    => __( 'Off', 'boutique-designer-shop' ),
					),
					'active_callback' => '',
				)
			)
		);
	}

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'boutique_designer_shop_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'boutique_designer_shop_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'boutique_designer_shop_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'boutique_designer_shop_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'boutique-designer-shop' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'boutique-designer-shop' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'boutique_designer_shop_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'boutique_designer_shop_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'boutique_designer_shop_customize_register' );

function boutique_designer_shop_customize_partial_blogname() {
	bloginfo( 'name' );
}
function boutique_designer_shop_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
function boutique_designer_shop_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}
function boutique_designer_shop_is_view_with_layout_option() {
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Boutique_Designer_Shop_Pro_Control')):
    class Boutique_Designer_Shop_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( BOUTIQUE_DESIGNER_SHOP_BUY_PRO ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE DESIGNER SHOP PREMIUM','boutique-designer-shop');?> </a>
	        </div>
            <div class="col-md">
                <img class="boutique_designer_shop_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
	            <h3 style="margin-top:10px; margin-left: 20px; text-decoration:underline; color:#333;"><?php esc_html_e('BOUTIQUE DESIGNER SHOP PREMIUM - Features', 'boutique-designer-shop'); ?></h3>
                <ul style="padding-top:10px">
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'boutique-designer-shop');?> </li>
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Boxed or fullwidth layout', 'boutique-designer-shop');?> </li>
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Shortcode Support', 'boutique-designer-shop');?> </li>
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'boutique-designer-shop');?> </li>
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'boutique-designer-shop');?> </li>
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'boutique-designer-shop');?> </li>
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'boutique-designer-shop');?> </li>
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'boutique-designer-shop');?> </li>
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Designed with HTML5 and CSS3', 'boutique-designer-shop');?> </li>
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Customizable Design & Code', 'boutique-designer-shop');?> </li>
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'boutique-designer-shop');?> </li>
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'boutique-designer-shop');?> </li>
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Stylish Custom Widgets', 'boutique-designer-shop');?> </li>
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background', 'boutique-designer-shop');?> </li>
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'boutique-designer-shop');?> </li>
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'boutique-designer-shop');?> </li>
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'boutique-designer-shop');?> </li>
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'boutique-designer-shop');?> </li>
                    <li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Live Customizer', 'boutique-designer-shop');?> </li>
                   	<li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('AMP Ready', 'boutique-designer-shop');?> </li>
                   	<li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Clean Code', 'boutique-designer-shop');?> </li>
                   	<li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'boutique-designer-shop');?> </li>
                   	<li class="upsell-boutique_designer_shop"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'boutique-designer-shop');?> </li>
                </ul>
        	</div>
		    <div class="col-md upsell-btn upsell-btn-bottom">
	            <a href="<?php echo esc_url( BOUTIQUE_DESIGNER_SHOP_BUNDLE_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('WP Theme Bundle (120+ Themes)','boutique-designer-shop');?> </a>
		    </div>
		    
        </label>
    <?php } }
endif;
