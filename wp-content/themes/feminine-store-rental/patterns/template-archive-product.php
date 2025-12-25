<?php
/**
 * Title: Template Archive Product
 * Slug: feminine-store-rental/template-archive-product
 * Categories: template
 * Inserter: false
 */
$feminine_store_rental_images = array(
	FEMININE_STORE_RENTAL_URL . 'assets/images/banner-img1.png',
);
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|x-large","padding":{"bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<main class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:cover {"url":"<?php echo esc_url($feminine_store_rental_images[0]); ?>","id":79,"dimRatio":80,"overlayColor":"foreground","focalPoint":{"x":0.5,"y":0},"minHeight":300,"contentPosition":"center center","align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"},"padding":{"top":"0","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-bottom:var(--wp--preset--spacing--xx-large);padding-top:0;padding-bottom:0px;min-height:300px"><img class="wp-block-cover__image-background wp-image-79" alt="" src="<?php echo esc_url($feminine_store_rental_images[0]); ?>" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"0"}}}} -->
<div class="wp-block-columns" style="padding-bottom:0"><!-- wp:column {"width":"18%","className":"bk-hide-tab bk-hide-mob uag-hide-tab uag-hide-mob"} -->
<div class="wp-block-column bk-hide-tab bk-hide-mob uag-hide-tab uag-hide-mob" style="flex-basis:18%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.666%"} -->
<div class="wp-block-column" style="flex-basis:66.666%"><!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false,"align":"wide"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/breadcrumbs {"align":"","className":"bt-woo-breadcrumb bt-woo-breadcrumb-center","textColor":"pure-white","style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-white"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"18%","className":"bk-hide-tab bk-hide-mob uag-hide-tab uag-hide-mob"} -->
<div class="wp-block-column bk-hide-tab bk-hide-mob uag-hide-tab uag-hide-mob" style="flex-basis:18%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:woocommerce/store-notices /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-results-count /-->

<!-- wp:woocommerce/catalog-sorting /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":6,"query":{"perPage":10,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":true,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"products-block-post-template","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}}},"fontSize":"medium"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center"} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:template-part {"slug":"sidebar-shop","theme":"feminine-store-rental"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group --></main>
<!-- /wp:group -->