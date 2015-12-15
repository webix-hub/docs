
{{memo a form that supports an extended set of elements  }}

The component provides validation and the ability to save user input to the backend database. Check [form](desktop/form.md) documentation for more detailed description.

### Constructor

~~~js
var form = webix.ui({
    view:"form", 
    elements:[
    	{ view:"text", label:"Email" },
        { view:"text", type:"password", label:"Password" },
        {cols:[
            { view:"button", value:"Login", type:"form" },
            { view:"button", value:"Cancel" }
       	]}
    ]
});
~~~

### Where to start

- [Overview of the Form Widget](desktop/form.md)
- [Samples](http://docs.webix.com/samples/13_form/index.html)