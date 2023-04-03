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
    <div class="books__top_container">
        <h2 class="books__top_container-title">
            <?= the_title(); ?>
        </h2>
        <p class="books__top_container-content">
            <?= the_content(); ?>
        </p>
        <div>
            <!-- featured image of the page -->
            <!-- <?php the_post_thumbnail('medium_large', array('class' => 'books-thumbnail')); ?> -->
        </div>
    </div>
    <div class="books__gallery">
        <?php if (have_posts()) : ?>
            <div class="books__gallery_wrapper">
                <?php while ($latest_posts_query->have_posts()) :               $latest_posts_query->the_post();
                    get_template_part("parts/shared/post", "books"); ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>