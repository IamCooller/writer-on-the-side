<?php

/**
 * KAPITAN PUB functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WRITER_ON_THE_SIDE
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

define('IS_VITE_DEVELOPMENT', true);

// Подключаем функции
require get_template_directory() . '/inc/acf-blocks.php';
require get_template_directory() . '/inc/theme-setup.php';
require get_template_directory() . '/inc/inc.vite.php';


// Enqueue scripts and styles
function WRITER_ON_THE_SIDE_scripts()
{
    // Register Swiper for potential use throughout the site
    wp_register_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', [], '10.0.0');
    wp_register_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', [], '10.0.0', true);


    // Localize script with AJAX URL for all AJAX-powered forms
    wp_localize_script('main', 'WRITER_ON_THE_SIDE_data', [
        'ajaxurl' => admin_url('admin-ajax.php'),
    ]);
}
add_action('wp_enqueue_scripts', 'WRITER_ON_THE_SIDE_scripts');

add_action('after_switch_theme', function () {
    wp_cache_flush();
});

// Также добавляем очистку кеша при сохранении настроек темы
add_action('acf/save_post', function ($post_id) {
    if ($post_id === 'options') {
        wp_cache_flush();
    }
}, 20);

// Create directory for ACF JSON if it doesn't exist
add_action('admin_init', function () {
    $acf_json_dir = get_stylesheet_directory() . '/assets/acf-json';

    if (!file_exists($acf_json_dir)) {
        mkdir($acf_json_dir, 0755, true);
    }
});

// Simple unified path for ACF JSON files
add_filter('acf/settings/save_json', function () {
    return get_stylesheet_directory() . '/assets/acf-json';
});

// Add path for loading ACF JSON files
add_filter('acf/settings/load_json', function ($paths) {
    $paths[] = get_stylesheet_directory() . '/assets/acf-json';
    return $paths;
});

// Disable ACF's custom field validation which may be causing memory issues
add_filter('acf/settings/row_index_offset', '__return_zero');

// Increase admin-ajax.php timeout for ACF
add_filter('admin_init', function () {
    set_time_limit(120);
});
