
{{memo a non-editable combo box}}

The control combines a non-editable text field with a drop-down list of predefined values.  Check [richselect](desktop/richselect.md) documentation for more detailed description.

### Constructor

~~~js
var richselect = webix.ui({
    view:"richselect",
   	label:"Choose", 
    value:1, options:[ 
        {id:1, value:"One"}, 
        {id:2, value:"Two"}, 
        {id:3, value:"Three"}
    ]
});
~~~

### Where to start

- [Overview of the Richselect Control](desktop/richselect.md)
- [Samples](http://docs.webix.com/samples/13_form/01_controls)

