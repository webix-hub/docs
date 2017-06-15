
{{memo a movable layout component that can contain other components inside}}

Portlet can include any content and be dragged to any position. It allows placing several components on the page at once. 
Check [portlet](desktop/portlet.md) documentation for more detailed description.

### Constructor

~~~js
var portlet = webix.ui({  
    type:"space",
  	rows:[
    	{ view:"portlet", body:{
			template:"row 1"
		}},
		{ view:"portlet", body:{
			template:"row 2"
		}},
    	{ view:"portlet", body:{
			template:"row 3"
		}}
   	]
});
~~~

### Where to start

- [Overview of the Portlet Widget](desktop/portlet.md)
- [Samples](http://docs.webix.com/samples/60_pro/09_portlet/index.html)

@seolinktop: [ui library](https://webix.com)
@seolink: [javascript drag and drop library](https://webix.com/widget/portlet/)