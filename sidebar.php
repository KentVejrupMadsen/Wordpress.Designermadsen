<div id="sidebar"> 
    <div>
        <div class="not-active" id="scroll-button" v-on:click="currentState()" v-bind:class="{ active:is_active }"> 
            <span v-if="down">  
                <i class="fas fa-chevron-down"></i>
            </span>

            <span v-if="!down"> 
                <i class="fas fa-chevron-up"></i>
            </span>
        </div> 
    </div>
</div>