
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