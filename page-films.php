<?php get_header(); ?>
<?php
$args = array(
    "post_type" => "films",
    "orderby" => "date",
    "order" => "DESC",
);
$latest_posts_query = new WP_Query($args);
?>
<section class="films">
    <div class="films__top_container">
        <h2 class="films__top_container-title">
            <?= the_title(); ?>
        </h2>
        <p class="films__top_container-content">
            <?= the_content(); ?>
        </p>
        <div>
            <!-- featured image of the page -->
            <!-- <?php the_post_thumbnail('medium_large', array('class' => 'films-thumbnail')); ?> -->
        </div>
    </div>
    <div class="films__gallery">
        <?php if (have_posts()) : ?>
            <div class="films__gallery_wrapper">
                <?php while ($latest_posts_query->have_posts()) :               $latest_posts_query->the_post();
                    get_template_part("parts/shared/post", "films"); ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>