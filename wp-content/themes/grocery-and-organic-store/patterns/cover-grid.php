<?php
/**
 * Title: Product Cover Grid with Categories
 * Slug: grocery-and-organic-store/cover-grid
 * Categories:grocery-and-organic-store,grocery-and-organic-store-woocommerce
 */

$grocery_and_organic_store_cover_url = trailingslashit( get_template_directory_uri() );
$grocery_and_organic_store_cover_img = array(
	$grocery_and_organic_store_cover_url . 'assets/images/cover-1.jpg',
	$grocery_and_organic_store_cover_url . 'assets/images/cover-2.jpg',
	$grocery_and_organic_store_cover_url . 'assets/images/cover-3.jpg',
);
$grocery_and_organic_store_cat_url   = trailingslashit( get_template_directory_uri() );
$grocery_and_organic_store_cat_img   = array(
	$grocery_and_organic_store_cat_url . 'assets/images/cat-1.png',
	$grocery_and_organic_store_cat_url . 'assets/images/cat-2.png',
	$grocery_and_organic_store_cat_url . 'assets/images/cat-3.png',
	$grocery_and_organic_store_cat_url . 'assets/images/cat-4.png',
	$grocery_and_organic_store_cat_url . 'assets/images/cat-5.png',
	$grocery_and_organic_store_cat_url . 'assets/images/cat-6.png',
	$grocery_and_organic_store_cat_url . 'assets/images/cat-7.png',
)
?>



<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"20px","left":"20px"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"34px","right":"34px"},"blockGap":"0"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"primary","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-primary-background-color has-background" style="border-color:#022E1C1A;border-width:1px;border-radius:10px;min-height:100%;padding-top:20px;padding-right:34px;padding-bottom:20px;padding-left:34px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}},"spacing":{"padding":{"bottom":"10px"},"margin":{"bottom":"30px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"background","fontSize":"medium"} -->
<h5 class="wp-block-heading has-background-color has-text-color has-link-color has-medium-font-size" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-bottom:30px;padding-bottom:10px;font-style:normal;font-weight:600">
<?php esc_html_e( 'See All', 'grocery-and-organic-store' ); ?><?php esc_html_e( 'Top Categories	', 'grocery-and-organic-store' ); ?>				</h5>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"#344a9e","width":"1px"},"top":{},"right":{},"left":{}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-small-plus-font-size" style="border-bottom-color:#344a9e;border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":91,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-secondary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $grocery_and_organic_store_cat_img[0] ); ?>" alt="" class="wp-image-91" style="aspect-ratio:1;object-fit:cover;width:30px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"small-plus"} -->
<p class="has-background-color has-text-color has-link-color has-small-plus-font-size">
<?php esc_html_e( 'Fruits &amp; Vegetable	', 'grocery-and-organic-store' ); ?>						</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color">
<?php esc_html_e( '(9)	', 'grocery-and-organic-store' ); ?>					</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"#344a9e","width":"1px"},"top":{},"right":{},"left":{}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-small-plus-font-size" style="border-bottom-color:#344a9e;border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":99,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-black"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $grocery_and_organic_store_cat_img[1] ); ?>" alt="" class="wp-image-99" style="aspect-ratio:1;object-fit:cover;width:30px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"small-plus"} -->
<p class="has-background-color has-text-color has-link-color has-small-plus-font-size">
<?php esc_html_e( 'Pet Foods	', 'grocery-and-organic-store' ); ?>						</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color">
<?php esc_html_e( '(4)	', 'grocery-and-organic-store' ); ?>					</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"#344a9e","width":"1px"},"top":{},"right":{},"left":{}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-small-plus-font-size" style="border-bottom-color:#344a9e;border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":100,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-black"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $grocery_and_organic_store_cat_img[2] ); ?>" alt="" class="wp-image-100" style="aspect-ratio:1;object-fit:cover;width:30px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"small-plus"} -->
<p class="has-background-color has-text-color has-link-color has-small-plus-font-size">
<?php esc_html_e( 'Frozen Seafoods	', 'grocery-and-organic-store' ); ?>						</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color">
<?php esc_html_e( '(6)	', 'grocery-and-organic-store' ); ?>					</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"#344a9e","width":"1px"},"top":{},"right":{},"left":{}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-small-plus-font-size" style="border-bottom-color:#344a9e;border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":101,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-black"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $grocery_and_organic_store_cat_img[2] ); ?>" alt="" class="wp-image-101" style="aspect-ratio:1;object-fit:cover;width:30px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"small-plus"} -->
<p class="has-background-color has-text-color has-link-color has-small-plus-font-size">
<?php esc_html_e( 'Dairy Products', 'grocery-and-organic-store' ); ?>							</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color">
<?php esc_html_e( '(5)', 'grocery-and-organic-store' ); ?>						</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"#344a9e","width":"1px"},"top":{},"right":{},"left":{}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-small-plus-font-size" style="border-bottom-color:#344a9e;border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":103,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-black"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $grocery_and_organic_store_cat_img[3] ); ?>" alt="" class="wp-image-103" style="aspect-ratio:1;object-fit:cover;width:30px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"small-plus"} -->
<p class="has-background-color has-text-color has-link-color has-small-plus-font-size">
<?php esc_html_e( 'Alcohol', 'grocery-and-organic-store' ); ?>							</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color">
<?php esc_html_e( '(8)	', 'grocery-and-organic-store' ); ?>					</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"#344a9e","width":"1px"},"top":{},"right":{},"left":{}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-small-plus-font-size" style="border-bottom-color:#344a9e;border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":104,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-black"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $grocery_and_organic_store_cat_img[4] ); ?>" alt="" class="wp-image-104" style="aspect-ratio:1;object-fit:cover;width:30px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"small-plus"} -->
<p class="has-background-color has-text-color has-link-color has-small-plus-font-size">
<?php esc_html_e( 'Coffee &amp; Tea	', 'grocery-and-organic-store' ); ?>						</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color">
<?php esc_html_e( '(10)', 'grocery-and-organic-store' ); ?>						</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"0"}},"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-small-plus-font-size" style="border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-bottom:0;font-style:normal;font-weight:500"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":105,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-black"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $grocery_and_organic_store_cat_img[5] ); ?>" alt="" class="wp-image-105" style="aspect-ratio:1;object-fit:cover;width:30px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"small-plus"} -->
<p class="has-background-color has-text-color has-link-color has-small-plus-font-size">
	<?php esc_html_e( 'Food Cupboard	', 'grocery-and-organic-store' ); ?>						</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color">
