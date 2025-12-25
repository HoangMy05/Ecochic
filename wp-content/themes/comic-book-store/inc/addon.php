<?php
/*
 * @package Comic Book Store
 */


 function comic_book_store_admin_enqueue_scripts() {
    wp_enqueue_style( 'comic-book-store-admin-style', esc_url( get_template_directory_uri() ).'/css/addon.css' );
}
add_action( 'admin_enqueue_scripts', 'comic_book_store_admin_enqueue_scripts' );

function comic_book_store_theme_info_menu_link() {

    $comic_book_store_theme = wp_get_theme();
    add_theme_page(
        /* translators: 1: Theme name. */
        sprintf( esc_html__( 'Welcome to %1$s', 'comic-book-store' ), $comic_book_store_theme->get( 'Name' )),
        esc_html__( 'Theme Demo Import', 'comic-book-store' ),
        'edit_theme_options',
        'comic-book-store',
        'comic_book_store_theme_info_page'
    );
}
add_action( 'admin_menu', 'comic_book_store_theme_info_menu_link' );

function comic_book_store_theme_info_page() {

    $comic_book_store_theme = wp_get_theme();
    ?>
<div class="wrap theme-info-wrap">
    <h1><?php printf( esc_html__( 'Welcome to %1$s', 'comic-book-store' ), esc_html($comic_book_store_theme->get( 'Name' ))); ?>
    </h1>
    <p class="theme-description">
    <?php esc_html_e( 'Do you want to configure this theme? Look no further, our easy-to-follow theme documentation will walk you through it.', 'comic-book-store' ); ?>
    </p>
    <div class="columns-wrapper clearfix theme-demo">
        <div class="column column-quarter clearfix start-box"> 
            <div class="demo-import">
                <div class="theme-name">
                    <h2><?php echo esc_html( $comic_book_store_theme->get( 'Name' ) ); ?></h2>
                    <p class="version"><?php esc_html_e( 'Version', 'comic-book-store' ); ?>: <?php echo esc_html( wp_get_theme()->get( 'Version' ) ); ?></p>	
                </div>
                <?php
                    $comic_book_store_demo_content_file = apply_filters(
                        'comic_book_store_demo_content_path',
                        get_parent_theme_file_path( '/inc/demo-content.php' )
                    );
                    require $comic_book_store_demo_content_file;             
                ?>               
                <div id="demo-import-loader">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/status.gif'); ?>" alt="<?php echo esc_attr( 'Loading...', 'comic-book-store'); ?>" />
                </div>
            </div>
        </div>
        <div class="column column-half clearfix">
            <div class="important-link">
                <div class="main-box columns-wrapper clearfix">

                    <div class="themelink column column-half column-border clearfix">
                        <p><strong><?php esc_html_e( 'Free Theme Documentation', 'comic-book-store' ); ?></strong></p>
                        <p><?php esc_html_e( 'Need more details? Please check our full documentation for detailed theme setup.', 'comic-book-store' ); ?></p>
                        <a href="<?php echo esc_url( COMIC_BOOK_STORE_THEME_DOCUMENTATION ); ?>" target="_blank">
                        <?php esc_html_e( 'Documentation', 'comic-book-store' ); ?>
                        </a>
                    </div>

                    <div class="themelink column column-half column-padding clearfix">
                        <p><strong><?php esc_html_e( 'Need Help?', 'comic-book-store' ); ?></strong></p>
                        <p><?php esc_html_e( 'Go to our support forum to help you out in case of queries and doubts regarding our theme.', 'comic-book-store' ); ?></p>
                        <a href="<?php echo esc_url( COMIC_BOOK_STORE_SUPPORT ); ?>" target="_blank">
                        <?php esc_html_e( 'Contact Us', 'comic-book-store' ); ?>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="main-box columns-wrapper clearfix">

                    <div class="themelink column column-half column-border clearfix">
                        <p><strong><?php esc_html_e( 'Pro version of our theme', 'comic-book-store' ); ?></strong></p>
                        <p><?php esc_html_e( 'Are you excited for our theme? Then we will proceed for pro version of theme.', 'comic-book-store' ); ?></p>
                        <a class="get-premium" href="<?php echo esc_url( COMIC_BOOK_STORE_PREMIUM_PAGE ); ?>" target="_blank">
                        <?php esc_html_e( 'Get Premium', 'comic-book-store' ); ?>
                        </a>
                    </div>

                    <div class="themelink column column-half column-padding clearfix">
                        <p><strong><?php esc_html_e( 'Leave us a review', 'comic-book-store' ); ?></strong></p>
                        <p><?php esc_html_e( 'Are you enjoying our theme? We would love to hear your feedback.', 'comic-book-store' ); ?></p>
                        <a href="<?php echo esc_url( COMIC_BOOK_STORE_REVIEW ); ?>" target="_blank">
                        <?php esc_html_e( 'Rate This Theme', 'comic-book-store' ); ?>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="column column-quarter clearfix start-box"> 
            <div class="bundle-info">
                <img src="<?php echo esc_url( get_template_directory_uri().'/images/bundle.png'); ?>" alt="<?php echo esc_attr( 'screenshot', 'comic-book-store'); ?>" class="bundle-image"/>
                <div class="bundle-content themelink">
                    <h3><?php esc_html_e( 'WordPress Theme Bundle', 'comic-book-store' ); ?></h3>
                    <small><b><?php esc_html_e( 'Get access to a collection of 100+ stunning WordPress themes for just $99 — featuring designs for every business niche!', 'comic-book-store' ); ?></small></b>
                    <a class="get-premium" href="<?php echo esc_url( COMIC_BOOK_STORE_BUNDLE_PAGE ); ?>" target="_blank">
                    <?php esc_html_e( 'Get Bundle at 20% OFF', 'comic-book-store' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="getting-started">
        <div class="section">
            <h3><?php 
            /* translators: %s: Theme name. */
            printf( esc_html__( 'Getting started with %s', 'comic-book-store' ),
            esc_html($comic_book_store_theme->get( 'Name' ))); ?></h3>
            <div class="columns-wrapper clearfix">
                <div class="column column-half clearfix">
                    <div class="section themelink">
                        <div class="">
                            <a class="" href="<?php echo esc_url( COMIC_BOOK_STORE_PREMIUM_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Get Premium', 'comic-book-store' ); ?></a>
                            <a href="<?php echo esc_url( COMIC_BOOK_STORE_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e( 'View Demo', 'comic-book-store' ); ?></a>
                            <a class="get-premium" href="<?php echo esc_url( COMIC_BOOK_STORE_BUNDLE_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Bundle of 100+ Themes at $99', 'comic-book-store' ); ?></a>
                        </div>
                        <div class="theme-description-1"><?php echo esc_html($comic_book_store_theme->get( 'Description' )); ?></div>
                    </div>
                </div>
                <div class="column column-half clearfix">
                    <img src="<?php echo esc_url( $comic_book_store_theme->get_screenshot() ); ?>" alt="<?php echo esc_attr( 'screenshot', 'comic-book-store'); ?>"/>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div id="theme-author">
      <p><?php
        /* translators: 1: Theme name, 2: Author name, 3: Call to action text. */
        printf( esc_html__( '%1$s is proudly brought to you by %2$s. If you like this theme, %3$s :)', 'comic-book-store' ),
            esc_html($comic_book_store_theme->get( 'Name' )),
            '<a target="_blank" href="' . esc_url( 'https://www.theclassictemplates.com/', 'comic-book-store' ) . '">classictemplate</a>',
            '<a target="_blank" href="' . esc_url(COMIC_BOOK_STORE_REVIEW ) . '" title="' . esc_attr__( 'Rate it', 'comic-book-store' ) . '">' . esc_html_x( 'rate it', 'If you like this theme, rate it', 'comic-book-store' ) . '</a>'
        );
        ?></p>
    </div>
</div>
<?php
}
?>