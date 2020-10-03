<!-------------------------->
<?php if( have_posts() ): ?>
    <?php while ( have_posts() ): ?>
            <?php the_post();?>       
            <?php include get_parent_theme_file_path('components/areas/cover.php'); ?>                  
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
                <h2> Cases </h2>
                <div class="containment"> 
                <?php 
                        foreach( $case_posts as $posts ):
                    ?>

                        <a href="<?php echo get_permalink( $posts->ID ); ?>"> 
                            <div class="case"> 
                                <img src="<?php echo get_the_post_thumbnail_url( $posts->ID ); ?>" loading="lazy" />
                                <p> <?php echo get_the_title( $posts->ID ); ?> </p>
                                <p> <?php echo get_the_excerpt( $posts->ID ); ?> </p>
                            </div>
                        </a>

                    <?php
                        endforeach; ?> 
                    </div>
</div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>



<div class="posts">
            <h2> Posts </h2>
                <div class="posts-container"> 
                    <?php 
                    $args = array(
                        'posts_per_page' => 4, /* how many post you need to display */
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'post_type' => 'post', /* your post type name */
                        'post_status' => 'publish'
                    );
                    $query = new WP_Query( $args );
                    ?>  

                    <?php 
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post();
                    ?>
                    <a class="post" href="<?php echo get_permalink(); ?>">
                        <div class="post-page"> 
                            <?php if( has_post_thumbnail() ): ?>
                                <?php the_post_thumbnail('designermadsen-thumb-medium_large'); ?>
                            <?php else: // Figure something out ?>
                                
                            <?php endif; ?>

                            <div class="text-container">
                                <h3> <?php echo the_title(); ?> </h3>
                                <p> <?php echo get_the_date(); ?> </p>
                            </div>
                        </div>
                    </a>
                    <?php
                        endwhile;
                    endif; ?>
                    
    <?php wp_reset_postdata(); ?>
                </div>
            </div>


<?php

 ?>