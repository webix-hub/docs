{{memo An editable text control with dynamically added removable fields.}}

Check [multitext](desktop/multitext.md) documentation for more detailed description. 

### Constructor

~~~js
var multitext = webix.ui({
  rows:[
 	{ 
		view:"multitext", 
     	id:"multi", 
  		value:'dummy@email.com, mirror@email.com', 
     	label:"Email" 
    }
  ]
});
~~~

### Where to start

- [Overview of the Multitext Control](desktop/multitext.md)
- [Samples](http://docs.webix.com/samples/60_pro/02_form/01_multitext.html)