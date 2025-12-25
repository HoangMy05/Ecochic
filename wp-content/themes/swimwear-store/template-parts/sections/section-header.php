<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
<head>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#formButton").click(function(){
			$("#form1").toggle();
		});
	});
 </script>
</head>
<!-- Header Area -->

	<?php 
		$stickyheader = esc_attr(swimwearstore_sticky_menu());
		$topheader_topbartext = esc_attr(get_theme_mod('topheader_topbartext','Cash on Delivery, Pay at your Doorstep'));
	?>
<div class="main">
	<div class="<?php if(esc_attr(get_theme_mod('swimwearstore_header_section_width','Full Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('swimwearstore_header_section_width','Full Width')) == 'Box Width'){ ?> container <?php }?>">
    <header class="main-header site-header <?php echo esc_attr(swimwearstore_sticky_menu()); ?>">
    	<div class="tpf-head ">
			<div class="container">
				<?php if ($topheader_topbartext) { ?>
					<p> <i class="fa fa-bolt"></i><?php echo apply_filters('swimwearstore_header', $topheader_topbartext); ?></p>
				<?php } ?>					
			</div>
		</div>
		<div class="headfer-content">
			<div class="container">
				<div class="row m-0">
					<div class="col-lg-4 col-md-4 col-sm-12 pd-0">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 pd-0 logo-box">
						<div class="site-logo">
							<?php
							if(has_custom_logo())
								{	
									the_custom_logo();
								}
								else { 
							?>
							<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">	
								<?php 
									echo esc_html(bloginfo('name'));
								?>
							</a>	
							<?php 						
								}
							?>
						</div>
						<div class="box-info">
							<?php
								$swimwearstore_site_desc = get_bloginfo( 'description');
								if ($swimwearstore_site_desc) : ?>
									<p class="site-description"><?php echo esc_html($swimwearstore_site_desc); ?></p>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 mh_rhs">
						<?php if(class_exists('woocommerce')){ ?>
							<li>
								<div class="top-form">
									<button type="button" id="formButton"></button>		
									<form id="form1">					
										<?php get_search_form(); ?>
									</form>
								</div>
								<!-- </?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { ?>
									</?php //this prints out your search form 
										get_search_form(); 
									?>
									<div class="clearfix"></div>
								</?php } ?> -->
							</li>
							<li>
								<a class="signin" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
									<i class="fa fa-user" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a class="h-cart" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" >
									<i class="fa fa-shopping-cart" aria-hidden="true"></i>
								</a>
							</li>
						<?php } ?>
					</div>
				</div>
				<div class="menu">
					<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<i class="fa fa-bars"></i>
							</span>
						</span>
					</button><!-- .nav-toggle -->
					<div class="header-navigation-wrapper">

					<?php
					if ( has_nav_menu( 'primary_menu' ) || ! has_nav_menu( 'expanded' ) ) {
					?>

						<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'swimwear-store' ); ?>">

							<ul class="primary-menu reset-list-style">

							<?php
							if ( has_nav_menu( 'primary_menu' ) ) {

								wp_nav_menu(
									array(
										'container'  => '',
										'items_wrap' => '%3$s',
										'theme_location' => 'primary_menu',
									)
								);

							} elseif ( ! has_nav_menu( 'expanded' ) ) {

								wp_list_pages(
									array(
										'match_menu_classes' => true,
										'show_sub_menu_icons' => true,
										'title_li' => false,
										'walker'   => new SwimwearStore_Walker_Page(),
									)
								);

							}
							?>
							</ul>
						</nav><!-- .primary-menu-wrapper -->

					<?php } ?>
					</div><!-- .header-navigation-wrapper -->
					<?php
					// Output the menu modal.
					get_template_part( 'template-parts/sections/modal-menu' );
					?>
				</div>
			</div>
		</div>
    </header>
	</div>
	<div class="clearfix"></div>
</div>

