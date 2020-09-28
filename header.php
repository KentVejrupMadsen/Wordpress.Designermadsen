<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' );?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" 
              content="ie=edge">
              
        <?php 
            wp_head(); 
        ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
    </head>
    <body>
        <header>
            <nav> 
                <a class="navbar-brand" href="#">Wordpress</a>
                
                <ul> 
                    <li> 
                        <a href="#"> 
                            Index
                        </a>
                    </li>
                    <li> 
                        <a href="#"> 
                            About
                        </a>
                    </li>
                    <li> 
                        <a href="#"> 
                            Etc
                        </a>
                    </li>
                </ul>
            </nav>
        </header>