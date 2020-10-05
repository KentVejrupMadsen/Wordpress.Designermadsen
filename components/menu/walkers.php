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
    $title = '<i class="fas fa-link"></i>';
    $description = $item->description;
    $permalink = $item->url;


    //  implode(" ", $item->classes)
    
    $current = "";
    
    $output .= "<li class='". $current  . "'>";
    
    //Add SPAN if no Permalink
    if( $permalink && $permalink != '#' ) 
    {
        if( !in_array( "menu-item-has-children", $item->classes, true ) )
        {
            $output .= "<a class='' href='" . $permalink . "'>";

            try 
            {
                $parsed_url = parse_url( $permalink );
                
                if( $parsed_url['host'] === 'github.com' )
                {
                    $title = '<i class="fab fa-github"></i>';
                }

                if( $parsed_url['host'] === 'www.linkedin.com' )
                {
                    $title = '<i class="fab fa-linkedin"></i>';
                }

                if( $parsed_url['host'] === 'www.facebook.com' )
                {
                    $title = '<i class="fab fa-facebook-square"></i>';
                }

                if( $parsed_url['host'] === 'twitter.com' )
                {
                    $title = '<i class="fab fa-twitter-square"></i>';
                }

                if( $parsed_url['host'] === 'www.tumblr.com' )
                {
                    $title = '<i class="fab fa-tumblr-square"></i>';
                }

            }
            catch( Exception $e )
            {

            }
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

?>