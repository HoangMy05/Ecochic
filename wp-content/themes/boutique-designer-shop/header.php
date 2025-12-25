<?php
/**
 * The header for our theme
 *
 * @subpackage Boutique Designer Shop
 * @since 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}
?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'boutique-designer-shop' ); ?></a>
	<?php if( get_option('boutique_designer_shop_theme_loader',true) != 'off'){ ?>
		<?php $boutique_designer_shop_loader_option = get_theme_mod( 'boutique_designer_shop_loader_style','style_one');
		if($boutique_designer_shop_loader_option == 'style_one'){ ?>
			<div id="preloader" class="circle">
				<div id="loader"></div>
			</div>
		<?php }
		else if($boutique_designer_shop_loader_option == 'style_two'){ ?>
			<div id="preloader">
				<div class="spinner">
					<div class="rect1"></div>
					<div class="rect2"></div>
					<div class="rect3"></div>
					<div class="rect4"></div>
					<div class="rect5"></div>
				</div>
			</div>
		<?php }?>
	<?php }?>
	<div id="page" class="site">
		<div id="header">
			<div class="wrap_figure">
				<div class="top_bar py-2 wow slideInDown text-md-start text-center">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-7 col-sm-12 align-self-center top-text">
								<?php if( get_theme_mod('boutique_designer_shop_topbar_text') != '' ){ ?>
									<p class="mb-0"><?php echo esc_html(get_theme_mod('boutique_designer_shop_topbar_text','')); ?></p>
								<?php }?>
							</div>
							<div class="col-lg-5 col-md-5 col-sm-12 align-self-center">
								<div class="row">
									<?php if( get_theme_mod('boutique_designer_shop_email') != ''){ ?>
										<div class="col-lg-8 col-md-7 col-6 align-self-center top-info text-md-end text-start">
											<p class="mb-0"><a href="mailto:<?php echo esc_attr(get_theme_mod('boutique_designer_shop_email', '')); ?>">
                    							<?php echo esc_html(get_theme_mod('boutique_designer_shop_email', '')); ?>
                  							</a></p>
										</div>
									<?php }?>
									<?php if( get_theme_mod('boutique_designer_shop_call') != ''){ ?>
										<div class="col-lg-4 col-md-5 col-6 top-info-call align-self-center text-end">
											<p class="mb-0"><a href="tel:<?php echo esc_attr(get_theme_mod('boutique_designer_shop_call', '')); ?>">
                  								<?php echo esc_html(get_theme_mod('boutique_designer_shop_call', '')); ?>
                							</a></p>
										</div>
									<?php }?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="menu_header fixed_header py-3 wow slideInUp">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-sm-5 col-12 align-self-center">
								<div class="logo text-center text-sm-start">
							        <?php if ( has_custom_logo() ) : ?>
				            			<?php the_custom_logo(); ?>
					            	<?php endif; ?>
				              		<?php $boutique_designer_shop_blog_info = get_bloginfo( 'name' ); ?>
						                <?php if ( ! empty( $boutique_designer_shop_blog_info ) ) : ?>
						                  	<?php if ( is_front_page() && is_home() ) : ?>
												<?php if( get_option('boutique_designer_shop_logo_title',false) != 'off'){ ?>
							                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
												<?php }?>
							                  	<?php else : ?>
													<?php if( get_option('boutique_designer_shop_logo_title',false) != 'off'){ ?>
						                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
												<?php }?>
					                  		<?php endif; ?>
						                <?php endif; ?>
					                <?php
				                  		$boutique_designer_shop_description = get_bloginfo( 'description', 'display' );
					                  	if ( $boutique_designer_shop_description || is_customize_preview() ) :
					                ?>
					                <?php if( get_option('boutique_designer_shop_logo_text',true) != 'off'){ ?>
					                  	<p class="site-description">
					                    	<?php echo esc_html($boutique_designer_shop_description); ?>
					                  	</p>
					                <?php }?>
				              		<?php endif; ?>
							    </div>
							</div>
							<div class="col-lg-7 col-sm-2 col-6 align-self-center ">
								<div class="toggle-menu gb_menu text-sm-center text-start">
									<button onclick="boutique_designer_shop_gb_Menu_open()" class="gb_toggle p-2"><i class="<?php echo esc_attr(get_theme_mod('boutique_designer_shop_menu_icon','fas fa-bars')); ?>"></i></button>
								</div>
				   				<?php get_template_part('template-parts/navigation/navigation'); ?>
							</div>
							<div class="col-lg-2 col-sm-5 col-6 top-cart ps-0 align-self-center text-end">
								<?php if( get_option('boutique_designer_shop_cart_enable',false) != 'off'){ ?>
									<?php if ( class_exists( 'WooCommerce' ) ) { ?>
										<?php global $woocommerce; ?>
										<a href="<?php echo wc_get_cart_url() ?>" class="header-cart"><i class="fas fa-shopping-cart"></i><span>CART</span><span>(<?php echo$woocommerce->cart->cart_contents_count ?>)</span></a>
									<?php }?>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
