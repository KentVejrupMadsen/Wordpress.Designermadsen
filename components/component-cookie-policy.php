<?php 
    $cookie_policy = get_page_by_title( 'Cookie Policy' );
?>

<?php if( !is_null( $cookie_policy ) ): ?>
    <div id="cookie-policy" 
         class="not-active" 
         v-bind:class="{ active:is_ready, accepted:is_accepted }">

        <div class="containment"> 
            <p> <?php echo $cookie_policy->post_title; ?> </p>
            <p> <?php echo $cookie_policy->post_content; ?> </p>
        </div>

        <!--- Form --->
        <div class="containment">
            <!--- Options ---> 

        </div>

        <div class="containment"> 
            <!-- -->
            <a class="button" v-on:click="return accept;"> Accept </a>
        </div>
    </div>
<?php endif; ?>