<?php
//  
$page_opgaver = get_page_by_title( 'opgaver' );

if( empty( $page_opgaver ) )
{ 
    $page_opgaver = get_page_by_title( 'tasks' );        
}


// ---------------------------------------------------------------------------------------------
if( !empty( $page_opgaver ) ):

    $post_opgaver_arg = array(
        'posts_per_page' => 6, 
        'orderby' => 'post_date',
        'order' => 'desc',
        'post_type' => 'post', 
        'post_status' => 'publish',
        'post_parent'=>$page_opgaver->ID
    );

    $query_opgaver = new WP_Query( $post_opgaver_arg );
    
    if( !empty( $query_opgaver->have_posts() ) ):
        while( $query_opgaver->have_posts() ): 
?>

    <?php $query_opgaver->the_post(); ?>

    <a class="post" href="<?php echo get_permalink(); ?>">
        <div>

        </div>
    </a>

<?php 
        endwhile;
    endif;
endif; 

// ---------------------------------------------------------------------------------------------
wp_reset_postdata();
?>
