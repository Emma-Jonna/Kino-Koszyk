<a class="books__thumbnail" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('medium_large', array('class' => 'books__thumbnail-img', 'loading' => 'lazy')); ?>
</a>