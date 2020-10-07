<?php 
   $v = get_page_by_title('opgaver');

   if( $v == null )
   {
      $v = get_page_by_title('tasks');
   }
   
   if( wp_get_post_parent_id( get_the_id() ) == $v->ID ):
?>

   <div id="relavant" 
      class="not-active" 
      v-bind:class="{ active:is_ready }"> 
      <h2> 
         Relevant
      </h2>

         <div class="containment">

               <a v-for="item in posts" 
                  v-bind:href="item.link">
                  <h3>
                     {{ item.title }} 
                  </h3>

                  <span v-html="item.excerpt"> 
                     {{ item.excerpt }} 
                  </span>
               </a> 

         </div>

         <div class="align-center"> 
                  <a class="button" 
                     v-on:click="more"> 
                     More 
                  </a>
         </div>
   </div>

<?php endif; ?>