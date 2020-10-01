<?php 
class menu_header_walker extends Walker_Nav_Menu
{
function start_el( &$output, $item, $depth=0, $args=array(), $id = 0 )
{
    
    // Preparing variables
    // https://www.ibenic.com/how-to-create-wordpress-custom-menu-walker-nav-menu-class/
    
    $object = $item->object;
    $type = $item->type;
    $title = $item->title;
    $description = $item->description;
    $permalink = $item->url;


    //  implode(" ", $item->classes)
    
    $current = "";

    foreach($item->classes as $value)
    {
        if($value == "current_page_item")
        {
            $current = "active";
        }
    }
    
    $output .= "<li class='". $current  . "'>";
    
    //Add SPAN if no Permalink
    if( $permalink && $permalink != '#' ) 
    {
        
        if(in_array("menu-item-has-children", $item->classes, true))
        {
            $output .= "<a class='' href='" . $permalink . "'>";
        }
        else 
        {
            $output .= "<a class='' href='" . $permalink . "'>";
        }
    } 
    else 
    {
        $output .= '<span>';
    }
    
    $output .= $title;
    if( $description != '' && $depth == 0 ) 
    {
        $output .= '<small class="description">' . $description . '</small>';
    }
    if( $permalink && $permalink != '#' ) 
    {
        $output .= '</a>';
    } 
    else 
    {
        $output .= '</span>';
    }
}

function start_lvl( &$output, $depth = 0, $arg = array() )
{
    
    $output .= "\n<ul class='sub-menu'>\n";
    $output .= '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
    
}

function end_lvl(&$output, $depth=0, $args=array()) 
{
    
    $output .= "</div>\n";
    $output .= "</ul>\n";

}

};

class menu_misc_walker extends Walker_Nav_Menu
{
function start_el( &$output, $item, $depth=0, $args=array(), $id = 0 )
{
    
    // Preparing variables
    // https://www.ibenic.com/how-to-create-wordpress-custom-menu-walker-nav-menu-class/
    
    $object = $item->object;
    $type = $item->type;
    $title = $item->title;
    $description = $item->description;
    $permalink = $item->url;


    //  implode(" ", $item->classes)
    
    $current = "";
    
    $output .= "<li class='". $current  . "'>";
    
    //Add SPAN if no Permalink
    if( $permalink && $permalink != '#' ) 
    {
        
        if(in_array("menu-item-has-children", $item->classes, true))
        {
            $output .= "<a class='' href='" . $permalink . "'>";
        }
        else 
        {
            $output .= "<a class='' href='" . $permalink . "'>";
        }
    } 
    else 
    {
        $output .= '<span>';
    }
    
    $output .= $title;
    if( $description != '' && $depth == 0 ) 
    {
        $output .= '<small class="description">' . $description . '</small>';
    }
    if( $permalink && $permalink != '#' ) 
    {
        $output .= '</a>';
    } 
    else 
    {
        $output .= '</span>';
    }
}

function start_lvl( &$output, $depth = 0, $arg = array() )
{
    
    $output .= "\n<ul class='sub-menu'>\n";
    $output .= '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
    
}

function end_lvl(&$output, $depth=0, $args=array()) 
{
    
    $output .= "</div>\n";
    $output .= "</ul>\n";

}

};

class menu_social_walker extends Walker_Nav_Menu
{
function start_el( &$output, $item, $depth=0, $args=array(), $id = 0 )
{
    
    // Preparing variables
    // https://www.ibenic.com/how-to-create-wordpress-custom-menu-walker-nav-menu-class/
    
    $object = $item->object;
    $type = $item->type;
    $title = $item->title;
    $description = $item->description;
    $permalink = $item->url;


    //  implode(" ", $item->classes)
    
    $current = "";
    
    $output .= "<li class='". $current  . "'>";
    
    //Add SPAN if no Permalink
    if( $permalink && $permalink != '#' ) 
    {
        
        if(in_array("menu-item-has-children", $item->classes, true))
        {
            $output .= "<a class='' href='" . $permalink . "'>";
        }
        else 
        {
            $output .= "<a class='' href='" . $permalink . "'>";
        }
    } 
    else 
    {
        $output .= '<span>';
    }
    
    $output .= $title;
    if( $description != '' && $depth == 0 ) 
    {
        $output .= '<small class="description">' . $description . '</small>';
    }
    if( $permalink && $permalink != '#' ) 
    {
        $output .= '</a>';
    } 
    else 
    {
        $output .= '</span>';
    }
}

function start_lvl( &$output, $depth = 0, $arg = array() )
{
    
    $output .= "\n<ul class='sub-menu'>\n";
    $output .= '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
    
}

function end_lvl(&$output, $depth=0, $args=array()) 
{
    
    $output .= "</div>\n";
    $output .= "</ul>\n";

}

};



function my_wp_nav_menu_objects( $items, $args ) 
{
    apply_logo($items, $args);

    return $items;
}

function apply_logo($items, $args)
{
    foreach( $items as &$item )
    {
        $icon = get_field('icon-name', $item);
    
        if ($icon)
        {
            $item->title = '<i class="' . $icon . '"></i>';
        }

    }

    return $items;
}

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function designermadsen_setup_after()
{
      /* Adds support for wordpress to handle setting the title  */
      add_theme_support( 'title-tag' );
      add_theme_support( 'post-thumbnails' );

      register_menus();  

    // Add custom image size used in Cover Template.
	add_image_size( 'designermadsen-full', 1980, 9999 );
	add_image_size( 'designermadsen-midle', 990, 9999 );
	add_image_size( 'designermadsen-preview', 495, 9999 );

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