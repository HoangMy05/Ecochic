<?php
/**
 * The template for displaying the footer
 * @package Clothing Store Lite
 * @since 1.0.0
 */

/**
 * Toogle Contents
 * @hooked online_clothing_store_content_offcanvas - 30
*/

do_action('clothing_store_lite_before_footer_content_action'); ?>

</div>

<footer id="site-footer" role="contentinfo">

    <?php
    /**
     * Footer Content
     * @hooked online_clothing_store_footer_content_widget - 10
     * @hooked online_clothing_store_footer_content_info - 20
    */

    do_action('clothing_store_lite_footer_content_action'); ?>

</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>