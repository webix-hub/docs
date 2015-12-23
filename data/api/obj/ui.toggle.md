
{{memo a two-state button}}

The component is fully customizable and can be used both as a stand-alone view and as a part of a form or a toolbar. Check [toggle](desktop/toggle.md) documentation for more detailed description.

### Constructor

~~~js
var toggle = webix.ui({ 
	view:"toggle", 
   	type:"iconButton", 
   	name:"s4", 
    offIcon:"pause",  
  	onIcon:"play",
    offLabel:"Disabled", 
  	onLabel:"Enabled" 
});
~~~

### Where to start

- [Overview of the Toggle Control](desktop/toggle.md)
- [Samples](http://docs.webix.com/samples/13_form/01_controls)