<?php
/**
 * Title: Deal Of The Week
 * Slug: grocery-and-organic-store/deal-of-the-week
 * Categories:grocery-and-organic-store,grocery-and-organic-store-woocommerce
 */
$grocery_and_organic_store_week_deal_url = trailingslashit( get_template_directory_uri() );
$grocery_and_organic_store_week_deal_img = array(
	$grocery_and_organic_store_week_deal_url . 'assets/images/products-main-banner.jpg',
)
?>



<!-- wp:cover {"url":"<?php echo esc_url( $grocery_and_organic_store_week_deal_img[0] ); ?>","id":205,"hasParallax":true,"dimRatio":80,"overlayColor":"dark-shade","isUserOverlayColor":true,"sizeSlug":"full"} -->
<div class="wp-block-cover has-parallax"><div class="wp-block-cover__image-background wp-image-205 size-full has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( $grocery_and_organic_store_week_deal_img[0] ); ?>)"></div><span aria-hidden="true" class="wp-block-cover__background has-dark-shade-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"40px","bottom":"40px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"position":{"type":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"22px"},"margin":{"top":"0","bottom":"0px"}},"border":{"bottom":{"color":"#e4e5ee","width":"3px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-bottom-color:#e4e5ee;border-bottom-width:3px;margin-top:0;margin-bottom:0px;padding-bottom:22px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"bottom":{"style":"none","width":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"background","fontSize":"big"} -->
<h4 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color has-big-font-size" style="border-bottom-style:none;border-bottom-width:0px;margin-bottom:0;font-style:normal;font-weight:600">
<?php esc_html_e( 'Deal Of The Week', 'grocery-and-organic-store' ); ?>			</h4>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"border":{"width":"1px","color":"#4C4C4C","radius":"100px"}},"backgroundColor":"transparent"} -->
<div class="wp-block-buttons has-border-color has-transparent-background-color has-background" style="border-color:#4C4C4C;border-width:1px;border-radius:100px"><!-- wp:button {"backgroundColor":"primary","textColor":"background","className":"is-style-grocery-and-organic-store-button-up-arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"radius":"100px","width":"0px","style":"none"},"spacing":{"padding":{"left":"18px","right":"18px","top":"8px","bottom":"8px"}}},"fontSize":"normal"} -->
<div class="wp-block-button is-style-grocery-and-organic-store-button-up-arrow"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background has-link-color has-normal-font-size has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:100px;padding-top:8px;padding-right:18px;padding-bottom:8px;padding-left:18px"><?php esc_html_e( 'See All', 'grocery-and-organic-store' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"45px"}}}} -->
<div class="wp-block-columns" style="margin-top:45px"><!-- wp:column {"width":"33%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:33%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-collection {"queryId":11,"query":{"perPage":1,"pages":1,"offset":0,"postType":"product","orderBy":"random","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":true,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"list","columns":2,"shrinkColumns":false},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/on-sale","hideControls":["inherit","on-sale","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
<!-- wp:group {"className":"is-style-grocery-and-organic-store-boxshadow-hover","style":{"spacing":{"padding":{"right":"25px","left":"25px","top":"34px","bottom":"34px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"position":{"type":""}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group is-style-grocery-and-organic-store-boxshadow-hover has-border-color has-background-background-color has-background" style="border-color:#022E1C1A;border-width:1px;border-radius:10px;margin-top:0;margin-bottom:0;padding-top:34px;padding-right:25px;padding-bottom:34px;padding-left:25px"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"saleBadgeAlign":"left","imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"100%","height":"235px","className":"is-style-grocery-and-organic-store-sales-badge-primary"} -->
<!-- wp:woocommerce/product-sale-badge {"align":"left"} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:woocommerce/product-stock-indicator {"className":"is-style-grocery-and-organic-store-wc-custom-psi-rounded","backgroundColor":"secondary","textColor":"heading","fontSize":"x-small","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"8px","right":"8px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}}} /-->

<!-- wp:post-title {"textAlign":"left","level":5,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0","top":"14px"}},"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading","fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"style":{"elements":{"link":{"color":{"text":"#fd8f14"}}},"color":{"text":"#fd8f14"},"spacing":{"margin":{"top":"14px","bottom":"14px"}}}} /-->

<!-- wp:post-excerpt {"excerptLength":20,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"bottom":"14px"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"foreground","fontSize":"small-plus"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"20px","padding":{"top":"24px"},"margin":{"top":"24px"}},"border":{"top":{"color":"#2424241a","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:#2424241a;border-top-width:1px;margin-top:24px;padding-top:24px"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","className":"is-style-grocery-and-organic-store-wc-strikeout-foreground","textColor":"primary","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"className":"is-style-grocery-and-organic-store-wc-btn-terniary","backgroundColor":"primary","textColor":"background","fontSize":"small","style":{"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:woocommerce/product-collection {"queryId":12,"query":{"perPage":6,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":true,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/on-sale","hideControls":["inherit","on-sale","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
<!-- wp:group {"className":"is-style-grocery-and-organic-store-boxshadow-hover","style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"24px","bottom":"24px"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-grocery-and-organic-store-boxshadow-hover has-border-color has-background-background-color has-background" style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"100%","height":"130px"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","className":"is-style-grocery-and-organic-store-wc-hide-strikeout","textColor":"primary","fontSize":"normal","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"14px","top":"14px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading","fontSize":"normal","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"fontSize":"normal","style":{"color":{"text":"#fd8f14"},"elements":{"link":{"color":{"text":"#fd8f14"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->