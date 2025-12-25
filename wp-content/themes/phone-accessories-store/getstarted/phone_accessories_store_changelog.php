<div class="changelog_container">
    <?php
    $phone_accessories_store_changelog_entries = phone_accessories_store_get_changelog_from_readme();
    if (!empty($phone_accessories_store_changelog_entries)) :
        foreach ($phone_accessories_store_changelog_entries as $phone_accessories_store_entry) :
            $phone_accessories_store_version = esc_html($phone_accessories_store_entry[1]);
            $phone_accessories_store_date = esc_html($phone_accessories_store_entry[2]);
            $phone_accessories_store_details = explode("\n", trim($phone_accessories_store_entry[3]));
            ?>
            <div class="changelog_element">
                <span class="theme_version">
                    <strong><?php echo 'v' . $phone_accessories_store_version; ?></strong>
                    <?php echo 'Release date: ' . $phone_accessories_store_date; ?>
                    <span class="dashicons dashicons-arrow-down-alt2"></span>
                </span>

                <div class="changelog_details" style="display: none;">
                    <ul>
                        <?php foreach ($phone_accessories_store_details as $phone_accessories_store_detail) : ?>
                            <li><?php echo esc_html(trim($phone_accessories_store_detail, "- \t")); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php
        endforeach;
    else :
        ?>
        <p><?php esc_html_e('No changelog available.', 'phone-accessories-store'); ?></p>
    <?php endif; ?>
</div>