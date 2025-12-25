<?php

$comic_book_store_first_color = get_theme_mod('comic_book_store_first_color');
$comic_book_store_color_scheme_css = '';

/*------------------ Global First Color -----------*/

if ($comic_book_store_first_color) {
  $comic_book_store_color_scheme_css .= ':root {';
  $comic_book_store_color_scheme_css .= '--first-theme-color: ' . esc_attr($comic_book_store_first_color) . ' !important;';
  $comic_book_store_color_scheme_css .= '} ';
}

// Sticky Header
$comic_book_store_resp_stickyheader = get_theme_mod( 'comic_book_store_sticky_header',false);
if($comic_book_store_resp_stickyheader != true){
    $comic_book_store_color_scheme_css .='.header-fixed{';
        $comic_book_store_color_scheme_css .='position:static;';
    $comic_book_store_color_scheme_css .='} ';
}
if($comic_book_store_resp_stickyheader == true){
    $comic_book_store_color_scheme_css .='@media screen and (max-width:575px) {';
    $comic_book_store_color_scheme_css .='.header-fixed{';
        $comic_book_store_color_scheme_css .='position:fixed;';
    $comic_book_store_color_scheme_css .='} }';
}else if($comic_book_store_resp_stickyheader == false){
    $comic_book_store_color_scheme_css .='@media screen and (max-width:575px){';
    $comic_book_store_color_scheme_css .='.header-fixed{';
        $comic_book_store_color_scheme_css .='position:static;';
    $comic_book_store_color_scheme_css .='} }';
}

//---------------------------------Logo-Max-height--------- 
$comic_book_store_logo_width = get_theme_mod('comic_book_store_logo_width');

if($comic_book_store_logo_width != false){

  $comic_book_store_color_scheme_css .='.logo img{';

    $comic_book_store_color_scheme_css .='width: '.esc_html($comic_book_store_logo_width).'px;';

  $comic_book_store_color_scheme_css .='}';
}

// by default header
$comic_book_store_banner = get_theme_mod('comic_book_store_banner', true);

if($comic_book_store_banner != true){

$comic_book_store_color_scheme_css .='.page-template-template-home-page .mainhead{';

  $comic_book_store_color_scheme_css .='position: static;';

$comic_book_store_color_scheme_css .='}';

}

$comic_book_store_banner_bg_img = get_theme_mod('comic_book_store_banner_bg_img');
if($comic_book_store_banner_bg_img != false){
  $comic_book_store_color_scheme_css .='#banner-cat{';
    $comic_book_store_color_scheme_css .='background: url('.esc_attr($comic_book_store_banner_bg_img).'); background-size: cover;';
  $comic_book_store_color_scheme_css .='}';
}

/*--------------------------- Scroll to top positions -------------------*/

$comic_book_store_scroll_position = get_theme_mod( 'comic_book_store_scroll_position','Right');
if($comic_book_store_scroll_position == 'Right'){
    $comic_book_store_color_scheme_css .='#button{';
        $comic_book_store_color_scheme_css .='right: 20px;';
    $comic_book_store_color_scheme_css .='}';
}else if($comic_book_store_scroll_position == 'Left'){
    $comic_book_store_color_scheme_css .='#button{';
        $comic_book_store_color_scheme_css .='left: 20px;';
    $comic_book_store_color_scheme_css .='}';
}else if($comic_book_store_scroll_position == 'Center'){
    $comic_book_store_color_scheme_css .='#button{';
        $comic_book_store_color_scheme_css .='right: 50%;left: 50%;';
    $comic_book_store_color_scheme_css .='}';
}

/*--------------------------- Woocommerce Product Image Border Radius -------------------*/

$comic_book_store_woo_product_img_border_radius = get_theme_mod('comic_book_store_woo_product_img_border_radius');
  if($comic_book_store_woo_product_img_border_radius != false){
    $comic_book_store_color_scheme_css .='.woocommerce ul.products li.product a img{';
    $comic_book_store_color_scheme_css .='border-radius: '.esc_attr($comic_book_store_woo_product_img_border_radius).'px;';
    $comic_book_store_color_scheme_css .='}';
}  

/*--------------------------- Woocommerce Product Sale Position -------------------*/    

