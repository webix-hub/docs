{{memo a wrapper that transforms a widget into a form input}}

The control allows placing other control or a widget into an area with a label and making it look and behave as a default form input. Check [FormInput](desktop/forminput.md) documentation for a more detailed description.

### Constructor

~~~js
// a widget to be transformed into a form input
var list1 = { 
    view:"dbllist", 
    data:[
        {id:"1", value:"Guest"},
        {id:"2", value:"Member"},
        {id:"3", value:"Moderator"}
    ]
};

// form input initialization
var forminput = webix.ui({
 	view:"forminput", 
    name:"access", 
    body:list1, 
    labelWidth: 140,
    labelAlign:"right", 
    label:"Access levels" 
});
~~~

### Where to start

- [Overview of the FormInput Control](desktop/forminput.md)
- [Samples](http://docs.webix.com/samples/13_form/01_controls/25_dbllist.html)
