<?php
// The Function
function load_stylesheets()
{
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'bootstrap',
        get_template_directory_uri() . "/assets/css/vendor/bootstrap.min.css",
        [],
        $theme_version,
    );
    wp_enqueue_style(
        'font-awesome',
        get_template_directory_uri() . "/assets/css/vendor/font-awesome.css",
        [],
        $theme_version,
    );
    wp_enqueue_style(
        'slick',
        get_template_directory_uri() . "/assets/css/vendor/slick.css",
        [],
        $theme_version,
    );
    wp_enqueue_style(
        'slick-theme',
        get_template_directory_uri() . "/assets/css/vendor/slick-theme.css",
        [],
        $theme_version,
    );
    wp_enqueue_style(
        'sal',
        get_template_directory_uri() . "/assets/css/vendor/sal.css",
        [],
        $theme_version,
    );
    wp_enqueue_style(
        'magnific-popup',
        get_template_directory_uri() . "/assets/css/vendor/magnific-popup.css",
        [],
        $theme_version,
    );
    wp_enqueue_style(
        'green-audio-player',
        get_template_directory_uri() . "/assets/css/vendor/green-audio-player.min.css",
        [],
        $theme_version,
    );
    wp_enqueue_style(
        'odometer-theme-default',
        get_template_directory_uri() . "/assets/css/vendor/odometer-theme-default.css",
        [],
        $theme_version,
    );
    wp_enqueue_style(
        'app',
        get_template_directory_uri() . "/assets/css/app.css",
        [],
        $theme_version,
    );
    wp_enqueue_style(
        'custom',
        get_template_directory_uri() . "/assets/css/custom.css",
        [],
        $theme_version,
    );
}

function load_javascripts()
{
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_script(
        'jquery',
        get_template_directory_uri() . "/assets/js/vendor/jquery-3.6.0.min.js",
        [],
        $theme_version,
        true
    );
    wp_enqueue_script(
        'bootstrap',
        get_template_directory_uri() . "/assets/js/vendor/bootstrap.min.js",
        [],
        $theme_version,
        true
    );
    wp_enqueue_script(
        'isotope',
        get_template_directory_uri() . "/assets/js/vendor/isotope.pkgd.min.js",
        [],
        $theme_version,
        true
    );
    wp_enqueue_script(
        'imagesloaded',
        get_template_directory_uri() . "/assets/js/vendor/imagesloaded.pkgd.min.js",
        [],
        $theme_version,
        true
    );
    wp_enqueue_script(
        'odometer',
        get_template_directory_uri() . "/assets/js/vendor/odometer.min.js",
        [],
        $theme_version,
        true
    );
    wp_enqueue_script(
        'jquery-appear',
        get_template_directory_uri() . "/assets/js/vendor/jquery-appear.js",
        [],
        $theme_version,
        true
    );
    wp_enqueue_script(
        'slick',
        get_template_directory_uri() . "/assets/js/vendor/slick.min.js",
        [],
        $theme_version,
        true
    );
    wp_enqueue_script(
        'sal',
        get_template_directory_uri() . "/assets/js/vendor/sal.js",
        [],
        $theme_version,
        true
    );
    wp_enqueue_script(
        'jquery.magnific-popup',
        get_template_directory_uri() . "/assets/js/vendor/jquery.magnific-popup.min.js",
        [],
        $theme_version,
        true
    );
    wp_enqueue_script(
        'js.cookie',
        get_template_directory_uri() . "/assets/js/vendor/js.cookie.js",
        [],
        $theme_version,
        true
    );
    wp_enqueue_script(
        'jquery.style.switcher',
        get_template_directory_uri() . "/assets/js/vendor/jquery.style.switcher.js",
        [],
        $theme_version,
        true
    );
    wp_enqueue_script(
        'jquery.countdown',
        get_template_directory_uri() . "/assets/js/vendor/jquery.countdown.min.js",
        [],
        $theme_version,
        true
    );
    wp_enqueue_script(
        'tilt',
        get_template_directory_uri() . "/assets/js/vendor/tilt.js",
        [],
        $theme_version,
        true
    );
    wp_enqueue_script(
        'green-audio-player',
        get_template_directory_uri() . "/assets/js/vendor/green-audio-player.min.js",
        [],
        $theme_version,
        true
    );
    wp_enqueue_script(
        'jquery.nav',
        get_template_directory_uri() . "/assets/js/vendor/jquery.nav.js",
        [],
        $theme_version,
        true
    );
    wp_enqueue_script(
        'app',
        get_template_directory_uri() . "/assets/js/app.js",
        [],
        $theme_version,
        true
    );
    wp_enqueue_script(
        'custom',
        get_template_directory_uri() . "/assets/js/custom.js",
        [],
        $theme_version,
        true
    );
}

function setup_theme()
{
    add_theme_support('title-tag');
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
    ));
}

// Use Function
add_filter('show_admin_bar', '__return_false');
add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'load_javascripts');
add_action('after_setup_theme', 'setup_theme');

// Add Function Outside
require_once get_template_directory() . "/inc/get-history-projects.php";
require_once get_template_directory() . "/inc/get-history-companies.php";
require_once get_template_directory() . "/inc/get-vendor.php";
