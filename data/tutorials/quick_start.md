Quick Start Guide
=================


Fast start
---

The following steps will take you to your own Webix based app. 

- Create a simple HTML page. Specify **HTML5** doctype for it.

~~~html
<!DOCTYPE HTML>
<html>
    <head>
    <link rel="stylesheet" href="http://cdn.webix.com/edge/webix.css" type="text/css"> 
    <script src="http://cdn.webix.com/edge/webix.js" type="text/javascript"></script>  
    </head>
    <body>
        <script type="text/javascript" charset="utf-8">
    /* place for UI configuration */
        </script>
    </body>
</html>
~~~

- Define the UI configuration

~~~js
webix.ui({
  rows:[
      { view:"template", 
        type:"header", template:"My App!" },
      { view:"datatable", 
        autoConfig:true, 
        data:{
          title:"My Fair Lady", year:1964, votes:533848, rating:8.9, rank:5
        }
      }
  ]
});
~~~

And **that is all**. Just open the page in a browser and you have a working mini app.

[<img src='tutorials/very_simple_app.png' target='_blank'>](http://webix.com/snippet/cb3c12b4)

## What's next

  - [Read a more detailed introduction to the library](tutorials/quick_start_details.md)

or check one of interactive tutorials

 - [Interactive step-by-step tutorial](http://webix.com/quick-start/introduction.html)
 - [Interactive DataTable tutorial](http://webix.com/quick-start/datatable.html)
 - [Interactive Form tutorial](http://webix.com/quick-start/controlsguide.html)



  

@index:
- tutorials/quick_start_details.md