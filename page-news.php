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

    <a class="news__redirect" href="<?= home_url() ?>">
        Back
    </a>
    <h2 class="news__title">
        <?= the_title(); ?>
    </h2>

</section>

<section class="news news_gallery">

    <?php if (have_posts()) : ?>
        <div class="news_gallery__wrapper">
            <?php while ($latest_posts_query->have_posts()) :               $latest_posts_query->the_post();
                get_template_part("parts/shared/post", "news");
            ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</section>

<?php get_footer(); ?>