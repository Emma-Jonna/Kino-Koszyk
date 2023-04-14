<?php get_header(); ?>
<?php
$redirectToPostType = "/" . $post->post_type;

$args = array(
    "post_type" => "news",
    "posts_per_page" => 1,
    "orderby" => "date",
    "order" => "DESC",
);
$latest_posts_query = new WP_Query($args);

?>
<!-- <?php print_a($post) ?> -->
<section class="news_single single">
    <?php if ($latest_posts_query->have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <div class="news_single__header">
                    <a class="news_single__header-redirect" href="<?= $redirectToPostType ?>">
                        <img src="<?= get_template_directory_uri() ?>/assets/redirect-arrow.svg" alt="Arrow svg icon">
                    </a>
                    <h2 class="films_single__header-title"><?= ucfirst($post->post_type) ?></h2>
                </div>

                <div class="news_single__content_wrapper">
                    <div class="news_single__content_wrapper-img_wrapper">
                        <!-- featured image of the page -->
                        <?php the_post_thumbnail('medium_large', array('class' => 'news-thumbnail')); ?>
                        <!-- <?php get_template_part("parts/shared/post", "news"); ?> -->
                    </div>
                    <div class="news_single__content_wrapper-content">
                        <!-- the page content here -->
                        <p><?php the_title(); ?></p>
                        <?php the_content(); ?>
                        <p>
                            Posted <?php echo get_the_date("F j Y"); ?>
                        </p>
                    </div>
                </div>
                </div>

                <div class="books_single__post_navigation">
                    <div class="navigation_container">
                        <?php next_post_link('%link', '<img src="' . get_template_directory_uri() . '/assets/redirect-arrow.svg" alt="Arrow svg icon">'); ?>
                    </div>
                    <div style="transform: rotate(180deg);" class="navigation_container">
                        <?php previous_post_link('%link', '<img src="' . get_template_directory_uri() . '/assets/redirect-arrow.svg" alt="Arrow svg icon">'); ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- <div class="news_single__post_navigation">
                <?php next_post_link('%link', __('<')); ?>
                <?php previous_post_link('%link', __('>')); ?>
            </div> -->
            </article>
        <?php endif; ?>
</section>
<?php get_footer(); ?>