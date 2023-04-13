<?php get_header(); ?>
<section class="about">

    <h2 class="about__title">
        <?= strtoupper(get_the_title()); ?>
    </h2>
    <article class="about__content">
        <div class="about__content_text">
            <?php echo the_content(); ?>
        </div>
    </article>

    <div class="read-more-wrapper">
        <!-- <p class="read-more-dots">...</p> -->
        <div class="read-more-container">
            <p>Read more</p>
            <img src="<?= get_template_directory_uri() ?>/assets/Arrow-strong.svg" alt="">
        </div>
    </div>

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
            <div class="contact-info-bo">
                <ul>
                    <li><?php echo the_field('bo_email'); ?></li>
                    <li><?php echo the_field('bo_phone'); ?></li>
                </ul>
            </div>
        </div>

        <div class="image-container">
            <div class="about__content_bo_image">
                <img src=<?php the_field('bo_photo'); ?> alt="">
            </div>
        </div>

        <div class="contact-bo-button">
            <a href="http://kino-koszyk-new.local/contact/">Contact Bo</a>
        </div>
    </article>

    <article class="about__content_joanna_wrapper">
        <div class="about__content_joanna_content">
            <div>
                <h3 class="about__content_joanna content_title">
                    <?php echo "Joanna Helander"; ?>
                </h3>
                <p class="about__content_joanna content_about">
                    <?php echo the_field('about_joanna_helander'); ?>
                </p>
            </div>

            <div class="contact-info-joanna">
                <ul>
                    <li><?php echo the_field('joanna_email'); ?></li>
                    <li><?php echo the_field('joanna_phone'); ?></li>
                </ul>
            </div>
        </div>

        <div class="image-container">
            <div class="about__content_joanna_image">
                <img src=<?php the_field('joanna_photo'); ?> alt="">
            </div>
        </div>

        <div class="contact-joanna-button">
            <a href="http://kino-koszyk-new.local/contact/">Contact Joanna</a>
        </div>
    </article>
</section>
<script src="<?= get_template_directory_uri() ?>/readMore.js"></script>
<?php get_footer(); ?>