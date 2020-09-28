<?php 
    get_header(); 
?>    
        <main> 
        <?php if( is_front_page() ): ?>
            <!-------------------------->
            <?php if( have_posts() ): ?>
                <?php while ( have_posts() ): ?>
                    <?php the_post();?>
                        <div class="cover-image">
                            <?php the_post_thumbnail(); ?> 
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
                                            'walker' => new menu_header_walker()
                                    )
                                ); 
                                ?>
                            <?php endif; ?>
                            </div>
                        </div>                    
                <?php endwhile; ?>


            <?php endif; ?>

        <?php else: ?>
            <!-------------------------->
            <h2> <?php the_title(); ?> </h2>
            <div> 
                <?php the_content(); ?>
            </div>

        <?php endif; ?>

        </main>
<?php 
    get_footer();
?>