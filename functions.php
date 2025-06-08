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

// Theme Update Checker
function check_theme_updates($transient)
{
    if (empty($transient->checked)) {
        return $transient;
    }

    // Get current theme version
    $current_version = $transient->checked['writer-on-the-side'];

    // GitHub repository information
    $github_username = 'IamCooller';
    $github_repo = 'writer-on-the-side';
    $github_api_url = "https://api.github.com/repos/{$github_username}/{$github_repo}/releases/latest";

    // Get latest release information from GitHub
    $response = wp_remote_get($github_api_url, array(
        'headers' => array(
            'Accept' => 'application/vnd.github.v3+json',
            'User-Agent' => 'WordPress Theme Update Checker'
        )
    ));

    if (is_wp_error($response)) {
        return $transient;
    }

    $release_data = json_decode(wp_remote_retrieve_body($response), true);

    if (!$release_data || !isset($release_data['tag_name'])) {
        return $transient;
    }

    // Remove 'v' prefix if present in version
    $latest_version = ltrim($release_data['tag_name'], 'v');

    // Compare versions
    if (version_compare($current_version, $latest_version, '<')) {
        $transient->response['writer-on-the-side'] = array(
            'theme' => 'writer-on-the-side',
            'new_version' => $latest_version,
            'url' => $release_data['html_url'],
            'package' => $release_data['zipball_url'],
        );
    }

    return $transient;
}
add_filter('pre_set_site_transient_update_themes', 'check_theme_updates');

// Add theme update information to the theme details screen
function theme_update_information($false, $action, $args)
{
    if ($action !== 'theme_information' || !isset($args->slug) || $args->slug !== 'writer-on-the-side') {
        return $false;
    }

    // GitHub repository information
    $github_username = 'IamCooller';
    $github_repo = 'writer-on-the-side';
    $github_api_url = "https://api.github.com/repos/{$github_username}/{$github_repo}/releases/latest";

    $response = wp_remote_get($github_api_url, array(
        'headers' => array(
            'Accept' => 'application/vnd.github.v3+json',
            'User-Agent' => 'WordPress Theme Update Checker'
        )
    ));

    if (is_wp_error($response)) {
        return $false;
    }

    $release_data = json_decode(wp_remote_retrieve_body($response), true);

    if (!$release_data) {
        return $false;
    }

    $theme_info = new stdClass();
    $theme_info->name = 'Writer on the Side';
    $theme_info->slug = 'writer-on-the-side';
    $theme_info->version = ltrim($release_data['tag_name'], 'v');
    $theme_info->author = 'Ilya';
    $theme_info->author_profile = "https://github.com/{$github_username}";
    $theme_info->last_updated = $release_data['published_at'];
    $theme_info->homepage = $release_data['html_url'];
    $theme_info->sections = array(
        'description' => $release_data['body'],
        'changelog' => $release_data['body'],
    );

    return $theme_info;
}
add_filter('themes_api', 'theme_update_information', 10, 3);
