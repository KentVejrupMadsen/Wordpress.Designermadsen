<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' );?>">
        <?php 
            wp_head(); 

            include get_parent_theme_file_path( 'components/robot-component.php' );
            include get_parent_theme_file_path( 'components/meta-seo-component.php' );
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" 
              content="ie=edge">
              
        <!-- Font's Used -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&family=Source+Sans+Pro&display=swap" rel="stylesheet"> 

    </head>
    <body>
        <?php 
            include get_parent_theme_file_path( 'components/google/tags_body.php' );
        ?>

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