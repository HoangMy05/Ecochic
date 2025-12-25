<?php
/**
 * Title: Header
 * Slug: super-mart-store/header
 * Categories: header
 */

$super_mart_store_images = array(
    SUPER_MART_STORE_URL . 'assets/images/Shape.png',
);

?>

<!-- wp:group {"className":"main-header-top","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group main-header-top" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"0","right":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:0;padding-bottom:var(--wp--preset--spacing--x-small);padding-left:0"><!-- wp:columns {"verticalAlignment":"center","className":"top-header"} -->
<div class="wp-block-columns are-vertically-aligned-center top-header"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"right","className":"top-time","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"}},"textColor":"accent-text","fontFamily":"dm-sans"} -->
<p class="has-text-align-right top-time has-accent-text-color has-text-color has-link-color has-dm-sans-font-family" style="font-size:14px;font-style:normal;font-weight:500"><span class="dashicons dashicons-location"></span><?php esc_html_e( 'California, TX 70240', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"right","className":"top-time","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"}},"textColor":"accent-text","fontFamily":"dm-sans"} -->
<p class="has-text-align-right top-time has-accent-text-color has-text-color has-link-color has-dm-sans-font-family" style="font-size:14px;font-style:normal;font-weight:500"><span class="dashicons dashicons-email"></span><?php esc_html_e( 'info@example.com', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"right","className":"top-time","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"}},"textColor":"accent-text","fontFamily":"dm-sans"} -->
<p class="has-text-align-right top-time has-accent-text-color has-text-color has-link-color has-dm-sans-font-family" style="font-size:14px;font-style:normal;font-weight:500"><span class="dashicons dashicons-phone"></span><?php esc_html_e( '(00) 123 456 789', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"right","className":"top-time","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"}},"textColor":"accent-text","fontFamily":"dm-sans"} -->
<p class="has-text-align-right top-time has-accent-text-color has-text-color has-link-color has-dm-sans-font-family" style="font-size:14px;font-style:normal;font-weight:500"><span class="dashicons dashicons-clock"></span><?php esc_html_e( 'Mon - Sat: 09.00 to 06.00', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"header-nav","style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group header-nav" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:group {"className":"logo-bg","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url($super_mart_store_images[0]); ?>","id":56,"source":"file","title":"Shape"},"backgroundSize":"cover"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group logo-bg" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"25px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"textColor":"secondary","fontFamily":"shantell-sans"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","right":"0","left":"0"}},"position":{"type":""},"border":{"bottom":{"color":"var:preset|color|secondary","width":"3px"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:3px;padding-top:var(--wp--preset--spacing--x-small);padding-right:0;padding-bottom:var(--wp--preset--spacing--x-small);padding-left:0"><!-- wp:columns {"className":"main-header"} -->
<div class="wp-block-columns main-header"><!-- wp:column {"verticalAlignment":"center","width":"73%","className":"header-menu","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center header-menu" style="padding-top:10px;padding-bottom:10px;flex-basis:73%"><!-- wp:navigation {"textColor":"pure-black","icon":"menu","overlayTextColor":"pure-black","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"16px","textTransform":"capitalize"}},"fontFamily":"dm-sans","layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Category","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Pages","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%","className":"bk-hide-tab bk-hide-mob"} -->
<div class="wp-block-column is-vertically-aligned-center bk-hide-tab bk-hide-mob" style="flex-basis:15%"><!-- wp:group {"className":"search-meta","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group search-meta"><!-- wp:woocommerce/mini-cart {"iconColor":{"name":"Pure Black","color":"#000000","slug":"pure-black","class":"has-pure-black-icon-color"},"productCountColor":{"name":"Primary","color":"#76A713","slug":"primary","class":"has-primary-product-count-color"}} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"},"border":{"left":{"color":"#0000006e","width":"1px"}},"spacing":{"padding":{"left":"20px"}}},"textColor":"pure-black","fontFamily":"dm-sans"} -->
<p class="has-pure-black-color has-text-color has-link-color has-dm-sans-font-family" style="border-left-color:#0000006e;border-left-width:1px;padding-left:20px;font-size:14px;font-style:normal;font-weight:500"><?php esc_html_e( 'Search', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"query":{"post_type":"product"},"isSearchFieldHidden":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}}},"backgroundColor":"accent-text","textColor":"pure-black"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"12%","className":"bk-hide-tab bk-hide-mob social-icon"} -->
<div class="wp-block-column is-vertically-aligned-center bk-hide-tab bk-hide-mob social-icon" style="flex-basis:12%"><!-- wp:social-links {"iconColor":"pure-black","iconColorValue":"#000000","iconBackgroundColorValue":"#FFFFFC","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"0px"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#'","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->