$comic_book_store_product_sale_position = get_theme_mod( 'comic_book_store_product_sale_position','Left');
if($comic_book_store_product_sale_position == 'Right'){
    $comic_book_store_color_scheme_css .='.woocommerce ul.products li.product .onsale{';
        $comic_book_store_color_scheme_css .='left:auto !important; right:1em !important;';
    $comic_book_store_color_scheme_css .='}';
}else if($comic_book_store_product_sale_position == 'Left'){
    $comic_book_store_color_scheme_css .='.woocommerce ul.products li.product .onsale {';
        $comic_book_store_color_scheme_css .='right:auto !important; left:1em !important;';
    $comic_book_store_color_scheme_css .='}';
}        

/*--------------------------- Shop page pagination -------------------*/

$comic_book_store_wooproducts_nav = get_theme_mod('comic_book_store_wooproducts_nav', 'Yes');
if($comic_book_store_wooproducts_nav == 'No'){
  $comic_book_store_color_scheme_css .='.woocommerce nav.woocommerce-pagination{';
    $comic_book_store_color_scheme_css .='display: none;';
  $comic_book_store_color_scheme_css .='}';
}

/*--------------------------- Related Product -------------------*/

$comic_book_store_related_product_enable = get_theme_mod('comic_book_store_related_product_enable',true);
if($comic_book_store_related_product_enable == false){
  $comic_book_store_color_scheme_css .='.related.products{';
    $comic_book_store_color_scheme_css .='display: none;';
  $comic_book_store_color_scheme_css .='}';
}

/*--------------------------- Footer background image -------------------*/

$comic_book_store_footer_bg_image = get_theme_mod('comic_book_store_footer_bg_image');
if($comic_book_store_footer_bg_image != false){
    $comic_book_store_color_scheme_css .='#footer{';
        $comic_book_store_color_scheme_css .='background: url('.esc_attr($comic_book_store_footer_bg_image).');';
        $comic_book_store_color_scheme_css .= 'background-size: cover;';  
    $comic_book_store_color_scheme_css .='}';
}

/*--------------------------- Footer image position -------------------*/

$comic_book_store_footer_img_position = get_theme_mod('comic_book_store_footer_img_position','center center');
if($comic_book_store_footer_img_position != false){
    $comic_book_store_color_scheme_css .='#footer{';
        $comic_book_store_color_scheme_css .='background-position: '.esc_attr($comic_book_store_footer_img_position).';';
    $comic_book_store_color_scheme_css .='}';
}	

/*--------------------------- Scroll to Top Button Shape -------------------*/

$comic_book_store_scroll_top_shape = get_theme_mod('comic_book_store_scroll_top_shape', 'circle');
if($comic_book_store_scroll_top_shape == 'box' ){
  $comic_book_store_color_scheme_css .='#button{';
    $comic_book_store_color_scheme_css .=' border-radius: 0%';
  $comic_book_store_color_scheme_css .='}';
}elseif($comic_book_store_scroll_top_shape == 'curved' ){
  $comic_book_store_color_scheme_css .='#button{';
    $comic_book_store_color_scheme_css .=' border-radius: 20%';
  $comic_book_store_color_scheme_css .='}';
}elseif($comic_book_store_scroll_top_shape == 'circle' ){
  $comic_book_store_color_scheme_css .='#button{';
    $comic_book_store_color_scheme_css .=' border-radius: 50%;';
  $comic_book_store_color_scheme_css .='}';
}

/*--------------------------- Menu Typography -------------------*/

$comic_book_store_theme_lay = get_theme_mod( 'comic_book_store_menu_text_transform','Capitalize');
if($comic_book_store_theme_lay == 'Uppercase'){
    $comic_book_store_color_scheme_css .='.main-nav a{';
        $comic_book_store_color_scheme_css .='text-transform: uppercase;';
    $comic_book_store_color_scheme_css .='}';
}else if($comic_book_store_theme_lay == 'Lowercase'){
    $comic_book_store_color_scheme_css .='.main-nav a{';
        $comic_book_store_color_scheme_css .='text-transform: lowercase;';
    $comic_book_store_color_scheme_css .='}';
}
else if($comic_book_store_theme_lay == 'Capitalize'){
    $comic_book_store_color_scheme_css .='.main-nav a{';
        $comic_book_store_color_scheme_css .='text-transform: capitalize;';
    $comic_book_store_color_scheme_css .='}';
}