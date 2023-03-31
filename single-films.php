<?php get_header(); ?>

<?php

if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div>
            <div>
                <h1 style="background-color: blue;"><?php the_title(); ?></h1>
                <div>
                    <?php the_content(); ?>
                </div>
                <div>
                    <div>Single Film</div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>