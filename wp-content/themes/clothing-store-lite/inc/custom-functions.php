<?php
/**
 * Custom Functions.
 *
 * @package Clothing Store Lite
 */

if( !function_exists('clothing_store_lite_content_offcanvas') ):

    // Offcanvas Contents
    function clothing_store_lite_content_offcanvas(){ ?>

        <div id="offcanvas-menu">
            <div class="offcanvas-wraper">
                <div class="close-offcanvas-menu">
                    <div class="offcanvas-close">
                        <a href="javascript:void(0)" class="skip-link-menu-start"></a>
                        <button type="button" class="button-offcanvas-close">
                            <span class="offcanvas-close-label">
                                <?php echo esc_html__('Close', 'clothing-store-lite'); ?>
                            </span>
                        </button>
                    </div>
                </div>
                <div id="primary-nav-offcanvas" class="offcanvas-item offcanvas-main-navigation">
                    <nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e('Horizontal', 'clothing-store-lite'); ?>" role="navigation">
                        <ul class="primary-menu theme-menu">
                            <?php
                            if (has_nav_menu('clothing-store-lite-primary-menu')) {
                                wp_nav_menu(
                                    array(
                                        'container' => '',
                                        'items_wrap' => '%3$s',
                                        'theme_location' => 'clothing-store-lite-primary-menu',
                                        'show_toggles' => true,
                                    )
                                );
                            }else{

                                wp_list_pages(
                                    array(
                                        'match_menu_classes' => true,
                                        'show_sub_menu_icons' => true,
                                        'title_li' => false,
                                        'show_toggles' => true,
                                        'walker' => new Online_clothing_store_Walker_Page(),
                                    )
                                );
                            }
                            ?>
                        </ul>
                    </nav><!-- .primary-menu-wrapper -->
                </div>
                <a href="javascript:void(0)" class="skip-link-menu-end"></a>
            </div>
        </div>

    <?php
    }

endif;

add_action( 'clothing_store_lite_before_footer_content_action','clothing_store_lite_content_offcanvas',30 );

if( !function_exists('clothing_store_lite_footer_content_widget') ):

    function clothing_store_lite_footer_content_widget(){
        
        $clothing_store_lite_default = online_clothing_store_get_default_theme_options();
        
        $clothing_store_lite_footer_column_layout = absint(get_theme_mod('online_clothing_store_lite_footer_column_layout', $clothing_store_lite_default['online_clothing_store_footer_column_layout']));
        $clothing_store_lite_footer_sidebar_class = 12;
        
        if($clothing_store_lite_footer_column_layout == 2) {
            $clothing_store_lite_footer_sidebar_class = 6;
        }
        
        if($clothing_store_lite_footer_column_layout == 3) {
            $clothing_store_lite_footer_sidebar_class = 4;
        }
        ?>
        
        <?php if ( get_theme_mod('clothing_store_lite_display_footer', true) == true ) : ?>
            <div class="footer-widgetarea">
                <div class="wrapper">
                    <div class="column-row">
                    
                        <?php for ($i = 0; $i < $clothing_store_lite_footer_column_layout; $i++) : ?>
                            
                            <div class="column <?php echo 'column-' . absint($clothing_store_lite_footer_sidebar_class); ?> column-sm-12">
                                
                                <?php 
                                // If no widgets are assigned, display default widgets
                                if ( ! is_active_sidebar( 'clothing-store-lite-footer-widget-' . $i ) ) : 

                                    if ($i === 0) : ?>
                                        <div id="media_image-3" class="widget widget_media_image">
                                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/logo.png'); ?>" alt="<?php echo esc_attr__( 'Footer Image', 'clothing-store-lite' ); ?>" style="max-width: 100%; height: auto;">
                                        </div>
                                        <div id="text-3" class="widget widget_text">
                                            <div class="textwidget">
                                                <p class="widget_text">
                                                    <?php esc_html_e('Clothing Store Lite is a beautifully designed theme tailored for online boutiques, apparel brands, and fashion retailers looking to create a professional digital storefront. This clothing store theme offers a clean, elegant, and fully responsive layout that enhances the shopping experience across all devices. Whether you sell trendy outfits, designer wear, or handmade accessories, Clothing Store Lite provides the perfect foundation to showcase your products with style and confidence.', 'clothing-store-lite'); ?>
                                                </p>
                                            </div>
                                        </div>

                                    <?php elseif ($i === 1) : ?>
                                        <div id="pages-2" class="widget widget_pages">
                                            <h2 class="widget-title"><?php esc_html_e('Calendar', 'clothing-store-lite'); ?></h2>
                                            <?php get_calendar(); ?>
                                        </div>

                                    <?php elseif ($i === 2) : ?>
                                        <div id="search-2" class="widget widget_search">
                                            <h2 class="widget-title"><?php esc_html_e('Enter Keywords Here', 'clothing-store-lite'); ?></h2>
                                            <?php get_search_form(); ?>
                                        </div>
                                    <?php endif; 
                                    
                                else :
                                    // Display dynamic sidebar widget if assigned
                                    dynamic_sidebar('clothing-store-lite-footer-widget-' . $i);
                                endif;
                                ?>
                                
                            </div>
                            
                        <?php endfor; ?>

                    </div>
                </div>
            </div>
        <?php endif; ?> 

    <?php
    }

