<?php

$boutique_designer_shop_custom_style= "";

/*---------------------------Scroll-top-position -------------------*/

$boutique_designer_shop_scroll_options = get_theme_mod( 'boutique_designer_shop_scroll_options','right_align');

if($boutique_designer_shop_scroll_options == 'right_align'){

$boutique_designer_shop_custom_style .='.scroll-top button{';

	$boutique_designer_shop_custom_style .='';

$boutique_designer_shop_custom_style .='}';

}else if($boutique_designer_shop_scroll_options == 'center_align'){

$boutique_designer_shop_custom_style .='.scroll-top button{';

	$boutique_designer_shop_custom_style .='z-index: 999; right: 0; left:0; margin: 0 auto; top:85%;';

$boutique_designer_shop_custom_style .='}';

}else if($boutique_designer_shop_scroll_options == 'left_align'){

$boutique_designer_shop_custom_style .='.scroll-top button{';

	$boutique_designer_shop_custom_style .='right: auto; left:5%; margin: 0 auto';

$boutique_designer_shop_custom_style .='}';
}

$boutique_designer_shop_scroll_color = get_theme_mod( 'boutique_designer_shop_scroll_color','#121212');
$boutique_designer_shop_custom_style .='.scroll-top .scrollup{';
$boutique_designer_shop_custom_style .='background-color: '.esc_attr($boutique_designer_shop_scroll_color).' !important;';
$boutique_designer_shop_custom_style .='border-color: '.esc_attr($boutique_designer_shop_scroll_color).';';
$boutique_designer_shop_custom_style .='}';

/*---------------------------text-transform-------------------*/

$boutique_designer_shop_text_transform = get_theme_mod( 'boutique_designer_shop_menu_text_transform','UPPERCASE');
if($boutique_designer_shop_text_transform == 'CAPITALISE'){

$boutique_designer_shop_custom_style .='nav#top_gb_menu ul li a{';

	$boutique_designer_shop_custom_style .='text-transform: capitalize ;';

$boutique_designer_shop_custom_style .='}';

}else if($boutique_designer_shop_text_transform == 'UPPERCASE'){

$boutique_designer_shop_custom_style .='nav#top_gb_menu ul li a{';

	$boutique_designer_shop_custom_style .='text-transform: uppercase ;';

$boutique_designer_shop_custom_style .='}';

}else if($boutique_designer_shop_text_transform == 'LOWERCASE'){

$boutique_designer_shop_custom_style .='nav#top_gb_menu ul li a{';

	$boutique_designer_shop_custom_style .='text-transform: lowercase ;';

$boutique_designer_shop_custom_style .='}';
}

/*-------------------------Slider-content-alignment-------------------*/

$boutique_designer_shop_slider_content_alignment = get_theme_mod( 'boutique_designer_shop_slider_content_alignment','LEFT-ALIGN');

if($boutique_designer_shop_slider_content_alignment == 'LEFT-ALIGN'){

$boutique_designer_shop_custom_style .='#slider .carousel-caption{';

	$boutique_designer_shop_custom_style .='text-align:left; left:15%; right:30%';

$boutique_designer_shop_custom_style .='}';

$boutique_designer_shop_custom_style .='@media screen and (max-width:1199px){';

$boutique_designer_shop_custom_style .='#slider .carousel-caption{';

    $boutique_designer_shop_custom_style .='right: 20%; left: 15%';
    
$boutique_designer_shop_custom_style .='} }';

$boutique_designer_shop_custom_style .='@media screen and (max-width:991px){';

$boutique_designer_shop_custom_style .='#slider .carousel-caption{';

    $boutique_designer_shop_custom_style .='right: 15%; left: 15%';
    
$boutique_designer_shop_custom_style .='} }';

}else if($boutique_designer_shop_slider_content_alignment == 'CENTER-ALIGN'){

$boutique_designer_shop_custom_style .='#slider .carousel-caption{';

	$boutique_designer_shop_custom_style .='text-align:center; left: 15%; right: 15%;';

$boutique_designer_shop_custom_style .='}';

}else if($boutique_designer_shop_slider_content_alignment == 'RIGHT-ALIGN'){

$boutique_designer_shop_custom_style .='#slider .carousel-caption{';

	$boutique_designer_shop_custom_style .='text-align:right; left: 30%; right: 15%;';

$boutique_designer_shop_custom_style .='}';

$boutique_designer_shop_custom_style .='@media screen and (max-width:1199px){';

$boutique_designer_shop_custom_style .='#slider .carousel-caption{';

    $boutique_designer_shop_custom_style .='left: 20%; right: 15%';
    
$boutique_designer_shop_custom_style .='} }';

$boutique_designer_shop_custom_style .='@media screen and (max-width:991px){';

$boutique_designer_shop_custom_style .='#slider .carousel-caption{';

    $boutique_designer_shop_custom_style .='left: 15%; right: 15%';
    
$boutique_designer_shop_custom_style .='} }';

}

