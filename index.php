<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <div class="test">

        <?php while (have_posts()) : the_post();
            get_template_part("parts/shared/post", "card"); ?>
        <?php endwhile; ?>

        <div>
            <div>
                <?php next_posts_link('Older posts &raquo;'); ?>
            </div>
            <div>
                <?php previous_posts_link('&laquo; Newer posts'); ?>
            </div>
        </div>

    </div>
<?php endif; ?>

<?php get_footer(); ?>