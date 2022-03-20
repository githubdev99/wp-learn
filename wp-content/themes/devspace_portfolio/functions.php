<?php
// The Function
function loadStylesheets()
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

function loadJavascripts()
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

function globalData()
{
    global $core;

    $core['author'] = [
        'name' => (!empty(get_the_author_meta('display_name', 1))) ? get_the_author_meta('display_name', 1) : '',
        'email' => (!empty(get_the_author_meta('email', 1))) ? get_the_author_meta('email', 1) : '',
        'phoneNumber' => '',
        'profession' => '',
        'link' => [
            'facebook' => '',
            'instagram' => '',
            'linkedin' => '',
            'github' => '',
        ],
    ];

    if (!empty(get_the_author_meta('description', 1))) {
        $getAuthorDescription = json_decode(get_the_author_meta('description', 1), true);

        $core['author']['address'] = (array_key_exists('address', $getAuthorDescription)) ? $getAuthorDescription['address'] : '';
        $core['author']['phoneNumber'] = (array_key_exists('phoneNumber', $getAuthorDescription)) ? $getAuthorDescription['phoneNumber'] : '';
        $core['author']['profession'] = (array_key_exists('profession', $getAuthorDescription)) ? $getAuthorDescription['profession'] : '';

        if (array_key_exists('link', $getAuthorDescription)) {
            $core['author']['link']['facebook'] = (array_key_exists('facebook', $getAuthorDescription['link'])) ? $getAuthorDescription['link']['facebook'] : '';
            $core['author']['link']['instagram'] = (array_key_exists('instagram', $getAuthorDescription['link'])) ? $getAuthorDescription['link']['instagram'] : '';
            $core['author']['link']['linkedin'] = (array_key_exists('linkedin', $getAuthorDescription['link'])) ? $getAuthorDescription['link']['linkedin'] : '';
            $core['author']['link']['github'] = (array_key_exists('github', $getAuthorDescription['link'])) ? $getAuthorDescription['link']['github'] : '';
        }
    }

    return $core;
}

function setThemeSupport()
{
    add_theme_support('title-tag');
}

// Use Function
add_filter('show_admin_bar', '__return_false');
add_action('wp_enqueue_scripts', 'loadStylesheets');
add_action('wp_enqueue_scripts', 'loadJavascripts');
add_action('after_setup_theme', 'globalData');
add_action('after_setup_theme', 'setThemeSupport');
