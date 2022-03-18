<?php

// The Function
function load_stylesheets()
{
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/assets/css/vendor/bootstrap.min.css", [], $theme_version);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . "/assets/css/vendor/font-awesome.css", [], $theme_version);
    wp_enqueue_style('slick', get_template_directory_uri() . "/assets/css/vendor/slick.css", [], $theme_version);
    wp_enqueue_style('slick-theme', get_template_directory_uri() . "/assets/css/vendor/slick-theme.css", [], $theme_version);
    wp_enqueue_style('sal', get_template_directory_uri() . "/assets/css/vendor/sal.css", [], $theme_version);
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . "/assets/css/vendor/magnific-popup.css", [], $theme_version);
    wp_enqueue_style('green-audio-player', get_template_directory_uri() . "/assets/css/vendor/green-audio-player.min.css", [], $theme_version);
    wp_enqueue_style('odometer-theme-default', get_template_directory_uri() . "/assets/css/vendor/odometer-theme-default.css", [], $theme_version);
    wp_enqueue_style('app', get_template_directory_uri() . "/assets/css/app.css", [], $theme_version);
    wp_enqueue_style('custom', get_template_directory_uri() . "/assets/css/custom.css", [], $theme_version);
}

// The Action
add_filter('show_admin_bar', '__return_false');
add_action('wp_enqueue_scripts', 'load_stylesheets');
