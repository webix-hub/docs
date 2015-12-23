{{memo a container with scrolls}}

Place it in the layout if you want to have a scroll around few other views (not necessary if you need a scroll in one single view). Check [scrollview](desktop/scrollview.md) documentation for more detailed description.

### Constructor

~~~js
var scrollview = webix.ui({
  view:"scrollview", 
  id:"scrollview", 
  scroll:"y", 
  height: 160, 
  width: 150, body:{
     rows:[
       {template:"Lorem ipsum", autoheight:true},
       {template:"Lorem ipsum dolor sit amet", autoheight:true},
       {template:"Lorem ipsum dolor", autoheight:true},
       {template:"Lorem ipsum dolor sit amet, mentitum", autoheight:true},
       {template:"Lorem ipsum dolor sit", autoheight:true},
     ]
   }
});    
~~~

### Where to start

- [Overview of the Scrollview Widget](desktop/scrollview.md)
- [Samples](http://docs.webix.com/samples/04_template/index.html)