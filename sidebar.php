<div id="sidebar"> 
    <div>
        <div id="scroll-button" v-on:click="currentState()"> 
            <span v-if="down">  
                <i class="fas fa-chevron-down"></i>
            </span>

            <span v-if="!down"> 
                <i class="fas fa-chevron-up"></i>
            </span>
        </div> 
    </div>
</div>