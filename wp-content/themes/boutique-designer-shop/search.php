<?php
/**
 * The template for displaying search results pages
 * 
 * @subpackage Boutique Designer Shop
 * @since 1.0
 */

get_header(); ?>

<main id="content">
	<?php $boutique_designer_shop_header_option = get_theme_mod( 'boutique_designer_shop_show_header_image','on');
	if($boutique_designer_shop_header_option == 'on'){ ?>
	<header class="page-header">
		<?php if ( have_posts() ) : ?>
			<div class="header-image"></div>
			<div class="internal-div">
				<?php //breadcrumb
				if ( !is_page_template( 'page-template/custom-home-page.php' ) ) { ?>
					<div class="bread_crumb archieve_breadcrumb align-self-center text-center">
						<?php boutique_designer_shop_breadcrumb();  ?>
					</div>
				<?php } ?>
				<h1 class="page-title mt-4 text-center"><span><?php /* translators: %s: search term */
            	printf( esc_html__( 'Results For: %s','boutique-designer-shop'), esc_html( get_search_query() ) ); ?>  </span>
            	</h1>
			</div>
		<?php else : ?>
			<div class="header-image"></div>
			<div class="internal-div">
				<?php //breadcrumb
				if ( !is_page_template( 'page-template/custom-home-page.php' ) ) { ?>
					<div class="bread_crumb archieve_breadcrumb align-self-center text-center">
						<?php boutique_designer_shop_breadcrumb();  ?>
					</div>
				<?php } ?>
				<h2 class="page-title mt-4 text-center"><span><?php esc_html_e( 'Nothing Found', 'boutique-designer-shop' ); ?></span></h2>
			</div>
		<?php endif; ?>
	</header>
	<?php }
	else if($boutique_designer_shop_header_option == 'off'){ ?>
		<header class="mt-4">
			<?php if ( have_posts() ) : ?>
				<?php //breadcrumb
				if ( !is_page_template( 'page-template/custom-home-page.php' ) ) { ?>
					<div class="bread_crumb archieve_breadcrumb align-self-center text-center">
						<div class="without-img">
							<?php boutique_designer_shop_breadcrumb();  ?>
						</div>
					</div>
				<?php } ?>
				<h1 class="page-title mt-4 withoutimg text-center"><span><?php /* translators: %s: search term */
            	printf( esc_html__( 'Results For: %s','boutique-designer-shop'), esc_html( get_search_query() ) ); ?>  </span>
            	</h1>
			<?php else : ?>
				<?php //breadcrumb
				if ( !is_page_template( 'page-template/custom-home-page.php' ) ) { ?>
					<div class="bread_crumb archieve_breadcrumb align-self-center text-center">
						<div class="without-img">
							<?php boutique_designer_shop_breadcrumb();  ?>
						</div>
					</div>
				<?php } ?>
				<h2 class="page-title mt-4 withoutimg text-center"><span><?php esc_html_e( 'Nothing Found', 'boutique-designer-shop' ); ?></span></h2>
			<?php endif; ?>
		</header>
	<?php } ?>
	<div class="container">
		<div class="content-area my-5">
			<div id="main" class="site-main" role="main">
		      	<div class="row m-0">				
				  <?php
					get_template_part( 'template-parts/post/post-layout' );
					?>
				</div>	
			</div>
		</div>
	</div>
</main>

<?php get_footer();