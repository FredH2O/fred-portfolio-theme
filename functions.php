<?php

function fred_enqueue_styles()
{
    // Google font
    wp_enqueue_style(
        'fred-google-fonts',
        'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'fred-base',
        get_template_directory_uri() . '/assets/css/base.css',
        array(),
        '1.0',
        'all'
    );

    wp_enqueue_style(
        'fred-layout',
        get_template_directory_uri() . '/assets/css/layout.css',
        array('fred-base'),
        '1.0',
        'all'
    );

    wp_enqueue_style(
        'fred-components',
        get_template_directory_uri() . '/assets/css/components.css',
        array('fred-base', 'fred-layout'),
        '1.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'fred_enqueue_styles');
function fred_portfolio_menus()
{
    register_nav_menu('primary', __('Primary Menu', 'fred-portfolio'));
}
add_action('after_setup_theme', 'fred_portfolio_menus');

function fred_enqueue_scripts()
{
    wp_enqueue_script(
        'fred-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'fred_enqueue_scripts');

// theme supports
function fred_theme_setup()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);
    add_theme_support('automatic-feed-links');
    add_theme_support('responsive-embeds');
    add_image_size('about-image', 1200, 600, true);
}

add_action('after_setup_theme', 'fred_theme_setup');

// custom post type - learning
function register_learning_cpt()
{
    $labels = array(
        'name' => 'Learnings',
        'singular_name' => 'Learning',
        'add_new' => 'Add New Learning',
        'add_new_item' => 'Add New Learning Item',
        'edit_item' => 'Edit Learning',
        'new_item' => 'New Learning',
        'view_item' => 'View Learning',
        'not_found_in_trash' => 'No Learning Found in Trash'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'rewrite' => array('slug' => 'learning'),
        'supports' => array('title', 'thumbnail'),
        'show_in_rest' => false
    );

    register_post_type('learning', $args);
}

add_action('init', 'register_learning_cpt');

function learning_archive_posts_per_page($query)
{
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('learning')) {
        $query->set('posts_per_page', 2);
        $query->set('orderby', 'date');
        $query->set('order', 'DESC'); // newest first
    }
}

add_action('pre_get_posts', 'learning_archive_posts_per_page');
