var cookiePolicyHandler = new Vue(
{
    el: '#cookie-policies-button',
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
      console.log("loaded cookie policy");
      this.is_ready = true;
    }
  });

