<?php
/**
 * Comic Book Store Theme Customizer
 *
 * @package Comic Book Store
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function comic_book_store_customize_register( $wp_customize ) {

	function comic_book_store_sanitize_dropdown_pages( $page_id, $setting ) {
  		$page_id = absint( $page_id );
  		return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	wp_enqueue_style('comic-book-store-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/css/customize-controls.css');

	// Enable / Disable Logo
	$wp_customize->add_setting('comic_book_store_logo_enable',array(
		'default' => true,
		'sanitize_callback' => 'comic_book_store_sanitize_checkbox',
	));
	$wp_customize->add_control( 'comic_book_store_logo_enable', array(
		'settings' => 'comic_book_store_logo_enable',
		'section'   => 'title_tagline',
		'label'     => __('Enable Logo','comic-book-store'),
		'type'      => 'checkbox'
	));

	//Logo
    $wp_customize->add_setting('comic_book_store_logo_width', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'comic_book_store_sanitize_integer'
    ));
    $wp_customize->add_control(new Comic_Book_Store_Slider_Custom_Control($wp_customize, 'comic_book_store_logo_width', array(
    	'label'          => __( 'Logo Width', 'comic-book-store'),
        'section' => 'title_tagline',
        'settings' => 'comic_book_store_logo_width',
        'input_attrs' => array(
            'step' => 1,
            'min' => 0,
            'max' => 300,
        ),
    )));

	// color site title
	$wp_customize->add_setting('comic_book_store_sitetitle_color',array(
		'default' => '',
		'sanitize_callback' => 'comic_book_store_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'comic_book_store_sitetitle_color', array(
	   'settings' => 'comic_book_store_sitetitle_color',
	   'section'   => 'title_tagline',
	   'label' => __('Site Title Color', 'comic-book-store'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting('comic_book_store_title_enable',array(
		'default' => false,
		'sanitize_callback' => 'comic_book_store_sanitize_checkbox',
	));
	$wp_customize->add_control( 'comic_book_store_title_enable', array(
	   'settings' => 'comic_book_store_title_enable',
	   'section'   => 'title_tagline',
	   'label'     => __('Enable Site Title','comic-book-store'),
	   'type'      => 'checkbox'
	));

	// color site tagline
	$wp_customize->add_setting('comic_book_store_sitetagline_color',array(
		'default' => '',
		'sanitize_callback' => 'comic_book_store_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'comic_book_store_sitetagline_color', array(
	   'settings' => 'comic_book_store_sitetagline_color',
	   'section'   => 'title_tagline',
	   'label' => __('Site Tagline Color', 'comic-book-store'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting('comic_book_store_tagline_enable',array(
		'default' => false,
		'sanitize_callback' => 'comic_book_store_sanitize_checkbox',
	));
	$wp_customize->add_control( 'comic_book_store_tagline_enable', array(
	   'settings' => 'comic_book_store_tagline_enable',
	   'section'   => 'title_tagline',
	   'label'     => __('Enable Site Tagline','comic-book-store'),
	   'type'      => 'checkbox'
	));

	// woocommerce section
	$wp_customize->add_section('comic_book_store_woocommerce_page_settings', array(
		'title'    => __('WooCommerce Page Settings', 'comic-book-store'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting('comic_book_store_shop_page_sidebar',array(
		'default' => false,
		'sanitize_callback'	=> 'comic_book_store_sanitize_checkbox'
	));
	$wp_customize->add_control('comic_book_store_shop_page_sidebar',array(
		'type' => 'checkbox',
		'label' => __(' Check To Enable Shop page sidebar','comic-book-store'),
		'section' => 'comic_book_store_woocommerce_page_settings',
	));

    // shop page sidebar alignment
    $wp_customize->add_setting('comic_book_store_shop_page_sidebar_position', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'comic_book_store_sanitize_choices',
	));
	$wp_customize->add_control('comic_book_store_shop_page_sidebar_position',array(
		'type'           => 'radio',
		'label'          => __('Shop Page Sidebar', 'comic-book-store'),
		'section'        => 'comic_book_store_woocommerce_page_settings',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'comic-book-store'),
			'Right Sidebar' => __('Right Sidebar', 'comic-book-store'),
		),
	));	 

	$wp_customize->add_setting('comic_book_store_wooproducts_nav',array(
		'default' => 'Yes',
		'sanitize_callback'	=> 'comic_book_store_sanitize_choices'
	));
	$wp_customize->add_control('comic_book_store_wooproducts_nav',array(
		'type' => 'select',
		'label' => __('Shop Page Products Navigation','comic-book-store'),
		'choices' => array(
			 'Yes' => __('Yes','comic-book-store'),
			 'No' => __('No','comic-book-store'),
		 ),
		'section' => 'comic_book_store_woocommerce_page_settings',
	));	

	$wp_customize->add_setting( 'comic_book_store_single_page_sidebar',array(
		'default' => false,
		'sanitize_callback'	=> 'comic_book_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('comic_book_store_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Check To Enable Single Product Page Sidebar','comic-book-store'),
		'section' => 'comic_book_store_woocommerce_page_settings'
    ));

	// single product page sidebar alignment
    $wp_customize->add_setting('comic_book_store_single_product_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'comic_book_store_sanitize_choices',
	));
	$wp_customize->add_control('comic_book_store_single_product_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Single product Page Sidebar', 'comic-book-store'),
		'section'        => 'comic_book_store_woocommerce_page_settings',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'comic-book-store'),
			'Right Sidebar' => __('Right Sidebar', 'comic-book-store'),
		),
	));

	$wp_customize->add_setting('comic_book_store_related_product_enable',array(
		'default' => true,
		'sanitize_callback'	=> 'comic_book_store_sanitize_checkbox'
	));
	$wp_customize->add_control('comic_book_store_related_product_enable',array(
		'type' => 'checkbox',
		'label' => __('Check To Enable Related product','comic-book-store'),
		'section' => 'comic_book_store_woocommerce_page_settings',
	));	

	$wp_customize->add_setting( 'comic_book_store_woo_product_img_border_radius', array(
        'default'              => '0',
        'transport'            => 'refresh',
        'sanitize_callback'    => 'comic_book_store_sanitize_integer'
    ) );
    $wp_customize->add_control(new Comic_Book_Store_Slider_Custom_Control( $wp_customize, 'comic_book_store_woo_product_img_border_radius',array(
		'label'	=> esc_html__('Woo Product Img Border Radius','comic-book-store'),
		'section'=> 'comic_book_store_woocommerce_page_settings',
		'settings'=>'comic_book_store_woo_product_img_border_radius',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 100,
        ),
	)));

	// Add a setting for number of products per row
	$wp_customize->add_setting('comic_book_store_products_per_row', array(
		'default'   => '4',
		'transport' => 'refresh',
		'sanitize_callback' => 'comic_book_store_sanitize_integer'  
	));
	$wp_customize->add_control('comic_book_store_products_per_row', array(
		'label'    => __('Woo Products Per Row', 'comic-book-store'),
		'section'  => 'comic_book_store_woocommerce_page_settings',
		'settings' => 'comic_book_store_products_per_row',
		'type'     => 'select',
		'choices'  => array(
				'2' => '2',
		'      3' => '3',
				'4' => '4',
		),
	) );

    // Add a setting for the number of products per page
    $wp_customize->add_setting('comic_book_store_products_per_page', array(
		'default'   => '9',
		'transport' => 'refresh',
		'sanitize_callback' => 'comic_book_store_sanitize_integer'
    ));
    $wp_customize->add_control('comic_book_store_products_per_page', array(
	  'label'    => __('Woo Products Per Page', 'comic-book-store'),
	  'section'  => 'comic_book_store_woocommerce_page_settings',
	  'settings' => 'comic_book_store_products_per_page',
	  'type'     => 'number',
	  'input_attrs' => array(
		 'min'  => 1,
		 'step' => 1,
	 ),
    ));	

    $wp_customize->add_setting('comic_book_store_product_sale_position',array(
		'default' => 'Left',
		'sanitize_callback' => 'comic_book_store_sanitize_choices'
	));
	$wp_customize->add_control('comic_book_store_product_sale_position',array(
		'type' => 'radio',
		'label' => __('Product Sale Position','comic-book-store'),
		'section' => 'comic_book_store_woocommerce_page_settings',
		'choices' => array(
			'Left' => __('Left','comic-book-store'),
			'Right' => __('Right','comic-book-store'),
		),
	) );   

	//Theme Options
	$wp_customize->add_panel( 'comic_book_store_panel_area', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'title' => __( 'Theme Options Panel', 'comic-book-store' ),
	) );

	//Site Layout Section
	$wp_customize->add_section('comic_book_store_site_layoutsec',array(
		'title'	=> __('Manage Site Layout Section ','comic-book-store'),
		'description' => __('<p class="sec-title">Manage Site Layout Section</p>','comic-book-store'),
		'priority'	=> 1,
		'panel' => 'comic_book_store_panel_area',
	));

	// Sticky Header
	$wp_customize->add_setting( 'comic_book_store_sticky_header',array(
        'default' => false,
        'sanitize_callback' => 'comic_book_store_sanitize_checkbox',
		'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( 'comic_book_store_sticky_header',array(
		'settings' => 'comic_book_store_sticky_header',
	    'section'   => 'comic_book_store_site_layoutsec',
        'label' => esc_html__( 'Check To Enable Sticky Header','comic-book-store' ),
        'type'      => 'checkbox'
    ));

	$wp_customize->add_setting('comic_book_store_preloader',array(
		'default' => false,
		'sanitize_callback' => 'comic_book_store_sanitize_checkbox',
	));
	$wp_customize->add_control( 'comic_book_store_preloader', array(
	   'section'   => 'comic_book_store_site_layoutsec',
	   'label'	=> __('Check to Show preloader','comic-book-store'),
	   'type'      => 'checkbox'
 	));

	$wp_customize->add_setting('comic_book_store_box_layout',array(
		'default' => false,
		'sanitize_callback' => 'comic_book_store_sanitize_checkbox',
	));
	$wp_customize->add_control( 'comic_book_store_box_layout', array(
	   'section'   => 'comic_book_store_site_layoutsec',
	   'label'	=> __('Check to Show Box Layout','comic-book-store'),
	   'type'      => 'checkbox'
 	));	

    // Add Settings and Controls for Page Layout
    $wp_customize->add_setting('comic_book_store_sidebar_page_layout',array(
	  'default' => 'full',
	  'sanitize_callback' => 'comic_book_store_sanitize_choices'
	));
	$wp_customize->add_control('comic_book_store_sidebar_page_layout',array(
		'type' => 'radio',
		'label'     => __('Theme Page Sidebar Position', 'comic-book-store'),
		'section' => 'comic_book_store_site_layoutsec',
		'choices' => array(
			'left' => __('Left','comic-book-store'),
			'right' => __('Right','comic-book-store'),
			'full' => __('No Sidebar','comic-book-store')
	),
	) );	

    // Menu Text Transform
    $wp_customize->add_setting( 'comic_book_store_menu_text_transform', array(
        'default'           => 'Capitalize',
		'transport' => 'refresh',
		'sanitize_callback' => 'comic_book_store_sanitize_choices'
    ));

    $wp_customize->add_control( 'comic_book_store_menu_text_transform', array(
        'label'    => __( 'Menu Text Transform', 'comic-book-store' ),
        'section'  => 'comic_book_store_site_layoutsec',
        'type'     => 'select',
        'choices'  => array(
			'None'       => __( 'None', 'comic-book-store' ),
            'Capitalize' => __( 'Capitalize', 'comic-book-store' ),
            'Uppercase'  => __( 'Uppercase', 'comic-book-store' ),
            'Lowercase'  => __( 'Lowercase', 'comic-book-store' ),
        ),
    ));

	$wp_customize->add_setting( 'comic_book_store_layoutsec_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('comic_book_store_layoutsec_settings_upgraded_features', array(
		'type'=> 'hidden',
		'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
		   <a target='_blank' href='". esc_url(COMIC_BOOK_STORE_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
		'section' => 'comic_book_store_site_layoutsec'
	));		

   //Global Color
   $wp_customize->add_section('comic_book_store_global_color', array(
		'title'    => __('Manage Global Color Section', 'comic-book-store'),
		'panel'    => 'comic_book_store_panel_area',
	));

	$wp_customize->add_setting('comic_book_store_first_color', array(
		'default'           => '#D71515',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'comic_book_store_first_color', array(
		'label'    => __('Theme Color', 'comic-book-store'),
		'section'  => 'comic_book_store_global_color',
		'settings' => 'comic_book_store_first_color',
	)));	

	$wp_customize->add_setting( 'comic_book_store_global_color_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('comic_book_store_global_color_settings_upgraded_features', array(
		'type'=> 'hidden',
		'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
		   <a target='_blank' href='". esc_url(COMIC_BOOK_STORE_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
		'section' => 'comic_book_store_global_color'
	));	
    
	// Banner Section
	$wp_customize->add_section('comic_book_store_banner_section',array(
	    'title' => __('Manage Banner Section','comic-book-store'),
	    'priority'  => null,
	    'description'	=> __('<p class="sec-title">Manage Banner Section</p> Select Category from the Dropdowns for banner, Also use the given image dimension (330 x 350).','comic-book-store'),
	    'panel' => 'comic_book_store_panel_area',
	));	

	// Enable/Disable Banner
	$wp_customize->add_setting('comic_book_store_banner', array(
	    'default'           => true,
	    'sanitize_callback' => 'comic_book_store_sanitize_checkbox',
	    'capability'        => 'edit_theme_options',
	));
	$wp_customize->add_control('comic_book_store_banner', array(
	    'settings' => 'comic_book_store_banner',
	    'section'  => 'comic_book_store_banner_section',
	    'label'    => __('Check To Enable This Section', 'comic-book-store'),
	    'type'     => 'checkbox',
	));

	$wp_customize->add_setting('comic_book_store_banner_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'comic_book_store_banner_bg_img',array(
	    'label' => __('Background Image','comic-book-store'),
	     'section' => 'comic_book_store_banner_section'
	)));

	// Small Title
	$wp_customize->add_setting('comic_book_store_banner_small_title', array(
	    'default'           => '',
	    'sanitize_callback' => 'sanitize_text_field',
	    'capability'        => 'edit_theme_options',
	));
	$wp_customize->add_control('comic_book_store_banner_small_title', array(
	    'settings' => 'comic_book_store_banner_small_title',
	    'section'  => 'comic_book_store_banner_section',
	    'label'    => __('Add Banner Small Title', 'comic-book-store'),
	    'type'     => 'text',
	));

	// Page Dropdown
	$wp_customize->add_setting('comic_book_store_banner_pageboxes', array(
	    'default'           => '0',
	    'capability'        => 'edit_theme_options',
	    'sanitize_callback' => 'comic_book_store_sanitize_dropdown_pages',
	));
	$wp_customize->add_control('comic_book_store_banner_pageboxes', array(
	    'type'     => 'dropdown-pages',
	    'label'    => __('Select Page to display Banner', 'comic-book-store'),
	    'section'  => 'comic_book_store_banner_section',
	));

	// Button Text
	$wp_customize->add_setting('comic_book_store_button_text', array(
	    'default'           => 'Read More',
	    'sanitize_callback' => 'sanitize_text_field',
	    'capability'        => 'edit_theme_options',
	));
	$wp_customize->add_control('comic_book_store_button_text', array(
	    'settings' => 'comic_book_store_button_text',
	    'section'  => 'comic_book_store_banner_section',
	    'label'    => __('Add Banner Button Text', 'comic-book-store'),
	    'type'     => 'text',
	));

	// Button Link
	$wp_customize->add_setting('comic_book_store_button_link_banner', array(
	    'default'           => '',
	    'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('comic_book_store_button_link_banner', array(
	    'label'    => __('Add Banner Button Link', 'comic-book-store'),
	    'section'  => 'comic_book_store_banner_section',
	    'type'     => 'url',
	));

	$wp_customize->add_setting( 'comic_book_store_banner_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('comic_book_store_banner_settings_upgraded_features', array(
		'type'=> 'hidden',
		'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
		   <a target='_blank' href='". esc_url(COMIC_BOOK_STORE_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
		'section' => 'comic_book_store_banner_section'
	));		

	// Card Section
	$wp_customize->add_section('comic_book_store_cards_section',array(
	    'title' => __('Manage Cards Section','comic-book-store'),
	    'priority'  => null,
	    'panel' => 'comic_book_store_panel_area',
	));	

	for ($comic_book_store_i = 1; $comic_book_store_i <= 4; $comic_book_store_i++) {
        // Year of Course Setting
        $wp_customize->add_setting('comic_book_store_card_title' . $comic_book_store_i, array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('comic_book_store_card_title' . $comic_book_store_i, array(
            'label'    => __('Card Title', 'comic-book-store') . $comic_book_store_i,
            'section'  => 'comic_book_store_cards_section',
            'settings' => 'comic_book_store_card_title' . $comic_book_store_i,
        ));

        // Course Name Setting
        $wp_customize->add_setting('comic_book_store_card_text' . $comic_book_store_i, array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('comic_book_store_card_text' . $comic_book_store_i, array(
            'label'    => __('Card Text', 'comic-book-store') . $comic_book_store_i,
            'section'  => 'comic_book_store_cards_section',
            'settings' => 'comic_book_store_card_text' . $comic_book_store_i,
        ));

        $wp_customize->add_setting('comic_book_store_card_icon'.$comic_book_store_i,array(
            'default'=> '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('comic_book_store_card_icon'.$comic_book_store_i,array(
            'label' => __('Card Icon','comic-book-store').$comic_book_store_i,
            'description' => __('Fontawesome Icon (e.g., fa-solid fa-book-open)','comic-book-store'),
            'section'=> 'comic_book_store_cards_section',
            'type'=> 'text'
        ));
    }

	$wp_customize->add_setting( 'comic_book_store_card_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('comic_book_store_card_settings_upgraded_features', array(
		'type'=> 'hidden',
		'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
		   <a target='_blank' href='". esc_url(COMIC_BOOK_STORE_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
		'section' => 'comic_book_store_cards_section'
	));			
    
	// Featured Books Section
	$wp_customize->add_section('comic_book_store_book_section', array(
	    'title'       => __('Manage Featured Books Section', 'comic-book-store'),
	    'description' => __('<p class="sec-title">Manage Featured Books Section</p>', 'comic-book-store'),
	    'priority'    => null,
	    'panel'       => 'comic_book_store_panel_area',
	));

	$wp_customize->add_setting('comic_book_store_disabled_book_section', array(
	    'default'           => true,
	    'sanitize_callback' => 'comic_book_store_sanitize_checkbox',
	    'capability'        => 'edit_theme_options',
	));
	$wp_customize->add_control('comic_book_store_disabled_book_section', array(
	    'settings' => 'comic_book_store_disabled_book_section',
	    'section'  => 'comic_book_store_book_section',
	    'label'    => __('Check To Enable Section', 'comic-book-store'),
	    'type'     => 'checkbox',
	));

	$wp_customize->add_setting('comic_book_store_book_text', array(
	    'default'           => ' ',
	    'sanitize_callback' => 'sanitize_text_field',
	    'capability'        => 'edit_theme_options',
	));
	$wp_customize->add_control('comic_book_store_book_text', array(
	    'settings' => 'comic_book_store_book_text',
	    'section'  => 'comic_book_store_book_section',
	    'label'    => __('Add Featured Books Text', 'comic-book-store'),
	    'type'     => 'text',
	));

	$wp_customize->add_setting('comic_book_store_book_title', array(
	    'default'           => ' ',
	    'sanitize_callback' => 'sanitize_text_field',
	    'capability'        => 'edit_theme_options',
	));
	$wp_customize->add_control('comic_book_store_book_title', array(
	    'settings' => 'comic_book_store_book_title',
	    'section'  => 'comic_book_store_book_section',
	    'label'    => __('Add Featured Books Title', 'comic-book-store'),
	    'type'     => 'text',
	));

	$categories = get_categories();
	$cat_post = array();
	$cat_post['0'] = 'Select';

	foreach ($categories as $category) {
	    $cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('comic_book_store_posts', array(
	    'default' => '0',
	    'sanitize_callback' => 'comic_book_store_sanitize_choices',
	));

	$wp_customize->add_control('comic_book_store_posts', array(
	    'type'    => 'select',
	    'choices' => $cat_post,
	    'label'   => __('Select Category to display Latest Post', 'comic-book-store'),
	    'section' => 'comic_book_store_book_section',
	));

	$wp_customize->add_setting( 'comic_book_store_posts_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('comic_book_store_posts_settings_upgraded_features', array(
		'type'=> 'hidden',
		'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
		   <a target='_blank' href='". esc_url(COMIC_BOOK_STORE_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
		'section' => 'comic_book_store_book_section'
	));		
    
	//Blog post
	$wp_customize->add_section('comic_book_store_blog_post_settings',array(
        'title' => __('Manage Post Section', 'comic-book-store'),
        'priority' => null,
        'panel' => 'comic_book_store_panel_area'
    ) );

	$wp_customize->add_setting('comic_book_store_metafields_date', array(
	    'default' => true,
	    'sanitize_callback' => 'comic_book_store_sanitize_checkbox',
	));
	$wp_customize->add_control('comic_book_store_metafields_date', array(
	    'settings' => 'comic_book_store_metafields_date', 
	    'section'   => 'comic_book_store_blog_post_settings',
	    'label'     => __('Check to Enable Date', 'comic-book-store'),
	    'type'      => 'checkbox',
	));

	$wp_customize->add_setting('comic_book_store_metafields_comments', array(
		'default' => true,
		'sanitize_callback' => 'comic_book_store_sanitize_checkbox',
	));	
	$wp_customize->add_control('comic_book_store_metafields_comments', array(
		'settings' => 'comic_book_store_metafields_comments',
		'section'  => 'comic_book_store_blog_post_settings',
		'label'    => __('Check to Enable Comments', 'comic-book-store'),
		'type'     => 'checkbox',
	));

	$wp_customize->add_setting('comic_book_store_metafields_author', array(
		'default' => true,
		'sanitize_callback' => 'comic_book_store_sanitize_checkbox',
	));
	$wp_customize->add_control('comic_book_store_metafields_author', array(
		'settings' => 'comic_book_store_metafields_author',
		'section'  => 'comic_book_store_blog_post_settings',
		'label'    => __('Check to Enable Author', 'comic-book-store'),
		'type'     => 'checkbox',
	));		

	$wp_customize->add_setting('comic_book_store_metafields_time', array(
		'default' => true,
		'sanitize_callback' => 'comic_book_store_sanitize_checkbox',
	));
	$wp_customize->add_control('comic_book_store_metafields_time', array(
		'settings' => 'comic_book_store_metafields_time',
		'section'  => 'comic_book_store_blog_post_settings',
		'label'    => __('Check to Enable Time', 'comic-book-store'),
		'type'     => 'checkbox',
	));	

	$wp_customize->add_setting('comic_book_store_metabox_seperator',array(
		'default' => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('comic_book_store_metabox_seperator',array(
		'type' => 'text',
		'label' => __('Metabox Seperator','comic-book-store'),
		'description' => __('Ex: "/", "|", "-", ...','comic-book-store'),
		'section' => 'comic_book_store_blog_post_settings'
	)); 

    // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('comic_book_store_sidebar_post_layout',array(
		'default' => 'right',
		'sanitize_callback' => 'comic_book_store_sanitize_choices'
	));
	$wp_customize->add_control('comic_book_store_sidebar_post_layout',array(
		'type' => 'radio',
		'label'     => __('Theme Post Sidebar Position', 'comic-book-store'),
		'description'   => __('This option work for blog page, archive page and search page.', 'comic-book-store'),
		'section' => 'comic_book_store_blog_post_settings',
		'choices' => array(
			'left' => __('Left','comic-book-store'),
			'right' => __('Right','comic-book-store'),
			'three-column' => __('Three Columns','comic-book-store'),
			'four-column' => __('Four Columns','comic-book-store'),
			'grid' => __('Grid Layout','comic-book-store'),
			'full' => __('No Sidebar','comic-book-store')
     ),
	) );

	$wp_customize->add_setting('comic_book_store_blog_post_description_option',array(
    	'default'   => 'Excerpt Content', 
        'sanitize_callback' => 'comic_book_store_sanitize_choices'
	));
	$wp_customize->add_control('comic_book_store_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','comic-book-store'),
        'section' => 'comic_book_store_blog_post_settings',
        'choices' => array(
            'No Content' => __('No Content','comic-book-store'),
            'Excerpt Content' => __('Excerpt Content','comic-book-store'),
            'Full Content' => __('Full Content','comic-book-store'),
        ),
	) );

	$wp_customize->add_setting('comic_book_store_blog_post_thumb',array(
        'sanitize_callback' => 'comic_book_store_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('comic_book_store_blog_post_thumb',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Show / Hide Blog Post Thumbnail', 'comic-book-store'),
        'section'     => 'comic_book_store_blog_post_settings',
    ));

	$wp_customize->add_setting( 'comic_book_store_blog_post_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('comic_book_store_blog_post_settings_upgraded_features', array(
		'type'=> 'hidden',
		'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
		   <a target='_blank' href='". esc_url(COMIC_BOOK_STORE_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
		'section' => 'comic_book_store_blog_post_settings'
	));			
    
	//Single Post Settings
	$wp_customize->add_section('comic_book_store_single_post_settings',array(
		'title' => __('Manage Single Post Section', 'comic-book-store'),
		'priority' => null,
		'panel' => 'comic_book_store_panel_area'
	));

	$wp_customize->add_setting('comic_book_store_single_post_date',array(
		'default' => true,
		'sanitize_callback'	=> 'comic_book_store_sanitize_checkbox'
	));
	$wp_customize->add_control('comic_book_store_single_post_date',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Date ','comic-book-store'),
		'section' => 'comic_book_store_single_post_settings'
	));	

	$wp_customize->add_setting('comic_book_store_single_post_author',array(
		'default' => true,
		'sanitize_callback'	=> 'comic_book_store_sanitize_checkbox'
	));
	$wp_customize->add_control('comic_book_store_single_post_author',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Author','comic-book-store'),
		'section' => 'comic_book_store_single_post_settings'
	));

	$wp_customize->add_setting('comic_book_store_single_post_comment',array(
		'default' => true,
		'sanitize_callback'	=> 'comic_book_store_sanitize_checkbox'
	));
	$wp_customize->add_control('comic_book_store_single_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Comments','comic-book-store'),
		'section' => 'comic_book_store_single_post_settings'
	));	

	$wp_customize->add_setting('comic_book_store_single_post_time',array(
		'default' => true,
		'sanitize_callback'	=> 'comic_book_store_sanitize_checkbox'
	));
	$wp_customize->add_control('comic_book_store_single_post_time',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Time','comic-book-store'),
		'section' => 'comic_book_store_single_post_settings'
	));	

	$wp_customize->add_setting('comic_book_store_single_post_metabox_seperator',array(
		'default' => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('comic_book_store_single_post_metabox_seperator',array(
		'type' => 'text',
		'label' => __('Metabox Seperator','comic-book-store'),
		'description' => __('Ex: "/", "|", "-", ...','comic-book-store'),
		'section' => 'comic_book_store_single_post_settings'
	)); 

	$wp_customize->add_setting('comic_book_store_sidebar_single_post_layout',array(
		'default' => 'right',
		'sanitize_callback' => 'comic_book_store_sanitize_choices'
	));
	$wp_customize->add_control('comic_book_store_sidebar_single_post_layout',array(
		'type' => 'radio',
		'label'     => __('Single post sidebar layout', 'comic-book-store'),
		'section' => 'comic_book_store_single_post_settings',
		'choices' => array(
			'full' => __('Full','comic-book-store'),
			'left' => __('Left','comic-book-store'),
			'right' => __('Right','comic-book-store'),
	),
	));

	$wp_customize->add_setting( 'comic_book_store_single_post_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('comic_book_store_single_post_settings_upgraded_features', array(
		'type'=> 'hidden',
		'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
		<a target='_blank' href='". esc_url(COMIC_BOOK_STORE_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
		'section' => 'comic_book_store_single_post_settings'
	)); 

	//Page Settings
	$wp_customize->add_section('comic_book_store_page_settings',array(
		'title' => __('Manage Page Section', 'comic-book-store'),
		'priority' => null,
		'panel' => 'comic_book_store_panel_area'
	));

	// Add Settings and Controls for Page Layout
	$wp_customize->add_setting('comic_book_store_sidebar_page_layout',array(
		'default' => 'full',
			'sanitize_callback' => 'comic_book_store_sanitize_choices'
	));
	$wp_customize->add_control('comic_book_store_sidebar_page_layout',array(
		'type' => 'radio',
		'label'     => __('Theme Page Sidebar Position', 'comic-book-store'),
		'section' => 'comic_book_store_page_settings',
		'choices' => array(
			'left' => __('Left','comic-book-store'),
			'right' => __('Right','comic-book-store'),
			'full' => __('No Sidebar','comic-book-store')
	),
	));	

	// 404 Page Settings
	$wp_customize->add_section('comic_book_store_page_not_found', array(
		'title'	=> __('Manage 404 Page Section','comic-book-store'),
		'priority'	=> null,
		'panel' => 'comic_book_store_panel_area',
	));
	
	$wp_customize->add_setting('comic_book_store_page_not_found_heading',array(
		'default'=> __('404 Not Found','comic-book-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('comic_book_store_page_not_found_heading',array(
		'label'	=> __('404 Heading','comic-book-store'),
		'section'=> 'comic_book_store_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('comic_book_store_page_not_found_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('comic_book_store_page_not_found_content',array(
		'label'	=> __('404 Text','comic-book-store'),
		'input_attrs' => array(
			'placeholder' => __( 'Looks like you have taken a wrong turn.....Don\'t worry... it happens to the best of us.', 'comic-book-store' ),
		),
		'section'=> 'comic_book_store_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('comic_book_store_page_not_found_btn',array(
		'default' => 'Homepage',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'comic_book_store_page_not_found_btn', array(
	   'settings' => 'comic_book_store_page_not_found_btn',
	   'section'   => 'comic_book_store_page_not_found',
	   'label' => __('404 Button', 'comic-book-store'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting( 'comic_book_store_page_not_found_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('comic_book_store_page_not_found_settings_upgraded_features', array(
		'type'=> 'hidden',
		'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
			<a target='_blank' href='". esc_url(COMIC_BOOK_STORE_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
		'section' => 'comic_book_store_page_not_found'
	));

	// Footer Section
	$wp_customize->add_section('comic_book_store_footer', array(
		'title'	=> __('Manage Footer Section','comic-book-store'),
		'description'	=> __('<p class="sec-title">Manage Footer Section</p>','comic-book-store'),
		'priority'	=> null,
		'panel' => 'comic_book_store_panel_area',
	));

	$wp_customize->add_setting('comic_book_store_footer_widget', array(
	    'default' => true,
	    'sanitize_callback' => 'comic_book_store_sanitize_checkbox',
	));
	$wp_customize->add_control('comic_book_store_footer_widget', array(
	    'settings' => 'comic_book_store_footer_widget',
	    'section'   => 'comic_book_store_footer',
	    'label'     => __('Check to Enable Footer Widget', 'comic-book-store'),
	    'type'      => 'checkbox',
	));

	//  footer bg color
	$wp_customize->add_setting('comic_book_store_footerbg_color',array(
		'default' => '',
		'sanitize_callback' => 'comic_book_store_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'comic_book_store_footerbg_color', array(
	   'settings' => 'comic_book_store_footerbg_color',
	   'section'   => 'comic_book_store_footer',
	   'label' => __('Footer Background Color', 'comic-book-store'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting('comic_book_store_footer_bg_image',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'comic_book_store_footer_bg_image',array(
        'label' => __('Footer Background Image','comic-book-store'),
        'section' => 'comic_book_store_footer',
    )));

	$wp_customize->add_setting('comic_book_store_footer_img_position',array(
		'default' => 'center center',
		'transport' => 'refresh',
		'sanitize_callback' => 'comic_book_store_sanitize_choices'
	));
	$wp_customize->add_control('comic_book_store_footer_img_position',array(
		'type' => 'select',
		'label' => __('Footer Image Position','comic-book-store'),
		'section' => 'comic_book_store_footer',
		'choices' 	=> array(
			'center center'   => esc_html__( 'Center', 'comic-book-store' ),
			'center top'   => esc_html__( 'Top', 'comic-book-store' ),
			'left center'   => esc_html__( 'Left', 'comic-book-store' ),
			'right center'   => esc_html__( 'Right', 'comic-book-store' ),
			'center bottom'   => esc_html__( 'Bottom', 'comic-book-store' ),
		),
	));	

	$wp_customize->add_setting('comic_book_store_copyright_line',array(
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control( 'comic_book_store_copyright_line', array(
	   'section' 	=> 'comic_book_store_footer',
	   'label'	 	=> __('Copyright Line','comic-book-store'),
	   'type'    	=> 'text',
	   'priority' 	=> null,
    ));

	$wp_customize->add_setting('comic_book_store_copyright_link',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	));	
	$wp_customize->add_control( 'comic_book_store_copyright_link', array(
	   'section' 	=> 'comic_book_store_footer',
	   'label'	 	=> __('Copyright Link','comic-book-store'),
	   'type'    	=> 'text',
	   'priority' 	=> null,
    ));

	//  footer title color
	$wp_customize->add_setting('comic_book_store_footertitle_color',array(
		'default' => '',
		'sanitize_callback' => 'comic_book_store_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'comic_book_store_footertitle_color', array(
	   'settings' => 'comic_book_store_footertitle_color',
	   'section'   => 'comic_book_store_footer',
	   'label' => __('Title Color', 'comic-book-store'),
	   'type'      => 'color'
	));

	//  footer list color
	$wp_customize->add_setting('comic_book_store_footerlist_color',array(
		'default' => '',
		'sanitize_callback' => 'comic_book_store_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'comic_book_store_footerlist_color', array(
	   'settings' => 'comic_book_store_footerlist_color',
	   'section'   => 'comic_book_store_footer',
	   'label' => __('List Color', 'comic-book-store'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting('comic_book_store_scroll_hide', array(
        'default' => true,
        'sanitize_callback' => 'comic_book_store_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'comic_book_store_scroll_hide',array(
        'label'          => __( 'Check To Show Scroll To Top', 'comic-book-store' ),
        'section'        => 'comic_book_store_footer',
        'settings'       => 'comic_book_store_scroll_hide',
        'type'           => 'checkbox',
    )));

	$wp_customize->add_setting('comic_book_store_scroll_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'comic_book_store_sanitize_choices'
    ));
    $wp_customize->add_control('comic_book_store_scroll_position',array(
        'type' => 'radio',
        'section' => 'comic_book_store_footer',
        'label'	 	=> __('Scroll To Top Positions','comic-book-store'),
        'choices' => array(
            'Right' => __('Right','comic-book-store'),
            'Left' => __('Left','comic-book-store'),
            'Center' => __('Center','comic-book-store')
        ),
    ));

	$wp_customize->add_setting('comic_book_store_scroll_text',array(
		'default'	=> __('TOP','comic-book-store'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));	
	$wp_customize->add_control('comic_book_store_scroll_text',array(
		'label'	=> __('Scroll To Top Button Text','comic-book-store'),
		'section'	=> 'comic_book_store_footer',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'comic_book_store_scroll_top_shape', array(
		'default'           => 'circle',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control( 'comic_book_store_scroll_top_shape', array(
		'label'    => __( 'Scroll to Top Button Shape', 'comic-book-store' ),
		'section'  => 'comic_book_store_footer',
		'settings' => 'comic_book_store_scroll_top_shape',
		'type'     => 'radio',
		'choices'  => array(
			'box'        => __( 'Box', 'comic-book-store' ),
			'curved' => __( 'Curved', 'comic-book-store'),
			'circle'     => __( 'Circle', 'comic-book-store' ),
		),
	));

	$wp_customize->add_setting('comic_book_store_footer_widget_areas',array(
		'default'           => 4,
		'sanitize_callback' => 'comic_book_store_sanitize_choices',
	));
	$wp_customize->add_control('comic_book_store_footer_widget_areas',array(
		'type'        => 'radio',
		'section' => 'comic_book_store_footer',
		'label'       => __('Footer widget area', 'comic-book-store'),
		'choices' => array(
		   '1'     => __('One', 'comic-book-store'),
		   '2'     => __('Two', 'comic-book-store'),
		   '3'     => __('Three', 'comic-book-store'),
		   '4'     => __('Four', 'comic-book-store')
		),
	));

	$wp_customize->add_setting( 'comic_book_store_footer_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('comic_book_store_footer_settings_upgraded_features', array(
		'type'=> 'hidden',
		'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
		   <a target='_blank' href='". esc_url(COMIC_BOOK_STORE_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
		'section' => 'comic_book_store_footer'
	));				
    
	// Footer Social Section
	$wp_customize->add_section('comic_book_store_footer_social_icons', array(
		'title'	=> __('Manage Footer Social Section','comic-book-store'),
		'description'	=> __('<p class="sec-title">Manage Footer Social Section</p>','comic-book-store'),
		'priority'	=> null,
		'panel' => 'comic_book_store_panel_area',
	));

	$wp_customize->add_setting('comic_book_store_footer_facebook_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'comic_book_store_footer_facebook_link', array(
	   'settings' => 'comic_book_store_footer_facebook_link',
	   'section'   => 'comic_book_store_footer_social_icons',
	   'label' => __('Facebook Link', 'comic-book-store'),
	   'type'      => 'url'
	));

	$wp_customize->add_setting('comic_book_store_footer_instagram_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'comic_book_store_footer_instagram_link', array(
	   'settings' => 'comic_book_store_footer_instagram_link',
	   'section'   => 'comic_book_store_footer_social_icons',
	   'label' => __('Instagram Link', 'comic-book-store'),
	   'type'      => 'url'
	));

	$wp_customize->add_setting('comic_book_store_footer_pinterest_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'comic_book_store_footer_pinterest_link', array(
	   'settings' => 'comic_book_store_footer_pinterest_link',
	   'section'   => 'comic_book_store_footer_social_icons',
	   'label' => __('Pinterest Link', 'comic-book-store'),
	   'type'      => 'url'
	));

	$wp_customize->add_setting('comic_book_store_footer_twitter_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'comic_book_store_footer_twitter_link', array(
	   'settings' => 'comic_book_store_footer_twitter_link',
	   'section'   => 'comic_book_store_footer_social_icons',
	   'label' => __('Twitter Link', 'comic-book-store'),
	   'type'      => 'url'
	));

	$wp_customize->add_setting('comic_book_store_footer_youtube_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'comic_book_store_footer_youtube_link', array(
	   'settings' => 'comic_book_store_footer_youtube_link',
	   'section'   => 'comic_book_store_footer_social_icons',
	   'label' => __('Youtube Link', 'comic-book-store'),
	   'type'      => 'url'
	));

	$wp_customize->add_setting( 'comic_book_store_footer_social_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('comic_book_store_footer_social_settings_upgraded_features', array(
		'type'=> 'hidden',
		'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
		   <a target='_blank' href='". esc_url(COMIC_BOOK_STORE_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
		'section' => 'comic_book_store_footer_social_icons'
	));

	// Google Fonts
	$wp_customize->add_section( 'comic_book_store_google_fonts_section', array(
		'title'       => __( 'Google Fonts', 'comic-book-store' ),
		'priority'    => 24,
	) );

	$font_choices = array(
		'' => 'No Fonts',
		'Kaushan Script:' => 'Kaushan Script',
		'Emilys Candy:' => 'Emilys Candy',
		'Poppins:0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900' => 'Poppins',
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

	$wp_customize->add_setting( 'comic_book_store_headings_fonts', array(
		'sanitize_callback' => 'comic_book_store_sanitize_fonts',
	));
	$wp_customize->add_control( 'comic_book_store_headings_fonts', array(
		'type' => 'select',
		'description' => __('Select your desired font for the headings.', 'comic-book-store'),
		'section' => 'comic_book_store_google_fonts_section',
		'choices' => $font_choices
	));

	$wp_customize->add_setting( 'comic_book_store_body_fonts', array(
		'sanitize_callback' => 'comic_book_store_sanitize_fonts'
	));
	$wp_customize->add_control( 'comic_book_store_body_fonts', array(
		'type' => 'select',
		'description' => __( 'Select your desired font for the body.', 'comic-book-store' ),
		'section' => 'comic_book_store_google_fonts_section',
		'choices' => $font_choices
	));
  
}
add_action( 'customize_register', 'comic_book_store_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function comic_book_store_customize_preview_js() {
	wp_enqueue_script( 'comic_book_store_customizer', esc_url(get_template_directory_uri()) . '/js/customize-preview.js', array( 'customize-preview' ), '20161510', true );
}
add_action( 'customize_preview_init', 'comic_book_store_customize_preview_js' );
