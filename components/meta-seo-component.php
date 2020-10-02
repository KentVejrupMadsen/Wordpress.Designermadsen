<?php if( function_exists( 'get_field' ) ): ?>

<?php 
    $meta_description = get_field("_command");
?>
    <?php if( $meta_description ): ?>
        <meta name="description" content="<?php echo $meta_description; ?>" />  
    <?php endif; ?>


    <?php $meta_author = get_field("_author"); ?>
    <?php if( $meta_author ): ?>
        <meta name="author" content="<?php echo $meta_author; ?>" />  
    <?php endif; ?>
    
<?php endif; ?>