<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Load Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@500&family=DM+Sans:wght@500&family=Oi&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/home.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/header.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/single.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/global.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/joanna.css">
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <header>
        <nav>
            <div>
                <a class="logo" href="<?= home_url() ?>">
                    <img src="<?= get_template_directory_uri() ?>/assets/Kino-Koszyk-logo.svg" alt="Logo">
                    <h1>KINO KOSZYK</h1>
                </a>
            </div>
            <ul>
                <?php
                $nav_menu = wp_get_nav_menu_items('Navigation Menu');
                if ($nav_menu) foreach ($nav_menu as $item) : ?>
                    <li>
                        <?php if ($item->title != "Joanna Helander" && $item->post_title == $post->post_title) : ?>
                            <a class="nav__list_item <?= $item->post_name ?>" title="<?= $item->title; ?>" href="<?= $item->url; ?>">
                                <img class="nav__page_indicator" src="<?= get_template_directory_uri() ?>/assets/active-page-indicator.svg" alt="Active page indicator">
                                <?= $item->title; ?>
                            </a>
                        <?php elseif ($item->post_name === "joanna-helander" && $post->post_title === "Joanna Helander") : ?>
                            <a class="nav__list_item <?= $item->post_name ?> active" title="<?= $item->title; ?>" href="<?= $item->url; ?>">
                                <?= $item->title; ?>
                            </a>
                        <?php elseif ($item) : ?>
                            <a class="nav__list_item <?= $item->post_name ?>" title="<?= $item->title; ?>" href="<?= $item->url; ?>">
                                <?= $item->title; ?>
                            </a>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
    <main>