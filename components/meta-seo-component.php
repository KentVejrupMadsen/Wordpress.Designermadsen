<?php if( function_exists( 'get_field' ) ): ?>

<?php 
    $meta_description = get_field("_description");
?>
    <?php if( $meta_description ): ?>
        <meta name="description" content="<?php echo $meta_description; ?>" />  
    <?php endif; ?>

    <?php $meta_author = get_field("_author"); ?>
    <?php if( $meta_author ): ?>
        <meta name="author" content="<?php echo $meta_author; ?>" />  
    <?php endif; ?>

<?php endif; ?>

<?php $all_tags = get_the_tags(); 
      $concat_tags = '';
?>
<?php if( $all_tags ): ?>
    <?php foreach( $all_tags as $tag ): ?>
        <?php $concat_tags = $concat_tags . $tag->name . ', ';  ?>
    <?php endforeach; ?>

    <meta name="keywords" content="<?php echo $concat_tags;?>" />
<?php endif; ?>