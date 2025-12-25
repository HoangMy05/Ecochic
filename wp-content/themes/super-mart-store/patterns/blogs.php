<?php
/**
 * Title: Blogs
 * Slug: super-mart-store/blogs
 * Categories: all, blogs
 * Keywords: blogs
 */

$super_mart_store_images = array(
    SUPER_MART_STORE_URL . 'assets/images/blog1.png',
    SUPER_MART_STORE_URL . 'assets/images/blog2.png',
    SUPER_MART_STORE_URL . 'assets/images/blog3.png',
    SUPER_MART_STORE_URL . 'assets/images/blog4.png',
);

?>

<?php if ( class_exists( 'Gutentor' ) ) : ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:group {"style":{"color":{"background":"#f7f7f7"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group has-background" style="background-color:#f7f7f7"><!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group" style="padding-top:60px;padding-bottom:60px"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontFamily":"shantell-sans"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-shantell-sans-font-family" style="font-size:18px;font-style:normal;font-weight:500"><?php esc_html_e( 'From The Blog Post', 'super-mart-store' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"700"}},"textColor":"pure-black","fontFamily":"amatic-sc"} -->
<h2 class="wp-block-heading has-text-align-center has-pure-black-color has-text-color has-link-color has-amatic-sc-font-family" style="font-size:40px;font-style:normal;font-weight:700"><?php esc_html_e( 'Latest News & Articles', 'super-mart-store' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"blog-post-section","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group blog-post-section"><!-- wp:gutentor/p1 {"gID":"g-xvav4xi","pName":"gutentor/p1","blockSortableItems":[{"on":false,"itemValue":"secondary-entry-meta","itemLabel":"Secondary Entry Meta"},{"on":true,"itemValue":"title","itemLabel":"Title"},{"on":false,"itemValue":"description","itemLabel":"Description/Excerpt"},{"on":true,"itemValue":"primary-entry-meta","itemLabel":"Primary Entry Meta"},{"on":true,"itemValue":"button","itemLabel":"Button"},{"itemValue":"featured-image","itemLabel":"Featured Image"}],"timestamp":1755859850317,"blockItemsColumn":{"desktop":"grid-lg-3","tablet":"grid-md-4","mobile":"grid-12"},"pContentPadding":{"mTop":"","mRight":"","mBottom":"","mLeft":""},"pBxAlign":{"desktop":"text-align-center"},"pBxColor":{"enable":false,"normal":"","hover":""},"pBtnColor":{"enable":true,"normal":"rgba(0,0,0,0)","hover":"#1949d4"},"pBtnBgGt":{"normal":false,"hover":""},"pBtnTxtColor":{"enable":true,"normal":"#FC7700","hover":"#fff"},"pBtnMargin":{"type":"px","mBottom":"","mLeft":""},"pBtnBorder":{"rTypeN":"px","rTypeH":"px","rTopN":"30","rTopH":"3","rRightN":"30","rRightH":"3","rBottomN":"0","rBottomH":"3","rLeftN":"30","rLeftH":"3","styleN":"solid","topN":"1","colorN":"#FC7700","rightN":"1","bottomN":"1","leftN":"1"},"pBtnTypography":{"fontType":"google","desktopFontSize":"14px","tabletFontSize":16,"mobileFontSize":16,"textTransform":"normal","googleFont":"DM+Sans","fontWeight":"700"},"q1BtnTypography":{"fontType":"default","desktopFontSize":16,"tabletFontSize":16,"mobileFontSize":16,"textTransform":"normal"},"pDescTypography":{"desktopFontSize":"14px","fontType":"google","googleFont":"DM+Sans","fontWeight":"500"},"pTitleTypography":{"desktopFontSize":"40px","fontType":"google","googleFont":"Amatic+SC","fontWeight":"700"},"pMeta1Typography":{"desktopFontSize":"13px","fontType":"google","googleFont":"DM+Sans","fontWeight":"500"},"pOnMeta2":true,"pFImgOColor":{"enable":false,"normal":""},"pAvatarPos":"g-avatar-img-t-l","wooPriceMargin":{"type":"px","mBottom":""},"align":"full"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php elseif ( ! did_action( 'gutentor_static_fallback_loaded' ) ) : ?>

    <?php do_action( 'gutentor_static_fallback_loaded' ); ?>
    
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:group {"style":{"color":{"background":"#f7f7f7"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background" style="background-color:#f7f7f7"><!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group" style="padding-top:60px;padding-bottom:60px"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontFamily":"shantell-sans"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-shantell-sans-font-family" style="font-size:18px;font-style:normal;font-weight:500"><?php esc_html_e( 'From The Blog Post', 'super-mart-store' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"700"}},"textColor":"pure-black","fontFamily":"amatic-sc"} -->
<h2 class="wp-block-heading has-text-align-center has-pure-black-color has-text-color has-link-color has-amatic-sc-font-family" style="font-size:40px;font-style:normal;font-weight:700"><?php esc_html_e( 'Latest News & Articles', 'super-mart-store' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"50px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-bottom:50px"><!-- wp:columns {"className":"product-column"} -->
<div class="wp-block-columns product-column"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"blog-box","style":{"spacing":{"padding":{"top":"0","bottom":"20px","left":"20px","right":"20px"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px"}},"backgroundColor":"accent-text","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-box has-accent-text-background-color has-background" style="border-radius:12px;padding-top:0;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"className":"date-box","style":{"border":{"radius":{"bottomRight":"30px"}},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"25px","right":"25px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group date-box has-primary-background-color has-background" style="border-bottom-right-radius:30px;padding-top:12px;padding-right:25px;padding-bottom:12px;padding-left:25px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-text","fontFamily":"dm-sans"} -->
<p class="has-text-align-center has-accent-text-color has-text-color has-link-color has-dm-sans-font-family" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( '12', 'super-mart-store' ); ?><br><?php esc_html_e( 'Aug', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700"}},"textColor":"pure-black","fontFamily":"amatic-sc"} -->
<h5 class="wp-block-heading has-text-align-center has-pure-black-color has-text-color has-link-color has-amatic-sc-font-family" style="font-size:30px;font-style:normal;font-weight:700"><?php esc_html_e( 'Summer is here, there is an ', 'super-mart-store' ); ?><br><?php esc_html_e( 'opportunity in the fruits!', 'super-mart-store' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"#000000bf"}}},"color":{"text":"#000000bf"}},"fontFamily":"dm-sans"} -->
<p class="has-text-align-center has-text-color has-link-color has-dm-sans-font-family" style="color:#000000bf;font-size:14px;font-style:normal;font-weight:500"><?php esc_html_e( 'It is a long established fact that a', 'super-mart-store' ); ?> <br><?php esc_html_e( 'reader will be distracted.', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000061"}}},"color":{"text":"#00000061"},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"dm-sans"} -->
<p class="has-text-color has-link-color has-dm-sans-font-family" style="color:#00000061;font-size:12px;font-style:normal;font-weight:600"><span class="dashicons dashicons-admin-users"></span><?php esc_html_e( 'Admin', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000061"}}},"color":{"text":"#00000061"},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"dm-sans"} -->
<p class="has-text-color has-link-color has-dm-sans-font-family" style="color:#00000061;font-size:12px;font-style:normal;font-weight:600"><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e( 'Comments', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px","bottom":"28px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:28px;margin-bottom:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"secondary","className":"blog-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"25px","right":"25px","top":"10px","bottom":"10px"}},"border":{"radius":{"topLeft":"30px","bottomLeft":"30px","topRight":"50px","bottomRight":"0px"},"width":"1px"}},"fontFamily":"dm-sans","borderColor":"secondary"} -->
<div class="wp-block-button blog-btn"><a class="wp-block-button__link has-secondary-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-secondary-border-color has-dm-sans-font-family has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:50px;border-bottom-left-radius:30px;border-bottom-right-radius:0px;padding-top:10px;padding-right:25px;padding-bottom:10px;padding-left:25px;font-size:14px;font-style:normal;font-weight:700"><?php esc_html_e( 'Learn More', 'super-mart-store' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"blog-image","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border blog-image"><img src="<?php echo esc_url($super_mart_store_images[0]); ?>" alt="" class="wp-image-145" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"blog-box","style":{"spacing":{"padding":{"top":"0","bottom":"20px","left":"20px","right":"20px"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px"}},"backgroundColor":"accent-text","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-box has-accent-text-background-color has-background" style="border-radius:12px;padding-top:0;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"className":"date-box","style":{"border":{"radius":{"bottomRight":"30px"}},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"25px","right":"25px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group date-box has-primary-background-color has-background" style="border-bottom-right-radius:30px;padding-top:12px;padding-right:25px;padding-bottom:12px;padding-left:25px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-text","fontFamily":"dm-sans"} -->
<p class="has-text-align-center has-accent-text-color has-text-color has-link-color has-dm-sans-font-family" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( '12', 'super-mart-store' ); ?><br><?php esc_html_e( 'Aug', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700"}},"textColor":"pure-black","fontFamily":"amatic-sc"} -->
<h5 class="wp-block-heading has-text-align-center has-pure-black-color has-text-color has-link-color has-amatic-sc-font-family" style="font-size:30px;font-style:normal;font-weight:700"><?php esc_html_e( 'Experience The Essence Of', 'super-mart-store' ); ?><br><?php esc_html_e( ' Traditional Cuisine', 'super-mart-store' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"#000000bf"}}},"color":{"text":"#000000bf"}},"fontFamily":"dm-sans"} -->
<p class="has-text-align-center has-text-color has-link-color has-dm-sans-font-family" style="color:#000000bf;font-size:14px;font-style:normal;font-weight:500"><?php esc_html_e( 'It is a long established fact that a', 'super-mart-store' ); ?> <br><?php esc_html_e( 'reader will be distracted.', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000061"}}},"color":{"text":"#00000061"},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"dm-sans"} -->
<p class="has-text-color has-link-color has-dm-sans-font-family" style="color:#00000061;font-size:12px;font-style:normal;font-weight:600"><span class="dashicons dashicons-admin-users"></span><?php esc_html_e( 'Admin', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000061"}}},"color":{"text":"#00000061"},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"dm-sans"} -->
<p class="has-text-color has-link-color has-dm-sans-font-family" style="color:#00000061;font-size:12px;font-style:normal;font-weight:600"><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e( 'Comments', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px","bottom":"28px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:28px;margin-bottom:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"secondary","className":"blog-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"25px","right":"25px","top":"10px","bottom":"10px"}},"border":{"radius":{"topLeft":"30px","bottomLeft":"30px","topRight":"50px","bottomRight":"0px"},"width":"1px"}},"fontFamily":"dm-sans","borderColor":"secondary"} -->
<div class="wp-block-button blog-btn"><a class="wp-block-button__link has-secondary-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-secondary-border-color has-dm-sans-font-family has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:50px;border-bottom-left-radius:30px;border-bottom-right-radius:0px;padding-top:10px;padding-right:25px;padding-bottom:10px;padding-left:25px;font-size:14px;font-style:normal;font-weight:700"><?php esc_html_e( 'Learn More', 'super-mart-store' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:image {"id":253,"sizeSlug":"full","linkDestination":"none","className":"blog-image","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border blog-image"><img src="<?php echo esc_url($super_mart_store_images[1]); ?>" alt="" class="wp-image-253" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"blog-box","style":{"spacing":{"padding":{"top":"0","bottom":"20px","left":"20px","right":"20px"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px"}},"backgroundColor":"accent-text","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-box has-accent-text-background-color has-background" style="border-radius:12px;padding-top:0;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"className":"date-box","style":{"border":{"radius":{"bottomRight":"30px"}},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"25px","right":"25px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group date-box has-primary-background-color has-background" style="border-bottom-right-radius:30px;padding-top:12px;padding-right:25px;padding-bottom:12px;padding-left:25px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-text","fontFamily":"dm-sans"} -->
<p class="has-text-align-center has-accent-text-color has-text-color has-link-color has-dm-sans-font-family" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( '12', 'super-mart-store' ); ?><br><?php esc_html_e( 'Aug', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700"}},"textColor":"pure-black","fontFamily":"amatic-sc"} -->
<h5 class="wp-block-heading has-text-align-center has-pure-black-color has-text-color has-link-color has-amatic-sc-font-family" style="font-size:30px;font-style:normal;font-weight:700"><?php esc_html_e( 'Discover  Secrets Of Our', 'super-mart-store' ); ?><br><?php esc_html_e( ' House made Pasta', 'super-mart-store' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"#000000bf"}}},"color":{"text":"#000000bf"}},"fontFamily":"dm-sans"} -->
<p class="has-text-align-center has-text-color has-link-color has-dm-sans-font-family" style="color:#000000bf;font-size:14px;font-style:normal;font-weight:500"><?php esc_html_e( 'It is a long established fact that a', 'super-mart-store' ); ?> <br><?php esc_html_e( 'reader will be distracted.', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000061"}}},"color":{"text":"#00000061"},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"dm-sans"} -->
<p class="has-text-color has-link-color has-dm-sans-font-family" style="color:#00000061;font-size:12px;font-style:normal;font-weight:600"><span class="dashicons dashicons-admin-users"></span><?php esc_html_e( 'Admin', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000061"}}},"color":{"text":"#00000061"},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"dm-sans"} -->
<p class="has-text-color has-link-color has-dm-sans-font-family" style="color:#00000061;font-size:12px;font-style:normal;font-weight:600"><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e( 'Comments', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px","bottom":"28px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:28px;margin-bottom:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"secondary","className":"blog-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"25px","right":"25px","top":"10px","bottom":"10px"}},"border":{"radius":{"topLeft":"30px","bottomLeft":"30px","topRight":"50px","bottomRight":"0px"},"width":"1px"}},"fontFamily":"dm-sans","borderColor":"secondary"} -->
<div class="wp-block-button blog-btn"><a class="wp-block-button__link has-secondary-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-secondary-border-color has-dm-sans-font-family has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:50px;border-bottom-left-radius:30px;border-bottom-right-radius:0px;padding-top:10px;padding-right:25px;padding-bottom:10px;padding-left:25px;font-size:14px;font-style:normal;font-weight:700"><?php esc_html_e( 'Learn More', 'super-mart-store' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:image {"id":254,"sizeSlug":"full","linkDestination":"none","className":"blog-image","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border blog-image"><img src="<?php echo esc_url($super_mart_store_images[2]); ?>" alt="" class="wp-image-254" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"blog-box","style":{"spacing":{"padding":{"top":"0","bottom":"20px","left":"20px","right":"20px"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px"}},"backgroundColor":"accent-text","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-box has-accent-text-background-color has-background" style="border-radius:12px;padding-top:0;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"className":"date-box","style":{"border":{"radius":{"bottomRight":"30px"}},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"25px","right":"25px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group date-box has-primary-background-color has-background" style="border-bottom-right-radius:30px;padding-top:12px;padding-right:25px;padding-bottom:12px;padding-left:25px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-text","fontFamily":"dm-sans"} -->
<p class="has-text-align-center has-accent-text-color has-text-color has-link-color has-dm-sans-font-family" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( '12', 'super-mart-store' ); ?><br><?php esc_html_e( 'Aug', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-black"}}},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700"}},"textColor":"pure-black","fontFamily":"amatic-sc"} -->
<h5 class="wp-block-heading has-text-align-center has-pure-black-color has-text-color has-link-color has-amatic-sc-font-family" style="font-size:30px;font-style:normal;font-weight:700"><?php esc_html_e( 'Dive Into  Bold Flavors Of ', 'super-mart-store' ); ?><br><?php esc_html_e( ' Our Grilled Meats', 'super-mart-store' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"#000000bf"}}},"color":{"text":"#000000bf"}},"fontFamily":"dm-sans"} -->
<p class="has-text-align-center has-text-color has-link-color has-dm-sans-font-family" style="color:#000000bf;font-size:14px;font-style:normal;font-weight:500"><?php esc_html_e( 'It is a long established fact that a', 'super-mart-store' ); ?> <br><?php esc_html_e( 'reader will be distracted.', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000061"}}},"color":{"text":"#00000061"},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"dm-sans"} -->
<p class="has-text-color has-link-color has-dm-sans-font-family" style="color:#00000061;font-size:12px;font-style:normal;font-weight:600"><span class="dashicons dashicons-admin-users"></span><?php esc_html_e( 'Admin', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000061"}}},"color":{"text":"#00000061"},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"dm-sans"} -->
<p class="has-text-color has-link-color has-dm-sans-font-family" style="color:#00000061;font-size:12px;font-style:normal;font-weight:600"><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e( 'Comments', 'super-mart-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px","bottom":"28px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:28px;margin-bottom:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"secondary","className":"blog-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"25px","right":"25px","top":"10px","bottom":"10px"}},"border":{"radius":{"topLeft":"30px","bottomLeft":"30px","topRight":"50px","bottomRight":"0px"},"width":"1px"}},"fontFamily":"dm-sans","borderColor":"secondary"} -->
<div class="wp-block-button blog-btn"><a class="wp-block-button__link has-secondary-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-secondary-border-color has-dm-sans-font-family has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:50px;border-bottom-left-radius:30px;border-bottom-right-radius:0px;padding-top:10px;padding-right:25px;padding-bottom:10px;padding-left:25px;font-size:14px;font-style:normal;font-weight:700"><?php esc_html_e( 'Learn More', 'super-mart-store' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:image {"id":255,"sizeSlug":"full","linkDestination":"none","className":"blog-image","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border blog-image"><img src="<?php echo esc_url($super_mart_store_images[3]); ?>" alt="" class="wp-image-255" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php endif; ?>

