
{{memo an editable combo box}}

The control combines an editable text field with a drop-down list of predefined values. Provides autocomplete feature that suggests possible matches while a user types in the text field. Check [combo](desktop/combo.md) documentation for more detailed description.

### Constructor

~~~js
var combo = webix.ui({
	view:"combo", 
	label: 'Combo',
	value:"One", 
	yCount:"3", 
	options:["One", "Two", "Three"]
});
~~~

### Where to start

- [Overview of the Combo Control](desktop/combo.md)
- [Samples](http://docs.webix.com/samples/13_form/01_controls)