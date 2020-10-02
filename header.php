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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
        
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W78T2MC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

        <header>
            <?php if( has_nav_menu('header-menu') ): ?>
                <?php 
                wp_nav_menu(
                    array(
                            'container' => 'nav',
                            'container_id' => '',
                            'container_class' => '',
                            'theme_location' => 'header-menu',
                            'menu_class' => 'navigation-menu',
                            'item_spacing' => 'preserve',
                            'walker' => new menu_header_walker()
                    )
                ); 
                ?>
            <?php endif; ?>
        </header>