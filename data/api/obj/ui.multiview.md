
{{memo a container control that keeps a set of views and displays one view at a time }}

The component allows you to divide the page content into multiple groups and display a specific view based on some criteria. Often used in combination with a clickable control to implement tabbar. Check [multiview](desktop/multiview.md) documentation for more detailed description.

### Constructor

~~~js
webix.ui({  
  rows:[
    {
      view:"segmented", id:'tabbar', value: 'View1', multiview:true, options: [
        { value: 'Form',  id: 'View1'},
        { value: 'Info',  id: 'View2'}
      ]
    },    
    {   id:"mymultiview",
        cells:[
            {id:"View1",template:"Form Content"},                       
            {id:"View2", template:"<i>Info about the Form</i>"}
        ]
     }
   ]
});
~~~

### Where to start

- [Overview of the Multiview Widget](desktop/multiview.md)
- [Samples](http://docs.webix.com/samples/20_multiview/index.html)