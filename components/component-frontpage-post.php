<?php 
/* */
    $post_post_arg = array(
        'posts_per_page' => 4, 
        'orderby' => 'post_date',
        'order' => 'desc',
        'post_type' => 'post', 
        'post_status' => 'publish'
    );

    $query_post = new WP_Query( $post_post_arg );

    if ( !empty($query_post->have_posts()) ):
?>  
<div class="posts">
    <h2> 
        Posts 
    </h2>
                
    <div class="posts-container"> 
        <?php 
            while ( $query_post->have_posts() ) : $query_post->the_post();
        ?>
            <a class="post" href="<?php echo get_permalink(); ?>">
                <div class="post-page">

                    <?php if( has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail( 'designermadsen-thumb-medium_large' ); ?>
                    <?php else: ?>
                        <?php // Implememt fallback method at some point ?>
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
</div>
<?php   endif; ?>

<?php wp_reset_postdata(); ?>