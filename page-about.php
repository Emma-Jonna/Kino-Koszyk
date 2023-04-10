<?php get_header(); ?>
<section class="about">

    <h2 class="about__title"><?php echo the_title(); ?></h2>
    <article class="about__content">
        <?php echo the_content(); ?>
    </article>

    <article class="about__content_bo_wrapper">
        <div class="about__content_bo_content">
            <div>
                <h3 class="about__content_bo content_title">
                    <?php echo "Bo Persson"; ?>
                </h3>
                <p class="about__content_bo content_about">
                    <?php echo the_field('about_bo_persson'); ?>
                </p>
            </div>
            <div>
                <ul>
                    <li><?php echo the_field('bo_email'); ?></li>
                    <li><?php echo the_field('bo_phone'); ?></li>
                </ul>
            </div>
        </div>

        <div class="about__content_bo portrait">
            <img src=<?php the_field('bo_photo'); ?> alt="">
        </div>
    </article>

    <article class="about__content_joanna_wrapper">
        <div class="about__content_joanna portrait">
            <img src=<?php the_field('joanna_photo'); ?> alt="">
        </div>
        <div class="about__content_joanna_content">
            <div>
                <h3 class="about__content_joanna content_title">
                    <?php echo "Joanna Helander"; ?>
                </h3>
                <p class="about__content_joanna content_about">
                    <?php echo the_field('about_joanna_helander'); ?>
                </p>
            </div>
            <div>
                <ul>
                    <li><?php echo the_field('joanna_email'); ?></li>
                    <li><?php echo the_field('joanna_phone'); ?></li>
                </ul>
            </div>
        </div>

    </article>
</section>

<?php get_footer(); ?>