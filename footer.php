        <footer> 
            <nav class="widgets background"> 
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Widget Area") ) : ?>
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
    </body> 
    <?php wp_footer(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179494342-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-179494342-1');
    </script>

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W78T2MC');</script>
<!-- End Google Tag Manager -->

</html>