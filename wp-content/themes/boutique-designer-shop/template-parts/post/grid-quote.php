<?php
/**
 * Template part for displaying posts
 *
 * @subpackage Boutique Designer Shop
 * @since 1.0
 */
?>


<?php $boutique_designer_shop_post_option = get_theme_mod( 'boutique_designer_shop_grid_column','3_column');
    if($boutique_designer_shop_post_option == '1_column'){ ?>
    <div class="col-lg-12 col-md-12">
<?php }else if($boutique_designer_shop_post_option == '2_column'){ ?>
    <div class="col-lg-6 col-md-6">
<?php }else if($boutique_designer_shop_post_option == '3_column'){ ?>
    <div class="col-lg-4 col-md-4">
<?php }else if($boutique_designer_shop_post_option == '4_column'){ ?>
    <div class="col-lg-3 col-md-3">
<?php }?>
	<div id="Category-section" class="entry-content w-100">
		<div id="post-<?php the_ID(); ?>" <?php post_class('quotepost'); ?>>
			<div class="postbox smallpostimage p-3 wow zoomIn">
				<?php $blog_archive_ordering = get_theme_mod('archieve_post_order', array('image', 'meta'));
				foreach ($blog_archive_ordering as $post_data_order) :
					if('image' === $post_data_order) :?>
				        <a href="<?php the_permalink(); ?>"><h1 class="quote-content"><?php  echo get_the_content();?></h1></a>
					<?php elseif ('meta' === $post_data_order) :?>
					    <div class="date-box mb-2 text-center">
					    	<?php if ( is_sticky() ) { ?>
				    			<span class="me-2"><i class="<?php echo esc_attr(get_theme_mod('boutique_designer_shop_sticky_icon','fas fa-thumb-tack')); ?> me-2"></i><?php echo esc_html( __('Sticky', 'boutique-designer-shop') ); ?></span>
				    		<?php } ?>
							<?php if( get_option('boutique_designer_shop_date',false) != 'off'){ ?>
								<span class="me-2"><i class="<?php echo esc_attr(get_theme_mod('boutique_designer_shop_date_icon','far fa-calendar-alt')); ?> me-2"></i><?php boutique_designer_shop_display_shop_date(); ?></span>
							<?php } ?>
							<?php if( get_option('boutique_designer_shop_admin',false) != 'off'){ ?>
								<span class="entry-author me-2"><i class="<?php echo esc_attr(get_theme_mod('boutique_designer_shop_author_icon','fas fa-user')); ?> me-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
							<?php }?>
							<?php if( get_option('boutique_designer_shop_comment',false) != 'off'){ ?>
								<span class="entry-comments me-2"><i class="<?php echo esc_attr(get_theme_mod('boutique_designer_shop_comment_icon','fas fa-comments')); ?> me-2"></i> <?php comments_number( __('0 Comments','boutique-designer-shop'), __('0 Comments','boutique-designer-shop'), __('% Comments','boutique-designer-shop')); ?></span>
							<?php }?>
							<?php if( get_option('boutique_designer_shop_tag',false) != 'off'){ ?>
								<span class="tags"><i class="<?php echo esc_attr(get_theme_mod('boutique_designer_shop_tag_icon','fas fa-tags')); ?> me-2"></i> <?php boutique_designer_shop_display_post_tag_count(); ?></span>
							<?php }?>
							<?php 
								$boutique_designer_shop_edit_link = get_edit_post_link();
								if ( $boutique_designer_shop_edit_link ) {
								    printf(
								        '<a class="ms-2 edit-link" href="%s"><i class="fa-solid fa-pen me-2"></i>%s</a>',
								        esc_url( $boutique_designer_shop_edit_link ),
								        esc_html__( 'Edit', 'boutique-designer-shop' )
								    );
								}
							?>
						</div>
					<?php endif;
				endforeach;
				?>       
			  	<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>