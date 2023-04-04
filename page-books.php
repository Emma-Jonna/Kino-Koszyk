<?php get_header(); ?>
<?php
$args = array(
    "post_type" => "books",
    "orderby" => "date",
    "order" => "DESC",
);
$latest_posts_query = new WP_Query($args);
?>
<section class="books">

    <h2 class="books__title">
        <?= the_title(); ?>
    </h2>

    <article class="books__top_container">
        <p class="books__top_container-content">
            <?= the_content(); ?>
        </p>
        <div>
            <!-- DROP DOWN HERE -->
        </div>
    </article>

</section>

<section class="books books_gallery">

    <?php if (have_posts()) : ?>
        <div class="books_gallery__wrapper">
            <?php while ($latest_posts_query->have_posts()) :               $latest_posts_query->the_post();
                get_template_part("parts/shared/post", "books"); ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</section>

<?php get_footer(); ?>