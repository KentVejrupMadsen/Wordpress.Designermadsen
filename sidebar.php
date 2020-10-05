<div id="sidebar"> 
    <div>
        <div id="mobile-menu-button" 
             class="not-active"  
             v-bind:class="{ active:is_ready }"> 
            <span> 
                <i class="fas fa-bars"></i>
            </span>
        </div>

        <div id="cookie-policies-button" 
             class="not-active"  
             v-bind:class="{ active:is_ready }"> 
            <span> 
                <i class="fas fa-info-circle"></i>
            </span>
        </div>

        <div class="not-active" 
             id="scroll-button" 
             v-on:click="currentState()" 
             v-bind:class="{ active:is_active }"> 

            <span v-if="down">  
                <i class="fas fa-chevron-down"></i>
            </span>

            <span v-if="!down"> 
                <i class="fas fa-chevron-up"></i>
            </span>
        </div> 
    </div>
</div>

<div id="cookie-policies"> 

</div>