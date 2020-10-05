<?php if( has_post_thumbnail() ): ?>
    <?php if( is_front_page() ): ?>
        <div class="cover-image">

            <?php if( wp_is_mobile() ): ?>
                <?php the_post_thumbnail('designermadsen-thumb-medium_large'); ?>
            <?php else:?>
                <?php the_post_thumbnail('designermadsen-thumb-large'); ?>
            <?php endif; ?>

                <div>
                    <h1> <?php  the_title(); ?> </h1>
                    <p> <?php echo get_bloginfo('description') ?> </p>

                    <?php if( has_nav_menu('social-menu') ): ?>
                        <?php 
                            wp_nav_menu(
                                array(
                                    'container' => 'nav',
                                    'container_id' => '',
                                    'container_class' => '',
                                    'theme_location' => 'social-menu',
                                    'menu_class' => 'navigation-menu',
                                    'item_spacing' => 'preserve',
                                    'walker' => new menu_social_walker()
                                )
                            ); 
                        ?>
                    <?php endif; ?>
                </div>
        </div>  
        
    <?php else: ?>

        <div class="cover-image">
            <?php if( wp_is_mobile() ): ?>
                <?php the_post_thumbnail('designermadsen-thumb-medium_large'); ?>
            <?php else:?>
                <?php the_post_thumbnail('designermadsen-thumb-large'); ?>
            <?php endif; ?>

            <div>
                <h1 id="page-title"> <?php  the_title(); ?> </h1>
            </div>
        </div>  
    <?php endif;?>

<?php endif; ?>

