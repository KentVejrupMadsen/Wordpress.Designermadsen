<?php if( has_post_thumbnail() ): ?>
    <div class="cover-image">
        <?php if(wp_is_mobile()): ?>
            <img src="<?php echo the_post_thumbnail_url($size='designermadsen-preview'); ?>" loading="lazy" />
        <?php else:?>
            <img src="<?php echo the_post_thumbnail_url($size='designermadsen-full'); ?>" loading="lazy" />
        <?php endif; ?>

        <div>
            <h1> <?php  the_title(); ?> </h1>
        </div>
    </div>  

<?php endif; ?>