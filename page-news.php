<?php get_header(); ?>
<?php
$args = array(
    "post_type" => "news",
    "orderby" => "date",
    "order" => "DESC",
);
$latest_posts_query = new WP_Query($args);

?>
<section class="news">
    <div class="news__top_container">
        <a class="news_single__header-redirect" href="<?= home_url() ?>">
            Back </a>
        <h2 class="news__top_container-title">
            <?= the_title(); ?>
        </h2>
        <p class="news__top_container-content">
            <?= the_content(); ?>
        </p>
        <div>
            <!-- featured image of the page -->
            <!-- <?php the_post_thumbnail('medium_large', array('class' => 'news-thumbnail')); ?> -->
        </div>
    </div>
    <div class="news__gallery">
        <?php if (have_posts()) : ?>
            <div class="news__gallery_wrapper">
                <?php while ($latest_posts_query->have_posts()) :               $latest_posts_query->the_post();
                    get_template_part("parts/shared/post", "news");
                ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>