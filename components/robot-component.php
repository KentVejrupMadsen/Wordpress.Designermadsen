<?php if( function_exists( 'get_field' ) ): ?>

<?php 
    $robot_txt = get_field("_command");
?>
    <?php if($robot_txt): ?>
        <meta name="robots" content="<?php echo $robot_txt; ?>" /> 
    <?php endif; ?>

<?php endif; ?>