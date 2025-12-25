<?php
/**
 * Title: Product
 * Slug: super-mart-store/product
 * Categories: all, product
 * Keywords: product
 */

$super_mart_store_images = array(
    SUPER_MART_STORE_URL . 'assets/images/product1.png',
    SUPER_MART_STORE_URL . 'assets/images/star.png',
    SUPER_MART_STORE_URL . 'assets/images/product2.png',
    SUPER_MART_STORE_URL . 'assets/images/product3.png',
    SUPER_MART_STORE_URL . 'assets/images/product4.png',
);

?>

<?php if ( class_exists( 'WooCommerce' ) && wc_get_products( array( 'status' => 'publish', 'limit' => 1 ) ) ) : ?>

<!-- wp:group {"tagName":"main","className":"product-main","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"60px","bottom":"60px","right":"0","left":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<main class="wp-block-group product-main" style="margin-top:0px;padding-top:60px;padding-right:0;padding-bottom:60px;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"shantell-sans"} -->
<h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-shantell-sans-font-family" style="font-size:18px;font-style:normal;font-weight:500"><?php esc_html_e( 'Our Product', 'super-mart-store' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontFamily":"amatic-sc"} -->
<h4 class="wp-block-heading has-text-align-center has-amatic-sc-font-family" style="margin-top:0;margin-bottom:0;font-size:30px;font-style:normal;font-weight:700"><?php esc_html_e( 'Our Fresh Product', 'super-mart-store' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-collection {"queryId":5,"query":{"perPage":5,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"timeFrame":{"operator":"in","value":"-3 months"},"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/new-arrivals","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"100%","height":"300px","style":{"border":{"radius":"12px"}}} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700"}},"textColor":"pure-black","fontFamily":"amatic-sc","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontFamily":"dm-sans","style":{"elements":{"link":{"color":{"text":"#0000008a"}}},"color":{"text":"#0000008a"},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","width":50,"isDescendentOfQueryLoop":true,"className":"dynamic-product-btn","backgroundColor":"secondary","fontFamily":"dm-sans","style":{"border":{"radius":{"topLeft":"30px","bottomLeft":"30px","topRight":"50px"}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"700"}}} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group -->

</main>
<!-- /wp:group -->

<?php else : ?>

<!-- wp:group {"tagName":"main","className":"product-main","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"60px","bottom":"60px","right":"0","left":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<main class="wp-block-group product-main" style="margin-top:0px;padding-top:60px;padding-right:0;padding-bottom:60px;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"shantell-sans"} -->
<h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-shantell-sans-font-family" style="font-size:18px;font-style:normal;font-weight:500"><?php esc_html_e( 'Our Product', 'super-mart-store' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontFamily":"amatic-sc"} -->
<h4 class="wp-block-heading has-text-align-center has-amatic-sc-font-family" style="margin-top:0;margin-bottom:0;font-size:30px;font-style:normal;font-weight:700"><?php esc_html_e( 'Our Fresh Product', 'super-mart-store' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"product-column"} -->
<div class="wp-block-columns product-column"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"product-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"product-image","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-image" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":103,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($super_mart_store_images[0]); ?>" alt="" class="wp-image-103" style="border-radius:12px"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary","textColor":"accent-text","className":"product-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"30px","right":"30px","top":"10px","bottom":"10px"}},"border":{"radius":{"topLeft":"30px","bottomLeft":"30px","topRight":"50px"}}},"fontFamily":"dm-sans"} -->
<div class="wp-block-button product-btn"><a class="wp-block-button__link has-accent-text-color has-secondary-background-color has-text-color has-background has-link-color has-dm-sans-font-family has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:30px;border-top-right-radius:50px;border-bottom-left-radius:30px;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px;font-size:16px;font-style:normal;font-weight:700"><?php esc_html_e( 'Add To Cart', 'super-mart-store' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"sale-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group sale-box" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"0px","topRight":"12px","bottomRight":"0px","bottomLeft":"12px"}},"spacing":{"padding":{"top":"3px","bottom":"3px","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"backgroundColor":"primary","textColor":"accent-text","fontFamily":"dm-sans"} -->
<p class="has-text-align-center has-accent-text-color has-primary-background-color has-text-color has-background has-link-color has-dm-sans-font-family" style="border-top-left-radius:0px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:0px;padding-top:3px;padding-right:var(--wp--preset--spacing--x-small);padding-bottom:3px;padding-left:var(--wp--preset--spacing--x-small);font-size:14px;font-style:normal;font-weight:600"><?php esc_html_e( 'sale', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"pure-black","fontFamily":"amatic-sc"} -->
<h5 class="wp-block-heading has-text-align-center has-pure-black-color has-text-color has-link-color has-amatic-sc-font-family" style="margin-top:0;margin-bottom:0;font-size:30px;font-style:normal;font-weight:700"><?php esc_html_e( 'Apple', 'super-mart-store' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"#000000db"}}},"color":{"text":"#000000db"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"fontFamily":"dm-sans"} -->
<p class="has-text-align-center has-text-color has-link-color has-dm-sans-font-family" style="color:#000000db;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:16px;font-style:normal;font-weight:400"><?php esc_html_e( '$23.00', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":120,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image aligncenter size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($super_mart_store_images[1]); ?>" alt="" class="wp-image-120" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"product-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"product-image","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-image" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":250,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($super_mart_store_images[2]); ?>" alt="" class="wp-image-250" style="border-radius:12px"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary","textColor":"accent-text","className":"product-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"30px","right":"30px","top":"10px","bottom":"10px"}},"border":{"radius":{"topLeft":"30px","bottomLeft":"30px","topRight":"50px"}}},"fontFamily":"dm-sans"} -->
<div class="wp-block-button product-btn"><a class="wp-block-button__link has-accent-text-color has-secondary-background-color has-text-color has-background has-link-color has-dm-sans-font-family has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:30px;border-top-right-radius:50px;border-bottom-left-radius:30px;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px;font-size:16px;font-style:normal;font-weight:700"><?php esc_html_e( 'Add To Cart', 'super-mart-store' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"sale-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group sale-box" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"0px","topRight":"12px","bottomRight":"0px","bottomLeft":"12px"}},"spacing":{"padding":{"top":"3px","bottom":"3px","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"backgroundColor":"primary","textColor":"accent-text","fontFamily":"dm-sans"} -->
<p class="has-text-align-center has-accent-text-color has-primary-background-color has-text-color has-background has-link-color has-dm-sans-font-family" style="border-top-left-radius:0px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:0px;padding-top:3px;padding-right:var(--wp--preset--spacing--x-small);padding-bottom:3px;padding-left:var(--wp--preset--spacing--x-small);font-size:14px;font-style:normal;font-weight:600"><?php esc_html_e( 'sale', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"pure-black","fontFamily":"amatic-sc"} -->
<h5 class="wp-block-heading has-text-align-center has-pure-black-color has-text-color has-link-color has-amatic-sc-font-family" style="margin-top:0;margin-bottom:0;font-size:30px;font-style:normal;font-weight:700"><?php esc_html_e( 'Tomato', 'super-mart-store' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"#000000db"}}},"color":{"text":"#000000db"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"fontFamily":"dm-sans"} -->
<p class="has-text-align-center has-text-color has-link-color has-dm-sans-font-family" style="color:#000000db;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:16px;font-style:normal;font-weight:400"><?php esc_html_e( '$25.00', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":120,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image aligncenter size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($super_mart_store_images[1]); ?>" alt="" class="wp-image-120" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"product-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"product-image","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-image" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":251,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($super_mart_store_images[3]); ?>" alt="" class="wp-image-251" style="border-radius:12px"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary","textColor":"accent-text","className":"product-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"30px","right":"30px","top":"10px","bottom":"10px"}},"border":{"radius":{"topLeft":"30px","bottomLeft":"30px","topRight":"50px"}}},"fontFamily":"dm-sans"} -->
<div class="wp-block-button product-btn"><a class="wp-block-button__link has-accent-text-color has-secondary-background-color has-text-color has-background has-link-color has-dm-sans-font-family has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:30px;border-top-right-radius:50px;border-bottom-left-radius:30px;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px;font-size:16px;font-style:normal;font-weight:700"><?php esc_html_e( 'Add To Cart', 'super-mart-store' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"sale-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group sale-box" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"0px","topRight":"12px","bottomRight":"0px","bottomLeft":"12px"}},"spacing":{"padding":{"top":"3px","bottom":"3px","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"backgroundColor":"primary","textColor":"accent-text","fontFamily":"dm-sans"} -->
<p class="has-text-align-center has-accent-text-color has-primary-background-color has-text-color has-background has-link-color has-dm-sans-font-family" style="border-top-left-radius:0px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:0px;padding-top:3px;padding-right:var(--wp--preset--spacing--x-small);padding-bottom:3px;padding-left:var(--wp--preset--spacing--x-small);font-size:14px;font-style:normal;font-weight:600"><?php esc_html_e( 'sale', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"pure-black","fontFamily":"amatic-sc"} -->
<h5 class="wp-block-heading has-text-align-center has-pure-black-color has-text-color has-link-color has-amatic-sc-font-family" style="margin-top:0;margin-bottom:0;font-size:30px;font-style:normal;font-weight:700"><?php esc_html_e( 'Banana', 'super-mart-store' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"#000000db"}}},"color":{"text":"#000000db"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"fontFamily":"dm-sans"} -->
<p class="has-text-align-center has-text-color has-link-color has-dm-sans-font-family" style="color:#000000db;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:16px;font-style:normal;font-weight:400"><?php esc_html_e( '$30.00', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":120,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image aligncenter size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($super_mart_store_images[1]); ?>" alt="" class="wp-image-120" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"product-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"product-image","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-image" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":252,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($super_mart_store_images[4]); ?>" alt="" class="wp-image-252" style="border-radius:12px"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary","textColor":"accent-text","className":"product-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"30px","right":"30px","top":"10px","bottom":"10px"}},"border":{"radius":{"topLeft":"30px","bottomLeft":"30px","topRight":"50px"}}},"fontFamily":"dm-sans"} -->
<div class="wp-block-button product-btn"><a class="wp-block-button__link has-accent-text-color has-secondary-background-color has-text-color has-background has-link-color has-dm-sans-font-family has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:30px;border-top-right-radius:50px;border-bottom-left-radius:30px;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px;font-size:16px;font-style:normal;font-weight:700"><?php esc_html_e( 'Add To Cart', 'super-mart-store' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"sale-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group sale-box" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"0px","topRight":"12px","bottomRight":"0px","bottomLeft":"12px"}},"spacing":{"padding":{"top":"3px","bottom":"3px","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"backgroundColor":"primary","textColor":"accent-text","fontFamily":"dm-sans"} -->
<p class="has-text-align-center has-accent-text-color has-primary-background-color has-text-color has-background has-link-color has-dm-sans-font-family" style="border-top-left-radius:0px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:0px;padding-top:3px;padding-right:var(--wp--preset--spacing--x-small);padding-bottom:3px;padding-left:var(--wp--preset--spacing--x-small);font-size:14px;font-style:normal;font-weight:600"><?php esc_html_e( 'sale', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"pure-black","fontFamily":"amatic-sc"} -->
<h5 class="wp-block-heading has-text-align-center has-pure-black-color has-text-color has-link-color has-amatic-sc-font-family" style="margin-top:0;margin-bottom:0;font-size:30px;font-style:normal;font-weight:700"><?php esc_html_e( 'Green Chilli', 'super-mart-store' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"#000000db"}}},"color":{"text":"#000000db"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"fontFamily":"dm-sans"} -->
<p class="has-text-align-center has-text-color has-link-color has-dm-sans-font-family" style="color:#000000db;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:16px;font-style:normal;font-weight:400"><?php esc_html_e( '$60.00', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":120,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image aligncenter size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($super_mart_store_images[1]); ?>" alt="" class="wp-image-120" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<?php endif; ?>

