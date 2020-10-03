<!-------------------------->
<?php if( have_posts() ): ?>
    <?php while ( have_posts() ): ?>
            <?php the_post();?>       
            <?php include get_parent_theme_file_path('components/areas/cover.php'); ?>                  
    <?php endwhile; ?>
<?php endif; ?>


<?php include get_parent_theme_file_path('components/component-frontpage-tasks.php'); ?> 
<?php include get_parent_theme_file_path('components/component-frontpage-post.php'); ?> 