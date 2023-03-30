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
    <div>
        <h2>
            <?= the_title(); ?>
        </h2>
        <p>
            <?= the_content(); ?>
        </p>
        <div>
            <!-- featured image of the page -->
            <!-- <?php the_post_thumbnail('medium_large', array('class' => 'test-class')); ?> -->
        </div>
    </div>
    <div class="gallery">

    </div>
</section>

<?php if (have_posts()) : ?>
    <div class="gallery-wrapper">
        <?php while ($latest_posts_query->have_posts()) :               $latest_posts_query->the_post();
            get_template_part("parts/shared/post", "books"); ?>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
<?php get_footer(); ?>