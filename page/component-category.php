<?php  $cat = get_the_category(); ?>


<div class="journal"> 
<?php 
    while( have_posts() ):
        the_post();
?>

    <a class="journal-entry" href="<?php echo get_permalink() ;  ?>"> 
        <div> 
            <h2> <?php the_title(); ?> </h2>
            
            <p>
                <?php echo get_the_date(); ?>
                -
                <?php 
                    echo get_the_excerpt( get_the_ID() ); 
                ?>
            <p>
                    </div>
                </a>
                
                <?php endwhile; ?>
            </div>
