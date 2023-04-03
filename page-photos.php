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
    <div class="photos__gallery_wrapper">
        <h2 class="photos__gallery_wrapper-title">
            <?= the_title(); ?>
        </h2>
        <p class="photos__gallery_wrapper-content">
            <?= the_content(); ?>
        </p>
        <div>
            <!-- featured image of the page -->
            <!-- <?php the_post_thumbnail('medium_large', array('class' => 'photos-thumbnail')); ?> -->
        </div>
    </div>
    <div class="photos__gallery">
        <?php if (have_posts()) : ?>
            <div class="photos__gallery_wrapper">
                <?php while ($latest_posts_query->have_posts()) :               $latest_posts_query->the_post();
                    get_template_part("parts/shared/post", "photos"); ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>