<?php get_header(); ?>

<?php

if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div>
            <div>
                <h1 style="background-color: blue;"><?php the_title(); ?></h1>
                <div>
                    <?php the_content(); ?>
                    <?php the_post_thumbnail('medium_large', array('class' => 'test-class')); ?>
                </div>
                <div>
                    <div>Single Film</div>
                    <?php get_template_part("parts/shared/post", "gallery"); ?>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>