//--------------------sticky header----------------------

if (false === get_option('boutique_designer_shop_sticky_header')) {
add_option('boutique_designer_shop_sticky_header', 'off');
}

// Define the custom CSS based on the 'boutique_designer_shop_sticky_header' option

if (get_option('boutique_designer_shop_sticky_header', 'off') !== 'on') {

$boutique_designer_shop_custom_style .= '.fixed_header.fixed {';

	$boutique_designer_shop_custom_style .= 'position: static;';

$boutique_designer_shop_custom_style .= '}';
}

if (get_option('boutique_designer_shop_sticky_header', 'off') !== 'off') {

$boutique_designer_shop_custom_style .= '.fixed_header.fixed {';

	$boutique_designer_shop_custom_style .= 'position: fixed; background:var(--theme-color-white);';

$boutique_designer_shop_custom_style .= '}';

$boutique_designer_shop_custom_style .= '.admin-bar .fixed {';

	$boutique_designer_shop_custom_style .= ' margin-top: 32px;';

$boutique_designer_shop_custom_style .= '}';
}

//---------------------------------Logo-Max-height--------------------------

$boutique_designer_shop_logo_max_height = get_theme_mod('boutique_designer_shop_logo_max_height','100');

if($boutique_designer_shop_logo_max_height != false){

$boutique_designer_shop_custom_style .='.custom-logo-link img{';

	$boutique_designer_shop_custom_style .='max-width: '.esc_html($boutique_designer_shop_logo_max_height).'px;';

$boutique_designer_shop_custom_style .='}';
}

//-------------------------theme-width-options--------------------------------
$boutique_designer_shop_theme_width = get_theme_mod( 'boutique_designer_shop_width_options','full_width');