<?php esc_html_e( '(3)	', 'grocery-and-organic-store' ); ?>					</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"51%"} -->
<div class="wp-block-column" style="flex-basis:51%"><!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:cover {"url":"<?php echo esc_url( $grocery_and_organic_store_cover_img[0] ); ?>","id":233,"dimRatio":0,"customOverlayColor":"#efc342","isUserOverlayColor":false,"minHeight":500,"contentPosition":"center left","isDark":false,"className":"is-style-grocery-and-organic-store-hover-zoom-in","style":{"border":{"radius":"10px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"55px","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"420px"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-center-left is-style-grocery-and-organic-store-hover-zoom-in" style="border-radius:10px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:55px;min-height:500px"><img class="wp-block-cover__image-background wp-image-233" alt="" src="<?php echo esc_url( $grocery_and_organic_store_cover_img[0] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#efc342"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"420px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"product_cat","separator":",","className":"is-style-categories-terniary-background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase"}},"textColor":"background","fontSize":"x-small"} /-->

<!-- wp:post-title {"level":1,"isLink":true,"className":"is-style-title-hover-primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"16px","bottom":"16px"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"large-plus","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"primary","fontFamily":"inter","fontSize":"medium","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

<!-- wp:read-more {"content":"Shop Now","style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"24px","right":"24px"},"margin":{"top":"34px"}},"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"primary","textColor":"background","fontSize":"small-plus"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:query {"queryId":1,"query":{"perPage":1,"pages":0,"offset":"1","postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:cover {"url":"<?php echo esc_url( $grocery_and_organic_store_cover_img[1] ); ?>","id":255,"dimRatio":0,"customOverlayColor":"#c4d3e3","isUserOverlayColor":false,"minHeight":240,"contentPosition":"center left","isDark":false,"className":"is-style-grocery-and-organic-store-hover-zoom-in","style":{"spacing":{"padding":{"right":"20px","left":"20px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"170px"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-center-left is-style-grocery-and-organic-store-hover-zoom-in" style="border-radius:10px;margin-top:0;margin-bottom:0;padding-right:20px;padding-left:20px;min-height:240px"><img class="wp-block-cover__image-background wp-image-255" alt="" src="<?php echo esc_url( $grocery_and_organic_store_cover_img[1] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#c4d3e3"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"170px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"product_cat","className":"is-style-categories-background-with-round is-style-categories-terniary-background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase"}},"textColor":"background","fontSize":"x-small"} /-->

<!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"10px","bottom":"10px"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"textColor":"heading","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"primary","fontFamily":"inter","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"10px"}}} /-->

<!-- wp:read-more {"content":"Shop Now","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"14px","right":"14px"},"margin":{"top":"12px"}},"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"primary","textColor":"background","fontSize":"x-small"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":1,"query":{"perPage":1,"pages":0,"offset":"2","postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:cover {"url":"<?php echo esc_url( $grocery_and_organic_store_cover_img[2] ); ?>","id":272,"dimRatio":0,"customOverlayColor":"#6fc1cd","isUserOverlayColor":false,"minHeight":240,"contentPosition":"center left","isDark":false,"className":"is-style-grocery-and-organic-store-hover-zoom-in","style":{"spacing":{"padding":{"right":"20px","left":"20px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"170px"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-center-left is-style-grocery-and-organic-store-hover-zoom-in" style="border-radius:10px;margin-top:0;margin-bottom:0;padding-right:20px;padding-left:20px;min-height:240px"><img class="wp-block-cover__image-background wp-image-272" alt="" src="<?php echo esc_url( $grocery_and_organic_store_cover_img[2] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#6fc1cd"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"170px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"product_cat","className":"is-style-categories-terniary-background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase"}},"textColor":"background","fontSize":"x-small"} /-->

<!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"10px","bottom":"10px"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"textColor":"heading","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"primary","fontFamily":"inter","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"10px"}}} /-->

<!-- wp:read-more {"content":"Shop Now","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"14px","right":"14px"},"margin":{"top":"12px"}},"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"primary","textColor":"background","fontSize":"x-small"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->