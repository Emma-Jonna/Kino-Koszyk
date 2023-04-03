        <!-- This is a card in the grid -->
        <div>
            <div>
                <?php the_post_thumbnail('large', array('class' => 'object-cover w-full h-full')); ?>
                <date><?= get_the_date(); ?></date>
            </div>
            <div>
                <h3 style="color: red;"><?php the_title(); ?></h3>
                <span><?php the_content(); ?></span>
                <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">Read more 👉</a>
            </div>
        </div>