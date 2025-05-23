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
    // Localize script with AJAX URL for all AJAX-powered forms
    wp_localize_script('main', 'WRITER_ON_THE_SIDE_data', [
        'ajaxurl' => admin_url('admin-ajax.php'),
    ]);
}
add_action('wp_enqueue_scripts', 'WRITER_ON_THE_SIDE_scripts');

// Add custom styles to WYSIWYG editor
function add_custom_tinymce_styles($init_array)
{
    $style_formats = array(
        array(
            'title' => 'Highlight',
            'inline' => 'span',
            'classes' => 'highlight',
            'wrapper' => false,
        )
    );

    $init_array['style_formats'] = json_encode($style_formats);
    return $init_array;
}
add_filter('tiny_mce_before_init', 'add_custom_tinymce_styles');

// Add the style formats button to the editor
function add_style_select_buttons($buttons)
{
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2', 'add_style_select_buttons');

// Add custom styles to the editor CSS
function add_editor_styles()
{
    add_editor_style('editor-style.css');
}
add_action('admin_init', 'add_editor_styles');

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
