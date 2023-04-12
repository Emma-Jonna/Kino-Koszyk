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
        <?= strtoupper(get_the_title()); ?>
    </h2>

    <article class="books__top_container">
        <div class="books__top_container-content">
            <?= the_content(); ?>
        </div>
        <div class="dropdown-container">
            <div class="dropdown-container-content">
                <div class="dropdown-select-container">
                    <div class="dropdown-select-placeholder">
                        <p>All our books</p>
                        <img src="<?= get_template_directory_uri() ?>/assets/Arrow.svg">
                    </div>

                    <?php while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post() ?>
                        <a href="<?= the_permalink() ?>">
                            <div class="dropdown-select-item">
                                <?= the_title() ?>
                            </div>
                        </a>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
    </article>

</section>

<section class="books_gallery">

    <?php if (have_posts()) : ?>
        <div class="books_gallery__wrapper">
            <?php while ($latest_posts_query->have_posts()) :               $latest_posts_query->the_post();
                get_template_part("parts/shared/post", "books"); ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</section>

<script src="<?= get_template_directory_uri() ?>/dropdown.js"></script>
<?php get_footer(); ?>