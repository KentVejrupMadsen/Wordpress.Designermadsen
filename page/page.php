<?php if( is_singular() ): ?>

    <?php if( is_front_page() ): ?>
        <?php // is frontpage ?>
        <?php include 'frontpage.php' ?>

    <?php else: ?>
        <?php // is a post ?>
        <?php if( is_page() ): ?>
            <?php include 'component-page.php' ?>
        <?php endif;?>

        <?php // is a post ?>
        <?php if( is_single() ): ?>
            <?php include 'component-post.php' ?>
        <?php endif;?>

        <?php // is a category ?>
        <?php if( is_category() ): ?>
            <?php include 'component-category.php' ?>
        <?php endif;?>

        <?php // is a tag ?>
        <?php if( is_tag() ): ?>
            <?php include 'component-category.php' ?>
        <?php endif;?>
        

    <?php endif; ?>

<?php endif;