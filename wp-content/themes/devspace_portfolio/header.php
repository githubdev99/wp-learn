<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <!-- Meta Data -->
    <meta charset="<?php get_bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= get_template_directory_uri() ?>/assets/media/favicon.png">

    <!-- Stylesheets -->
    <?php wp_head() ?>
</head>

<body class="sticky-header <?= get_field('color_mode', 'options') ?>">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->
    <a href="#main-wrapper" id="backto-top" class="back-to-top">
        <i class="far fa-angle-double-up"></i>
    </a>

    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->

    <?php if (!is_404()) : ?>
        <!--=====================================-->
        <!--=       Offcanvas Menu Area       	=-->
        <!--=====================================-->
        <div class="offcanvas offcanvas-end header-offcanvasmenu" tabindex="-1" id="offcanvasMenuRight">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <!-- <form action="#" class="side-nav-search-form">
                    <div class="form-group">
                        <input type="text" class="search-field" name="search-field" placeholder="Search...">
                        <button class="side-nav-search-btn"><i class="fas fa-search"></i></button>
                    </div>
                </form> -->
                <div class="row ">
                    <div class="col-lg-5 col-xl-6">
                        <div class="contact-info-wrap">
                            <div class="contact-inner">
                                <address class="address">
                                    <span class="title">Contact Information</span>
                                    <p><?= get_field('address', 'options') ?></p>
                                </address>
                                <address class="address">
                                    <span class="title">Available 24/7. Call Now.</span>
                                    <a class="tel" href="tel:<?= get_field('phone_number', 'options') ?>" target="_blank"><i class="fas fa-phone"></i><?= get_field('phone_number', 'options') ?></a>
                                    <a class="tel" href="mailto:<?= get_field('email', 'options') ?>" target="_blank"><i class="fas fa-envelope"></i><?= get_field('email', 'options') ?></a>
                                </address>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-6">
                        <div class="contact-inner">
                            <h5 class="title">Find me here</h5>
                            <div class="contact-social-share">
                                <ul class="social-share list-unstyled">
                                    <?php foreach (get_field('social_media', 'options') as $key_social_media) : ?>
                                        <li><a href="<?= $key_social_media['link']['url'] ?>" target="<?= $key_social_media['link']['target'] ?>"><i class="<?= $key_social_media['icon_class'] ?>"></i></a></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="main-wrapper" class="main-wrapper">
            <!--=====================================-->
            <!--=        Header Area Start       	=-->
            <!--=====================================-->
            <header class="header axil-header header-style-3">
                <div id="axil-sticky-placeholder"></div>
                <div class="axil-mainmenu">
                    <div class="container">
                        <div class="header-navbar">
                            <div class="header-logo">
                                <a href="<?= home_url() ?>"><img class="light-version-logo" src="<?= get_template_directory_uri() ?>/assets/media/new-logo.svg" alt="logo"></a>
                                <a href="<?= home_url() ?>"><img class="dark-version-logo" src="<?= get_template_directory_uri() ?>/assets/media/new-logo-3.svg" alt="logo"></a>
                                <a href="<?= home_url() ?>"><img class="sticky-logo" src="<?= get_template_directory_uri() ?>/assets/media/new-logo-2.svg" alt="logo"></a>
                            </div>
                            <div class="header-action">
                                <ul class="list-unstyled">
                                    <li class="header-social-link">
                                        <ul class="social-icon-list list-unstyled">
                                            <?php foreach (get_field('social_media', 'options') as $key_social_media) : ?>
                                                <li><a href="<?= $key_social_media['link']['url'] ?>" target="<?= $key_social_media['link']['target'] ?>"><i class="<?= $key_social_media['icon_class'] ?>"></i></a></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </li>
                                    <li class="sidemenu-btn">
                                        <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenuRight">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </button>
                                    </li>
                                    <li class="my_switcher d-block d-lg-none">
                                        <ul>
                                            <li title="Light Mode">
                                                <a href="javascript:void(0)" class="setColor light" data-theme="light">
                                                    <i class="fal fa-lightbulb-on"></i>
                                                </a>
                                            </li>
                                            <li title="Dark Mode">
                                                <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                                                    <i class="fas fa-moon"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        <?php endif ?>