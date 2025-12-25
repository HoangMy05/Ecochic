<?php
function swimwearstore_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'swimwear-store'),
		) 
	);

	
	/*=========================================
	Swimwear Store Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','swimwear-store'),
			'panel'  		=> 'header_section',
		)
    );


	// topheader Logo Width
    $wp_customize->add_setting('topheader_logowidth',array(
        'default' => 22,
        'sanitize_callback' => 'swimwearstore_sanitize_float'
    ));
    $wp_customize->add_control(new swimwearstore_Custom_Control( $wp_customize, 'topheader_logowidth',array(
	    'label' => __('Logo Size','swimwear-store'),
	    'section' => 'title_tagline',
	    'input_attrs' => array(
	            'min' => 0,
	            'max' => 500,
	            'step' => 1,
	        ),
    )));


    // top header Site Title Color
	$topheadersitetitlecol = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecol',
    	array(
			'default' => $topheadersitetitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecol',
		array(
		    'label'   		=> __('Site Title Color','swimwear-store'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// top header Tagline Color
	$topheadertaglinecol = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'topheader_taglinecol',
    	array(
			'default' => $topheadertaglinecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_taglinecol',
		array(
		    'label'   		=> __('Tagline Color','swimwear-store'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
 
	/*=========================================
	Swimwear Store header
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 6,
            'title' 		=> __('Header','swimwear-store'),
			'panel'  		=> 'header_section',
		)
    );	


    $wp_customize->add_setting('swimwearstore_reset_header_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new swimwearstore_Reset_Custom_Control($wp_customize, 'swimwear_store_reset_header_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Header Settings', 'swimwear-store'),
	  'description' => 'swimwear_store_header_reset_settings',
	  'section' => 'top_header'
	)));



    $wp_customize->add_setting('swimwearstore_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new swimwearstore_Tab_Control($wp_customize, 'swimwearstore_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 1,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'swimwear-store'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'hide_show_sticky',
				'topheader_topbartext',
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'swimwear-store'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
				'header_topheadbgcolor',
				'header_topheadtextcolor',
				'header_topheadiconscolor',
            	'header_menuscolor',
				'header_menusiconcolor',
            	'header_menushovercolor',
				'header_submenusiconcolor',
            	'header_submenusbgcolor',
            	'header_submenutextcolor',
            	'header_submenustxthovercolor'
            ),
         ),
		 array(
            'name' => esc_html__('Layout', 'swimwear-store'),
            'icon' => 'dashicons dashicons-layout',
            'fields' => array(
                'swimwearstore_header_section_width'
            ),
         )
	    
    	),
	)));


	// general setting

	// sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'swimwearstore_switch_sanitization'
   	) );
   	$wp_customize->add_control( new swimwearstore_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','swimwear-store' ),
        'section' => 'top_header'
   	)));


	// topheader topbartext
	$topheadertopbartext = esc_html__('Cash on Delivery, Pay at your Doorstep', 'swimwear-store' );
	$wp_customize->add_setting(
    	'topheader_topbartext',
    	array(
			'default' => $topheadertopbartext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_topbartext',
		array(
		    'label'   		=> __('Top Bar Text','swimwear-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	


	// Style setting

	// header topheadbg Color
	$headertopheadbgcolor = esc_html__('#393438', 'swimwear-store' );
	$wp_customize->add_setting(
    	'header_topheadbgcolor',
    	array(
			'default' => $headertopheadbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadbgcolor',
		array(
		    'label'   		=> __('Top Head BG Color','swimwear-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header topheadtext Color
	$headertopheadtextcolor = esc_html__('#fff', 'swimwear-store' );
	$wp_customize->add_setting(
    	'header_topheadtextcolor',
    	array(
			'default' => $headertopheadtextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadtextcolor',
		array(
		    'label'   		=> __('Top Head Text Color','swimwear-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header topheadicons Color
	$headertopheadiconscolor = esc_html__('#393438', 'swimwear-store' );
	$wp_customize->add_setting(
    	'header_topheadiconscolor',
    	array(
			'default' => $headertopheadiconscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadiconscolor',
		array(
		    'label'   		=> __('Top Head Icons Color','swimwear-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	
	// header menus Color
	$headermenuscolor = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'header_menuscolor',
    	array(
			'default' => $headermenuscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuscolor',
		array(
		    'label'   		=> __('Menus Color','swimwear-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menusicon Color
	$headermenusiconcolor = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'header_menusiconcolor',
    	array(
			'default' => $headermenusiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menusiconcolor',
		array(
		    'label'   		=> __('Menus Icon Color','swimwear-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menushover Color
	$headermenushovercolor = esc_html__('#FAB3B8', 'swimwear-store' );
	$wp_customize->add_setting(
    	'header_menushovercolor',
    	array(
			'default' => $headermenushovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menushovercolor',
		array(
		    'label'   		=> __('Menus Hover & Active Color','swimwear-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenusicon Color
	$headersubmenusiconcolor = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'header_submenusiconcolor',
    	array(
			'default' => $headersubmenusiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusiconcolor',
		array(
		    'label'   		=> __('Sub Menu Icon Color','swimwear-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	$headersubmenusbgcolor = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'header_submenusbgcolor',
    	array(
			'default' => $headersubmenusbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbgcolor',
		array(
		    'label'   		=> __('SubMenus BG Color','swimwear-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	

	// header submenutext Color
	$headersubmenutextcolor = esc_html__('#fff', 'swimwear-store' );
	$wp_customize->add_setting(
    	'header_submenutextcolor',
    	array(
			'default' => $headersubmenutextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenutextcolor',
		array(
		    'label'   		=> __('SubMenus Text Color','swimwear-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header submenustxthover Color
	$headersubmenustxthovercolor = esc_html__('#FAB3B8', 'swimwear-store' );
	$wp_customize->add_setting(
    	'header_submenustxthovercolor',
    	array(
			'default' => $headersubmenustxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenustxthovercolor',
		array(
		    'label'   		=> __('SubMenus Text Hover Color','swimwear-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// layout setting
	$wp_customize->add_setting('swimwearstore_header_section_width',array(
        'default' => 'Full Width',
        'sanitize_callback' => 'swimwearstore_sanitize_choices',
    ));
    $wp_customize->add_control('swimwearstore_header_section_width',array(
        'type' => 'select',
        'label' => __('Header Width','swimwear-store'),
        'choices' => array (
            'Box Width' => __('Box Width','swimwear-store'),
            'Full Width' => __('Full Width','swimwear-store')
        ),
        'section' => 'top_header',
    ));



	$wp_customize->register_control_type('swimwearstore_Tab_Control');
	$wp_customize->register_panel_type( 'swimwearstore_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'swimwearstore_WP_Customize_Section' );

}
add_action( 'customize_register', 'swimwearstore_header_settings' );



if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class swimwearstore_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'swimwearstore_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class swimwearstore_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'swimwearstore_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}






