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

            <div class="sum"> 
                    <h1> Opgaver </h1>
                    <p> Kort summering over de typer af opgaver jeg arbejder med. </p>

                    <div class="containment"> 
                        <a href="" class="sum-link"> 
                            <div> 
                                <div class="logo"> 
                                    <i class="fab fa-python"></i>
                                </div>
                                <div class="description"> 
                                    <p class="bold"> 
                                        Python 
                                    </p>
                                    <p> 
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id enim ac nisl vehicula tincidunt. Nunc vitae varius erat. 
                                    </p>
                                </div>
                            </div>
                        </a>

                        
                        <a href="" class="sum-link"> 
                            <div> 
                                <div class="logo"> 
                                    C#
                                </div>
                                <div class="description"> 
                                    <p class="bold"> 
                                        C# 
                                    </p>
                                    <p> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id enim ac nisl vehicula tincidunt. Nunc vitae varius erat. 
                                    </p>
                                </div>
                            </div>
                        </a>

                        
                        <a href="" class="sum-link"> 
                            <div> 
                                
                                <div class="logo"> 
                                    <i class="fab fa-php"></i>
                                </div>
                                <div class="description"> 
                                    <p class="bold"> 
                                        PHP
                                    </p>
                                    <p> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id enim ac nisl vehicula tincidunt. Nunc vitae varius erat. 
                                    </p>
                                </div>
                            </div>
                        </a>
                        
                        
                        <a href="" class="sum-link"> 
                            <div> 
                                <div class="logo"> 
                                    <i class="fas fa-file-code"></i> 
                                </div>
                                <div class="description"> 
                                    <p class="bold"> 
                                        Frontend 
                                    </p>
                                    <p> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id enim ac nisl vehicula tincidunt. Nunc vitae varius erat. 
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            <div class="cases background"> 
                <div class="case"> 
                    <img href="" />
                    <p> Title </p>
                </div>
                
                <div class="case"> 
                    <img href="" />
                    <p> Title </p>
                </div>

                <div class="case"> 
                    <img href="" />
                    <p> Title </p>
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