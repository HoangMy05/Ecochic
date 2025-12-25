<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if( !class_exists( 'phone_accessories_store_Welcome' ) ) {

	class phone_accessories_store_Welcome {
		public $theme_fields;

		public function __construct( $fields = array() ) {
			$this->theme_fields = $fields;
			add_action ('admin_init' , array( $this, 'admin_scripts' ) );
			add_action('admin_menu', array( $this, 'phone_accessories_store_getstart_page_menu' ));
		}

		public function admin_scripts() {
			global $pagenow;
			$file_dir = get_template_directory_uri() . '/getstarted/assets/';

			if ( $pagenow === 'themes.php' && isset($_GET['page']) && $_GET['page'] === 'phone-accessories-store-getstart-page' ) {

				wp_enqueue_style (
					'phone-accessories-store-getstart-page-style',
					$file_dir . 'css/getstart-page.css',
					array(), '1.0.0'
				);

				wp_enqueue_script (
					'phone-accessories-store-getstart-page-functions',
					$file_dir . 'js/getstart-page.js',
					array('jquery'),
					'1.0.0',
					true
				);
			}
		}

        public function theme_info($id, $screenshot = false) {
            $themedata = wp_get_theme();
            return ($screenshot === true) ? esc_url($themedata->get_screenshot()) : esc_html($themedata->get($id));
        }

        public function phone_accessories_store_getstart_page_menu() {
            add_theme_page(
                /* translators: 1: Theme Name. */
                sprintf(esc_html__('About %1$s', 'phone-accessories-store'), $this->theme_info('Name')),
                sprintf(esc_html__('About %1$s', 'phone-accessories-store'), $this->theme_info('Name')),
                'edit_theme_options',
                'phone-accessories-store-getstart-page',
                array( $this, 'phone_accessories_store_getstart_page' )
            );
		}

        public function phone_accessories_store_getstart_page() {
            $tabs = array(
                'phone_accessories_store_getting_started' => esc_html__('Getting Started', 'phone-accessories-store'),
                'phone_accessories_store_free_pro' => esc_html__('Free VS Pro', 'phone-accessories-store'),
                'changelog' => esc_html__('Changelog', 'phone-accessories-store'),
                'support' => esc_html__('Support', 'phone-accessories-store'),
                'review' => esc_html__('Rate & Review', 'phone-accessories-store'),
            );
            ?>
                <div class="wrap about-wrap access-wrap">

                    <div class="abt-promo-wrap clearfix">
                        <div class="abt-theme-wrap">
                            <h1>
                                <?php
                                printf(
                                    /* translators: 1: Theme Name. */
                                    esc_html__('Welcome to %1$s - Version %2$s', 'phone-accessories-store'),
                                    esc_html($this->theme_info('Name')),
                                    esc_html($this->theme_info('Version'))
                                );
                                ?>
                            </h1>
                            <div class="buttons">
                                <a target="_blank" href="<?php echo esc_url('https://www.revolutionwp.com/products/mobile-accessories-wordpress-theme'); ?>"><?php echo esc_html__('Buy Pro Theme', 'phone-accessories-store'); ?></a>
                                <a target="_blank" href="<?php echo esc_url('https://demo.revolutionwp.com/phone-accessories-store-pro/'); ?>"><?php echo esc_html__('Preview Pro Version', 'phone-accessories-store'); ?></a>
                            </div>
                        </div>
                    </div>

                    <div class="nav-tab-wrapper clearfix">
                        <?php
                            $tabHTML = '';

                            foreach ($tabs as $id => $label) :

                                $target = '';
                                $nav_class = 'nav-tab';
                                $section = isset($_GET['section']) ? sanitize_text_field($_GET['section']) : 'phone_accessories_store_getting_started';

                                if ($id === $section) {
                                    $nav_class .= ' nav-tab-active';
                                }

                                if ($id === 'phone_accessories_store_free_pro') {
                                    $nav_class .= ' upgrade-button';
                                }

                                switch ($id) {

                                    case 'support':
                                        $target = 'target="_blank"';
                                        $url = esc_url('https://wordpress.org/support/theme/' . esc_html($this->theme_info('TextDomain')));
                                    break;

                                    case 'review':
                                        $target = 'target="_blank"';
                                        $url = esc_url('https://wordpress.org/support/theme/' . esc_html($this->theme_info('TextDomain')) . '/reviews/#new-post');
                                    break;
                                    
                                    case 'phone_accessories_store_getting_started':
                                        $url = esc_url(admin_url('themes.php?page=phone-accessories-store-getstart-page'));
                                    break;

                                    default:
                                        $url = esc_url(admin_url('themes.php?page=phone-accessories-store-getstart-page&section=' . esc_attr($id)));
                                    break;

                                }

                                $tabHTML .= '<a ';
                                $tabHTML .= $target;
                                $tabHTML .= ' href="' . $url . '"';
                                $tabHTML .= ' class="' . esc_attr($nav_class) . '"';
                                $tabHTML .= '>';
                                $tabHTML .= esc_html($label);
                                $tabHTML .= '</a>';

                            endforeach;

                            echo $tabHTML;
                        ?>
                    </div>

                    <div class="getstart-section-wrapper">
                        <div class="getstart-section phone_accessories_store_getting_started clearfix">
                            <?php
                                $section = isset($_GET['section']) ? sanitize_text_field($_GET['section']) : 'phone_accessories_store_getting_started';
                                switch ($section) {

                                    case 'phone_accessories_store_free_pro':
                                        $this->phone_accessories_store_free_pro();
                                    break;

                                    case 'changelog':
                                        $this->changelog();
                                    break;

                                    case 'phone_accessories_store_getting_started':
                                    default:
                                        $this->phone_accessories_store_getting_started();
                                    break;

                                }
                            ?>
                        </div>
                    </div>

                </div>
            <?php
		}

        public function phone_accessories_store_getting_started() {
            ?>
            <div class="getting-started-top-wrap clearfix">
                <div class="theme-details">
                    <div class="theme-screenshot">
                        <img src="<?php echo esc_url( $this->theme_info( 'Screenshot', true ) ); ?>" alt="<?php esc_attr_e( 'Theme screenshot', 'phone-accessories-store' ); ?>"/>
                    </div>
                    <div class="about-text"><?php echo esc_html( $this->theme_info( 'Description' ) ); ?></div>
                    <div class="clearfix"></div>
                </div>
                <div class="theme-steps-list">
                    <div class="getstart">
                        <div class="theme-steps">
                            <h3><?php echo esc_html__( 'Documentation', 'phone-accessories-store' ); ?></h3>
                            <p><?php echo esc_html__( 'Need more details? Check our comprehensive documentation for step-by-step guidance on using the Phone Accessories Store Theme.', 'phone-accessories-store' ); ?></p>
                            <a target="_blank" class="button button-primary" href="<?php echo esc_url( 'https://demo.revolutionwp.com/wpdocs/phone-accessories-store-free/' ); ?>"><?php echo esc_html__( 'Go to Free Docs', 'phone-accessories-store' ); ?></a>
                        </div>

                        <div class="theme-steps">
                            <h3><?php echo esc_html__( 'Preview Pro Theme', 'phone-accessories-store' ); ?></h3>
                            <p><?php echo esc_html__( 'Discover the full potential of our Pro Theme! Click the Live Demo button to experience premium features and beautiful designs.', 'phone-accessories-store' ); ?></p>
                            <a target="_blank" class="button button-primary" href="<?php echo esc_url( 'https://demo.revolutionwp.com/phone-accessories-store-pro/' ); ?>"><?php echo esc_html__( 'Live Demo', 'phone-accessories-store' ); ?></a>
                        </div>

                        <div class="theme-steps highlight">
                            <h3><?php echo esc_html__( 'Buy Phone Accessories Store Pro', 'phone-accessories-store' ); ?></h3>
                            <p><?php echo esc_html__( 'Unlock unlimited features and enhancements by purchasing the Pro version of Phone Accessories Store Theme.', 'phone-accessories-store' ); ?></p>
                            <a target="_blank" class="button button-primary" href="<?php echo esc_url( 'https://www.revolutionwp.com/products/mobile-accessories-wordpress-theme' ); ?>"><?php echo esc_html__( 'Buy Pro Version @$39', 'phone-accessories-store' ); ?></a>
                        </div>

                        <div class="theme-steps highlight">
                            <h3><?php echo esc_html__( 'Get the Bundle', 'phone-accessories-store' ); ?></h3>
                            <p><?php echo esc_html__( 'The WordPress Theme Bundle is a comprehensive collection of 50+ premium themes, offering everything you need to create stunning, professional websites with ease.', 'phone-accessories-store' ); ?></p>
                            <a target="_blank" class="button button-primary" href="<?php echo esc_url( 'https://www.revolutionwp.com/products/wordpress-theme-bundle' ); ?>"><?php echo esc_html__( 'Get Bundle', 'phone-accessories-store' ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }

		public function phone_accessories_store_free_pro() {
            ?>
            <table class="card table free-pro" cellspacing="0" cellpadding="0">
                <tbody class="table-body">
                    <tr class="table-head">
                        <th class="large"><?php echo esc_html__( 'Features', 'phone-accessories-store' ); ?></th>
                        <th class="indicator"><?php echo esc_html__( 'Free theme', 'phone-accessories-store' ); ?></th>
                        <th class="indicator"><?php echo esc_html__( 'Pro Theme', 'phone-accessories-store' ); ?></th>
                    </tr>

                    <tr class="feature-row">
                        <td class="large">
                            <div class="feature-wrap">
                                <h4><?php echo esc_html__( 'Responsive Design', 'phone-accessories-store' ); ?></h4>
                            </div>
                        </td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                    </tr>

                    <tr class="feature-row">
                        <td class="large">
                            <div class="feature-wrap">
                                <h4><?php echo esc_html__( 'Site Logo upload', 'phone-accessories-store' ); ?></h4>
                            </div>
                        </td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                    </tr>

                    <tr class="feature-row">
                        <td class="large">
                            <div class="feature-wrap">
                                <h4><?php echo esc_html__( 'Footer Copyright text', 'phone-accessories-store' ); ?></h4>
                                <div class="feature-inline-row">
                                    <span class="info-icon dashicon dashicons dashicons-info"></span>
                                    <span class="feature-description">
                                        <?php echo esc_html__( 'Remove the copyright text from the Footer.', 'phone-accessories-store' ); ?>
                                    </span>
                                </div>
                            </div>
                        </td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                    </tr>

                    <tr class="feature-row">
                        <td class="large">
                            <div class="feature-wrap">
                                <h4><?php echo esc_html__( 'Global Color', 'phone-accessories-store' ); ?></h4>
                            </div>
                        </td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                    </tr>

                    <tr class="feature-row">
                        <td class="large">
                            <div class="feature-wrap">
                                <h4><?php echo esc_html__( 'Regular Bug Fixes', 'phone-accessories-store' ); ?></h4>
                            </div>
                        </td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                    </tr>

                    <tr class="feature-row">
                        <td class="large">
                            <div class="feature-wrap">
                                <h4><?php echo esc_html__( 'Theme Sections', 'phone-accessories-store' ); ?></h4>
                            </div>
                        </td>
                        <td class="indicator"><span class="abc"><?php echo esc_html__( '2 Sections', 'phone-accessories-store' ); ?></span></td>
                        <td class="indicator"><span class="abc"><?php echo esc_html__( '15+ Sections', 'phone-accessories-store' ); ?></span></td>
                    </tr>

                    <tr class="feature-row">
                        <td class="large">
                            <div class="feature-wrap">
                                <h4><?php echo esc_html__( 'Custom colors', 'phone-accessories-store' ); ?></h4>
                                <div class="feature-inline-row">
                                    <span class="info-icon dashicon dashicons dashicons-info"></span>
                                    <span class="feature-description">
                                        <?php echo esc_html__( 'Choose a color for links, buttons, icons and so on.', 'phone-accessories-store' ); ?>
                                    </span>
                                </div>
                            </div>
                        </td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-no-alt" size="30"></span></td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                    </tr>

                    <tr class="feature-row">
                        <td class="large">
                            <div class="feature-wrap">
                                <h4><?php echo esc_html__( 'Google fonts', 'phone-accessories-store' ); ?></h4>
                                <div class="feature-inline-row">
                                    <span class="info-icon dashicon dashicons dashicons-info"></span>
                                    <span class="feature-description">
                                        <?php echo esc_html__( 'You can choose and use over 600 different fonts, for the logo, the menu and the titles.', 'phone-accessories-store' ); ?>
                                    </span>
                                </div>
                            </div>
                        </td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-no-alt" size="30"></span></td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                    </tr>

                    <tr class="feature-row">
                        <td class="large">
                            <div class="feature-wrap">
                                <h4><?php echo esc_html__( 'Enhanced Plugin Integration', 'phone-accessories-store' ); ?></h4>
                            </div>
                        </td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-no-alt" size="30"></span></td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                    </tr>

                    <tr class="feature-row">
                        <td class="large">
                            <div class="feature-wrap">
                                <h4><?php echo esc_html__( 'Fully SEO Optimized', 'phone-accessories-store' ); ?></h4>
                            </div>
                        </td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-no-alt" size="30"></span></td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                    </tr>

                    <tr class="feature-row">
                        <td class="large">
                            <div class="feature-wrap">
                                <h4><?php echo esc_html__( 'Premium Support', 'phone-accessories-store' ); ?></h4>
                            </div>
                        </td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-no-alt" size="30"></span></td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                    </tr>

                    <tr class="feature-row">
                        <td class="large">
                            <div class="feature-wrap">
                                <h4><?php echo esc_html__( 'Extensive Customization', 'phone-accessories-store' ); ?></h4>
                            </div>
                        </td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-no-alt" size="30"></span></td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                    </tr>

                    <tr class="feature-row">
                        <td class="large">
                            <div class="feature-wrap">
                                <h4><?php echo esc_html__( 'Custom Post Types', 'phone-accessories-store' ); ?></h4>
                            </div>
                        </td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-no-alt" size="30"></span></td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                    </tr>

                    <tr class="feature-row">
                        <td class="large">
                            <div class="feature-wrap">
                                <h4><?php echo esc_html__( 'High-Level Compatibility with Modern Browsers', 'phone-accessories-store' ); ?></h4>
                            </div>
                        </td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-no-alt" size="30"></span></td>
                        <td class="indicator"><span class="dashicon dashicons dashicons-yes" size="30"></span></td>
                    </tr>

                    <tr class="upsell-row">
                        <td></td>
                        <td><span class="abc"><?php echo esc_html__( 'Try Out Our Premium Version', 'phone-accessories-store' ); ?></span></td>
                        <td>
                            <a target="_blank" href="<?php echo esc_url( 'https://www.revolutionwp.com/products/mobile-accessories-wordpress-theme' ); ?>" class="button button-primary"><?php echo esc_html__( 'Buy Pro Theme', 'phone-accessories-store' ); ?></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php
        }

		public function changelog() {
            if ( is_file( trailingslashit( get_stylesheet_directory() ) . '/getstarted/phone_accessories_store_changelog.php' ) ) {
                require_once( trailingslashit( get_stylesheet_directory() ) . '/getstarted/phone_accessories_store_changelog.php' );
            } else {
                require_once( trailingslashit( get_template_directory() ) . '/getstarted/phone_accessories_store_changelog.php' );
            }
        }
	}

}
new phone_accessories_store_Welcome();
?>