<?php get_header(); ?>
<?php

$categories = get_categories();
$categoryId = 0;

if (isset($_GET["category_name"])) {

    foreach ($categories as $key => $category) {
        if ($_GET["category_name"] == $category->slug) {
            $categoryId = $category->term_id;
        }
    }

    $args = array(
        "post_type" => "photos",
        "orderby" => "date",
        "order" => "DESC",
        "cat" => $categoryId,
    );
} else {
    $args = array(
        "post_type" => "photos",
        "orderby" => "date",
        "order" => "DESC",
    );
}

$latest_posts_query = new WP_Query($args);
?>
<section class="photos">

    <h2 class="photos__title">
        <?= strtoupper(get_the_title()); ?>
    </h2>

    <article class="photos__top_container">

        <div class="photos__top_container-content">
            <?= the_content(); ?>
        </div>

        <div class="dropdown-container">
            <div class="dropdown-container-content">
                <div class="dropdown-select-container">
                    <div class="dropdown-select-placeholder">
                        <p>All our <?= strtolower(get_the_title()); ?></p>
                        <img src="<?= get_template_directory_uri() ?>/assets/Arrow.svg">
                    </div>
                    <?php
                    foreach ($categories as $key => $category) {
                        if ($category->name != "Uncategorised") {
                    ?>
                            <a href="<?= add_query_arg('category_name', $category->slug, 'http://kino-koszyk-new.local/photos') ?>">
                                <div class="dropdown-select-item">
                                    <?= $category->name ?>
                                </div>
                            </a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

    </article>

</section>

<section class="photos_gallery">

    <!-- -- LOOP ALL POSTS -- -->
    <!-- <?php if (have_posts()) : ?>
        <div class="photos_gallery__wrapper">
            <?php while ($latest_posts_query->have_posts()) :               $latest_posts_query->the_post();
                    get_template_part("parts/shared/post", "photos"); ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?> -->

    <!-- -- DESKTOP COLUMNS -- -->
    <?php if (have_posts()) : ?>
        <div class="photos_gallery__wrapper desktop_wrapper">
            <div class="photos_gallery__wrapper_column_1">
                <?php
                $i = 0;
                while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post();
                    if ($i % 3 == 0) : ?>
                        <?php
                        get_template_part("parts/shared/post", "photos");
                        ?>
                    <?php endif ?>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </div>
            <div class="photos_gallery__wrapper_column_2">
                <?php
                $i = 0;
                while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post();
                    if ($i % 3 == 1) : ?>
                        <?php
                        get_template_part("parts/shared/post", "photos");
                        ?>
                    <?php endif ?>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </div>
            <div class="photos_gallery__wrapper_column_3">
                <?php
                $i = 0;
                while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post();
                    if ($i % 3 == 2) : ?>
                        <?php
                        get_template_part("parts/shared/post", "photos");
                        ?>
                    <?php endif ?>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>

    <!-- -- MOBILE / TABLET COLUMNS -- -->
    <?php if (have_posts()) : ?>
        <div class="photos_gallery__wrapper mobile_wrapper">
            <div class="photos_gallery__wrapper_column_1">
                <?php
                $i = 0;
                while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post();
                    if ($i % 2 == 0) : ?>
                        <?php
                        get_template_part("parts/shared/post", "photos");
                        ?>
                    <?php endif ?>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </div>
            <div class="photos_gallery__wrapper_column_2">
                <?php
                $i = 0;
                while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post();
                    if ($i % 2 == 1) : ?>
                        <?php
                        get_template_part("parts/shared/post", "photos");
                        ?>
                    <?php endif ?>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
</section>
<script src="<?= get_template_directory_uri() ?>/dropdown.js"></script>
<?php get_footer(); ?>