<?php 
    if( have_posts() ):
        the_posts();
?>

<h2> <?php the_title(); ?> </h2>
<div> 
    <?php the_content(); ?>
</div>

<?php endif; ?>