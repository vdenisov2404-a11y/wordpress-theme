<?php
/**
 * файл функций для WordPress-темы.
 */
if (!defined('_S_VERSION')) {
    // задаём версию темы. 
    define('_S_VERSION', '1.0.0');
}

/**
 * настройка темы по умолчанию и регистрация поддержки различных функций WordPress.
 */
function example_theme_setup()
{
    // делаем тему доступной для перевода.
    load_theme_textdomain('example_theme', get_template_directory() . '/languages');

    // добавляем RSS-ленты записей и комментариев в раздел <head>.
    add_theme_support('automatic-feed-links');

    // позволяем WordPress управлять заголовком страницы.
    add_theme_support('title-tag');

    // поддержка миниатюр записей.
    add_theme_support('post-thumbnails');

    // регистрация области меню.
    register_nav_menus(
        array(
            'primary' => esc_html__('Основное меню', 'example_theme'),
        )
    );

    // переключение разметки ядра WordPress на HTML5 для форм поиска, комментариев и других элементов.
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // поддержка селективного обновления для виджетов.
    add_theme_support('customize-selective-refresh-widgets');

    // поддержка кастомного логотипа.
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'example_theme_setup');

/**
 * установка ширины контента в пикселях на основе дизайна и стилей темы.
 */
function example_theme_content_width()
{
    $GLOBALS['content_width'] = apply_filters('example_theme_content_width', 640);
}
add_action('after_setup_theme', 'example_theme_content_width', 0);

/**
 * регистрация области для виджетов.
 */
function example_theme_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Боковая панель', 'example_theme'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Добавьте сюда виджеты.', 'example_theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'example_theme_widgets_init');

/**
 * подключение стилей и скриптов.
 */
function example_theme_scripts()
{
    // подключаем основной файл стилей.
    wp_enqueue_style(
        'example-theme-style',
        get_template_directory_uri() . '/css/main.css',
        array(),
        filemtime(get_template_directory() . '/css/main.css')
    );

  
}
add_action('wp_enqueue_scripts', 'example_theme_scripts');
