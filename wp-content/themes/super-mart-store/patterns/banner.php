<?php
/**
 * Title: Banner
 * Slug: super-mart-store/banner
 * Categories: all, banner
 * Keywords: banner
 */
$super_mart_store_images = array(
    SUPER_MART_STORE_URL . 'assets/images/banner-img1.png',
    SUPER_MART_STORE_URL . 'assets/images/banner-img2.png',
    SUPER_MART_STORE_URL . 'assets/images/banner-img3.png',
);

?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main id="slider" class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"tagName":"main","className":"owl-carousel","style":{"spacing":{"padding":{"top":"0px","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group owl-carousel" style="padding-top:0px;padding-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($super_mart_store_images[0]); ?>","id":264,"dimRatio":0,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":600,"contentPosition":"center center","sizeSlug":"large","className":"banner-cover","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover banner-cover" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:600px"><img class="wp-block-cover__image-background wp-image-264 size-large" alt="" src="<?php echo esc_url($super_mart_store_images[0]); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"35%","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"slider-content-box","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"backgroundColor":"accent-text","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group slider-content-box has-accent-text-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"13px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"shantell-sans"} -->
<h3 class="wp-block-heading has-secondary-color has-text-color has-link-color has-shantell-sans-font-family" style="font-size:13px;font-style:normal;font-weight:500"><?php esc_html_e( 'Welcome Grocery store', 'super-mart-store' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"50px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}}},"textColor":"pure-black","fontFamily":"amatic-sc"} -->
<h2 class="wp-block-heading has-text-align-left has-pure-black-color has-text-color has-link-color has-amatic-sc-font-family" style="font-size:50px;font-style:normal;font-weight:700"><?php esc_html_e( 'Grocery World your one stop shop for every product you need', 'super-mart-store' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"pure-black","fontFamily":"dm-sans"} -->
<p class="has-text-align-left has-pure-black-color has-text-color has-link-color has-dm-sans-font-family" style="margin-bottom:20px;font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e( 'Lorem Ipsum & is simply dummy text of the printing', 'super-mart-store' ); ?> <br><?php esc_html_e( 'and typesetting industry.', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary","textColor":"accent-text","className":"slider-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700"},"border":{"radius":{"topLeft":"35px","bottomLeft":"35px","bottomRight":"0px","topRight":"60px"}},"spacing":{"padding":{"left":"25px","right":"25px"}}},"fontFamily":"dm-sans"} -->
<div class="wp-block-button slider-btn"><a class="wp-block-button__link has-accent-text-color has-secondary-background-color has-text-color has-background has-link-color has-dm-sans-font-family has-custom-font-size wp-element-button" style="border-top-left-radius:35px;border-top-right-radius:60px;border-bottom-left-radius:35px;border-bottom-right-radius:0px;padding-right:25px;padding-left:25px;font-size:16px;font-style:normal;font-weight:700"><?php esc_html_e( 'Know More', 'super-mart-store' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url($super_mart_store_images[1]); ?>","id":263,"dimRatio":0,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":600,"contentPosition":"center center","sizeSlug":"large","className":"banner-cover","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover banner-cover" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:600px"><img class="wp-block-cover__image-background wp-image-263 size-large" alt="" src="<?php echo esc_url($super_mart_store_images[1]); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"35%","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"slider-content-box","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"backgroundColor":"accent-text","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group slider-content-box has-accent-text-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"13px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"shantell-sans"} -->
<h3 class="wp-block-heading has-secondary-color has-text-color has-link-color has-shantell-sans-font-family" style="font-size:13px;font-style:normal;font-weight:500"><?php esc_html_e( 'Welcome Grocery store', 'super-mart-store' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"50px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}}},"textColor":"pure-black","fontFamily":"amatic-sc"} -->
<h2 class="wp-block-heading has-text-align-left has-pure-black-color has-text-color has-link-color has-amatic-sc-font-family" style="font-size:50px;font-style:normal;font-weight:700"><?php esc_html_e( 'Grocery World your one stop shop for every product you need', 'super-mart-store' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"pure-black","fontFamily":"dm-sans"} -->
<p class="has-text-align-left has-pure-black-color has-text-color has-link-color has-dm-sans-font-family" style="margin-bottom:20px;font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e( 'Lorem Ipsum & is simply dummy text of the printing', 'super-mart-store' ); ?> <br><?php esc_html_e( 'and typesetting industry.', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary","textColor":"accent-text","className":"slider-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700"},"border":{"radius":{"topLeft":"35px","bottomLeft":"35px","bottomRight":"0px","topRight":"60px"}},"spacing":{"padding":{"left":"25px","right":"25px"}}},"fontFamily":"dm-sans"} -->
<div class="wp-block-button slider-btn"><a class="wp-block-button__link has-accent-text-color has-secondary-background-color has-text-color has-background has-link-color has-dm-sans-font-family has-custom-font-size wp-element-button" style="border-top-left-radius:35px;border-top-right-radius:60px;border-bottom-left-radius:35px;border-bottom-right-radius:0px;padding-right:25px;padding-left:25px;font-size:16px;font-style:normal;font-weight:700"><?php esc_html_e( 'Know More', 'super-mart-store' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url($super_mart_store_images[2]); ?>","id":167,"dimRatio":0,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":600,"contentPosition":"center center","sizeSlug":"large","className":"banner-cover","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover banner-cover" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:600px"><img class="wp-block-cover__image-background wp-image-167 size-large" alt="" src="<?php echo esc_url($super_mart_store_images[2]); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"35%","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"slider-content-box","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"backgroundColor":"accent-text","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group slider-content-box has-accent-text-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"13px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"shantell-sans"} -->
<h3 class="wp-block-heading has-secondary-color has-text-color has-link-color has-shantell-sans-font-family" style="font-size:13px;font-style:normal;font-weight:500"><?php esc_html_e( 'Welcome Grocery store', 'super-mart-store' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"50px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}}},"textColor":"pure-black","fontFamily":"amatic-sc"} -->
<h2 class="wp-block-heading has-text-align-left has-pure-black-color has-text-color has-link-color has-amatic-sc-font-family" style="font-size:50px;font-style:normal;font-weight:700"><?php esc_html_e( 'Grocery World your one stop shop for every product you need', 'super-mart-store' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"pure-black","fontFamily":"dm-sans"} -->
<p class="has-text-align-left has-pure-black-color has-text-color has-link-color has-dm-sans-font-family" style="margin-bottom:20px;font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e( 'Lorem Ipsum & is simply dummy text of the printing', 'super-mart-store' ); ?> <br><?php esc_html_e( 'and typesetting industry.', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary","textColor":"accent-text","className":"slider-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700"},"border":{"radius":{"topLeft":"35px","bottomLeft":"35px","bottomRight":"0px","topRight":"60px"}},"spacing":{"padding":{"left":"25px","right":"25px"}}},"fontFamily":"dm-sans"} -->
<div class="wp-block-button slider-btn"><a class="wp-block-button__link has-accent-text-color has-secondary-background-color has-text-color has-background has-link-color has-dm-sans-font-family has-custom-font-size wp-element-button" style="border-top-left-radius:35px;border-top-right-radius:60px;border-bottom-left-radius:35px;border-bottom-right-radius:0px;padding-right:25px;padding-left:25px;font-size:16px;font-style:normal;font-weight:700"><?php esc_html_e( 'Know More', 'super-mart-store' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></main>
<!-- /wp:group --></main>
<!-- /wp:group --></main>
<!-- /wp:group -->
