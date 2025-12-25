<?php
/**
 * Boutique Designer Shop: Customizer-home-page
 *
 * @subpackage Boutique Designer Shop
 * @since 1.0
 */

//  Home Page Panel
	$wp_customize->add_panel( 'boutique_designer_shop_custompage_panel', array(
		'title' => esc_html__( 'Custom Page Settings', 'boutique-designer-shop' ),
		'priority' => 2,
	));

	// Top bar
    $wp_customize->add_section('boutique_designer_shop_top',array(
        'title' => __('Header', 'boutique-designer-shop'),
       	'panel' => 'boutique_designer_shop_custompage_panel',
    ) );
	$wp_customize->add_setting( 'boutique_designer_shop_section_contact_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_contact_heading', array(
		'label'       => esc_html__( 'Header Settings', 'boutique-designer-shop' ),		
		'section'     => 'boutique_designer_shop_top',
		'settings'    => 'boutique_designer_shop_section_contact_heading',
	) ) );
	$wp_customize->add_setting('boutique_designer_shop_topbar_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('boutique_designer_shop_topbar_text',array(
		'label' => esc_html__('Add Text','boutique-designer-shop'),
		'section' => 'boutique_designer_shop_top',
		'setting' => 'boutique_designer_shop_topbar_text',
		'type'    => 'text'
	));
	$wp_customize->add_setting('boutique_designer_shop_email',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_email'
	));
	$wp_customize->add_control('boutique_designer_shop_email',array(
		'label' => esc_html__('Add Email Address','boutique-designer-shop'),
		'section' => 'boutique_designer_shop_top',
		'setting' => 'boutique_designer_shop_email',
		'type'    => 'text',
	));
	$wp_customize->add_setting('boutique_designer_shop_call',array(
		'default' => '',
		'sanitize_callback' => 'boutique_designer_shop_sanitize_phone_number'
	));
	$wp_customize->add_control('boutique_designer_shop_call',array(
		'label' => esc_html__('Add Phone No','boutique-designer-shop'),
		'section' => 'boutique_designer_shop_top',
		'setting' => 'boutique_designer_shop_call',
		'type'    => 'text',
	));
	if ( class_exists( 'WooCommerce' ) ) { 
		$wp_customize->add_setting(
			'boutique_designer_shop_cart_enable',
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
				'boutique_designer_shop_cart_enable',
				array(
					'settings'        => 'boutique_designer_shop_cart_enable',
					'section'         => 'boutique_designer_shop_top',
					'label'           => __( 'Check to show Header Cart', 'boutique-designer-shop' ),				
					'choices'		  => array(
						'1'      => __( 'On', 'boutique-designer-shop' ),
						'off'    => __( 'Off', 'boutique-designer-shop' ),
					),
					'active_callback' => '',
				)
			)
		);
	}

    //slider
	$wp_customize->add_section( 'boutique_designer_shop_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'boutique-designer-shop' ),
    	'panel' => 'boutique_designer_shop_custompage_panel',
	) );
	$wp_customize->add_setting( 'boutique_designer_shop_section_slide_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_slide_heading', array(
		'label'       => esc_html__( 'Slider Settings', 'boutique-designer-shop' ),
		'description' => __( 'Slider Image Dimension ( 1600px x 650px )', 'boutique-designer-shop' ),		
		'section'     => 'boutique_designer_shop_slider_section',
		'settings'    => 'boutique_designer_shop_section_slide_heading',
	) ) );
	$wp_customize->add_setting(
		'boutique_designer_shop_slider_arrows',
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
			'boutique_designer_shop_slider_arrows',
			array(
				'settings'        => 'boutique_designer_shop_slider_arrows',
				'section'         => 'boutique_designer_shop_slider_section',
				'label'           => __( 'Check To Show Slider', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting('boutique_designer_shop_slide_heading',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('boutique_designer_shop_slide_heading',array(
		'label' => esc_html__('Slider Sub Heading','boutique-designer-shop'),
		'section' => 'boutique_designer_shop_slider_section',
		'setting' => 'boutique_designer_shop_slide_heading',
		'type'    => 'text',
	));
	$wp_customize->add_setting('boutique_designer_shop_slider_sub_heading_color', array(
	    'default' => '#ffffff',
	    'sanitize_callback' => 'sanitize_hex_color',
	    'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'boutique_designer_shop_slider_sub_heading_color', array(
	    'section' => 'boutique_designer_shop_slider_section',
	    'label' => esc_html__('Slider Sub Heading Color', 'boutique-designer-shop'),
	)));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$pst_sls[]= __('Select','boutique-designer-shop');
	foreach ($post_list as $key => $p_post) {
		$pst_sls[$p_post->ID]=$p_post->post_title;
	}

	$wp_customize->add_setting('boutique_designer_shop_slider_count',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('boutique_designer_shop_slider_count',array(
		'label'	=> esc_html__('Slider Count','boutique-designer-shop'),
		'section'	=> 'boutique_designer_shop_slider_section',
		'description' => __( 'After increasing/decreasing counter refresh site for changes to be applied.', 'boutique-designer-shop' ),
		'type'		=> 'number',
	));

	$boutique_designer_shop_slider_count = get_theme_mod('boutique_designer_shop_slider_count');

	for ( $i = 1; $i <= $boutique_designer_shop_slider_count; $i++ ) {
		$wp_customize->add_setting('boutique_designer_shop_post_setting'.$i,array(
			'sanitize_callback' => 'boutique_designer_shop_sanitize_select',
		));
		$wp_customize->add_control('boutique_designer_shop_post_setting'.$i,array(
			'type'    => 'select',
			'choices' => $pst_sls,
			'label' => __('Select post','boutique-designer-shop'),
			'section' => 'boutique_designer_shop_slider_section',
		));
	}
	wp_reset_postdata();

	$wp_customize->add_setting('boutique_designer_shop_slider_heading_color', array(
	    'default' => '#ffffff',
	    'sanitize_callback' => 'sanitize_hex_color',
	    'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'boutique_designer_shop_slider_heading_color', array(
	    'section' => 'boutique_designer_shop_slider_section',
	    'label' => esc_html__('Slider Title Color', 'boutique-designer-shop'),
	)));

	$wp_customize->add_setting(
		'boutique_designer_shop_slider_excerpt_show_hide',
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
			'boutique_designer_shop_slider_excerpt_show_hide',
			array(
				'settings'        => 'boutique_designer_shop_slider_excerpt_show_hide',
				'section'         => 'boutique_designer_shop_slider_section',
				'label'           => __( 'Show Hide excerpt', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
			)
		)
	);
	$wp_customize->add_setting('boutique_designer_shop_slider_excerpt_count',array(
		'default'=> 30,
		'transport' => 'refresh',
		'sanitize_callback' => 'boutique_designer_shop_sanitize_integer'
	));
	$wp_customize->add_control(new Boutique_Designer_Shop_Slider_Custom_Control( $wp_customize, 'boutique_designer_shop_slider_excerpt_count',array(
		'label' => esc_html__( 'Excerpt Limit','boutique-designer-shop' ),
		'section'=> 'boutique_designer_shop_slider_section',
		'settings'=>'boutique_designer_shop_slider_excerpt_count',
		'input_attrs' => array(
			'reset'			   => 30,
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));
	$wp_customize->add_setting('boutique_designer_shop_slider_excerpt_color', array(
	    'default' => '#ffffff',
	    'sanitize_callback' => 'sanitize_hex_color',
	    'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'boutique_designer_shop_slider_excerpt_color', array(
	    'section' => 'boutique_designer_shop_slider_section',
	    'label' => esc_html__('Slider Excerpt Color', 'boutique-designer-shop'),
	)));
	$wp_customize->add_setting(
		'boutique_designer_shop_slider_button_show_hide',
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
			'boutique_designer_shop_slider_button_show_hide',
			array(
				'settings'        => 'boutique_designer_shop_slider_button_show_hide',
				'section'         => 'boutique_designer_shop_slider_section',
				'label'           => __( 'Show Hide Button', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
			)
		)
	);
	$wp_customize->add_setting('boutique_designer_shop_slider_read_more',array(
		'default' => 'READ MORE',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('boutique_designer_shop_slider_read_more',array(
		'label' => esc_html__('Button Text','boutique-designer-shop'),
		'section' => 'boutique_designer_shop_slider_section',
		'setting' => 'boutique_designer_shop_slider_read_more',
		'type'    => 'text',
	));

	$wp_customize->add_setting('boutique_designer_shop_slider_content_alignment',array(
        'default' => 'LEFT-ALIGN',
        'sanitize_callback' => 'boutique_designer_shop_sanitize_choices'
	));
	$wp_customize->add_control('boutique_designer_shop_slider_content_alignment',array(
		'type' => 'radio',
		'label'     => __('Slider Content Alignment', 'boutique-designer-shop'),
		'section' => 'boutique_designer_shop_slider_section',
		'type' => 'select',
		'choices' => array(
			'LEFT-ALIGN' => __('LEFT','boutique-designer-shop'),
            'CENTER-ALIGN' => __('CENTER','boutique-designer-shop'),
            'RIGHT-ALIGN' => __('RIGHT','boutique-designer-shop'),
		),
	) );

	$wp_customize->add_setting('boutique_designer_shop_slider_opacity',array(
        'default' => '1',
        'sanitize_callback' => 'boutique_designer_shop_sanitize_choices'
	));
	$wp_customize->add_control('boutique_designer_shop_slider_opacity',array(
		'type' => 'radio',
		'label'     => __('Slider Opacity', 'boutique-designer-shop'),
		'section' => 'boutique_designer_shop_slider_section',
		'type' => 'select',
		'choices' => array(
			'0' => __('0','boutique-designer-shop'),
			'0.1' => __('0.1','boutique-designer-shop'),
			'0.2' => __('0.2','boutique-designer-shop'),
			'0.3' => __('0.3','boutique-designer-shop'),
			'0.4' => __('0.4','boutique-designer-shop'),
			'0.5' => __('0.5','boutique-designer-shop'),
			'0.6' => __('0.6','boutique-designer-shop'),
			'0.7' => __('0.7','boutique-designer-shop'),
			'0.8' => __('0.8','boutique-designer-shop'),
			'0.9' => __('0.9','boutique-designer-shop'),
			'1' => __('1','boutique-designer-shop')
		),
	) );
	
	// Product
	$wp_customize->add_section('boutique_designer_shop_millions_of_hours_section',array(
		'title'	=> __('Product Settings','boutique-designer-shop'),
		'panel' => 'boutique_designer_shop_custompage_panel',
	));
	$wp_customize->add_setting( 'boutique_designer_shop_section_product_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_product_heading', array(
		'label'       => esc_html__( 'Product Settings', 'boutique-designer-shop' ),	
		'section'     => 'boutique_designer_shop_millions_of_hours_section',
		'settings'    => 'boutique_designer_shop_section_product_heading',
	) ) );
	$wp_customize->add_setting(
		'boutique_designer_shop_product_enable',
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
			'boutique_designer_shop_product_enable',
			array(
				'settings'        => 'boutique_designer_shop_product_enable',
				'section'         => 'boutique_designer_shop_millions_of_hours_section',
				'label'           => __( 'Check To Show Product Settings', 'boutique-designer-shop' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'boutique_designer_shop_product_section_heading', array(
		'selector' => '#product-section h3',
		'render_callback' => 'boutique_designer_shop_customize_partial_boutique_designer_shop_product_section_heading',
	) );
	$wp_customize->add_setting('boutique_designer_shop_product_section_sub_heading',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('boutique_designer_shop_product_section_sub_heading',array(
		'type' => 'text',
		'label' => __('Sub Heading Text','boutique-designer-shop'),
		'section' => 'boutique_designer_shop_millions_of_hours_section',
	));
	$wp_customize->add_setting('boutique_designer_shop_product_section_heading',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('boutique_designer_shop_product_section_heading',array(
		'type' => 'text',
		'label' => __('Heading Text','boutique-designer-shop'),
		'section' => 'boutique_designer_shop_millions_of_hours_section',
	));
	// Product settings
	$boutique_designer_shop_args = array(
		'type'                     => 'product',
		'child_of'                 => 0,
		'parent'                   => '',
		'orderby'                  => 'term_group',
		'order'                    => 'ASC',
		'hide_empty'               => false,
		'hierarchical'             => 1,
		'number'                   => '',
		'taxonomy'                 => 'product_cat',
		'pad_counts'               => false
	);
	$categories = get_categories($boutique_designer_shop_args);
	$cat_posts = array();
	$m = 0;
	$cat_posts[]='Select';
	foreach($categories as $category){
	if($m==0){
		$default = $category->slug;
			$m++;
		}
		$cat_posts[$category->slug] = $category->name;
	}
	$wp_customize->add_setting('boutique_designer_shop_product_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'boutique_designer_shop_sanitize_select',
	));
	$wp_customize->add_control('boutique_designer_shop_product_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select category to display products ','boutique-designer-shop'),
		'section' => 'boutique_designer_shop_millions_of_hours_section',
	));
	$wp_customize->add_setting('boutique_designer_shop_product_category_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('boutique_designer_shop_product_category_number',array(
		'label'	=> __('Number of products to show in a category','boutique-designer-shop'),
		'section' => 'boutique_designer_shop_millions_of_hours_section',
		'type'	  => 'number',
	));

	$wp_customize->add_setting('boutique_designer_shop_product_order_type',array(
        'default' => 'ascending',
        'sanitize_callback' => 'boutique_designer_shop_sanitize_choices'
	));
	$wp_customize->add_control('boutique_designer_shop_product_order_type',array(
        'type' => 'select',
        'label' => __('Product Order','boutique-designer-shop'),
        'section' => 'boutique_designer_shop_millions_of_hours_section',
        'choices' => array(
            'ascending' => __('Oldest to Newest','boutique-designer-shop'),
            'descending' => __('Newest to Oldest','boutique-designer-shop'),
            'a-to-z' => __('A&rarr;Z','boutique-designer-shop'),
            'z-to-a' => __('Z&rarr;A','boutique-designer-shop'),
        ),
	) );

	//Footer
    $wp_customize->add_section( 'boutique_designer_shop_footer_copyright', array(
    	'title'      => esc_html__( 'Footer Text', 'boutique-designer-shop' ),
    	'panel' => 'boutique_designer_shop_custompage_panel',
	) );
	$wp_customize->add_setting( 'boutique_designer_shop_section_footer_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Boutique_Designer_Shop_Customizer_Customcontrol_Section_Heading( $wp_customize, 'boutique_designer_shop_section_footer_heading', array(
		'label'       => esc_html__( 'Footer Setting', 'boutique-designer-shop' ),		
		'section'     => 'boutique_designer_shop_footer_copyright',
		'settings'    => 'boutique_designer_shop_section_footer_heading',
	) ) );
    $wp_customize->add_setting('boutique_designer_shop_footer_text',array(
		'default'	=> 'Boutique Designer Shop WordPress Theme',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('boutique_designer_shop_footer_text',array(
		'label'	=> esc_html__('Copyright Text','boutique-designer-shop'),
		'section'	=> 'boutique_designer_shop_footer_copyright',
		'type'		=> 'textarea'
	));

	$wp_customize->add_setting('boutique_designer_shop_footer_content_alignment',array(
        'default' => 'CENTER-ALIGN',
        'sanitize_callback' => 'boutique_designer_shop_sanitize_choices'
	));
	$wp_customize->add_control('boutique_designer_shop_footer_content_alignment',array(
		'type' => 'radio',
		'label'     => __('Footer Content Alignment', 'boutique-designer-shop'),
		'section' => 'boutique_designer_shop_footer_copyright',
		'type' => 'select',
		'choices' => array(
			'LEFT-ALIGN' => __('LEFT','boutique-designer-shop'),
            'CENTER-ALIGN' => __('CENTER','boutique-designer-shop'),
            'RIGHT-ALIGN' => __('RIGHT','boutique-designer-shop'),
		),
	) );

	$wp_customize->add_setting(
		'boutique_designer_shop_footer_widgets_show_hide',
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
			'boutique_designer_shop_footer_widgets_show_hide',
			array(
				'settings'        => 'boutique_designer_shop_footer_widgets_show_hide',
				'section'         => 'boutique_designer_shop_footer_copyright',
				'label'           => __( 'Check To show Footer Widgets', 'boutique-designer-shop' ),
				'choices'		  => array(
					'1'      => __( 'On', 'boutique-designer-shop' ),
					'off'    => __( 'Off', 'boutique-designer-shop' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting('boutique_designer_shop_footer_widget',array(
        'default' => '4',
        'sanitize_callback' => 'boutique_designer_shop_sanitize_choices'
	));
	$wp_customize->add_control('boutique_designer_shop_footer_widget',array(
		'type' => 'radio',
		'label'     => __('Footer Per Column', 'boutique-designer-shop'),
		'section' => 'boutique_designer_shop_footer_copyright',
		'type' => 'select',
		'choices' => array(
			'1' => __('1','boutique-designer-shop'),
            '2' => __('2','boutique-designer-shop'),
            '3' => __('3','boutique-designer-shop'),
            '4' => __('4','boutique-designer-shop'),
		)
	) );