<?php
/**
 * Title: Category
 * Slug: feminine-store-rental/category
 * Categories: all, category
 * Keywords: category
 */

$feminine_store_rental_images = array(
    FEMININE_STORE_RENTAL_URL . 'assets/images/category1.png',
    FEMININE_STORE_RENTAL_URL . 'assets/images/category2.png',
    FEMININE_STORE_RENTAL_URL . 'assets/images/category3.png',
    FEMININE_STORE_RENTAL_URL . 'assets/images/category4.png',
);

?>

<?php if ( class_exists( 'WooCommerce' ) && wc_get_products( array( 'status' => 'publish', 'limit' => 1 ) ) ) : ?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"tagName":"main","className":"category-main","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"60px","bottom":"60px","right":"0","left":"0"},"blockGap":"0"}},"backgroundColor":"secondary-accent","layout":{"type":"constrained","contentSize":"80%"}} -->
<main class="wp-block-group category-main has-secondary-accent-background-color has-background" style="margin-top:0px;padding-top:60px;padding-right:0;padding-bottom:60px;padding-left:0"><!-- wp:group {"className":"category-heading","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group category-heading" style="margin-bottom:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"center","level":5,"className":"service-short-heading","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-accent"}}},"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small","left":"20px","right":"20px"}}},"backgroundColor":"primary","textColor":"secondary-accent","fontFamily":"jost"} -->
<h5 class="wp-block-heading has-text-align-center service-short-heading has-secondary-accent-color has-primary-background-color has-text-color has-background has-link-color has-jost-font-family" style="border-radius:6px;padding-top:var(--wp--preset--spacing--xx-small);padding-right:20px;padding-bottom:var(--wp--preset--spacing--xx-small);padding-left:20px;font-size:16px;font-style:normal;font-weight:600"><?php esc_html_e( 'Our Category', 'feminine-store-rental' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"#1c1d1f"}}},"color":{"text":"#1c1d1f"}},"fontFamily":"jost"} -->
<h4 class="wp-block-heading has-text-align-center has-text-color has-link-color has-jost-font-family" style="color:#1c1d1f;margin-top:0;margin-bottom:0;font-size:25px;font-style:normal;font-weight:600"><?php esc_html_e( 'Our Occasion Category', 'feminine-store-rental' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:gutentor/t1 {"gID":"g-1lp106k","pName":"gutentor/t1","blockItemsColumn":{"desktop":"grid-lg-3","tablet":"grid-md-4","mobile":"grid-12"},"t1Taxonomy":"product_cat","tBtnTypography":{"fontType":"default","desktopFontSize":16,"tabletFontSize":16,"mobileFontSize":16,"textTransform":"normal"},"tBxP":{"type":"px","dTop":"15","dBottom":"15","tTop":"15","tBottom":"15","mTop":"15","mBottom":"15"},"tTitleC":{"enable":true,"normal":"#3F454D","hover":""},"tTitleTypography":{"desktopFontSize":"18px","fontType":"google","googleFont":"Jost","fontWeight":"500"},"tOnCount":false,"tCountOpt":{"display":"sorting","prefix":"","suffix":"Items"}} /--></main>
<!-- /wp:group --></main>
<!-- /wp:group -->

<?php else : ?>

<!-- wp:group {"tagName":"main","className":"category-main","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"60px","bottom":"60px","right":"0","left":"0"},"blockGap":"0"}},"backgroundColor":"secondary-accent","layout":{"type":"constrained","contentSize":"80%"}} -->
<main class="wp-block-group category-main has-secondary-accent-background-color has-background" style="margin-top:0px;padding-top:60px;padding-right:0;padding-bottom:60px;padding-left:0"><!-- wp:group {"className":"category-heading","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group category-heading" style="margin-bottom:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"center","level":5,"className":"service-short-heading","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-accent"}}},"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small","left":"20px","right":"20px"}}},"backgroundColor":"primary","textColor":"secondary-accent","fontFamily":"jost"} -->
<h5 class="wp-block-heading has-text-align-center service-short-heading has-secondary-accent-color has-primary-background-color has-text-color has-background has-link-color has-jost-font-family" style="border-radius:6px;padding-top:var(--wp--preset--spacing--xx-small);padding-right:20px;padding-bottom:var(--wp--preset--spacing--xx-small);padding-left:20px;font-size:16px;font-style:normal;font-weight:600"><?php esc_html_e( 'Our Category', 'feminine-store-rental' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"#1c1d1f"}}},"color":{"text":"#1c1d1f"}},"fontFamily":"jost"} -->
<h4 class="wp-block-heading has-text-align-center has-text-color has-link-color has-jost-font-family" style="color:#1c1d1f;margin-top:0;margin-bottom:0;font-size:25px;font-style:normal;font-weight:600"><?php esc_html_e( 'Our Occasion Category', 'feminine-store-rental' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"service-column","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-columns service-column"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"category-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group category-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"category-image","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group category-image" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":102,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($feminine_store_rental_images[0]); ?>" alt="" class="wp-image-102" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"category-content","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group category-content" style="border-radius:0px;margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"#3f454d"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"8px","bottom":"8px","left":"20px","right":"20px"}},"color":{"text":"#3f454d"},"border":{"radius":"6px"}},"backgroundColor":"secondary-accent","fontFamily":"jost"} -->
<h5 class="wp-block-heading has-text-align-center has-secondary-accent-background-color has-text-color has-background has-link-color has-jost-font-family" style="border-radius:6px;color:#3f454d;margin-top:0;margin-bottom:0;padding-top:8px;padding-right:20px;padding-bottom:8px;padding-left:20px;font-size:16px;font-style:normal;font-weight:500"><?php esc_html_e( 'Wedding Cloths', 'feminine-store-rental' ); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"category-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group category-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"category-image","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group category-image" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":103,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($feminine_store_rental_images[1]); ?>" alt="" class="wp-image-103" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"category-content","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group category-content" style="border-radius:0px;margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"#3f454d"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"8px","bottom":"8px","left":"20px","right":"20px"}},"color":{"text":"#3f454d"},"border":{"radius":"6px"}},"backgroundColor":"secondary-accent","fontFamily":"jost"} -->
<h5 class="wp-block-heading has-text-align-center has-secondary-accent-background-color has-text-color has-background has-link-color has-jost-font-family" style="border-radius:6px;color:#3f454d;margin-top:0;margin-bottom:0;padding-top:8px;padding-right:20px;padding-bottom:8px;padding-left:20px;font-size:16px;font-style:normal;font-weight:500"><?php esc_html_e( 'Party Cloths', 'feminine-store-rental' ); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"category-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group category-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"category-image","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group category-image" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":104,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($feminine_store_rental_images[2]); ?>" alt="" class="wp-image-104" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"category-content","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group category-content" style="border-radius:0px;margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"#3f454d"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"8px","bottom":"8px","left":"20px","right":"20px"}},"color":{"text":"#3f454d"},"border":{"radius":"6px"}},"backgroundColor":"secondary-accent","fontFamily":"jost"} -->
<h5 class="wp-block-heading has-text-align-center has-secondary-accent-background-color has-text-color has-background has-link-color has-jost-font-family" style="border-radius:6px;color:#3f454d;margin-top:0;margin-bottom:0;padding-top:8px;padding-right:20px;padding-bottom:8px;padding-left:20px;font-size:16px;font-style:normal;font-weight:500"><?php esc_html_e( 'Office Cloths', 'feminine-store-rental' ); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"category-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group category-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"category-image","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group category-image" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":105,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($feminine_store_rental_images[3]); ?>" alt="" class="wp-image-105" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"category-content","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group category-content" style="border-radius:0px;margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"#3f454d"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"8px","bottom":"8px","left":"20px","right":"20px"}},"color":{"text":"#3f454d"},"border":{"radius":"6px"}},"backgroundColor":"secondary-accent","fontFamily":"jost"} -->
<h5 class="wp-block-heading has-text-align-center has-secondary-accent-background-color has-text-color has-background has-link-color has-jost-font-family" style="border-radius:6px;color:#3f454d;margin-top:0;margin-bottom:0;padding-top:8px;padding-right:20px;padding-bottom:8px;padding-left:20px;font-size:16px;font-style:normal;font-weight:500"><?php esc_html_e( 'Casual Cloths', 'feminine-store-rental' ); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<?php endif; ?>

