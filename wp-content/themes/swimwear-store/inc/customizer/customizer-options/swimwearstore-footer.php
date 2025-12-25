<?php
function swimwearstore_footer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'swimwear-store'),
		) 
	);

    

	// Footer Bottom // 
	$wp_customize->add_section(
        'footer_bottom',
        array(
            'title' 		=> __('Footer','swimwear-store'),
			'panel'  		=> 'footer_section',
			'priority'      => 3,
		)
    );
	
	// Footer Copyright Head
	$wp_customize->add_setting(
		'footer_btm_copy_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'swimwearstore_sanitize_text',
			'priority'  => 3,
		)
	);
	
	// Footer Copyright 
	$swimwearstore_foo_copy = esc_html__('Copyright &copy; [current_year] [site_title] | Powered by [theme_author]', 'swimwear-store' );
	$wp_customize->add_setting(
    	'footer_copyright',
    	array(
			'default' => $swimwearstore_foo_copy,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyright',
		array(
		    'label'   		=> __('CopyRight','swimwear-store'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'textarea',
			'transport'         => $selective_refresh,
		)  
	);	


	
	// footer copyrightbg color
	$footercopyrightbgcolor = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'footer_copyrightbgcolor',
    	array(
			'default' => $footercopyrightbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyrightbgcolor',
		array(
		    'label'   		=> __('CopyRight BG Color','swimwear-store'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer copyright color
	$footercopyrightcolor = esc_html__('#fff', 'swimwear-store' );
	$wp_customize->add_setting(
    	'footer_copyrightcolor',
    	array(
			'default' => $footercopyrightcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyrightcolor',
		array(
		    'label'   		=> __('CopyRight Text Color','swimwear-store'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// footer title color
	$footertitlecolor = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'footer_titlecolor',
    	array(
			'default' => $footertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_titlecolor',
		array(
		    'label'   		=> __('Title Color','swimwear-store'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer text color
	$footertextcolor = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'footer_textcolor',
    	array(
			'default' => $footertextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_textcolor',
		array(
		    'label'   		=> __('Text Color','swimwear-store'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer menutexthover color
	$footermenutexthovercolor = esc_html__('#707070', 'swimwear-store' );
	$wp_customize->add_setting(
    	'footer_menutexthovercolor',
    	array(
			'default' => $footermenutexthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_menutexthovercolor',
		array(
		    'label'   		=> __('Menu Text Hover Color','swimwear-store'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// footer scrolltotopicon color
	$footerscrolltotopiconcolor = esc_html__('#fff', 'swimwear-store' );
	$wp_customize->add_setting(
    	'footer_scrolltotopiconcolor',
    	array(
			'default' => $footerscrolltotopiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_scrolltotopiconcolor',
		array(
		    'label'   		=> __('Scroll To Top Icon Color','swimwear-store'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer scrolltotopbg color
	$footerscrolltotopbgcolor = esc_html__('#FAB3B8', 'swimwear-store' );
	$wp_customize->add_setting(
    	'footer_scrolltotopbgcolor',
    	array(
			'default' => $footerscrolltotopbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_scrolltotopbgcolor',
		array(
		    'label'   		=> __('Scroll To Top BG Color','swimwear-store'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer scrolltotopbghrv color
	$footerscrolltotopbghrvcolor = esc_html__('#000', 'swimwear-store' );
	$wp_customize->add_setting(
    	'footer_scrolltotopbghrvcolor',
    	array(
			'default' => $footerscrolltotopbghrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_scrolltotopbghrvcolor',
		array(
		    'label'   		=> __('Scroll To Top BG Hover Color','swimwear-store'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);




}
add_action( 'customize_register', 'swimwearstore_footer' );
// Footer selective refresh
function swimwearstore_footer_partials( $wp_customize ){	
	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '.copy-right .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'swimwearstore_footer_copyright_render_callback',
	) );
	
	}
add_action( 'customize_register', 'swimwearstore_footer_partials' );


// copyright_content
function swimwearstore_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}