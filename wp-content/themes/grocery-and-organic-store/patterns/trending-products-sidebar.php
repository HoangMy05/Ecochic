<?php
/**
 * Title: Trending and Top Selling Products
 * Slug: grocery-and-organic-store/trending-products-sidebar
 * Categories: grocery-and-organic-store,grocery-and-organic-store-woocommerce
 */
$grocery_and_organic_store_sidebar_url = trailingslashit( get_template_directory_uri() );
$grocery_and_organic_store_sidebar_img = array(
	$grocery_and_organic_store_sidebar_url . 'assets/images/ads.jpg',
)
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"25px","left":"25px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"spacing":{"padding":{"right":"34px","left":"34px","top":"20px","bottom":"20px"}}},"backgroundColor":"light","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-border-color has-light-background-color has-background" style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:20px;padding-right:34px;padding-bottom:20px;padding-left:34px"><!-- wp:woocommerce/product-collection {"queryId":20,"query":{"perPage":5,"pages":"1","offset":0,"postType":"product","order":"desc","orderBy":"popularity","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"list","columns":5,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/best-sellers","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:heading {"textAlign":"left","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"bottom":{"color":"#e4e5ee","width":"3px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"10px"},"margin":{"bottom":"30px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"medium"} -->
<h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color has-link-color has-medium-font-size" style="border-bottom-color:#e4e5ee;border-bottom-width:3px;margin-bottom:30px;padding-bottom:10px;font-style:normal;font-weight:600">
<?php esc_html_e( 'Top Selling', 'grocery-and-organic-store' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:woocommerce/product-template -->
<!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"15px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group is-style-default" style="margin-top:0;margin-bottom:15px;padding-top:0;padding-bottom:0"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"65px","height":"65px","className":"is-style-grocery-and-organic-store-hover-zoom-in"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"className":"is-style-title-hover-primary","style":{"spacing":{"margin":{"bottom":"0rem","top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading","fontSize":"small-plus","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"left","textColor":"luminous-vivid-orange","fontSize":"x-small","style":{"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-orange"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:woocommerce/product-stock-indicator {"className":"is-style-grocery-and-organic-store-wc-custom-psi-rounded","textColor":"primary","style":{"color":{"background":"#1d8d601a"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"8px","right":"8px"}},"typography":{"fontSize":"10px","fontStyle":"normal","fontWeight":"500"}}} /--></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","className":"is-style-grocery-and-organic-store-wc-hide-strikeout","textColor":"primary","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:group --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group -->

<!-- wp:image {"id":452,"width":"auto","height":"420px","aspectRatio":"2/3","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-grocery-and-organic-store-hover-zoom-in","style":{"border":{"radius":"10px"},"spacing":{"margin":{"right":"0","left":"0"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-grocery-and-organic-store-hover-zoom-in" style="margin-right:0;margin-left:0"><img src="<?php echo esc_url( $grocery_and_organic_store_sidebar_img[0] ); ?>" alt="" class="wp-image-452" style="border-radius:10px;aspect-ratio:2/3;object-fit:cover;width:auto;height:420px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-collection {"queryId":21,"query":{"perPage":6,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/featured","hideControls":["inherit","featured","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"16px"},"margin":{"top":"0","bottom":"45px"}},"border":{"bottom":{"color":"#e4e5ee","width":"3px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-bottom-color:#e4e5ee;border-bottom-width:3px;margin-top:0;margin-bottom:45px;padding-bottom:16px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"bottom":{"style":"none","width":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"big"} -->
<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-link-color has-big-font-size" style="border-bottom-style:none;border-bottom-width:0px;margin-bottom:0;font-style:normal;font-weight:600">
<?php esc_html_e( 'Trending Products', 'grocery-and-organic-store' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"border":{"width":"1px","color":"#4C4C4C","radius":"100px"}},"backgroundColor":"transparent"} -->
<div class="wp-block-buttons has-border-color has-transparent-background-color has-background" style="border-color:#4C4C4C;border-width:1px;border-radius:100px"><!-- wp:button {"backgroundColor":"primary","textColor":"background","className":"is-style-grocery-and-organic-store-button-up-arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"radius":"100px","width":"0px","style":"none"},"spacing":{"padding":{"left":"18px","right":"18px","top":"8px","bottom":"8px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
<div class="wp-block-button is-style-grocery-and-organic-store-button-up-arrow"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background has-link-color has-normal-font-size has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:100px;padding-top:8px;padding-right:18px;padding-bottom:8px;padding-left:18px;font-style:normal;font-weight:500"><?php esc_html_e( 'See All', 'grocery-and-organic-store' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-template -->
<!-- wp:group {"className":"is-style-grocery-and-organic-store-boxshadow-hover","style":{"spacing":{"padding":{"top":"18px","bottom":"18px","left":"18px","right":"18px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group is-style-grocery-and-organic-store-boxshadow-hover has-border-color has-heading-color has-text-color has-link-color" style="border-color:#022E1C1A;border-width:1px;border-radius:10px;margin-top:0;margin-bottom:0;padding-top:18px;padding-right:18px;padding-bottom:18px;padding-left:18px"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"saleBadgeAlign":"left","isDescendentOfQueryLoop":true,"width":"","height":"150px","className":"is-style-grocery-and-organic-store-sales-badge-terniary"} -->
<!-- wp:woocommerce/product-sale-badge {"align":"left"} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:woocommerce/product-stock-indicator {"className":"is-style-grocery-and-organic-store-wc-custom-psi-primary is-style-grocery-and-organic-store-wc-custom-psi-rounded","backgroundColor":"secondary","textColor":"heading","fontSize":"x-small","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"12px","right":"12px"}}}} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0","top":"14px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading","fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"normal","style":{"elements":{"link":{"color":{"text":"#fd8f14"}}},"color":{"text":"#fd8f14"},"spacing":{"margin":{"top":"15px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"24px","bottom":"0"},"padding":{"top":"24px"},"blockGap":"15px"},"border":{"top":{"color":"#e4e5ee","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center","orientation":"vertical"}} -->
<div class="wp-block-group" style="border-top-color:#e4e5ee;border-top-width:1px;margin-top:24px;margin-bottom:0;padding-top:24px"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","className":"is-style-grocery-and-organic-store-wc-strikeout-foreground","textColor":"secondary","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"typography":{"fontSize":"16px","lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"left","isDescendentOfQueryLoop":true,"className":"is-style-grocery-and-organic-store-wc-btn-icon","backgroundColor":"primary","textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"12px","lineHeight":"1.2"},"border":{"radius":"100px"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->