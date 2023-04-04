<?php

$fields = get_fields();

if ($fields) : ?>
    <?php
    $post = get_post();
    set_post_thumbnail($post->ID, $fields["image_1"]["ID"]);
    ?>

    <a class="news__cards_thumbnail" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">

        <?php the_post_thumbnail('medium_large', array('class' => 'news__thumbnail-img')); ?>
        <div class="thumbnail_content">
            <?php the_title() ?>
            <?php the_content() ?>
        </div>
    </a>
<?php endif; ?>