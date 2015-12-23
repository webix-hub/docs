
{{memo a wrapper which renders an HTML fieldset}}

The control presents a standard fieldset that combines several sense-connected UI elements inside itself. Check [fieldset](desktop/fieldset.md) documentation for more detailed description.

### Constructor

~~~js
var fieldset = webix.ui({
 	view:"fieldset", 
  	label:"Field Set 1",
  	body:{
		rows:[
			{ view:"text", label:"Email"},
			{ view:"text", label:"Password"}
		]
 	}
});
~~~

### Where to start

- [Overview of the Fieldset Control](desktop/fieldset.md)
- [Samples](http://docs.webix.com/samples/13_form/05_extras/)

