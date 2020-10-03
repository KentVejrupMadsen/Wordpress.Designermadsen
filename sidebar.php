<div id="sidebar"> 
    <div>
        <div id="scroll-button" v-on:click="currentState()"> 
            <span v-if="down">  
                <i class="fas fa-long-arrow-alt-down"></i>
            </span>

            <span v-if="!down"> 
                <i class="fas fa-long-arrow-alt-up"></i>
            </span>
        </div> 
    </div>
</div>