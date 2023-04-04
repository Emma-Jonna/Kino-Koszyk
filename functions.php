<?php

add_action("init", function () {
    $array = ["books", "photos", "films"];
    foreach ($array as $key) {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_post_type_support($key, 'thumbnail');
    }
});

add_action("init", function () {
    add_theme_support('news', 'title-tag');
});


function register_theme_menus()
{
    register_nav_menus(array(
        'nav-menu' => __('Navigation Menu'),
    ));
}
add_action('init', 'register_theme_menus');

add_action("init", function () {
    // _____ Films _____
    register_post_type("films", array(
        "labels" => array(
            "name" => __("Films"),
            "singular_name" => __("Films"),
        ),
        "public" => true,
        "has_archive" => false,
        'rewrite' => array('slug' => 'films'),
        "menu_icon" => "dashicons-video-alt",
    ));
    // _____ Photos _____
    register_post_type("photos", array(
        "labels" => array(
            "name" => __("Photos"),
            "singular_name" => __("Photos"),
        ),
        "public" => true,
        "has_archive" => false,
        'rewrite' => array('slug' => 'photos'),
        "menu_icon" => "dashicons-camera",
    ));
    // _____ Books _____
    register_post_type("books", array(
        "labels" => array(
            "name" => __("Books"),
            "singular_name" => __("Books"),
        ),
        "public" => true,
        "has_archive" => false,
        'rewrite' => array('slug' => 'books'),
        "menu_icon" => "dashicons-book",

    ));
    // _____ News _____
    register_post_type("news", array(
        "labels" => array(
            "name" => __("News"),
            "singular_name" => __("News"),
        ),
        "public" => true,
        "has_archive" => false,
        'rewrite' => array('slug' => 'news'),
        "menu_icon" => "dashicons-thumbs-down",

    ));
});

function print_a($data)
{
?>
    <pre class="block p-6 m-6 border border-brown rounded-xl text-xs overflow-hidden"><code><?php print_r($data); ?></code></pre>
<?php
}

add_action("init", function () {
    add_theme_support("widgets");
});

add_action("init", function () {
    register_sidebar(array(
        "name" => ("Footer Contact Section"),
        "id" => "footer-contact",
        "description" => "Changes the contact content of the footer"
    ));
    register_sidebar(array(
        "name" => ("Footer Address Section"),
        "id" => "footer-address",
        "description" => "Changes the text content of the footer"
    ));
});

add_action("wp_enqueue_scripts", function () {
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/footer.css', false, "1.0", "all" );
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/header.css', false, "1.0", "all" );
});