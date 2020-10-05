<?php 
include get_parent_theme_file_path( 'inc/framework/kirki/kirki.php' );

include get_parent_theme_file_path( 'components/menu/walkers.php' );

$is_debugging = true;

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
            'misc-menu' => __( 'Misc. Area Menu', 'theme-menu' ), 
            'social-menu' => __( 'Social Area Menu', 'theme-menu' ),
            'misc-menu' => __( 'Misc. Area Menu', 'theme-menu' ) 
        );

        register_nav_menus( $locations );
                            
    }

function initialise_sidebar()
{
    register_sidebar(
        array(
            'name' => 'Footer Widget Area',
            'before_widget' => '<div class = "widgetizedArea">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
    ) );
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

        if( !isset( $is_debugging ) && ( !$is_debugging ) )
        {
            wp_enqueue_script( 'vue-js',  'https://vuejs.org/js/vue.min.js', array(), 3.0, true );
            wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), 3.5, true);
            wp_enqueue_script( 'axios', 'https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js', array(), 0.2, true);

            wp_enqueue_script( 'sidebar',  (get_template_directory_uri() . '/type/javascript/sidebar.js'), array('vue-js'), 1.0, true );

        }
        
    }
}

add_action( 'init', 'initialise_menu' );
add_action( 'widgets_init', 'initialise_sidebar' );

add_action('after_setup_theme', 'designermadsen_setup_after');
add_action( 'wp_enqueue_scripts', 'designermadsen_enqueue_scripts' );

?>