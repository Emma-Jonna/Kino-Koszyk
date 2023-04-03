<?php get_header(); ?>
<h1>Single Photos</h1>
<?php

if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="photo">
            <h1 style="background-color: blue;"><?php the_title(); ?></h1>
            <div>
                <?php the_content(); ?>
                <?php the_post_thumbnail('medium_large', array('class' => 'test-class')); ?>
            </div>
            <?php get_template_part("parts/shared/post", "gallery"); ?>
        </div>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>