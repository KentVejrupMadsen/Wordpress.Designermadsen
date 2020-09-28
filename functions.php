<?php 
function designermadsen_setup_after()
{
      /* Adds support for wordpress to handle setting the title  */
      add_theme_support( 'title-tag' );
      add_theme_support( 'post-thumbnails' );

      
      register_menus();  
}

function register_menus()
{
    register_nav_menus( array( 'header-menu' => __( 'Header Main Area Menu', 'theme-menu' ),
                               'misc-menu' => __( 'Misc. Area Menu', 'theme-menu' ) ) );
}


add_action('after_setup_theme', 'designermadsen_setup_after');


function designermadsen_enqueue_scripts()
{
    wp_enqueue_style( 'style', 
                       get_stylesheet_uri(), 
                       null, 
                       null, 
                       null );

    
}

add_action( 'wp_enqueue_scripts', 'designermadsen_enqueue_scripts' );

?>