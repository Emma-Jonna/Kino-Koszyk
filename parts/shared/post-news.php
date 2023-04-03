<?php

$fields = get_fields();

if ($fields) : ?>
    <?php
    $post = get_post();
    set_post_thumbnail($post->ID, $fields["image_1"]["ID"]);
    ?>

    <a class="news__thumbnail" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('medium_large', array('class' => 'news__thumbnail-img')); ?>
    </a>
<?php endif; ?>