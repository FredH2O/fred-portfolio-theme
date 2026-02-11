<?php

function fred_enqueue_styles()
{
    // Google font
    wp_enqueue_style(
        'fred-google-fonts',
        'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel=',
        array(),
        null,
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
        get_template_directory_uri() . '/assets/css/component.css',
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
