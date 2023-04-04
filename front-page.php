<?php
$args = array(
    "post_type" => "page",
    "orderby" => "date",
    "order" => "DESC",
);
$getHeroImages = new WP_Query($args);

$args = array(
    "post_type" => "news",
    "post_per_page" => 3,
    "orderby" => "date",
    "order" => "DESC",
);
$latest_posts_query = new WP_Query($args);
?>
<?php get_header() ?>
<section class="home">
    <div class="home__hero">
        <?php if (have_posts()) : ?>
            <div class="hero__hero-carousel">
                <div class="slideshow-section">
                    <div class="slideshow-wrapper">
                        <?php while ($getHeroImages->have_posts()) :               $getHeroImages->the_post();
                            get_template_part("parts/shared/post", "hero");
                        ?>
                        <?php endwhile; ?>
                        <!-- <?php get_template_part("parts/shared/post", "slideshow"); ?> -->
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<section class="home_news">
    <a class="home_news-link" href="/news">News</a>
    <?php if (have_posts()) : ?>
        <!-- <div class="hero_news-wrapper"> -->
        <?php while ($latest_posts_query->have_posts()) :               $latest_posts_query->the_post();
            get_template_part("parts/shared/post", "news"); ?>
        <?php endwhile; ?>
        <!-- </div> -->
    <?php endif; ?>
</section>
<?php get_footer() ?>