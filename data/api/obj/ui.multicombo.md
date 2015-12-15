
{{memo An editable combo box that allows choosing several options from a suggest list at once.}}

The control combines an editable text field with a suggest list that contains predefined options. Each option has a checkbox which is checked if the option is selected.
The list can be supplied with a customizable 'Select' button to enter selected items to the input. 

Check [multicombo](desktop/multicombo.md) documentation for more detailed description.

### Constructor

~~~js
var multicombo = webix.ui({
 	view:"multicombo", 
  	label:"To", 
  	value:"1,3", 
  	options:[
 		{"id":1,"value":"Ray M. Parra"},
      	{"id":2,"value":"Sabrina N. Hermann"},
      	{"id":3,"value":"Lane E. Dion"},
      	{"id":4,"value":"Bradly N. Mauro"}
  	]
});
~~~

### Where to start

- [Overview of the Multicombo Control](desktop/multicombo.md)
- [Samples](http://docs.webix.com/samples/60_pro/02_form/)
