<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Load Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@500&family=DM+Sans:wght@500&family=Oi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/header.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css">
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <header>
        <nav>
            <img src="<?= get_template_directory_uri() ?>/assets/Kino-Koszyk-logo.svg" alt="Logo">
            <ul>
                <?php
                $nav_menu = wp_get_nav_menu_items('Navigation Menu');
                if ($nav_menu) foreach ($nav_menu as $item) : ?>
                    <li>
                        <a title="<?= $item->title; ?>" href="<?= $item->url; ?>">
                            <?= $item->title; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>