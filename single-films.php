<?php get_header(); ?>
<?php
$redirectToPostType = "/" . $post->post_type;

$args = array(
    "post_type" => "films",
    "posts_per_page" => 1,
    "orderby" => "date",
    "order" => "DESC",
);
$latest_posts_query = new WP_Query($args);

?>
<!-- <?php print_a($post) ?> -->
<section class="films-single">
    <?php if ($latest_posts_query->have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <div>
                    <!-- Insert BACK navigation here inside a tag. Remove hard coded href -->
                    <a href="<?= $redirectToPostType ?>">
                        < </a>
                            <h2><?php the_title(); ?></h2>
                </div>
                <div class="content-wrapper">
                    <div class="img-wrapper">
                        <!-- featured image of the page -->
                        <?php the_post_thumbnail('medium_large', array('class' => 'films-thumbnail')); ?>
                    </div>
                    <div>
                        <!-- the page content here -->
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <div class="post-navigation">

                <!-- post navigation -->
                <?php next_post_link('%link', __('<')); ?>
                <?php previous_post_link('%link', __('>')); ?>

                <?php
                if (get_field('video')) {
                ?>
                    <iframe width="560" height="315" src=<?php echo get_field("video"); ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <?php
                }
                ?>

                <!-- <video controls muted autoplay src=""></video> -->
                <?php get_template_part("parts/shared/post", "images"); ?>
            </article>
        <?php endif; ?>
</section>
<?php get_footer(); ?>