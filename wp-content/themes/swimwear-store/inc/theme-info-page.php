<?php
// Show admin notice after theme activation
add_action('admin_notices', 'swimwear_store_theme_activation_notice');
function swimwear_store_theme_activation_notice() {
    if (!get_transient('swimwear_store_theme_activated')) {
        set_transient('swimwear_store_theme_activated', true, 30);

        $theme = wp_get_theme();
        $screenshot = get_template_directory_uri() . '/screenshot.png';
        $theme_info_url = admin_url('themes.php?page=swimwear-store-theme-info#setup');
 
        // ✅ Get last updated date from style.css
        $theme_file = get_template_directory() . '/style.css';
        $last_updated = date_i18n( get_option('date_format'), filemtime($theme_file) );

        echo '<div class="notice notice-success is-dismissible" style="display:flex;align-items:center;gap:20px;padding: 20px;">';
        echo '<img src="' . esc_url($screenshot) . '" style="width:300px;height:auto;border:1px solid #ccc;">';
        echo '<div>';
        echo '<h2>🎉 Thank you for activating <strong>' . esc_html($theme->get('Name')) . '</strong>!</h2>';
        echo '<p>Version: ' . esc_html($theme->get('Version')) . ' | Last updated: ' . esc_html($last_updated) . '</p>';
        
        // 🔥 Offer Text with Flash Effect
        echo '<h3 class="flash-text">🎁 Limited Time Offer: Use Coupon <strong>WPTHEMES</strong> to get <span style="color:#ff0000;">15% OFF</span> on Premium!</h3>';

        echo '<p><a href="' . esc_url($theme_info_url) . '" class="button button-primary" style="font-weight: 700;font-size: 16px; padding: 0px 20px;color: #fff;background-color: #000;border-color: #ff0000ff;">View Setup Guide</a>
                <a href="https://www.buywpthemes.net/products/swimwear-wordpress-template" class="button button-secondary" target="_blank" style="margin-left: 10px;color: #fff;background-color: #0089ff;border-color: #ff0000ff; font-weight: 700;font-size: 16px; padding: 0px 20px;">Get Premium</a></p>';
        echo '</div>';
        echo '</div>';

        // Inline CSS for Flash Effect
        echo '<style>
            .flash-text {
                font-size: 18px;
                margin: 20px 0;
                color: #d10000;
                animation: flash 1.5s infinite;
            }
            @keyframes flash {
                0%{opacity: .5;}
                50%{opacity: .8;}
                100%{opacity: 1;}
            }
        </style>';
    } 
}



// Hide other admin notices on Theme Info page
add_action('admin_head', 'swimwear_store_hide_admin_notices');
function swimwear_store_hide_admin_notices() {
    $screen = get_current_screen();
    if ($screen && $screen->id === 'appearance_page_swimwear-store-theme-info') {
        remove_all_actions('admin_notices');
        remove_all_actions('all_admin_notices');
    }
}

// Add admin menu under Appearance
add_action('admin_menu', 'swimwear_store_theme_info_page');
function swimwear_store_theme_info_page() {
    add_theme_page(
        __('Theme Info', 'swimwear-store'),
        __('Theme Info', 'swimwear-store'),
        'edit_theme_options',
        'swimwear-store-theme-info',
        'swimwear_store_render_theme_info_page'
    );
}

