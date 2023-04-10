<?php get_header(); ?>
<?php
$args = array(
    "post_type" => "photos",
    "orderby" => "date",
    "order" => "DESC",
);
$latest_posts_query = new WP_Query($args);
$categories = get_categories();
?>
<section class="photos">

    <h2 class="photos__title">
        <?= the_title(); ?>
    </h2>

    <article class="photos__top_container">

        <div class="photos__top_container-content">
            <?= the_content(); ?>
        </div>

        <div class="dropdown-container">
            <div class="dropdown-container-content">
                <div class="dropdown-select-container">
                    <div class="dropdown-select-placeholder">
                        <p>All our photos</p>
                        <img src="<?= get_template_directory_uri() ?>/assets/Arrow.svg">
                    </div>
                    <?php while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post() ?>
                        <?php
                        foreach ($categories as $key => $category) {
                        ?>
                            <a href="<?= the_permalink() ?>">
                                <div class="dropdown-select-item">
                                    <?= $category->name ?>
                                </div>
                            </a>
                        <?php
                        }
                        ?>
                        <!-- <a href="<?= the_permalink() ?>">
                            <div class="dropdown-select-item">
                                <?= the_title() ?>
                            </div>
                        </a> -->
                    <?php endwhile ?>
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

<?php
$args = array(
    "post_type" => "photos",
    "orderby" => "date",
    "order" => "DESC",
    "cat" => 11,
    // 'taxonomy' => 'dining-category',
);
$query = new WP_Query($args);
$posts = get_posts($query);
/* foreach ($cats as $cat) {
?>
    <a href="<?php echo get_category_link($cat->term_id) ?>">
        <?php echo $cat->name; ?>
    </a>
<?php
} */

// print_a(get_categories());
/* ?>
<a href=<?php get_category_link(11) ?>>America</a>
<?php */

// $posts = get_posts($args);
// print_a(get_posts($query));
// print_a(get_category_link(11));

while ($query->have_posts()) : $query->the_post();
    // get_template_part("parts/shared/post", "photos");

    foreach ($posts as $key => $value) {
        // print_a($value);
        // print_a(get_category($value->ID));
        // print_a($value->ID);
        // var_dump(get_posts());
        // print_a(get_the_tags());
        /* print_a(get_the_tags($value->ID));
        $tag_list = $tags = get_the_term_list($value->ID, 'custom-tag', '<ul class="snpt-tags"><li>', '</li><li>', '</li></ul>');
        print $tag_list; */
        // print_a(get_post($query));
    }
endwhile;
?>
<script src="<?= get_template_directory_uri() ?>/dropdown.js"></script>
<?php get_footer(); ?>