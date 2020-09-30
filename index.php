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
                                            'walker' => new menu_social_walker()
                                    )
                                ); 
                                ?>
                            <?php endif; ?>
                            </div>
                        </div>                    
                <?php endwhile; ?>

            <?php endif; ?>

            <?php 
                    $args_assign = array(
                        'numberposts' => 4,
                        'category'=> 10
                    );

                    $assignments = get_posts( $args_assign );

                    if(! empty( $assignments ) ):
                ?>

            <div class="sum"> 
                    <h1> Opgaver </h1>
                    <p> Kort summering over de typer af opgaver jeg arbejder med. </p>

                    <div class="containment"> 
                        <?php foreach( $assignments as $assignment ): ?>
                        <a href="<?php echo get_permalink( $assignment->ID ); ?>" class="sum-link"> 
                            <div> 
                                <div class="logo"> 
                                    <?php if( get_the_title( $assignment->ID ) == "Python" ): ?>
                                        <i class="fab fa-python"></i>
                                    <?php endif; ?>

                                    <?php if( get_the_title( $assignment->ID ) == "C#" ): ?>
                                        C#
                                    <?php endif; ?>

                                    <?php if( get_the_title( $assignment->ID ) == "PHP"): ?>
                                        <i class="fab fa-php"></i>
                                    <?php endif; ?>

                                    <?php if( get_the_title( $assignment->ID ) == "Frontend" ): ?>
                                        <i class="fas fa-laptop-code"></i>
                                    <?php endif; ?>

                                </div>
                                <div class="description"> 
                                    <p class="bold"> 
                                        <?php echo get_the_title($assignment->ID); ?>
                                    </p>
                                    <p> 
                                        <?php echo get_the_excerpt( $assignment->ID ); ?>  
                                    </p>
                                </div>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php wp_reset_postdata(); ?>
                    <?php endif; ?>

                <?php 
                    $args = array(
                        'numberposts' => 3,
                        'category'=> 9
                    );

                    $case_posts = get_posts( $args );

                    if(! empty( $case_posts ) ):
                ?>
            <div class="cases background"> 
                <?php 
                        foreach( $case_posts as $posts ):
                    ?>

                <a href="<?php echo get_permalink( $posts->ID ); ?>"> 
                    <div class="case"> 
                        <img src="<?php echo get_the_post_thumbnail_url( $posts->ID ); ?>" />
                        <p> <?php echo get_the_title( $posts->ID ); ?> </p>
                        <p> <?php echo get_the_excerpt( $posts->ID ); ?> </p>
                    </div>
                </a>
                
                <?php
                    endforeach; ?> 
                </div>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            <div class="process"> 
                <h2> Arbejds processen. </h2>
                <p> </p>

                <div class="process-container"> 
                    <div> 
                        <p class="bold"> Planlægning </p>
                        <p> </p>
                    </div>
                    
                    <div> 
                        <p class="bold"> Udvikling </p>
                        <p> </p>
                    </div>

                    <div> 
                        <p class="bold"> Accept </p>
                        <p> </p>
                    </div>

                    <div> 
                        <p class="bold"> Modtagelse </p>
                        <p> </p>
                    </div>
                </div>

            </div>

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