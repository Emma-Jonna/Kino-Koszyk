<?php get_header(); ?>
<section class="about">

    <h2><?php echo the_title(); ?></h2>
    <p><?php echo the_content(); ?></p>

    <article>
        <h3><?php echo "Bo Persson"; ?></h3>
        <p><?php echo the_field('about_bo_persson'); ?></p>
        <ul>
            <li><?php echo the_field('bo_email'); ?></li>
            <li><?php echo the_field('bo_phone'); ?></li>
        </ul>
        <div class="portrait">
            <img src=<?php the_field('bo_photo'); ?> alt="">
        </div>
    </article>

    <article>
        <div class="portrait">
            <img src=<?php the_field('joanna_photo'); ?> alt="">
        </div>
        <h3><?php echo "Joanna Helander"; ?></h3>
        <p><?php echo the_field('about_joanna_helander'); ?></p>
        <ul>
            <li><?php echo the_field('joanna_email'); ?></li>
            <li><?php echo the_field('joanna_phone'); ?></li>
        </ul>

    </article>
</section>
<?php get_footer(); ?>