{{memo A non-editable combo box with the possibility to select several items at a time.}}

The control combines a non-editable text field with a drop-down list of predefined values. The list is supplied with a customizable 'Select' button to enter selected items to the input. 

Check [multiselect](desktop/multiselect.md) documentation for more detailed description.

### Constructor

~~~js
var multiselect = webix.ui({
 	view:"multiselect", 
  	label:"Participant", 
  	labelWidth:100, 
  	options:[
		{"id":1, "value":"Alex Brown"},
		{"id":2, "value":"Dan Simons"},
		{"id":3, "value":"Gron Alanski"},
		{"id":4, "value":"Dan Alanski"}
	],
  	value:"1,4" 
});
~~~

### Where to start

- [Overview of the Multiselect Control](desktop/multiselect.md)
- [Samples](http://docs.webix.com/samples/60_pro/02_form/)