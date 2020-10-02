<?php if( has_post_thumbnail() ): ?>
    <div class="cover-image">
        <?php if(wp_is_mobile()): ?>
            <?php the_post_thumbnail('medium_large'); ?>
        <?php else:?>
            <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>

        <div>
            <h1> <?php  the_title(); ?> </h1>
        </div>
    </div>  

<?php endif; ?>