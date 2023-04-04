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
            <span>
                <p><?php the_title(); ?></p>
                <p><?php the_field("quote_source"); ?></p>
            </span>
        </div>

        <div class="joanna__top_container-content joanna__top_container-right">
            <?php the_content(); ?>
        </div>

    </article>
</section>

<section class="joanna joanna_work">
    <h3>Work of Joanna Helander</h3>
    <div>
        <button>Photos</button>
        <button>Films</button>
        <button>Books</button>
    </div>
</section>

<section class="joanna joanna_bio">
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
<?php get_footer(); ?>