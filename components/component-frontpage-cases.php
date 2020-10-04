<?php 
$post_cases_arg = array(
    'posts_per_page' => 4, 
    'orderby' => 'post_date',
    'order' => 'desc',
    'post_type' => 'post', 
    'post_status' => 'publish'
);

$query_cases = new WP_Query( $post_cases_arg );

    if ( !empty( $query_cases->have_posts() ) ):
?>
<div class="cases">
    <h2> Cases </h2>

    <div class="cases-containment"> 
    <?php
        while( $query_cases->have_posts() ): $query_cases->the_post();
    ?>
    <a href="<?php echo get_the_permalink( get_the_ID() ); ?>"> 
        <div class="case"> 
            <?php the_post_thumbnail('designermadsen-thumb-medium'); ?>
            <h3> <?php echo the_title(); ?> </h3>
        </div>
    </a>


    <?php 
        endwhile;
    ?>
    </div>
</div>
<?php
    endif;
?>