if($boutique_designer_shop_theme_width == 'full_width'){

$boutique_designer_shop_custom_style .='body{';

	$boutique_designer_shop_custom_style .='max-width: 100%;';

$boutique_designer_shop_custom_style .='}';

}else if($boutique_designer_shop_theme_width == 'container'){

$boutique_designer_shop_custom_style .='body{';

	$boutique_designer_shop_custom_style .='width: 100%; padding-right: 15px; padding-left: 15px;  margin-right: auto !important; margin-left: auto !important;';

$boutique_designer_shop_custom_style .='}';

$boutique_designer_shop_custom_style .='@media screen and (min-width: 601px){';

$boutique_designer_shop_custom_style .='body{';

    $boutique_designer_shop_custom_style .='max-width: 720px;';
    
$boutique_designer_shop_custom_style .='} }';

$boutique_designer_shop_custom_style .='@media screen and (min-width: 992px){';

$boutique_designer_shop_custom_style .='body{';

    $boutique_designer_shop_custom_style .='max-width: 960px;';
    
$boutique_designer_shop_custom_style .='} }';

$boutique_designer_shop_custom_style .='@media screen and (min-width: 1200px){';

$boutique_designer_shop_custom_style .='body{';

    $boutique_designer_shop_custom_style .='max-width: 1140px;';
    
$boutique_designer_shop_custom_style .='} }';

$boutique_designer_shop_custom_style .='@media screen and (min-width: 1400px){';

$boutique_designer_shop_custom_style .='body{';

    $boutique_designer_shop_custom_style .='max-width: 1320px;';
    
$boutique_designer_shop_custom_style .='} }';

$boutique_designer_shop_custom_style .='@media screen and (max-width:600px){';

$boutique_designer_shop_custom_style .='body{';

    $boutique_designer_shop_custom_style .='max-width: 100%; padding-right:0px; padding-left: 0px';
    
$boutique_designer_shop_custom_style .='} }';


}else if($boutique_designer_shop_theme_width == 'container_fluid'){

$boutique_designer_shop_custom_style .='body{';

	$boutique_designer_shop_custom_style .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';

$boutique_designer_shop_custom_style .='}';

$boutique_designer_shop_custom_style .='@media screen and (max-width:600px){';

$boutique_designer_shop_custom_style .='body{';

    $boutique_designer_shop_custom_style .='max-width: 100%; padding-right:0px; padding-left: 0px';
    
$boutique_designer_shop_custom_style .='} }';
}

//-----------------------------slider-button----------------------------------
$boutique_designer_shop_slider_button_color = get_theme_mod('boutique_designer_shop_slider_button_color');

if($boutique_designer_shop_slider_button_color != false){

$boutique_designer_shop_custom_style .='.home-btn a {';

	$boutique_designer_shop_custom_style .='background-color: '.esc_attr($boutique_designer_shop_slider_button_color).';';

$boutique_designer_shop_custom_style .='}';
}
$boutique_designer_shop_slider_button_border_radius = get_theme_mod('boutique_designer_shop_slider_button_border_radius','0');

if($boutique_designer_shop_slider_button_border_radius != false){

$boutique_designer_shop_custom_style .='.home-btn a {';

$boutique_designer_shop_custom_style .='border-radius: '.esc_attr(

	$boutique_designer_shop_slider_button_border_radius).'px;';
		
$boutique_designer_shop_custom_style .='}';
}

//related products
if( get_option( 'boutique_designer_shop_related_product',true) != 'on') {

$boutique_designer_shop_custom_style .='.related.products{';

	$boutique_designer_shop_custom_style .='display: none;';
	
$boutique_designer_shop_custom_style .='}';
}

if( get_option( 'boutique_designer_shop_related_product',true) != 'off') {

$boutique_designer_shop_custom_style .='.related.products{';

	$boutique_designer_shop_custom_style .='display: block;';
	
$boutique_designer_shop_custom_style .='}';
}

// footer text alignment
$boutique_designer_shop_footer_content_alignment = get_theme_mod( 'boutique_designer_shop_footer_content_alignment','CENTER-ALIGN');

if($boutique_designer_shop_footer_content_alignment == 'LEFT-ALIGN'){

$boutique_designer_shop_custom_style .='.site-info{';

	$boutique_designer_shop_custom_style .='text-align:left; padding-left: 30px;';

$boutique_designer_shop_custom_style .='}';

$boutique_designer_shop_custom_style .='.site-info a{';

	$boutique_designer_shop_custom_style .='padding-left: 30px;';

$boutique_designer_shop_custom_style .='}';


}else if($boutique_designer_shop_footer_content_alignment == 'CENTER-ALIGN'){

$boutique_designer_shop_custom_style .='.site-info{';

	$boutique_designer_shop_custom_style .='text-align:center;';

$boutique_designer_shop_custom_style .='}';


}else if($boutique_designer_shop_footer_content_alignment == 'RIGHT-ALIGN'){

$boutique_designer_shop_custom_style .='.site-info{';

	$boutique_designer_shop_custom_style .='text-align:right; padding-right: 30px;';

$boutique_designer_shop_custom_style .='}';

$boutique_designer_shop_custom_style .='.site-info a{';

	$boutique_designer_shop_custom_style .='padding-right: 30px;';

$boutique_designer_shop_custom_style .='}';

}

