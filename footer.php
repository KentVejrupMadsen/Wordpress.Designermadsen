        <footer> 
            <nav class="widgets"> 
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Widget Area") ) : ?>
                <?php endif;?>
            </nav>
        </footer>
    </body> 

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177101450-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-177101450-1');
    </script>


    <?php wp_footer(); ?>
</html>