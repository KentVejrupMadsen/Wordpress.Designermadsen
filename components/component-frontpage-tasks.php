<?php
//  
$page_opgaver = get_page_by_title( 'opgaver' );


if( empty( $page_opgaver ) )
{ 
    $page_opgaver = get_page_by_title( 'tasks' );        
}

// ---------------------------------------------------------------------------------------------
if( !empty( $page_opgaver ) ): ?>
    <div class="tasks"> 
        <h2> <?php echo get_the_title( $page_opgaver->ID ); ?> </h2>
        <p> <?php echo get_the_excerpt( $page_opgaver->ID ); ?> </p>

        <div class="tasks-containment"> 

    <?php
    $post_opgaver_arg = array(
        'posts_per_page' => 6, 
        'orderby' => 'post_date',
        'order' => 'desc',
        'post_type' => 'page', 
        'post_status' => 'publish',
        'post_parent'=>$page_opgaver->ID
    );
    
    $query_opgaver = new WP_Query( $post_opgaver_arg );
    
    if( !empty( $query_opgaver ) ):
        while( $query_opgaver->have_posts() ): 
            $query_opgaver->the_post();
?>
    <a class="task" href="<?php echo get_the_permalink( get_the_ID() ); ?>">
        <div>
            <h3> <?php echo get_the_title( get_the_ID() ); ?> </h3>
            <p> <?php echo get_the_excerpt( get_the_ID() ); ?> </p>
        </div>
    </a>

<?php 
        endwhile;
    endif;
?>

        </div>
    </div>
<?php
endif; 

// ---------------------------------------------------------------------------------------------
wp_reset_postdata();
?>