// slider button
$mobile_button_setting = get_option('boutique_designer_shop_slider_button_mobile_show_hide', '1');
$main_button_setting = get_option('boutique_designer_shop_slider_button_show_hide', '1');

$boutique_designer_shop_custom_style .= '#slider .home-btn {';

if ($main_button_setting == 'off') {
    $boutique_designer_shop_custom_style .= 'display: none;';
}

$boutique_designer_shop_custom_style .= '}';

// Add media query for mobile devices
$boutique_designer_shop_custom_style .= '@media screen and (max-width: 600px) {';
if ($main_button_setting == 'off' || $mobile_button_setting == 'off') {
    $boutique_designer_shop_custom_style .= '#slider .home-btn { display: none; }';
}
$boutique_designer_shop_custom_style .= '}';


// scroll button
$mobile_scroll_setting = get_option('boutique_designer_shop_scroll_enable_mobile', '1');
$main_scroll_setting = get_option('boutique_designer_shop_scroll_enable', '1');

$boutique_designer_shop_custom_style .= '.scrollup {';

if ($main_scroll_setting == 'off') {
    $boutique_designer_shop_custom_style .= 'display: none;';
}

$boutique_designer_shop_custom_style .= '}';

// Add media query for mobile devices
$boutique_designer_shop_custom_style .= '@media screen and (max-width: 600px) {';
if ($main_scroll_setting == 'off' || $mobile_scroll_setting == 'off') {
    $boutique_designer_shop_custom_style .= '.scrollup { display: none; }';
}
$boutique_designer_shop_custom_style .= '}';

// theme breadcrumb
$mobile_breadcrumb_setting = get_option('boutique_designer_shop_enable_breadcrumb_mobile', '1');
$main_breadcrumb_setting = get_option('boutique_designer_shop_enable_breadcrumb', '1');

$boutique_designer_shop_custom_style .= '.archieve_breadcrumb {';

if ($main_breadcrumb_setting == 'off') {
    $boutique_designer_shop_custom_style .= 'display: none;';
}

$boutique_designer_shop_custom_style .= '}';

// Add media query for mobile devices
$boutique_designer_shop_custom_style .= '@media screen and (max-width: 600px) {';
if ($main_breadcrumb_setting == 'off' || $mobile_breadcrumb_setting == 'off') {
    $boutique_designer_shop_custom_style .= '.archieve_breadcrumb { display: none; }';
}
$boutique_designer_shop_custom_style .= '}';

// single post and page breadcrumb
$mobile_single_breadcrumb_setting = get_option('boutique_designer_shop_single_enable_breadcrumb_mobile', '1');
$main_single_breadcrumb_setting = get_option('boutique_designer_shop_single_enable_breadcrumb', '1');

$boutique_designer_shop_custom_style .= '.single_breadcrumb {';

if ($main_single_breadcrumb_setting == 'off') {
    $boutique_designer_shop_custom_style .= 'display: none;';
}

$boutique_designer_shop_custom_style .= '}';

// Add media query for mobile devices
$boutique_designer_shop_custom_style .= '@media screen and (max-width: 600px) {';
if ($main_single_breadcrumb_setting == 'off' || $mobile_single_breadcrumb_setting == 'off') {
    $boutique_designer_shop_custom_style .= '.single_breadcrumb { display: none; }';
}
$boutique_designer_shop_custom_style .= '}';

// woocommerce breadcrumb
$mobile_woo_breadcrumb_setting = get_option('boutique_designer_shop_woocommerce_enable_breadcrumb_mobile', '1');
$main_woo_breadcrumb_setting = get_option('boutique_designer_shop_woocommerce_enable_breadcrumb', '1');

