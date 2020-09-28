<?php 
    get_header(); 
?>    
        <main> 
            <div> 
                <?php if( have_posts() ): ?>
                    <?php while ( have_posts() ): ?>
                        <?php the_post();?>
                        <p> <?php the_title(); ?> </p>
                        <div> 
                        <p> <?php the_content(); ?> </p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>        
        </main>
<?php 
    get_footer();
?>