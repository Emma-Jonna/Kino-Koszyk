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
                    <!-- <?php get_template_part("parts/shared/post", "gallery"); ?> -->
                </div>

                <!-- <?php var_dump(get_field("video")); ?> -->
                <!-- <?php var_dump(get_field("images")); ?> -->
                <!-- <?php var_dump(get_fields()); ?> -->

                <iframe width="560" height="315" src=<?php echo get_field("video"); ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                <!-- <video controls muted autoplay src=""></video> -->

                <?php get_template_part("parts/shared/post", "images"); ?>
            </div>
        </div>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>