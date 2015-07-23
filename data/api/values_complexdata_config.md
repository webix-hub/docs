complexData
=============

@short: enables complex data parsing mode
	

@type: boolean
@example:

var form = webix.ui({
    view:"form", complexData:true, elements:[
      { view:"text", name:"user.firstname"},
      { view:"text", name:"user.lastname"}
    ]
});

form.setValues({
    user:{
        firstname:"Mark",
        lastname:"Varuno"
    }
})


@template:	api_config

@relatedapi:
	api/values_setvalues.md
    api/values_getvalues.md
@relatedsample:
	07_property/04_complex_values.html
    13_form/02_api/14_complex_values.html
@descr:

In this mode it is possible to use complex data object for getValues and setValues operations.