endif;

add_action( 'clothing_store_lite_footer_content_action', 'clothing_store_lite_footer_content_widget', 10 );

if( !function_exists('clothing_store_lite_footer_content_info') ):

    /**
     * Footer Copyright Area
    **/
    function clothing_store_lite_footer_content_info(){

        $clothing_store_lite_default = online_clothing_store_get_default_theme_options(); ?>
        <div class="site-info">
            <div class="wrapper">
                <div class="column-row">

                    <div class="column column-9">
                        <div class="footer-credits">

                            <div class="footer-copyright">

                                <?php
                                $clothing_store_lite_footer_copyright_text = wp_kses_post( get_theme_mod( 'online_clothing_store_footer_copyright_text', $clothing_store_lite_default['online_clothing_store_footer_copyright_text'] ) );
                                    echo esc_html( $clothing_store_lite_footer_copyright_text );
                                    echo '<br>';

                                    echo esc_html__('Theme: ', 'clothing-store-lite') . esc_html__('Clothing Store Lite  ', 'clothing-store-lite') . esc_html__(' By ', 'clothing-store-lite') . '  <span>' . esc_html__('OMEGA ', 'clothing-store-lite') . '</span>';
                                    echo esc_html__('Powered by ', 'clothing-store-lite') . '<a href="' . esc_url('https://wordpress.org') . '" title="' . esc_attr__('WordPress', 'clothing-store-lite') . '" target="_blank"><span>' . esc_html__('WordPress.', 'clothing-store-lite') . '</span></a>';
                                 ?>
                            </div>
                        </div>
                    </div>


                    <div class="column column-3 align-text-right">
                        <a class="to-the-top" href="#site-header">
                            <span class="to-the-top-long">
                                <?php if ( get_theme_mod('online_clothing_store_enable_to_the_top', true) == true ) : ?>
                                    <?php
                                    $clothing_store_lite_to_the_top_text = get_theme_mod( 'online_clothing_store_to_the_top_text', __( 'To the Top', 'clothing-store-lite' ) );
                                    printf( 
                                        wp_kses( 
                                            /* translators: %s is the arrow icon markup */
                                            '%s %s', 
                                            array( 'span' => array( 'class' => array(), 'aria-hidden' => array() ) ) 
                                        ), 
                                        esc_html( $clothing_store_lite_to_the_top_text ),
                                        '<span class="arrow" aria-hidden="true">&uarr;</span>' 
                                    );
                                    ?>
                                <?php endif; ?>
                            </span>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    <?php
    }

endif;

add_action( 'clothing_store_lite_footer_content_action','clothing_store_lite_footer_content_info',20 );