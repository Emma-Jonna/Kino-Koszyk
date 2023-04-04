<?php get_header(); ?>
<?php
$args = array(
    "post_type" => "photos",
    "orderby" => "date",
    "order" => "DESC",
);
$latest_posts_query = new WP_Query($args);
?>
<section class="photos">

    <h2 class="photos__title">
        <?= the_title(); ?>
    </h2>

    <article class="photos__top_container">
        <p class="photos__top_container-content">
            <?= the_content(); ?>
        </p>
        <div>
            <!-- DROP DOWN HERE -->
        </div>
    </article>

</section>

<section class="photos photos_gallery">

    <?php if (have_posts()) : ?>
        <div class="photos_gallery__wrapper">
            <?php while ($latest_posts_query->have_posts()) :               $latest_posts_query->the_post();
                get_template_part("parts/shared/post", "photos"); ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</section>

<?php get_footer(); ?>