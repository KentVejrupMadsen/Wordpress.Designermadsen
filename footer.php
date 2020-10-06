        <footer id="footer-area"> 
            <nav class="widgets background"> 

                <?php if ( !function_exists('dynamic_sidebar') || 
                           !dynamic_sidebar( "Footer Widget Area" ) ) : ?>

                <?php endif;?>
                
            </nav>

            <?php if( has_nav_menu('misc-menu') ): ?>
                <?php 
                wp_nav_menu(
                    array(
                            'container' => 'nav',
                            'container_id' => '',
                            'container_class' => '',
                            'theme_location' => 'misc-menu',
                            'menu_class' => 'navigation-menu',
                            'item_spacing' => 'preserve',
                            'walker' => new menu_misc_walker()
                    )
                ); 
                ?>
            <?php endif; ?>
        </footer>
        
        <?php get_sidebar(); ?>
    </body> 
    
    <?php wp_footer(); ?>

    <?php 
        include get_parent_theme_file_path( 'components/google/analytics.php' );
        include get_parent_theme_file_path( 'components/google/tags.php' ); 
    ?>

</html>