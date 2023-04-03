<?php get_header(); ?>
<section class="joanna">
    <h2>Joanna Helander</h2>
    <p><?php the_content(); ?></p>
    <?php the_post_thumbnail() ?>
    <strong><?php the_field("quote"); ?></strong>
    <span>
        <p>Johanna Helander</p>
        <p><?php the_field("quote_source"); ?></p>
    </span>

    <div>
        <h3>Work of Joanna Helander</h3>
        <div>
            <button>Photos</button>
            <button>Films</button>
            <button>Books</button>
        </div>
    </div>
</section>

<section>
    <h4>Biography</h4>
    <p><?php the_field("biography_part_1"); ?></p>
    <p><?php the_field("biography_part_2"); ?></p>
    <p><?php the_field("biography_part_3"); ?></p>
    <img src=<?php the_field("image_2"); ?> alt="">
    <img src=<?php the_field("image_2"); ?> alt="">
</section>
<?php get_footer(); ?>