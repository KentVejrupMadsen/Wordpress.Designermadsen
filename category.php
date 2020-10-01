<?php 
    get_header(); 
?>
        <main>
<?php  $cat = get_the_category(); ?>

<h1> <?php echo $cat[0]->cat_name;  ?> </h1>
 
        <?php 
    while(have_posts()):
        the_post();
?>

<h2> <?php the_title(); ?> </h2>
<div> 
    <?php echo get_the_excerpt(get_the_ID()); ?>
</div>

    <?php endwhile; ?>
        </main>
<?php 
    get_footer();
?>