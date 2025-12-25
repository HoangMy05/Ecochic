<?php
/**
 * Title: Template Index
 * Slug: feminine-store-rental/template-index
 * Categories: template
 * Inserter: false
 */
$feminine_store_rental_images = array(
    FEMININE_STORE_RENTAL_URL . 'assets/images/banner-img1.png',
);
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-large","padding":{"top":"0","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:cover {"url":"<?php echo esc_url($feminine_store_rental_images[0]); ?>","id":79,"dimRatio":80,"overlayColor":"foreground","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0},"minHeight":400,"contentPosition":"bottom center","align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"},"padding":{"top":"0","bottom":"150px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center" style="margin-bottom:var(--wp--preset--spacing--xx-large);padding-top:0;padding-bottom:150px;min-height:400px"><img class="wp-block-cover__image-background wp-image-79" alt="" src="<?php echo esc_url($feminine_store_rental_images[0]); ?>" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Our Blog', 'feminine-store-rental' ); ?></h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":13,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"6px"}},"backgroundColor":"pure-white","className":"is-style-bk-box-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-bk-box-shadow has-pure-white-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:post-featured-image /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"},"margin":{"bottom":"var:preset|spacing|small"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"is-style-swt-post-terms-pill","fontSize":"x-small"} /-->

<!-- wp:post-title {"level":4,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small"}}},"textColor":"heading"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author {"avatarSize":24,"showAvatar":false,"fontSize":"x-small"} /-->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size">·</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"M j, Y","fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:template-part {"slug":"sidebar","theme":"feminine-store-rental"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->