// Render the admin page (NO TABS — single page with left content & right sticky boxes)
function swimwear_store_render_theme_info_page() {
    $theme = wp_get_theme();
    ?>
    <div class="wrap" style="font-family: Arial, sans-serif;">
        <h1 style="margin-bottom: 20px;"><?php echo esc_html($theme->get('Name')); ?> - Theme Info</h1>

        <style>
            .mrc-grid {
                display: grid;
                grid-template-columns: 2fr 1fr;
                gap: 24px;
                align-items: start;
            }
            @media (max-width: 1024px) {
                .mrc-grid {
                    grid-template-columns: 1fr;
                }
                .mrc-sticky {
                    position: static !important;
                }
            }
            .mrc-left .mrc-card,
            .mrc-right .mrc-card {
                background: #fff;
                padding: 24px;
                border-radius: 16px;
                box-shadow: 0 6px 20px rgba(0,0,0,0.08);
            }
            .mrc-section {
                background: #eef4fa;
                padding: 20px;
                border-radius: 16px;
                box-shadow: 0 8px 16px rgba(0,0,0,0.05);
                margin-bottom: 24px;
            }
            .mrc-h2 {
                font-size: 28px;
                margin: 0 0 12px;
            }
            .mrc-sticky {
                position: sticky;
                top: 32px; /* Admin bar safe */
                display: flex;
                flex-direction: column;
                gap: 20px;
            }
            .mrc-table {
                border-collapse: collapse;
                width: 100%;
                background: #fff;
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            }
            .mrc-table thead {
                background: #2a4365;
                color: #fff;
            }
            .mrc-table th, .mrc-table td {
                padding: 12px 16px;
                border-top: 1px solid #eee;
                text-align: left;
            }
            .mrc-actions a.button { margin-right: 8px; }
           
            @keyframes flash {
                0%{opacity: 0;}
                50%{opacity: .5;}
                100%{opacity: 1;}
            }
        </style>

        <div class="mrc-grid">
            <!-- LEFT: Sequential content -->
            <div class="mrc-left">

                <!-- ABOUT THEME -->
                <div class="mrc-section">
                    <div class="mrc-card" style="transition: all .3s;">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png"
                            alt="Theme Screenshot"
                            style="max-width: 100%; border-radius: 12px; box-shadow: 0 4px 14px rgba(0,0,0,0.1); margin-bottom: 20px;">
                        
                        <h3 style="font-size:22px;margin:0 0 8px;"><?php echo esc_html($theme->get('Name')); ?></h3>
                        <p><strong>Version:</strong> <?php echo esc_html($theme->get('Version')); ?></p>
                        
                        <?php 
                        $theme_file = get_template_directory() . '/style.css';
                        $last_updated = date_i18n( get_option('date_format'), filemtime($theme_file) );
                        ?>
                        <p><strong>Last updated:</strong> <?php echo esc_html($last_updated); ?></p>
                        
                        <p style="margin-top:10px;"><?php echo esc_html($theme->get('Description')); ?></p>
                    </div>
                </div>

                <!-- SETUP GUIDE -->
                <div id="setup" class="mrc-section">
                    <h2 class="mrc-h2">🚀 Theme Setup Guide</h2>

                    <!-- Top checklist instructions -->
                    <div class="mrc-card" style="background:#fff3cd;border-left:5px solid #ffcc00;">
                        <h3 style="margin-top:0;">🔧 First Time Setup Steps</h3>
                        <ol style="padding-left:20px;margin:0;">
                            <li>Create a page named <strong>Home</strong> and select template <strong>Front Page</strong>.</li>
                            <li>Go to <strong>Settings > Reading</strong> and set your Home page as static front page.</li>
                            <li>Now go to <strong>Appearance > Customize</strong> and start editing your homepage.</li>
                        </ol>
                    </div>

                    <!-- Grid based functional steps -->
                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:20px;">
                        <div class="mrc-card" style="border-left:5px solid #2271b1;">
                            <h3>🎨 Customize Your Theme</h3>
                            <p>Go to <strong>Appearance > Customize</strong> to change homepage layout, colors, and text.</p>
                            <a href="<?php echo esc_url(admin_url('customize.php')); ?>" class="button button-primary">Open Customizer</a>
                        </div>
                        <div class="mrc-card" style="border-left:5px solid #00a32a;">
                            <h3>🧩 Install Required Plugins</h3>
                            <p>Install and activate plugins like <strong>WooCommerce</strong> for shop, <strong>Contact Form 7</strong> for forms.</p>
                            <a href="<?php echo esc_url(admin_url('plugins.php')); ?>" class="button">Manage Plugins</a>
                        </div>
                        <div class="mrc-card" style="border-left:5px solid #dba617;">
                            <h3>📂 Setup Menus</h3>
                            <p>Create and assign menus from <strong>Appearance > Menus</strong> for header and footer navigation.</p>
                            <a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>" class="button">Go to Menus</a>
                        </div>
                        <div class="mrc-card" style="border-left:5px solid #b32d2e;">
                            <h3>🧱 Use Widgets</h3>
                            <p>Place widgets in sidebar/footer areas from <strong>Appearance > Widgets</strong>.</p>
                            <a href="<?php echo esc_url(admin_url('widgets.php')); ?>" class="button">Open Widgets</a>
                        </div>
                    </div>
                </div>

                <!-- FREE VS PRO -->
                <div class="mrc-section">
                    <h2 class="mrc-h2">🚀 Free vs. Pro Comparison</h2>

                    <div style="overflow-x:auto;">
                        <table class="mrc-table">
                            <thead>
                                <tr>
                                    <th>Feature</th>
                                    <th style="text-align:center;">Free</th>
                                    <th style="text-align:center;">Pro</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $features = [
                                    ["Homepage Sections", "2-3", "10+"],
                                    ["WooCommerce Support", "Basic", "Advanced"],
                                    ["Color Customization", "Fixed", "Full Control"],
                                    ["Priority Support", "No", "Yes"],
                                    ["Footer Widgets", "No", "Yes"],
                                    ["Blog Layouts", "1", "3+"],
                                    ["Typography Options", "No", "Yes"],
                                    ["Mobile Optimization", "Basic", "Fully Responsive"],
                                    ["Custom Widgets", "Few", "Many"],
                                    ["Custom CSS", "No", "Yes"],
                                    ["Slider Support", "Limited", "Multiple Sliders"],
                                    ["Page Templates", "Few", "Many"],
                                    ["Translation Ready", "No", "Yes"],
                                    ["Theme Options Panel", "Basic", "Advanced"],
                                    ["Sticky Header", "No", "Yes"],
                                    ["Custom Sidebars", "No", "Yes"],
                                    ["Animations", "No", "Yes"],
                                    ["Testimonial Section", "No", "Yes"],
                                    ["Team Section", "No", "Yes"],
                                    ["Portfolio Section", "No", "Yes"],
                                    ["Pricing Table", "No", "Yes"],
                                    ["Support", "No", "Yes"],
                                    ["Lifetime Access", "No", "Yes"],
                                    ["Unlimited Domains License", "Yes", "Yes"],
                                    ["Well Documented", "No", "Yes"],
                                    ["Quick Installation", "Yes", "Yes"],
                                    ["Secure Code", "Yes", "Yes"],
                                    ["Browser Compatibility", "Yes", "Yes"],
                                    ["Social Media Integration", "No", "Yes"],
                                    ["Customized Copyright Area", "No", "Yes"],
                                    ["Royalty-free Images & Icons", "Yes", "Yes"],
                                    ["More Options", "No", "Yes"],
                                ];
                                foreach ($features as $feature) {
                                    echo "<tr>
                                            <td>{$feature[0]}</td>
                                            <td style='text-align:center;color:#888;'>{$feature[1]}</td>
                                            <td style='text-align:center;font-weight:bold;color:#2a7ae4;'>{$feature[2]}</td>
                                          </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- RIGHT: Sticky boxes -->
            <aside class="mrc-right mrc-sticky">
                <!-- Coupon Box -->
                <div class="mrc-card" style="background:linear-gradient(145deg,#ffffff,#f2f2f2);">
                    <h3 style="font-size:22px;margin-bottom:10px;color: #ff0000;">🎁 <span class="flash-text" style="animation: flash 1s infinite;">Use coupon code to get 15% OFF</span></h3>
                    <p style="font-size:15px;margin-bottom:15px;">Unlock all premium features with Pro version. Use the coupon code below at checkout.</p>
                    <div style="display:flex;align-items:center;gap:10px;margin-bottom:20px;position:relative;">
                        <input type="text" id="couponCode" value="WPTHEMES" readonly
                               style="padding:10px 16px;border-radius:8px;border:1px solid #ccc;background:#f9f9f9;font-weight:bold;width:160px;">
                        <button onclick="copyCouponCode()" class="button" id="copyBtn" style="padding:10px 16px;">Copy Code</button>
                        <span id="copiedMsg" style="position:absolute;right:0;top:-25px;background:#4caf50;color:#fff;padding:4px 8px;border-radius:4px;font-size:12px;opacity:0;transition:opacity .3s;">Copied!</span>
                    </div>
                </div>

                <!-- Premium Box -->
                <div class="mrc-card" style="background:linear-gradient(145deg,#ffffff,#f2f2f2);">
                    <h3 style="margin-bottom:10px;">🚀 <?php echo esc_html($theme->get('Name')); ?> Theme Pro</h3>
                    <p style="margin-bottom:15px;">Get limitless features with the Pro edition of this theme.</p>
                    <a href="https://www.buywpthemes.net/products/swimwear-wordpress-template"
                       target="_blank" class="button button-primary" style="padding:5px 40px;font-size: 16px;font-weight: 700;border: 1px solid #ff0000;">Buy Premium</a>
                </div>

                <!-- Docs Box -->
                <div class="mrc-card" style="background:linear-gradient(145deg,#ffffff,#f2f2f2);">
                    <h3 style="margin-bottom:10px;">📚 Documentation</h3>
                    <p style="margin-bottom:15px;">Read our complete setup & customization guide.</p>
                    <a href="https://www.wpthemesdemo.com/docs/swimwear-store/"
                       target="_blank" class="button">View Docs</a>
                </div>

                <!-- Demo Box -->
                <div class="mrc-card" style="background:linear-gradient(145deg,#ffffff,#f2f2f2);">
                    <h3 style="margin-bottom:10px;">🔍 Preview Pro Theme</h3>
                    <p style="margin-bottom:15px;">See the Pro version live before you buy.</p>
                    <a href="https://www.wpthemesdemo.com/swimwear-store/"
                       target="_blank" class="button">View Demo</a>
                </div>
            </aside>
        </div>

        <script>
        function copyCouponCode() {
            const coupon = document.getElementById("couponCode");
            const copiedMsg = document.getElementById("copiedMsg");
            if (!navigator.clipboard) {
                // Fallback
                coupon.select();
                document.execCommand('copy');
                copiedMsg.style.opacity = 1;
                setTimeout(()=>copiedMsg.style.opacity=0, 1500);
                return;
            }
            navigator.clipboard.writeText(coupon.value).then(() => {
                copiedMsg.style.opacity = 1;
                setTimeout(() => { copiedMsg.style.opacity = 0; }, 1500);
            });
        }
        </script>
    </div>
    <?php
}
