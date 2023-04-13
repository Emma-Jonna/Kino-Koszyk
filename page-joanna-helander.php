<?php get_header(); ?>
<section class="joanna">

    <h2 class="joanna__title">
        <?php the_title() ?>
    </h2>

    <article class="joanna__top_container">
        <div class="joanna__top_container-left">
            <div class="joanna__top_container-thumbnail">
                <?php the_post_thumbnail('', array('class' => 'joanna__top_container-thumbnail_img')) ?>
            </div>
            <p class="joanna__top_container-quote">
                <?php the_field("quote"); ?>
            </p>
            <span class="joanna__top_container-source">
                <p><?php the_title(); ?></p>
                <p><?php the_field("quote_source"); ?></p>
            </span>
        </div>

        <div class="joanna__top_container-content joanna__top_container-right">
            <?php the_content(); ?>
        </div>
    </article>
    <div class="read-more-container-joanna">
        <p>Read the whole article</p>
    </div>
    <div class="read-more-container-joanna-anchor">
        <a href="#joanna-bio">Read the whole article</a>
    </div>
</section>

<section class="joanna joanna_work_top">
    <h3>Work of Joanna Helander</h3>
    <div class="joanna_work_top_links">
        <div class="joanna_work_top_link">
            <a href="<?= add_query_arg('category_name', "joanna", 'http://kino-koszyk-new.local/photos') ?>">Photos</a>
        </div>
        <div class="joanna_work_top_link">
            <a href="http://kino-koszyk-new.local/films">Films</a>
        </div>
        <div class="joanna_work_top_link">
            <a href="http://kino-koszyk-new.local/books">Books</a>
        </div>
    </div>
</section>

<section class="joanna joanna_bio" id="joanna-bio">
    <h4 class="joanna_bio__title">Biography</h4>
    <article class="joanna_bio__article article_1">
        <p><?php the_field("biography_part_1"); ?></p>
        <img src=<?php the_field("image_1"); ?> alt="">
    </article>
    <article class="joanna_bio__article article_2">
        <p><?php the_field("biography_part_2"); ?></p>
        <img src=<?php the_field("image_2"); ?> alt="">
    </article>
    <article class="joanna_bio__article article_3">
        <p><?php the_field("biography_part_3"); ?></p>
    </article>
</section>

<section class="joanna joanna_work_bottom">
    <h3>Work of Joanna Helander</h3>
    <div class="joanna_work_bottom_links">
        <div class="joanna_work_bottom_link">
            <a href="<?= add_query_arg('category_name', "joanna", 'http://kino-koszyk-new.local/photos') ?>">Photos</a>
        </div>
        <div class="joanna_work_bottom_link">
            <a href="http://kino-koszyk-new.local/films">Films</a>
        </div>
        <div class="joanna_work_bottom_link">
            <a href="http://kino-koszyk-new.local/books">Books</a>
        </div>
    </div>
</section>
<script src="<?= get_template_directory_uri() ?>/joanna.js"></script>
<?php get_footer(); ?>