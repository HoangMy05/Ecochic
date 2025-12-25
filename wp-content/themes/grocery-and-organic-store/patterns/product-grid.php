<?php
/**
 * Title: Products Grid
 * Slug: grocery-and-organic-store/product-grid
 * Categories:grocery-and-organic-store,grocery-and-organic-store-woocommerce
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0px","bottom":"40px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"position":{"type":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"22px"},"margin":{"top":"0","bottom":"0px"}},"border":{"bottom":{"color":"#e4e5ee","width":"3px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-bottom-color:#e4e5ee;border-bottom-width:3px;margin-top:0;margin-bottom:0px;padding-bottom:22px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"bottom":{"style":"none","width":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"big"} -->
<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-link-color has-big-font-size" style="border-bottom-style:none;border-bottom-width:0px;margin-bottom:0;font-style:normal;font-weight:600">
<?php esc_html_e( 'Best Selling Items', 'grocery-and-organic-store' ); ?>			</h4>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"border":{"width":"1px","color":"#4C4C4C","radius":"100px"}},"backgroundColor":"transparent"} -->
<div class="wp-block-buttons has-border-color has-transparent-background-color has-background" style="border-color:#4C4C4C;border-width:1px;border-radius:100px"><!-- wp:button {"backgroundColor":"primary","textColor":"background","className":"is-style-grocery-and-organic-store-button-up-arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"radius":"100px","width":"0px","style":"none"},"spacing":{"padding":{"left":"18px","right":"18px","top":"8px","bottom":"8px"}}},"fontSize":"normal"} -->
<div class="wp-block-button is-style-grocery-and-organic-store-button-up-arrow"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background has-link-color has-normal-font-size has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:100px;padding-top:8px;padding-right:18px;padding-bottom:8px;padding-left:18px"><?php esc_html_e( 'See All', 'grocery-and-organic-store' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"45px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:45px"><!-- wp:woocommerce/product-collection {"queryId":4,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"popularity","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/best-sellers","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template {"fontSize":"x-small"} -->
<!-- wp:group {"className":"is-style-grocery-and-organic-store-boxshadow-hover","style":{"spacing":{"padding":{"top":"18px","bottom":"18px","left":"18px","right":"18px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group is-style-grocery-and-organic-store-boxshadow-hover has-border-color has-heading-color has-text-color has-link-color" style="border-color:#022E1C1A;border-width:1px;border-radius:10px;margin-top:0;margin-bottom:0;padding-top:18px;padding-right:18px;padding-bottom:18px;padding-left:18px"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"saleBadgeAlign":"left","isDescendentOfQueryLoop":true,"width":"100%","height":"155px","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} /-->

<!-- wp:woocommerce/product-stock-indicator {"className":"is-style-grocery-and-organic-store-wc-custom-psi-rounded","backgroundColor":"secondary","textColor":"heading","fontSize":"x-small","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"8px","right":"8px"},"margin":{"top":"12px"}}}} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"8px","top":"8px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading","fontSize":"normal","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"normal","style":{"elements":{"link":{"color":{"text":"#fd8f14"}}},"color":{"text":"#fd8f14"},"spacing":{"margin":{"top":"0"}}}} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"24px","bottom":"0"},"padding":{"top":"24px"},"blockGap":"15px"},"border":{"top":{"color":"#e4e5ee","width":"1px"},"right":{},"bottom":{},"left":{}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","orientation":"vertical"}} -->
<div class="wp-block-group alignwide" style="border-top-color:#e4e5ee;border-top-width:1px;margin-top:24px;margin-bottom:0;padding-top:24px"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","className":"is-style-grocery-and-organic-store-wc-strikeout-foreground","textColor":"secondary","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"typography":{"fontSize":"16px","lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"left","width":100,"isDescendentOfQueryLoop":true,"className":"is-style-grocery-and-organic-store-wc-btn-icon","backgroundColor":"primary","textColor":"background","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"border":{"radius":"100px"},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->