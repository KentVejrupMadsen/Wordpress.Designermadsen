<?php 
/* */

$post_arg = array(
    'posts_per_page' => 4, 
    'orderby' => 'post_date',
    'order' => 'desc',
    'post_type' => 'post', 
    'post_status' => 'publish'
);

$query = new WP_Query( $post_arg );

if ( $query->have_posts() ) :
?>  

<div class="posts">
    <h2> 
        Posts 
    </h2>
                
    <div class="posts-container"> 
        <?php 
                while ( $query->have_posts() ) : $query->the_post();
        ?>
            <a class="post" href="<?php echo get_permalink(); ?>">
                <div class="post-page">

                    <?php if( has_post_thumbnail() ): ?>
                                <?php the_post_thumbnail( 'designermadsen-thumb-medium_large' ); ?>
                    <?php else: ?>
                                
                    <?php endif; ?>

                    <div class="text-container">
                        <h3> <?php echo the_title(); ?> </h3>
                        <p> <?php echo get_the_date(); ?> </p>
                    </div>
                </div>
            </a>
        <?php
                endwhile;
        ?>
    </div>
    
    <?php wp_reset_postdata(); ?>
</div>
<?php endif; ?>