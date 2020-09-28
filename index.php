<?php 
    get_header(); 
?>    
        <main> 
            <?php if( have_posts() ): ?>
                <?php while ( have_posts() ): ?>
                    <?php the_post();?>
                        <div class="cover-image">
                            <?php the_post_thumbnail(); ?> 
                            <div>
                                <h1> <?php  the_title(); ?> </h1>
                                <p> <?php echo get_bloginfo('description') ?> </p>
                            </div>
                        </div>
                    
                <?php endwhile; ?>
            <?php endif; ?>
        </main>
<?php 
    get_footer();
?>