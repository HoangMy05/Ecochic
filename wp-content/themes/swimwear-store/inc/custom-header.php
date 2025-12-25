<?php
function swimwearstore_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'swimwearstore_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '646464',
		'width'                  => 2000, 
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'swimwearstore_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'swimwearstore_custom_header_setup' );

if ( ! function_exists( 'swimwearstore_header_style' ) ) :

function swimwearstore_header_style() {
	$header_text_color = get_header_textcolor();

  	$newarrivalproduct_disable_section = esc_attr(get_theme_mod('newarrivalproduct_disable_section','YES'));
	$banner_disable_section = esc_attr(get_theme_mod('banner_disable_section','YES'));
	$topheader_logowidth = esc_attr(get_theme_mod('topheader_logowidth','50'));


	?>
	<style type="text/css">


		<?php 
		
		?>

		.site-logo img {
			width: <?php echo apply_filters('swimwearstore_topheader', $topheader_logowidth); ?>%;
			height: 100%;
		}


		header.site-header .site-title {
			color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?>;

		}

		header.site-header .site-logo a {
			text-decoration-color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?> !important;
		}

		p.site-description {
			color: <?php echo esc_attr(get_theme_mod('topheader_taglinecol')); ?>;
		}
		


		
	 
	
		header .tpf-head {
			background: <?php echo esc_attr(get_theme_mod('header_topheadbgcolor')); ?>;
		}

		header .tpf-head p {
			color: <?php echo esc_attr(get_theme_mod('header_topheadtextcolor')); ?>;
		}
		

		header .mh_rhs li i, header #formButton:after {
			color: <?php echo esc_attr(get_theme_mod('header_topheadiconscolor')); ?>;
		}
		
		

		.primary-menu a {
			color: <?php echo esc_attr(get_theme_mod('header_menuscolor')); ?>;
		}

		.primary-menu .icon::before, .primary-menu .icon::after {
			background-color: <?php echo esc_attr(get_theme_mod('header_menusiconcolor')); ?>;
		}

		.primary-menu a:hover, .primary-menu a:focus, .primary-menu .current_page_ancestor,
		.primary-menu li.current-menu-item > a, .primary-menu li.current-menu-item > .link-icon-wrapper > a {
			color: <?php echo esc_attr(get_theme_mod('header_menushovercolor')); ?>;
		}

		.primary-menu li ul li a {
			color: <?php echo esc_attr(get_theme_mod('header_submenutextcolor')); ?>;
		}

		.primary-menu ul {
			background: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}

		.primary-menu ul::after {
			border-bottom-color: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}

		.primary-menu > li > .icon {
			color: <?php echo esc_attr(get_theme_mod('header_submenusiconcolor')); ?>;
		}

		.primary-menu li ul li a:hover{
			color: <?php echo esc_attr(get_theme_mod('header_submenustxthovercolor')); ?> !important;
		}





		.swimwear_storeswiper-pagination-bullet {
			background: <?php echo esc_attr(get_theme_mod('slider_paginationcolor')); ?>;
		}

		.swimwear_storeswiper-pagination-bullet-active {
			background: <?php echo esc_attr(get_theme_mod('slider_paginationactivecolor')); ?>;
		}



		
		#banner-section .b_right {
			background: <?php echo esc_attr(get_theme_mod('banner_contentbgcolor')); ?>;
		}

		#banner-section .banner-content h2,
		#banner-section .banner-content h1 {
			color: <?php echo esc_attr(get_theme_mod('banner_offertextcolor')); ?>;
		}

		#banner-section .banner-content h3 {
			color: <?php echo esc_attr(get_theme_mod('banner_titlecolor')); ?>;
		}
		
		#banner-section .banner-button a {
			color: <?php echo esc_attr(get_theme_mod('banner_buttntextcolor')); ?>;
		}
		
		#banner-section .banner-button a {
			background: <?php echo esc_attr(get_theme_mod('banner_buttonbgcolor')); ?>;
		}
		
		#banner-section .banner-button a:hover {
			background: <?php echo esc_attr(get_theme_mod('banner_buttonbghovercolor')); ?>;
			color: <?php echo esc_attr(get_theme_mod('banner_buttontexthovercolor')); ?>;
		}

		#banner-section{
			padding-top: <?php echo esc_attr(get_theme_mod('swimwearstore_banner_top_padding')); ?>em !important;
		}

		#banner-section{
			padding-bottom: <?php echo esc_attr(get_theme_mod('swimwearstore_banner_bottom_padding')); ?>em !important;
		}



		#newarrivalproduct-product-section .section-title h2 {
			color: <?php echo esc_attr(get_theme_mod('newarrivalproduct_headingcolor')); ?>;
		}



		#newarrivalproduct-product-section .pcontent h3  {
			color: <?php echo esc_attr(get_theme_mod('newarrivalproduct_producttitlecolor')); ?>;
		}

		#newarrivalproduct-product-section .regular-price,#newarrivalproduct-product-section .regular-price .woocommerce-Price-amount.amount{
			color: <?php echo esc_attr(get_theme_mod('newarrivalproduct_regularpricecolor')); ?>;
		}

		#newarrivalproduct-product-section .sale-price .woocommerce-Price-amount.amount{
			color: <?php echo esc_attr(get_theme_mod('newarrivalproduct_salepricecolor')); ?>;
		}

		#newarrivalproduct-product-section .newarrival-btn{
			color: <?php echo esc_attr(get_theme_mod('newarrivalproduct_salebtntextcolor')); ?>;
		}

		#newarrivalproduct-product-section .newarrival-btn{
			background: <?php echo esc_attr(get_theme_mod('newarrivalproduct_salebtnbgcolor')); ?>;
		}

		#newarrivalproduct-product-section .newarrival-btn:hover{
			background: <?php echo esc_attr(get_theme_mod('newarrivalproduct_salebtnbghovercolor')); ?>;
		}


		#newarrivalproduct-product-section{
			padding-top: <?php echo esc_attr(get_theme_mod('swimwearstore_newarrivalproduct_top_padding')); ?>em !important;
		}

		#newarrivalproduct-product-section{
			padding-bottom: <?php echo esc_attr(get_theme_mod('swimwearstore_newarrivalproduct_bottom_padding')); ?>em !important;
		}

		section#slider-section{
			padding-top: <?php echo esc_attr(get_theme_mod('swimwearstore_slider_top_padding')); ?>em !important;
		}

		section#slider-section{
			padding-bottom: <?php echo esc_attr(get_theme_mod('swimwearstore_slider_bottom_padding')); ?>em !important;
		}

		#newarrivalproduct-product-section .product-image img{
			height: <?php echo esc_attr(get_theme_mod('swimwearstore_newarrivalproduct_image_height')); ?>px;
		}

		



		.copy-right {
			background: <?php echo esc_attr(get_theme_mod('footer_copyrightbgcolor')); ?>;
		}

		.copy-right p,.copy-right p a {
			color: <?php echo esc_attr(get_theme_mod('footer_copyrightcolor')); ?>;
		}

		.footer-area .widget_block h1, .footer-area .widget_block h2, .footer-area .widget_block h3,
		  .footer-area .widget_block h4, .footer-area .widget_block h5, .footer-area .widget_block h6 {
			color: <?php echo esc_attr(get_theme_mod('footer_titlecolor')); ?>;
		}

		.footer-area .widget_text, .footer-area .widget_text p, 
		.wp-block-latest-comments__comment-excerpt p, 
		.wp-block-latest-comments__comment-date,
		 .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt, 
		 .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta,
		  .footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a,
		  .footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li {
			color: <?php echo esc_attr(get_theme_mod('footer_textcolor')); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a:hover {
			color: <?php echo esc_attr(get_theme_mod('footer_menutexthovercolor')); ?>;
		}

		.scroll-top {
			color: <?php echo esc_attr(get_theme_mod('footer_scrolltotopiconcolor')); ?>;
		}

		.scroll-top{
			background: <?php echo esc_attr(get_theme_mod('footer_scrolltotopbgcolor')); ?>;
		}

		.scroll-top:hover {
			background: <?php echo esc_attr(get_theme_mod('footer_scrolltotopbghrvcolor')); ?>;
		}

		
	<?php  ?>


	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		h4.site-title{
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>



	<?php
        if ($newarrivalproduct_disable_section == 1):
	?>
		#newarrivalproduct-product-section {
			display: none;
		}
	<?php
		else :
	?>
		#newarrivalproduct-product-section {
			display: block;
		}
	<?php endif; ?>

	<?php
        if ($banner_disable_section == 1):
	?>
		#banner-section {
			display: none;
		}
	<?php
		else :
	?>
		#banner-section {
			display: block;
		}
	<?php endif; ?>



	</style>
	<?php
}
endif;
