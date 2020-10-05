var cookiePolicyHandler = new Vue(
    {
        el: '#mobile-menu-button',
        data: 
        {
          is_ready: false,
          is_active: false
            
        },
        methods: 
        {
            
        },
        computed:
        {
    
        },
        created: function()
        {
          console.log("loaded mobile menu");
          this.is_ready = true;
        }
      }
);
    
    