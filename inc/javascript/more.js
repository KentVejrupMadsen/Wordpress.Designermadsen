var doc = document.getElementById("relavant");
var Relevant = null;

if( !(doc == null) )
{
    Relevant = new Vue(
      {
          el: '#relavant',
          data: 
          {
            is_ready: false,

            tag_id: [],

            bookmarks:
            [

            ],

            posts:
            [
              
            ]
          },
          methods: 
          {
            more:function( event )
            {
              console.log("more post");

            },

            getBookmarks: function()
            {
              axios.get('https://www.designermadsen.com/wp-json/wp/v2/tags?per_page=100').then(
                (response) => {
                  for( var i = 0; 
                          i < response.data.length; 
                          i++ )
                    {
                    //console.log( response.data[i] );
                      this.selectBookmark( response.data[i].id, 
                                          response.data[i].name, 
                                          response.data[i].link );
                    }
                  }
              );
            },

            appendPosts: function(title, excerpt, link)
            {
              var object = 
              {
                'title': title,
                'excerpt': excerpt,
                'link': link
              };

              this.posts.push( object );

              console.log( this.posts );

            },

            appendBookmark: function( id, title, link )
            {
              var object = 
              {
                'id'   : id,
                'title': title,
                'link' : link
              };

              this.bookmarks.push( object );
            },

            selectBookmark: function( id, title, link )
            {
              page = document.getElementById( 'page-title' );

              a = title.toLowerCase().trim();
              b = page.textContent.toLowerCase().trim();

              if( a === b )
              {
                this.appendBookmark( id, title, link );
              }

            },

            getPosts: function(id)
            {
              posts_url = (('https://www.designermadsen.com/wp-json/wp/v2/posts?tags=').concat( id.toString() ));
              console.log( posts_url );

              axios.get( posts_url ).then(
                (response_posts) => {
                  for( var i = 0; 
                          i < response_posts.data.length; 
                          i++ )
                    {
                      console.log( response_posts.data[i] );

                      this.appendPosts( response_posts.data[i].title.rendered, 
                                        response_posts.data[i].excerpt.rendered, 
                                        response_posts.data[i].link );
                      
                      
                    }
                  }
              );

            }
              
          },
          watch:{
            bookmarks: function(val)
            {
              var i = 0;
              
              for( i = 0; i < val.length; i++ )
              {
                this.getPosts(val[i].id);
              }
            }
          },
          computed:
          {
      
          },

          created: function()
          {
            // Bootstrapping
            console.log("loaded relavant menu");
            this.is_ready = true;

            this.getBookmarks();


  //          var url = ('https://www.designermadsen.com/wp-json/wp/v2/posts?tags=6');
  //          console.log(url);
          }
        }
  );
}
    
    