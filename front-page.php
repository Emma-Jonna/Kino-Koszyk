<?php
$args = array(
    "post_type" => "page",
    "orderby" => "date",
    "order" => "DESC",
);
$getHeroImages = new WP_Query($args);

$news = array(
    "post_type" => "news",
    "posts_per_page" => 3,
    "orderby" => "date",
    "order" => "DESC",
);
$latest_posts_query = new WP_Query($news);
?>
<?php get_header() ?>
<section class="home">
    <div class="home__hero">
        <?php get_template_part("parts/shared/post", "slideshow"); ?>
    </div>
</section>
<section class="home_news">
    <h2 class="home-page-news">News</h2>
    <?php if (have_posts()) : ?>
        <?php while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post();
            get_template_part("parts/shared/post", "news"); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <div class="read-more-news">
        <a class="home_news-link" href="/news">Read more news</a>
        <div class="read-more-news-arrow">
            <img src="<?= get_template_directory_uri() ?>/assets/Arrow-strong.svg" alt="">
        </div>
    </div>
</section>
<?php get_footer() ?>