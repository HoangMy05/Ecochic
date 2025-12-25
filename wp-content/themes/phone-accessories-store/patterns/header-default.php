<?php
/**
 * Title: Header Default
 * Slug: phone-accessories-store/header-default
 * Categories: header
 */
?>

<!-- wp:group {"className":"header-sec","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0px","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"80%","wideSize":"100%"}} -->
<div class="wp-block-group header-sec" style="margin-top:0px;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:columns {"className":"header-container","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"10px","right":"10px"},"margin":{"top":"10px"}},"border":{"radius":"12px"}}} -->
<div class="wp-block-columns header-container" style="border-radius:12px;margin-top:10px;padding-top:8px;padding-right:10px;padding-bottom:8px;padding-left:10px"><!-- wp:column {"width":"25%","className":"logo-box"} -->
<div class="wp-block-column logo-box" style="flex-basis:25%"><!-- wp:site-logo /-->

<!-- wp:site-title {"style":{"typography":{"fontSize":"32px","textTransform":"capitalize"}},"fontFamily":"Jost"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%","className":"menu-box"} -->
<div class="wp-block-column menu-box" style="flex-basis:45%"><!-- wp:navigation {"textColor":"foreground","className":"main-navigation","style":{"typography":{"fontSize":"16px","textTransform":"capitalize"}},"fontFamily":"Kumbh Sans"} --><!-- wp:navigation-link {"label":"Home","url":"#","className":"home-page","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-submenu {"label":"Category","type":"","url":"#","kind":"custom","isTopLevelLink":true} -->
    <!-- wp:navigation-link {"label":"Page 1","type":"","url":"#","kind":"custom","className":""} /-->

    <!-- wp:navigation-link {"label":"Page 2","type":"","url":"#","kind":"custom","className":""} /-->
<!-- /wp:navigation-submenu -->

<!-- wp:navigation-link {"label":"Shop","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","className":"login-box","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column login-box" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"login-btn","style":{"spacing":{"blockGap":"6px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group login-btn" style="margin-top:0;margin-bottom:0"><!-- wp:html -->
<i class="fas fa-share-square"></i>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"300","textTransform":"capitalize"}},"fontFamily":"Kumbh Sans"} -->
<p class="has-kumbh-sans-font-family" style="font-size:18px;font-style:normal;font-weight:300;text-transform:capitalize"><a href="#"><?php esc_html_e('login','phone-accessories-store'); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"search-box","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"right"}} -->
<div class="wp-block-group search-box"><!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"query":{"post_type":"product"},"isSearchFieldHidden":true,"className":"search-box","namespace":"woocommerce/product-search"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->