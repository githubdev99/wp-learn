<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <!-- Meta Data -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= wp_title('') ?> | <?= bloginfo('name'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= get_template_directory_uri() ?>/assets/media/favicon.png">

    <?php wp_head() ?>
</head>

<body class="sticky-header">