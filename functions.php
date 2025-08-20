<?php
/**
 * Example theme functions and definitions
 *
 * This file demonstrates how to register theme support, enqueue styles and scripts,
 * and set up basic WordPress features.
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function example_theme_setup()
{
    // Make theme available for translation.
    load_theme_textdomain('example_theme', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Register navigation menus.
    register_nav_menus(
        array(
            'primary' => esc_html__('Primary Menu', 'example_theme'),
        )
    );

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
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

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for core custom logo.
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
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function example_theme_content_width()
{
    $GLOBALS['content_width'] = apply_filters('example_theme_content_width', 640);
}
add_action('after_setup_theme', 'example_theme_content_width', 0);

/**
 * Register widget area.
 */
function example_theme_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'example_theme'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'example_theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'example_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function example_theme_scripts()
{
    // Enqueue main stylesheet.
    wp_enqueue_style(
        'example-theme-style',
        get_template_directory_uri() . '/css/main.css',
        array(),
        filemtime(get_template_directory() . '/css/main.css')
    );

    // Example: Enqueue a script.
    // wp_enqueue_script(
    //     'example-theme-script',
    //     get_template_directory_uri() . '/js/main.js',
    //     array(),
    //     _S_VERSION,
    //     true
    // );
}
add_action('wp_enqueue_scripts', 'example_theme_scripts');
