<?php
/**
 * Title: Product Section
 * Slug: phone-accessories-store/product-section
 * Categories: template
 */

$phone_accessories_store_pluginsList = get_option( 'active_plugins' );
$phone_accessories_store_plugin = 'woocommerce/woocommerce.php';
$phone_accessories_store_results = in_array( $phone_accessories_store_plugin , $phone_accessories_store_pluginsList);
if ( $phone_accessories_store_results )  {

?>

<!-- wp:group {"className":"product-sec","style":{"spacing":{"margin":{"top":"5em","bottom":"5em"}}},"layout":{"type":"constrained","contentSize":"80%","wideSize":"100%"}} -->
<div class="wp-block-group product-sec" style="margin-top:5em;margin-bottom:5em"><!-- wp:woocommerce/product-collection {"queryId":2,"query":{"perPage":5,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"timeFrame":{"operator":"in","value":"-7 days"},"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":5,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/new-arrivals","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"30px","fontStyle":"Thin","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontFamily":"Jost"} -->
<h2 class="wp-block-heading has-text-align-center has-jost-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:30px;font-style:Thin;font-weight:700"><?php esc_html_e('Best Products','phone-accessories-store'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"prod-details","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"12px","left":"0","right":"0"}},"typography":{"fontSize":"16px"}},"fontFamily":"Kumbh Sans"} -->
<p class="has-text-align-center prod-details has-kumbh-sans-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:12px;padding-left:0;font-size:16px"><?php esc_html_e('Lorem Ipsum is simply dummy text of the printing and typesetting industry','phone-accessories-store'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:woocommerce/product-template {"className":"owl-carousel"} -->
<!-- wp:group {"className":"product-box","style":{"dimensions":{"minHeight":"350px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group product-box" style="min-height:350px"><!-- wp:group {"className":"prod-img-bg","style":{"border":{"radius":"20px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group prod-img-bg has-background-background-color has-background" style="border-radius:20px"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"300px","height":"250px"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-content","style":{"color":{"background":"#f6f6f6"},"spacing":{"padding":{"top":"8em","bottom":"10px"}},"border":{"radius":"30px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group product-content has-background" style="border-radius:30px;background-color:#f6f6f6;padding-top:8em;padding-bottom:10px"><!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true} /-->

<!-- wp:post-title {"textAlign":"left","isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0","right":"0"},"padding":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4","fontSize":"24px","fontStyle":"Thin","fontWeight":"600"}},"fontFamily":"Jost","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"product-main-price","fontFamily":"Kumbh Sans","fontSize":"small","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"right","isDescendentOfQueryLoop":true,"className":"add-to-cart-main","fontSize":"small","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group -->

<?php } else { ?>

<!-- wp:group {"className":"product-sec","style":{"spacing":{"margin":{"top":"5em","bottom":"5em"}}},"layout":{"type":"constrained","contentSize":"80%","wideSize":"100%"}} -->
<div class="wp-block-group product-sec" style="margin-top:5em;margin-bottom:5em"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"30px","fontStyle":"Thin","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontFamily":"Jost"} -->
<h2 class="wp-block-heading has-text-align-center has-jost-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:30px;font-style:Thin;font-weight:700"><?php esc_html_e('Best Products','phone-accessories-store'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"prod-details","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"12px","left":"0","right":"0"}},"typography":{"fontSize":"16px"}},"fontFamily":"Kumbh Sans"} -->
<p class="has-text-align-center prod-details has-kumbh-sans-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:12px;padding-left:0;font-size:16px"><?php esc_html_e('Lorem Ipsum is simply dummy text of the printing and typesetting industry','phone-accessories-store'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"owl-carousel"} -->
<div class="wp-block-columns owl-carousel"><!-- wp:column {"className":"product-box"} -->
<div class="wp-block-column product-box"><!-- wp:group {"className":"prod-img-bg","style":{"dimensions":{"minHeight":"350px"},"border":{"radius":"20px"}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group prod-img-bg has-background-background-color has-background" style="border-radius:20px;min-height:350px"><!-- wp:image {"id":80,"width":"250px","height":"300px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product1.png'); ?>" alt="" class="wp-image-80" style="object-fit:contain;width:250px;height:300px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-content","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"9em","bottom":"20px"}},"color":{"background":"#f6f6f6"},"border":{"radius":"30px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group product-content has-background" style="border-radius:30px;background-color:#f6f6f6;margin-top:0;margin-bottom:0;padding-top:9em;padding-bottom:20px"><!-- wp:image {"id":144,"width":"auto","height":"33px","sizeSlug":"full","linkDestination":"none","align":"left","className":"star-img"} -->
<figure class="wp-block-image alignleft size-full is-resized star-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/review-img.png'); ?>" alt="" class="wp-image-144" style="width:auto;height:33px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"23px","fontStyle":"Thin","fontWeight":"600"},"spacing":{"padding":{"top":"3px","bottom":"10px"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontFamily":"Jost"} -->
<h3 class="wp-block-heading has-foreground-color has-text-color has-link-color has-jost-font-family" style="margin-top:0;margin-bottom:0;padding-top:3px;padding-bottom:10px;font-size:23px;font-style:Thin;font-weight:600"><a href="#"><?php esc_html_e('Product Name 01','phone-accessories-store'); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"product-main-price","style":{"typography":{"fontSize":"19px","fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"fontFamily":"Kumbh Sans"} -->
<p class="product-main-price has-kumbh-sans-font-family" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:19px;font-style:normal;font-weight:300"><?php esc_html_e('$34,000','phone-accessories-store'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a href="#"><i class="fas fa-shopping-cart"></i></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-box"} -->
<div class="wp-block-column product-box"><!-- wp:group {"className":"prod-img-bg","style":{"dimensions":{"minHeight":"350px"},"border":{"radius":"20px"}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group prod-img-bg has-background-background-color has-background" style="border-radius:20px;min-height:350px"><!-- wp:image {"id":80,"width":"250px","height":"300px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product2.png'); ?>" alt="" class="wp-image-80" style="object-fit:contain;width:250px;height:300px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-content","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"9em","bottom":"20px"}},"color":{"background":"#f6f6f6"},"border":{"radius":"30px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group product-content has-background" style="border-radius:30px;background-color:#f6f6f6;margin-top:0;margin-bottom:0;padding-top:9em;padding-bottom:20px"><!-- wp:image {"id":144,"width":"auto","height":"33px","sizeSlug":"full","linkDestination":"none","align":"left","className":"star-img"} -->
<figure class="wp-block-image alignleft size-full is-resized star-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/review-img.png'); ?>" alt="" class="wp-image-144" style="width:auto;height:33px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"23px","fontStyle":"Thin","fontWeight":"600"},"spacing":{"padding":{"top":"3px","bottom":"10px"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontFamily":"Jost"} -->
<h3 class="wp-block-heading has-foreground-color has-text-color has-link-color has-jost-font-family" style="margin-top:0;margin-bottom:0;padding-top:3px;padding-bottom:10px;font-size:23px;font-style:Thin;font-weight:600"><a href="#"><?php esc_html_e('Product Name 02','phone-accessories-store'); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"product-main-price","style":{"typography":{"fontSize":"19px","fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"fontFamily":"Kumbh Sans"} -->
<p class="product-main-price has-kumbh-sans-font-family" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:19px;font-style:normal;font-weight:300"><?php esc_html_e('$34,000','phone-accessories-store'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a href="#"><i class="fas fa-shopping-cart"></i></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-box"} -->
<div class="wp-block-column product-box"><!-- wp:group {"className":"prod-img-bg","style":{"dimensions":{"minHeight":"350px"},"border":{"radius":"20px"}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group prod-img-bg has-background-background-color has-background" style="border-radius:20px;min-height:350px"><!-- wp:image {"id":80,"width":"250px","height":"300px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product3.png'); ?>" alt="" class="wp-image-80" style="object-fit:contain;width:250px;height:300px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-content","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"9em","bottom":"20px"}},"color":{"background":"#f6f6f6"},"border":{"radius":"30px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group product-content has-background" style="border-radius:30px;background-color:#f6f6f6;margin-top:0;margin-bottom:0;padding-top:9em;padding-bottom:20px"><!-- wp:image {"id":144,"width":"auto","height":"33px","sizeSlug":"full","linkDestination":"none","align":"left","className":"star-img"} -->
<figure class="wp-block-image alignleft size-full is-resized star-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/review-img.png'); ?>" alt="" class="wp-image-144" style="width:auto;height:33px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"23px","fontStyle":"Thin","fontWeight":"600"},"spacing":{"padding":{"top":"3px","bottom":"10px"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontFamily":"Jost"} -->
<h3 class="wp-block-heading has-foreground-color has-text-color has-link-color has-jost-font-family" style="margin-top:0;margin-bottom:0;padding-top:3px;padding-bottom:10px;font-size:23px;font-style:Thin;font-weight:600"><a href="#"><?php esc_html_e('Product Name 03','phone-accessories-store'); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"product-main-price","style":{"typography":{"fontSize":"19px","fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"fontFamily":"Kumbh Sans"} -->
<p class="product-main-price has-kumbh-sans-font-family" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:19px;font-style:normal;font-weight:300"><?php esc_html_e('$34,000','phone-accessories-store'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a href="#"><i class="fas fa-shopping-cart"></i></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-box"} -->
<div class="wp-block-column product-box"><!-- wp:group {"className":"prod-img-bg","style":{"dimensions":{"minHeight":"350px"},"border":{"radius":"20px"}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group prod-img-bg has-background-background-color has-background" style="border-radius:20px;min-height:350px"><!-- wp:image {"id":80,"width":"250px","height":"300px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product4.png'); ?>" alt="" class="wp-image-80" style="object-fit:contain;width:250px;height:300px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-content","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"9em","bottom":"20px"}},"color":{"background":"#f6f6f6"},"border":{"radius":"30px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group product-content has-background" style="border-radius:30px;background-color:#f6f6f6;margin-top:0;margin-bottom:0;padding-top:9em;padding-bottom:20px"><!-- wp:image {"id":144,"width":"auto","height":"33px","sizeSlug":"full","linkDestination":"none","align":"left","className":"star-img"} -->
<figure class="wp-block-image alignleft size-full is-resized star-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/review-img.png'); ?>" alt="" class="wp-image-144" style="width:auto;height:33px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"23px","fontStyle":"Thin","fontWeight":"600"},"spacing":{"padding":{"top":"3px","bottom":"10px"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontFamily":"Jost"} -->
<h3 class="wp-block-heading has-foreground-color has-text-color has-link-color has-jost-font-family" style="margin-top:0;margin-bottom:0;padding-top:3px;padding-bottom:10px;font-size:23px;font-style:Thin;font-weight:600"><a href="#"><?php esc_html_e('Product Name 04','phone-accessories-store'); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"product-main-price","style":{"typography":{"fontSize":"19px","fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"fontFamily":"Kumbh Sans"} -->
<p class="product-main-price has-kumbh-sans-font-family" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:19px;font-style:normal;font-weight:300"><?php esc_html_e('$34,000','phone-accessories-store'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a href="#"><i class="fas fa-shopping-cart"></i></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-box"} -->
<div class="wp-block-column product-box"><!-- wp:group {"className":"prod-img-bg","style":{"dimensions":{"minHeight":"350px"},"border":{"radius":"20px"}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group prod-img-bg has-background-background-color has-background" style="border-radius:20px;min-height:350px"><!-- wp:image {"id":80,"width":"250px","height":"300px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product2.png'); ?>" alt="" class="wp-image-80" style="object-fit:contain;width:250px;height:300px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-content","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"9em","bottom":"20px"}},"color":{"background":"#f6f6f6"},"border":{"radius":"30px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group product-content has-background" style="border-radius:30px;background-color:#f6f6f6;margin-top:0;margin-bottom:0;padding-top:9em;padding-bottom:20px"><!-- wp:image {"id":144,"width":"auto","height":"33px","sizeSlug":"full","linkDestination":"none","align":"left","className":"star-img"} -->
<figure class="wp-block-image alignleft size-full is-resized star-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/review-img.png'); ?>" alt="" class="wp-image-144" style="width:auto;height:33px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"23px","fontStyle":"Thin","fontWeight":"600"},"spacing":{"padding":{"top":"3px","bottom":"10px"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontFamily":"Jost"} -->
<h3 class="wp-block-heading has-foreground-color has-text-color has-link-color has-jost-font-family" style="margin-top:0;margin-bottom:0;padding-top:3px;padding-bottom:10px;font-size:23px;font-style:Thin;font-weight:600"><a href="#"><?php esc_html_e('Product Name 05','phone-accessories-store'); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"product-main-price","style":{"typography":{"fontSize":"19px","fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"fontFamily":"Kumbh Sans"} -->
<p class="product-main-price has-kumbh-sans-font-family" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:19px;font-style:normal;font-weight:300"><?php esc_html_e('$34,000','phone-accessories-store'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a href="#"><i class="fas fa-shopping-cart"></i></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php } ?>