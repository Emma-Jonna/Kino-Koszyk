<?php



add_action("init", function () {
    $array = ["books", "photos", "news", "films"];
    foreach ($array as $key) {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_post_type_support($key, 'thumbnail');
    }
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
