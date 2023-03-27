<?php 

function register_theme_menus()
{
    register_nav_menus(array(
        'nav-menu' => __('Navigation Menu')
    ));
}
add_action('init', 'register_theme_menus');

function print_a($data)
{
?>
    <pre class="block p-6 m-6 border border-brown rounded-xl text-xs overflow-hidden"><code><?php print_r($data); ?></code></pre>
<?php
}