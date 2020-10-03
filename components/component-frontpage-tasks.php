
<?php 
    $args_assign = array(
    'numberposts' => 4,
    'category'=> 10
    );

    $assignments = get_posts( $args_assign );

    if(! empty( $assignments ) ):
?>

            <div class="sum"> 
                    <h1> Opgaver </h1>
                    <p> Kort summering over de typer af opgaver jeg arbejder med. </p>

                    <div class="containment"> 
                        <?php foreach( $assignments as $assignment ): ?>
                        <a href="<?php echo get_permalink( $assignment->ID ); ?>" class="sum-link"> 
                            <div> 
                                <div class="logo"> 
                                    <?php if( get_the_title( $assignment->ID ) == "Python" ): ?>
                                        <i class="fab fa-python"></i>
                                    <?php endif; ?>

                                    <?php if( get_the_title( $assignment->ID ) == "C#" ): ?>
                                        C#
                                    <?php endif; ?>

                                    <?php if( get_the_title( $assignment->ID ) == "PHP"): ?>
                                        <i class="fab fa-php"></i>
                                    <?php endif; ?>

                                    <?php if( get_the_title( $assignment->ID ) == "Frontend" ): ?>
                                        <i class="fas fa-laptop-code"></i>
                                    <?php endif; ?>

                                </div>
                                <div class="description"> 
                                    <p class="bold"> 
                                        <?php echo get_the_title($assignment->ID); ?>
                                    </p>
                                    <p> 
                                        <?php echo get_the_excerpt( $assignment->ID ); ?>  
                                    </p>
                                </div>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php wp_reset_postdata(); ?>
                    <?php endif; ?>

                <?php 
                    $assignment_posts = get_page_by_title('opgaver');

                    if(! empty( $assignment_posts ) ):
                        $args_assign = array(
                            'numberposts' => 4,
                            'category'=> 10,
                            'post_parent'=>$assignment_posts->ID
                            );
                        
                            $assignments = get_posts( $args_assign );

                ?>
<?php endif; ?>
