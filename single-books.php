<?php get_header(); ?>
<?php
$redirectToPostType = "/" . $post->post_type;

$args = array(
    "post_type" => "books",
    "posts_per_page" => 1,
    "orderby" => "date",
    "order" => "DESC",
);
$latest_posts_query = new WP_Query($args);

$img_ratio = "";

if (!has_post_thumbnail()) {
    $img_ratio = "no-image";
} else {
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '');
    $image_width = $image[1];
    $image_height = $image[2];

    if ($image_width > $image_height) {
        $img_ratio = "landscape";
    } elseif ($image_width == $image_height) {
        $img_ratio = "square";
    } else {
        $img_ratio = "portrait";
    }
}

if (get_field("location_field") == NULL) {
    $content_info = get_field("date_field") . ", " . get_field("author_field");
} else ($content_info = get_field("date_field") . " " . get_field("location_field") . ", " . get_field("author_field")
)

?>
<!-- <?php print_a($post) ?> -->

<section class="books_single single">
    <?php if ($latest_posts_query->have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <div class="books_single__header">
                <a class="books_single__header-redirect" href="<?= $redirectToPostType ?>">
                    <img src="<?= get_template_directory_uri() ?>/assets/redirect-arrow.svg" alt="Arrow svg icon">
                </a>
                <h2 class="books_single__header-title"><?= ucfirst($post->post_type) ?></h2>
            </div>

            <div class="books_single__content_wrapper">
                <div class="merge">

                    <div class="books_single__content_wrapper-img_wrapper">
                        <!-- featured image of the page -->
                        <?php the_post_thumbnail('medium_large', array('class' => 'books-thumbnail' . " " . $img_ratio)); ?>
                    </div>

                    <div class="books_single__content_wrapper-content">
                        <!-- the page content here -->
                        <h3 class="content_info">
                            <?php if ($content_info) {
                                echo $content_info;
                            } ?>
                        </h3>
                        <h4 class="content_title">
                            <?php the_title(); ?>
                        </h4>
                        <?php the_content(); ?>
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

            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<script src="<?= get_template_directory_uri() ?>/mediaquery.js"></script>
<?php get_footer(); ?>