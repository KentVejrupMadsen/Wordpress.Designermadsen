<?php 
include get_parent_theme_file_path( 'inc/framework/kirki/kirki.php' );

include get_parent_theme_file_path( 'components/menu/walkers.php' );

if( !function_exists( 'designermadsen_setup_after' ) )
{
    function designermadsen_setup_after()
    {
        /* Adds support for wordpress to handle setting the title  */
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        // Add support for responsive embeds.
	    add_theme_support( 'responsive-embeds' );

        // Add custom image size used in Cover Template.
        add_image_size( 'designermadsen-image-full', 1980, 9999 );
        add_image_size( 'designermadsen-image-middle', 990, 9999 );
        add_image_size( 'designermadsen-image-preview', 495, 9999 );
        add_image_size( 'designermadsen-image-preview-hd', 720, 9999 );

        the_post_thumbnail( array(75, 75) );      
        the_post_thumbnail( array(300, 300) );          
        the_post_thumbnail( array(768, 768) );   
        the_post_thumbnail( array(1024, 1024) );           
        the_post_thumbnail(); 

    }
}

function initialise_menu()
    {
        $locations = array( 
            'header-menu' => __( 'Header Main Area Menu', 'theme-menu' ),
            'misc-menu'   => __( 'Misc. Area Menu', 'theme-menu' ), 
            'social-menu' => __( 'Social Area Menu', 'theme-menu' ),
            'misc-menu'   => __( 'Misc. Area Menu', 'theme-menu' ) 
        );

        register_nav_menus( $locations );
                            
    }

function initialise_sidebar()
{
    register_sidebar(
        array(
            'name'          => 'Footer Widget Area',
            'before_widget' => '<div class = "widgetizedArea">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
    ) );
}

function designermadsen_enqueue_styles()
{
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'style', 
                      get_stylesheet_uri(), 
                      null, 
                      $theme_version, 
                      null );

    wp_enqueue_style( 'fonts', 
                      get_template_directory_uri() . '/inc/framework/fonts/stylesheet.css', 
                      null, 
                      $theme_version, 
                      null );

    wp_enqueue_style( 'fontawesome', 
                      get_template_directory_uri() . '/inc/framework/fontawesome/css/all.css', 
                      null, 
                      5.15, 
                      null );
}

if( !function_exists( 'designermadsen_enqueue_scripts' ) )
{
    function designermadsen_enqueue_scripts()
    {
            wp_enqueue_script( 'vue-js',  
                               (get_template_directory_uri() . '/inc/framework/javascript/vue.min.js'), 
                               array(), 
                               3.0, 
                               true );

            wp_enqueue_script( 'jquery', 
                               (get_template_directory_uri() . '/inc/framework/javascript/jquery-3.5.1.slim.min.js'), 
                               array(), 
                               3.5, 
                               true );

            wp_enqueue_script( 'axios', 
                              (get_template_directory_uri() . '/inc/framework/javascript/axios.min.js'), 
                               array(), 
                               0.2, 
                               true );

            wp_enqueue_script( 'cookie-policy',  
                               (get_template_directory_uri() . '/inc/javascript/cookie-policy.js'), 
                               array('vue-js'), 
                               1.0, 
                               true );

            wp_enqueue_script( 'scroll',  
                               (get_template_directory_uri() . '/inc/javascript/scroll.js'), 
                               array('vue-js'), 
                               1.0, 
                               true );

             wp_enqueue_script( 'mobile-menu',  
                               (get_template_directory_uri() . '/inc/javascript/mobile-menu.js'), 
                               array('vue-js'), 
                               1.0, 
                               true );

            wp_enqueue_script( 'more',  
                               (get_template_directory_uri() . '/inc/javascript/more.js'), 
                               array('vue-js'), 
                               1.0, 
                               true );

        
        
    }
}

add_action( 'init', 'initialise_menu' );
add_action( 'widgets_init', 'initialise_sidebar' );

add_action('after_setup_theme', 'designermadsen_setup_after');

add_action( 'wp_enqueue_scripts', 'designermadsen_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'designermadsen_enqueue_scripts' );

?>