print
=============


@todo:
	check and complete
@short:
	prints a view or its part according to the specified settings

@params:

- view 				object,id		the object or id of the view to print
- options			object			a set of printing options, their variety depends on the type of the component	


@example:
//view obj or view id
webix.print($$("datatable1")); 
webix.print("datatable1");
 
//with options
webix.print($$("datatable1"), {mode:"landscape"});



@template:	api_method
@descr:

