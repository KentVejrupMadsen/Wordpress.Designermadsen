<?php 
    get_header(); 
?>    
        <main> 
            <?php include get_parent_theme_file_path( 'components/areas/cover.php' ); ?>

            <div class="page-about-container"> 
                <?php the_content(); ?>
            </div>
        </main>
<?php 
    get_footer();
?>