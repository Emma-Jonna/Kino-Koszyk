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
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/header.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/single.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/dropdown.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/global.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/joanna.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/photos.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/books.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/films.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/typography.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/about.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/contact.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/footer.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/news.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat">
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <header>
        <div class="test">
            <a class="mobile-logo" href="<?= home_url() ?>"><img class="mobile-logo" src="<?= get_template_directory_uri() ?>/assets/Kino-Koszyk-mobile-logo.svg"></a>
            <button class="hamburger">
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
            </button>
        </div>
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

                            <a class="nav__list_item nav__list_item_<?= $item->post_name ?>" title="<?= $item->title; ?>" href="<?= $item->url; ?>">
                                <img class="nav__page_indicator" src="<?= get_template_directory_uri() ?>/assets/active-page-indicator.svg" alt="Selected Page Indicator">
                                <?= strtoupper($item->title); ?>
                            </a>

                            <!-- The elseif below does not seem to work (line 61-64) -->
                        <?php elseif ($item->post_name === "joanna-helander" && $post->post_title === "Joanna Helander") : ?>
                            <a class="nav__list_item nav__list_item_<?= $item->post_name ?> active" title="<?= $item->title; ?>" href="<?= $item->url; ?>">
                                <?= strtoupper($item->title); ?>
                            </a>

                        <?php elseif ($item->title === "Joanna Helander") : ?>
                            <a class="nav__list_item nav__list_item_<?= $item->post_name ?>" title="<?= $item->title; ?>" href="<?= $item->url; ?>">
                                <p><?= strtoupper($item->title); ?></p>
                                <svg class="menu-arrow" width="28" height="17" viewBox="0 0 28 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path id="menu-arrow" d="M2 2L14 14L26 2" stroke="#1F1D19" stroke-width="3" stroke-linecap="round" />
                                </svg>
                            </a>

                        <?php elseif ($item->title != "Joanna Helander" && $item->post_name === $post->post_type) : ?>
                            <a class="nav__list_item nav__list_item_<?= $item->post_name ?>" title="<?= $item->title; ?>" href="<?= $item->url; ?>">
                                <img class="nav__page_indicator" src="<?= get_template_directory_uri() ?>/assets/active-page-indicator.svg" alt="Selected Page Indicator">
                                <?= strtoupper($item->title); ?>
                            </a>
                        <?php elseif ($item) : ?>
                            <a class="nav__list_item nav__list_item_<?= $item->post_name ?>" title="<?= $item->title; ?>" href="<?= $item->url; ?>">
                                <?= strtoupper($item->title); ?>
                            </a>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
    <main>