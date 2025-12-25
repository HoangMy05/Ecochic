<?php
function swimwearstore_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'swimwearstore_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'swimwear-store' ),
		)
	);  
	 


	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'swimwear-store' ),
			'description'=> __('<a>Note :</a> Image Size Should Be 1300*580','swimwear-store'),
			'priority' => 1,
			'panel' => 'swimwearstore_frontpage_sections',
		)
	);



	$wp_customize->add_setting('swimwearstore_slider_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new swimwearstore_Tab_Control($wp_customize, 'swimwearstore_slider_tabs', array(
	   'section' => 'slider_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'swimwear-store'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'slider1',
            	'slider2',
            	'slider3',
            	'slider4',
            	'slider5',
            	'slider6'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'swimwear-store'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
				'slider_paginationcolor',
				'slider_paginationactivecolor'
            ),
     	),
		 array(
            'name' => esc_html__('Layout', 'swimwear-store'),
            'icon' => 'dashicons dashicons-layout',
            'fields' => array(
                'swimwearstore_slider_section_width',
                'swimwearstore_slider_padding',
                'swimwearstore_slider_top_padding',
                'swimwearstore_slider_bottom_padding'
            ),
         )
	    
    	),
	))); 


	

	// General Tab

	// Slider 1
	$wp_customize->add_setting( 
    	'slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider1',
		array(
		    'label'   		=> __('Slider 1','swimwear-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		



	// Slider 2
	$wp_customize->add_setting(
    	'slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider2',
		array(
		    'label'   		=> __('Slider 2','swimwear-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'slider3',
		array(
		    'label'   		=> __('Slider 3','swimwear-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 4
	$wp_customize->add_setting(
    	'slider4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'slider4',
		array(
		    'label'   		=> __('Slider 4','swimwear-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);



	// Slider 5
	$wp_customize->add_setting(
    	'slider5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider5',
		array(
		    'label'   		=> __('Slider 5','swimwear-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider 6
	$wp_customize->add_setting(
    	'slider6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider6',
		array(
		    'label'   		=> __('Slider 6','swimwear-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);




	// Style setting

	
	// slider pagination Color
	$sliderpaginationcolor = esc_html__('#fff', 'swimwear-store' );
	$wp_customize->add_setting(
    	'slider_paginationcolor',
    	array(
			'default' => $sliderpaginationcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_paginationcolor',
		array(
		    'label'   		=> __('Slider Dot Color','swimwear-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider paginationactive Color
	$sliderpaginationactivecolor = esc_html__('#FAB3B8', 'swimwear-store' );
	$wp_customize->add_setting(
    	'slider_paginationactivecolor',
    	array(
			'default' => $sliderpaginationactivecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_paginationactivecolor',
		array(
		    'label'   		=> __('Slider Active Dot Color','swimwear-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// layout setting

	$wp_customize->add_setting('swimwearstore_slider_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'swimwearstore_sanitize_choices',
    ));
    $wp_customize->add_control('swimwearstore_slider_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','swimwear-store'),
        'choices' => array (
            'Box Width' => __('Box Width','swimwear-store'),
            'Full Width' => __('Full Width','swimwear-store')
        ),
        'section' => 'slider_setting',
    ));


    // slider section padding 
	$wp_customize->add_setting('swimwearstore_slider_padding',array(
		'sanitize_callback'   => 'esc_html'
	));
	$wp_customize->add_control('swimwearstore_slider_padding',array(
		'label' => __('Section Padding','swimwear-store'),
		'section' => 'slider_setting'
	));

	$wp_customize->add_setting('swimwearstore_slider_top_padding',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('swimwearstore_slider_top_padding',array(
		'type' => 'number',
		'label' => __('Top','swimwear-store'),
		'section' => 'slider_setting',
	));

	$wp_customize->add_setting('swimwearstore_slider_bottom_padding',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('swimwearstore_slider_bottom_padding',array(
		'type' => 'number',
		'label' => __('Bottom','swimwear-store'),
		'section' => 'slider_setting',
	));



	/*=========================================
	newarrivalproduct Section
	=========================================*/
	$wp_customize->add_section(
		'newarrivalproduct_setting', array(
			'title' => esc_html__( 'New Arrival Section', 'swimwear-store' ),
			'priority' => 2,
			'panel' => 'swimwearstore_frontpage_sections',
		)
	);

	$wp_customize->add_setting('swimwearstore_newarrivalproduct_tabs', array(
		'sanitize_callback' => 'wp_kses_post',
	 ));
 
	 $wp_customize->add_control(new swimwearstore_Tab_Control($wp_customize, 'swimwearstore_newarrivalproduct_tabs', array(
		'section' => 'newarrivalproduct_setting',
		'priority' => 2,
		'buttons' => array(
		   array(
			  'name' => esc_html__('General', 'swimwear-store'),
			 'icon' => 'dashicons dashicons-welcome-write-blog',
			 'fields' => array(
				'newarrivalproduct_disable_section',
				 'newarrivalproduct_heading',
				 'newarrivalproduct_btntext',
				 'newarrivalproduct_btnlink'
			 ),
			 'active' => true,
		  ),
		   array(
			 'name' => esc_html__('Style', 'swimwear-store'),
			 'icon' => 'dashicons dashicons-art',
			 'fields' => array(
				 'newarrivalproduct_headingcolor',
				 'newarrivalproduct_producttitlecolor',
				 'newarrivalproduct_regularpricecolor',
				 'newarrivalproduct_salepricecolor',
				 'newarrivalproduct_salebtntextcolor',
				 'newarrivalproduct_salebtnbgcolor',
				 'newarrivalproduct_salebtnbghovercolor'
			 ),
		  ),
		  array(
			 'name' => esc_html__('Layout', 'swimwear-store'),
			 'icon' => 'dashicons dashicons-layout',
			 'fields' => array(
				 'swimwearstore_newarrivalproduct_section_width',
				 'swimwearstore_newarrivalproduct_padding',
				 'swimwearstore_newarrivalproduct_top_padding',
				 'swimwearstore_newarrivalproduct_bottom_padding',
				 'swimwearstore_newarrivalproduct_image_height'
 
			 ),
		  )
		 
		 ),
	 ))); 


	//  Genral Settings

	// hide show newarrivalproduct section
	$wp_customize->add_setting(
        'newarrivalproduct_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new swimwearstore_Toggle_Switch_Custom_Control(
            $wp_customize,
            'newarrivalproduct_disable_section',
            array(
                'settings'      => 'newarrivalproduct_disable_section',
                'section'       => 'newarrivalproduct_setting',
                'label'         => __( 'Disable Section', 'swimwear-store' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'swimwear-store' ),
                    'off' => __( 'No', 'swimwear-store' )
                ),
            )
        )
    );

	// newarrivalproduct title
	$newarrivalproductheading = esc_html__('New Arrivals', 'swimwear-store' );
	$wp_customize->add_setting(
    	'newarrivalproduct_heading',
    	array(
			'default' => $newarrivalproductheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'newarrivalproduct_heading',
		array(
		    'label'   		=> __('Heading','swimwear-store'),
		    'section'		=> 'newarrivalproduct_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// newarrivalproduct btntext
	$newarrivalproductbtntext = esc_html__('View All', 'swimwear-store' );
	$wp_customize->add_setting(
    	'newarrivalproduct_btntext',
    	array(
			'default' => $newarrivalproductbtntext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrivalproduct_btntext',
		array(
		    'label'   		=> __('Button Text','swimwear-store'),
		    'section'		=> 'newarrivalproduct_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// newarrivalproduct btnlink
	$newarrivalproductbtnlink = esc_html__('#', 'swimwear-store' );
	$wp_customize->add_setting(
    	'newarrivalproduct_btnlink',
    	array(
			'default' => $newarrivalproductbtnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrivalproduct_btnlink',
		array(
		    'label'   		=> __('Button Link','swimwear-store'),
		    'section'		=> 'newarrivalproduct_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	

	// Style setting

	// newarrivalproduct heading Color
	$newarrivalproductheadingcolor = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'newarrivalproduct_headingcolor',
    	array(
			'default' => $newarrivalproductheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrivalproduct_headingcolor',
		array(
		    'label'   		=> __('Heading Color','swimwear-store'),
		    'section'		=> 'newarrivalproduct_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// newarrivalproduct producttitle Color
	$newarrivalproductproducttitlecolor = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'newarrivalproduct_producttitlecolor',
    	array(
			'default' => $newarrivalproductproducttitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrivalproduct_producttitlecolor',
		array(
		    'label'   		=> __('Product Title Color','swimwear-store'),
		    'section'		=> 'newarrivalproduct_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// newarrivalproduct price Color
	$newarrivalproductpricecolor = esc_html__('#FF0000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'newarrivalproduct_regularpricecolor',
    	array(
			'default' => $newarrivalproductpricecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrivalproduct_regularpricecolor',
		array(
		    'label'   		=> __('Regular Price Color','swimwear-store'),
		    'section'		=> 'newarrivalproduct_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// newarrivalproduct price Color
	$newarrivalproductpricecolor = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'newarrivalproduct_salepricecolor',
    	array(
			'default' => $newarrivalproductpricecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrivalproduct_salepricecolor',
		array(
		    'label'   		=> __('Sale Price Color','swimwear-store'),
		    'section'		=> 'newarrivalproduct_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// newarrivalproduct btntext Color
	$newarrivalproductbtntextcolor = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'newarrivalproduct_salebtntextcolor',
    	array(
			'default' => $newarrivalproductbtntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrivalproduct_salebtntextcolor',
		array(
		    'label'   		=> __('Button Text Color','swimwear-store'),
		    'section'		=> 'newarrivalproduct_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// newarrivalproduct btnbg Color
	$newarrivalproductbtnbgcolor = esc_html__('#FAB3B8', 'swimwear-store' );
	$wp_customize->add_setting(
    	'newarrivalproduct_salebtnbgcolor',
    	array(
			'default' => $newarrivalproductbtnbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrivalproduct_salebtnbgcolor',
		array(
		    'label'   		=> __('Button BG Color','swimwear-store'),
		    'section'		=> 'newarrivalproduct_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



// newarrivalproduct btnbg Hovr Color
	$newarrivalproductbtnbghovercolor = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'newarrivalproduct_salebtnbghovercolor',
    	array(
			'default' => $newarrivalproductbtnbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrivalproduct_salebtnbghovercolor',
		array(
		    'label'   		=> __('Button BG Hover Color','swimwear-store'),
		    'section'		=> 'newarrivalproduct_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	

	// layout setting

	$wp_customize->add_setting('swimwearstore_newarrivalproduct_section_width',array(
		'default' => 'Box Width',
		'sanitize_callback' => 'swimwearstore_sanitize_choices',
	));
	$wp_customize->add_control('swimwearstore_newarrivalproduct_section_width',array(
		'type' => 'select',
		'label' => __('Section Width','swimwear-store'),
		'choices' => array (
			'Box Width' => __('Box Width','swimwear-store'),
			'Full Width' => __('Full Width','swimwear-store')
		),
		'section' => 'newarrivalproduct_setting',
	));

	// newarrivalproduct section padding 
	$wp_customize->add_setting('swimwearstore_newarrivalproduct_padding',array(
		'sanitize_callback'   => 'esc_html'
	));
	$wp_customize->add_control('swimwearstore_newarrivalproduct_padding',array(
		'label' => __('Section Padding','swimwear-store'),
		'section' => 'newarrivalproduct_setting'
	));

	$wp_customize->add_setting('swimwearstore_newarrivalproduct_top_padding',array(
		'default' => '3',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('swimwearstore_newarrivalproduct_top_padding',array(
		'type' => 'number',
		'label' => __('Top','swimwear-store'),
		'section' => 'newarrivalproduct_setting',
	));

	$wp_customize->add_setting('swimwearstore_newarrivalproduct_bottom_padding',array(
		'default' => '3',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('swimwearstore_newarrivalproduct_bottom_padding',array(
		'type' => 'number',
		'label' => __('Bottom','swimwear-store'),
		'section' => 'newarrivalproduct_setting',
	));
  
	// newarrivalproduct img height
    $wp_customize->add_setting('swimwearstore_newarrivalproduct_image_height',array(
        'default' => 419,
        'sanitize_callback' => 'swimwearstore_sanitize_float'
    ));
    $wp_customize->add_control(new swimwearstore_Custom_Control( $wp_customize, 'swimwearstore_newarrivalproduct_image_height',array(
	    'label' => __('Image Height','swimwear-store'),
	    'section' => 'newarrivalproduct_setting',
	    'input_attrs' => array(
	            'min' => 0,
	            'max' => 500,
	            'step' => 1,
	        ),
    )));

		
	
	/*=========================================
	banner Section
	=========================================*/
	$wp_customize->add_section(
		'banner_setting', array(
			'title' => esc_html__( 'Banner Section', 'swimwear-store' ),
			'priority' => 2,
			'panel' => 'swimwearstore_frontpage_sections',
		)
	);

	$wp_customize->add_setting('swimwearstore_banner_tabs', array(
		'sanitize_callback' => 'wp_kses_post',
	 ));
 
	 $wp_customize->add_control(new swimwearstore_Tab_Control($wp_customize, 'swimwearstore_banner_tabs', array(
		'section' => 'banner_setting',
		'priority' => 2,
		'buttons' => array(
		   array(
			  'name' => esc_html__('General', 'swimwear-store'),
			 'icon' => 'dashicons dashicons-welcome-write-blog',
			 'fields' => array(
				'banner_disable_section',
				 'banner_image',
				 'banner_offernumber',
				 'banner_discounttext',
				 'banner_title',
				 'banner_btntext',
				 'banner_btnlink'
			 ),
			 'active' => true,
		  ),
		   array(
			 'name' => esc_html__('Style', 'swimwear-store'),
			 'icon' => 'dashicons dashicons-art',
			 'fields' => array(
				 'banner_contentbgcolor',
				 'banner_offertextcolor',
				 'banner_titlecolor',
				 'banner_buttntextcolor',
				 'banner_buttonbgcolor',
				 'banner_buttonbghovercolor',
				 'banner_buttontexthovercolor'
			 ),
		  ),
		  array(
			 'name' => esc_html__('Layout', 'swimwear-store'),
			 'icon' => 'dashicons dashicons-layout',
			 'fields' => array(
				 'swimwearstore_banner_section_width',
				 'swimwearstore_banner_padding',
				 'swimwearstore_banner_top_padding',
				 'swimwearstore_banner_bottom_padding'
			 ),
		  )
		 
		 ),
	 ))); 


	// General

	// hide show banner section
	$wp_customize->add_setting(
        'banner_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new swimwearstore_Toggle_Switch_Custom_Control(
            $wp_customize,
            'banner_disable_section',
            array(
                'settings'      => 'banner_disable_section',
                'section'       => 'banner_setting',
                'label'         => __( 'Disable Section', 'swimwear-store' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'swimwear-store' ),
                    'off' => __( 'No', 'swimwear-store' )
                ),
            )
        )
    );

	// banner1image
	$wp_customize->add_setting(
    	'banner_image',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'banner_image',
	        array(
			    'label'   		=> __('Banner Image','swimwear-store'),
	            'section' => 'banner_setting',
	            'settings' => 'banner_image'
	        )
	    )
	);

	// banner2offertext 
	$banner2offertext = esc_html__('50', 'swimwear-store' );
	$wp_customize->add_setting(
    	'banner_offernumber',
    	array(
			'default' => $banner2offertext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'banner_offernumber',
		array(
		    'label'   		=> __('Banner Offer Number','swimwear-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// banner2discounttext 
	$banner2discounttext = esc_html__('DISCOUNT', 'swimwear-store' );
	$wp_customize->add_setting(
    	'banner_discounttext',
    	array(
			'default' => $banner2discounttext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'banner_discounttext',
		array(
		    'label'   		=> __('Banner Discount Text','swimwear-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// banner2title 
	$banner2title = esc_html__('SET FOR A GOOD TIME', 'swimwear-store' );
	$wp_customize->add_setting(
    	'banner_title',
    	array(
			'default' => $banner2title,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'banner_title',
		array(
		    'label'   		=> __('Banner Title','swimwear-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// banner 2 btn text
	$banner2btntext = esc_html__('Buy Now', 'swimwear-store' );
	$wp_customize->add_setting(
    	'banner_btntext',
    	array(
			'default' => $banner2btntext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'banner_btntext',
		array(
		    'label'   		=> __('Banner Button Text','swimwear-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// banner 2 btn link
	$banner2btnlink = esc_html__('#', 'swimwear-store' );
	$wp_customize->add_setting(
    	'banner_btnlink',
    	array(
			'default' => $banner2btnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'banner_btnlink',
		array(
		    'label'   		=> __('Banner Button Link','swimwear-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	//style

	// banner contentbg Color
	$bannercontentbgcolor = esc_html__('#FEF6F8', 'swimwear-store' );
	$wp_customize->add_setting(
    	'banner_contentbgcolor',
    	array(
			'default' => $bannercontentbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_contentbgcolor',
		array(
		    'label'   		=> __('Content BG Color','swimwear-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner offertext Color
	$banneroffertextcolor = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'banner_offertextcolor',
    	array(
			'default' => $banneroffertextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_offertextcolor',
		array(
		    'label'   		=> __('Offer Text Color','swimwear-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner title Color
	$bannertitlecolor = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'banner_titlecolor',
    	array(
			'default' => $bannertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_titlecolor',
		array(
		    'label'   		=> __('Title Color','swimwear-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner buttntext Color
	$bannerbuttntextcolor = esc_html__('#fff', 'swimwear-store' );
	$wp_customize->add_setting(
    	'banner_buttntextcolor',
    	array(
			'default' => $bannerbuttntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_buttntextcolor',
		array(
		    'label'   		=> __('Button Text Color','swimwear-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner buttonbg Color
	$bannerbuttonbgcolor = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'banner_buttonbgcolor',
    	array(
			'default' => $bannerbuttonbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_buttonbgcolor',
		array(
		    'label'   		=> __('Button BG Color','swimwear-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner buttonbghover Color
	$bannerbuttonbghovercolor = esc_html__('#FAB3B8', 'swimwear-store' );
	$wp_customize->add_setting(
    	'banner_buttonbghovercolor',
    	array(
			'default' => $bannerbuttonbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_buttonbghovercolor',
		array(
		    'label'   		=> __('Button BG Hover Color','swimwear-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

		// banner buttontexthover Color
	$bannerbuttontexthovercolor = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'banner_buttontexthovercolor',
    	array(
			'default' => $bannerbuttontexthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_buttontexthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','swimwear-store'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	
	// layout setting
	$wp_customize->add_setting('swimwearstore_banner_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'swimwearstore_sanitize_choices',
    ));
    $wp_customize->add_control('swimwearstore_banner_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','swimwear-store'),
        'choices' => array (
            'Box Width' => __('Box Width','swimwear-store'),
            'Full Width' => __('Full Width','swimwear-store')
        ),
        'section' => 'banner_setting',
    ));

	// banner section padding 
	$wp_customize->add_setting('swimwearstore_banner_padding',array(
		'sanitize_callback'   => 'esc_html'
	));
	$wp_customize->add_control('swimwearstore_banner_padding',array(
		'label' => __('Section Padding','swimwear-store'),
		'section' => 'banner_setting'
	));

	$wp_customize->add_setting('swimwearstore_banner_top_padding',array(
		'default' => '3',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('swimwearstore_banner_top_padding',array(
		'type' => 'number',
		'label' => __('Top','swimwear-store'),
		'section' => 'banner_setting',
	));

	$wp_customize->add_setting('swimwearstore_banner_bottom_padding',array(
		'default' => '3',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('swimwearstore_banner_bottom_padding',array(
		'type' => 'number',
		'label' => __('Bottom','swimwear-store'),
		'section' => 'banner_setting',
	));


	$wp_customize->register_control_type('swimwearstore_Tab_Control');
}

add_action( 'customize_register', 'swimwearstore_blog_setting' );

// service selective refresh
function swimwearstore_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'swimwearstore_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'swimwearstore_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'swimwearstore_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'swimwearstore_blog_section_partials' );

// blog_title
function swimwearstore_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function swimwearstore_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function swimwearstore_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


