<?php

/**
 * Carbon Fields Registration
 *
 * Replaces ACF with Carbon Fields (free, with repeater/complex field support).
 */

namespace App;

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Carbon_Fields;

// =========================================================================
// Boot Carbon Fields
// =========================================================================
add_action('after_setup_theme', function () {
    Carbon_Fields::boot();
}, 100);

// =========================================================================
// Helper functions
// =========================================================================

/**
 * Get a Carbon Fields post meta value, with fallback.
 * Strips underscore prefixes from complex field sub-keys.
 */
function cf_get($field_name, $post_id = null) {
    if ($post_id === null) {
        $post_id = get_the_ID();
    }
    $value = carbon_get_post_meta($post_id, $field_name);

    // Complex fields return arrays of arrays with underscore-prefixed keys
    if (is_array($value)) {
        $value = cf_clean_complex($value);
    }

    return $value;
}

/**
 * Recursively strip leading underscores from complex field sub-keys.
 */
function cf_clean_complex($data) {
    if (!is_array($data)) {
        return $data;
    }

    $cleaned = [];
    foreach ($data as $key => $value) {
        // Numeric keys (array items) — recurse into each item
        if (is_int($key)) {
            $cleaned[$key] = cf_clean_complex($value);
            continue;
        }

        // Strip leading underscore from string keys (Carbon Fields convention)
        $clean_key = ltrim($key, '_');

        // Recurse into nested complex fields
        if (is_array($value)) {
            $cleaned[$clean_key] = cf_clean_complex($value);
        } else {
            $cleaned[$clean_key] = $value;
        }
    }

    return $cleaned;
}

/**
 * Get a Carbon Fields theme option value.
 */
function cf_option($field_name) {
    return carbon_get_theme_option($field_name);
}

/**
 * Convert an attachment ID (or URL) to a URL.
 * If the value is already a URL string, returns it as-is.
 * If it's a numeric attachment ID, converts to URL.
 */
function cf_image_url($value) {
    if (empty($value)) {
        return '';
    }
    // Already a URL string (from fallback defaults)
    if (is_string($value) && (str_starts_with($value, 'http') || str_starts_with($value, '/'))) {
        return $value;
    }
    // Attachment ID from Carbon Fields
    return wp_get_attachment_url($value) ?: '';
}