$boutique_designer_shop_custom_style .= '.woocommerce-breadcrumb {';

if ($main_woo_breadcrumb_setting == 'off') {
    $boutique_designer_shop_custom_style .= 'display: none;';
}

$boutique_designer_shop_custom_style .= '}';

// Add media query for mobile devices
$boutique_designer_shop_custom_style .= '@media screen and (max-width: 600px) {';
if ($main_woo_breadcrumb_setting == 'off' || $mobile_woo_breadcrumb_setting == 'off') {
    $boutique_designer_shop_custom_style .= '.woocommerce-breadcrumb { display: none; }';
}
$boutique_designer_shop_custom_style .= '}';

//colors
$color_heading = get_theme_mod('boutique_designer_shop_heading_color', '#121212');
$color_text = get_theme_mod('boutique_designer_shop_text_color', '#121212');
$color_fade = get_theme_mod('boutique_designer_shop_second_color', '#f4eee9');
$color_footer_bg = get_theme_mod('boutique_designer_shop_footer_bg', '#121212');
$color_post_bg = get_theme_mod('boutique_designer_shop_post_bg', '#ffffff');

$boutique_designer_shop_custom_style .= ":root {";
    $boutique_designer_shop_custom_style .= "--theme-color: {$color_heading};";
    $boutique_designer_shop_custom_style .= "--theme-text-color: {$color_text};";
    $boutique_designer_shop_custom_style .= "--theme-second-color: {$color_fade};";
    $boutique_designer_shop_custom_style .= "--theme-footer-color: {$color_footer_bg};";
    $boutique_designer_shop_custom_style .= "--theme-color-white: {$color_post_bg};";
$boutique_designer_shop_custom_style .= "}";

$boutique_designer_shop_slider_opacity = get_theme_mod( 'boutique_designer_shop_slider_opacity','1');

if($boutique_designer_shop_slider_opacity == '0'){
$boutique_designer_shop_custom_style .='#slider img {';
    $boutique_designer_shop_custom_style .='opacity: 0';
$boutique_designer_shop_custom_style .='}';

}else if($boutique_designer_shop_slider_opacity == '0.1'){
$boutique_designer_shop_custom_style .='#slider img {';
    $boutique_designer_shop_custom_style .='opacity: 0.1';
$boutique_designer_shop_custom_style .='}';

}else if($boutique_designer_shop_slider_opacity == '0.2'){
$boutique_designer_shop_custom_style .='#slider img {';
    $boutique_designer_shop_custom_style .='opacity: 0.2';
$boutique_designer_shop_custom_style .='}';

}else if($boutique_designer_shop_slider_opacity == '0.3'){
$boutique_designer_shop_custom_style .='#slider img {';
    $boutique_designer_shop_custom_style .='opacity: 0.3';
$boutique_designer_shop_custom_style .='}';

}else if($boutique_designer_shop_slider_opacity == '0.4'){
$boutique_designer_shop_custom_style .='#slider img {';
    $boutique_designer_shop_custom_style .='opacity: 0.4';
$boutique_designer_shop_custom_style .='}';

}else if($boutique_designer_shop_slider_opacity == '0.5'){
$boutique_designer_shop_custom_style .='#slider img {';
    $boutique_designer_shop_custom_style .='opacity: 0.5';
$boutique_designer_shop_custom_style .='}';

}else if($boutique_designer_shop_slider_opacity == '0.6'){
$boutique_designer_shop_custom_style .='#slider img {';
    $boutique_designer_shop_custom_style .='opacity: 0.6';
$boutique_designer_shop_custom_style .='}';

}else if($boutique_designer_shop_slider_opacity == '0.7'){
$boutique_designer_shop_custom_style .='#slider img {';
    $boutique_designer_shop_custom_style .='opacity: 0.7';
$boutique_designer_shop_custom_style .='}';

}else if($boutique_designer_shop_slider_opacity == '0.8'){
$boutique_designer_shop_custom_style .='#slider img {';
    $boutique_designer_shop_custom_style .='opacity: 0.8';
$boutique_designer_shop_custom_style .='}';

}
else if($boutique_designer_shop_slider_opacity == '0.9'){
$boutique_designer_shop_custom_style .='#slider img {';
    $boutique_designer_shop_custom_style .='opacity: 0.9';
$boutique_designer_shop_custom_style .='}';

}
else if($boutique_designer_shop_slider_opacity == '1'){
$boutique_designer_shop_custom_style .='#slider img {';
    $boutique_designer_shop_custom_style .='opacity: 1';
$boutique_designer_shop_custom_style .='}';

}

