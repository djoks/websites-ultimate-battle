<?php

/**
 * Theme setup.
 */

namespace App;

use Illuminate\Support\Facades\Vite;

/**
 * Inject styles into the block editor.
 */
add_filter('block_editor_settings_all', function ($settings) {
    $style = Vite::asset('resources/css/editor.css');
    $settings['styles'][] = [
        'css' => "@import url('{$style}')",
    ];
    return $settings;
});

/**
 * Inject scripts into the block editor.
 */
add_action('admin_head', function () {
    if (! get_current_screen()?->is_block_editor()) {
        return;
    }
    if (! Vite::isRunningHot()) {
        $dependencies = json_decode(Vite::content('editor.deps.json'));
        foreach ($dependencies as $dependency) {
            if (! wp_script_is($dependency)) {
                wp_enqueue_script($dependency);
            }
        }
    }
    echo Vite::withEntryPoints([
        'resources/js/editor.js',
    ])->toHtml();
});

/**
 * Use the generated theme.json file.
 */
add_filter('theme_file_path', function ($path, $file) {
    return $file === 'theme.json'
        ? public_path('build/assets/theme.json')
        : $path;
}, 10, 2);

/**
 * Disable on-demand block asset loading.
 */
add_filter('should_load_separate_core_block_assets', '__return_false');

/**
 * Register the initial theme setup.
 */
add_action('after_setup_theme', function () {
    remove_theme_support('block-templates');

    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'indiz'),
        'mobile_navigation' => __('Mobile Navigation', 'indiz'),
    ]);

    remove_theme_support('core-block-patterns');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Register the theme sidebars.
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar([
        'name' => __('Primary', 'indiz'),
        'id' => 'sidebar-primary',
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'indiz'),
        'id' => 'sidebar-footer',
    ] + $config);
});

/**
 * Enqueue static assets (vendor CSS/JS from the original HTML template).
 */
add_action('wp_enqueue_scripts', function () {
    $theme_uri = get_template_directory_uri();

    // Vendor CSS
    wp_enqueue_style('phosphor-icons-regular', 'https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css');
    wp_enqueue_style('phosphor-icons-fill', 'https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css');
    wp_enqueue_style('phosphor-icons-thin', 'https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/thin/style.css');
    wp_enqueue_style('swiper-css', $theme_uri . '/public/css/swiper.min.css');
    wp_enqueue_style('splitting-css', $theme_uri . '/public/css/splitting.min.css');

    // Main compiled CSS (Tailwind + SCSS)
    wp_enqueue_style('indiz-main-css', $theme_uri . '/public/css/main.css');

    // Custom overrides (CF7 form styling, etc.)
    wp_enqueue_style('indiz-custom-css', $theme_uri . '/public/css/custom.css', ['indiz-main-css']);

    // Vendor JS
    wp_enqueue_script('aos-js', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', [], '2.3.4', true);
    wp_enqueue_script('indiz-main', $theme_uri . '/public/js/main.js', [], '1.0', true);
    wp_enqueue_script('swiper-bundle', $theme_uri . '/public/js/plugins/swiper-bundle.min.js', [], '1.0', true);
    wp_enqueue_script('plugin-custom', $theme_uri . '/public/js/plugins/plugin-custom.js', ['swiper-bundle'], '1.0', true);
    wp_enqueue_script('splitting', $theme_uri . '/public/js/plugins/splitting.js', [], '1.0', true);

    // Initialize AOS and Splitting after all scripts load
    wp_add_inline_script('splitting', 'document.addEventListener("DOMContentLoaded", function() { if (typeof AOS !== "undefined") { AOS.init(); } if (typeof Splitting !== "undefined") { Splitting(); } });');
}, 100);

/**
 * Conditionally enqueue page-specific assets.
 */
add_action('wp_enqueue_scripts', function () {
    $theme_uri = get_template_directory_uri();

    // MatterJS only on front page
    if (is_front_page()) {
        wp_enqueue_script('matter-js', $theme_uri . '/public/js/plugins/matter.min.js', [], '1.0', true);
        wp_enqueue_script('matterjs-custom', $theme_uri . '/public/js/plugins/matterjs-custom.js', ['matter-js'], '1.0', true);
    }

    // Odometer on about page
    if (is_page_template('template-about.blade.php') || is_page('about-us')) {
        wp_enqueue_style('odometer-css', $theme_uri . '/public/css/odometer.css');
        wp_enqueue_script('odometer-js', $theme_uri . '/public/js/plugins/odometer.js', [], '1.0', true);
    }
}, 101);

/**
 * Add favicon to head.
 */
add_action('wp_head', function () {
    $theme_uri = get_template_directory_uri();
    echo '<link rel="apple-touch-icon" sizes="180x180" href="' . $theme_uri . '/public/apple-touch-icon.png">' . "\n";
    echo '<link rel="icon" type="image/png" sizes="32x32" href="' . $theme_uri . '/public/favicon-32x32.png">' . "\n";
    echo '<link rel="icon" type="image/png" sizes="16x16" href="' . $theme_uri . '/public/favicon-16x16.png">' . "\n";
    echo '<link rel="manifest" href="' . $theme_uri . '/public/site.webmanifest">' . "\n";
});

/**
 * Helper function to get theme asset URL.
 */
function asset_url($path) {
    return get_template_directory_uri() . '/public/' . ltrim($path, '/');
}