// =========================================================================
// Register Field Containers
// =========================================================================
add_action('carbon_fields_register_fields', function () {

    // ----- Site Logo (Theme Options) -----
    Container::make('theme_options', 'Site Logo')
        ->set_page_parent('theme-settings')
        ->add_fields([
            Field::make('image', 'site_logo', 'Logo')
                ->set_help_text('Upload your site logo. Falls back to theme default if empty.'),
        ]);

    // ----- Home Page Settings -----
    Container::make('post_meta', 'Home Page Settings')
        ->where('post_template', '=', 'template-home.blade.php')
        ->add_tab('Top Bar', [
            Field::make('text', 'home_topbar_text', 'Top Bar Text')
                ->set_default_value('COMPETITIVE ESPORTS TOURNAMENT & STREAMING PLATFORM'),
            Field::make('text', 'home_topbar_cta_text', 'Top Bar CTA Text')
                ->set_default_value('Register for Tournaments'),
            Field::make('text', 'home_topbar_cta_url', 'Top Bar CTA URL'),
        ])
        ->add_tab('Banner', [
            Field::make('text', 'home_banner_line1', 'Banner Line 1')
                ->set_default_value('where'),
            Field::make('text', 'home_banner_line2', 'Banner Line 2')
                ->set_default_value('competition'),
            Field::make('text', 'home_banner_line3', 'Banner Line 3')
                ->set_default_value('meets'),
            Field::make('text', 'home_banner_accent', 'Banner Accent Word')
                ->set_default_value('community'),
            Field::make('image', 'home_banner_image', 'Banner Image')
                ->set_help_text('Character image displayed on the left side of the banner'),
            Field::make('complex', 'home_banner_categories', 'Banner Categories')
                ->add_fields([
                    Field::make('text', 'text', 'Text'),
                ])
                ->set_max(6),
        ])
        ->add_tab('About Section', [
            Field::make('text', 'home_about_label', 'About Label')
                ->set_default_value('About Ultimate Battle'),
            Field::make('textarea', 'home_about_text', 'About Text')
                ->set_default_value('A competitive esports tournament and broadcast platform designed to connect gamers, fans, and brands through high-impact gaming experiences.'),
            Field::make('image', 'home_about_image_left', 'About Image Left')
                ->set_help_text('Left side character image'),
            Field::make('image', 'home_about_image_right', 'About Image Right')
                ->set_help_text('Right side character image'),
        ])
        ->add_tab('Expertise Slider', [
            Field::make('complex', 'home_expertise_slides', 'Slides')
                ->add_fields([
                    Field::make('text', 'label', 'Label'),
                    Field::make('text', 'title', 'Title'),
                    Field::make('text', 'subtitle', 'Subtitle'),
                    Field::make('textarea', 'description', 'Description'),
                    Field::make('text', 'button_text', 'Button Text')
                        ->set_default_value('Learn More'),
                    Field::make('text', 'button_url', 'Button URL'),
                    Field::make('image', 'image', 'Image'),
                ])
                ->set_max(5),
        ])
        ->add_tab('Platform Showcase', [
            Field::make('text', 'home_showcase_text', 'Showcase Text')
                ->set_default_value('Ultimate Battle'),
            Field::make('image', 'home_showcase_image', 'Showcase Background Image')
                ->set_help_text('Background image behind the showcase text'),
        ])
        ->add_tab('What We Do', [
            Field::make('text', 'home_whatwedo_label', 'Section Label')
                ->set_default_value('Features'),
            Field::make('text', 'home_whatwedo_title', 'Section Title')
                ->set_default_value('What We Do'),
            Field::make('complex', 'home_whatwedo_items', 'Items')
                ->add_fields([
                    Field::make('text', 'title', 'Title'),
                    Field::make('text', 'description', 'Description'),
                    Field::make('text', 'tag', 'Tag'),
                    Field::make('image', 'image', 'Hover Image'),
                ])
                ->set_max(10),
        ])
        ->add_tab('Join the Movement', [
            Field::make('text', 'home_movement_text', 'Movement Text')
                ->set_default_value('JOIN THE MOVEMENT'),
            Field::make('image', 'home_movement_image_left', 'Left Character Image'),
            Field::make('image', 'home_movement_image_right', 'Right Character Image'),
        ])
        ->add_tab('Text Slider', [
            Field::make('text', 'home_textslider_text', 'Slider Text')
                ->set_default_value('Ultimate Battle'),
        ]);

    // ----- How It Works (Home Page) -----
    Container::make('post_meta', 'How It Works Section')
        ->where('post_template', '=', 'template-home.blade.php')
        ->add_fields([
            Field::make('text', 'hiw_title', 'Section Title')
                ->set_default_value('how it works'),
            Field::make('complex', 'hiw_steps', 'Steps')
                ->add_fields([
                    Field::make('text', 'title', 'Title'),
                    Field::make('image', 'image', 'Image'),
                    Field::make('text', 'rotation', 'Rotation (CSS class)')
                        ->set_help_text('e.g. -rotate-6, rotate-0, rotate-6'),
                ])
                ->set_max(5),
        ]);

    // ----- Featured Games (Home Page) -----
    Container::make('post_meta', 'Featured Games Section')
        ->where('post_template', '=', 'template-home.blade.php')
        ->add_fields([
            Field::make('text', 'fg_title', 'Section Title')
                ->set_default_value('Featured Games'),
            Field::make('complex', 'fg_games', 'Games')
                ->add_fields([
                    Field::make('text', 'name', 'Game Name'),
                    Field::make('image', 'icon', 'Icon'),
                ])
                ->set_max(12),
        ]);

    // ----- FAQ Section (shared: Home + FAQ pages) -----
    Container::make('post_meta', 'FAQ Section Labels')
        ->where('post_template', '=', 'template-home.blade.php')
        ->or_where('post_template', '=', 'template-faq.blade.php')
        ->add_fields([
            Field::make('text', 'faq_sec_label', 'Section Label')
                ->set_default_value('FAQ'),
            Field::make('text', 'faq_sec_title', 'Section Title')
                ->set_default_value('Frequently Asked'),
            Field::make('image', 'faq_sec_image', 'FAQ Section Image')
                ->set_help_text('Large image displayed beside the FAQ items'),
        ]);

    // ----- Contact Page Settings (shared: Home + Contact pages) -----
    Container::make('post_meta', 'Contact Section Settings')
        ->where('post_template', '=', 'template-contact.blade.php')
        ->or_where('post_template', '=', 'template-home.blade.php')
        ->add_fields([
            Field::make('text', 'contact_form_shortcode', 'Contact Form Shortcode')
                ->set_default_value('[contact-form-7 id="12" title="Contact form 1"]')
                ->set_help_text('Paste Contact Form 7 shortcode here'),
            Field::make('text', 'contact_section_label', 'Section Label')
                ->set_default_value('CONTACT / COLLABORATE'),
            Field::make('text', 'contact_section_title', 'Section Title')
                ->set_default_value("Let's Connect"),
        ]);

    // ----- About Page Settings -----
    Container::make('post_meta', 'About Page Settings')
        ->where('post_template', '=', 'template-about.blade.php')
        ->add_tab('Our Story', [
            Field::make('text', 'about_story_title', 'Story Title')
                ->set_default_value('Our Story'),
            Field::make('textarea', 'about_story_text', 'Story Text'),
            Field::make('image', 'about_story_image', 'Story Image'),
        ])
        ->add_tab('Roadmap', [
            Field::make('text', 'about_roadmap_label', 'Roadmap Label')
                ->set_default_value('Roadmap'),
            Field::make('text', 'about_roadmap_title', 'Roadmap Title')
                ->set_default_value('Our Journey'),
            Field::make('complex', 'about_roadmap_phases', 'Phases')
                ->add_fields([
                    Field::make('text', 'label', 'Phase Label'),
                    Field::make('text', 'title', 'Title'),
                    Field::make('textarea', 'description', 'Description'),
                ])
                ->set_max(10),
        ]);

    // ----- About Section Details (About page detailed section) -----
    Container::make('post_meta', 'About Section Details')
        ->where('post_template', '=', 'template-about.blade.php')
        ->add_tab('About Section', [
            Field::make('image', 'about_sec_image', 'Section Image')
                ->set_help_text('Main image displayed on the left side of this section'),
            Field::make('text', 'about_sec_label', 'Section Label')
                ->set_default_value('PLAYPROVINCE ESPORTS'),
            Field::make('text', 'about_sec_title', 'Section Title')
                ->set_default_value('Competitive Esports Platform'),
            Field::make('text', 'about_sec_subtitle', 'Section Subtitle')
                ->set_default_value('Tournaments, Broadcasts & Brand Activations'),
            Field::make('textarea', 'about_sec_text', 'Section Text')
                ->set_default_value('Ultimate Battle is a dynamic esports competition and content platform built to grow the gaming ecosystem in Ghana and across Africa. Through organized tournaments, live broadcasts, and community-driven gaming events, we provide competitive environments for gamers while delivering exciting entertainment for audiences and brand partners.'),
            Field::make('text', 'about_sec_button_text', 'Button Text')
                ->set_default_value('Learn More'),
            Field::make('text', 'about_sec_button_url', 'Button URL'),
        ])
        ->add_tab('Vision & Mission', [
            Field::make('text', 'about_vision_title', 'Vision Title')
                ->set_default_value('Our Vision'),
            Field::make('complex', 'about_vision_items', 'Vision Items')
                ->add_fields([
                    Field::make('text', 'text', 'Text'),
                ])
                ->set_max(5),
            Field::make('text', 'about_mission_title', 'Mission Title')
                ->set_default_value('Our Mission'),
            Field::make('complex', 'about_mission_items', 'Mission Items')
                ->add_fields([
                    Field::make('text', 'text', 'Text'),
                ])
                ->set_max(5),
        ])
        ->add_tab('Stats', [
            Field::make('complex', 'about_stats', 'Stats')
                ->add_fields([
                    Field::make('text', 'label', 'Label'),
                    Field::make('text', 'stat_value', 'Value'),
                    Field::make('text', 'suffix', 'Suffix')
                        ->set_default_value('+'),
                ])
                ->set_max(6),
        ]);

    // ----- Tournaments Page Settings -----
    Container::make('post_meta', 'Tournaments Page Settings')
        ->where('post_template', '=', 'template-tournaments.blade.php')
        ->add_fields([
            Field::make('text', 'tourn_intro_title', 'Intro Title')
                ->set_default_value('Tournament Organization'),
            Field::make('textarea', 'tourn_intro_text', 'Intro Text'),
            Field::make('complex', 'tourn_types', 'Tournament Types')
                ->add_fields([
                    Field::make('text', 'label', 'Label'),
                    Field::make('text', 'title', 'Title'),
                    Field::make('complex', 'features', 'Features')
                        ->add_fields([
                            Field::make('textarea', 'text', 'Feature Text'),
                        ]),
                    Field::make('text', 'button_text', 'Button Text'),
                    Field::make('text', 'button_url', 'Button URL'),
                    Field::make('image', 'image', 'Image'),
                ])
                ->set_max(6),
        ]);

    // ----- Broadcasts Page Settings -----
    Container::make('post_meta', 'Broadcasts Page Settings')
        ->where('post_template', '=', 'template-broadcasts.blade.php')
        ->add_fields([
            Field::make('text', 'bc_section_label', 'Section Label')
                ->set_default_value('Content'),
            Field::make('text', 'bc_section_title', 'Section Title')
                ->set_default_value('Broadcast & Content'),
            Field::make('complex', 'bc_cards', 'Content Cards')
                ->add_fields([
                    Field::make('text', 'title', 'Title'),
                    Field::make('textarea', 'description', 'Description'),
                ])
                ->set_max(12),
        ]);

    // ----- Partnerships Page Settings -----
    Container::make('post_meta', 'Partnerships Page Settings')
        ->where('post_template', '=', 'template-partnerships.blade.php')
        ->add_fields([
            Field::make('complex', 'part_slider_images', 'Slider Images')
                ->add_fields([
                    Field::make('image', 'image', 'Image'),
                ])
                ->set_max(6)
                ->set_help_text('Images displayed in the top slider gallery'),
            Field::make('text', 'part_about_title', 'About Title')
                ->set_default_value('About Brand Partnerships'),
            Field::make('rich_text', 'part_about_text', 'About Text'),
            Field::make('complex', 'part_opportunities', 'Partnership Opportunities')
                ->add_fields([
                    Field::make('text', 'text', 'Text'),
                ])
                ->set_max(10),
            Field::make('text', 'part_contact_email', 'Contact Email')
                ->set_default_value('partnerships@ultimatebattle.co'),
            Field::make('text', 'part_platforms', 'Platforms')
                ->set_default_value('YouTube, Twitch, Facebook, TikTok'),
            Field::make('text', 'part_website', 'Website')
                ->set_default_value('ultimatebattle.co'),
        ]);

    // ----- FAQ Page Settings -----
    Container::make('post_meta', 'FAQ Page Settings')
        ->where('post_template', '=', 'template-faq.blade.php')
        ->add_fields([
            Field::make('complex', 'faq_items', 'FAQ Items')
                ->add_fields([
                    Field::make('text', 'question', 'Question'),
                    Field::make('textarea', 'answer', 'Answer'),
                ])
                ->set_max(20),
            Field::make('text', 'faq_still_title', 'Still Have Questions Title')
                ->set_default_value('STILL HAVE QUESTIONS?'),
            Field::make('textarea', 'faq_still_text', 'Still Have Questions Text'),
            Field::make('text', 'faq_contact_email', 'Contact Email')
                ->set_default_value('info@ultimatebattle.co'),
        ]);

    // ----- Terms Page Settings -----
    Container::make('post_meta', 'Terms & Conditions Settings')
        ->where('post_template', '=', 'template-terms.blade.php')
        ->add_fields([
            Field::make('complex', 'terms_sections', 'Sections')
                ->add_fields([
                    Field::make('text', 'title', 'Title'),
                    Field::make('rich_text', 'content', 'Content'),
                ])
                ->set_max(20),
        ]);
});
