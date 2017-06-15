{{memo an organizational chart widget for creating hierarchical diagrams}}

The component supports data loading from different sources. You can customize the look and feel of Organogram items by using templates, 
uniting child elements of items into list blocks and redefining the applied css styles.
It's also possible to create your own css style for Organogram. Check desktop/organogram.md documentation for more detailed description.

### Constructor

~~~js
var organogram = new webix.ui({
  view:"organogram",
  data: [
     {id:"1", value:"Item 1", data:[
		{ id:"1.1", value:"Item 1.1", data:[
			{id:"1.1.1", value:"Item 1.1.1", data:[]},
		]},
		{ id:"1.2", value:"Item 1.2", data:[]},
		{ id:"1.3", value:"Item 1.3", data:[
			{ id:"1.3.1", value:"Item 1.3.1", data:[]}
		]},
	]}
  ]
});
~~~

### Where to start

- [Overview of the Organogram Widget](desktop/organogram.md)
- [Samples](http://docs.webix.com/samples/60_pro/07_organogram/index.html)




@seolinktop: [javascript component library](https://webix.com)
@seolink: [organogram javascript](https://webix.com/widget/organogram/)