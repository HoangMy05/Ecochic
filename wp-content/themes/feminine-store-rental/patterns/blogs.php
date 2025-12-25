<?php
/**
 * Title: Blogs
 * Slug: feminine-store-rental/blogs
 * Categories: all, blogs
 * Keywords: blogs
 */

$feminine_store_rental_images = array(
    FEMININE_STORE_RENTAL_URL . 'assets/images/blog1.png',
    FEMININE_STORE_RENTAL_URL . 'assets/images/blog2.png',
    FEMININE_STORE_RENTAL_URL . 'assets/images/blog3.png',
);

?>

<?php if ( class_exists( 'Gutentor' ) ) : ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:group {"style":{"color":{"background":"#f7f7f7"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group has-background" style="background-color:#f7f7f7"><!-- wp:group {"className":"blog-heading","style":{"spacing":{"padding":{"top":"60px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group blog-heading" style="padding-top:60px;padding-bottom:0px"><!-- wp:heading {"textAlign":"center","className":"blog-short-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-accent"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small","left":"20px","right":"20px"}}},"backgroundColor":"primary","textColor":"secondary-accent","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-center blog-short-heading has-secondary-accent-color has-primary-background-color has-text-color has-background has-link-color has-jost-font-family" style="border-radius:6px;padding-top:var(--wp--preset--spacing--xx-small);padding-right:20px;padding-bottom:var(--wp--preset--spacing--xx-small);padding-left:20px;font-size:16px;font-style:normal;font-weight:600"><?php esc_html_e( 'Our Blog', 'feminine-store-rental' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"#1c1d1f"}}},"typography":{"fontSize":"35px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"color":{"text":"#1c1d1f"}},"fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color has-jost-font-family" style="color:#1c1d1f;font-size:35px;font-style:normal;font-weight:600;text-transform:capitalize"><?php esc_html_e( 'Our Recent Blog & News', 'feminine-store-rental' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"blog-post-section","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-post-section"><!-- wp:group {"className":"blog-post-section","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-post-section"><!-- wp:gutentor/p1 {"gID":"g-xvav4xi","pName":"gutentor/p1","blockSortableItems":[{"itemValue":"featured-image","itemLabel":"Featured Image"},{"on":false,"itemValue":"secondary-entry-meta","itemLabel":"Secondary Entry Meta"},{"on":true,"itemValue":"primary-entry-meta","itemLabel":"Primary Entry Meta"},{"on":true,"itemValue":"title","itemLabel":"Title"},{"on":false,"itemValue":"description","itemLabel":"Description/Excerpt"},{"on":true,"itemValue":"button","itemLabel":"Button"}],"timestamp":1756550055989,"PExcerptLen":"246","blockItemsColumn":{"desktop":"grid-lg-3","tablet":"grid-md-4","mobile":"grid-12"},"pContentPadding":{"mTop":"","mRight":"","mBottom":"","mLeft":""},"pBxAlign":{"desktop":"","tablet":"","mobile":""},"pBxColor":{"enable":false,"normal":"","hover":""},"pBtnColor":{"enable":true,"normal":"rgba(0,0,0,0)","hover":"#1949d4"},"pBtnBgGt":{"normal":false,"hover":""},"pBtnTxtColor":{"enable":true,"normal":"#FB5D35","hover":"#fff"},"pBtnMargin":{"type":"px","mBottom":"","mLeft":""},"pBtnBorder":{"rTypeN":"px","rTypeH":"px","rTopN":"30","rTopH":"3","rRightN":"30","rRightH":"3","rBottomN":"0","rBottomH":"3","rLeftN":"30","rLeftH":"3","styleN":"solid","topN":"0","colorN":"#FB5D35","rightN":"0","bottomN":"0","leftN":"0"},"pBtnTypography":{"fontType":"google","desktopFontSize":"14px","tabletFontSize":16,"mobileFontSize":16,"textTransform":"normal","googleFont":"DM+Sans","fontWeight":"700"},"pBtnCName":"blog-btn","q1BtnTypography":{"fontType":"default","desktopFontSize":16,"tabletFontSize":16,"mobileFontSize":16,"textTransform":"normal"},"pDescTypography":{"desktopFontSize":"14px","fontType":"google","googleFont":"DM+Sans","fontWeight":"500"},"pTitleTypography":{"desktopFontSize":"25px","fontType":"google","googleFont":"Barlow+Condensed","fontWeight":"regular"},"pOnMeta1":false,"pOnCatMeta1":false,"pOnTagMeta1":false,"pOnCommentMeta1":false,"pMeta1Typography":{"desktopFontSize":"13px","fontType":"google","googleFont":"DM+Sans","fontWeight":"500"},"pOnIconMeta2":false,"pOnAuthorMeta2":false,"pFImgOColor":{"enable":false,"normal":""},"pImgBxWidth":{"type":"%","desktop":100},"pImgBxHeight":{"desktop":300},"pAvatarPos":"g-avatar-img-t-l","wooPriceMargin":{"type":"px","mBottom":""},"align":"full"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php elseif ( ! did_action( 'gutentor_static_fallback_loaded' ) ) : ?>

    <?php do_action( 'gutentor_static_fallback_loaded' ); ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:group {"style":{"color":{"background":"#fbfbfb"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background" style="background-color:#fbfbfb"><!-- wp:group {"className":"blog-heading","style":{"spacing":{"padding":{"top":"60px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group blog-heading" style="padding-top:60px;padding-bottom:0px"><!-- wp:heading {"textAlign":"center","className":"blog-short-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-accent"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"border":{"radius":"6px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"}}},"backgroundColor":"primary","textColor":"secondary-accent","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-center blog-short-heading has-secondary-accent-color has-primary-background-color has-text-color has-background has-link-color has-jost-font-family" style="border-radius:6px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;font-size:16px;font-style:normal;font-weight:600"><?php esc_html_e( 'Our Blog', 'feminine-store-rental' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"}},"textColor":"accent","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-link-color has-jost-font-family" style="font-size:25px;font-style:normal;font-weight:600;text-transform:capitalize"><?php esc_html_e( 'Our Blog & News', 'feminine-store-rental' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"50px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-bottom:50px"><!-- wp:columns {"className":"product-column"} -->
<div class="wp-block-columns product-column"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"blog-box","style":{"spacing":{"padding":{"top":"0","bottom":"20px","left":"0px","right":"0px"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-box" style="border-radius:12px;padding-top:0;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"date-box","style":{"border":{"radius":{"bottomRight":"30px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group date-box" style="border-bottom-right-radius:30px"><!-- wp:image {"id":15,"sizeSlug":"full","linkDestination":"none","className":"blog-image","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border blog-image"><img src="<?php echo esc_url($feminine_store_rental_images[0]); ?>" alt="" class="wp-image-15" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"blog-content-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0px","right":"0px"},"margin":{"top":"20px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-content-box" style="margin-top:20px;padding-top:0;padding-right:0px;padding-bottom:0;padding-left:0px"><!-- wp:heading {"textAlign":"left","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"textColor":"accent","fontFamily":"barlow-condensed"} -->
<h5 class="wp-block-heading has-text-align-left has-accent-color has-text-color has-link-color has-barlow-condensed-font-family" style="font-size:18px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'It is a long established jesan keals fact and the reservation reader and the part of new will be distracted.', 'feminine-store-rental' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|neutral"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"}},"textColor":"neutral","fontFamily":"jost"} -->
<p class="has-text-align-left has-neutral-color has-text-color has-link-color has-jost-font-family" style="font-size:15px;font-style:normal;font-weight:400"><?php esc_html_e( 'It is a long established fact that a real be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it haswhen looking at its layout. The point of using Lorem Ipsum is that it has.', 'feminine-store-rental' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"15px","bottom":"15px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:15px;margin-bottom:15px"><!-- wp:button {"textAlign":"left","backgroundColor":"transparent","textColor":"secondary","width":100,"className":"blog-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","letterSpacing":"1px","textTransform":"capitalize"},"spacing":{"padding":{"left":"0px","right":"0px","top":"12px","bottom":"12px"}},"border":{"radius":"8px","width":"0px","style":"none"}},"fontFamily":"jost"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 blog-btn"><a class="wp-block-button__link has-secondary-color has-transparent-background-color has-text-color has-background has-link-color has-jost-font-family has-text-align-left has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:8px;padding-top:12px;padding-right:0px;padding-bottom:12px;padding-left:0px;font-size:16px;font-style:normal;font-weight:600;letter-spacing:1px;text-transform:capitalize"><?php esc_html_e( 'Read More', 'feminine-store-rental' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"blog-box","style":{"spacing":{"padding":{"top":"0","bottom":"20px","left":"0px","right":"0px"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-box" style="border-radius:12px;padding-top:0;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"date-box","style":{"border":{"radius":{"bottomRight":"30px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group date-box" style="border-bottom-right-radius:30px"><!-- wp:image {"id":16,"sizeSlug":"full","linkDestination":"none","className":"blog-image","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border blog-image"><img src="<?php echo esc_url($feminine_store_rental_images[1]); ?>" alt="" class="wp-image-16" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"blog-content-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0px","right":"0px"},"margin":{"top":"20px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-content-box" style="margin-top:20px;padding-top:0;padding-right:0px;padding-bottom:0;padding-left:0px"><!-- wp:heading {"textAlign":"left","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"textColor":"accent","fontFamily":"barlow-condensed"} -->
<h5 class="wp-block-heading has-text-align-left has-accent-color has-text-color has-link-color has-barlow-condensed-font-family" style="font-size:18px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'It is a long established jesan keals fact and the reservation reader and the part of new will be distracted.', 'feminine-store-rental' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|neutral"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"}},"textColor":"neutral","fontFamily":"jost"} -->
<p class="has-text-align-left has-neutral-color has-text-color has-link-color has-jost-font-family" style="font-size:15px;font-style:normal;font-weight:400"><?php esc_html_e( 'It is a long established fact that a real be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it haswhen looking at its layout. The point of using Lorem Ipsum is that it has.', 'feminine-store-rental' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"15px","bottom":"15px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:15px;margin-bottom:15px"><!-- wp:button {"textAlign":"left","backgroundColor":"transparent","textColor":"secondary","width":100,"className":"blog-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","letterSpacing":"1px","textTransform":"capitalize"},"spacing":{"padding":{"left":"0px","right":"0px","top":"12px","bottom":"12px"}},"border":{"radius":"8px","width":"0px","style":"none"}},"fontFamily":"jost"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 blog-btn"><a class="wp-block-button__link has-secondary-color has-transparent-background-color has-text-color has-background has-link-color has-jost-font-family has-text-align-left has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:8px;padding-top:12px;padding-right:0px;padding-bottom:12px;padding-left:0px;font-size:16px;font-style:normal;font-weight:600;letter-spacing:1px;text-transform:capitalize"><?php esc_html_e( 'Read More', 'feminine-store-rental' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"blog-box","style":{"spacing":{"padding":{"top":"0","bottom":"20px","left":"0px","right":"0px"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-box" style="border-radius:12px;padding-top:0;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"date-box","style":{"border":{"radius":{"bottomRight":"30px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group date-box" style="border-bottom-right-radius:30px"><!-- wp:image {"id":17,"sizeSlug":"full","linkDestination":"none","className":"blog-image","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border blog-image"><img src="<?php echo esc_url($feminine_store_rental_images[2]); ?>" alt="" class="wp-image-17" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"blog-content-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0px","right":"0px"},"margin":{"top":"20px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-content-box" style="margin-top:20px;padding-top:0;padding-right:0px;padding-bottom:0;padding-left:0px"><!-- wp:heading {"textAlign":"left","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"textColor":"accent","fontFamily":"barlow-condensed"} -->
<h5 class="wp-block-heading has-text-align-left has-accent-color has-text-color has-link-color has-barlow-condensed-font-family" style="font-size:18px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'It is a long established jesan keals fact and the reservation reader and the part of new will be distracted.', 'feminine-store-rental' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|neutral"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"}},"textColor":"neutral","fontFamily":"jost"} -->
<p class="has-text-align-left has-neutral-color has-text-color has-link-color has-jost-font-family" style="font-size:15px;font-style:normal;font-weight:400"><?php esc_html_e( 'It is a long established fact that a real be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it haswhen looking at its layout. The point of using Lorem Ipsum is that it has.', 'feminine-store-rental' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"15px","bottom":"15px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:15px;margin-bottom:15px"><!-- wp:button {"textAlign":"left","backgroundColor":"transparent","textColor":"secondary","width":100,"className":"blog-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","letterSpacing":"1px","textTransform":"capitalize"},"spacing":{"padding":{"left":"0px","right":"0px","top":"12px","bottom":"12px"}},"border":{"radius":"8px","width":"0px","style":"none"}},"fontFamily":"jost"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 blog-btn"><a class="wp-block-button__link has-secondary-color has-transparent-background-color has-text-color has-background has-link-color has-jost-font-family has-text-align-left has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:8px;padding-top:12px;padding-right:0px;padding-bottom:12px;padding-left:0px;font-size:16px;font-style:normal;font-weight:600;letter-spacing:1px;text-transform:capitalize"><?php esc_html_e( 'Read More', 'feminine-store-rental' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php endif; ?>