<?php

/**
 * Настройки темы
 */

add_action('after_setup_theme', function () {


    // Заголовок страницы
    add_theme_support('title-tag');

    // Миниатюры
    add_theme_support('post-thumbnails');

    // HTML5 разметка
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    // Меню
    register_nav_menus([
        'header-menu' => __('Header Menu', 'writer-on-the-side'),
        'footer-menu' => __('Footer Menu', 'writer-on-the-side'),
    ]);

    // Поддержка кастомного логотипа
    add_theme_support('custom-logo', [
        'height' => 250,
        'width' => 250,
        'flex-width' => true,
        'flex-height' => true,
    ]);

    // Установка дефолтного логотипа при активации темы
    if (!get_theme_mod('custom_logo')) {
        $default_logo_path = get_template_directory() . '/assets/img/logo.png';
        $upload_dir = wp_upload_dir();
        $image_data = file_exists($default_logo_path) ? file_get_contents($default_logo_path) : false;

        if ($image_data) {
            $filename = basename($default_logo_path);
            if (wp_mkdir_p($upload_dir['path'])) {
                $file = $upload_dir['path'] . '/' . $filename;
            } else {
                $file = $upload_dir['basedir'] . '/' . $filename;
            }

            file_put_contents($file, $image_data);

            $wp_filetype = wp_check_filetype($filename, null);

            $attachment = [
                'post_mime_type' => $wp_filetype['type'],
                'post_title' => sanitize_file_name($filename),
                'post_content' => '',
                'post_status' => 'inherit',
            ];

            $attach_id = wp_insert_attachment($attachment, $file);
            require_once(ABSPATH . 'wp-admin/includes/image.php');

            $attach_data = wp_generate_attachment_metadata($attach_id, $file);
            wp_update_attachment_metadata($attach_id, $attach_data);

            set_theme_mod('custom_logo', $attach_id);
        }
    }

    // Импорт ACF полей при активации темы
    if (function_exists('acf_update_setting')) {
        $acf_json_path = get_stylesheet_directory() . '/assets/acf-json';

        // Проверяем существование директории
        if (is_dir($acf_json_path)) {
            // Получаем все JSON файлы
            $json_files = glob($acf_json_path . '/*.json');

            if (!empty($json_files)) {
                foreach ($json_files as $json_file) {
                    // Получаем содержимое JSON файла
                    $json_data = file_get_contents($json_file);

                    if ($json_data) {
                        $field_group = json_decode($json_data, true);

                        // Проверяем, существует ли уже группа полей
                        $existing = acf_get_field_group($field_group['key']);

                        if (!$existing) {
                            // Импортируем группу полей
                            acf_update_field_group($field_group);
                        }
                    }
                }
            }
        }
    }
});



// Разрешаем загрузку SVG файлов
add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});

// Исправляем проверку MIME типа для SVG файлов
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
    $filetype = wp_check_filetype($filename, $mimes);

    if ('svg' === $filetype['ext']) {
        $data['ext'] = 'svg';
        $data['type'] = 'image/svg+xml';
    }

    return $data;
}, 10, 4);
