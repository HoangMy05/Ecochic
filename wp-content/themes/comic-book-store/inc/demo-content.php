<div class="theme-offer">
    <?php
        // Check if the demo import has been completed
        $comic_book_store_demo_import_completed = get_option('comic_book_store_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($comic_book_store_demo_import_completed) {
            echo '<br>';
            echo '<div class="success">Demo Import Successful</div>';
            echo '<br>';
            echo '<hr>';
            echo '<br>';
            echo '<span>' . esc_html__( 'You can now visit your site or customize it further.', 'comic-book-store' ) . '</span>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<div class="view-site-btn">';
            echo '<a href="' . esc_url(home_url()) . '" class="button button-primary button-large" style="margin-top: 10px;" target="_blank">View Site</a>';
            echo '<a href="' . esc_url( admin_url('customize.php') ) . '" class="button button-primary button-large" style="margin-top: 10px;" target="_blank">Customize Demo Content</a>';
            echo '</div>';
        }
    // POST and update the customizer and other related data of Comic Book Store
    if ( isset( $_POST['submit'] ) ) {

        echo '<div class="plugin-notice">';
            // KK Star Ratings installation and activation
            $comic_book_store_plugin_slug = 'kk-star-ratings';
            $comic_book_store_plugin_file = 'kk-star-ratings/kk-star-ratings.php';

            if (!is_plugin_active($comic_book_store_plugin_file)) {
                $comic_book_store_plugin_dir = WP_PLUGIN_DIR . '/' . $comic_book_store_plugin_slug;

                if (!file_exists($comic_book_store_plugin_dir)) {
                    include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                    include_once(ABSPATH . 'wp-admin/includes/file.php');
                    include_once(ABSPATH . 'wp-admin/includes/misc.php');
                    include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
                    $comic_book_store_upgrader = new Plugin_Upgrader();
                    $comic_book_store_upgrader->install('https://downloads.wordpress.org/plugin/kk-star-ratings.latest-stable.zip');
                }

                // Ensure the plugin is activated
                if (file_exists($comic_book_store_plugin_dir) && !is_plugin_active($comic_book_store_plugin_file)) {
                    activate_plugin($comic_book_store_plugin_file);
                }
            }

            // Verify KK Star Ratings activation
            if (is_plugin_active($comic_book_store_plugin_file)) {
                // Set KK Star Ratings options
                update_option('kk_star_ratings_location_posts', '1'); // Enable ratings for posts

                // Optionally, configure more settings based on your needs
            } else {
                error_log('KK Star Ratings plugin could not be activated.');
            }

            // Check if Classic Blog Grid plugin is installed
            if (!is_plugin_active('classic-blog-grid/classic-blog-grid.php')) {
                // Plugin slug and file path for Classic Blog Grid
                $comic_book_store_plugin_slug = 'classic-blog-grid';
                $comic_book_store_plugin_file = 'classic-blog-grid/classic-blog-grid.php';
            
                // Check if Classic Blog Grid is installed and activated
                if ( ! is_plugin_active( $comic_book_store_plugin_file ) ) {
            
                    // Check if Classic Blog Grid is installed
                    $comic_book_store_installed_plugins = get_plugins();
                    if ( ! isset( $comic_book_store_installed_plugins[ $comic_book_store_plugin_file ] ) ) {
            
                        // Include necessary files to install plugins
                        include_once( ABSPATH . 'wp-admin/includes/plugin-install.php' );
                        include_once( ABSPATH . 'wp-admin/includes/file.php' );
                        include_once( ABSPATH . 'wp-admin/includes/misc.php' );
                        include_once( ABSPATH . 'wp-admin/includes/class-wp-upgrader.php' );
            
                        // Download and install Classic Blog Grid
                        $comic_book_store_upgrader = new Plugin_Upgrader();
                        $comic_book_store_upgrader->install( 'https://downloads.wordpress.org/plugin/classic-blog-grid.latest-stable.zip' );
                    }
            
                    // Activate the Classic Blog Grid plugin after installation (if needed)
                    activate_plugin( $comic_book_store_plugin_file );
                }
            }
        echo '</div>';

        // ------- Create Main Menu --------
        $comic_book_store_menuname = 'Primary Menu';
        $comic_book_store_bpmenulocation = 'primary';
        $comic_book_store_menu_exists = wp_get_nav_menu_object( $comic_book_store_menuname );
    
        if ( !$comic_book_store_menu_exists ) {
            $comic_book_store_menu_id = wp_create_nav_menu( $comic_book_store_menuname );

            // Create Home Page
            $comic_book_store_home_title = 'Home';
            $comic_book_store_home = array(
                'post_type'    => 'page',
                'post_title'   => $comic_book_store_home_title,
                'post_content' => '',
                'post_status'  => 'publish',
                'post_author'  => 1,
                'post_slug'    => 'home'
            );
            $comic_book_store_home_id = wp_insert_post($comic_book_store_home);
            // Assign Home Page Template
            add_post_meta($comic_book_store_home_id, '_wp_page_template', 'templates/template-home-page.php');
            // Update options to set Home Page as the front page
            update_option('page_on_front', $comic_book_store_home_id);
            update_option('show_on_front', 'page');
            // Add Home Page to Menu
            wp_update_nav_menu_item($comic_book_store_menu_id, 0, array(
                'menu-item-title' => __('Home', 'comic-book-store'),
                'menu-item-classes' => 'home',
                'menu-item-url' => home_url('/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $comic_book_store_home_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create a new Page 
            $comic_book_store_pages_title = 'Pages';
            $comic_book_store_pages_content = '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>';
            $comic_book_store_pages = array(
                'post_type'    => 'page',
                'post_title'   => $comic_book_store_pages_title,
                'post_content' => $comic_book_store_pages_content,
                'post_status'  => 'publish',
                'post_author'  => 1,
                'post_slug'    => 'pages'
            );
            $comic_book_store_pages_id = wp_insert_post($comic_book_store_pages);
            // Add Pages Page to Menu
            wp_update_nav_menu_item($comic_book_store_menu_id, 0, array(
                'menu-item-title' => __('Pages', 'comic-book-store'),
                'menu-item-classes' => 'pages',
                'menu-item-url' => home_url('/pages/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $comic_book_store_pages_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create About Us Page with Dummy Content
            $comic_book_store_about_title = 'About Us';
            $comic_book_store_about_content = '<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</P>'; 
            $comic_book_store_about = array(
                'post_type'    => 'page',
                'post_title'   => $comic_book_store_about_title,
                'post_content' => $comic_book_store_about_content,
                'post_status'  => 'publish',
                'post_author'  => 1,
                'post_slug'    => 'about-us'
            );
            $comic_book_store_about_id = wp_insert_post($comic_book_store_about);
            // Add About Us Page to Menu
            wp_update_nav_menu_item($comic_book_store_menu_id, 0, array(
                'menu-item-title' => __('About Us', 'comic-book-store'),
                'menu-item-classes' => 'about-us',
                'menu-item-url' => home_url('/about-us/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $comic_book_store_about_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Assign the menu to the primary location if not already set
            if ( ! has_nav_menu( $comic_book_store_bpmenulocation ) ) {
                $comic_book_store_locations = get_theme_mod( 'nav_menu_locations' );
                if ( empty( $comic_book_store_locations ) ) {
                    $comic_book_store_locations = array();
                }
                $comic_book_store_locations[ $comic_book_store_bpmenulocation ] = $comic_book_store_menu_id;
                set_theme_mod( 'nav_menu_locations', $comic_book_store_locations );
            }
        }

        //Header Section
        set_theme_mod( 'comic_book_store_the_custom_logo', esc_url( get_template_directory_uri().'/images/Logo.png'));

        // Banner section
        set_theme_mod( 'comic_book_store_banner_section', 'true' );
        set_theme_mod( 'comic_book_store_banner_bg_img', get_template_directory_uri().'/images/banner-bg.png' );   
        set_theme_mod( 'comic_book_store_banner_small_title', 'Welcome to Comixs' );  
        set_theme_mod( 'comic_book_store_button_text', 'Read More' ); 
        set_theme_mod( 'comic_book_store_button_link_banner', '#' ); 

        // Create a single page for "The Best Online Comic Store"
        $comic_book_store_banner_title = 'The Best Online Comic Store';
        $comic_book_store_banner_content = 'It is a long established fact that a reader best Comic will be distracted by the readable content.';

        // Create the post object
        $comic_book_store_post = array(
            'post_title'    => wp_strip_all_tags($comic_book_store_banner_title),
            'post_content'  => $comic_book_store_banner_content,
            'post_status'   => 'publish',
            'post_type'     => 'page',
        );

        // Insert the post into the database
        $comic_book_store_post_id = wp_insert_post($comic_book_store_post);

        // If the post was successfully created
        if ($comic_book_store_post_id && !is_wp_error($comic_book_store_post_id)) {
            // Set the theme mod for the single banner page
            set_theme_mod('comic_book_store_banner_pageboxes', $comic_book_store_post_id);

            // Set the featured image for the post
            $comic_book_store_image_url = get_template_directory_uri() . '/images/banner.png';
            
            // Use media_sideload_image to upload and set the image
            $comic_book_store_image_id = media_sideload_image($comic_book_store_image_url, $comic_book_store_post_id, null, 'id');

            // Check if the image was successfully uploaded and set
            if (!is_wp_error($comic_book_store_image_id)) {
                // Set the image as the post's featured image
                set_post_thumbnail($comic_book_store_post_id, $comic_book_store_image_id);
            } else {
                // Log or handle the error
                error_log("Error setting the featured image: " . $comic_book_store_image_id->get_error_message());
            }

            // Set the single created page as the default page for the banner
            set_theme_mod('comic_book_store_selected_banner_page', $comic_book_store_post_id);

        } else {
            // Log or handle the error if the page creation failed
            error_log("Error creating the page: " . $comic_book_store_post_id->get_error_message());
        }

        //Cards Section
        set_theme_mod( 'comic_book_store_cards_section', 'true' );
       
        // Define arrays for titles, texts, and icons
        $comic_book_store_card_titles = array('READ BOOKS ONLINE', '30 DAYS RETURN', 'FREE SHIPPING', 'SECURED PAYMENT');
        $comic_book_store_card_texts = array('Lorem ipsum dolor sit amet,', 'Lorem ipsum dolor sit amet,', 'Lorem ipsum dolor sit amet,', 'Lorem ipsum dolor sit amet,');
        $comic_book_store_card_icons = array('fa-solid fa-book-open', 'fa-solid fa-rotate', 'fa-solid fa-truck', 'fa-solid fa-shield-heart');

        // Loop through the arrays and set the values dynamically
        for ($comic_book_store_i = 0; $comic_book_store_i < count($comic_book_store_card_titles); $comic_book_store_i++) {
            // Year of Course Setting
            set_theme_mod('comic_book_store_card_title' . ($comic_book_store_i + 1), $comic_book_store_card_titles[$comic_book_store_i]);
            
            // Course Name Setting 
            set_theme_mod('comic_book_store_card_text' . ($comic_book_store_i + 1), $comic_book_store_card_texts[$comic_book_store_i]);
            
            // Icon Setting
            set_theme_mod('comic_book_store_card_icon' . ($comic_book_store_i + 1), $comic_book_store_card_icons[$comic_book_store_i]);
        }

        // Featured Books Section with Ratings
        set_theme_mod('comic_book_store_book_section', 'true');
        set_theme_mod('comic_book_store_book_text', 'Comic');
        set_theme_mod('comic_book_store_book_title', 'Featured Books');

        $comic_book_store_featured_category_id = wp_create_category('Featured');
        set_theme_mod('comic_book_store_posts', 'Featured');

        $comic_book_store_titles = array('SUPER KNIGHT', 'RED SQUAD IV', 'NOVA NEXUS', 'NOVA NEXUS');

        for ($comic_book_store_i = 0; $comic_book_store_i < 4; $comic_book_store_i++) {
            set_theme_mod('comic_book_store_title' . ($comic_book_store_i + 1), $comic_book_store_titles[$comic_book_store_i]);

            $comic_book_store_my_post = array(
                'post_title'    => wp_strip_all_tags($comic_book_store_titles[$comic_book_store_i]),
                'post_content'  => '',
                'post_status'   => 'publish',
                'post_type'     => 'post',
                'post_category' => array($comic_book_store_featured_category_id),
            );

            $comic_book_store_post_id = wp_insert_post($comic_book_store_my_post);

            if (!is_wp_error($comic_book_store_post_id)) {
                $comic_book_store_image_url = get_template_directory_uri() . '/images/comic-features/comic-feature' . ($comic_book_store_i + 1) . '.png';
                $comic_book_store_image_id = media_sideload_image($comic_book_store_image_url, $comic_book_store_post_id, null, 'id');
                if (!is_wp_error($comic_book_store_image_id)) {
                    set_post_thumbnail($comic_book_store_post_id, $comic_book_store_image_id);
                } else {
                    error_log('Failed to set post thumbnail for post ID: ' . $comic_book_store_post_id);
                }

                // Set rating for each post (if applicable, adjust the meta key and value as needed)
                $comic_book_store_rating = 5; // Example rating value
                update_post_meta($comic_book_store_post_id, 'kk_star_ratings', $comic_book_store_rating);
            } else {
                error_log('Failed to create post: ' . print_r($comic_book_store_post_id, true));
            }
        }

        // Show success message and the "View Site" button
        update_option('comic_book_store_demo_import_completed', true);
        echo '<br>';
        echo '<div class="success">Demo Import Successful</div>';
        echo '<br>';
        echo '<hr>';
        echo '<br>';
        echo '<span>' . esc_html__( 'You can now visit your site or customize it further.', 'comic-book-store' ) . '</span>';
        echo '<br>';
    }
     ?>
    <ul>
        <li>
        <?php 
        // Check if the form is submitted
        if ( !isset( $_POST['submit'] ) ) : ?>
            <!-- Show demo importer form only if it's not submitted -->
            <?php if (!get_option('comic_book_store_demo_import_completed')) : ?>
                <span><?php echo esc_html( 'Click on the below content to get demo content installed.', 'comic-book-store' ); ?></span>
                <br><br>
                <hr><br>
                <b class="note"><?php echo esc_html('Note :', 'comic-book-store' ); ?></b><br><br>
                <small><b><?php echo esc_html('Please take a backup if your website is already live with data. This importer will overwrite existing data.', 'comic-book-store' ); ?></b></small><br><br>
                <form id="demo-importer-form" action="" method="POST" onsubmit="return runDemoImport();">
                    <input type="submit" name="submit" value="<?php echo esc_attr('Run Importer','comic-book-store'); ?>" class="button button-primary button-large">
                </form>
                <script type="text/javascript">
                    function runDemoImport() {
                        if (confirm('Do you really want to do this?')) {
                            document.getElementById('demo-import-loader').style.display = 'block';
                            return true;
                        }
                        return false;
                    }
                </script>
             <?php endif; ?>
         <?php 
        endif; 

        // Show "View Site" button after form submission
        if ( isset( $_POST['submit'] ) ) {
        echo '<div class="view-site-btn">';
        echo '<a href="' . esc_url(home_url()) . '" class="button button-primary button-large" style="margin-top: 10px;" target="_blank">View Site</a>';
        echo '<a href="' . esc_url( admin_url('customize.php') ) . '" class="button button-primary button-large" style="margin-top: 10px;" target="_blank">Customize Demo Content</a>';
        echo '</div>';
        }
        ?>
        </li>
    </ul>
</div>
