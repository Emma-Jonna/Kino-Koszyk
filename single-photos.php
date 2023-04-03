<?php get_header(); ?>
<?php
$redirectToPostType = "/" . $post->post_type;

$args = array(
    "post_type" => "photos",
    "posts_per_page" => 1,
    "orderby" => "date",
    "order" => "DESC",
);
$latest_posts_query = new WP_Query($args);

?>
<!-- <?php print_a($post) ?> -->
<section class="photo_single">
    <?php if ($latest_posts_query->have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <div class="photo_single__header">
                    <!-- Insert BACK navigation here inside a tag. Remove hard coded href -->
                    <a class="photo_single__header-redirect" href="<?= $redirectToPostType ?>">
                        < </a>
                            <h2 class="photo_single__header-title"><?php the_title(); ?></h2>
                </div>
                <div class="photo_single__content_wrapper">
                    <div class="photo_single__content_wrapper-img_wrapper">
                        <!-- featured image of the page -->
                        <?php the_post_thumbnail('medium_large', array('class' => 'photo-thumbnail')); ?>
                    </div>
                    <div class="photo_single__content_wrapper-content">
                        <!-- the page content here -->
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <div class="photo_single__post_navigation">
                <?php next_post_link('%link', __('<')); ?>
                <?php previous_post_link('%link', __('>')); ?>
            </div>
            </article>
        <?php endif; ?>
</section>
<?php get_footer(); ?>