var scrollButton = new Vue({
    el: '#scroll-button',
    data: {
        down:true,
        currentYpos: 0
    },
    methods: {
        currentState: function( msg )
        {
            if( this.down ) 
            {
                console.log('Scroll down');
                this.goDown();
            }  
            else
            {
                console.log('Scroll Up');
                this.goUp();
            }
        },

        goDown: function( event )
        {
            elm = document.getElementById('footer-area');
            elm.scrollIntoView();
        },

        goUp: function( event )
        {
            window.scrollTo(0, 0);
        }
    },
    computed:
    {
        update:
        {
            cache: false,
            get: function()
            {
                this.currentYpos = window.scrollY;
                console.log( this.currentYpos );

                if( this.currentYpos > ( window.innerHeight/2 ))
                {
                    this.down = false;
                }
                else 
                {
                    this.down = true;
                }
            }

        }

    }
  });

window.addEventListener('scroll', function()
{
    scrollButton.update; 
});

