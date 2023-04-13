<?php

$fields = get_fields();

if ($fields) : ?>
    <?php
    $post = get_post();
    set_post_thumbnail($post->ID, $fields["image_1"]["ID"]);
    ?>
    <article class="news_card">
        <div class="thumbnail-wrapper">
            <a class="news__cards_thumbnail" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium_large', array('class' => 'news__thumbnail-img', 'loading' => 'lazy')); ?>
            </a>
        </div>
        <div class="thumbnail_content">
            <p class="news-title"><?php the_title() ?></p>
            <?php the_content() ?>
            <p>
                Posted <?php echo get_the_date("F j Y"); ?>
            </p>
        </div>
    </article>
<?php endif; ?>