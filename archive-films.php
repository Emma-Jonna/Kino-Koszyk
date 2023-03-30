<?php get_header(); ?>

<div>
    <?php if (have_posts()) : ?>
        <?php print_a($post); ?>
        <!-- Display products in grid using the loop and get_template_part -->
        <!-- <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part("parts/shared/post", "card"); ?>
        <?php endwhile; ?> -->

        <div>
            <!-- Start the pagination functions after the loop. -->
            <div>
                <?php previous_posts_link('Newer posts 👉'); ?>
            </div>
            <div>
                <?php next_posts_link('👈 Older posts'); ?>
            </div>
            <!-- End the pagination functions after the loop. -->
        </div>

    <?php endif; ?>


    <?php
    $args = array(
        "post_type" => "films",
        "posts_per_page" => 3,
        "orderby" => "date",
        "order" => "DESC",
    );

    $latest_posts_query = new WP_Query($args);

    if ($latest_posts_query->have_posts()) : ?>
        <div>
            <div>
                <h2><?php the_title(); ?></h2>
                <a href="<?= get_permalink(get_option('page_for_posts')); ?>">Read more news 👉</a>
            </div>
            <?php while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post();
                get_template_part("parts/shared/post", "card"); ?>
            <?php endwhile; ?>
        </div>
    <?php endif;
    ?>

</div>

<?php get_footer(); ?>