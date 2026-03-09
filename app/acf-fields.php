<?php

/**
 * ACF Field Groups Registration + Custom Theme Options Page
 *
 * Registers ACF field groups for page-level fields.
 * Uses a native WordPress options page for global settings (social, header, footer).
 */

namespace App;

// =========================================================================
// Native WordPress Theme Options Page (for global settings)
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

/**
 * Helper to get theme option with fallback.
 */
function ub_option($key, $default = '') {
    $value = get_option('ub_' . $key);
    return $value ?: $default;
}

// =========================================================================
// ACF Page-Level Field Groups (only if ACF is active)
// =========================================================================
add_action('acf/init', function () {
    if (! function_exists('acf_add_local_field_group')) {
        return;
    }

    // Home Page Fields
    acf_add_local_field_group([
        'key'      => 'group_home_page',
        'title'    => 'Home Page Settings',
        'fields'   => [
            ['key' => 'field_home_topbar_tab', 'label' => 'Top Bar', 'type' => 'tab'],
            ['key' => 'field_home_topbar_text', 'label' => 'Top Bar Text', 'name' => 'home_topbar_text', 'type' => 'text', 'default_value' => 'COMPETITIVE ESPORTS TOURNAMENT & STREAMING PLATFORM'],
            ['key' => 'field_home_topbar_cta_text', 'label' => 'Top Bar CTA Text', 'name' => 'home_topbar_cta_text', 'type' => 'text', 'default_value' => 'Register for Tournaments'],
            ['key' => 'field_home_topbar_cta_url', 'label' => 'Top Bar CTA URL', 'name' => 'home_topbar_cta_url', 'type' => 'url'],

            ['key' => 'field_home_banner_tab', 'label' => 'Banner', 'type' => 'tab'],
            ['key' => 'field_home_banner_line1', 'label' => 'Banner Line 1', 'name' => 'home_banner_line1', 'type' => 'text', 'default_value' => 'where'],
            ['key' => 'field_home_banner_line2', 'label' => 'Banner Line 2', 'name' => 'home_banner_line2', 'type' => 'text', 'default_value' => 'competition'],
            ['key' => 'field_home_banner_line3', 'label' => 'Banner Line 3', 'name' => 'home_banner_line3', 'type' => 'text', 'default_value' => 'meets'],
            ['key' => 'field_home_banner_accent', 'label' => 'Banner Accent Word', 'name' => 'home_banner_accent', 'type' => 'text', 'default_value' => 'community'],
            [
                'key' => 'field_home_banner_categories', 'label' => 'Banner Categories', 'name' => 'home_banner_categories', 'type' => 'repeater',
                'sub_fields' => [
                    ['key' => 'field_home_banner_cat_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text'],
                ],
                'min' => 0, 'max' => 6,
            ],

            ['key' => 'field_home_about_tab', 'label' => 'About Section', 'type' => 'tab'],
            ['key' => 'field_home_about_label', 'label' => 'About Label', 'name' => 'home_about_label', 'type' => 'text', 'default_value' => 'About Ultimate Battle'],
            ['key' => 'field_home_about_text', 'label' => 'About Text', 'name' => 'home_about_text', 'type' => 'textarea', 'default_value' => 'A competitive esports tournament and broadcast platform designed to connect gamers, fans, and brands through high-impact gaming experiences.'],

            ['key' => 'field_home_expertise_tab', 'label' => 'Expertise Slider', 'type' => 'tab'],
            [
                'key' => 'field_home_expertise_slides', 'label' => 'Slides', 'name' => 'home_expertise_slides', 'type' => 'repeater',
                'sub_fields' => [
                    ['key' => 'field_exp_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text'],
                    ['key' => 'field_exp_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'],
                    ['key' => 'field_exp_subtitle', 'label' => 'Subtitle', 'name' => 'subtitle', 'type' => 'text'],
                    ['key' => 'field_exp_description', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea'],
                    ['key' => 'field_exp_button_text', 'label' => 'Button Text', 'name' => 'button_text', 'type' => 'text', 'default_value' => 'Learn More'],
                    ['key' => 'field_exp_button_url', 'label' => 'Button URL', 'name' => 'button_url', 'type' => 'url'],
                    ['key' => 'field_exp_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url'],
                ],
                'min' => 0, 'max' => 5,
            ],

            ['key' => 'field_home_showcase_tab', 'label' => 'Platform Showcase', 'type' => 'tab'],
            ['key' => 'field_home_showcase_text', 'label' => 'Showcase Text', 'name' => 'home_showcase_text', 'type' => 'text', 'default_value' => 'Ultimate Battle'],

            ['key' => 'field_home_whatwedo_tab', 'label' => 'What We Do', 'type' => 'tab'],
            ['key' => 'field_home_whatwedo_label', 'label' => 'Section Label', 'name' => 'home_whatwedo_label', 'type' => 'text', 'default_value' => 'Features'],
            ['key' => 'field_home_whatwedo_title', 'label' => 'Section Title', 'name' => 'home_whatwedo_title', 'type' => 'text', 'default_value' => 'What We Do'],
            [
                'key' => 'field_home_whatwedo_items', 'label' => 'Items', 'name' => 'home_whatwedo_items', 'type' => 'repeater',
                'sub_fields' => [
                    ['key' => 'field_wwd_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'],
                    ['key' => 'field_wwd_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'text'],
                    ['key' => 'field_wwd_tag', 'label' => 'Tag', 'name' => 'tag', 'type' => 'text'],
                    ['key' => 'field_wwd_image', 'label' => 'Hover Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url'],
                ],
                'min' => 0, 'max' => 10,
            ],

            ['key' => 'field_home_movement_tab', 'label' => 'Join the Movement', 'type' => 'tab'],
            ['key' => 'field_home_movement_text', 'label' => 'Movement Text', 'name' => 'home_movement_text', 'type' => 'text', 'default_value' => 'JOIN THE MOVEMENT'],

            ['key' => 'field_home_textslider_tab', 'label' => 'Text Slider', 'type' => 'tab'],
            ['key' => 'field_home_textslider_text', 'label' => 'Slider Text', 'name' => 'home_textslider_text', 'type' => 'text', 'default_value' => 'Ultimate Battle'],
        ],
        'location' => [
            [['param' => 'page_template', 'operator' => '==', 'value' => 'template-home.blade.php']],
        ],
    ]);

    // About Page Fields
    acf_add_local_field_group([
        'key'      => 'group_about_page',
        'title'    => 'About Page Settings',
        'fields'   => [
            ['key' => 'field_about_story_tab', 'label' => 'Our Story', 'type' => 'tab'],
            ['key' => 'field_about_story_title', 'label' => 'Story Title', 'name' => 'about_story_title', 'type' => 'text', 'default_value' => 'Our Story'],
            ['key' => 'field_about_story_text', 'label' => 'Story Text', 'name' => 'about_story_text', 'type' => 'textarea'],
            ['key' => 'field_about_story_image', 'label' => 'Story Image', 'name' => 'about_story_image', 'type' => 'image', 'return_format' => 'url'],

            ['key' => 'field_about_roadmap_tab', 'label' => 'Roadmap', 'type' => 'tab'],
            ['key' => 'field_about_roadmap_label', 'label' => 'Roadmap Label', 'name' => 'about_roadmap_label', 'type' => 'text', 'default_value' => 'Roadmap'],
            ['key' => 'field_about_roadmap_title', 'label' => 'Roadmap Title', 'name' => 'about_roadmap_title', 'type' => 'text', 'default_value' => 'Our Journey'],
            [
                'key' => 'field_about_roadmap_phases', 'label' => 'Phases', 'name' => 'about_roadmap_phases', 'type' => 'repeater',
                'sub_fields' => [
                    ['key' => 'field_phase_label', 'label' => 'Phase Label', 'name' => 'label', 'type' => 'text'],
                    ['key' => 'field_phase_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'],
                    ['key' => 'field_phase_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea'],
                ],
                'min' => 0, 'max' => 10,
            ],
        ],
        'location' => [
            [['param' => 'page_template', 'operator' => '==', 'value' => 'template-about.blade.php']],
        ],
    ]);

    // Tournaments Page Fields
    acf_add_local_field_group([
        'key'      => 'group_tournaments_page',
        'title'    => 'Tournaments Page Settings',
        'fields'   => [
            ['key' => 'field_tourn_intro_title', 'label' => 'Intro Title', 'name' => 'tourn_intro_title', 'type' => 'text', 'default_value' => 'Tournament Organization'],
            ['key' => 'field_tourn_intro_text', 'label' => 'Intro Text', 'name' => 'tourn_intro_text', 'type' => 'textarea'],
            [
                'key' => 'field_tourn_types', 'label' => 'Tournament Types', 'name' => 'tourn_types', 'type' => 'repeater',
                'sub_fields' => [
                    ['key' => 'field_tt_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text'],
                    ['key' => 'field_tt_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'],
                    [
                        'key' => 'field_tt_features', 'label' => 'Features', 'name' => 'features', 'type' => 'repeater',
                        'sub_fields' => [
                            ['key' => 'field_tt_feat_text', 'label' => 'Feature Text', 'name' => 'text', 'type' => 'textarea'],
                        ],
                    ],
                    ['key' => 'field_tt_button_text', 'label' => 'Button Text', 'name' => 'button_text', 'type' => 'text'],
                    ['key' => 'field_tt_button_url', 'label' => 'Button URL', 'name' => 'button_url', 'type' => 'url'],
                    ['key' => 'field_tt_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url'],
                ],
                'min' => 0, 'max' => 6,
            ],
        ],
        'location' => [
            [['param' => 'page_template', 'operator' => '==', 'value' => 'template-tournaments.blade.php']],
        ],
    ]);

    // Broadcasts Page Fields
    acf_add_local_field_group([
        'key'      => 'group_broadcasts_page',
        'title'    => 'Broadcasts Page Settings',
        'fields'   => [
            ['key' => 'field_bc_section_label', 'label' => 'Section Label', 'name' => 'bc_section_label', 'type' => 'text', 'default_value' => 'Content'],
            ['key' => 'field_bc_section_title', 'label' => 'Section Title', 'name' => 'bc_section_title', 'type' => 'text', 'default_value' => 'Broadcast & Content'],
            [
                'key' => 'field_bc_cards', 'label' => 'Content Cards', 'name' => 'bc_cards', 'type' => 'repeater',
                'sub_fields' => [
                    ['key' => 'field_bc_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'],
                    ['key' => 'field_bc_card_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea'],
                ],
                'min' => 0, 'max' => 12,
            ],
        ],
        'location' => [
            [['param' => 'page_template', 'operator' => '==', 'value' => 'template-broadcasts.blade.php']],
        ],
    ]);

    // Partnerships Page Fields
    acf_add_local_field_group([
        'key'      => 'group_partnerships_page',
        'title'    => 'Partnerships Page Settings',
        'fields'   => [
            ['key' => 'field_part_about_title', 'label' => 'About Title', 'name' => 'part_about_title', 'type' => 'text', 'default_value' => 'About Brand Partnerships'],
            ['key' => 'field_part_about_text', 'label' => 'About Text', 'name' => 'part_about_text', 'type' => 'wysiwyg'],
            [
                'key' => 'field_part_opportunities', 'label' => 'Partnership Opportunities', 'name' => 'part_opportunities', 'type' => 'repeater',
                'sub_fields' => [
                    ['key' => 'field_part_opp_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text'],
                ],
                'min' => 0, 'max' => 10,
            ],
            ['key' => 'field_part_sidebar_tab', 'label' => 'Sidebar', 'type' => 'tab'],
            ['key' => 'field_part_contact_email', 'label' => 'Contact Email', 'name' => 'part_contact_email', 'type' => 'email', 'default_value' => 'partnerships@ultimatebattle.co'],
            ['key' => 'field_part_platforms', 'label' => 'Platforms', 'name' => 'part_platforms', 'type' => 'text', 'default_value' => 'YouTube, Twitch, Facebook, TikTok'],
            ['key' => 'field_part_website', 'label' => 'Website', 'name' => 'part_website', 'type' => 'text', 'default_value' => 'ultimatebattle.co'],
        ],
        'location' => [
            [['param' => 'page_template', 'operator' => '==', 'value' => 'template-partnerships.blade.php']],
        ],
    ]);

    // FAQ Page Fields
    acf_add_local_field_group([
        'key'      => 'group_faq_page',
        'title'    => 'FAQ Settings',
        'fields'   => [
            [
                'key' => 'field_faq_items', 'label' => 'FAQ Items', 'name' => 'faq_items', 'type' => 'repeater',
                'sub_fields' => [
                    ['key' => 'field_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text'],
                    ['key' => 'field_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea'],
                ],
                'min' => 0, 'max' => 20,
            ],
            ['key' => 'field_faq_still_title', 'label' => 'Still Have Questions Title', 'name' => 'faq_still_title', 'type' => 'text', 'default_value' => 'STILL HAVE QUESTIONS?'],
            ['key' => 'field_faq_still_text', 'label' => 'Still Have Questions Text', 'name' => 'faq_still_text', 'type' => 'textarea'],
            ['key' => 'field_faq_contact_email', 'label' => 'Contact Email', 'name' => 'faq_contact_email', 'type' => 'email', 'default_value' => 'info@ultimatebattle.co'],
        ],
        'location' => [
            [['param' => 'page_template', 'operator' => '==', 'value' => 'template-faq.blade.php']],
        ],
    ]);

    // Terms Page Fields
    acf_add_local_field_group([
        'key'      => 'group_terms_page',
        'title'    => 'Terms & Conditions Settings',
        'fields'   => [
            [
                'key' => 'field_terms_sections', 'label' => 'Sections', 'name' => 'terms_sections', 'type' => 'repeater',
                'sub_fields' => [
                    ['key' => 'field_terms_sec_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'],
                    ['key' => 'field_terms_sec_content', 'label' => 'Content', 'name' => 'content', 'type' => 'wysiwyg'],
                ],
                'min' => 0, 'max' => 20,
            ],
        ],
        'location' => [
            [['param' => 'page_template', 'operator' => '==', 'value' => 'template-terms.blade.php']],
        ],
    ]);

    // Contact Page Fields
    acf_add_local_field_group([
        'key'      => 'group_contact_page',
        'title'    => 'Contact Page Settings',
        'fields'   => [
            ['key' => 'field_contact_form_shortcode', 'label' => 'Contact Form Shortcode', 'name' => 'contact_form_shortcode', 'type' => 'text', 'instructions' => 'Paste Contact Form 7 shortcode here, e.g. [contact-form-7 id="123" title="Contact"]'],
            ['key' => 'field_contact_email', 'label' => 'Contact Email', 'name' => 'contact_email', 'type' => 'email', 'default_value' => 'info@ultimatebattle.co'],
            ['key' => 'field_contact_info_text', 'label' => 'Info Text', 'name' => 'contact_info_text', 'type' => 'textarea'],
        ],
        'location' => [
            [['param' => 'page_template', 'operator' => '==', 'value' => 'template-contact.blade.php']],
        ],
    ]);
});
