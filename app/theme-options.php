<?php

/**
 * Native WordPress Theme Options Page + Coming Soon Mode
 *
 * Global settings (social, header, footer) using WordPress Options API.
 * No plugin dependency.
 */

namespace App;

// =========================================================================
// Theme Options Page
// =========================================================================
add_action('admin_menu', function () {
    add_menu_page(
        'Theme Settings',
        'Theme Settings',
        'manage_options',
        'theme-settings',
        __NAMESPACE__ . '\\render_theme_settings_page',
        'dashicons-admin-customizer',
        2
    );
});

add_action('admin_init', function () {
    // Coming Soon Mode
    register_setting('theme_settings', 'ub_coming_soon_enabled');
    register_setting('theme_settings', 'ub_coming_soon_launch_date');

    // Social Links
    register_setting('theme_settings', 'ub_twitter_url');
    register_setting('theme_settings', 'ub_instagram_url');
    register_setting('theme_settings', 'ub_discord_url');
    register_setting('theme_settings', 'ub_tiktok_url');
    register_setting('theme_settings', 'ub_youtube_url');

    // Header
    register_setting('theme_settings', 'ub_header_cta_text');
    register_setting('theme_settings', 'ub_header_cta_url');

    // Footer
    register_setting('theme_settings', 'ub_footer_tagline_left');
    register_setting('theme_settings', 'ub_footer_brand');
    register_setting('theme_settings', 'ub_footer_tagline_right');
    register_setting('theme_settings', 'ub_footer_cta_label');
    register_setting('theme_settings', 'ub_footer_cta_heading');
    register_setting('theme_settings', 'ub_footer_cta_button_text');
    register_setting('theme_settings', 'ub_footer_cta_button_url');
    register_setting('theme_settings', 'ub_footer_copyright');
});

function render_theme_settings_page() {
    ?>
    <div class="wrap">
        <h1>Theme Settings</h1>
        <form method="post" action="options.php">
            <?php settings_fields('theme_settings'); ?>

            <h2>Coming Soon Mode</h2>
            <table class="form-table">
                <tr>
                    <th>Enable Coming Soon</th>
                    <td>
                        <label>
                            <input type="checkbox" name="ub_coming_soon_enabled" value="1" <?php checked(get_option('ub_coming_soon_enabled'), '1'); ?> />
                            Show coming soon page to visitors (logged-in admins can still see the site)
                        </label>
                    </td>
                </tr>
                <tr>
                    <th>Launch Date</th>
                    <td>
                        <input type="datetime-local" name="ub_coming_soon_launch_date" value="<?php echo esc_attr(get_option('ub_coming_soon_launch_date', '2026-04-01T00:00')); ?>" />
                        <p class="description">Countdown timer target date</p>
                    </td>
                </tr>
            </table>

            <h2>Social Media Links</h2>
            <table class="form-table">
                <tr><th>Twitter/X URL</th><td><input type="url" name="ub_twitter_url" value="<?php echo esc_attr(get_option('ub_twitter_url')); ?>" class="regular-text" /></td></tr>
                <tr><th>Instagram URL</th><td><input type="url" name="ub_instagram_url" value="<?php echo esc_attr(get_option('ub_instagram_url')); ?>" class="regular-text" /></td></tr>
                <tr><th>Discord URL</th><td><input type="url" name="ub_discord_url" value="<?php echo esc_attr(get_option('ub_discord_url')); ?>" class="regular-text" /></td></tr>
                <tr><th>TikTok URL</th><td><input type="url" name="ub_tiktok_url" value="<?php echo esc_attr(get_option('ub_tiktok_url')); ?>" class="regular-text" /></td></tr>
                <tr><th>YouTube URL</th><td><input type="url" name="ub_youtube_url" value="<?php echo esc_attr(get_option('ub_youtube_url')); ?>" class="regular-text" /></td></tr>
            </table>

            <h2>Header</h2>
            <table class="form-table">
                <tr><th>CTA Button Text</th><td><input type="text" name="ub_header_cta_text" value="<?php echo esc_attr(get_option('ub_header_cta_text', 'Get Started')); ?>" class="regular-text" /></td></tr>
                <tr><th>CTA Button URL</th><td><input type="url" name="ub_header_cta_url" value="<?php echo esc_attr(get_option('ub_header_cta_url')); ?>" class="regular-text" /></td></tr>
            </table>

            <h2>Footer</h2>
            <table class="form-table">
                <tr><th>Tagline Left</th><td><input type="text" name="ub_footer_tagline_left" value="<?php echo esc_attr(get_option('ub_footer_tagline_left', 'Esports Tournament Platform')); ?>" class="regular-text" /></td></tr>
                <tr><th>Brand Name</th><td><input type="text" name="ub_footer_brand" value="<?php echo esc_attr(get_option('ub_footer_brand', 'Ultimate Battle')); ?>" class="regular-text" /></td></tr>
                <tr><th>Tagline Right</th><td><input type="text" name="ub_footer_tagline_right" value="<?php echo esc_attr(get_option('ub_footer_tagline_right', 'PlayProvince Esports')); ?>" class="regular-text" /></td></tr>
                <tr><th>CTA Label</th><td><input type="text" name="ub_footer_cta_label" value="<?php echo esc_attr(get_option('ub_footer_cta_label', 'READY TO LEVEL UP?')); ?>" class="regular-text" /></td></tr>
                <tr><th>CTA Heading</th><td><input type="text" name="ub_footer_cta_heading" value="<?php echo esc_attr(get_option('ub_footer_cta_heading', 'GET STARTED')); ?>" class="regular-text" /></td></tr>
                <tr><th>CTA Button Text</th><td><input type="text" name="ub_footer_cta_button_text" value="<?php echo esc_attr(get_option('ub_footer_cta_button_text', 'PARTNER WITH US')); ?>" class="regular-text" /></td></tr>
                <tr><th>CTA Button URL</th><td><input type="url" name="ub_footer_cta_button_url" value="<?php echo esc_attr(get_option('ub_footer_cta_button_url')); ?>" class="regular-text" /></td></tr>
                <tr><th>Copyright Text</th><td><input type="text" name="ub_footer_copyright" value="<?php echo esc_attr(get_option('ub_footer_copyright', 'PlayProvince Esports')); ?>" class="regular-text" /></td></tr>
            </table>

            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

// =========================================================================
// Coming Soon Mode — intercept all frontend requests for non-admins
// =========================================================================
add_action('template_redirect', function () {
    if (get_option('ub_coming_soon_enabled') !== '1') {
        return;
    }

    // Let logged-in admins/editors through
    if (is_user_logged_in() && current_user_can('edit_posts')) {
        return;
    }

    // Allow wp-login, wp-admin, and admin-ajax requests
    if (is_admin() || $GLOBALS['pagenow'] === 'wp-login.php') {
        return;
    }

    $template_path = get_template_directory() . '/coming-soon.html';
    if (!file_exists($template_path)) {
        return;
    }

    $html = file_get_contents($template_path);

    // Inject the logo URL
    $logo_url = get_template_directory_uri() . '/public/images/logo.png';
    $html = str_replace('{{LOGO_URL}}', esc_url($logo_url), $html);

    // Inject the launch date
    $launch_date = get_option('ub_coming_soon_launch_date', '2026-04-01T00:00');
    $html = str_replace('{{LAUNCH_DATE}}', esc_attr($launch_date), $html);

    status_header(503);
    header('Retry-After: 86400');
    echo $html;
    exit;
});
