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
    <div class="top-container">
        <h2>
            <?= the_title(); ?>
        </h2>
        <p>
            <?= the_content(); ?>
        </p>
        <div>
            <!-- featured image of the page -->
            <!-- <?php the_post_thumbnail('medium_large', array('class' => 'films-thumbnail')); ?> -->
        </div>
    </div>
    <div class="gallery">
        <?php if (have_posts()) : ?>
            <div class="gallery-wrapper">
                <?php while ($latest_posts_query->have_posts()) :               $latest_posts_query->the_post();
                    get_template_part("parts/shared/post", "films"); ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>