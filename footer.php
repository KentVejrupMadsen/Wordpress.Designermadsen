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

        include get_parent_theme_file_path( 'inc/framework/footer.php' );  
    ?>

    <?php if( isset( $is_debugging ) && $is_debugging ): ?>
        <!-- Development Frameworks currently using -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" 
                integrity="sha512-quHCp3WbBNkwLfYUMd+KwBAgpVukJu5MncuQaWXgCrfgcxCJAq/fo+oqrRKOj+UKEmyMCG3tb8RB63W+EmrOBg==" 
                crossorigin="anonymous">
        </script>
        
        <script
			  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
			  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
			  crossorigin="anonymous">
        </script>

        <!-- Vue.js Development version -->
        <script src="https://it.vuejs.org/js/vue.js"> </script>

        <!-- Internal Scripts -->
        <script src="<?php echo get_template_directory_uri() . '/type/javascript/sidebar.js'; ?>"> </script>
    <?php endif; ?>

</html>