$boutique_designer_shop_slider_heading_color = get_theme_mod( 'boutique_designer_shop_slider_heading_color','#ffffff');
$boutique_designer_shop_custom_style .='#slider .carousel-caption h2 {';
$boutique_designer_shop_custom_style .='color: '.esc_attr($boutique_designer_shop_slider_heading_color).';';
$boutique_designer_shop_custom_style .='}';

$boutique_designer_shop_slider_sub_heading_color = get_theme_mod( 'boutique_designer_shop_slider_sub_heading_color','#ffffff');
$boutique_designer_shop_custom_style .='#slider .carousel-caption h3 {';
$boutique_designer_shop_custom_style .='color: '.esc_attr($boutique_designer_shop_slider_sub_heading_color).';';
$boutique_designer_shop_custom_style .='}';

$boutique_designer_shop_slider_excerpt_color = get_theme_mod( 'boutique_designer_shop_slider_excerpt_color','#ffffff');
$boutique_designer_shop_custom_style .='#slider .slider-excerpt {';
$boutique_designer_shop_custom_style .='color: '.esc_attr($boutique_designer_shop_slider_excerpt_color).';';
$boutique_designer_shop_custom_style .='}';


//-------------------title-font-size----//  
$boutique_designer_shop_site_title_fontsize = get_theme_mod('boutique_designer_shop_site_title_fontsize','25');

if($boutique_designer_shop_site_title_fontsize != false){

$boutique_designer_shop_custom_style .='.logo h1,.site-title,.site-title a,.logo h1 a{';

    $boutique_designer_shop_custom_style .='font-size: '.esc_html($boutique_designer_shop_site_title_fontsize).'px;';

$boutique_designer_shop_custom_style .='}';
}

//-------------------tagline-font-size----//  
$boutique_designer_shop_site_tagline_fontsize = get_theme_mod('boutique_designer_shop_site_tagline_fontsize','15');

if($boutique_designer_shop_site_tagline_fontsize != false){

$boutique_designer_shop_custom_style .='p.site-description{';

    $boutique_designer_shop_custom_style .='font-size: '.esc_html($boutique_designer_shop_site_tagline_fontsize).'px;';

$boutique_designer_shop_custom_style .='}';
}

//-------------------menu-font-size----//  
$boutique_designer_shop_menu_fontsize = get_theme_mod('boutique_designer_shop_menu_fontsize','14');

if($boutique_designer_shop_menu_fontsize != false){

$boutique_designer_shop_custom_style .='.gb_nav_menu li a{';

    $boutique_designer_shop_custom_style .='font-size: '.esc_html($boutique_designer_shop_menu_fontsize).'px;';

$boutique_designer_shop_custom_style .='}';
}

//-------------------first-letter-capital----//
if (false === get_option('boutique_designer_shop_first_letter_capital_enable')) {
    add_option('boutique_designer_shop_first_letter_capital_enable', 'on');
}
if (get_option('boutique_designer_shop_first_letter_capital_enable') === 'off') {
    $boutique_designer_shop_custom_style .= '.entry-content > p:first-of-type:first-letter {';
    $boutique_designer_shop_custom_style .= 'font-size: 16px; float: none; line-height: unset; padding: 0;';
    $boutique_designer_shop_custom_style .= '}';
}