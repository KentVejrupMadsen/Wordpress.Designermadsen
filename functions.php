<?php 
include get_parent_theme_file_path( 'inc/walkers.php' );

$theme = wp_get_theme();

if( !function_exists( 'designermadsen_setup_after' ) )
{
    function designermadsen_setup_after()
    {
        /* Adds support for wordpress to handle setting the title  */
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );

        add_shortcode( 'shortcodename', 'get_search_form');

        register_menus();  

        // Add custom image size used in Cover Template.
        add_image_size( 'designermadsen-full', 1980, 9999 );
        add_image_size( 'designermadsen-middle', 990, 9999 );
        
        add_image_size( 'designermadsen-preview', 495, 100 );
        add_image_size( 'designermadsen-preview-hd', 720, 9999 );

    }

    function register_menus()
    {
        register_nav_menus( 
            array( 'header-menu' => __( 'Header Main Area Menu', 'theme-menu' ),
                   'misc-menu' => __( 'Misc. Area Menu', 'theme-menu' ), 
                   'social-menu' => __( 'Social Area Menu', 'theme-menu' ),
                   'misc-menu' => __( 'Misc. Area Menu', 'theme-menu' ) ) );

        
    register_sidebar(
        array(
            'name' => 'Footer Widget Area',
            'before_widget' => '<div class = "widgetizedArea">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
    ) );
                                
    }
}


if( !function_exists( 'designermadsen_enqueue_scripts' ) )
{
    function designermadsen_enqueue_scripts()
    {
        wp_enqueue_style( 'style', 
                        get_stylesheet_uri(), 
                        null, 
                        null, 
                        null );

        
    }
}

add_action('after_setup_theme', 'designermadsen_setup_after');
add_action( 'wp_enqueue_scripts', 'designermadsen_enqueue_scripts' );

?>