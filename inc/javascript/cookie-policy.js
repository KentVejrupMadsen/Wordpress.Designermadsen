var cookiePolicy = new Vue(
  {
    el: '#cookie-policy',
    data: 
    {
      is_ready: false,
      is_accepted: false
          
    },
    methods: 
    {
        
    },
    computed:
    {
      changeState: 
      {
        cache: false,
        get: function() 
        {
          this.is_accepted = !this.is_accepted;

          return this.is_accepted;
        }
      },

      accept: 
      {
        cache: false,
        get: function() 
        {
          this.changeState;

          

          return this.is_accepted;
        }
      },
      
    },

    created: function()
    {
      this.is_ready = true;
    }
  }
);


var cookiePolicyHandler = new Vue(
{
    el: '#cookie-policies-button',
    data: 
    {
      is_ready: false
        
    },
    methods: 
    {
        
    },
    computed:
    {
      is_clicked: {
        cache:false,
        get: function()
        {
          return cookiePolicy.changeState;
        }
      }

    },
    created: function()
    {
      console.log("loaded cookie policy");
      this.is_ready = true;
    }
  }
);